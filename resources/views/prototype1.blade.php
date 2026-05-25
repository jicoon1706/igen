<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype 1 | Corporate Edition (IGEN-VERITAS)</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f9fafb; }

        .gradient-text {
            background: linear-gradient(135deg, #7c3aed 0%, #d8b4fe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .bg-primary-gradient { background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%); }
        .hover-bg-primary-dark:hover { background: linear-gradient(135deg, #6d28d9 0%, #581c87 100%); }

        .hover-scale { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-scale:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
        }

        /* ── Floating Navbar ── */
        #floating-nav {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: min(92vw, 1100px);
            z-index: 50;
            border-radius: 999px;
            background: rgba(8, 4, 20, 0.55);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(167, 139, 250, 0.18);
            box-shadow:
                0 8px 32px rgba(0,0,0,0.3),
                0 0 0 0.5px rgba(255,255,255,0.04) inset,
                0 1px 0 rgba(255,255,255,0.07) inset;
            padding: 10px 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: navEntrance 0.6s cubic-bezier(0.4, 0, 0.2, 1) both;
        }

        #floating-nav.scrolled {
            top: 12px;
            padding: 7px 18px;
            background: rgba(8, 4, 20, 0.82);
            backdrop-filter: blur(28px) saturate(200%);
            -webkit-backdrop-filter: blur(28px) saturate(200%);
            box-shadow: 0 16px 48px rgba(0,0,0,0.5), 0 0 0 0.5px rgba(167,139,250,0.12) inset;
        }

        @keyframes navEntrance {
            from { opacity: 0; transform: translateX(-50%) translateY(-16px); }
            to   { opacity: 1; transform: translateX(-50%) translateY(0); }
        }

        .nav-inner { display: flex; align-items: center; justify-content: space-between; gap: 16px; }

        .nav-logo { flex-shrink: 0; font-weight: 900; font-size: 18px; letter-spacing: -0.02em; color: #fff; text-decoration: none; transition: opacity 0.3s; }
        .nav-logo:hover { opacity: 0.85; }
        .nav-logo span { color: #a78bfa; }

        .nav-links { display: flex; align-items: center; gap: 4px; list-style: none; margin: 0; padding: 0; }

        .nav-link {
            display: block;
            padding: 7px 15px;
            border-radius: 999px;
            color: rgba(255,255,255,0.75);
            font-size: 13.5px;
            font-weight: 500;
            letter-spacing: 0.3px;
            text-decoration: none;
            transition: color 0.25s, background 0.25s;
            white-space: nowrap;
        }
        .nav-link:hover { color: #fff; background: rgba(167,139,250,0.12); }

        .nav-cta {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 20px;
            border-radius: 999px;
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.3px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 16px rgba(124,58,237,0.4);
            white-space: nowrap;
        }
        .nav-cta:hover { transform: translateY(-1px); box-shadow: 0 8px 24px rgba(124,58,237,0.55); }
        .nav-cta:active { transform: translateY(0); }

        #mobile-menu-btn {
            display: none;
            background: rgba(167,139,250,0.1);
            border: 1px solid rgba(167,139,250,0.2);
            border-radius: 10px;
            padding: 7px;
            cursor: pointer;
            color: #fff;
            line-height: 0;
            transition: background 0.2s;
        }
        #mobile-menu-btn:hover { background: rgba(167,139,250,0.2); }

        #mobile-menu {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: min(92vw, 1100px);
            background: rgba(8, 4, 20, 0.96);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(167,139,250,0.18);
            border-radius: 24px;
            padding: 80px 24px 28px;
            z-index: 49;
            display: none;
            flex-direction: column;
            gap: 4px;
            box-shadow: 0 24px 60px rgba(0,0,0,0.5);
            animation: mobileMenuIn 0.3s cubic-bezier(0.4,0,0.2,1) both;
        }
        #mobile-menu.open { display: flex; }

        @keyframes mobileMenuIn {
            from { opacity: 0; transform: translateX(-50%) translateY(-12px) scale(0.97); }
            to   { opacity: 1; transform: translateX(-50%) translateY(0) scale(1); }
        }

        #mobile-menu a { display: block; padding: 13px 16px; color: rgba(255,255,255,0.8); font-size: 15px; font-weight: 500; border-radius: 12px; transition: background 0.2s, color 0.2s; text-decoration: none; }
        #mobile-menu a:hover { background: rgba(167,139,250,0.12); color: #fff; }
        #mobile-menu .mobile-cta { margin-top: 8px; text-align: center; background: linear-gradient(135deg,#7c3aed,#a78bfa); color: #fff; font-weight: 600; border-radius: 999px; box-shadow: 0 4px 16px rgba(124,58,237,0.4); }
        #mobile-close { position: absolute; top: 18px; right: 20px; background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 6px; cursor: pointer; color: #fff; line-height: 0; }

        @media (max-width: 767px) {
            #mobile-menu-btn { display: flex; }
            .nav-links, .nav-cta { display: none; }
        }
    </style>
</head>
<body class="antialiased text-gray-800">

    <!-- Floating Navigation -->
    <nav id="floating-nav">
        <div class="nav-inner">
            <a href="#" class="nav-logo">IGEN <span>VERITAS</span></a>

            <ul class="nav-links">
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#about"    class="nav-link">About</a></li>
                <li><a href="#contact"  class="nav-link">Contact</a></li>
            </ul>

            <div style="display:flex;align-items:center;gap:10px;">
                <a href="#contact" class="nav-cta">
                    Get Started
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <button id="mobile-menu-btn" aria-label="Open menu">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round">
                        <line x1="3" y1="6"  x2="21" y2="6"/>
                        <line x1="3" y1="12" x2="21" y2="12"/>
                        <line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Dropdown -->
    <div id="mobile-menu">
        <button id="mobile-close" aria-label="Close menu">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6"  y1="6" x2="18" y2="18"/>
            </svg>
        </button>
        <a href="#services">Services</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="#contact" class="mobile-cta">Get Started →</a>
    </div>

    <!-- Hero Section -->
    <section class="relative bg-white pt-32 pb-32 overflow-hidden border-b border-gray-100">
        <!-- Decorative blurred orb -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-purple-200/50 rounded-full blur-3xl opacity-60 -z-10 translate-x-1/2 -translate-y-1/4"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <span class="text-purple-600 font-bold tracking-widest uppercase text-xs mb-4 block">Professional Tech Solutions</span>
                    <h1 class="text-5xl lg:text-6xl font-black text-gray-900 leading-tight mb-6">
                        Smart Web & Mobile<br>App Development
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg leading-relaxed">
                        Reliable, scalable, and designed with purpose. We create digital experiences that elevate your business operations and drive sustainable growth.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-primary-gradient text-white px-8 py-3.5 rounded-full text-center font-semibold hover-bg-primary-dark transition-all shadow-lg shadow-purple-500/30 transform hover:-translate-y-0.5">Explore Services</a>
                        <a href="#about" class="bg-white border-2 border-gray-200 text-gray-700 px-8 py-3.5 rounded-full text-center font-semibold hover:border-purple-600 hover:text-purple-600 transition-all">Learn More</a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('images/corporate_hero.png') }}" alt="Tech Team" class="rounded-2xl shadow-2xl w-full object-cover h-[500px]">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="px-4 py-1.5 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold mb-4 inline-block">What We Do</span>
                <h2 class="text-4xl font-black text-gray-900 mb-4">Our Core Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Reliable web and mobile solutions tailored to your business needs, structured for maximum impact.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Website Development -->
                <div class="bg-white p-10 rounded-2xl border border-gray-100 hover-scale" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Website Development</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        We create modern, responsive websites that look great on all devices. Fast, clean, and optimized for business management.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded text-xs font-semibold">Responsive</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded text-xs font-semibold">Fast Loading</span>
                    </div>
                    <a href="#contact" class="text-purple-600 font-semibold hover:text-purple-800 transition-colors inline-flex items-center text-sm">Get Started <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>

                <!-- Mobile App Development -->
                <div class="bg-white p-10 rounded-2xl border border-gray-100 hover-scale" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Mobile App Development</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Powerful native and cross-platform mobile applications that engage users on iOS and Android. Intuitive and scalable.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded text-xs font-semibold">iOS & Android</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded text-xs font-semibold">Cross-Platform</span>
                    </div>
                    <a href="#contact" class="text-purple-600 font-semibold hover:text-purple-800 transition-colors inline-flex items-center text-sm">Get Started <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Calendar Booking (Alpine.js integrated) -->
    <section id="contact" class="py-24 bg-white border-t border-gray-100 relative overflow-hidden">
        <!-- Decorative blurred orb -->
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-200/40 rounded-full blur-3xl opacity-60 -z-10 -translate-x-1/2 translate-y-1/4"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="bookingApp()">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-black text-gray-900 mb-4">Ready to Transform Your <span class="gradient-text">Digital Presence?</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Schedule a dedicated session with our experts. Select a date and time that works best for you.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left: Contact Info -->
                <div class="lg:col-span-4" data-aos="fade-right">
                    <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 h-full">
                        <h3 class="text-xl font-bold text-gray-900 mb-8">Contact Information</h3>
                        <div class="space-y-8">
                            <div class="flex items-start">
                                <div class="bg-white p-3 rounded-lg shadow-sm mr-4 text-purple-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Email</p>
                                    <p class="text-gray-900 font-semibold">igenveritas@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-white p-3 rounded-lg shadow-sm mr-4 text-purple-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Phone</p>
                                    <p class="text-gray-900 font-semibold">+60 17 310 3966</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-white p-3 rounded-lg shadow-sm mr-4 text-purple-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Location</p>
                                    <p class="text-gray-900 font-semibold leading-relaxed">Batu Caves,<br>Selangor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Booking App -->
                <div class="lg:col-span-8 bg-white p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 overflow-hidden relative min-h-[500px]" data-aos="fade-left">
                    
                    <!-- Progress Bar -->
                    <div class="flex items-center justify-between mb-8 relative px-4" x-show="step < 4">
                        <div class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-100 -z-10 transform -translate-y-1/2"></div>
                        <div class="absolute top-1/2 left-0 h-0.5 bg-purple-600 -z-10 transform -translate-y-1/2 transition-all duration-500" :style="`width: ${(step-1) * 50}%`"></div>
                        
                        <div class="flex flex-col items-center">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm transition-colors duration-300" :class="step >= 1 ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-500'">1</div>
                            <span class="text-xs font-semibold mt-2" :class="step >= 1 ? 'text-gray-900' : 'text-gray-400'">Date</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm transition-colors duration-300" :class="step >= 2 ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-500'">2</div>
                            <span class="text-xs font-semibold mt-2" :class="step >= 2 ? 'text-gray-900' : 'text-gray-400'">Time</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm transition-colors duration-300" :class="step >= 3 ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-500'">3</div>
                            <span class="text-xs font-semibold mt-2" :class="step >= 3 ? 'text-gray-900' : 'text-gray-400'">Details</span>
                        </div>
                    </div>

                    <div class="relative overflow-hidden">
                        <!-- Step 1: Calendar -->
                        <div x-show="step === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-8" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300 absolute top-0 w-full" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-8">
                            <h4 class="text-lg font-bold text-gray-900 mb-4">Select a Date</h4>
                            <div class="border border-gray-200 rounded-xl p-6">
                                <div class="flex justify-between items-center mb-6">
                                    <button class="p-2 text-gray-400 hover:text-purple-600 bg-gray-50 rounded-lg"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
                                    <span class="font-bold text-gray-900">May 2026</span>
                                    <button class="p-2 text-gray-400 hover:text-purple-600 bg-gray-50 rounded-lg"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
                                </div>
                                <div class="grid grid-cols-7 gap-2 text-center text-sm mb-4">
                                    <div class="text-gray-400 font-semibold">Su</div><div class="text-gray-400 font-semibold">Mo</div><div class="text-gray-400 font-semibold">Tu</div><div class="text-gray-400 font-semibold">We</div><div class="text-gray-400 font-semibold">Th</div><div class="text-gray-400 font-semibold">Fr</div><div class="text-gray-400 font-semibold">Sa</div>
                                </div>
                                <div class="grid grid-cols-7 gap-2 text-center">
                                    <!-- Empty slots -->
                                    <div></div><div></div><div></div><div></div><div></div>
                                    <!-- Days -->
                                    <template x-for="day in 31">
                                        <button 
                                            @click="selectDate(day)"
                                            class="h-10 w-full rounded-lg flex items-center justify-center text-sm font-semibold transition-colors"
                                            :class="isPast(day) ? 'text-gray-300 cursor-not-allowed' : (selectedDate === day ? 'bg-purple-600 text-white shadow-md' : 'text-gray-700 hover:bg-purple-50 hover:text-purple-700')"
                                            :disabled="isPast(day)"
                                            x-text="day"
                                        ></button>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Time Slots -->
                        <div x-show="step === 2" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-8" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300 absolute top-0 w-full" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-8">
                            <div class="flex items-center mb-6">
                                <button @click="step = 1" class="mr-4 p-2 rounded-full hover:bg-gray-100 text-gray-500 transition-colors"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></button>
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900">Select a Time</h4>
                                    <p class="text-sm text-gray-500">For May <span x-text="selectedDate"></span>, 2026</p>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                                <template x-for="time in times">
                                    <button 
                                        @click="selectTime(time)"
                                        class="py-4 px-4 border rounded-xl text-sm font-semibold transition-all"
                                        :class="selectedTime === time ? 'border-purple-600 bg-purple-50 text-purple-700 ring-1 ring-purple-600' : 'border-gray-200 text-gray-700 hover:border-purple-300'"
                                        x-text="time"
                                    ></button>
                                </template>
                            </div>
                            
                            <div class="mt-8 flex justify-end">
                                <button @click="step = 3" :disabled="!selectedTime" class="bg-primary-gradient text-white px-8 py-3 rounded-full font-semibold hover-bg-primary-dark transition-all shadow-md disabled:opacity-50 disabled:cursor-not-allowed">Continue</button>
                            </div>
                        </div>

                        <!-- Step 3: Form -->
                        <div x-show="step === 3" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-8" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300 absolute top-0 w-full" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-8">
                            <div class="flex items-center mb-6">
                                <button @click="step = 2" class="mr-4 p-2 rounded-full hover:bg-gray-100 text-gray-500 transition-colors"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></button>
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900">Your Details</h4>
                                    <p class="text-sm text-gray-500">May <span x-text="selectedDate"></span>, 2026 at <span x-text="selectedTime"></span></p>
                                </div>
                            </div>
                            
                            <form @submit.prevent="submitBooking" class="space-y-5">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Full Name</label>
                                        <input type="text" required class="w-full bg-gray-50 border border-gray-200 rounded-xl shadow-sm focus:border-purple-500 focus:ring-purple-500 py-3 px-4 outline-none transition-colors" placeholder="John Doe">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Phone Number</label>
                                        <input type="tel" required class="w-full bg-gray-50 border border-gray-200 rounded-xl shadow-sm focus:border-purple-500 focus:ring-purple-500 py-3 px-4 outline-none transition-colors" placeholder="+60 12 345 6789">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Email Address</label>
                                    <input type="email" required class="w-full bg-gray-50 border border-gray-200 rounded-xl shadow-sm focus:border-purple-500 focus:ring-purple-500 py-3 px-4 outline-none transition-colors" placeholder="john@example.com">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Message (Optional)</label>
                                    <textarea rows="3" class="w-full bg-gray-50 border border-gray-200 rounded-xl shadow-sm focus:border-purple-500 focus:ring-purple-500 py-3 px-4 outline-none transition-colors" placeholder="Briefly describe what you'd like to discuss..."></textarea>
                                </div>
                                <div class="pt-4 flex justify-end">
                                    <button type="submit" class="bg-primary-gradient text-white px-8 py-3.5 rounded-full font-bold hover-bg-primary-dark transition-all shadow-lg flex items-center">
                                        <span x-show="!loading">Confirm Booking</span>
                                        <svg x-show="loading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" style="display: none;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Step 4: Success -->
                        <div x-show="step === 4" style="display: none;" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="text-center py-12">
                            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <h3 class="text-2xl font-black text-gray-900 mb-2">Booking Confirmed!</h3>
                            <p class="text-gray-600 mb-6">Your consultation has been scheduled for<br><span class="font-bold text-gray-900">May <span x-text="selectedDate"></span>, 2026 at <span x-text="selectedTime"></span></span>.</p>
                            <p class="text-sm text-gray-500">We've sent a calendar invitation to your email.</p>
                            <button @click="step = 1; selectedDate = null; selectedTime = null" class="mt-8 text-purple-600 font-semibold hover:text-purple-800 transition-colors">Book another session</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 pt-16 pb-8 border-t border-purple-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <span class="font-black text-2xl tracking-tight text-white mb-4 block">IGEN <span class="text-purple-500">VERITAS</span></span>
                    <p class="text-gray-400 max-w-sm mb-6 leading-relaxed">Smart Web & Mobile App Development. Reliable, scalable, and designed with purpose.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#services" class="text-gray-400 hover:text-purple-400 transition-colors">Services</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-purple-400 transition-colors">About Us</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-purple-400 transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">© 2026 IGEN VERITAS. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating nav script -->
    <script>
        const floatingNav = document.getElementById('floating-nav');
        const mobileBtn   = document.getElementById('mobile-menu-btn');
        const mobileMenu  = document.getElementById('mobile-menu');
        const mobileClose = document.getElementById('mobile-close');

        window.addEventListener('scroll', () => {
            floatingNav.classList.toggle('scrolled', window.scrollY > 40);
        }, { passive: true });

        mobileBtn.addEventListener('click', () => mobileMenu.classList.add('open'));
        mobileClose.addEventListener('click', () => mobileMenu.classList.remove('open'));

        // Close on link click (single-page anchor nav)
        mobileMenu.querySelectorAll('a').forEach(a =>
            a.addEventListener('click', () => mobileMenu.classList.remove('open'))
        );

        document.addEventListener('click', (e) => {
            if (mobileMenu.classList.contains('open') &&
                !mobileMenu.contains(e.target) &&
                !mobileBtn.contains(e.target)) {
                mobileMenu.classList.remove('open');
            }
        });
    </script>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize Animate On Scroll
        AOS.init({
            once: true,
            offset: 50,
        });

        // Alpine.js Booking Logic
        document.addEventListener('alpine:init', () => {
            Alpine.data('bookingApp', () => ({
                step: 1,
                selectedDate: null,
                selectedTime: null,
                loading: false,
                times: ['09:00 AM', '10:00 AM', '11:30 AM', '01:00 PM', '02:30 PM', '04:00 PM'],
                
                isPast(day) {
                    return day < 10; // Mock past dates logic
                },
                
                selectDate(day) {
                    if (this.isPast(day)) return;
                    this.selectedDate = day;
                    this.step = 2;
                },
                
                selectTime(time) {
                    this.selectedTime = time;
                },
                
                submitBooking() {
                    this.loading = true;
                    // Simulate API call
                    setTimeout(() => {
                        this.loading = false;
                        this.step = 4;
                    }, 1500);
                }
            }))
        })
    </script>
</body>
</html>
