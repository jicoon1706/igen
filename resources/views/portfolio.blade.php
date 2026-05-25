@extends('layout')
@section('title', 'IGEN VERITAS | Portfolio')
@section('content')

<style>

    /* Portfolio Cards */
    .pf-card {
        position: relative; border-radius: 1.5rem; overflow: hidden;
        background: #fff; display: flex; flex-direction: column;
        border: 1px solid #f3f4f6;
        box-shadow: 0 4px 16px rgba(0,0,0,0.04);
        transition: all 0.5s cubic-bezier(0.175,0.885,0.32,1.275);
        cursor: pointer;
        width: 100%; max-width: 400px;
    }
    .pf-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 24px 48px rgba(124,58,237,0.15);
        border-color: rgba(167,139,250,0.3);
    }

    .pf-img-wrap {
        position: relative; width: 100%; height: 240px; overflow: hidden;
        background: linear-gradient(135deg, #4c1d95, #7c3aed);
    }
    .pf-img-wrap img {
        width: 100%; height: 100%; object-fit: cover;
        transition: transform 0.6s ease;
    }
    .pf-card:hover .pf-img-wrap img { transform: scale(1.08); }

    /* Hover overlay */
    .pf-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(135deg, rgba(124,58,237,0.85), rgba(168,85,247,0.85));
        display: flex; align-items: center; justify-content: center;
        opacity: 0; transition: opacity 0.4s ease;
    }
    .pf-card:hover .pf-overlay { opacity: 1; }
    .pf-overlay-icon {
        width: 56px; height: 56px;
        background: rgba(255,255,255,0.2); backdrop-filter: blur(8px);
        border-radius: 14px; display: flex; align-items: center; justify-content: center;
    }

    /* Card content */
    .pf-body { padding: 1.75rem; flex-grow: 1; display: flex; flex-direction: column; }
    .pf-cat {
        display: inline-block; font-size: 0.7rem; font-weight: 700;
        text-transform: uppercase; color: #7c3aed; letter-spacing: 0.08em; margin-bottom: 0.65rem;
    }
    .pf-title {
        font-size: 1.35rem; font-weight: 900; color: #111827;
        margin-bottom: 0.6rem; line-height: 1.3;
        transition: color 0.3s;
    }
    .pf-card:hover .pf-title { color: #6d28d9; }
    .pf-desc { font-size: 0.9rem; color: #6b7280; line-height: 1.65; flex-grow: 1; margin-bottom: 1.2rem; }

    .pf-tags { display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 1.5rem; }
    .pf-tag {
        display: inline-block; padding: 4px 12px; border-radius: 999px;
        font-size: 0.72rem; font-weight: 600;
        background: #f3e8ff; color: #7c3aed; border: 1px solid rgba(124,58,237,0.12);
    }

    .pf-link {
        display: inline-flex; align-items: center; gap: 8px;
        font-size: 0.85rem; font-weight: 700; color: #7c3aed;
        text-decoration: none; transition: gap 0.3s, color 0.3s;
    }
    .pf-link:hover { gap: 14px; color: #4c1d95; }

    /* Top line reveal on hover */
    .pf-topline {
        position: absolute; top: 0; left: 0; right: 0; height: 3px;
        background: linear-gradient(90deg, #7c3aed, #a855f7, #7c3aed);
        transform: scaleX(0); transform-origin: left;
        transition: transform 0.5s cubic-bezier(.4,0,.2,1);
        z-index: 2;
    }
    .pf-card:hover .pf-topline { transform: scaleX(1); }


</style>

<!-- ══ HERO ══ -->
<section class="relative bg-gray-950 min-h-[65vh] flex items-end pb-20 pt-48 overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_60%_at_70%_0%,rgba(124,58,237,0.35),transparent)] pointer-events-none"></div>
    <div class="absolute inset-0 opacity-[0.04]" style="background-image:radial-gradient(circle,#a78bfa 1px,transparent 1px);background-size:28px 28px;"></div>
    <!-- Ghost hero image (right) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/hero_portfolio.png') }}" alt="" class="absolute right-0 top-0 w-[65%] h-full object-cover opacity-25" style="animation: heroZoomPf 10s ease-out forwards; -webkit-mask-image: linear-gradient(to right, transparent 0%, transparent 10%, black 45%); mask-image: linear-gradient(to right, transparent 0%, transparent 10%, black 45%);">
    </div>
    <style>@keyframes heroZoomPf { 0%{transform:scale(1.2) translateX(-5%);opacity:0} 100%{transform:scale(1) translateX(0);opacity:1} }</style>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="max-w-3xl" data-aos="fade-up" data-aos-duration="800">

            <h1 class="font-black text-white leading-[0.9] tracking-tight mb-6" style="font-size:clamp(3rem,7vw,5rem);">
                Showcase of<br>
                <span class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 via-violet-300 to-purple-400">Excellence</span>
            </h1>
            <p class="text-gray-400 text-lg leading-relaxed mb-10 max-w-xl">
                Discover the innovative projects we've created for businesses around the world — from websites to mobile apps and beyond.
            </p>
            <button onclick="document.getElementById('portfolio-grid').scrollIntoView({behavior:'smooth'})" class="group inline-flex items-center gap-2 bg-white text-gray-900 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition-all shadow-xl hover:-translate-y-0.5 duration-300">
                View Our Portfolio
                <svg class="w-5 h-5 group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
            </button>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-gray-600">
        <div class="w-px h-12 bg-linear-to-b from-gray-600 to-transparent animate-pulse"></div>
    </div>
</section>


<!-- ══ PORTFOLIO GRID ══ -->
<section id="portfolio-grid" class="pt-8 pb-28 relative overflow-hidden" style="background:linear-gradient(180deg,#fff 0%,#f8f7fc 15%,#f8f7fc 85%,#fff 100%);">
    <div class="absolute inset-0 opacity-60" style="background-image:radial-gradient(circle,rgba(147,51,234,0.04) 1px,transparent 1px);background-size:32px 32px;pointer-events:none;"></div>
    <div class="absolute w-[600px] h-[600px] bg-purple-100/30 rounded-full blur-3xl -top-48 -right-48 pointer-events-none"></div>
    <div class="absolute w-[400px] h-[400px] bg-violet-100/20 rounded-full blur-3xl bottom-0 -left-32 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-wrap justify-center gap-8" id="portfolio-container">

            <!-- Card 1 — HMMC Healthcare -->
            <div class="pf-card pf-visible" data-category="web" data-aos="fade-up" data-aos-delay="100">
                <div class="pf-topline"></div>
                <div class="pf-img-wrap">
                    <img src="{{ asset('hmmc.png') }}" alt="HMMC Healthcare">
                    <div class="pf-overlay">
                        <a href="https://hmmc.my/" target="_blank" class="pf-overlay-icon">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>
                </div>
                <div class="pf-body">
                    <span class="pf-cat">Web Development</span>
                    <h3 class="pf-title">HMMC Healthcare</h3>
                    <p class="pf-desc">Modern healthcare website with appointment scheduling, patient portal, and medical information management system.</p>
                    <div class="pf-tags">
                        <span class="pf-tag">Appointment</span>
                        <span class="pf-tag">Healthcare</span>
                        <span class="pf-tag">Responsive</span>
                    </div>
                    <a href="https://hmmc.my/" target="_blank" class="pf-link">
                        Visit Website
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>



        </div>
    </div>
</section>

<!-- ══ CTA ══ -->
<section class="py-28 bg-gray-950 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_0%,rgba(124,58,237,0.3),transparent)] pointer-events-none"></div>
    <div class="absolute inset-0 opacity-[0.035]" style="background-image:radial-gradient(circle,#a78bfa 1px,transparent 1px);background-size:30px 30px;"></div>

    <div class="max-w-4xl mx-auto text-center relative z-10 px-4" data-aos="fade-up">

        <h2 class="font-black text-white mb-6 tracking-tight leading-tight" style="font-size:clamp(2.5rem,6vw,4.5rem);">
            Ready for Your Next<br>
            <span class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 via-violet-300 to-purple-400">Project?</span>
        </h2>
        <p class="text-gray-400 mb-12 text-lg max-w-xl mx-auto leading-relaxed">Let's create something amazing together. Contact us today to discuss your ideas and turn them into reality.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center gap-2 bg-white text-gray-900 px-10 py-4 rounded-full font-bold hover:bg-gray-100 transition-all shadow-2xl hover:-translate-y-0.5 duration-300">
                Start Your Project
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="{{ route('services') }}" class="inline-flex items-center justify-center gap-2 border border-white/15 text-white/70 px-10 py-4 rounded-full font-semibold hover:bg-white/8 hover:text-white transition-all duration-300">
                Our Services
            </a>
        </div>
    </div>
</section>



@endsection
