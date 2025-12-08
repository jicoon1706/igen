<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - IGEN VERITAS</title>
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
        
        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }
        
        .fade-in-left {
            animation: fadeInLeft 1s ease-out forwards;
        }
        
        .fade-in-right {
            animation: fadeInRight 1s ease-out forwards;
        }
        
        /* Delay classes */
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
        
        /* Hover scale effect */
        .hover-lift {
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(124, 58, 237, 0.2);
        }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #a855f7, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Service card */
        .service-card {
            position: relative;
            background: white;
            border-radius: 2rem;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s ease;
            z-index: 1;
        }
        
        .service-card:hover::before {
            left: 100%;
        }
        
        /* Feature list item */
        .feature-item {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }
        
        .feature-icon {
            width: 3rem;
            height: 3rem;
            border-radius: 1rem;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.1), rgba(124, 58, 237, 0.1));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .feature-icon svg {
            width: 1.5rem;
            height: 1.5rem;
        }
        
        /* CTA Button */
        .cta-button {
            position: relative;
            overflow: hidden;
            padding: 1rem 2.5rem;
            font-weight: 700;
            border-radius: 0.75rem;
            transition: all 0.4s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
            z-index: 0;
        }
        
        .cta-button:hover::before {
            left: 100%;
        }
        
        .cta-button-text {
            position: relative;
            z-index: 1;
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
        
        /* Service showcase */
        .service-showcase {
            position: relative;
            border-radius: 2.5rem;
            overflow: hidden;
        }
        
        .service-showcase::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), transparent);
            pointer-events: none;
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
                    <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-white text-sm font-semibold mb-6">Explore Solutions</span>
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                        Our <span class="gradient-text">Services</span>
                    </h1>
                </div>
                <p class="text-lg sm:text-xl lg:text-2xl text-purple-100 mb-8 max-w-3xl mx-auto fade-in-up delay-1 leading-relaxed">
                    Comprehensive AI-powered solutions designed to transform your business and drive growth
                </p>
                <div class="fade-in-up delay-2">
                    <button onclick="scrollToServices()" class="px-8 py-4 bg-white text-purple-900 font-bold rounded-full hover:bg-purple-50 transition-all duration-300 shadow-2xl hover:shadow-purple-500/50 transform hover:scale-110">
                        Discover Our Solutions →
                    </button>
                </div>
            </div>
        </section>

        <!-- Services Grid Overview -->
        <section class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white via-purple-50 to-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-20">
                    <span class="inline-block text-purple-600 font-bold text-sm mb-4 uppercase tracking-wider">What We Offer</span>
                    <h2 class="text-5xl sm:text-6xl lg:text-7xl font-black text-gray-900 mb-6">
                        Premium <span class="gradient-text">Solutions</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">Cutting-edge services to elevate your business to new heights</p>
                </div>

                <div id="services" class="grid md:grid-cols-2 gap-8">
                    <!-- Service Card 1 -->
                    <div class="service-card hover-lift fade-in-left shadow-xl">
                        <div class="p-10">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center mb-8">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4m-4-4l-4 4m4-4l4-4M9.172 13.828a4 4 0 015.656 0M9.172 9.172a4 4 0 015.656 0"></path>
                                </svg>
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-black text-gray-900 mb-4">
                                Software Development
                            </h3>
                            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                                Transform your ideas into powerful, scalable software solutions enhanced with cutting-edge AI technology.
                            </p>
                            <div class="space-y-4 mb-10">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1">Custom Solutions</p>
                                        <p class="text-gray-600 text-sm">Tailor-made solutions built specifically for your needs</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1">Cross-Platform</p>
                                        <p class="text-gray-600 text-sm">Seamless performance across all devices and platforms</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1">AI Integration</p>
                                        <p class="text-gray-600 text-sm">Advanced intelligence woven into every solution</p>
                                    </div>
                                </div>
                            </div>
                            <button onclick="handleGetStarted()" class="cta-button bg-purple-600 text-white hover:bg-purple-700 shadow-lg hover:shadow-xl">
                                <span class="cta-button-text">Get Started</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="service-card hover-lift fade-in-right shadow-xl delay-1">
                        <div class="p-10">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center mb-8">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-black text-gray-900 mb-4">
                                AI Consultation
                            </h3>
                            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                                Unlock the full potential of artificial intelligence with strategic guidance and implementation expertise.
                            </p>
                            <div class="space-y-4 mb-10">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1">Strategy Development</p>
                                        <p class="text-gray-600 text-sm">Tailored AI strategies aligned with your business goals</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1">Smart Automation</p>
                                        <p class="text-gray-600 text-sm">Intelligent automation to reduce costs and improve efficiency</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1">Data Intelligence</p>
                                        <p class="text-gray-600 text-sm">Actionable insights from complex data for informed decisions</p>
                                    </div>
                                </div>
                            </div>
                            <button onclick="handleGetStarted()" class="cta-button bg-blue-600 text-white hover:bg-blue-700 shadow-lg hover:shadow-xl">
                                <span class="cta-button-text">Get Started</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Details Section -->
        <section class="py-24 px-4 sm:px-6 lg:px-8 bg-gray-50">
            <div class="max-w-6xl mx-auto">
                <!-- Software Development Details -->
                <div class="mb-24 fade-in-up">
                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <div class="order-2 lg:order-1">
                            <div class="service-showcase h-96 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                                <svg class="w-48 h-48 text-white opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <span class="inline-block text-purple-600 font-bold text-sm mb-4 uppercase tracking-wider">Service Deep Dive</span>
                            <h3 class="text-4xl sm:text-5xl font-black text-gray-900 mb-6">Software Development Excellence</h3>
                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                                We create innovative software solutions that combine cutting-edge technology with intuitive design. Our approach ensures scalability, performance, and user satisfaction.
                            </p>
                            <ul class="space-y-3 mb-8 text-gray-700">
                                <li class="flex gap-3">
                                    <span class="text-purple-600 font-bold">→</span>
                                    <span>Full-stack development with modern frameworks</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="text-purple-600 font-bold">→</span>
                                    <span>Cloud-native architecture for scalability</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="text-purple-600 font-bold">→</span>
                                    <span>Machine learning integration for intelligent features</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="text-purple-600 font-bold">→</span>
                                    <span>Rigorous testing and quality assurance</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- AI Consultation Details -->
                <div class="fade-in-up delay-1">
                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <div>
                            <span class="inline-block text-blue-600 font-bold text-sm mb-4 uppercase tracking-wider">Service Deep Dive</span>
                            <h3 class="text-4xl sm:text-5xl font-black text-gray-900 mb-6">Strategic AI Implementation</h3>
                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                                Transform your business with intelligent AI solutions. We provide end-to-end consultation to identify opportunities, develop strategies, and implement systems that drive real results.
                            </p>
                            <ul class="space-y-3 mb-8 text-gray-700">
                                <li class="flex gap-3">
                                    <span class="text-blue-600 font-bold">→</span>
                                    <span>AI readiness assessment and gap analysis</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="text-blue-600 font-bold">→</span>
                                    <span>Process optimization through intelligent automation</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="text-blue-600 font-bold">→</span>
                                    <span>Predictive analytics and data-driven decision making</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="text-blue-600 font-bold">→</span>
                                    <span>Team training and change management support</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="service-showcase h-96 bg-gradient-to-br from-blue-600 to-cyan-600 flex items-center justify-center">
                                <svg class="w-48 h-48 text-white opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="py-24 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-20">
                    <span class="inline-block text-purple-600 font-bold text-sm mb-4 uppercase tracking-wider">Why We Stand Out</span>
                    <h2 class="text-5xl sm:text-6xl font-black text-gray-900 mb-6">
                        The IGEN VERITAS <span class="gradient-text">Advantage</span>
                    </h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="hover-lift bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 fade-in-up">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Expert Team</h3>
                        <p class="text-gray-600 leading-relaxed">Industry-leading specialists with years of experience delivering transformative solutions</p>
                    </div>

                    <div class="hover-lift bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 fade-in-up delay-1">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Proven Results</h3>
                        <p class="text-gray-600 leading-relaxed">Track record of success with 50+ completed projects and 100% client satisfaction</p>
                    </div>

                    <div class="hover-lift bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 fade-in-up delay-2">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-cyan-600 to-blue-600 flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">24/7 Support</h3>
                        <p class="text-gray-600 leading-relaxed">Continuous support and maintenance to ensure your solutions perform at their best</p>
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
                    Ready to Transform Your <span class="gradient-text">Business?</span>
                </h2>
                <p class="text-lg sm:text-xl text-purple-100 mb-10 max-w-2xl mx-auto fade-in-up delay-1 leading-relaxed">
                    Let's collaborate to bring your vision to life with our comprehensive solutions
                </p>
                <button onclick="handleGetStarted()" class="fade-in-up delay-2 px-10 py-4 bg-white text-purple-900 font-black text-lg rounded-full hover:bg-purple-50 transition-all duration-300 shadow-2xl hover:shadow-white/50 transform hover:scale-110">
                    Start Your Journey 🚀
                </button>
            </div>
        </section>
    </main>

    @include('footer')

    <script>
        // Scroll to services section
        function scrollToServices() {
            const element = document.getElementById('services');
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
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
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation on scroll
        document.addEventListener('DOMContentLoaded', () => {
            // Animate fade-in elements
            const fadeElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right');
            fadeElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.8s ease';
                if (!el.style.animationDelay) {
                    el.style.animationDelay = `${index * 0.1}s`;
                }
                observer.observe(el);
            });

            // Animate service cards
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(40px)';
                card.style.transition = `all 0.8s ease`;
                card.style.transitionDelay = `${index * 0.2}s`;
                observer.observe(card);
            });

            // Animate hover-lift elements
            const hoverElements = document.querySelectorAll('.hover-lift');
            hoverElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = `all 0.7s ease`;
                el.style.transitionDelay = `${index * 0.15}s`;
                observer.observe(el);
            });
        });

        // Parallax effect for decorative elements
        document.addEventListener('mousemove', (e) => {
            const particles = document.querySelectorAll('.particle');
            particles.forEach((particle, index) => {
                const speed = (index + 1) * 0.02;
                const x = (window.innerWidth - e.pageX * speed) / 100;
                const y = (window.innerHeight - e.pageY * speed) / 100;
                particle.style.transform = `translate(${x}px, ${y}px)`;
            });
        });

        // Smooth hover effects for buttons
        const buttons = document.querySelectorAll('.cta-button');
        buttons.forEach(button => {
            button.addEventListener('mouseover', function() {
                this.style.transform = 'translateY(-2px)';
            });
            button.addEventListener('mouseout', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
    </body>