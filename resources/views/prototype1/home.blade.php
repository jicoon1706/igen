@extends('prototype1.layout')
@section('title', 'IGEN VERITAS | Home')
@section('content')

<style>
    /* Marquee */
    .marquee-track { display: flex; gap: 2.5rem; animation: marquee 32s linear infinite; will-change: transform; padding-right: 2.5rem; }
    @keyframes marquee { to { transform: translateX(-25%); } }
    .marquee-wrap { overflow: hidden; position: relative; }
    .marquee-wrap::before, .marquee-wrap::after { content: ''; position: absolute; top: 0; bottom: 0; width: 120px; z-index: 2; pointer-events: none; }
    .marquee-wrap::before { left: 0; background: linear-gradient(90deg, #7c3aed 0%, transparent 100%); }
    .marquee-wrap::after  { right: 0; background: linear-gradient(-90deg, #7c3aed 0%, transparent 100%); }

    /* Grid pattern */
    .grid-pattern { background-image: radial-gradient(circle, rgba(124,58,237,0.055) 1px, transparent 1px); background-size: 28px 28px; }

    /* Shimmer CTA */
    @keyframes shimmer { from { transform: translateX(-200%); } to { transform: translateX(200%); } }
    .btn-shimmer::after { content: ''; position: absolute; top: 0; left: 0; width: 50%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.25), transparent); animation: shimmer 2.8s ease-in-out infinite; }

    /* Floating ping badge */
    @keyframes ping { 75%, 100% { transform: scale(2); opacity: 0; } }
    .animate-ping { animation: ping 1.2s cubic-bezier(0,0,0.2,1) infinite; }

    /* Card top line reveal */
    .card-topline { position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, #7c3aed, #a855f7, #7c3aed); transform: scaleX(0); transform-origin: left; transition: transform 0.5s cubic-bezier(.4,0,.2,1); }
    .group:hover .card-topline { transform: scaleX(1); }

    /* Counter */
    .counter-value { font-variant-numeric: tabular-nums; }

    /* Process connector */
    .process-connector { position: absolute; top: 32px; left: calc(50% + 32px); right: calc(-50% + 32px); height: 1px; background: linear-gradient(90deg, rgba(124,58,237,0.4) 0%, rgba(124,58,237,0) 100%); }
</style>

<!-- ══ HERO ══ -->
<section class="relative bg-white min-h-[92vh] flex items-center pt-36 pb-24 overflow-hidden">
    <div class="absolute top-0 right-0 w-[900px] h-[900px] bg-purple-50 rounded-full blur-3xl opacity-60 translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-purple-50/70 rounded-full blur-3xl opacity-50 -translate-x-1/4 translate-y-1/4 pointer-events-none"></div>
    <div class="absolute inset-0 grid-pattern pointer-events-none opacity-100"></div>

    <!-- Ghost hero image (right) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/corporate_hero.png') }}" alt="" class="absolute right-0 top-0 w-[65%] h-full object-cover opacity-90" style="animation: heroZoom 10s ease-out forwards; -webkit-mask-image: linear-gradient(to right, transparent 0%, transparent 10%, black 45%); mask-image: linear-gradient(to right, transparent 0%, transparent 10%, black 45%);">
    </div>
    @php /* hero zoom keyframe defined inline */ @endphp
    <style>@keyframes heroZoom { 0%{transform:scale(1.2) translateX(-5%);opacity:0} 100%{transform:scale(1) translateX(0);opacity:1} }</style>

    <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="max-w-3xl">


            <!-- Headline -->
            <h1 class="font-black text-gray-900 leading-[0.9] tracking-tight mb-8" style="font-size:clamp(3rem,7.5vw,5.5rem);" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                We Build<br>
                Digital <em class="gradient-text not-italic">Experiences</em><br>
                <span class="text-gray-800">That Deliver.</span>
            </h1>

            <p class="text-lg sm:text-xl text-gray-500 mb-10 max-w-xl leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Reliable, scalable web &amp; mobile solutions crafted with purpose — built to elevate your business and drive sustainable, measurable growth.
            </p>

            <!-- CTAs -->
            <div class="flex flex-col sm:flex-row gap-4 mb-14" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('prototype1.contact') }}" class="relative overflow-hidden btn-shimmer group inline-flex items-center justify-center gap-2 bg-primary-gradient text-white px-9 py-4 rounded-full font-bold shadow-lg shadow-purple-500/20 hover:shadow-purple-500/45 hover:-translate-y-0.5 transition-all duration-300">
                    Start a Project
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('prototype1.services') }}" class="inline-flex items-center justify-center gap-2 border-2 border-gray-200 text-gray-700 px-9 py-4 rounded-full font-bold hover:border-purple-500 hover:text-purple-600 hover:bg-purple-50/50 transition-all duration-300">
                    Explore Services
                </a>
            </div>

            <!-- Trust chips -->
            <div class="flex flex-wrap items-center gap-3" data-aos="fade-up" data-aos-delay="400">
                <span class="text-sm text-gray-400 font-medium">Serving clients in</span>
                <span class="px-4 py-1.5 bg-gray-50 border border-gray-100 rounded-full text-sm font-semibold text-gray-700 hover:border-purple-200 transition-colors">🇲🇾 Malaysia</span>
                <span class="px-4 py-1.5 bg-gray-50 border border-gray-100 rounded-full text-sm font-semibold text-gray-700 hover:border-purple-200 transition-colors">🇸🇬 Singapore</span>
                <span class="px-4 py-1.5 bg-gray-50 border border-gray-100 rounded-full text-sm font-semibold text-gray-700 hover:border-purple-200 transition-colors">🌏 & Beyond</span>
            </div>
        </div>
    </div>
</section>

<!-- ══ MARQUEE ══ -->
<div class="relative py-5 bg-[#7c3aed] border-y border-purple-600 marquee-wrap">
    <div class="marquee-track" style="width:max-content;">
        @for($i=0; $i<4; $i++)
            @foreach(['Web Development','Mobile Apps','UI / UX Design','API Integration','E-Commerce','Website AI Chatbox'] as $item)
                <span class="text-white font-bold text-xs tracking-[0.2em] uppercase whitespace-nowrap">{{ $item }}</span>
                <span class="text-black text-base flex-shrink-0">✦</span>
            @endforeach
        @endfor
    </div>
</div>

<!-- ══ SERVICES ══ -->
<section class="py-12 relative overflow-hidden bg-white">
    <!-- Background image layer (Cityscape / Towers) -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <!-- Modern skyscraper view -->
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80"
             alt="City skyscrapers" class="w-full h-full object-cover opacity-60" style="filter: brightness(1.1) grayscale(30%);">
        <!-- Overlay to ensure the dark cards pop perfectly against the complex city structures -->
        <div class="absolute inset-0 bg-white/60 mix-blend-overlay"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-white/80 via-white/40 to-white/80"></div>
    </div>

    <!-- Existing orb (keep above bg, below content) -->
    <div class="absolute w-[700px] h-[700px] bg-purple-100/40 rounded-full blur-3xl -top-48 -right-48 pointer-events-none opacity-50 z-1"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Integrated Typography Header -->
        <div class="mb-10 text-center" data-aos="fade-up">
            <h2 class="text-xs font-black tracking-[0.2em] uppercase text-purple-600 mb-4">Our Services</h2>
            <p class="text-4xl md:text-5xl font-black text-gray-900 leading-tight tracking-tight max-w-2xl mx-auto">Building digital systems for <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600">modern businesses.</span></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
            <!-- Card 1: Website AI Chatbox -->
            <div class="group relative rounded-[2.5rem] p-6 md:p-8 bg-gray-950/80 backdrop-blur-xl shadow-2xl transition-all duration-500 overflow-hidden cursor-pointer border border-white/10 hover:border-emerald-500/30 hover:shadow-[0_0_40px_rgba(16,185,129,0.15)]" onclick="window.location='{{ route('prototype1.services') }}'" data-aos="fade-up">
                <div class="absolute -top-20 -right-20 w-64 h-64 bg-emerald-500/10 rounded-full blur-[80px] pointer-events-none transition-all duration-700 group-hover:bg-emerald-500/20"></div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-black text-white mb-3 group-hover:text-emerald-400 transition-colors duration-300 tracking-tight">Website AI Chatbox</h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-4 font-medium">Automate lead qualification and customer support 24/7 with custom-trained AI models.</p>
                        
                        <div class="flex items-center gap-2 text-xs font-bold text-emerald-300 mb-4 bg-emerald-950/50 w-max px-3 py-1.5 rounded-lg border border-emerald-800/50 shadow-sm">
                            <span class="text-emerald-400">⚡</span> Automates 68% of inquiries
                        </div>
                    </div>
                    
                    <span class="inline-flex items-center gap-2 text-sm font-bold text-emerald-400 group-hover:gap-3.5 transition-all duration-300 mt-4">
                        See AI Capabilities
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </div>
            </div>

            <!-- Card 2: Website Systems (1 col) -->
            <div class="group relative rounded-[2.5rem] p-6 md:p-8 bg-gray-950/80 backdrop-blur-xl shadow-2xl transition-all duration-500 overflow-hidden cursor-pointer border border-white/10 hover:border-purple-500/30 hover:shadow-[0_0_40px_rgba(167,139,250,0.15)]" onclick="window.location='{{ route('prototype1.services') }}'" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute -top-20 -right-20 w-64 h-64 bg-purple-500/10 rounded-full blur-[80px] pointer-events-none transition-all duration-700 group-hover:bg-purple-500/20"></div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-black text-white mb-3 group-hover:text-purple-400 transition-colors duration-300 tracking-tight">Website Systems</h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-4 font-medium">Convert visitors into customers with high-performance, SEO-optimized business platforms.</p>
                        
                        <div class="flex items-center gap-2 text-xs font-bold text-purple-300 mb-4 bg-purple-950/50 w-max px-3 py-1.5 rounded-lg border border-purple-800/50 shadow-sm">
                            <span class="text-purple-400">✓</span> 50+ projects launched
                        </div>
                    </div>
                    
                    <span class="inline-flex items-center gap-2 text-sm font-bold text-purple-400 group-hover:gap-3.5 transition-all duration-300 mt-4">
                        View Website Features
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </div>
            </div>

            <!-- Card 3: Mobile Apps (1 col) -->
            <div class="group relative rounded-[2.5rem] p-6 md:p-8 bg-gray-950/80 backdrop-blur-xl shadow-2xl transition-all duration-500 overflow-hidden cursor-pointer border border-white/10 hover:border-blue-500/30 hover:shadow-[0_0_40px_rgba(96,165,250,0.15)]" onclick="window.location='{{ route('prototype1.services') }}'" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-blue-500/10 rounded-full blur-[80px] pointer-events-none transition-all duration-700 group-hover:bg-blue-500/20"></div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-black text-white mb-3 group-hover:text-blue-400 transition-colors duration-300 tracking-tight">Mobile Apps</h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-4 font-medium">Launch scalable mobile applications with smooth onboarding and retention-focused UX.</p>
                        
                        <div class="flex items-center gap-2 text-xs font-bold text-blue-300 mb-4 bg-blue-950/50 w-max px-3 py-1.5 rounded-lg border border-blue-800/50 shadow-sm">
                            <span class="text-blue-400">✓</span> Native Performance
                        </div>
                    </div>
                    
                    <span class="inline-flex items-center gap-2 text-sm font-bold text-blue-400 group-hover:gap-3.5 transition-all duration-300 mt-4">
                        See App Workflow
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </div>
            </div>

            <!-- Card 4: UI/UX Design -->
            <div class="group relative rounded-[2.5rem] p-6 md:p-8 bg-gray-950/80 backdrop-blur-xl shadow-2xl transition-all duration-500 overflow-hidden cursor-pointer border border-white/10 hover:border-fuchsia-500/30 hover:shadow-[0_0_40px_rgba(232,121,249,0.15)]" onclick="window.location='{{ route('prototype1.services') }}'" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-fuchsia-500/10 rounded-full blur-[80px] pointer-events-none transition-all duration-700 group-hover:bg-fuchsia-500/20"></div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-black text-white mb-3 group-hover:text-fuchsia-400 transition-colors duration-300 tracking-tight">UI/UX Experience Design</h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-4 font-medium">Reduce friction and improve user engagement. We design research-backed flows and intuitive interfaces that your users naturally understand.</p>
                        
                        <div class="flex items-center gap-2 text-xs font-bold text-fuchsia-300 mb-4 bg-fuchsia-950/50 w-max px-3 py-1.5 rounded-lg border border-fuchsia-800/50 shadow-sm">
                            <span class="text-fuchsia-400">✓</span> Pixel-Perfect Design
                        </div>
                    </div>
                    
                    <span class="inline-flex items-center gap-2 text-sm font-bold text-fuchsia-400 group-hover:gap-3.5 transition-all duration-300 mt-4">
                        View Design Process
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </div>
            </div>

        </div>

        <div class="mt-8 text-center" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('prototype1.services') }}" class="inline-flex items-center gap-2 text-purple-600 font-bold hover:text-purple-800 transition-colors group text-sm">
                View all services &amp; capabilities
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- <!-- ══ MINIMALIST SEPARATOR ══ -->
<section class="py-24 bg-gray-950 relative overflow-hidden flex items-center justify-center">
    <!-- Subtle static grid background -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image:radial-gradient(circle,#ffffff 1px,transparent 1px);background-size:24px 24px;"></div>

    <div class="relative z-10 w-full max-w-5xl mx-auto px-4 flex items-center justify-center h-32">
        <div class="w-full flex items-center justify-center opacity-30">
            <!-- Left Line -->
            <div class="w-full max-w-md h-px bg-gradient-to-r from-transparent to-white"></div>
            
            <!-- Center Minimalist Node -->
            <div class="shrink-0 px-8 flex items-center gap-4">
                <div class="w-1 h-1 rounded-full bg-white"></div>
                <div class="w-3 h-3 border border-white rotate-45"></div>
                <div class="w-1 h-1 rounded-full bg-white"></div>
            </div>
            
            <!-- Right Line -->
            <div class="w-full max-w-md h-px bg-gradient-to-l from-transparent to-white"></div>
        </div>
    </div>
</section> --}}

<!-- ══ HOW WE WORK ══ -->
<section class="py-28 bg-white relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">

            <h2 class="text-5xl font-black text-gray-900 tracking-tight">How We <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-violet-500 to-purple-600">Work</span></h2>
            <p class="text-gray-500 mt-4 max-w-xl mx-auto">A clear, proven 3-step process that turns your idea into a world-class digital product — on time, every time.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 relative">
            @foreach([
                ['n'=>'01','title'=>'Discovery & Strategy','body'=>'We deep-dive into your business goals, target audience, and competitive landscape to craft a precise digital roadmap tailored to your vision.','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'],
                ['n'=>'02','title'=>'Design & Development','body'=>'Our team designs and engineers your solution with precision — clean code, elegant UI, and seamless user experiences that delight at every touchpoint.','icon'=>'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'],
                ['n'=>'03','title'=>'Launch & Growth','body'=>'We deploy with care and continue to optimize, support, and scale your product — ensuring it grows alongside your ambitions without missing a beat.','icon'=>'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'],
            ] as $i=>$step)
            <div class="relative text-center group" data-aos="fade-up" data-aos-delay="{{ ($i+1)*100 }}">
                @if($i < 2)
                <div class="hidden md:block process-connector"></div>
                @endif
                <div class="relative inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-600 text-white font-black text-lg shadow-lg shadow-purple-500/30 mb-8 mx-auto group-hover:scale-110 group-hover:shadow-purple-500/50 transition-all duration-300">
                    {{ $step['n'] }}
                    <div class="absolute inset-0 rounded-2xl bg-white opacity-0 group-hover:opacity-10 transition-opacity"></div>
                </div>
                <h3 class="text-xl font-black text-gray-900 mb-3">{{ $step['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $step['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══ WHY CHOOSE US ══ -->
<style>
    @keyframes whyBgDrift {
        0%   { transform: scale(1.08) translate(0%, 0%); }
        33%  { transform: scale(1.12) translate(-1.5%, 1%); }
        66%  { transform: scale(1.10) translate(1.5%, -1%); }
        100% { transform: scale(1.08) translate(0%, 0%); }
    }
</style>
<section class="py-28 relative overflow-hidden">
    <!-- Animated background image layer -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.pexels.com/photos/3184325/pexels-photo-3184325.jpeg?auto=compress&cs=tinysrgb&w=1920"
             alt="" class="w-full h-full object-cover"
             style="filter:blur(2px); animation:whyBgDrift 18s ease-in-out infinite;">
        <!-- 40% overlay to ensure text remains readable -->
        <div class="absolute inset-0 bg-white/40"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-5xl font-black text-gray-900 tracking-tight">Why Choose <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600">IGEN VERITAS</span></h2>
            <p class="text-gray-800 mt-4 max-w-xl mx-auto font-medium text-lg">We combine innovation, expertise, and genuine dedication to deliver results that exceed expectations every time.</p>
        </div>

        <div class="flex flex-col sm:flex-row justify-center gap-6 max-w-2xl mx-auto">
            @foreach([
                ['title'=>'Lightning Fast','body'=>'Optimized for exceptional performance — sub-2-second load times and buttery smooth interactions that keep users engaged.','path'=>'M13 10V3L4 14h7v7l9-11h-7z'],
                ['title'=>'Client-Obsessed','body'=>'Your success is our success. We treat every project as if it were our own — with full dedication, transparent communication, and zero excuses.','path'=>'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
            ] as $i=>$feat)
            <div class="group bg-white border border-gray-100 rounded-3xl p-9 text-center shadow-sm hover:shadow-2xl hover:shadow-purple-500/8 hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="{{ ($i+1)*100 }}">
                <div class="w-16 h-16 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center mx-auto mb-6 group-hover:bg-purple-600 group-hover:text-white group-hover:scale-110 group-hover:rotate-3 transition-all duration-400">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $feat['path'] }}"/></svg>
                </div>
                <h3 class="text-xl font-black text-gray-900 mb-3 group-hover:text-purple-700 transition-colors">{{ $feat['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $feat['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══ CTA ══ -->
<style>
    /* Replicated from fullstack-landing FAQ Framer Motion animation */
    @keyframes personSlideLeft {
        0%   { opacity: 0;   transform: translateX(27vw) scale(1.45); }
        20%  { opacity: 1;   transform: translateX(27vw) scale(1.45); }
        70%  { opacity: 1;   transform: translateX(8vw) scale(1.05); }
        100% { opacity: 0.5; transform: translateX(8vw) scale(1.05); }
    }
    @keyframes personSlideRight {
        0%   { opacity: 0;   transform: translateX(-27vw) scaleX(-1.45) scaleY(1.45); }
        20%  { opacity: 1;   transform: translateX(-27vw) scaleX(-1.45) scaleY(1.45); }
        70%  { opacity: 1;   transform: translateX(-8vw)  scaleX(-1.05) scaleY(1.05); }
        100% { opacity: 0.5; transform: translateX(-8vw)  scaleX(-1.05) scaleY(1.05); }
    }
    @keyframes ctaContentReveal {
        from { opacity: 0; transform: translateY(40px) scale(0.96); }
        to   { opacity: 1; transform: translateY(0)    scale(1); }
    }

    .cta-person-left {
        position: absolute; left: 0; bottom: 0;
        width: auto; min-width: 280px;
        height: 95%; max-height: 850px;
        object-fit: cover; object-position: top center;
        pointer-events: none; z-index: 0;
        transform-origin: top center;
        opacity: 0;
        transform: translateX(27vw) scale(1.45);
        will-change: transform, opacity;
        mix-blend-mode: lighten;
        -webkit-mask-image: linear-gradient(to right, transparent 0%, black 15%), linear-gradient(to top, transparent 0%, black 15%);
        -webkit-mask-composite: destination-in;
        mask-image: linear-gradient(to right, transparent 0%, black 15%), linear-gradient(to top, transparent 0%, black 15%);
        mask-composite: intersect;
    }
    .cta-person-right {
        position: absolute; right: 0; bottom: 0;
        width: auto; min-width: 280px;
        height: 95%; max-height: 850px;
        object-fit: cover; object-position: top center;
        pointer-events: none; z-index: 0;
        transform-origin: top center;
        opacity: 0;
        transform: translateX(-27vw) scaleX(-1.45) scaleY(1.45);
        mix-blend-mode: lighten;
        -webkit-mask-image: linear-gradient(to left, transparent 0%, black 15%), linear-gradient(to top, transparent 0%, black 15%);
        -webkit-mask-composite: destination-in;
        mask-image: linear-gradient(to left, transparent 0%, black 15%), linear-gradient(to top, transparent 0%, black 15%);
        mask-composite: intersect;
        will-change: transform, opacity;
    }
    .cta-person-left.cta-animated  { animation: personSlideLeft  3s ease-in-out forwards; }
    .cta-person-right.cta-animated { animation: personSlideRight 3s ease-in-out forwards; }

    .cta-content-box { opacity: 0; }
    .cta-content-box.cta-animated  { animation: ctaContentReveal 0.8s cubic-bezier(0.34,1.56,0.64,1) 2.1s forwards; }

    @media (max-width: 767px) {
        .cta-person-left, .cta-person-right { height: 50%; max-height: 400px; }
    }
</style>

<section id="cta-section" class="bg-gray-950 relative overflow-hidden flex items-center justify-center" style="min-height:700px;">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_0%,rgba(124,58,237,0.3),transparent)] pointer-events-none"></div>
    <div class="absolute inset-0 opacity-[0.035]" style="background-image:radial-gradient(circle,#a78bfa 1px,transparent 1px);background-size:30px 30px;"></div>

    <!-- Left person — background removed via mix-blend-mode: multiply on light bg -->
    <img src="{{ asset('images/cta_woman.png') }}" alt="" class="cta-person-left" id="cta-girl">

    <!-- Right person -->
    <img src="{{ asset('images/cta_man.png') }}" alt="" class="cta-person-right" id="cta-man">

    <!-- Center content — appears after people reach their positions -->
    <div class="cta-content-box relative z-10 max-w-3xl mx-auto text-center px-6 py-20" id="cta-content">

        <h2 class="font-black text-white mb-6 tracking-tight leading-tight" style="font-size:clamp(2.5rem,6vw,4.5rem);">
            Ready to Build<br>
            <span class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 via-violet-300 to-purple-400">Something Great?</span>
        </h2>
        <p class="text-gray-400 mb-12 text-lg max-w-xl mx-auto leading-relaxed">Let's turn your vision into a world-class digital product. Book a free 30-minute consultation — no strings attached.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('prototype1.contact') }}" class="group inline-flex items-center justify-center gap-2 bg-white text-gray-900 px-10 py-4 rounded-full font-bold hover:bg-gray-100 transition-all shadow-2xl hover:-translate-y-0.5 duration-300">
                Book a Free Call
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="{{ route('prototype1.services') }}" class="inline-flex items-center justify-center gap-2 border border-white/15 text-white/70 px-10 py-4 rounded-full font-semibold hover:bg-white/8 hover:text-white transition-all duration-300">
                See Our Work
            </a>
        </div>
        <!-- Mini contact info -->
        <div class="flex flex-col sm:flex-row justify-center items-center gap-6 mt-14 pt-14 border-t border-white/8 text-sm text-gray-500">
            <a href="mailto:igenveritas@gmail.com" class="hover:text-purple-400 transition-colors flex items-center gap-2">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-purple-500"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                igenveritas@gmail.com
            </a>
            <span class="hidden sm:block w-px h-4 bg-white/10"></span>
            <a href="tel:+60173103966" class="hover:text-purple-400 transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                +60 17 310 3966
            </a>
            <span class="hidden sm:block w-px h-4 bg-white/10"></span>
            <span class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Batu Caves, Selangor
            </span>
        </div>
    </div>
</section>

@push('scripts')
<script>
(function() {
    const section = document.getElementById('cta-section');
    if (!section) return;
    const girl    = document.getElementById('cta-girl');
    const man     = document.getElementById('cta-man');
    const content = document.getElementById('cta-content');
    const io = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                girl.classList.add('cta-animated');
                man.classList.add('cta-animated');
                content.classList.add('cta-animated');
                io.disconnect();
            }
        });
    }, { threshold: 0.25 });
    io.observe(section);
})();
</script>
@endpush

@push('scripts')
<script>
(function() {
    const counters = document.querySelectorAll('.counter-value');
    function animateCounter(el) {
        const target = parseInt(el.dataset.target);
        const duration = 1800;
        const start = performance.now();
        function tick(now) {
            const p = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - p, 4);
            el.textContent = Math.round(eased * target);
            if (p < 1) requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
    }
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting && !e.target.dataset.done) {
                e.target.dataset.done = '1';
                animateCounter(e.target);
            }
        });
    }, { threshold: 0.6 });
    counters.forEach(c => io.observe(c));
})();
</script>
@endpush
@endsection
