<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IGEN VERITAS | Prototype 2')</title>
    <meta name="description" content="IGEN VERITAS — Smart Web & Mobile App Development. Reliable, scalable, and designed with purpose.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts: Inter + Syne -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ── Base ── */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --clr-bg:       #f9fafb;
            --clr-surface:  #ffffff;
            --clr-surface2: #f3f4f6;
            --clr-border:   rgba(124,58,237,0.15);
            --clr-purple:   #7c3aed;
            --clr-violet:   #6d28d9;
            --clr-accent:   #d8b4fe;
            --clr-text:     #1f2937;
            --clr-muted:    #6b7280;
        }
        html { font-family: 'Inter', sans-serif; background: var(--clr-bg); color: var(--clr-text); scroll-behavior: smooth; }
        body { min-height: 100vh; overflow-x: hidden; }

        /* ── Scrollbar ── */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: #e5e7eb; }
        ::-webkit-scrollbar-thumb { background: var(--clr-purple); border-radius: 4px; }

        /* ── Floating Navbar (Prototype 1 style) ── */
        #p2-nav {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: min(92vw, 1100px);
            z-index: 100;
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
            animation: p2NavEntrance 0.6s cubic-bezier(0.4, 0, 0.2, 1) both;
        }
        #p2-nav.scrolled {
            top: 12px;
            padding: 7px 18px;
            background: rgba(10, 5, 28, 0.97);
            backdrop-filter: blur(28px) saturate(180%);
            -webkit-backdrop-filter: blur(28px) saturate(180%);
            box-shadow: 0 16px 48px rgba(0,0,0,0.55), 0 0 0 0.5px rgba(167,139,250,0.15) inset;
        }
        @keyframes p2NavEntrance {
            from { opacity: 0; transform: translateX(-50%) translateY(-16px); }
            to   { opacity: 1; transform: translateX(-50%) translateY(0); }
        }
        .p2-nav-inner { display: flex; align-items: center; justify-content: space-between; gap: 16px; }
        .p2-nav-logo { flex-shrink: 0; text-decoration: none; transition: opacity 0.3s; display: block; }
        .p2-nav-logo:hover { opacity: 0.8; }
        .p2-nav-logo img { height: 36px; width: auto; display: block; }
        .p2-nav-links { display: flex; align-items: center; gap: 4px; list-style: none; margin: 0; padding: 0; }
        .p2-nav-link {
            position: relative; display: block;
            padding: 7px 15px; border-radius: 999px;
            color: rgba(255,255,255,0.65); font-size: 13.5px; font-weight: 500;
            letter-spacing: 0.3px; text-decoration: none;
            transition: color 0.25s, background 0.25s; white-space: nowrap;
        }
        .p2-nav-link:hover { color: #fff; background: rgba(167,139,250,0.12); }
        .p2-nav-link.active { color: #fff; background: rgba(167,139,250,0.15); }
        .p2-nav-link.active::before {
            content: ''; position: absolute;
            bottom: 5px; left: 50%; transform: translateX(-50%);
            width: 4px; height: 4px; border-radius: 50%;
            background: #a78bfa; box-shadow: 0 0 6px #a78bfa;
        }
        .p2-nav-cta {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 8px 20px; border-radius: 999px;
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: #fff; font-size: 13px; font-weight: 600;
            letter-spacing: 0.3px; text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 16px rgba(124,58,237,0.45);
            white-space: nowrap;
        }
        .p2-nav-cta:hover { transform: translateY(-1px); box-shadow: 0 8px 24px rgba(124,58,237,0.65); }
        .p2-nav-cta:active { transform: translateY(0); }

        /* ── Mobile hamburger ── */
        #p2-mob-btn {
            display: none;
            background: rgba(167,139,250,0.1);
            border: 1px solid rgba(167,139,250,0.2);
            border-radius: 10px; padding: 7px;
            cursor: pointer; color: #fff; line-height: 0;
            transition: background 0.2s;
        }
        #p2-mob-btn:hover { background: rgba(167,139,250,0.2); }
        #p2-mob-menu {
            position: fixed;
            top: 0; left: 50%; transform: translateX(-50%);
            width: min(92vw, 1100px);
            background: rgba(8, 11, 20, 0.97);
            backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(167,139,250,0.18);
            border-radius: 24px; padding: 80px 24px 28px;
            z-index: 99; display: none; flex-direction: column; gap: 4px;
            box-shadow: 0 24px 60px rgba(0,0,0,0.6);
        }
        #p2-mob-menu.open { display: flex; animation: p2MobIn 0.3s cubic-bezier(0.4,0,0.2,1) both; }
        @keyframes p2MobIn {
            from { opacity: 0; transform: translateX(-50%) translateY(-12px) scale(0.97); }
            to   { opacity: 1; transform: translateX(-50%) translateY(0) scale(1); }
        }
        #p2-mob-menu a { display: block; padding: 13px 16px; color: rgba(255,255,255,0.75); font-size: 15px; font-weight: 500; border-radius: 12px; transition: background 0.2s, color 0.2s; text-decoration: none; }
        #p2-mob-menu a:hover { background: rgba(167,139,250,0.12); color: #fff; }
        #p2-mob-menu .mob-cta { margin-top: 8px; text-align: center; background: linear-gradient(135deg,#7c3aed,#a78bfa); color: #fff; font-weight: 600; border-radius: 999px; box-shadow: 0 4px 16px rgba(124,58,237,0.45); }
        #p2-mob-close { position: absolute; top: 18px; right: 20px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 6px; cursor: pointer; color: #fff; line-height: 0; }

        /* ── Page wrapper ── */
        #p2-content {
            min-height: 100vh;
        }

        /* ── Shared utilities ── */
        .p2-label {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 5px 14px; border-radius: 999px;
            border: 1px solid rgba(124,58,237,0.25);
            background: rgba(124,58,237,0.07);
            color: var(--clr-purple);
            font-size: 10px; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase;
        }
        .p2-gradient-text {
            background: linear-gradient(135deg, #7c3aed 0%, #d8b4fe 100%);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .p2-btn-primary {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 14px 28px; border-radius: 10px;
            background: linear-gradient(135deg, #7c3aed, #6d28d9);
            color: #fff; font-weight: 700; font-size: 14px; letter-spacing: 0.02em;
            text-decoration: none; border: none; cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(124,58,237,0.3);
            position: relative; overflow: hidden;
        }
        .p2-btn-primary::after {
            content: ''; position: absolute; inset: 0;
            background: linear-gradient(135deg, transparent, rgba(255,255,255,0.12));
            opacity: 0; transition: opacity 0.3s;
        }
        .p2-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 10px 32px rgba(124,58,237,0.5); }
        .p2-btn-primary:hover::after { opacity: 1; }

        .p2-btn-ghost {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 13px 28px; border-radius: 10px;
            border: 1px solid rgba(124,58,237,0.3);
            color: var(--clr-purple); font-weight: 600; font-size: 14px;
            text-decoration: none; background: transparent; cursor: pointer;
            transition: all 0.3s ease;
        }
        .p2-btn-ghost:hover { border-color: var(--clr-purple); background: rgba(124,58,237,0.08); }

        /* ── Section reveal animation ── */
        .p2-reveal {
            opacity: 0; transform: translateY(32px);
            transition: opacity 0.7s cubic-bezier(0.4,0,0.2,1), transform 0.7s cubic-bezier(0.4,0,0.2,1);
        }
        .p2-reveal.visible { opacity: 1; transform: translateY(0); }
        .p2-reveal-left {
            opacity: 0; transform: translateX(-32px);
            transition: opacity 0.7s cubic-bezier(0.4,0,0.2,1), transform 0.7s cubic-bezier(0.4,0,0.2,1);
        }
        .p2-reveal-left.visible { opacity: 1; transform: translateX(0); }
        .p2-reveal-right {
            opacity: 0; transform: translateX(32px);
            transition: opacity 0.7s cubic-bezier(0.4,0,0.2,1), transform 0.7s cubic-bezier(0.4,0,0.2,1);
        }
        .p2-reveal-right.visible { opacity: 1; transform: translateX(0); }

        /* ── Footer ── */
        .p2-footer {
            background: #111827;
            border-top: 1px solid rgba(124,58,237,0.2);
            padding: 48px 60px 32px;
        }
        .p2-footer-inner { display: flex; align-items: flex-start; gap: 60px; flex-wrap: wrap; }
        .p2-footer-brand { flex: 1; min-width: 200px; }
        .p2-footer-brand p { color: rgba(156,163,175,1); font-size: 13px; line-height: 1.8; margin-top: 12px; max-width: 300px; }
        .p2-footer-col h5 { color: #fff; font-size: 11px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 16px; }
        .p2-footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
        .p2-footer-col ul a { color: #9ca3af; font-size: 13px; text-decoration: none; transition: color 0.2s; }
        .p2-footer-col ul a:hover { color: #d8b4fe; }
        .p2-footer-bottom { margin-top: 40px; padding-top: 24px; border-top: 1px solid rgba(255,255,255,0.06); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; }
        .p2-footer-bottom p { color: rgba(156,163,175,0.5); font-size: 12px; }

        @media (max-width: 767px) {
            #p2-mob-btn { display: flex; }
            .p2-nav-links, .p2-nav-cta { display: none; }
            .p2-footer { padding: 40px 24px 24px; }
        }
    </style>
</head>
<body>

    <!-- ── Floating Navbar ── -->
    <nav id="p2-nav">
        <div class="p2-nav-inner">
            <a href="{{ route('prototype2.home') }}" class="p2-nav-logo">
                <img src="{{ asset('igen-logo.png') }}" alt="IGEN VERITAS">
            </a>

            <ul class="p2-nav-links">
                <li><a href="{{ route('prototype2.home') }}"     class="p2-nav-link {{ request()->routeIs('prototype2.home')     ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('prototype2.about') }}"    class="p2-nav-link {{ request()->routeIs('prototype2.about')    ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ route('prototype2.services') }}" class="p2-nav-link {{ request()->routeIs('prototype2.services') ? 'active' : '' }}">Services</a></li>
            </ul>

            <div style="display:flex;align-items:center;gap:10px;">
                <a href="{{ route('prototype2.contact') }}" class="p2-nav-cta">
                    Contact Us
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <button id="p2-mob-btn" aria-label="Open menu">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round">
                        <line x1="3" y1="6"  x2="21" y2="6"/>
                        <line x1="3" y1="12" x2="21" y2="12"/>
                        <line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- ── Mobile Dropdown ── -->
    <div id="p2-mob-menu">
        <button id="p2-mob-close" aria-label="Close menu">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6"  y1="6" x2="18" y2="18"/>
            </svg>
        </button>
        <a href="{{ route('prototype2.home') }}" style="padding-bottom:0;margin-bottom:4px;">
            <img src="{{ asset('igen-logo.png') }}" alt="IGEN VERITAS" style="height:30px;width:auto;display:block;margin-bottom:8px;">
        </a>
        <a href="{{ route('prototype2.home') }}">Home</a>
        <a href="{{ route('prototype2.about') }}">About Us</a>
        <a href="{{ route('prototype2.services') }}">Services</a>
        <a href="{{ route('prototype2.contact') }}" class="mob-cta">Contact Us →</a>
    </div>

    <!-- ── Main Content ── -->
    <div id="p2-content">
        @yield('content')

        <!-- ── Footer ── -->
        <footer class="p2-footer">
            <div class="p2-footer-inner">
                <div class="p2-footer-brand">
                    <img src="{{ asset('igen-logo.png') }}" alt="IGEN VERITAS" style="height:36px;">
                    <p>Smart Web & Mobile App Development. Reliable, scalable, and designed with purpose.</p>
                </div>
                <div class="p2-footer-col">
                    <h5>Navigate</h5>
                    <ul>
                        <li><a href="{{ route('prototype2.home') }}">Home</a></li>
                        <li><a href="{{ route('prototype2.about') }}">About Us</a></li>
                        <li><a href="{{ route('prototype2.services') }}">Services</a></li>
                        <li><a href="{{ route('prototype2.contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="p2-footer-col">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="p2-footer-col">
                    <h5>Social Media</h5>
                    <ul>
                        <li>
                            <a href="https://www.instagram.com/igen.veritas/" target="_blank" aria-label="Instagram" style="display: flex; align-items: center; gap: 8px;">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                <span>igen.veritas</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="p2-footer-col">
                    <h5>Contact</h5>
                    <ul>
                        <li><a href="mailto:igenveritas@gmail.com">igenveritas@gmail.com</a></li>
                        <li><a href="tel:+60173103966">+60 17 310 3966</a></li>
                        <li><a href="#">Batu Caves, Selangor</a></li>
                    </ul>
                </div>
            </div>
            <div class="p2-footer-bottom">
                <p>© 2026 IGEN VERITAS. All rights reserved.</p>
                <p style="color:rgba(167,139,250,0.4)">Prototype 2 — Dark Canvas</p>
            </div>
        </footer>
    </div>

    <script>
        // Floating nav scroll state
        const p2Nav = document.getElementById('p2-nav');
        window.addEventListener('scroll', () => {
            p2Nav.classList.toggle('scrolled', window.scrollY > 40);
        }, { passive: true });

        // Mobile menu
        const mob = document.getElementById('p2-mob-menu');
        document.getElementById('p2-mob-btn').addEventListener('click', () => mob.classList.add('open'));
        document.getElementById('p2-mob-close').addEventListener('click', () => mob.classList.remove('open'));
        document.addEventListener('click', (e) => {
            if (mob.classList.contains('open') &&
                !mob.contains(e.target) &&
                !document.getElementById('p2-mob-btn').contains(e.target)) {
                mob.classList.remove('open');
            }
        });

        // Scroll reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    entry.target.querySelectorAll('.p2-stagger-child').forEach((child, i) => {
                        setTimeout(() => child.classList.add('visible'), i * 120);
                    });
                }
            });
        }, { threshold: 0.05, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('.p2-reveal, .p2-reveal-left, .p2-reveal-right').forEach(el => observer.observe(el));
    </script>
    @stack('scripts')
</body>
</html>
