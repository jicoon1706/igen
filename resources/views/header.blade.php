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
        }

        body {
            font-family: "Poppins", Helvetica, sans-serif;
        }

        /* Navigation Styles */
        nav {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.95) 0%, rgba(30, 13, 50, 0.85) 100%);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(167, 139, 250, 0.1);
            transition: all 0.3s ease;
        }

        nav.scrolled {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.98) 0%, rgba(30, 13, 50, 0.95) 100%);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .nav-link {
            position: relative;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #a78bfa, #e9d5ff);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #a78bfa;
        }

        .logo-container {
            transition: transform 0.3s ease;
        }

        .logo-container:hover {
            transform: scale(1.05);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slideDown {
            animation: slideDown 0.5s ease-out;
        }
    </style>
</head>
<body class="bg-white text-gray-900">

<!-- NAVIGATION -->
<nav class="fixed top-0 left-0 w-full z-50 animate-slideDown">
    <div class="px-5 md:px-12 lg:px-20 flex items-center justify-between py-4">
        <!-- Logo -->
        <div class="logo-container w-32 md:w-40 lg:w-48">
            <a href="#">
                <img src="#" alt="IGEN VERITAS" class="w-full h-auto">
            </a>
        </div>
        
        <!-- Navigation Links -->
        <ul class="hidden md:flex items-center space-x-8 lg:space-x-12">
            <li>
                <a href="#" class="nav-link text-white text-sm lg:text-base">
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white text-sm lg:text-base">
                    About Us
                </a>
            </li>
            <li>
                <a href=#" class="nav-link text-white text-sm lg:text-base">
                    Our Services
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white text-sm lg:text-base">
                    Contact Us
                </a>
            </li>
        </ul>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-black/95 px-5 py-4">
        <ul class="space-y-4">
            <li><a href="#" class="text-white block py-2 hover:text-purple-400">Home</a></li>
            <li><a href="#" class="text-white block py-2 hover:text-purple-400">About Us</a></li>
            <li><a href="#" class="text-white block py-2 hover:text-purple-400">Our Services</a></li>
            <li><a href="#" class="text-white block py-2 hover:text-purple-400">Contact Us</a></li>
        </ul>
    </div>
</nav>

<script>
    // Navbar scroll effect
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>