<?php
// includes/header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - IGEN VERITAS' : 'IGEN VERITAS'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", Helvetica, sans-serif;
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
                0 8px 32px rgba(0, 0, 0, 0.45),
                0 0 0 0.5px rgba(255, 255, 255, 0.04) inset,
                0 1px 0 rgba(255, 255, 255, 0.07) inset;
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
            box-shadow:
                0 16px 48px rgba(0, 0, 0, 0.6),
                0 0 0 0.5px rgba(167, 139, 250, 0.12) inset;
        }

        @keyframes navEntrance {
            from { opacity: 0; transform: translateX(-50%) translateY(-16px); }
            to   { opacity: 1; transform: translateX(-50%) translateY(0); }
        }

        /* Nav inner row */
        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        /* Logo */
        .logo-container {
            flex-shrink: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        .logo-container:hover { transform: scale(1.06); opacity: 0.9; }
        .logo-container img { width: 100px; height: auto; display: block; }

        /* Links */
        .nav-links {
            display: flex;
            align-items: center;
            gap: 4px;
            list-style: none;
        }

        .nav-link {
            position: relative;
            display: block;
            padding: 7px 14px;
            border-radius: 999px;
            color: rgba(255, 255, 255, 0.75);
            font-size: 13.5px;
            font-weight: 500;
            letter-spacing: 0.3px;
            transition: color 0.25s ease, background 0.25s ease;
            white-space: nowrap;
        }

        .nav-link:hover {
            color: #fff;
            background: rgba(167, 139, 250, 0.12);
        }

        .nav-link.active {
            color: #fff;
            background: rgba(167, 139, 250, 0.15);
        }

        /* Glow dot on active */
        .nav-link.active::before {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: #a78bfa;
            box-shadow: 0 0 6px #a78bfa;
        }

        /* CTA button */
        .nav-cta {
            flex-shrink: 0;
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
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 16px rgba(124, 58, 237, 0.4);
            white-space: nowrap;
        }

        .nav-cta:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(124, 58, 237, 0.55);
            background: linear-gradient(135deg, #6d28d9, #a78bfa);
        }

        .nav-cta:active { transform: translateY(0); }

        /* Mobile hamburger */
        #mobile-menu-btn {
            display: none;
            background: rgba(167, 139, 250, 0.1);
            border: 1px solid rgba(167, 139, 250, 0.2);
            border-radius: 10px;
            padding: 7px;
            cursor: pointer;
            color: #fff;
            transition: background 0.2s ease;
        }
        #mobile-menu-btn:hover { background: rgba(167, 139, 250, 0.2); }

        /* Mobile menu dropdown */
        #mobile-menu {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: min(92vw, 1100px);
            background: rgba(8, 4, 20, 0.96);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(167, 139, 250, 0.18);
            border-radius: 24px;
            padding: 80px 24px 28px;
            z-index: 49;
            display: none;
            flex-direction: column;
            gap: 4px;
            box-shadow: 0 24px 60px rgba(0,0,0,0.6);
            animation: mobileMenuIn 0.3s cubic-bezier(0.4, 0, 0.2, 1) both;
        }

        #mobile-menu.open { display: flex; }

        @keyframes mobileMenuIn {
            from { opacity: 0; transform: translateX(-50%) translateY(-12px) scale(0.97); }
            to   { opacity: 1; transform: translateX(-50%) translateY(0) scale(1); }
        }

        #mobile-menu a {
            display: block;
            padding: 13px 16px;
            color: rgba(255,255,255,0.8);
            font-size: 15px;
            font-weight: 500;
            border-radius: 12px;
            transition: background 0.2s, color 0.2s;
        }
        #mobile-menu a:hover { background: rgba(167,139,250,0.12); color: #fff; }

        #mobile-menu .mobile-cta {
            margin-top: 8px;
            text-align: center;
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: #fff;
            font-weight: 600;
            border-radius: 999px;
            box-shadow: 0 4px 16px rgba(124,58,237,0.4);
        }

        /* Close button inside mobile menu */
        #mobile-close {
            position: absolute;
            top: 18px;
            right: 20px;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            padding: 6px;
            cursor: pointer;
            color: #fff;
            line-height: 0;
        }

        @media (max-width: 767px) {
            #mobile-menu-btn { display: flex; }
            .nav-links, .nav-cta { display: none; }
        }
    </style>
</head>
<body class="bg-white text-gray-900">

<!-- FLOATING NAVIGATION -->
<nav id="floating-nav">
    <div class="nav-inner">
        <!-- Logo -->
        <div class="logo-container">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('igen-logo.png') }}" alt="IGEN VERITAS">
            </a>
        </div>

        <!-- Desktop Links -->
        <ul class="nav-links">
            <li><a href="{{ route('homepage') }}"  class="nav-link {{ request()->routeIs('homepage')  ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('aboutus') }}"   class="nav-link {{ request()->routeIs('aboutus')   ? 'active' : '' }}">About Us</a></li>
            <li><a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="{{ route('services') }}"  class="nav-link {{ request()->routeIs('services')  ? 'active' : '' }}">Our Services</a></li>
        </ul>

        <!-- CTA + Hamburger -->
        <div style="display:flex;align-items:center;gap:10px;">
            <a href="{{ route('contact') }}" class="nav-cta">
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

<!-- Mobile Dropdown (overlaps nav pill) -->
<div id="mobile-menu">
    <button id="mobile-close" aria-label="Close menu">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round">
            <line x1="18" y1="6" x2="6" y2="18"/>
            <line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
    </button>
    <a href="{{ route('homepage') }}">Home</a>
    <a href="{{ route('aboutus') }}">About Us</a>
    <a href="{{ route('portfolio') }}">Portfolio</a>
    <a href="{{ route('services') }}">Our Services</a>
    <a href="{{ route('contact') }}" class="mobile-cta">Contact Us →</a>
</div>

<script>
    const floatingNav  = document.getElementById('floating-nav');
    const mobileBtn    = document.getElementById('mobile-menu-btn');
    const mobileMenu   = document.getElementById('mobile-menu');
    const mobileClose  = document.getElementById('mobile-close');

    // Shrink on scroll
    window.addEventListener('scroll', () => {
        floatingNav.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });

    // Mobile open/close
    mobileBtn.addEventListener('click', () => mobileMenu.classList.add('open'));
    mobileClose.addEventListener('click', () => mobileMenu.classList.remove('open'));

    // Close on outside click
    document.addEventListener('click', (e) => {
        if (mobileMenu.classList.contains('open') &&
            !mobileMenu.contains(e.target) &&
            !mobileBtn.contains(e.target)) {
            mobileMenu.classList.remove('open');
        }
    });
</script>
