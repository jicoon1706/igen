<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IGEN VERITAS | Prototype 1')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f9fafb; }

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
            background: rgba(10, 5, 28, 0.92);
            backdrop-filter: blur(20px) saturate(160%);
            -webkit-backdrop-filter: blur(20px) saturate(160%);
            border: 1px solid rgba(167, 139, 250, 0.2);
            box-shadow:
                0 8px 32px rgba(0,0,0,0.4),
                0 0 0 0.5px rgba(255,255,255,0.05) inset,
                0 1px 0 rgba(255,255,255,0.08) inset;
            padding: 10px 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: navEntrance 0.6s cubic-bezier(0.4, 0, 0.2, 1) both;
        }

        #floating-nav.scrolled {
            top: 12px;
            padding: 7px 18px;
            background: rgba(10, 5, 28, 0.97);
            backdrop-filter: blur(28px) saturate(180%);
            -webkit-backdrop-filter: blur(28px) saturate(180%);
            box-shadow: 0 16px 48px rgba(0,0,0,0.55), 0 0 0 0.5px rgba(167,139,250,0.15) inset;
        }

        @keyframes navEntrance {
            from { opacity: 0; transform: translateX(-50%) translateY(-16px); }
            to   { opacity: 1; transform: translateX(-50%) translateY(0); }
        }

        .nav-inner { display: flex; align-items: center; justify-content: space-between; gap: 16px; }

        .nav-logo { flex-shrink: 0; text-decoration: none; transition: opacity 0.3s; display: block; }
        .nav-logo:hover { opacity: 0.85; }
        .nav-logo img { height: 36px; width: auto; display: block; }

        .nav-links { display: flex; align-items: center; gap: 4px; list-style: none; margin: 0; padding: 0; }

        .nav-link {
            position: relative;
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
        .nav-link.active { color: #fff; background: rgba(167,139,250,0.15); }
        .nav-link.active::before {
            content: '';
            position: absolute;
            left: 6px;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: #a78bfa;
            box-shadow: 0 0 6px #a78bfa;
        }

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
        }
        #mobile-menu.open { display: flex; animation: mobileMenuIn 0.3s cubic-bezier(0.4,0,0.2,1) both; }

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
<body class="antialiased text-gray-800 flex flex-col min-h-screen">

    <!-- Floating Navigation -->
    <nav id="floating-nav">
        <div class="nav-inner">
            <a href="{{ route('prototype1.home') }}" class="nav-logo">
                <img src="{{ asset('igen-logo.png') }}" alt="IGEN VERITAS">
            </a>

            <ul class="nav-links">
                <li><a href="{{ route('prototype1.home') }}"     class="nav-link {{ request()->routeIs('prototype1.home')     ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('prototype1.about') }}"    class="nav-link {{ request()->routeIs('prototype1.about')    ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ route('prototype1.services') }}" class="nav-link {{ request()->routeIs('prototype1.services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('prototype1.portfolio') }}" class="nav-link {{ request()->routeIs('prototype1.portfolio') ? 'active' : '' }}">Portfolio</a></li>
            </ul>

            <div style="display:flex;align-items:center;gap:10px;">
                <a href="{{ route('prototype1.contact') }}" class="nav-cta">
                    Contact Us
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
        <a href="{{ route('prototype1.home') }}" style="padding-bottom:0;margin-bottom:4px;">
            <img src="{{ asset('igen-logo.png') }}" alt="IGEN VERITAS" style="height:30px;width:auto;display:block;margin-bottom:8px;">
        </a>
        <a href="{{ route('prototype1.home') }}">Home</a>
        <a href="{{ route('prototype1.about') }}">About Us</a>
        <a href="{{ route('prototype1.services') }}">Services</a>
        <a href="{{ route('prototype1.portfolio') }}">Portfolio</a>
        <a href="{{ route('prototype1.contact') }}" class="mobile-cta">Contact Us →</a>
    </div>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black pt-16 pb-8 border-t border-purple-900/50 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <a href="{{ route('prototype1.home') }}" class="block mb-4 transition-opacity hover:opacity-80">
                        <img src="{{ asset('igen-logo.png') }}" alt="IGEN VERITAS" style="height: 36px; width: auto; display: block;">
                    </a>
                    <p class="text-gray-400 max-w-sm mb-6 leading-relaxed">Smart Web & Mobile App Development. Reliable, scalable, and designed with purpose.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('prototype1.services') }}" class="text-gray-400 hover:text-purple-400 transition-colors">Services</a></li>
                        <li><a href="{{ route('prototype1.about') }}" class="text-gray-400 hover:text-purple-400 transition-colors">About Us</a></li>
                        <li><a href="{{ route('prototype1.contact') }}" class="text-gray-400 hover:text-purple-400 transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Social Media</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="https://www.instagram.com/igen.veritas/" target="_blank" class="text-gray-400 hover:text-purple-400 transition-colors flex items-center gap-2" aria-label="Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                <span>igen.veritas</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">© 2026 IGEN VERITAS. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize Animate On Scroll
        AOS.init({
            once: true,
            offset: 50,
        });
    </script>
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

        document.addEventListener('click', (e) => {
            if (mobileMenu.classList.contains('open') &&
                !mobileMenu.contains(e.target) &&
                !mobileBtn.contains(e.target)) {
                mobileMenu.classList.remove('open');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
