@extends('prototype2.layout')
@section('title', 'IGEN VERITAS | Contact Us')
@section('content')
<style>
/* Full-screen contact split */
.p2-contact-wrap{
    min-height:100vh; display:grid; grid-template-columns:1fr 1fr;
    background:#f9fafb;
}
@media(max-width:900px){.p2-contact-wrap{grid-template-columns:1fr;}}

/* Left panel (dark — premium agency contact feel) */
.contact-left{
    padding:120px 64px 80px; background:#080b14;
    border-right:1px solid rgba(124,58,237,0.2);
    display:flex; flex-direction:column; justify-content:space-between;
    position:relative; overflow:hidden;
}
@media(max-width:900px){.contact-left{padding:80px 28px 60px;}}
.contact-left::before{
    content:''; position:absolute; bottom:-100px; left:-100px;
    width:400px; height:400px;
    background:radial-gradient(circle,rgba(124,58,237,0.25),transparent 65%);
    pointer-events:none;
}
/* Left panel text — white on dark */
.contact-left h1 { color: #ffffff; }
.contact-left .p2-label { border-color:rgba(167,139,250,0.3); background:rgba(124,58,237,0.15); color:#a78bfa; }
.contact-left > div > p { color: rgba(226,232,240,0.6); }
.contact-info-items{display:flex;flex-direction:column;gap:28px;margin-top:48px;}
.ci-item{display:flex;align-items:flex-start;gap:16px;}
.ci-icon{width:44px;height:44px;border-radius:12px;background:rgba(124,58,237,0.15);border:1px solid rgba(167,139,250,0.2);display:flex;align-items:center;justify-content:center;color:#a78bfa;flex-shrink:0;}
.ci-label{font-size:10px;text-transform:uppercase;letter-spacing:0.12em;color:rgba(167,139,250,0.6);font-weight:600;margin-bottom:4px;}
.ci-value{font-size:15px;font-weight:600;color:#ffffff;}
.ci-value a{color:inherit;text-decoration:none;transition:color 0.2s;}
.ci-value a:hover{color:#a78bfa;}

.response-banner{
    background:rgba(124,58,237,0.12); border:1px solid rgba(167,139,250,0.2);
    border-radius:12px; padding:20px 24px; margin-top:48px;
    display:flex; align-items:center; gap:14px;
}
.response-banner p{font-size:13px;color:rgba(226,232,240,0.6);line-height:1.6;}
.response-banner strong{color:#ffffff;}

/* Right panel — form */
.contact-right{padding:120px 64px 80px;display:flex;flex-direction:column;justify-content:center;background:#f9fafb;}
@media(max-width:900px){.contact-right{padding:60px 28px 80px;}}

/* Floating label inputs */
.fl-group{position:relative;margin-bottom:28px;}
.fl-input{
    width:100%;background:#ffffff;
    border:1px solid #e5e7eb; border-radius:12px;
    padding:22px 20px 10px; color:#111827;
    font-family:'Inter',sans-serif; font-size:14px;
    outline:none; transition:all 0.3s ease; resize:none;
}
.fl-input:focus{border-color:#7c3aed;background:#ffffff;box-shadow:0 0 0 3px rgba(124,58,237,0.1);}
.fl-label{
    position:absolute; top:18px; left:20px;
    font-size:13px; color:#9ca3af; font-weight:500;
    pointer-events:none; transition:all 0.25s cubic-bezier(0.4,0,0.2,1);
}
.fl-input:focus ~ .fl-label,
.fl-input:not(:placeholder-shown) ~ .fl-label{
    top:8px; font-size:10px; letter-spacing:0.06em; text-transform:uppercase; color:#7c3aed;
}
.fl-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
@media(max-width:600px){.fl-row{grid-template-columns:1fr;}}

/* Select */
.fl-select{
    width:100%;background:#ffffff;
    border:1px solid #e5e7eb; border-radius:12px;
    padding:18px 20px; color:#9ca3af;
    font-family:'Inter',sans-serif; font-size:13px;
    outline:none; cursor:pointer; transition:all 0.3s ease;
    appearance:none;
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%237c3aed' viewBox='0 0 24 24'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
    background-repeat:no-repeat; background-position:right 18px center;
}
.fl-select:focus{border-color:#7c3aed;background-color:#ffffff;}
.fl-select option{background:#fff;color:#111827;}

/* Submit button glow */
.contact-submit{
    width:100%; padding:18px; border-radius:12px;
    background:linear-gradient(135deg,var(--clr-purple),#6d28d9);
    color:#fff; font-size:15px; font-weight:700; letter-spacing:0.03em;
    border:none; cursor:pointer; position:relative; overflow:hidden;
    transition:all 0.3s ease;
    box-shadow:0 4px 24px rgba(124,58,237,0.3);
}
.contact-submit:hover{box-shadow:0 8px 40px rgba(124,58,237,0.55);transform:translateY(-2px);}
.contact-submit::after{
    content:''; position:absolute; inset:0;
    background:linear-gradient(135deg,transparent,rgba(255,255,255,0.1));
    opacity:0; transition:opacity 0.3s;
}
.contact-submit:hover::after{opacity:1;}

/* Success state */
.contact-success{
    display:none; flex-direction:column; align-items:center; justify-content:center;
    text-align:center; min-height:400px;
}
.success-icon{
    width:80px; height:80px; border-radius:50%;
    background:linear-gradient(135deg,var(--clr-purple),var(--clr-violet));
    display:flex; align-items:center; justify-content:center;
    box-shadow:0 0 40px rgba(124,58,237,0.4);
    margin-bottom:24px; animation:popIn 0.5s cubic-bezier(0.34,1.56,0.64,1);
}
@keyframes popIn{from{transform:scale(0);opacity:0;}to{transform:scale(1);opacity:1;}}
</style>

<div class="p2-contact-wrap">
    <!-- Left info panel -->
    <div class="contact-left p2-reveal-left">
        <div>
            <span class="p2-label" style="display:inline-flex;margin-bottom:24px;">Get In Touch</span>
            <h1 style="font-family:'Syne',sans-serif;font-size:clamp(2.2rem,4vw,3.5rem);font-weight:800;line-height:1.05;margin-bottom:16px;">
                Let's Build<br><span class="p2-gradient-text">Something Great</span>
            </h1>
            <p style="color:var(--clr-muted);font-size:14px;line-height:1.85;max-width:380px;">
                Have a project in mind? We'd love to hear from you. Reach out and let's start your transformation journey.
            </p>

            <div class="contact-info-items">
                <div class="ci-item">
                    <div class="ci-icon">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <div>
                        <div class="ci-label">Email</div>
                        <div class="ci-value"><a href="mailto:igenveritas@gmail.com">igenveritas@gmail.com</a></div>
                    </div>
                </div>
                <div class="ci-item">
                    <div class="ci-icon">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <div>
                        <div class="ci-label">Phone</div>
                        <div class="ci-value"><a href="tel:+60173103966">+60 17 310 3966</a></div>
                    </div>
                </div>
                <div class="ci-item">
                    <div class="ci-icon">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <div class="ci-label">Location</div>
                        <div class="ci-value">Batu Caves, Selangor, Malaysia</div>
                    </div>
                </div>
            </div>

            <div class="response-banner">
                <span style="font-size:1.3rem;">⚡</span>
                <p><strong>Fast Response Guaranteed.</strong> We typically reply within 24 hours on business days.</p>
            </div>
        </div>

        <!-- Serving regions -->
        <div style="margin-top:48px;">
            <div style="font-size:10px;text-transform:uppercase;letter-spacing:0.12em;color:rgba(167,139,250,0.6);font-weight:600;margin-bottom:16px;">Serving Clients In</div>
            <div style="display:flex;gap:10px;flex-wrap:wrap;">
                @foreach(['🇲🇾 Malaysia','🇸🇬 Singapore','🌏 & Beyond'] as $r)
                <span style="padding:6px 14px;border-radius:999px;border:1px solid rgba(167,139,250,0.2);font-size:12px;font-weight:600;color:rgba(226,232,240,0.5);">{{ $r }}</span>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Right form panel -->
    <div class="contact-right p2-reveal-right" style="transition-delay:0.15s;">
        <div id="contactForm">
            <span class="p2-label" style="display:inline-flex;margin-bottom:28px;">Send a Message</span>
            <h2 style="font-family:'Syne',sans-serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:800;margin-bottom:36px;line-height:1.1;">
                Tell Us About<br>Your <span class="p2-gradient-text">Project</span>
            </h2>

            <form id="p2ContactForm" onsubmit="handleSubmit(event)">
                <div class="fl-row">
                    <div class="fl-group">
                        <input type="text" class="fl-input" id="fname" placeholder=" " required>
                        <label class="fl-label" for="fname">First Name</label>
                    </div>
                    <div class="fl-group">
                        <input type="text" class="fl-input" id="lname" placeholder=" " required>
                        <label class="fl-label" for="lname">Last Name</label>
                    </div>
                </div>
                <div class="fl-group">
                    <input type="email" class="fl-input" id="email" placeholder=" " required>
                    <label class="fl-label" for="email">Email Address</label>
                </div>
                <div class="fl-group">
                    <input type="text" class="fl-input" id="company" placeholder=" ">
                    <label class="fl-label" for="company">Company (Optional)</label>
                </div>
                <div class="fl-group">
                    <select class="fl-select" id="service">
                        <option value="" disabled selected>I need help with...</option>
                        <option value="web">Website / Web App</option>
                        <option value="mobile">Mobile App</option>
                        <option value="uiux">UI / UX Design</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="fl-group">
                    <textarea class="fl-input" id="message" rows="4" placeholder=" " required></textarea>
                    <label class="fl-label" for="message">Describe your project...</label>
                </div>
                <button type="submit" class="contact-submit" id="submitBtn">
                    <span id="btnText">Send Message →</span>
                    <svg id="btnSpinner" style="display:none;width:20px;height:20px;animation:spin 1s linear infinite;margin:0 auto;" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="rgba(255,255,255,0.3)" stroke-width="4"/><path fill="white" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                </button>
            </form>
        </div>

        <!-- Success state -->
        <div class="contact-success" id="contactSuccess">
            <div class="success-icon">
                <svg width="36" height="36" fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            </div>
            <h3 style="font-family:'Syne',sans-serif;font-size:1.8rem;font-weight:800;margin-bottom:12px;">Message Sent!</h3>
            <p style="color:var(--clr-muted);font-size:14px;max-width:320px;line-height:1.75;margin-bottom:28px;">Thank you for reaching out. We'll get back to you within 24 hours.</p>
            <button onclick="resetForm()" class="p2-btn-ghost" style="font-size:13px;">Send Another →</button>
        </div>
    </div>
</div>

@push('scripts')
<style>
@keyframes spin{to{transform:rotate(360deg);}}
</style>
<script>
function handleSubmit(e) {
    e.preventDefault();
    const btn = document.getElementById('submitBtn');
    const txt = document.getElementById('btnText');
    const spin = document.getElementById('btnSpinner');
    btn.disabled = true; txt.style.display='none'; spin.style.display='block';
    setTimeout(() => {
        document.getElementById('contactForm').style.display = 'none';
        const s = document.getElementById('contactSuccess');
        s.style.display = 'flex';
    }, 1500);
}
function resetForm() {
    document.getElementById('p2ContactForm').reset();
    document.getElementById('submitBtn').disabled = false;
    document.getElementById('btnText').style.display = 'block';
    document.getElementById('btnSpinner').style.display = 'none';
    document.getElementById('contactForm').style.display = 'block';
    document.getElementById('contactSuccess').style.display = 'none';
}
</script>
@endpush
@endsection
