@extends('prototype2.layout')
@section('title', 'IGEN VERITAS | About Us')
@section('content')
<style>
/* ── Page Header (dark — dramatic entrance for inner pages) ── */
.p2-page-header {
    min-height: 55vh; display: flex; align-items: flex-end;
    padding: 140px 64px 80px; background: #080b14;
    position: relative; overflow: hidden;
}
@media(max-width:767px){ .p2-page-header { padding: 120px 28px 60px; } }
.p2-page-header::after {
    content:''; position:absolute; top:-100px; right:-100px;
    width:600px; height:600px;
    background: radial-gradient(circle, rgba(124,58,237,0.25) 0%, transparent 65%);
    pointer-events: none;
}
/* Page header text — white on dark */
.p2-page-header h1 { color: #ffffff; }
.p2-page-header .p2-label { border-color:rgba(167,139,250,0.3); background:rgba(124,58,237,0.15); color:#a78bfa; }
.p2-page-header p { color: rgba(226,232,240,0.6); }
.p2-page-header-inner { position:relative; z-index:1; max-width:800px; }

/* ── Story Split ── */
.p2-story { padding: 100px 64px; background: #ffffff; }
@media(max-width:767px){ .p2-story { padding: 60px 28px; } }
.story-split { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center; }
@media(max-width:900px){ .story-split { grid-template-columns:1fr; gap:48px; } }
.story-img-wrap {
    position:relative; border-radius:20px; overflow:hidden;
    border:1px solid rgba(124,58,237,0.12);
}
.story-img-wrap img { width:100%; height:500px; object-fit:cover; display:block; filter:brightness(0.85) saturate(0.8); }
.story-img-wrap::after {
    content:''; position:absolute; inset:0;
    background: linear-gradient(135deg, rgba(124,58,237,0.3) 0%, transparent 60%);
}
.story-badge {
    position:absolute; bottom:28px; right:28px; z-index:2;
    background:rgba(255,255,255,0.95); backdrop-filter:blur(12px);
    border:1px solid rgba(124,58,237,0.15); border-radius:14px; padding:16px 20px;
    display:flex; align-items:center; gap:12px;
}
.story-badge-num { font-family:'Syne',sans-serif; font-size:1.8rem; font-weight:800; color:#7c3aed; }
.story-badge-txt { font-size:11px; color:#6b7280; line-height:1.5; }
.story-highlights { display:flex; flex-direction:column; gap:3px; margin-top:32px; }
.story-hi {
    display:flex; align-items:flex-start; gap:16px;
    padding:20px; border-radius:12px; border:1px solid transparent;
    transition:all 0.3s ease;
}
.story-hi:hover { background:rgba(124,58,237,0.05); border-color:rgba(124,58,237,0.12); }
.story-hi-icon { font-size:1.3rem; flex-shrink:0; margin-top:2px; }
.story-hi h4 { font-weight:700; font-size:14px; margin-bottom:3px; color:#111827; }
.story-hi p { color:#6b7280; font-size:12px; line-height:1.7; }

/* ── Vision Mission ── */
.p2-vismis { padding: 100px 64px; background: #f3f4f6; }
@media(max-width:767px){ .p2-vismis { padding: 60px 28px; } }
.vismis-grid { display:grid; grid-template-columns:1fr 1fr; gap:2px; margin-top:60px; }
@media(max-width:767px){ .vismis-grid { grid-template-columns:1fr; } }
.vismis-card {
    background:#ffffff; padding:56px 48px;
    border:1px solid rgba(124,58,237,0.12); position:relative; overflow:hidden;
}
.vismis-card::before {
    content:''; position:absolute; top:0; left:0; width:100%; height:3px;
    background:linear-gradient(90deg, var(--clr-purple), var(--clr-violet));
}
.vismis-card:first-child::before { background:linear-gradient(90deg, #6d28d9, var(--clr-purple)); }
.vismis-card h3 { font-family:'Syne',sans-serif; font-size:2rem; font-weight:800; margin:20px 0 16px; color:#111827; }
.vismis-card p { color:#6b7280; font-size:14px; line-height:1.85; }
.vismis-icon { width:52px; height:52px; border-radius:14px; background:rgba(124,58,237,0.1); display:flex; align-items:center; justify-content:center; color:#7c3aed; }

/* ── Team Grid (dark — portraits look premium on dark canvas) ── */
.p2-team { padding: 100px 64px; background: #080b14; }
@media(max-width:767px){ .p2-team { padding: 60px 28px; } }
.team-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:2px; margin-top:60px; }
@media(max-width:900px){ .team-grid { grid-template-columns:repeat(2,1fr); } }
.p2-team .p2-label { border-color:rgba(167,139,250,0.3); background:rgba(124,58,237,0.15); color:#a78bfa; }
.p2-team h2 { color: #ffffff; }
.p2-team .p2-gradient-text { background:linear-gradient(135deg,#a78bfa,#c4b5fd); -webkit-background-clip:text; -webkit-text-fill-color:transparent; }
@media(max-width:480px){ .team-grid { grid-template-columns:1fr; } }
.team-card {
    position:relative; overflow:hidden; background:#f3f4f6;
    aspect-ratio:3/4; cursor:pointer;
    border:1px solid rgba(124,58,237,0.1);
}
.team-card img { width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.6s cubic-bezier(0.4,0,0.2,1); filter:grayscale(40%) brightness(0.75); }
.team-card:hover img { transform:scale(1.08); filter:grayscale(0%) brightness(0.7); }
.team-overlay {
    position:absolute; inset:0;
    background:linear-gradient(to top, rgba(8,11,20,0.97) 0%, rgba(8,11,20,0.3) 55%, transparent 100%);
    display:flex; flex-direction:column; justify-content:flex-end;
    padding:28px 24px;
}
.team-name { font-family:'Syne',sans-serif; font-size:1.1rem; font-weight:700; transform:translateY(4px); transition:transform 0.4s ease; }
.team-role { font-size:11px; color:var(--clr-violet); letter-spacing:0.1em; text-transform:uppercase; font-weight:600; margin-top:4px; }
.team-social { display:flex; gap:8px; margin-top:12px; opacity:0; transform:translateY(12px); transition:all 0.4s ease 0.05s; }
.team-card:hover .team-social { opacity:1; transform:translateY(0); }
.team-card:hover .team-name { transform:translateY(0); }
.team-soc-btn { width:32px; height:32px; border-radius:8px; background:rgba(124,58,237,0.15); border:1px solid rgba(124,58,237,0.25); display:flex; align-items:center; justify-content:center; color:#7c3aed; transition:all 0.2s; text-decoration:none; }
.team-soc-btn:hover { background:#7c3aed; color:#fff; border-color:#7c3aed; }

/* ── Values Timeline ── */
.p2-values { padding: 100px 64px; background:#f3f4f6; }
@media(max-width:767px){ .p2-values { padding: 60px 28px; } }
.values-list { display:flex; flex-direction:column; gap:0; margin-top:60px; border:1px solid rgba(124,58,237,0.12); border-radius:16px; overflow:hidden; }
.value-row {
    display:grid; grid-template-columns:80px 1fr;
    border-bottom:1px solid rgba(124,58,237,0.1);
    overflow:hidden; transition:background 0.3s ease;
    background: #ffffff;
}
.value-row:last-child { border-bottom:none; }
.value-row:hover { background:rgba(124,58,237,0.04); }
.value-num {
    padding:36px 24px; border-right:1px solid rgba(124,58,237,0.1);
    font-family:'Syne',sans-serif; font-size:1.5rem; font-weight:800; color:rgba(124,58,237,0.25);
    display:flex; align-items:flex-start; justify-content:center; padding-top:40px;
}
.value-body { padding:36px 40px; }
.value-body h3 { font-family:'Syne',sans-serif; font-size:1.3rem; font-weight:700; margin-bottom:10px; color:#111827; }
.value-body p { color:#6b7280; font-size:13px; line-height:1.8; }
</style>

<!-- ── PAGE HEADER ── -->
<section class="p2-page-header">
    <div class="p2-page-header-inner">
        <span class="p2-label" style="margin-bottom:24px;display:inline-flex;">About Our Journey</span>
        <h1 style="font-family:'Syne',sans-serif;font-size:clamp(2.8rem,7vw,5.5rem);font-weight:800;line-height:0.95;letter-spacing:-0.03em;margin-bottom:20px;">
            We're<br><span class="p2-gradient-text">IGEN VERITAS</span>
        </h1>
        <p style="color:var(--clr-muted);font-size:1.05rem;max-width:540px;line-height:1.8;">
            Harnessing the power of software and innovation to optimize, elevate, and transform businesses in the digital age.
        </p>
    </div>
</section>

<!-- ── STORY ── -->
<section class="p2-story">
    <div style="max-width:1100px;margin:0 auto;">
        <div class="story-split">
            <div class="story-img-wrap p2-reveal-left">
                <img src="{{ asset('images/corporate_about.png') }}" alt="IGEN VERITAS Team">
                <div class="story-badge">
                    <span class="story-badge-num">8+</span>
                    <span class="story-badge-txt">Years Building<br>Digital Excellence</span>
                </div>
            </div>
            <div class="p2-reveal-right" style="transition-delay:0.15s;">
                <span class="p2-label" style="display:inline-flex;margin-bottom:20px;">Our Story</span>
                <h2 style="font-family:'Syne',sans-serif;font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:800;line-height:1.1;margin-bottom:24px;">The Vision Behind<br><span class="p2-gradient-text">IGEN VERITAS</span></h2>
                <div style="display:flex;flex-direction:column;gap:16px;margin-bottom:32px;">
                    <p style="color:var(--clr-muted);font-size:14px;line-height:1.85;"><strong style="color:#fff;">IGEN</strong> represents the spirit of the new generation — born in the digital age, curious, adaptive, and constantly pushing boundaries.</p>
                    <p style="color:var(--clr-muted);font-size:14px;line-height:1.85;"><strong style="color:#fff;">VERITAS</strong> is the Latin word for <strong style="color:var(--clr-violet);">truth</strong> — honesty in communication, integrity in design, and transparency in every solution we build.</p>
                </div>
                <div class="story-highlights">
                    @foreach([['🚀','Fresh Perspective','Innovative ideas brought to life with modern tools and deep technical expertise.'],['💡','Cutting-Edge Tech','We leverage the latest software and AI solutions to stay ahead of the curve.'],['🎯','Client-Focused','Your success is our mission — every decision we make is guided by your goals.']] as $h)
                    <div class="story-hi">
                        <span class="story-hi-icon">{{ $h[0] }}</span>
                        <div><h4>{{ $h[1] }}</h4><p>{{ $h[2] }}</p></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── VISION & MISSION ── -->
<section class="p2-vismis">
    <div style="max-width:1100px;margin:0 auto;">
        <div class="p2-reveal">
            <span class="p2-label" style="display:inline-flex;">Purpose</span>
            <h2 style="font-family:'Syne',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;margin-top:20px;">Direction &amp; <span class="p2-gradient-text">Purpose</span></h2>
        </div>
        <div class="vismis-grid p2-reveal" style="transition-delay:0.2s;">
            <div class="vismis-card">
                <div class="vismis-icon">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3>Our Vision</h3>
                <p>To create a future where businesses operate with clarity, confidence, and control — powered by intelligent technology that works as hard as they do.</p>
            </div>
            <div class="vismis-card">
                <div class="vismis-icon">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3>Our Mission</h3>
                <p>To design powerful, user-focused software that simplifies operations, accelerates growth, and enables organizations to make smarter decisions — every single day.</p>
            </div>
        </div>
    </div>
</section>

<!-- ── TEAM ── -->
<section class="p2-team">
    <div style="max-width:1100px;margin:0 auto;">
        <div class="p2-reveal" style="margin-bottom:0;">
            <span class="p2-label" style="display:inline-flex;">Our People</span>
            <h2 style="font-family:'Syne',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;margin-top:20px;margin-bottom:8px;">Meet The <span class="p2-gradient-text">Visionaries</span></h2>
            <p style="color:var(--clr-muted);font-size:14px;max-width:440px;line-height:1.7;">The brilliant minds shaping digital experiences with passion and precision.</p>
        </div>
        <div class="team-grid p2-reveal" style="transition-delay:0.2s;">
            @foreach([
                ['Syarifuddin Akmal','CEO & Founder','https://images.pexels.com/photos/814133/pexels-photo-814133.jpeg?auto=compress&cs=tinysrgb&w=800','https://www.linkedin.com/in/muhammad-syarifuddin-akmal-azizul-shah-362b432a8/'],
                ['Arif Azlan','Front End Dev','https://images.pexels.com/photos/1779487/pexels-photo-1779487.jpeg?auto=compress&cs=tinysrgb&w=800','https://www.linkedin.com/in/muhammad-arif-bin-azlan-1698a72b8/'],
                ['Ariff Norjihan','UI/UX Designer','https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?auto=format&fit=crop&w=800&q=80','#'],
                ['Harith Zulhairi','Back End Dev','https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=800','#'],
            ] as $m)
            <div class="team-card">
                <img src="{{ asset($m[2]) }}" alt="{{ $m[0] }}" loading="lazy">
                <div class="team-overlay">
                    <div class="team-name">{{ $m[0] }}</div>
                    <div class="team-role">{{ $m[1] }}</div>
                    <div class="team-social">
                        <a href="{{ $m[3] }}" target="_blank" class="team-soc-btn" title="LinkedIn">
                            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.064 2.064 0 110-4.128 2.064 2.064 0 010 4.128zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ── VALUES ── -->
<section class="p2-values">
    <div style="max-width:1100px;margin:0 auto;">
        <div class="p2-reveal">
            <span class="p2-label" style="display:inline-flex;">What Drives Us</span>
            <h2 style="font-family:'Syne',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;margin-top:20px;">Core <span class="p2-gradient-text">Values</span></h2>
        </div>
        <div class="values-list p2-reveal" style="transition-delay:0.2s;">
            @foreach([['01','Innovation','We continuously push boundaries and embrace cutting-edge technologies to deliver forward-thinking solutions.'],['02','Integrity','Transparency and ethical practices form the foundation of everything we do — building lasting trust.'],['03','Excellence','We strive for perfection in every project, delivering exceptional quality that exceeds expectations.']] as $v)
            <div class="value-row">
                <div class="value-num">{{ $v[0] }}</div>
                <div class="value-body">
                    <h3>{{ $v[1] }}</h3>
                    <p>{{ $v[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div style="margin-top:60px;text-align:center;" class="p2-reveal" style="transition-delay:0.3s;">
            <a href="{{ route('prototype2.contact') }}" class="p2-btn-primary">Start Your Journey</a>
        </div>
    </div>
</section>
@endsection
