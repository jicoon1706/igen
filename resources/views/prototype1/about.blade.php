@extends('prototype1.layout')
@section('title', 'IGEN VERITAS | About Us')
@section('content')

<style>
    /* Grid pattern */
    .grid-pattern { background-image: radial-gradient(circle, rgba(124,58,237,0.055) 1px, transparent 1px); background-size: 28px 28px; }

    /* Team styles kept from original */
    .team-section { background: url('{{ asset("images/team-bg.svg") }}') center center / cover no-repeat, #0f0a1e; }
    .orbit-scene { perspective: 800px; perspective-origin: 50% 45%; }
    .orbit-ring { position: relative; width: 100%; height: 560px; transform-style: preserve-3d; }
    .orbit-card { position: absolute; left: 50%; top: 50%; width: 340px; margin-left: -170px; margin-top: -295px; transition: all 0.8s cubic-bezier(.22,.68,0,1.0); cursor: pointer; transform-style: preserve-3d; }
    .orbit-card .card-inner { background: rgba(15,10,30,.65); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(168,85,247,.2); border-radius: 1.5rem; padding: 3.5rem 2.5rem; text-align: center; transition: all 0.5s cubic-bezier(.25,.8,.25,1); box-shadow: 0 10px 40px rgba(0,0,0,.3); }
    .orbit-card.active .card-inner { background: rgba(20,10,45,.85); border-color: rgba(168,85,247,.55); box-shadow: 0 30px 80px rgba(0,0,0,.4), 0 0 0 1px rgba(168,85,247,.35), 0 0 40px rgba(124,58,237,.2); }
    .profile-ring { position: relative; display: inline-block; }
    .profile-ring::before { content: ''; position: absolute; inset: -5px; border-radius: 50%; border: 2px solid transparent; border-top-color: #9333ea; border-right-color: #9333ea; animation: ringRotate 4s linear infinite; z-index: 1; }
    .profile-ring::after { content: ''; position: absolute; inset: -5px; border-radius: 50%; border: 2px solid transparent; border-bottom-color: rgba(147,51,234,.3); border-left-color: rgba(147,51,234,.3); animation: ringRotate 4s linear infinite reverse; z-index: 1; }
    @keyframes ringRotate { 0% { transform: rotate(0); } 100% { transform: rotate(360deg); } }
    .profile-img { transition: all .5s ease; filter: grayscale(30%); }
    .orbit-card.active .profile-img { filter: grayscale(0%); transform: scale(1.05); }
    .social-row { opacity: 0; transform: translateY(8px); transition: all .4s ease; }
    .orbit-card.active .social-row { opacity: 1; transform: translateY(0); }
    .orbit-btn { width: 52px; height: 52px; border-radius: 50%; background: rgba(255,255,255,.08); backdrop-filter: blur(10px); border: 1px solid rgba(168,85,247,.35); color: #e9d5ff; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all .3s ease; box-shadow: 0 4px 15px rgba(0,0,0,.2); }
    .orbit-btn:hover { background: #9333ea; color: #fff; border-color: #9333ea; transform: scale(1.12); box-shadow: 0 8px 25px rgba(147,51,234,.5); }
    .team-orb { position: absolute; border-radius: 50%; filter: blur(80px); opacity: .35; pointer-events: none; }
    @keyframes orbDrift { 0%, 100% { transform: translate(0,0); } 50% { transform: translate(30px,-20px); } }
    .orbit-ellipse { position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%); width: 140%; height: 180px; pointer-events: none; z-index: 1; }
    .orbit-ellipse ellipse { fill: none; stroke: rgba(147,51,234,.35); stroke-width: 1.5; }
    .orbit-dot { position: absolute; width: 10px; height: 10px; background: #9333ea; border-radius: 50%; transform: translate(-50%,-50%); z-index: 2; box-shadow: 0 0 8px rgba(147,51,234,.5); }
    @media (max-width:767px) { .orbit-ring { height: 460px; } .orbit-card { width: 280px; margin-left: -140px; margin-top: -245px; } .orbit-ellipse { bottom: 30px; height: 140px; } }

    /* Value card hover accent */
    .value-card { transition: all 0.4s cubic-bezier(.4,0,.2,1); }
    .value-card:hover { transform: translateY(-8px); box-shadow: 0 24px 48px rgba(124,58,237,0.1); border-color: rgba(124,58,237,0.2); }
</style>

<!-- ══ HERO HEADER ══ -->
<section class="relative min-h-[60vh] flex items-end pb-20 pt-48 overflow-hidden bg-gray-950">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_60%_0%,rgba(124,58,237,0.35),transparent)] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_50%_80%_at_0%_100%,rgba(124,58,237,0.15),transparent)] pointer-events-none"></div>
    <div class="absolute inset-0 opacity-[0.04]" style="background-image:radial-gradient(circle,#a78bfa 1px,transparent 1px);background-size:28px 28px;"></div>

    <!-- Ghost hero image (right) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/corporate_about.png') }}" alt="" class="absolute right-0 top-0 w-[65%] h-full object-cover opacity-25" style="animation: heroZoom 10s ease-out forwards; -webkit-mask-image: linear-gradient(to right, transparent 0%, transparent 10%, black 45%); mask-image: linear-gradient(to right, transparent 0%, transparent 10%, black 45%);">
    </div>
    <style>@keyframes heroZoom { 0%{transform:scale(1.2) translateX(-5%);opacity:0} 100%{transform:scale(1) translateX(0);opacity:1} }</style>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="max-w-3xl" data-aos="fade-up" data-aos-duration="800">

            <h1 class="font-black text-white leading-[0.9] tracking-tight mb-6" style="font-size:clamp(3rem,7vw,5rem);">
                We're<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-violet-300 to-purple-400">IGEN VERITAS</span>
            </h1>
            <p class="text-gray-400 text-lg leading-relaxed max-w-xl">
                Harnessing the power of software and innovation to optimize, elevate, and transform businesses in the digital age.
            </p>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-gray-600" data-aos="fade-up" data-aos-delay="600">
        <span class="text-xs tracking-widest uppercase font-medium">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-gray-600 to-transparent animate-pulse"></div>
    </div>
</section>

<!-- ══ OUR STORY ══ -->
<section class="py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-purple-50 rounded-full blur-3xl opacity-50 translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Image side -->
            <div class="relative" data-aos="fade-right" data-aos-duration="900">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl shadow-purple-500/10">
                    <img src="{{ asset('images/corporate_about.png') }}" alt="IGEN VERITAS Team" class="w-full h-[520px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/40 to-transparent"></div>
                </div>
                <!-- Accent line -->
                <div class="absolute -left-4 top-12 bottom-12 w-1 bg-gradient-to-b from-purple-500 via-violet-400 to-transparent rounded-full"></div>
            </div>

            <!-- Text side -->
            <div data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">

                <h2 class="text-4xl font-black text-gray-900 mb-8 leading-tight tracking-tight">The Vision Behind<br><span class="gradient-text">IGEN VERITAS</span></h2>

                <div class="space-y-6 mb-10">
                    <p class="text-gray-600 leading-relaxed">
                        <strong class="text-gray-900 font-bold">IGEN</strong> represents the spirit of the new generation — born in the digital age, curious, adaptive, and constantly pushing boundaries. It reflects energy, innovation, and a mindset that embraces change rather than fears it.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        <strong class="text-gray-900 font-bold">VERITAS</strong> is the Latin word for <strong class="text-gray-800">truth.</strong> In a world where information spreads faster than ever, truth is more important than technology itself — honesty in communication, integrity in design, and transparency in every solution we build.
                    </p>
                </div>

                <!-- Highlight items -->
                <div class="space-y-5">
                    @foreach([
                        ['icon'=>'🚀','title'=>'Fresh Perspective','body'=>'Innovative ideas brought to life with modern tools and deep technical expertise.'],
                        ['icon'=>'💡','title'=>'Cutting-Edge Tech','body'=>'We leverage the latest software and AI solutions to stay ahead of the curve.'],
                        ['icon'=>'🎯','title'=>'Client-Focused','body'=>'Your success is our mission — every decision we make is guided by your goals.'],
                    ] as $item)
                    <div class="flex items-start gap-4 p-5 bg-gray-50 rounded-2xl border border-gray-100 hover:border-purple-100 hover:bg-purple-50/30 transition-all duration-300">
                        <div class="w-11 h-11 bg-white rounded-xl flex items-center justify-center text-xl shadow-sm flex-shrink-0 border border-gray-100">{{ $item['icon'] }}</div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-0.5">{{ $item['title'] }}</h4>
                            <p class="text-gray-500 text-sm">{{ $item['body'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ VISION & MISSION ══ -->
<section class="py-24 bg-gray-950 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_60%_80%_at_0%_50%,rgba(124,58,237,0.2),transparent)] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_60%_80%_at_100%_50%,rgba(124,58,237,0.15),transparent)] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">

        </div>

        <div class="grid md:grid-cols-2 gap-0 relative">
            <!-- Vertical divider -->
            <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-purple-500/30 to-transparent"></div>

            <div class="p-10 md:pr-16" data-aos="fade-right">
                <h2 class="text-4xl font-black mb-6 leading-tight">Our Vision</h2>
                <p class="text-gray-400 text-lg leading-relaxed">
                    To create a future where businesses operate with clarity, confidence, and control — powered by intelligent technology that works as hard as they do.
                </p>
            </div>

            <div class="p-10 md:pl-16" data-aos="fade-left" data-aos-delay="100">
                <h2 class="text-4xl font-black mb-6 leading-tight">Our Mission</h2>
                <p class="text-gray-400 text-lg leading-relaxed">
                    To design powerful, user-focused software that simplifies operations, accelerates growth, and enables organizations to make smarter decisions — every single day.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ══ CORE VALUES ══ -->
<section class="py-28 bg-gray-50 grid-pattern relative overflow-hidden">
    <!-- Background image -->
    <div class="absolute inset-0 pointer-events-none">
        <img src="{{ asset('images/values_bg.png') }}" alt="" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-white/55"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">

            <h2 class="text-5xl font-black text-gray-900 tracking-tight drop-shadow-md">Core <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600">Values</span></h2>
            <p class="text-gray-800 font-semibold mt-5 max-w-xl mx-auto text-lg drop-shadow-sm">The principles that guide every decision we make and every product we ship.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['n'=>'01','title'=>'Innovation','body'=>'We continuously push boundaries and embrace cutting-edge technologies to deliver forward-thinking solutions that drive real change.','path'=>'M13 10V3L4 14h7v7l9-11h-7z','color'=>'from-purple-500 to-violet-600'],
                ['n'=>'02','title'=>'Integrity','body'=>'Transparency and ethical practices form the foundation of everything we do — building lasting trust with our clients and partners.','path'=>'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z','color'=>'from-violet-500 to-purple-600'],
                ['n'=>'03','title'=>'Excellence','body'=>'We strive for perfection in every project, delivering exceptional quality that exceeds expectations and creates lasting impact.','path'=>'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z','color'=>'from-purple-600 to-fuchsia-600'],
            ] as $i=>$val)
            <div class="value-card group bg-white border border-gray-100 rounded-3xl p-9 shadow-sm cursor-default" data-aos="fade-up" data-aos-delay="{{ ($i+1)*100 }}">
                <div class="flex items-start justify-between mb-8">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br {{ $val['color'] }} text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $val['path'] }}"/></svg>
                    </div>
                    <span class="text-7xl font-black text-gray-50 leading-none select-none">{{ $val['n'] }}</span>
                </div>
                <h3 class="text-2xl font-black text-gray-900 mb-3 group-hover:text-purple-700 transition-colors">{{ $val['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $val['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══ TEAM — Pill Grid ══ -->
<section class="min-h-screen py-16 flex items-center relative overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/visionaries_bg.jpg') }}"
             alt="" class="w-full h-full object-cover"
             style="filter: brightness(0.55); animation: teamBgDrift 20s ease-in-out infinite;">
        <div class="absolute inset-0 bg-gray-950/50"></div>
    </div>
    <style>
        @keyframes teamBgDrift {
            0%, 100% { transform: scale(1.05) translate(0%, 0%); }
            50%      { transform: scale(1.1) translate(-1%, -0.5%); }
        }
    </style>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-5xl md:text-6xl font-black text-white mb-6 tracking-tight">
                Meet The <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-violet-300 to-purple-400">Visionaries</span>
            </h2>
        </div>

        @php
        $teamMembers = [
            ['name' => 'Syarifuddin',    'role' => 'CEO & Founder',  'img' => 'https://images.pexels.com/photos/814133/pexels-photo-814133.jpeg?auto=compress&cs=tinysrgb&w=800',      'bg' => 'bg-[#FDF3C8]'],
            ['name' => 'Arif Azlan',     'role' => 'Front End Dev',  'img' => 'https://images.pexels.com/photos/1779487/pexels-photo-1779487.jpeg?auto=compress&cs=tinysrgb&w=800',  'bg' => 'bg-[#F8F5F2]'],
            ['name' => 'Ariff Norjihan', 'role' => 'UI/UX Designer', 'img' => 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?auto=format&fit=crop&w=800&q=80',      'bg' => 'bg-[#E5F0FA]'],
            ['name' => 'Harith Zulhairi','role' => 'Back End Dev',   'img' => 'https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=800',   'bg' => 'bg-[#FDE1D3]'],
        ];
        @endphp

        <div class="flex flex-wrap justify-center gap-8 lg:gap-14">
            @foreach($teamMembers as $i => $member)
            <div class="w-64 h-[600px] rounded-[8rem] overflow-hidden flex flex-col items-center pt-16 shadow-2xl transition-transform duration-500 hover:-translate-y-3 cursor-default {{ $member['bg'] }}" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="text-center px-4 mb-6 relative z-10 shrink-0">
                    <h3 class="text-gray-900 font-bold text-xl mb-1 tracking-tight">{{ $member['name'] }}</h3>
                    <p class="text-gray-600 font-medium text-sm">{{ $member['role'] }}</p>
                </div>
                <!-- Image Container (Perfectly fills bottom half with arch at top) -->
                <div class="relative w-full flex-1 mt-auto overflow-hidden rounded-t-[8rem]">
                    <img src="{{ Str::startsWith($member['img'], 'http') ? $member['img'] : asset('images/' . $member['img']) }}" alt="{{ $member['name'] }}" class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



<!-- ══ CTA ══ -->
<style>
    @keyframes aboutKenBurns {
        0%, 100% { transform: scale(1.0) translate(0%, 0%); }
        50%       { transform: scale(1.07) translate(-1.5%, -1%); }
    }
</style>
<section class="py-24 bg-white border-t border-gray-100 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-purple-50 rounded-full blur-3xl opacity-60 translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Text (left) -->
            <div data-aos="fade-up">

                <h2 class="text-5xl font-black text-gray-900 mb-6 tracking-tight">Ready to Start<br>Your <span class="gradient-text">Journey?</span></h2>
                <p class="text-gray-500 mb-10 text-lg leading-relaxed">Partner with a team that treats your project like their own. Book a free discovery call today.</p>
                <a href="{{ route('prototype1.contact') }}" class="inline-flex items-center gap-2 bg-primary-gradient text-white px-10 py-4 rounded-full font-bold shadow-lg shadow-purple-500/25 hover:shadow-purple-500/45 hover:-translate-y-0.5 transition-all duration-300 group">
                    Book a Free Consultation
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Image (right) — Ken Burns zoom -->
            <div class="relative" data-aos="fade-left" data-aos-duration="900">
                <div class="rounded-3xl overflow-hidden shadow-2xl shadow-purple-500/10 h-80">
                    <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=900"
                         alt="" class="w-full h-full object-cover"
                         style="animation: aboutKenBurns 14s ease-in-out infinite;">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/20 to-transparent"></div>
                </div>
                <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-purple-50 rounded-2xl -z-10 border border-purple-100"></div>
                <div class="absolute -top-4 -right-4 w-16 h-16 border-2 border-purple-100 rounded-xl -z-10"></div>
            </div>

        </div>
    </div>
</section>

@endsection


