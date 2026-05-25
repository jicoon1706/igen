@extends('prototype2.layout')
@section('title', 'IGEN VERITAS | Home')
@section('content')
<style>
/* ── Hero ── */
.p2-hero {
    position: relative; min-height: 100vh;
    display: flex; align-items: center;
    overflow: hidden; background: #080b14;
}
#p2-canvas { position: absolute; inset: 0; width: 100%; height: 100%; }
.hero-inner {
    position: relative; z-index: 10;
    padding: 0 64px; max-width: 900px;
}
@media(max-width:767px){ .hero-inner { padding: 0 28px; } }

/* Character reveal */
.char-wrap { overflow: hidden; display: inline-block; }
.char { display: inline-block; transform: translateY(110%); animation: charUp 0.7s cubic-bezier(0.4,0,0.2,1) forwards; }
@keyframes charUp { to { transform: translateY(0); } }

.hero-eyebrow { opacity: 0; animation: fadeInDown 0.6s ease 0.3s forwards; }
@keyframes fadeInDown { from { opacity:0; transform: translateY(-12px); } to { opacity:1; transform: translateY(0); } }
.hero-sub { opacity: 0; animation: fadeIn 0.8s ease 1.2s forwards; }
.hero-ctas { opacity: 0; animation: fadeIn 0.8s ease 1.5s forwards; }
@keyframes fadeIn { to { opacity: 1; } }

/* Scroll cue */
.scroll-cue {
    position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%);
    display: flex; flex-direction: column; align-items: center; gap: 8px;
    color: rgba(167,139,250,0.5); font-size: 10px; letter-spacing: 0.15em; text-transform: uppercase;
    z-index: 10;
}
.scroll-cue-line { width: 1px; height: 40px; background: linear-gradient(to bottom, rgba(167,139,250,0.5), transparent); animation: scrollPulse 2s ease-in-out infinite; }
@keyframes scrollPulse { 0%,100%{ opacity:0.4; transform:scaleY(1); } 50%{ opacity:1; transform:scaleY(0.6); } }

/* ── Stats Band ── */
.p2-stats { background: #ffffff; border-top: 1px solid rgba(124,58,237,0.12); border-bottom: 1px solid rgba(124,58,237,0.12); }
.stats-grid { display: grid; grid-template-columns: repeat(4,1fr); }
@media(max-width:640px){ .stats-grid { grid-template-columns: repeat(2,1fr); } }
.stat-cell {
    padding: 52px 40px; text-align: center;
    border-right: 1px solid rgba(124,58,237,0.12);
    position: relative;
}
.stat-cell:last-child { border-right: none; }
.stat-num {
    font-family: 'Syne', sans-serif;
    font-size: clamp(2.5rem,5vw,4rem); font-weight: 800;
    background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    line-height: 1; margin-bottom: 8px;
}
.stat-label { color: #6b7280; font-size: 12px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; }

/* ── Process ── */
.p2-process { padding: 120px 64px; background: #f9fafb; }
@media(max-width:767px){ .p2-process { padding: 80px 28px; } }
.process-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 2px; margin-top: 64px; }
@media(max-width:767px){ .process-grid { grid-template-columns: 1fr; gap: 2px; } }
.process-card {
    background: #ffffff; padding: 48px 40px;
    border: 1px solid rgba(124,58,237,0.12);
    position: relative; overflow: hidden;
    transition: background 0.4s ease;
}
.process-card:hover { background: rgba(124,58,237,0.04); }
.process-card::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px;
    background: linear-gradient(90deg, var(--clr-purple), var(--clr-violet));
    transform: scaleX(0); transform-origin: left; transition: transform 0.5s ease;
}
.process-card:hover::before { transform: scaleX(1); }
.process-num {
    font-family: 'Syne', sans-serif; font-size: 5rem; font-weight: 800;
    color: rgba(124,58,237,0.08); line-height: 1; margin-bottom: 24px;
    position: absolute; top: 24px; right: 24px;
}
.process-icon {
    width: 48px; height: 48px; border-radius: 12px;
    background: rgba(124,58,237,0.1); border: 1px solid rgba(124,58,237,0.18);
    display: flex; align-items: center; justify-content: center;
    color: #7c3aed; margin-bottom: 28px;
    transition: all 0.3s ease;
}
.process-card:hover .process-icon { background: #7c3aed; color: #fff; }
.process-card h3 { font-family:'Syne',sans-serif; font-size: 1.2rem; font-weight: 700; margin-bottom: 12px; color: #111827; }
.process-card p { color: #6b7280; font-size: 13px; line-height: 1.8; }

/* ── Why ── */
.p2-why { padding: 120px 64px; background: #ffffff; }
@media(max-width:767px){ .p2-why { padding: 80px 28px; } }
.why-split { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; margin-top: 64px; }
@media(max-width:900px){ .why-split { grid-template-columns: 1fr; gap: 48px; } }
.why-features { display: flex; flex-direction: column; gap: 4px; }
.why-feat {
    display: flex; align-items: flex-start; gap: 20px;
    padding: 24px; border-radius: 14px; border: 1px solid transparent;
    transition: all 0.3s ease; cursor: default;
}
.why-feat:hover { background: rgba(124,58,237,0.05); border-color: rgba(124,58,237,0.12); }
.why-feat-icon {
    width: 44px; height: 44px; border-radius: 12px; flex-shrink: 0;
    background: rgba(124,58,237,0.1); display: flex; align-items: center; justify-content: center;
    color: #7c3aed;
}
.why-feat h4 { font-weight: 700; margin-bottom: 4px; font-size: 15px; color: #111827; }
.why-feat p { color: #6b7280; font-size: 13px; line-height: 1.7; }
.why-visual {
    background: rgba(124,58,237,0.04);
    border: 1px solid rgba(124,58,237,0.12); border-radius: 20px;
    padding: 48px 40px; text-align: center;
}
.why-tech-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 12px; margin-top: 32px; }
.tech-chip {
    background: #f9fafb; border: 1px solid rgba(124,58,237,0.15); border-radius: 10px;
    padding: 16px 12px; text-align: center; font-size: 11px; font-weight: 600;
    color: #6b7280; transition: all 0.3s ease;
}
.tech-chip:hover { border-color: rgba(124,58,237,0.4); color: #7c3aed; background: rgba(124,58,237,0.05); }

/* ── CTA ── */
.p2-cta-band {
    padding: 120px 64px; text-align: center;
    background: #080b14;
    position: relative; overflow: hidden;
}
@media(max-width:767px){ .p2-cta-band { padding: 80px 28px; } }
.p2-cta-band::before {
    content:''; position: absolute; top: -200px; left: 50%; transform: translateX(-50%);
    width: 700px; height: 700px;
    background: radial-gradient(circle, rgba(124,58,237,0.28) 0%, transparent 70%);
    pointer-events: none;
}
.cta-band-title {
    font-family: 'Syne', sans-serif;
    font-size: clamp(2.5rem,6vw,4.5rem); font-weight: 800; line-height: 1.05;
    color: #ffffff;
    margin-bottom: 24px; position: relative; z-index: 1;
}

/* Hero text overrides for dark bg */
.p2-hero h1 { color: #ffffff !important; }
.p2-hero h1 span[style*="color:#111827"] { color: #ffffff !important; }
.p2-hero h1 span[style*="color:#d1d5db"] { color: rgba(255,255,255,0.18) !important; }
.p2-hero h1 span[style*="background:linear-gradient(135deg,#7c3aed"] {
    background: linear-gradient(135deg,#a78bfa,#c4b5fd) !important;
    -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important;
}
.p2-hero .hero-sub { color: rgba(226,232,240,0.65) !important; }
.p2-hero .p2-btn-ghost { border-color: rgba(167,139,250,0.3) !important; color: #a78bfa !important; }
/* CTA band text overrides for dark bg */
.p2-cta-band .p2-label { border-color: rgba(167,139,250,0.3); background: rgba(124,58,237,0.15); color: #a78bfa; }
.p2-cta-band p { color: rgba(226,232,240,0.6) !important; }
.p2-cta-band .p2-btn-ghost { border-color: rgba(167,139,250,0.3) !important; color: #a78bfa !important; }
.p2-cta-band .cta-band-title span { background: linear-gradient(135deg,#a78bfa,#c4b5fd); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
</style>

<!-- ── HERO ── -->
<section class="p2-hero">
    <canvas id="p2-canvas"></canvas>

    <div class="hero-inner">
        <div class="hero-eyebrow p2-label" style="margin-bottom:32px;border-color:rgba(167,139,250,0.3);background:rgba(124,58,237,0.15);color:#a78bfa;">
            <span style="width:6px;height:6px;border-radius:50%;background:#a78bfa;animation:ping 1.5s infinite;"></span>
            Now Accepting Projects — 2026
        </div>

        <h1 style="font-family:'Syne',sans-serif;font-size:clamp(3rem,8vw,6.5rem);font-weight:800;line-height:0.95;letter-spacing:-0.03em;margin-bottom:28px;color:#111827;">
            <div class="char-wrap"><span class="char" style="animation-delay:0.4s;">We</span></div>
            <div class="char-wrap"><span class="char" style="animation-delay:0.5s;">&nbsp;Build</span></div><br>
            <div class="char-wrap" style="display:inline-block"><span class="char p2-gradient-text" style="animation-delay:0.65s;-webkit-text-fill-color:transparent;background:linear-gradient(135deg,#7c3aed,#d8b4fe);-webkit-background-clip:text;">Digital</span></div>
            <div class="char-wrap" style="display:inline-block"><span class="char" style="animation-delay:0.75s;color:#111827;">&nbsp;Futures</span></div><br>
            <div class="char-wrap"><span class="char" style="color:#d1d5db;animation-delay:0.9s;">That Deliver.</span></div>
        </h1>

        <p class="hero-sub" style="font-size:1.1rem;color:#6b7280;max-width:520px;line-height:1.75;margin-bottom:40px;">
            Reliable, scalable web & mobile solutions crafted with purpose — built to elevate your business and drive sustainable, measurable growth.
        </p>

        <div class="hero-ctas" style="display:flex;gap:16px;flex-wrap:wrap;">
            <a href="{{ route('prototype2.contact') }}" class="p2-btn-primary">
                Start a Project
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="{{ route('prototype2.services') }}" class="p2-btn-ghost">Explore Services</a>
        </div>
    </div>

    <div class="scroll-cue">
        <span>Scroll</span>
        <div class="scroll-cue-line"></div>
    </div>
</section>

<!-- ── STATS ── -->
<div class="p2-stats">
    <div class="stats-grid">
        @foreach([['120+','Projects Delivered'],['8+','Years Experience'],['99%','Client Satisfaction'],['50+','Happy Clients']] as $i=>$s)
        <div class="stat-cell p2-reveal" style="transition-delay:{{ $i*0.1 }}s;">
            <div class="stat-num p2-count" data-target="{{ (int)$s[0] }}">0</div>
            <div class="stat-label">{{ $s[1] }}</div>
        </div>
        @endforeach
    </div>
</div>

<!-- ── PROCESS ── -->
<section class="p2-process">
    <div style="max-width:1100px;margin:0 auto;">
        <div class="p2-reveal">
            <span class="p2-label">Our Process</span>
            <h2 style="font-family:'Syne',sans-serif;font-size:clamp(2rem,4vw,3.2rem);font-weight:800;margin-top:20px;line-height:1.1;">
                How We <span class="p2-gradient-text">Work</span>
            </h2>
            <p style="color:var(--clr-muted);margin-top:12px;max-width:480px;font-size:14px;line-height:1.8;">A proven 3-step process turning your idea into a world-class digital product.</p>
        </div>

        <div class="process-grid p2-reveal" style="transition-delay:0.2s;">
            @foreach([
                ['01','Discovery & Strategy','We deep-dive into your goals and craft a precise roadmap tailored to your vision.','M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                ['02','Design & Development','We engineer your solution with precision — clean code, elegant UI, seamless UX.','M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'],
                ['03','Launch & Growth','We deploy with care and continue to optimize, support, and scale your product.','M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'],
            ] as $step)
            <div class="process-card">
                <div class="process-num">{{ $step[0] }}</div>
                <div class="process-icon">
                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $step[3] }}"/></svg>
                </div>
                <h3>{{ $step[1] }}</h3>
                <p>{{ $step[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ── WHY US ── -->
<section class="p2-why">
    <div style="max-width:1100px;margin:0 auto;">
        <div class="p2-reveal">
            <span class="p2-label">Why Choose Us</span>
            <h2 style="font-family:'Syne',sans-serif;font-size:clamp(2rem,4vw,3.2rem);font-weight:800;margin-top:20px;line-height:1.1;">
                Why <span class="p2-gradient-text">IGEN VERITAS</span>
            </h2>
        </div>
        <div class="why-split">
            <div class="why-features p2-reveal-left" style="transition-delay:0.15s;">
                @foreach([
                    ['Lightning Fast','Optimized for exceptional performance — sub-2-second load times.','M13 10V3L4 14h7v7l9-11h-7z'],
                    ['Secure & Reliable','Enterprise-grade security built into every project from day one.','M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ['Client-Obsessed','We treat every project as our own — with full dedication and transparency.','M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                ] as $f)
                <div class="why-feat">
                    <div class="why-feat-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $f[2] }}"/></svg>
                    </div>
                    <div>
                        <h4>{{ $f[0] }}</h4>
                        <p>{{ $f[1] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="why-visual p2-reveal-right" style="transition-delay:0.25s;">
                <span class="p2-label" style="margin-bottom:16px;display:inline-flex;">Technology Stack</span>
                <div class="why-tech-grid">
                    @foreach(['Laravel','React','Vue.js','Flutter','Node.js','MySQL','Tailwind','AWS','Firebase'] as $t)
                    <div class="tech-chip">{{ $t }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── CTA ── -->
<section class="p2-cta-band">
    <div style="max-width:700px;margin:0 auto;position:relative;z-index:1;" class="p2-reveal">
        <span class="p2-label" style="margin-bottom:28px;display:inline-flex;">Let's Work Together</span>
        <h2 class="cta-band-title">Ready to Build<br><span class="p2-gradient-text">Something Great?</span></h2>
        <p style="color:var(--clr-muted);font-size:1rem;margin-bottom:40px;line-height:1.8;">
            Turn your vision into a world-class digital product. Book a free 30-minute consultation — no strings attached.
        </p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="{{ route('prototype2.contact') }}" class="p2-btn-primary">Book a Free Call</a>
            <a href="{{ route('prototype2.services') }}" class="p2-btn-ghost">See Our Services</a>
        </div>
    </div>
</section>

@push('scripts')
<style>
@keyframes ping { 75%,100%{transform:scale(2);opacity:0} }
</style>
<script>
// Particle canvas
(function(){
    const canvas = document.getElementById('p2-canvas');
    const ctx = canvas.getContext('2d');
    let W, H, particles = [];
    function resize(){ W = canvas.width = canvas.offsetWidth; H = canvas.height = canvas.offsetHeight; }
    window.addEventListener('resize', resize); resize();
    for(let i=0;i<90;i++) particles.push({
        x: Math.random()*2000, y: Math.random()*1000,
        vx:(Math.random()-0.5)*0.25, vy:(Math.random()-0.5)*0.25,
        r: Math.random()*1.5+0.3, a: Math.random()
    });
    function draw(){
        ctx.clearRect(0,0,W,H);
        particles.forEach(p=>{
            p.x+=p.vx; p.y+=p.vy;
            if(p.x<0)p.x=W; if(p.x>W)p.x=0;
            if(p.y<0)p.y=H; if(p.y>H)p.y=0;
            ctx.beginPath(); ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
            ctx.fillStyle=`rgba(124,58,237,${p.a*0.35})`; ctx.fill();
        });
        // draw connections
        for(let i=0;i<particles.length;i++){
            for(let j=i+1;j<particles.length;j++){
                const dx=particles[i].x-particles[j].x, dy=particles[i].y-particles[j].y;
                const d=Math.sqrt(dx*dx+dy*dy);
                if(d<120){
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x,particles[i].y);
                    ctx.lineTo(particles[j].x,particles[j].y);
                    ctx.strokeStyle=`rgba(124,58,237,${0.08*(1-d/120)})`;
                    ctx.lineWidth=0.6; ctx.stroke();
                }
            }
        }
        requestAnimationFrame(draw);
    }
    draw();
})();

// Counter
(function(){
    const els = document.querySelectorAll('.p2-count');
    const suffixes = ['+',' +','%','+'];
    const io = new IntersectionObserver(entries=>{
        entries.forEach(e=>{
            if(e.isIntersecting && !e.target.dataset.done){
                e.target.dataset.done='1';
                const target=parseInt(e.target.dataset.target);
                const start=performance.now();
                const dur=1600;
                function tick(now){
                    const p=Math.min((now-start)/dur,1);
                    const eased=1-Math.pow(1-p,4);
                    e.target.textContent=Math.round(eased*target)+e.target.closest('.stat-cell').querySelector('.stat-label').textContent.match(/[%+]/)?.[0]||'+';
                    if(p<1) requestAnimationFrame(tick);
                }
                requestAnimationFrame(tick);
            }
        });
    },{threshold:0.5});
    els.forEach(el=>io.observe(el));
})();
</script>
@endpush
@endsection
