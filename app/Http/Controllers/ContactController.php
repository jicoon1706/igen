<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'company'    => 'nullable|string|max:255',
            'date'       => 'required|string|max:50',
            'time'       => 'required|string|max:50',
            'message'    => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422);
        }

        try {
            $booking = Booking::create([
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'      => $request->email,
                'company'    => $request->company,
                'date'       => $request->date,
                'time'       => $request->time,
                'message'    => $request->message,
            ]);

            $name    = $booking->first_name . ' ' . $booking->last_name;
            $company = $booking->company ? " ({$booking->company})" : '';

            // Fix SSL issue for local Laragon environment
            $apiKey = \Resend\ValueObjects\ApiKey::from(env('RESEND_API_KEY'));
            $baseUri = \Resend\ValueObjects\Transporter\BaseUri::from('api.resend.com');
            $headers = \Resend\ValueObjects\Transporter\Headers::withAuthorization($apiKey);
            
            $client = new \GuzzleHttp\Client([
                'verify' => env('APP_ENV') === 'local' ? false : true,
            ]);
            $transporter = new \Resend\Transporters\HttpTransporter($client, $baseUri, $headers);
            $resend = new \Resend\Client($transporter);

            $resend->emails()->send([
                'from'    => 'IGEN VERITAS <onboarding@resend.dev>',
                'to'      => ['igenveritas@gmail.com'],
                'subject' => "New Booking — {$name} on {$booking->date} at {$booking->time}",
                'html'    => "
                    <div style='font-family:sans-serif;max-width:600px;margin:0 auto;'>
                        <h2 style='color:#7c3aed;'>New Consultation Booking</h2>
                        <table style='width:100%;border-collapse:collapse;'>
                            <tr><td style='padding:8px 0;color:#6b7280;width:140px;'>Name</td><td style='padding:8px 0;font-weight:600;'>{$name}{$company}</td></tr>
                            <tr><td style='padding:8px 0;color:#6b7280;'>Email</td><td style='padding:8px 0;'><a href='mailto:{$booking->email}' style='color:#7c3aed;'>{$booking->email}</a></td></tr>
                            <tr><td style='padding:8px 0;color:#6b7280;'>Date &amp; Time</td><td style='padding:8px 0;font-weight:600;'>{$booking->date} at {$booking->time}</td></tr>
                            <tr><td style='padding:8px 0;color:#6b7280;vertical-align:top;'>Message</td><td style='padding:8px 0;'>" . nl2br(htmlspecialchars($booking->message)) . "</td></tr>
                        </table>
                        <hr style='border:none;border-top:1px solid #e5e7eb;margin:24px 0;'>
                        <p style='color:#9ca3af;font-size:12px;'>Sent from IGEN VERITAS booking system</p>
                    </div>
                ",
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Booking confirmed!',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }
}
