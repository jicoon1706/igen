@extends('prototype2.layout')
@section('title', 'IGEN VERITAS | Services')
@section('content')
<style>
.p2-page-header{min-height:50vh;display:flex;align-items:flex-end;padding:140px 64px 80px;background:#080b14;position:relative;overflow:hidden;}
.p2-page-header::after{content:'';position:absolute;top:-80px;right:-80px;width:500px;height:500px;background:radial-gradient(circle,rgba(124,58,237,0.25) 0%,transparent 65%);pointer-events:none;}
@media(max-width:767px){.p2-page-header{padding:120px 28px 60px;}}
.p2-page-header h1 { color:#ffffff; }
.p2-page-header .p2-label { border-color:rgba(167,139,250,0.3); background:rgba(124,58,237,0.15); color:#a78bfa; }
.p2-page-header p { color:rgba(226,232,240,0.6); }

/* Accordion */
.svc-accordion{padding:80px 64px;background:#ffffff;}
@media(max-width:767px){.svc-accordion{padding:60px 28px;}}
.svc-list{margin-top:60px;border:1px solid rgba(124,58,237,0.12);border-radius:16px;overflow:hidden;}
.svc-item{border-bottom:1px solid rgba(124,58,237,0.1);overflow:hidden;background:#ffffff;}
.svc-item:last-child{border-bottom:none;}
.svc-header{
    display:flex;align-items:center;gap:28px;padding:36px 48px;
    cursor:pointer;transition:background 0.3s ease;background:transparent;
    width:100%;text-align:left;border:none;color:#111827;
}
.svc-header:hover{background:rgba(124,58,237,0.04);}
.svc-item.open .svc-header{background:rgba(124,58,237,0.06);}
.svc-num{font-family:'Syne',sans-serif;font-size:1rem;font-weight:800;color:rgba(124,58,237,0.35);width:36px;flex-shrink:0;}
.svc-title{font-family:'Syne',sans-serif;font-size:1.35rem;font-weight:700;flex:1;color:#111827;}
.svc-arrow{width:36px;height:36px;border-radius:50%;border:1px solid var(--clr-border);display:flex;align-items:center;justify-content:center;color:var(--clr-muted);transition:all 0.4s ease;flex-shrink:0;}
.svc-item.open .svc-arrow{background:var(--clr-purple);border-color:var(--clr-purple);color:#fff;transform:rotate(45deg);}
.svc-body{
    max-height:0;overflow:hidden;
    transition:max-height 0.5s cubic-bezier(0.4,0,0.2,1);
}
.svc-item.open .svc-body{max-height:600px;}
.svc-body-inner{
    display:grid;grid-template-columns:1fr 1fr;gap:48px;
    padding:0 48px 48px;align-items:start;
}
@media(max-width:767px){.svc-body-inner{grid-template-columns:1fr;gap:32px;padding:0 28px 36px;}}
.svc-desc{color:#6b7280;font-size:14px;line-height:1.85;margin-bottom:20px;}
.svc-features{display:flex;flex-direction:column;gap:10px;}
.svc-feat{display:flex;align-items:center;gap:10px;font-size:13px;color:#374151;}
.svc-feat::before{content:'';width:6px;height:6px;border-radius:50%;background:#7c3aed;flex-shrink:0;}
.svc-tags{display:flex;flex-wrap:wrap;gap:8px;margin-top:20px;}
.svc-tag{padding:5px 12px;border-radius:999px;font-size:11px;font-weight:600;background:rgba(124,58,237,0.08);color:#7c3aed;border:1px solid rgba(124,58,237,0.2);}

/* Checklist style (matching prototype1) */
.svc-checklist{display:flex;flex-direction:column;gap:16px;margin-bottom:20px;}
.svc-check-item{display:flex;align-items:flex-start;gap:12px;}
.svc-check-icon{width:22px;height:22px;border-radius:50%;background:#ede9fe;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;color:#7c3aed;}
.svc-check-title{font-size:13px;font-weight:700;color:#111827;margin:0;line-height:1.3;}
.svc-check-sub{font-size:11px;color:#6b7280;margin:2px 0 0;line-height:1.4;}
.svc-visual{background:#f9fafb;border:1px solid rgba(124,58,237,0.12);border-radius:14px;padding:32px;min-height:200px;display:flex;flex-direction:column;gap:12px;}
.svc-stat-row{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:8px;}
.svc-stat-box{background:#ffffff;border:1px solid rgba(124,58,237,0.12);border-radius:10px;padding:16px 12px;text-align:center;}
.svc-stat-val{font-family:'Syne',sans-serif;font-size:1.4rem;font-weight:800;color:#7c3aed;}
.svc-stat-lbl{font-size:10px;color:#6b7280;margin-top:2px;text-transform:uppercase;letter-spacing:0.08em;}

/* CTA (dark — closes the page with impact) */
.p2-cta{padding:100px 64px;background:#080b14;text-align:center;position:relative;overflow:hidden;}
.p2-cta::before{content:'';position:absolute;top:-150px;left:50%;transform:translateX(-50%);width:600px;height:600px;background:radial-gradient(circle,rgba(124,58,237,0.25),transparent 70%);pointer-events:none;}
@media(max-width:767px){.p2-cta{padding:60px 28px;}}
.p2-cta h2 { color: #ffffff; }
.p2-cta .p2-label { border-color:rgba(167,139,250,0.3); background:rgba(124,58,237,0.15); color:#a78bfa; }
.p2-cta > div > p { color:rgba(226,232,240,0.6) !important; }
.p2-cta .p2-gradient-text { background:linear-gradient(135deg,#a78bfa,#c4b5fd); -webkit-background-clip:text; -webkit-text-fill-color:transparent; }
.p2-cta .p2-gradient-text { background:linear-gradient(135deg,#a78bfa,#c4b5fd); -webkit-background-clip:text; -webkit-text-fill-color:transparent; }

/* Mini 3-Phone Showcase for Accordion */
.mini-app-showcase { position: relative; width: 100%; height: 260px; display: flex; justify-content: center; align-items: center; margin-top: 20px; }
.mini-phone { position: absolute; width: 90px; border-radius: 18px; padding: 6px; transition: all 0.5s ease; }
.mini-phone .screen { position: relative; background: #fff; border-radius: 14px; overflow: hidden; height: 190px; }
.mini-phone .screen img { width: 100%; height: 100%; object-fit: cover; object-position: top; }

.mini-card-1 { background: linear-gradient(160deg, #e8415a, #c2185b); box-shadow: 0 12px 30px rgba(194,24,91,0.3); transform: translateX(-55px) translateY(5px) rotate(-8deg); z-index: 1; }
.mini-card-2 { background: linear-gradient(160deg, #7ba3c4, #3d6f96); box-shadow: 0 16px 36px rgba(58,111,150,0.35); transform: translateX(0) translateY(-10px) rotate(0deg) scale(1.05); z-index: 3; }
.mini-card-3 { background: linear-gradient(160deg, #f5c518, #cc9200); box-shadow: 0 12px 30px rgba(230,168,0,0.3); transform: translateX(55px) translateY(5px) rotate(8deg); z-index: 2; }

.mini-app-showcase:hover .mini-card-1 { transform: translateX(-65px) translateY(-5px) rotate(-12deg); }
.mini-app-showcase:hover .mini-card-2 { transform: translateX(0) translateY(-15px) rotate(0deg) scale(1.1); }
.mini-app-showcase:hover .mini-card-3 { transform: translateX(65px) translateY(-5px) rotate(12deg); }
</style>

<style>
@keyframes p2HeroZoom { 0%{transform:scale(1.15) translateX(-3%);opacity:0} 100%{transform:scale(1) translateX(0);opacity:1} }
</style>
<section class="p2-page-header">
    {{-- Ghost background image (right side) --}}
    <div style="position:absolute;inset:0;overflow:hidden;pointer-events:none;">
        <img src="{{ asset('images/hero_services.png') }}" alt=""
             style="position:absolute;right:0;top:0;width:65%;height:100%;object-fit:cover;opacity:0.18;animation:p2HeroZoom 10s ease-out forwards;-webkit-mask-image:linear-gradient(to right,transparent 0%,transparent 15%,black 50%);mask-image:linear-gradient(to right,transparent 0%,transparent 15%,black 50%);">
    </div>
    <div style="position:relative;z-index:1;max-width:800px;">
        <span class="p2-label" style="display:inline-flex;margin-bottom:24px;">What We Offer</span>
        <h1 style="font-family:'Syne',sans-serif;font-size:clamp(2.8rem,7vw,5.5rem);font-weight:800;line-height:0.95;letter-spacing:-0.03em;margin-bottom:20px;">
            Smart &amp; Stunning<br><span class="p2-gradient-text">Digital Solutions</span>
        </h1>
        <p style="color:var(--clr-muted);font-size:1rem;max-width:480px;line-height:1.8;">Comprehensive solutions designed to transform your business — click each service to explore.</p>
    </div>
</section>

<section class="svc-accordion" id="services">
    <div style="max-width:1100px;margin:0 auto;">
        <div class="p2-reveal">
            <span class="p2-label" style="display:inline-flex;">Our Services</span>
            <h2 style="font-family:'Syne',sans-serif;font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:800;margin-top:20px;">Click to <span class="p2-gradient-text">Explore</span></h2>
        </div>
        <div class="svc-list p2-reveal" style="transition-delay:0.2s;" id="svcAccordion">

            <!-- Service 01 -->
            <div class="svc-item open">
                <button class="svc-header" onclick="toggleSvc(this)">
                    <span class="svc-num">01</span>
                    <span class="svc-title">Website &amp; Web App Development</span>
                    <span class="svc-arrow">
                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 5v14M5 12h14"/></svg>
                    </span>
                </button>
                <div class="svc-body">
                    <div class="svc-body-inner">
                        <div>
                            <p class="svc-desc">We design and develop modern, responsive websites built for performance. From company profiles and portfolios to full business platforms — every site is fast, accessible, and tailored to your brand.</p>
                            <div class="svc-checklist">
                                <div class="svc-check-item">
                                    <span class="svc-check-icon"><svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                                    <div><p class="svc-check-title">Custom Solutions</p><p class="svc-check-sub">Tailor-made solutions built specifically for your needs</p></div>
                                </div>
                                <div class="svc-check-item">
                                    <span class="svc-check-icon"><svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                                    <div><p class="svc-check-title">Cross-Platform</p><p class="svc-check-sub">Seamless performance across all devices and platforms</p></div>
                                </div>
                                <div class="svc-check-item">
                                    <span class="svc-check-icon"><svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                                    <div><p class="svc-check-title">SEO & Performance</p><p class="svc-check-sub">Optimised for search engines and lightning-fast load times</p></div>
                                </div>
                            </div>
                            <div class="svc-tags">
                                <span class="svc-tag">Laravel</span><span class="svc-tag">React</span><span class="svc-tag">Vue.js</span><span class="svc-tag">Tailwind CSS</span>
                            </div>
                            <div style="margin-top:24px;">
                                <a href="{{ route('prototype2.contact') }}" class="p2-btn-primary" style="font-size:13px;padding:11px 22px;">Get Started →</a>
                            </div>
                        </div>
                        <div class="svc-visual">
                            <div style="font-size:11px;color:var(--clr-muted);font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:8px;">Performance Metrics</div>
                            <div class="svc-stat-row">
                                <div class="svc-stat-box"><div class="svc-stat-val">30+</div><div class="svc-stat-lbl">Sites Built</div></div>
                                <div class="svc-stat-box"><div class="svc-stat-val">&lt;2s</div><div class="svc-stat-lbl">Load Time</div></div>
                                <div class="svc-stat-box"><div class="svc-stat-val">100%</div><div class="svc-stat-lbl">Responsive</div></div>
                            </div>
                            <!-- Mini browser wireframe -->
                            <div style="margin-top:16px;background:rgba(124,58,237,0.05);border:1px solid var(--clr-border);border-radius:10px;overflow:hidden;">
                                <div style="background:rgba(255,255,255,0.04);padding:8px 12px;display:flex;gap:6px;align-items:center;border-bottom:1px solid var(--clr-border);">
                                    <div style="width:8px;height:8px;border-radius:50%;background:#ef4444;opacity:0.7;"></div>
                                    <div style="width:8px;height:8px;border-radius:50%;background:#f59e0b;opacity:0.7;"></div>
                                    <div style="width:8px;height:8px;border-radius:50%;background:#22c55e;opacity:0.7;"></div>
                                    <div style="flex:1;background:rgba(255,255,255,0.05);border-radius:4px;padding:3px 8px;font-size:9px;color:var(--clr-muted);margin-left:4px;">igenveritas.com</div>
                                </div>
                                <div style="padding:16px;display:flex;flex-direction:column;gap:8px;">
                                    <div style="height:8px;background:linear-gradient(90deg,var(--clr-purple),var(--clr-violet));border-radius:4px;width:60%;"></div>
                                    <div style="height:5px;background:rgba(255,255,255,0.07);border-radius:3px;width:80%;"></div>
                                    <div style="height:5px;background:rgba(255,255,255,0.07);border-radius:3px;width:65%;"></div>
                                    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:6px;margin-top:6px;">
                                        <div style="height:40px;background:rgba(124,58,237,0.12);border-radius:6px;border:1px solid var(--clr-border);"></div>
                                        <div style="height:40px;background:rgba(124,58,237,0.12);border-radius:6px;border:1px solid var(--clr-border);"></div>
                                        <div style="height:40px;background:rgba(124,58,237,0.12);border-radius:6px;border:1px solid var(--clr-border);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 02 -->
            <div class="svc-item">
                <button class="svc-header" onclick="toggleSvc(this)">
                    <span class="svc-num">02</span>
                    <span class="svc-title">Mobile App Development</span>
                    <span class="svc-arrow">
                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 5v14M5 12h14"/></svg>
                    </span>
                </button>
                <div class="svc-body">
                    <div class="svc-body-inner">
                        <div>
                            <p class="svc-desc">We build native and cross-platform mobile applications for iOS and Android — intuitive, high-performance apps that users love to open every day.</p>
                            <div class="svc-checklist">
                                <div class="svc-check-item">
                                    <span class="svc-check-icon"><svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                                    <div><p class="svc-check-title">Native iOS & Android Apps</p><p class="svc-check-sub">Fully optimized apps for iPhone, iPad, and Android devices</p></div>
                                </div>
                                <div class="svc-check-item">
                                    <span class="svc-check-icon"><svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                                    <div><p class="svc-check-title">Cross-Platform Solutions</p><p class="svc-check-sub">One codebase, seamless performance across all platforms</p></div>
                                </div>
                                <div class="svc-check-item">
                                    <span class="svc-check-icon"><svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                                    <div><p class="svc-check-title">User-Centric Design</p><p class="svc-check-sub">Beautiful, intuitive interfaces designed for your users</p></div>
                                </div>
                            </div>
                            <div class="svc-tags">
                                <span class="svc-tag">Flutter</span><span class="svc-tag">React Native</span><span class="svc-tag">Swift</span><span class="svc-tag">Kotlin</span>
                            </div>
                            <div style="margin-top:24px;">
                                <a href="{{ route('prototype2.contact') }}" class="p2-btn-primary" style="font-size:13px;padding:11px 22px;">Get Started →</a>
                            </div>
                        </div>
                        <div class="svc-visual">
                            <div style="font-size:11px;color:var(--clr-muted);font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:8px;">App Metrics</div>
                            <div class="svc-stat-row">
                                <div class="svc-stat-box"><div class="svc-stat-val">15+</div><div class="svc-stat-lbl">Apps Live</div></div>
                                <div class="svc-stat-box"><div class="svc-stat-val">4.8★</div><div class="svc-stat-lbl">Avg Rating</div></div>
                                <div class="svc-stat-box"><div class="svc-stat-val">iOS+</div><div class="svc-stat-lbl">Android</div></div>
                            </div>
                            <!-- 3-Phone mockup -->
                            <div class="mini-app-showcase">
                                <div class="mini-phone mini-card-1">
                                    <div class="screen"><img src="{{ asset('images/akie_app_1.png') }}" alt="App Dashboard"></div>
                                </div>
                                <div class="mini-phone mini-card-2">
                                    <div class="screen"><img src="{{ asset('images/akie_burger_app.png') }}" alt="App Detail"></div>
                                </div>
                                <div class="mini-phone mini-card-3">
                                    <div class="screen"><img src="{{ asset('images/akie_app_4.png') }}" alt="App Orders"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 03 -->
            <div class="svc-item">
                <button class="svc-header" onclick="toggleSvc(this)">
                    <span class="svc-num">03</span>
                    <span class="svc-title">UI / UX Design</span>
                    <span class="svc-arrow">
                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 5v14M5 12h14"/></svg>
                    </span>
                </button>
                <div class="svc-body">
                    <div class="svc-body-inner">
                        <div>
                            <p class="svc-desc">Beautiful, intuitive interfaces designed with purpose. We craft seamless user experiences backed by research — ensuring every interaction delights and converts.</p>
                            <div class="svc-checklist">
                                <div class="svc-check-item">
                                    <span class="svc-check-icon"><svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                                    <div><p class="svc-check-title">User Research</p><p class="svc-check-sub">Deep diving into user behavior and needs</p></div>
                                </div>
                                <div class="svc-check-item">
                                    <span class="svc-check-icon"><svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                                    <div><p class="svc-check-title">Wireframing & Prototyping</p><p class="svc-check-sub">Interactive mockups to visualize the final product</p></div>
                                </div>
                                <div class="svc-check-item">
                                    <span class="svc-check-icon"><svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                                    <div><p class="svc-check-title">Design Systems</p><p class="svc-check-sub">Scalable component libraries for consistency</p></div>
                                </div>
                            </div>
                            <div class="svc-tags">
                                <span class="svc-tag">Figma</span><span class="svc-tag">Prototyping</span><span class="svc-tag">Design Systems</span>
                            </div>
                            <div style="margin-top:24px;">
                                <a href="{{ route('prototype2.contact') }}" class="p2-btn-primary" style="font-size:13px;padding:11px 22px;">Get Started →</a>
                            </div>
                        </div>
                        <div class="svc-visual">
                            <div style="font-size:11px;color:var(--clr-muted);font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:12px;">Design Capabilities</div>
                            @foreach(['Research & Ideation','Wireframing','Visual Design','Prototyping','Usability Testing'] as $cap)
                            <div style="display:flex;align-items:center;gap:12px;margin-bottom:8px;">
                                <div style="font-size:11px;color:var(--clr-muted);width:140px;flex-shrink:0;">{{ $cap }}</div>
                                <div style="flex:1;height:4px;background:rgba(255,255,255,0.05);border-radius:2px;overflow:hidden;">
                                    <div style="height:100%;background:linear-gradient(90deg,var(--clr-purple),var(--clr-violet));border-radius:2px;width:{{ [90,85,95,80,88][array_search($cap,['Research & Ideation','Wireframing','Visual Design','Prototyping','Usability Testing'])] }}%;"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="p2-cta">
    <div style="max-width:640px;margin:0 auto;position:relative;z-index:1;" class="p2-reveal">
        <span class="p2-label" style="display:inline-flex;margin-bottom:24px;">Ready to Build?</span>
        <h2 style="font-family:'Syne',sans-serif;font-size:clamp(2.2rem,5vw,3.8rem);font-weight:800;line-height:1.05;margin-bottom:20px;">Transform Your<br><span class="p2-gradient-text">Business Today</span></h2>
        <p style="color:var(--clr-muted);font-size:14px;margin-bottom:36px;line-height:1.8;">Let's collaborate to bring your vision to life with our comprehensive digital solutions.</p>
        <a href="{{ route('prototype2.contact') }}" class="p2-btn-primary">Start Your Journey →</a>
    </div>
</section>

@push('scripts')
<script>
function toggleSvc(btn) {
    const item = btn.closest('.svc-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.svc-item').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}
</script>
@endpush
@endsection
