<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - IGEN VERITAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom styles that work with Tailwind CDN -->
    <style>
        /* Custom CSS variables */
        :root {
            --primary: #9333ea;
            --secondary: #6d28d9;
            --accent: #7c3aed;
            --light-purple: #f3e8ff;
        }
        
        /* Base styles */
        body {
            font-family: ui-sans-serif, system-ui, sans-serif;
            color: #111827;
            background-color: white;
        }
        
        h1, h2, h3, h4, h5, h6 {
            color: #111827;
            font-weight: bold;
        }
        
        .gradient-purple {
            background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 50%, #581c87 100%);
        }
        
        .service-card {
            background-color: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            transform: translateY(-0.5rem);
        }

        .team-card {
            background-color: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .team-card:hover {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            transform: translateY(-0.5rem);
        }
        
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(124, 58, 237, 0.3);
            }
            50% {
                box-shadow: 0 0 30px rgba(124, 58, 237, 0.6);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #c084fc 0%, #e9d5ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-white text-gray-900">
    @include('header')

    <main class="w-full">
        <!-- Hero Section -->
        <section class="min-h-[70vh] gradient-purple flex items-center justify-center px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-10 left-5 w-48 h-48 bg-purple-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-5 w-64 h-64 bg-purple-300/20 rounded-full blur-3xl"></div>
            
            <div class="max-w-4xl mx-auto text-center relative z-10 pt-16">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight animate-fadeInUp">
                    We're IGEN VERITAS
                </h1>
                <p class="text-lg sm:text-xl text-purple-100 mb-8 max-w-2xl mx-auto animate-fadeInUp" style="animation-delay: 0.2s;">
                    Harnessing the Power of AI and innovative Software to Optimize and Elevate Your Business
                </p>
            </div>
        </section>

        <!-- Our Story Section -->
        <section class="py-16 sm:py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-4xl sm:text-5xl font-bold mb-8 text-gray-900 animate-fadeInUp">Our Story</h2>
                
                <p class="text-lg text-gray-700 mb-6 leading-relaxed animate-fadeInUp" style="animation-delay: 0.1s;">
                    At <b>IGEN VERITAS</b>, we represent a new wave of innovators. <b>IGEN</b> is inspired by iGeneration, also known as Generation Z, 
                    a generation born in the digital era and driven by transformation. We are not just adapting to the future, we are shaping it. 
                    In a world overflowing with information, <b>VERITAS</b>, which means truth, remains our foundation. We believe that technology should empower rather than mislead, 
                    and enhance rather than exploit.
                </p>

                <p class="text-lg text-gray-700 mb-12 leading-relaxed animate-fadeInUp" style="animation-delay: 0.2s;">
                    Our name reflects our purpose, which is to combine the bold vision of our generation with the integrity of truth and transparency. 
                    We are committed to delivering AI-powered software that is not only innovative but also reliable and ethical.
                </p>

                <!-- Vision & Mission Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="flex justify-center animate-fadeInUp" style="animation-delay: 0.3s;">
                        <img src="../src/assets/about-us-vimi.png" alt="IGEN VERITAS" class="w-full max-w-sm rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                    </div>
                    <div class="animate-fadeInUp" style="animation-delay: 0.4s;">
                        <h3 class="text-3xl sm:text-4xl font-bold text-purple-900 mb-4">Our Vision</h3>
                        <p class="text-base sm:text-lg text-gray-700 mb-8 leading-relaxed">
                            Empowering businesses with intelligent AI-driven software for smarter decisions and optimized workflows.
                        </p>
                        
                        <h3 class="text-3xl sm:text-4xl font-bold text-purple-900 mb-4">Our Mission</h3>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                            We develop innovative AI-powered solutions that enhance business efficiency, streamline processes, 
                            and support data-driven decision-making, helping organizations achieve greater productivity and growth.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-16 sm:py-20 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-4xl sm:text-5xl font-bold text-center mb-12 text-gray-900 animate-fadeInUp">Our Core Values</h2>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Value Card 1 -->
                    <div class="service-card p-8 text-center animate-fadeInUp">
                        <div class="mb-4 flex justify-center">
                            <svg class="w-16 h-16 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-purple-900 mb-3">Innovation</h3>
                        <p class="text-gray-600">
                            We continuously push boundaries and embrace cutting-edge technologies to deliver forward-thinking solutions.
                        </p>
                    </div>

                    <!-- Value Card 2 -->
                    <div class="service-card p-8 text-center animate-fadeInUp" style="animation-delay: 0.1s;">
                        <div class="mb-4 flex justify-center">
                            <svg class="w-16 h-16 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-purple-900 mb-3">Integrity</h3>
                        <p class="text-gray-600">
                            Transparency and ethical practices form the foundation of everything we do and every client relationship we build.
                        </p>
                    </div>

                    <!-- Value Card 3 -->
                    <div class="service-card p-8 text-center animate-fadeInUp" style="animation-delay: 0.2s;">
                        <div class="mb-4 flex justify-center">
                            <svg class="w-16 h-16 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-purple-900 mb-3">Excellence</h3>
                        <p class="text-gray-600">
                            We strive for excellence in every project, delivering high-quality solutions that exceed expectations.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Members Section -->
        <section class="py-16 sm:py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12 animate-fadeInUp">
                    <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                        Meet Our Talented<br class="hidden sm:block"> Team Members
                    </h2>
                    <p class="text-lg text-gray-600">Visionary leaders driving innovation and excellence</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Team Card 1 -->
                    <div class="team-card p-8 text-center animate-fadeInUp" style="animation-delay: 0.1s;">
                        <div class="mb-6 flex justify-center">
                            <img src="../src/assets/akmal_pic.png" alt="Syarifuddin Akmal" class="w-56 h-56 object-cover rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Syarifuddin Akmal</h3>
                        <p class="text-lg text-purple-600 font-semibold mb-4">CEO and Founder</p>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            A visionary leader with expertise in AI and business strategy, driving IGEN VERITAS toward innovative solutions.
                        </p>
                        <a href="#" class="inline-block" target="_blank">
                            <img src="../src/assets/linkedin.png" alt="LinkedIn" class="w-8 h-8 hover:opacity-70 transition-opacity">
                        </a>
                    </div>

                    <!-- Team Card 2 -->
                    <div class="team-card p-8 text-center animate-fadeInUp" style="animation-delay: 0.2s;">
                        <div class="mb-6 flex justify-center">
                            <img src="../src/assets/arif_pic.png" alt="Arif Azlan" class="w-56 h-56 object-cover rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Arif Azlan</h3>
                        <p class="text-lg text-purple-600 font-semibold mb-4">Co-Founder</p>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            A tech innovator with deep expertise in software development, ensuring our solutions are robust and scalable.
                        </p>
                        <a href="#" class="inline-block" target="_blank">
                            <img src="../src/assets/linkedin.png" alt="LinkedIn" class="w-8 h-8 hover:opacity-70 transition-opacity">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 sm:py-20 px-4 sm:px-6 lg:px-8 gradient-purple relative overflow-hidden">
            <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-64 h-64 bg-purple-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-64 h-64 bg-purple-400/20 rounded-full blur-3xl"></div>
            
            <div class="max-w-4xl mx-auto text-center relative z-10 animate-fadeInUp">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight">
                    Ready to Transform Your Business?
                </h2>
                <p class="text-lg text-purple-100 mb-8 max-w-2xl mx-auto">
                    Let's work together to bring your vision to life with innovative AI solutions
                </p>
                <button onclick="handleGetStarted()" class="inline-block px-8 py-3 bg-white text-purple-900 font-bold text-base sm:text-lg rounded-lg hover:bg-purple-50 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105 animate-pulse-glow">
                    Get In Touch
                </button>
            </div>
        </section>
    </main>

    @include('footer')

    <script>
        // Handle get started button
        function handleGetStarted() {
            const email = prompt('Enter your email to get in touch:');
            if (email) {
                console.log('User email:', email);
                alert('Thank you! We will contact you at ' + email);
            }
        }

        // Intersection Observer for animations on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.service-card, .team-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>