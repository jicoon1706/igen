@extends('prototype1.layout')

@section('title', 'IGEN VERITAS | Services')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gray-950 min-h-[65vh] flex items-end pb-20 pt-48 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_60%_at_70%_0%,rgba(124,58,237,0.35),transparent)] pointer-events-none"></div>
        <div class="absolute inset-0 opacity-[0.04]" style="background-image:radial-gradient(circle,#a78bfa 1px,transparent 1px);background-size:28px 28px;"></div>
        <!-- Ghost hero image (right) -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <img src="{{ asset('images/hero_services.png') }}" alt="" class="absolute right-0 top-0 w-[65%] h-full object-cover opacity-25" style="animation: heroZoomSvc 10s ease-out forwards; -webkit-mask-image: linear-gradient(to right, transparent 0%, transparent 10%, black 45%); mask-image: linear-gradient(to right, transparent 0%, transparent 10%, black 45%);">
        </div>
        <style>@keyframes heroZoomSvc { 0%{transform:scale(1.2) translateX(-5%);opacity:0} 100%{transform:scale(1) translateX(0);opacity:1} }</style>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-3xl" data-aos="fade-up" data-aos-duration="800">

                <h1 class="font-black text-white leading-[0.9] tracking-tight mb-6" style="font-size:clamp(3rem,7vw,5rem);">
                    Smart &amp; Stunning<br>
                    <span class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 via-violet-300 to-purple-400">Digital Experiences</span>
                </h1>
                <p class="text-gray-400 text-lg leading-relaxed mb-10 max-w-xl">
                    Comprehensive solutions designed to transform your business — from responsive websites to powerful mobile apps.
                </p>
                <button onclick="document.getElementById('services').scrollIntoView({behavior:'smooth'})" class="group inline-flex items-center gap-2 bg-white text-gray-900 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition-all shadow-xl hover:-translate-y-0.5 duration-300">
                    Discover Our Solutions
                    <svg class="w-5 h-5 group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-gray-600">
            <div class="w-px h-12 bg-linear-to-b from-gray-600 to-transparent animate-pulse"></div>
        </div>
    </section>

    <!-- Services Grid -->
    <style>
        .svc-section{background:#f8f7fc;position:relative;overflow:hidden}
        .svc-section::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle,rgba(147,51,234,.055) 1px,transparent 1px);background-size:32px 32px;pointer-events:none}
        .svc-row{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center}
        @media(max-width:900px){.svc-row{grid-template-columns:1fr}}
        .svc-row.reverse .svc-content{order:2}
        .svc-row.reverse .svc-visual{order:1}
        @media(max-width:900px){.svc-row.reverse .svc-content,.svc-row.reverse .svc-visual{order:unset}}
        .svc-badge{display:inline-flex;align-items:center;gap:.5rem;padding:.3rem 1rem;background:rgba(124,58,237,.08);border:1px solid rgba(124,58,237,.18);border-radius:999px;font-size:.72rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#6d28d9;margin-bottom:1.25rem}
        .svc-tag{display:inline-block;padding:.28rem .8rem;border-radius:999px;font-size:.7rem;font-weight:600;background:rgba(124,58,237,.07);color:#6d28d9;border:1px solid rgba(124,58,237,.15)}
        .svc-cta{display:inline-flex;align-items:center;gap:.5rem;background:linear-gradient(135deg,#7c3aed,#a855f7);color:#fff;padding:.75rem 1.6rem;border-radius:999px;font-size:.88rem;font-weight:700;transition:all .3s ease;box-shadow:0 6px 20px rgba(124,58,237,.3);text-decoration:none}
        .svc-cta:hover{box-shadow:0 10px 30px rgba(124,58,237,.45);transform:translateY(-2px)}
        .svc-stat{display:flex;flex-direction:column;align-items:center;justify-content:center;background:#fff;border:1px solid rgba(124,58,237,.12);border-radius:1rem;padding:.9rem 1.4rem;box-shadow:0 4px 14px rgba(0,0,0,.05);min-width:90px}
        .browser-frame{background:#fff;border-radius:12px;box-shadow:0 20px 60px rgba(0,0,0,.12),0 4px 16px rgba(124,58,237,.1);overflow:hidden;border:1px solid #e5e7eb}
        .browser-bar{background:#f3f4f6;padding:10px 14px;display:flex;align-items:center;gap:10px;border-bottom:1px solid #e5e7eb}
        .browser-dots{display:flex;gap:5px}
        .b-dot{width:10px;height:10px;border-radius:50%}
        .browser-url{flex:1;background:#fff;border-radius:20px;padding:4px 12px;font-size:11px;color:#9ca3af;border:1px solid #e5e7eb}
        .svc-check{width:20px;height:20px;border-radius:50%;background:#ede9fe;display:flex;align-items:center;justify-content:center;flex-shrink:0}
        .svc-divider{border:none;border-top:1px solid rgba(124,58,237,.1);margin:0}


    </style>

    <section id="services" class="svc-section py-28">
        <div class="absolute w-[500px] h-[500px] bg-purple-200/20 rounded-full blur-3xl -top-40 -right-40 pointer-events-none"></div>
        <div class="absolute w-[400px] h-[400px] bg-violet-200/15 rounded-full blur-3xl bottom-0 -left-32 pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Header -->
            <div class="text-center mb-24" data-aos="fade-up">

                <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-5 tracking-tight leading-tight">
                    Smart &amp; Stunning<br><span class="text-transparent bg-clip-text bg-linear-to-r from-purple-600 via-violet-500 to-purple-700">Digital Experiences</span>
                </h2>
                <p class="text-gray-500 max-w-xl mx-auto text-lg leading-relaxed">Reliable, fast and user-friendly solutions crafted for modern businesses.</p>
            </div>

            <!-- Row 1 — Website & Web App -->
            <div class="svc-row mb-32" data-aos="fade-up">
                <!-- Content -->
                <div class="svc-content">

                    <h3 class="text-4xl font-black text-gray-900 mb-4 leading-tight">Website &amp;<br>Web App</h3>
                    <p class="text-gray-500 leading-relaxed mb-6 text-[0.97rem]">
                        We design and develop modern, responsive websites built for performance. From company profiles and portfolios to full business platforms — every site is fast, accessible, and tailored to your brand.
                    </p>
                    <ul class="space-y-4 mb-7">
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">Custom Solutions</p><p class="text-gray-500 text-xs mt-0.5">Tailor-made solutions built specifically for your needs</p></div>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">Cross-Platform</p><p class="text-gray-500 text-xs mt-0.5">Seamless performance across all devices and platforms</p></div>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">SEO & Performance</p><p class="text-gray-500 text-xs mt-0.5">Optimised for search engines and lightning-fast load times</p></div>
                        </li>
                    </ul>
                    <div class="flex flex-wrap gap-2 mb-8">
                        <span class="svc-tag">Laravel</span>
                        <span class="svc-tag">Tailwind CSS</span>
                        <span class="svc-tag">MySQL</span>
                        <span class="svc-tag">React</span>
                        <span class="svc-tag">Vue.js</span>
                        <span class="svc-tag">JavaScript</span>
                    </div>
                    <a href="{{ route('prototype1.contact') }}" class="svc-cta">
                        Get Started
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>

                <!-- Browser Mockup -->
                <div class="svc-visual" data-aos="fade-left" data-aos-delay="150">
                    <style>
                        .stacked-cards {
                            position: relative;
                            width: 100%;
                            height: 380px;
                            perspective: 1200px;
                            margin-top: 20px;
                        }
                        .stacked-card {
                            position: absolute;
                            width: 85%;
                            left: 22%;
                            border-radius: 16px;
                            box-shadow: 0 25px 50px rgba(0,0,0,0.15), 0 0 0 1px rgba(124,58,237,0.15);
                            overflow: hidden;
                            transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1); /* Bouncy transition */
                            transform-origin: bottom center;
                            background: white;
                        }
                        .stacked-card img {
                            width: 100%;
                            height: auto;
                            display: block;
                        }
                        
                        /* Permanently Fanned-Out State */
                        .stacked-card:nth-child(1) {
                            top: 0; 
                            transform: translateY(0px) translateX(50px) scale(1.02) rotate(8deg);
                            box-shadow: 0 30px 60px rgba(0,0,0,0.2), 0 0 0 1px rgba(124,58,237,0.2);
                            z-index: 3;
                        }
                        .stacked-card:nth-child(2) {
                            top: 0; 
                            transform: translateY(15px) translateX(-10px) scale(0.96) rotate(-4deg);
                            box-shadow: 0 20px 40px rgba(0,0,0,0.15), 0 0 0 1px rgba(124,58,237,0.2);
                            z-index: 2;
                            opacity: 1;
                        }
                        .stacked-card:nth-child(3) {
                            top: 0; 
                            transform: translateY(40px) translateX(-70px) scale(0.9) rotate(-16deg);
                            box-shadow: 0 15px 30px rgba(0,0,0,0.1), 0 0 0 1px rgba(124,58,237,0.2);
                            z-index: 1;
                            opacity: 1;
                        }

                        /* Subtle Hover Lift */
                        .stacked-cards:hover .stacked-card {
                            transform: translateY(calc(var(--ty, 0px) - 5px)) translateX(var(--tx, 0px)) scale(var(--s, 1)) rotate(var(--r, 0deg));
                        }
                        .stacked-card:nth-child(1) { --ty: 0px; --tx: 50px; --s: 1.02; --r: 8deg; }
                        .stacked-card:nth-child(2) { --ty: 15px; --tx: -10px; --s: 0.96; --r: -4deg; }
                        .stacked-card:nth-child(3) { --ty: 40px; --tx: -70px; --s: 0.9; --r: -16deg; }
                    </style>

                    <div class="stacked-cards group">
                        <!-- Top Card: Sofea -->
                        <div class="stacked-card">
                            <img src="{{ asset('images/sofea_demo.png') }}" alt="Sofea Beauty Demo">
                        </div>
                        <!-- Middle Card: Luxury -->
                        <div class="stacked-card">
                            <img src="{{ asset('images/luxury_demo.png') }}" alt="Luxury Fashion Demo">
                        </div>
                        <!-- Bottom Card: Academy -->
                        <div class="stacked-card">
                            <img src="{{ asset('images/academy_demo.png') }}" alt="Academy Demo">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Row 2 — Mobile App Solutions -->
            <div class="svc-row reverse mb-32" data-aos="fade-up">
                <!-- Phone Mockup Image -->
                <div class="svc-visual relative flex items-center justify-center min-h-[450px]" data-aos="fade-right" data-aos-delay="150">
                    <!-- Gradient Background Blur -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] h-[90%] bg-linear-to-tr from-purple-600/30 via-pink-500/20 to-orange-400/30 blur-[60px] rounded-full pointer-events-none z-0"></div>
                    
                    <!-- Single Provided Image -->
                    <img src="{{ asset('images/mobile_showcase.png') }}" alt="Mobile App Showcase" class="relative z-10 w-[115%] max-w-[700px] h-auto object-contain drop-shadow-[0_20px_40px_rgba(0,0,0,0.2)] transition-transform duration-700 scale-110 hover:scale-[1.15]">
                </div>

                <!-- Content -->
                <div class="svc-content">

                    <h3 class="text-4xl font-black text-gray-900 mb-4 leading-tight">Mobile App<br>Solutions</h3>
                    <p class="text-gray-500 leading-relaxed mb-6 text-[0.97rem]">
                        We build native and cross-platform mobile applications for iOS and Android — intuitive, high-performance apps that users love to open every day.
                    </p>
                    <ul class="space-y-4 mb-7">
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">Native iOS &amp; Android Apps</p><p class="text-gray-500 text-xs mt-0.5">Fully optimized apps for iPhone, iPad, and Android devices</p></div>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">Cross-Platform Solutions</p><p class="text-gray-500 text-xs mt-0.5">One codebase, seamless performance across all platforms</p></div>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">User-Centric Design</p><p class="text-gray-500 text-xs mt-0.5">Beautiful, intuitive interfaces designed for your users</p></div>
                        </li>
                    </ul>
                    <div class="flex flex-wrap gap-2 mb-8">
                        <span class="svc-tag">Flutter</span>
                        <span class="svc-tag">React Native</span>
                        <span class="svc-tag">Firebase</span>
                        <span class="svc-tag">Swift</span>
                        <span class="svc-tag">Kotlin</span>
                    </div>
                    <a href="{{ route('prototype1.contact') }}" class="svc-cta">
                        Get Started
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            
            <!-- Row 3 — UI/UX Design -->
            <div class="svc-row mb-32" data-aos="fade-up">
                <!-- Content -->
                <div class="svc-content">
                    <h3 class="text-4xl font-black text-gray-900 mb-4 leading-tight">UI/UX<br>Design</h3>
                    <p class="text-gray-500 leading-relaxed mb-6 text-[0.97rem]">
                        Pixel-perfect interfaces and seamless user experiences — crafted through deep research, wireframing, and iterative prototyping that converts.
                    </p>
                    <ul class="space-y-4 mb-7">
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">User Research</p><p class="text-gray-500 text-xs mt-0.5">Deep diving into user behavior and needs</p></div>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">Wireframing &amp; Prototyping</p><p class="text-gray-500 text-xs mt-0.5">Interactive mockups to visualize the final product</p></div>
                        </li>
                    </ul>
                    <div class="flex flex-wrap gap-2 mb-8">
                        <span class="svc-tag">Figma</span>
                        <span class="svc-tag">Adobe XD</span>
                        <span class="svc-tag">User Testing</span>
                    </div>
                    <a href="{{ route('prototype1.contact') }}" class="svc-cta">
                        Get Started
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>

                <!-- Visual Mockup: Mac + iPhone -->
                <div class="svc-visual" data-aos="fade-left" data-aos-delay="150">
                    <style>
                        /* Interconnected Ecosystem Animations */
                        @keyframes ecoGradient {
                            0% { background-position: 0% 50%; }
                            50% { background-position: 100% 50%; }
                            100% { background-position: 0% 50%; }
                        }
                        .eco-bg {
                            background: linear-gradient(-45deg, #4f46e5, #7c3aed, #ec4899, #8b5cf6, #3b82f6);
                            background-size: 400% 400%;
                            animation: ecoGradient 12s ease infinite;
                        }
                        .eco-bg-mac { animation-delay: 0s; }
                        .eco-bg-ios { animation-delay: -2s; /* Slightly offset for flow effect */ }

                        @keyframes ecoPulse {
                            0% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4); }
                            70% { box-shadow: 0 0 0 15px rgba(255, 255, 255, 0); }
                            100% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0); }
                        }

                        @keyframes ecoDataFlow {
                            0% { transform: translateY(0); opacity: 0; }
                            50% { opacity: 1; }
                            100% { transform: translateY(-30px); opacity: 0; }
                        }

                        .device-showcase {
                            position: relative;
                            width: 100%;
                            height: 420px;
                        }

                        /* ── MacBook Frame ── */
                        .mac-wrapper {
                            position: absolute; top: 0; left: 0; width: 92%; z-index: 1;
                            transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
                        }
                        .mac-frame {
                            width: 100%; background: #1a1a1a; border-radius: 12px 12px 0 0; padding: 8px 8px 0;
                            box-shadow: 0 25px 60px rgba(124,58,237,0.15), 0 5px 15px rgba(0,0,0,0.2);
                        }
                        .device-showcase:hover .mac-wrapper { transform: translateY(-6px) scale(1.02); }
                        .mac-cam { width: 6px; height: 6px; background: #333; border-radius: 50%; margin: 0 auto 6px; box-shadow: inset 0 0 0 1px #444; }
                        .mac-toolbar { display: flex; align-items: center; gap: 8px; padding: 8px 12px; background: rgba(255,255,255,0.05); border-radius: 8px 8px 0 0; backdrop-filter: blur(10px); border-bottom: 1px solid rgba(255,255,255,0.1); }
                        .mac-dots { display: flex; gap: 5px; }
                        .mac-dot { width: 10px; height: 10px; border-radius: 50%; }
                        .mac-dot.r { background: #ff5f57; } .mac-dot.y { background: #febc2e; } .mac-dot.g { background: #28c840; }
                        .mac-url { flex: 1; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.05); border-radius: 6px; padding: 4px 12px; font-size: 11px; color: rgba(255,255,255,0.6); text-align: center; }
                        
                        /* Screen */
                        .mac-screen { width: 100%; height: 260px; overflow: hidden; position: relative; }
                        .mac-base { width: 100%; height: 14px; background: linear-gradient(180deg, #333 0%, #111 100%); border-radius: 0 0 2px 2px; position: relative; border-top: 1px solid #444; }
                        .mac-base::after { content: ''; position: absolute; top: 3px; left: 50%; transform: translateX(-50%); width: 60px; height: 4px; background: #222; border-radius: 2px; }
                        .mac-stand { width: 40%; margin: 0 auto; height: 0; border-left: 12px solid transparent; border-right: 12px solid transparent; border-top: 20px solid #222; }
                        .mac-foot { width: 55%; margin: 0 auto; height: 4px; background: linear-gradient(180deg, #444, #111); border-radius: 0 0 4px 4px; }

                        /* ── iPhone 16 Pro Frame ── */
                        .iphone-frame {
                            position: absolute; bottom: 5px; right: 0; width: 140px; background: #2c2c2e; border-radius: 32px; padding: 6px;
                            box-shadow: 0 30px 60px rgba(0,0,0,0.4), 0 0 0 1px #48484a, inset 0 0 0 1px rgba(255,255,255,0.1), -10px 10px 30px rgba(124,58,237,0.2);
                            z-index: 5; transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
                        }
                        .device-showcase:hover .iphone-frame { transform: translateY(-12px) translateX(-5px) rotate(-4deg) scale(1.05); box-shadow: 0 40px 70px rgba(0,0,0,0.5), 0 0 0 1px #48484a, inset 0 0 0 1px rgba(255,255,255,0.1), -15px 15px 40px rgba(236,72,153,0.3); }
                        .iphone-screen { width: 100%; height: 285px; overflow: hidden; border-radius: 26px; position: relative; background: #000; }
                        .iphone-dynamic-island { position: absolute; top: 8px; left: 50%; transform: translateX(-50%); width: 42px; height: 14px; background: #000; border-radius: 20px; z-index: 10; box-shadow: 0 0 0 0.5px rgba(255,255,255,0.08); }
                        .iphone-bar { width: 44px; height: 4px; background: rgba(255,255,255,0.2); border-radius: 2px; margin: 6px auto 2px; }
                        .iphone-frame::before { content: ''; position: absolute; right: -2px; top: 60px; width: 2px; height: 30px; background: #636366; border-radius: 0 2px 2px 0; }
                        .iphone-frame::after { content: ''; position: absolute; left: -2px; top: 50px; width: 2px; height: 22px; background: #636366; border-radius: 2px 0 0 2px; }
                        
                        /* Interconnected Link Element */
                        .eco-link {
                            position: absolute; bottom: 120px; right: 120px; width: 100px; height: 2px; background: linear-gradient(90deg, rgba(236,72,153,0), rgba(236,72,153,0.8), rgba(236,72,153,0));
                            z-index: 2; transform: rotate(15deg); opacity: 0; animation: ecoLinkFlash 3s ease-in-out infinite;
                        }
                        @keyframes ecoLinkFlash { 0% { opacity: 0; transform: rotate(15deg) translateX(-50px); } 50% { opacity: 1; } 100% { opacity: 0; transform: rotate(15deg) translateX(50px); } }
                    </style>

                    <div class="device-showcase group">
                        <!-- iMac / Monitor -->
                        <div class="mac-wrapper">
                            <div class="mac-frame">
                                <div class="mac-cam"></div>
                                <div class="mac-toolbar">
                                    <div class="mac-dots">
                                        <span class="mac-dot r"></span>
                                        <span class="mac-dot y"></span>
                                        <span class="mac-dot g"></span>
                                    </div>
                                    <div class="mac-url">ecosystem.igen.io</div>
                                </div>
                                <div class="mac-screen">
                                    <div class="absolute inset-0 eco-bg eco-bg-mac opacity-20 mix-blend-color z-10 pointer-events-none"></div>
                                    <img src="{{ asset('images/sofea_demo.png') }}" alt="Website UI Design" style="width: 100%; height: 100%; object-fit: cover; object-position: top; display: block; position: relative; z-0">
                                </div>
                            </div>
                            <div class="mac-base"></div>
                            <div class="mac-stand"></div>
                            <div class="mac-foot"></div>
                        </div>

                        <!-- Data connection link -->
                        <div class="eco-link"></div>

                        <!-- iPhone 16 Pro -->
                        <div class="iphone-frame">
                            <div class="iphone-screen">
                                <div class="iphone-dynamic-island z-20"></div>
                                <div class="absolute inset-0 eco-bg eco-bg-ios opacity-20 mix-blend-color z-10 pointer-events-none"></div>
                                <img src="{{ asset('images/sofea_demo.png') }}" alt="Mobile App UI Design" style="width: 100%; height: 100%; object-fit: cover; object-position: left; display: block; position: relative; z-0">
                            </div>
                            <div class="iphone-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Row 4 — Website AI Chatbox -->
            <div class="svc-row reverse" data-aos="fade-up">
                <!-- Visual Mockup: n8n Integration -->
                <div class="svc-visual" data-aos="fade-right" data-aos-delay="150" style="position:relative;">
                    <div class="relative w-full h-[340px] rounded-[2rem] overflow-hidden shadow-2xl border border-gray-100 group bg-[#1a1a2e]">

                        <!-- Subtle grid pattern background -->
                        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #ea580c 1px, transparent 1px); background-size: 28px 28px;"></div>
                        <!-- Ambient glow -->
                        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(234,88,12,0.18) 0%, transparent 70%);"></div>

                        <!-- Top Browser Bar -->
                        <div class="absolute top-0 inset-x-0 h-10 bg-white/10 backdrop-blur-md border-b border-white/20 flex items-center px-4 gap-2 z-20">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-400/80"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-400/80"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-green-400/80"></div>
                            <div class="ml-2 flex items-center gap-1.5 bg-black/20 rounded-full px-3 py-1">
                                <svg class="w-3 h-3 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                <span style="font-size:10px;color:rgba(255,255,255,0.8);font-weight:500;">ai-assistant.app</span>
                            </div>
                        </div>

                        <!-- Center content (Advanced AI UI) -->
                        <div class="absolute inset-0 pt-10 z-10 flex overflow-hidden">
                            <!-- Background Image (Stunning Abstract 3D) -->
                            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80&w=800" alt="AI Interface Background" class="absolute inset-0 w-full h-full object-cover opacity-90 transform transition-transform duration-700 group-hover:scale-105">
                            
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-linear-to-tr from-[#1a1a2e]/95 via-[#1a1a2e]/60 to-transparent pointer-events-none"></div>

                            <!-- Mock UI Sidebar -->
                            <div class="relative w-[30%] h-full border-r border-white/10 bg-black/30 backdrop-blur-md p-4 flex flex-col gap-3">
                                <div class="w-2/3 h-2.5 bg-white/20 rounded-full mb-2"></div>
                                <div class="w-full h-10 bg-white/10 rounded-xl border border-white/10"></div>
                                <div class="w-full h-10 bg-white/5 rounded-xl border border-white/5"></div>
                                <div class="w-full h-10 bg-white/5 rounded-xl border border-white/5"></div>
                            </div>

                            <!-- Mock UI Chat Area -->
                            <div class="relative flex-1 h-full flex flex-col p-5">
                                <div class="flex-1 flex flex-col gap-4">
                                    <div class="self-start bg-white/10 backdrop-blur-md border border-white/10 p-3.5 rounded-2xl rounded-tl-sm max-w-[85%]">
                                        <div class="w-24 h-1.5 bg-white/30 rounded-full mb-2.5"></div>
                                        <div class="w-32 h-1.5 bg-white/20 rounded-full mb-2.5"></div>
                                        <div class="w-16 h-1.5 bg-white/20 rounded-full"></div>
                                    </div>
                                    <div class="self-end bg-linear-to-r from-purple-600 to-indigo-600 p-3.5 rounded-2xl rounded-tr-sm max-w-[80%] shadow-lg shadow-purple-500/30">
                                        <div class="w-28 h-1.5 bg-white/90 rounded-full mb-2.5"></div>
                                        <div class="w-20 h-1.5 bg-white/70 rounded-full"></div>
                                    </div>
                                    <div class="self-start bg-white/10 backdrop-blur-md border border-white/10 p-4 rounded-2xl rounded-tl-sm max-w-[80%] flex items-center gap-2">
                                        <div class="w-1.5 h-1.5 bg-purple-400 rounded-full animate-pulse"></div>
                                        <div class="w-1.5 h-1.5 bg-purple-400 rounded-full animate-pulse" style="animation-delay: 0.2s"></div>
                                        <div class="w-1.5 h-1.5 bg-purple-400 rounded-full animate-pulse" style="animation-delay: 0.4s"></div>
                                    </div>
                                </div>
                                <!-- Mock UI Input -->
                                <div class="w-full h-11 mt-auto bg-black/40 backdrop-blur-xl rounded-full border border-white/15 flex items-center px-4 justify-between shadow-inner">
                                    <div class="w-1/3 h-2 bg-white/20 rounded-full"></div>
                                    <div class="w-7 h-7 bg-purple-500 rounded-full flex items-center justify-center shadow-lg">
                                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Glowing Connector Lines -->
                    <svg class="absolute inset-0 w-full h-full pointer-events-none z-20 overflow-visible">
                        <!-- To Claude (Top Left) -->
                        <path d="M 0 65 C 40 65 50 100 100 100" fill="none" stroke="rgba(234,88,12,0.5)" stroke-width="1.5" stroke-dasharray="4 4" class="opacity-70" style="filter: drop-shadow(0 0 6px rgba(234,88,12,0.8));"/>
                        <!-- To n8n (Middle Right) -->
                        <path d="M 100% 175 C calc(100% - 40px) 175 calc(100% - 60px) 160 calc(100% - 100px) 160" fill="none" stroke="rgba(219,39,119,0.5)" stroke-width="1.5" stroke-dasharray="4 4" class="opacity-70" style="filter: drop-shadow(0 0 6px rgba(219,39,119,0.8));"/>
                        <!-- To Tr (Bottom Center) -->
                        <path d="M 55% 100% C 55% calc(100% - 30px) 50% calc(100% - 40px) 50% calc(100% - 60px)" fill="none" stroke="rgba(220,38,38,0.5)" stroke-width="1.5" stroke-dasharray="4 4" class="opacity-70" style="filter: drop-shadow(0 0 6px rgba(220,38,38,0.8));"/>
                    </svg>

                    <!-- Claude Logo Overlay (Top Left aligned to sidebar) -->
                    <div class="absolute top-10 -left-6 z-30 bg-white/95 backdrop-blur-xl shadow-[0_20px_40px_rgba(0,0,0,0.15)] rounded-2xl p-2.5 border border-white/60 flex items-center justify-center transform transition-all duration-500 hover:scale-110 hover:shadow-[0_20px_40px_rgba(234,88,12,0.25)] group-hover:-translate-y-1 group-hover:-translate-x-1 ring-1 ring-black/5">
                        <div class="relative">
                            <div class="absolute inset-0 bg-orange-500/20 blur-md rounded-full"></div>
                            <img src="{{ asset('images/claude_icon.png') }}" alt="Claude AI" class="w-12 h-12 rounded-xl object-contain relative z-10">
                        </div>
                    </div>

                    <!-- n8n Logo Overlay (Middle Right aligned to chat bubble) -->
                    <div class="absolute top-[140px] -right-5 z-30 bg-white/95 backdrop-blur-xl shadow-[0_20px_40px_rgba(0,0,0,0.15)] rounded-2xl p-2.5 border border-white/60 flex items-center justify-center transform transition-all duration-500 hover:scale-110 hover:shadow-[0_20px_40px_rgba(219,39,119,0.25)] group-hover:-translate-y-1 group-hover:translate-x-1 ring-1 ring-black/5 delay-75">
                        <div class="relative">
                            <div class="absolute inset-0 bg-pink-500/20 blur-md rounded-full"></div>
                            <img src="{{ asset('images/n8n_icon.png') }}" alt="n8n" class="w-12 h-12 rounded-xl shadow-xs object-contain p-1 bg-white relative z-10 border border-gray-100">
                        </div>
                    </div>

                    <!-- Tr Logo Overlay (Bottom Center overlapping input) -->
                    <div class="absolute -bottom-4 left-[55%] -translate-x-1/2 z-30 bg-white/95 backdrop-blur-xl shadow-[0_20px_40px_rgba(0,0,0,0.15)] rounded-2xl p-2.5 border border-white/60 flex items-center justify-center transform transition-all duration-500 hover:scale-110 hover:shadow-[0_20px_40px_rgba(220,38,38,0.25)] group-hover:translate-y-1 ring-1 ring-black/5 delay-150">
                        <div class="relative">
                            <div class="absolute inset-0 bg-red-500/20 blur-md rounded-full"></div>
                            <div class="w-12 h-12 rounded-xl bg-linear-to-br from-red-500 to-red-600 shadow-[inset_0_2px_4px_rgba(255,255,255,0.3)] flex items-center justify-center relative overflow-hidden z-10 border border-red-700/50">
                                <div class="absolute inset-0 bg-linear-to-b from-white/20 to-transparent"></div>
                                <span class="text-white font-black text-[22px] tracking-tighter drop-shadow-md relative z-10 leading-none" style="font-family: ui-sans-serif, system-ui, -apple-system, sans-serif;">Tr</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="svc-content">
                    <h3 class="text-4xl font-black text-gray-900 mb-4 leading-tight">Website AI<br>Chatbox</h3>
                    <p class="text-gray-500 leading-relaxed mb-6 text-[0.97rem]">
                        Intelligent AI-powered agents that qualify leads, nurture prospects, and close deals 24/7 — seamlessly integrated with your CRM and workflow.
                    </p>
                    <ul class="space-y-4 mb-7">
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">Lead Generation</p><p class="text-gray-500 text-xs mt-0.5">Automated lead qualification round the clock</p></div>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <span class="svc-check mt-0.5"><svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            <div><p class="font-semibold text-gray-900">CRM Integration</p><p class="text-gray-500 text-xs mt-0.5">Syncs directly with your existing tools</p></div>
                        </li>
                    </ul>
                    <div class="flex flex-wrap gap-2 mb-8">
                        <span class="svc-tag">n8n</span>
                        <span class="svc-tag">Botpress</span>
                        <span class="svc-tag">Claude</span>
                    </div>
                    <a href="{{ route('prototype1.contact') }}" class="svc-cta">
                        Get Started
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <style>
        @keyframes svcImgDrift {
            0%   { transform: translateX(0px)   translateY(0px)   scale(1.0);  }
            25%  { transform: translateX(-14px)  translateY(-10px)  scale(1.03); }
            50%  { transform: translateX(-8px)   translateY(16px)  scale(1.05); }
            75%  { transform: translateX(12px)  translateY(8px)   scale(1.02); }
            100% { transform: translateX(0px)   translateY(0px)   scale(1.0);  }
        }
    </style>
    <section class="py-24 bg-gray-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_60%_at_50%_0%,rgba(124,58,237,0.25),transparent)] pointer-events-none"></div>

        <!-- Drifting image — right side -->
        <div class="absolute right-0 top-0 bottom-0 w-full hidden lg:block pointer-events-none overflow-hidden">
            <img src="https://images.pexels.com/photos/3861958/pexels-photo-3861958.jpeg?auto=compress&cs=tinysrgb&w=900"
                 alt="" class="absolute right-0 top-0 w-[55%] h-full object-cover opacity-25"
                 style="animation: svcImgDrift 16s ease-in-out infinite;
                        -webkit-mask-image: linear-gradient(to right, transparent 0%, transparent 5%, black 40%);
                        mask-image: linear-gradient(to right, transparent 0%, transparent 5%, black 40%);">
        </div>

        <div class="max-w-4xl mx-auto text-center relative z-10 px-4" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-black mb-6">Ready to Transform Your <br><span class="text-purple-400">Business?</span></h2>
            <p class="text-gray-400 mb-10 text-lg max-w-2xl mx-auto">Let's collaborate to bring your vision to life with our comprehensive solutions.</p>
            <a href="{{ route('prototype1.contact') }}" class="bg-purple-600 text-white px-10 py-4 rounded-full font-bold hover:bg-purple-500 transition-all shadow-lg inline-flex items-center group">
                Start Your Journey
                <span class="ml-2 group-hover:translate-x-1 transition-transform">→</span>
            </a>
        </div>
    </section>
@endsection
