# Switch to prototype1 interface + wire booking form to DB

## Goal

Replace the old multi-page site (homepage / aboutus / services / portfolio / contact) with the single-page `prototype1.blade.php` design, and wire its Alpine.js booking widget to persist real bookings to a new `bookings` table — mirroring the JSON+CSRF pattern the old `ContactController` used.

## Out of scope

- Visual changes to prototype1 beyond what's needed to make the form work.
- Email notifications / admin UI for bookings (DB persistence only).
- Touching `prototype2/` views — they get deleted along with their routes.

## Data model

New migration `create_bookings_table`:

| column        | type             | notes                        |
|---------------|------------------|------------------------------|
| id            | bigIncrements    |                              |
| name          | string           | required                     |
| phone         | string           | required                     |
| email         | string           | required, valid email        |
| message       | text, nullable   | optional from form           |
| booking_date  | date             | YYYY-MM-DD from calendar     |
| booking_time  | string           | e.g. "09:00 AM" from slots   |
| timestamps    |                  |                              |

New model `App\Models\Booking` with `$fillable` = those columns.

Second migration `drop_contacts_table` that `Schema::dropIfExists('contacts')` (down: recreate the original columns). Confirmed by user — destructive but desired.

## Backend

New `App\Http\Controllers\BookingController`:

- `index()` → `view('prototype1')`
- `store(Request)` → validates:
  - `name` required string max:255
  - `phone` required string max:50
  - `email` required email max:255
  - `message` nullable string max:5000
  - `booking_date` required date
  - `booking_time` required string max:50
- On validation fail → `response()->json(['success'=>false,'errors'=>...], 422)`
- On success → `Booking::create(...)` then `response()->json(['success'=>true,'message'=>'...'], 200)`
- On exception → 500 JSON

This matches the JSON envelope the prototype1 frontend will consume.

Delete `App\Http\Controllers\ContactController` and `App\Models\Contact`.

## Routes ([routes/web.php](routes/web.php) — full replacement)

```php
Route::get('/', [BookingController::class, 'index'])->name('homepage');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
```

Drop all other routes (`/aboutus`, `/services`, `/portfolio`, `/contact` GET+POST, the `prototype1` and `prototype2` groups).

## Frontend changes to [resources/views/prototype1.blade.php](resources/views/prototype1.blade.php)

1. **CSRF meta tag** in `<head>`: `<meta name="csrf-token" content="{{ csrf_token() }}">`.

2. **Bind form fields** in step 3 (currently the four `<input>`s have no `name` or Alpine binding — see [prototype1.blade.php:413-431](resources/views/prototype1.blade.php#L413-L431)). Add `x-model` to each:
   - Full Name → `x-model="form.name"`
   - Phone Number → `x-model="form.phone"`
   - Email → `x-model="form.email"`
   - Message textarea → `x-model="form.message"`

3. **Real calendar** (replaces the hardcoded "May 2026" header and mocked `isPast(day) { return day < 10 }` at [prototype1.blade.php:536-538](resources/views/prototype1.blade.php#L536-L538)):
   - Add Alpine state: `currentMonth` (0–11), `currentYear`, initialized to today.
   - Compute `daysInMonth` and `firstDayOffset` (number of empty leading cells) reactively from `currentMonth`/`currentYear`.
   - Replace hardcoded "May 2026" with `x-text` showing `monthName + ' ' + currentYear`.
   - Wire prev/next month chevrons (currently dead buttons at [prototype1.blade.php:353,355](resources/views/prototype1.blade.php#L353-L355)) to decrement/increment month with year rollover. Disable "prev" when on current month/year (no booking in the past).
   - Replace `<template x-for="day in 31">` with `<template x-for="day in daysInMonth">` and the empty leading `<div></div>` cells with a dynamic `x-for` over `firstDayOffset`.
   - Real `isPast(day)`: build a Date from `currentYear/currentMonth/day` and compare against today (strip time).
   - `selectDate(day)` stores `selectedDate` as `{ day, month: currentMonth, year: currentYear }` so it carries full context.
   - Display strings in step 2 / step 3 / step 4 headers (currently hardcoded "May <span x-text='selectedDate'>") update to `x-text="formattedSelectedDate"` — a computed `${monthName} ${day}, ${year}`.

4. **Real `submitBooking()`** (replaces mocked setTimeout at [prototype1.blade.php:550-557](resources/views/prototype1.blade.php#L550-L557)):
   - Build payload: `{ name, phone, email, message, booking_date: 'YYYY-MM-DD', booking_time: selectedTime }`.
   - `fetch('/booking', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': <from meta>, 'Accept': 'application/json' }, body: JSON.stringify(payload) })`.
   - On `result.success` → `step = 4`. On failure → keep `step = 3`, surface error (alert is fine, matching old contact form).
   - `loading` flag toggled around the call.

5. **Reset on "Book another session"** (success screen at [prototype1.blade.php:452](resources/views/prototype1.blade.php#L452)) — also clear `form.*` fields.

## Cleanup (files to delete)

Views: `aboutus.blade.php`, `contact.blade.php`, `services.blade.php`, `portfolio.blade.php`, `homepage.blade.php`, `welcome.blade.php`, `header.blade.php`, `footer.blade.php`, plus directories `resources/views/prototype1/` and `resources/views/prototype2/`.

Code: `app/Http/Controllers/ContactController.php`, `app/Models/Contact.php`.

The original `create_contacts_table` migration file stays (history), but is superseded by the new drop migration.

## Verification

- `php artisan migrate` runs cleanly; `bookings` table exists, `contacts` table dropped.
- Visiting `/` renders prototype1.
- Calendar shows the current month, past days disabled, can navigate forward.
- Submitting the booking form persists a row in `bookings` with correct date/time, and shows the success step.
- Old URLs (`/aboutus`, `/contact`, etc.) return 404.
