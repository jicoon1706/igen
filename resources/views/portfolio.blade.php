<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio - IGEN VERITAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        /* Animated Gradient Background */
        .gradient-hero {
            background: linear-gradient(-45deg, #7c3aed, #a855f7, #6d28d9, #581c87);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Floating Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-30px); }
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Fade in animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-60px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(60px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }
        
        .fade-in-left {
            animation: fadeInLeft 1s ease-out forwards;
        }
        
        .fade-in-right {
            animation: fadeInRight 1s ease-out forwards;
        }
        
        .scale-in {
            animation: scaleIn 0.6s ease-out forwards;
        }
        
        /* Delay classes */
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #a855f7, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Portfolio card */
        .portfolio-card {
            position: relative;
            border-radius: 2rem;
            overflow: hidden;
            background: white;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .portfolio-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(124, 58, 237, 0.2);
        }
        
        .portfolio-image {
            position: relative;
            width: 100%;
            height: 280px;
            overflow: hidden;
            background: linear-gradient(135deg, #7c3aed, #a855f7);
        }
        
        .portfolio-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .portfolio-card:hover .portfolio-image img {
            transform: scale(1.1);
        }
        
        .portfolio-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.8), rgba(168, 85, 247, 0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .portfolio-card:hover .portfolio-overlay {
            opacity: 1;
        }
        
        .portfolio-overlay-content {
            text-align: center;
            color: white;
        }
        
        .portfolio-overlay-icon {
            width: 4rem;
            height: 4rem;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            backdrop-filter: blur(10px);
        }
        
        .portfolio-content {
            padding: 1.75rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .portfolio-category {
            display: inline-block;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            color: #7c3aed;
            margin-bottom: 0.75rem;
            letter-spacing: 0.05em;
        }
        
        .portfolio-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: #1f2937;
            margin-bottom: 0.75rem;
            line-height: 1.3;
        }
        
        .portfolio-description {
            font-size: 0.95rem;
            color: #6b7280;
            margin-bottom: 1.5rem;
            line-height: 1.6;
            flex-grow: 1;
        }
        
        .portfolio-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .portfolio-tag {
            display: inline-block;
            padding: 0.35rem 0.75rem;
            background: #f3e8ff;
            color: #7c3aed;
            border-radius: 0.5rem;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .portfolio-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, #7c3aed, #a855f7);
            color: white;
            font-weight: 700;
            border-radius: 0.75rem;
            text-decoration: none;
            transition: all 0.4s ease;
            width: fit-content;
        }
        
        .portfolio-link:hover {
            transform: translateX(4px);
            box-shadow: 0 10px 25px rgba(124, 58, 237, 0.3);
        }
        
        /* Filter buttons */
        .filter-button {
            padding: 0.75rem 1.5rem;
            background: white;
            border: 2px solid #e5e7eb;
            color: #6b7280;
            font-weight: 600;
            border-radius: 0.75rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-button.active {
            background: linear-gradient(135deg, #7c3aed, #a855f7);
            color: white;
            border-color: transparent;
        }
        
        .filter-button:hover {
            border-color: #7c3aed;
            color: #7c3aed;
        }
        
        /* Particles */
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }
        
        @keyframes particle-float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
                opacity: 0;
            }
            25% {
                opacity: 0.8;
            }
            50% {
                transform: translate(100px, -100px) scale(1.5);
                opacity: 0.5;
            }
            75% {
                opacity: 0.3;
            }
        }
        
        .particle {
            animation: particle-float 20s infinite;
        }
        
        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-white">
    @include('header')

    <main>
        <!-- Hero Section -->
        <section class="min-h-screen gradient-hero flex items-center justify-center px-4 pt-32 pb-20 relative overflow-hidden">
            <!-- Decorative particles -->
            <div class="particle" style="width: 10px; height: 10px; top: 15%; left: 10%; animation-delay: 0s;"></div>
            <div class="particle" style="width: 15px; height: 15px; top: 70%; left: 85%; animation-delay: 5s;"></div>
            <div class="particle" style="width: 8px; height: 8px; top: 45%; left: 80%; animation-delay: 10s;"></div>
            
            <!-- Floating orbs -->
            <div class="absolute top-10 left-10 w-80 h-80 bg-purple-400/20 rounded-full blur-3xl float-animation"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-pink-400/20 rounded-full blur-3xl float-animation" style="animation-delay: 3s;"></div>
            
            <div class="max-w-5xl mx-auto text-center relative z-10">
                <div class="fade-in-up">
                    <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-white text-sm font-semibold mb-6">Our Work</span>
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                        Showcase of <span class="gradient-text">Excellence</span>
                    </h1>
                </div>
                <p class="text-lg sm:text-xl lg:text-2xl text-purple-100 mb-8 max-w-3xl mx-auto fade-in-up delay-1 leading-relaxed">
                    Discover the innovative projects we've created for businesses around the world
                </p>
                <div class="fade-in-up delay-2">
                    <button onclick="scrollToPortfolio()" class="px-8 py-4 bg-white text-purple-900 font-bold rounded-full hover:bg-purple-50 transition-all duration-300 shadow-2xl hover:shadow-purple-500/50 transform hover:scale-110">
                        View Our Portfolio →
                    </button>
                </div>
            </div>
        </section>

        <!-- Filter Section -->
        <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white relative">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-wrap justify-center gap-4 fade-in-up">
                    <button class="filter-button active" onclick="filterPortfolio('all')">All Projects</button>
                    <button class="filter-button" onclick="filterPortfolio('web')">Web Development</button>
                    <button class="filter-button" onclick="filterPortfolio('mobile')">Mobile Apps</button>
                    <button class="filter-button" onclick="filterPortfolio('ecommerce')">E-Commerce</button>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid -->
        <section id="portfolio" class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white via-purple-50 to-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Portfolio Item 1 - HMMC -->
                    <div class="portfolio-card scale-in fade-in-up" data-category="web">
                        <div class="portfolio-image">
                            <img src="{{ asset('hmmc.png') }}"  alt="HMMC Healthcare">
                            <div class="portfolio-overlay">
                                <a href="https://hmmc.my/" target="_blank" class="portfolio-overlay-content">
                                    <div class="portfolio-overlay-icon">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                    <p class="text-sm font-semibold">View Project</p>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span class="portfolio-category">Web Development</span>
                            <h3 class="portfolio-title">HMMC Healthcare</h3>
                            <p class="portfolio-description">Modern healthcare website with appointment scheduling, patient portal, and medical information management system.</p>
                            <div class="portfolio-tags">
                                <span class="portfolio-tag">Appointment</span>
                                <span class="portfolio-tag">Healthcare</span>
                                <span class="portfolio-tag">Responsive</span>
                            </div>
                            <a href="https://hmmc.my/" target="_blank" class="portfolio-link">
                                Visit Website
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Portfolio Item 2 -->
                    <div class="portfolio-card scale-in fade-in-up delay-1" data-category="ecommerce">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?w=500&h=280&fit=crop" alt="Fashion E-Commerce">
                            <div class="portfolio-overlay">
                                <div class="portfolio-overlay-content">
                                    <div class="portfolio-overlay-icon">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                    <p class="text-sm font-semibold">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span class="portfolio-category">E-Commerce</span>
                            <h3 class="portfolio-title">Fashion Boutique Store</h3>
                            <p class="portfolio-description">Full-featured e-commerce platform with product catalog, shopping cart, payment integration, and order management.</p>
                            <div class="portfolio-tags">
                                <span class="portfolio-tag">Shopify</span>
                                <span class="portfolio-tag">E-Commerce</span>
                                <span class="portfolio-tag">Payment Gateway</span>
                            </div>
                            <a href="#" target="_blank" class="portfolio-link">
                                Visit Website
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Portfolio Item 3 -->
                    <div class="portfolio-card scale-in fade-in-up delay-2" data-category="mobile">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=500&h=280&fit=crop" alt="Fitness Mobile App">
                            <div class="portfolio-overlay">
                                <div class="portfolio-overlay-content">
                                    <div class="portfolio-overlay-icon">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                    <p class="text-sm font-semibold">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span class="portfolio-category">Mobile App</span>
                            <h3 class="portfolio-title">Fitness Tracker App</h3>
                            <p class="portfolio-description">Cross-platform fitness application with workout tracking, nutrition monitoring, and social community features.</p>
                            <div class="portfolio-tags">
                                <span class="portfolio-tag">React Native</span>
                                <span class="portfolio-tag">Fitness</span>
                                <span class="portfolio-tag">iOS & Android</span>
                            </div>
                            <a href="#" target="_blank" class="portfolio-link">
                                View App Store
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Portfolio Item 4 -->
                    <div class="portfolio-card scale-in fade-in-up delay-3" data-category="web">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=280&fit=crop" alt="Restaurant Website">
                            <div class="portfolio-overlay">
                                <div class="portfolio-overlay-content">
                                    <div class="portfolio-overlay-icon">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                    <p class="text-sm font-semibold">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span class="portfolio-category">Web Development</span>
                            <h3 class="portfolio-title">Premium Restaurant</h3>
                            <p class="portfolio-description">Elegant restaurant website with menu showcase, reservation system, online ordering, and customer reviews.</p>
                            <div class="portfolio-tags">
                                <span class="portfolio-tag">Vue.js</span>
                                <span class="portfolio-tag">Restaurant</span>
                                <span class="portfolio-tag">Booking System</span>
                            </div>
                            <a href="#" target="_blank" class="portfolio-link">
                                Visit Website
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Portfolio Item 5 -->
                    <div class="portfolio-card scale-in fade-in-up delay-4" data-category="ecommerce">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=280&fit=crop" alt="Tech Gadgets Store">
                            <div class="portfolio-overlay">
                                <div class="portfolio-overlay-content">
                                    <div class="portfolio-overlay-icon">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                    <p class="text-sm font-semibold">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span class="portfolio-category">E-Commerce</span>
                            <h3 class="portfolio-title">Tech Gadgets Hub</h3>
                            <p class="portfolio-description">Modern gadget marketplace with advanced search, product comparison, reviews, and seamless checkout experience.</p>
                            <div class="portfolio-tags">
                                <span class="portfolio-tag">Next.js</span>
                                <span class="portfolio-tag">Electronics</span>
                                <span class="portfolio-tag">Marketplace</span>
                            </div>
                            <a href="#" target="_blank" class="portfolio-link">
                                Visit Website
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Portfolio Item 6 -->
                    <div class="portfolio-card scale-in fade-in-up" data-category="mobile" style="animation-delay: 0.6s;">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1516534775068-bb57100d4b39?w=500&h=280&fit=crop" alt="Social Network App">
                            <div class="portfolio-overlay">
                                <div class="portfolio-overlay-content">
                                    <div class="portfolio-overlay-icon">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                    <p class="text-sm font-semibold">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span class="portfolio-category">Mobile App</span>
                            <h3 class="portfolio-title">Social Connect App</h3>
                            <p class="portfolio-description">Feature-rich social networking platform with messaging, notifications, media sharing, and real-time updates.</p>
                            <div class="portfolio-tags">
                                <span class="portfolio-tag">Flutter</span>
                                <span class="portfolio-tag">Social</span>
                                <span class="portfolio-tag">Real-time</span>
                            </div>
                            <a href="#" target="_blank" class="portfolio-link">
                                Download App
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-32 px-4 sm:px-6 lg:px-8 gradient-hero relative overflow-hidden">
            <div class="particle" style="width: 12px; height: 12px; top: 20%; left: 15%;"></div>
            <div class="particle" style="width: 18px; height: 18px; top: 70%; right: 10%; animation-delay: 5s;"></div>
            
            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight fade-in-up">
                    Ready for Your Next <span class="gradient-text">Project?</span>
                </h2>
                <p class="text-lg sm:text-xl text-purple-100 mb-10 max-w-2xl mx-auto fade-in-up delay-1 leading-relaxed">
                    Let's create something amazing together. Contact us today to discuss your ideas.
                </p>
                <a href="{{ route('contact') }}"  class="fade-in-up delay-2 px-10 py-4 bg-white text-purple-900 font-black text-lg rounded-full hover:bg-purple-50 transition-all duration-300 shadow-2xl hover:shadow-white/50 transform hover:scale-110">
                    Start Your Project 🚀
                </a>
            </div>
        </section>
    </main>

    @include('footer')

    <script>
        // Scroll to portfolio section
        function scrollToPortfolio() {
            const element = document.getElementById('portfolio');
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Filter portfolio items
        function filterPortfolio(category) {
            const items = document.querySelectorAll('.portfolio-card');
            const buttons = document.querySelectorAll('.filter-button');

            // Update active button
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            // Filter items
            items.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                if (category === 'all' || itemCategory === category) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        }

        // Handle get started button
        function handleGetStarted() {
            const email = prompt('Enter your email to get started:');
            if (email && email.includes('@')) {
                console.log('User email:', email);
                alert('Thank you for your interest! We will contact you at ' + email + ' within 24 hours.');
            } else if (email) {
                alert('Please enter a valid email address.');
            }
        }

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) translateX(0)';
                }
            });
        }, observerOptions);

        // Observe fade elements
        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right');
            fadeElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = el.classList.contains('fade-in-left') ? 'translateX(-30px)' : 
                                     el.classList.contains('fade-in-right') ? 'translateX(30px)' : 'translateY(30px)';
                el.style.transition = 'all 0.8s ease';
                observer.observe(el);
            });

            // Observe portfolio cards
            const portfolioCards = document.querySelectorAll('.portfolio-card');
            portfolioCards.forEach((card) => {
                card.style.opacity = '0';
                card.style.transform = 'scale(0.9)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });

            // Add filter button transitions
            const filterButtons = document.querySelectorAll('.filter-button');
            filterButtons.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                });
            });
        });

        // Parallax effect for particles
        document.addEventListener('mousemove', (e) => {
            const particles = document.querySelectorAll('.particle');
            particles.forEach((particle, index) => {
                const speed = (index + 1) * 0.02;
                const x = (window.innerWidth - e.pageX * speed) / 100;
                const y = (window.innerHeight - e.pageY * speed) / 100;
                particle.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    </script>