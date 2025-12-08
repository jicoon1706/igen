<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGEN VERITAS - Powering the Future with Intelligence</title>
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
        
        /* Animated gradient background */
        .gradient-bg {
            background: linear-gradient(-45deg, #7c3aed, #a855f7, #6d28d9, #581c87);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Floating animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Fade in up animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }
        
        /* Scale on hover */
        .hover-scale {
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .hover-scale:hover {
            transform: scale(1.05) translateY(-10px);
        }
        
        /* Glowing effect */
        .glow-effect {
            box-shadow: 0 0 40px rgba(168, 85, 247, 0.4);
            transition: box-shadow 0.3s ease;
        }
        
        .glow-effect:hover {
            box-shadow: 0 0 60px rgba(168, 85, 247, 0.6);
        }
        
        /* Glass morphism */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Particle effect */
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            animation: particle-float 20s infinite;
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
        
        /* Text gradient */
        .gradient-text {
            background: linear-gradient(135deg, #ffffff 0%, #e9d5ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Service card hover effect */
        .service-card {
            position: relative;
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
            transition: left 0.5s ease;
        }
        
        .service-card:hover::before {
            left: 100%;
        }
        
        /* Pulse animation */
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }
        
        .pulse-animation {
            animation: pulse 2s ease-in-out infinite;
        }
        
        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
        
        /* Delay animations */
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
    </style>
</head>
<body class="bg-gray-50">
    @include('header')

    <main class="w-full">
        <!-- Hero Section -->
        <section class="min-h-screen gradient-bg flex items-center justify-center px-4 sm:px-6 lg:px-8 relative overflow-hidden pt-20">
            <!-- Animated particles -->
            <div class="particle" style="width: 10px; height: 10px; top: 20%; left: 10%;"></div>
            <div class="particle" style="width: 15px; height: 15px; top: 60%; left: 80%; animation-delay: 5s;"></div>
            <div class="particle" style="width: 8px; height: 8px; top: 40%; left: 70%; animation-delay: 10s;"></div>
            <div class="particle" style="width: 12px; height: 12px; top: 80%; left: 20%; animation-delay: 15s;"></div>
            
            <!-- Decorative blurred orbs -->
            <div class="absolute top-0 left-0 w-96 h-96 bg-purple-500/30 rounded-full blur-3xl opacity-50 float-animation"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-pink-500/20 rounded-full blur-3xl opacity-50 float-animation" style="animation-delay: 3s;"></div>
            
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="fade-in-up">
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black text-white mb-6 leading-tight tracking-tight">
                        Smart Web & Mobile App Development<br>
                        <span class="gradient-text">for Your Business</span>
                    </h1>
                </div>
                
                <p class="text-lg sm:text-xl lg:text-2xl text-purple-100 mb-12 max-w-3xl mx-auto fade-in-up delay-1 leading-relaxed">
                    Reliable, scalable, and designed with purpose
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center fade-in-up delay-2">
                    <button onclick="scrollToServices()" class="group px-10 py-4 bg-white text-purple-900 font-bold text-lg rounded-full hover:bg-purple-50 transition-all duration-300 shadow-2xl hover:shadow-purple-500/50 transform hover:scale-110 glow-effect">
                        Explore Services
                        <span class="inline-block ml-2 group-hover:translate-x-2 transition-transform">→</span>
                    </button>
                    <button onclick="scrollToContact()" class="px-10 py-4 glass text-white font-bold text-lg rounded-full hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                        Get Started
                    </button>
                </div>
                
                <!-- Stats section -->
                <!-- <div class="grid grid-cols-3 gap-8 mt-20 max-w-3xl mx-auto fade-in-up delay-3">
                    <div class="glass rounded-2xl p-6 hover-scale">
                        <div class="text-4xl font-black text-white mb-2">50+</div>
                        <div class="text-purple-200 text-sm">Projects Completed</div>
                    </div>
                    <div class="glass rounded-2xl p-6 hover-scale">
                        <div class="text-4xl font-black text-white mb-2">100%</div>
                        <div class="text-purple-200 text-sm">Client Satisfaction</div>
                    </div>
                    <div class="glass rounded-2xl p-6 hover-scale">
                        <div class="text-4xl font-black text-white mb-2">24/7</div>
                        <div class="text-purple-200 text-sm">Support Available</div>
                    </div>
                </div> -->
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-purple-50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <div class="inline-block px-6 py-2 bg-purple-100 text-purple-700 rounded-full font-semibold mb-4">
                        Our Services
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-gray-900 mb-6">
                        What We <span class="text-purple-600">Do</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Reliable web and mobile solutions tailored to your business needs
                    </p>
                </div>

                <!-- Service Cards -->
                <div class="grid lg:grid-cols-2 gap-8">
                    <!-- Website Development Card -->
                    <div class="service-card hover-scale bg-white rounded-3xl overflow-hidden shadow-2xl cursor-pointer" onclick="handleServiceClick('website')">
                        <div class="relative h-80 bg-gradient-to-br from-purple-600 via-purple-500 to-pink-500 flex items-center justify-center overflow-hidden">
                            <!-- Animated background elements -->
                            <div class="absolute inset-0 opacity-20">
                                <div class="absolute top-10 left-10 w-32 h-32 bg-white rounded-full blur-2xl animate-pulse"></div>
                                <div class="absolute bottom-10 right-10 w-40 h-40 bg-white rounded-full blur-2xl animate-pulse" style="animation-delay: 1s;"></div>
                            </div>
                            
                            <div class="text-center relative z-10">
                                <div class="mb-6 inline-block p-6 bg-white/20 backdrop-blur-sm rounded-3xl">
                                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <p class="text-white font-bold text-xl">Website Development</p>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-3xl font-black text-gray-900 mb-4">
                                Website Development
                            </h3>
                            <p class="text-lg text-gray-600 leading-relaxed mb-6">
                                We create modern, responsive websites that look great on all devices. Whether it’s a company profile, portfolio, or business management, we build sites that are fast, clean, and easy to use.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold">Responsive Design</span>
                                <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold">User Friendly</span>
                                <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold">Fast Loading</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile App Development Card -->
                    <div class="service-card hover-scale bg-white rounded-3xl overflow-hidden shadow-2xl cursor-pointer" onclick="handleServiceClick('mobile')">
                        <div class="relative h-80 bg-gradient-to-br from-indigo-600 via-blue-500 to-cyan-500 flex items-center justify-center overflow-hidden">
                            <!-- Animated background elements -->
                            <div class="absolute inset-0 opacity-20">
                                <div class="absolute top-10 right-10 w-32 h-32 bg-white rounded-full blur-2xl animate-pulse"></div>
                                <div class="absolute bottom-10 left-10 w-40 h-40 bg-white rounded-full blur-2xl animate-pulse" style="animation-delay: 1s;"></div>
                            </div>
                            
                            <div class="text-center relative z-10">
                                <div class="mb-6 inline-block p-6 bg-white/20 backdrop-blur-sm rounded-3xl">
                                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <p class="text-white font-bold text-xl">Mobile App Development</p>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-3xl font-black text-gray-900 mb-4">
                                Mobile App Development
                            </h3>
                            <p class="text-lg text-gray-600 leading-relaxed mb-6">
                                Create powerful native and cross-platform mobile applications that engage users on iOS and Android. Transform your ideas into intuitive mobile experiences.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">iOS & Android</span>
                                <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">Cross-Platform</span>
                                <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">User-Centric</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <!-- <section class="py-24 px-4 sm:px-6 lg:px-8 bg-gray-900 text-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black mb-6">
                        Why Choose <span class="text-purple-400">IGEN VERITAS</span>
                    </h2>
                    <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                        We combine innovation, expertise, and dedication to deliver exceptional results
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="glass rounded-2xl p-8 hover-scale text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-6 pulse-animation">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Lightning Fast</h3>
                        <p class="text-gray-400">Optimized performance for exceptional user experiences</p>
                    </div>

                    <div class="glass rounded-2xl p-8 hover-scale text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-6 pulse-animation" style="animation-delay: 0.5s;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Secure & Reliable</h3>
                        <p class="text-gray-400">Enterprise-grade security for your peace of mind</p>
                    </div>

                    <div class="glass rounded-2xl p-8 hover-scale text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-6 pulse-animation" style="animation-delay: 1s;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Client-Focused</h3>
                        <p class="text-gray-400">Your success is our mission, every step of the way</p>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- CTA Section -->
        <section id="contact" class="py-24 px-4 sm:px-6 lg:px-8 gradient-bg relative overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            
            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                    Ready to Transform Your <br>
                    <span class="gradient-text text-5xl sm:text-6xl lg:text-7xl" id="changing-word">Digital Presence?</span>
                </h2>
                <p class="text-xl text-purple-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                    Let's collaborate to bring your vision to life with innovative solutions tailored to your needs
                </p>
                <button onclick="handleGetStarted()" class="px-12 py-5 bg-white text-purple-900 font-black text-xl rounded-full hover:bg-purple-50 transition-all duration-300 shadow-2xl hover:shadow-white/50 transform hover:scale-110 glow-effect">
                    Start Your Project
                    <span class="inline-block ml-2">🚀</span>
                </button>
                
                <!-- Contact info -->
                <div class="mt-16 grid md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                    <div class="glass rounded-2xl p-6">
                        <div class="text-purple-200 mb-2">Email Us</div>
                        <div class="text-white font-semibold">info@igenveritas.com</div>
                    </div>
                    <div class="glass rounded-2xl p-6">
                        <div class="text-purple-200 mb-2">Call Us</div>
                        <div class="text-white font-semibold">+60 17 310 3966</div>
                    </div>
                    <div class="glass rounded-2xl p-6">
                        <div class="text-purple-200 mb-2">Follow Us</div>
                        <div class="flex justify-center gap-4 mt-2">
                            <a href="#" class="text-white hover:text-purple-200 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="text-white hover:text-purple-200 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" class="text-white hover:text-purple-200 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('footer')

    <script>
        // Changing words animation
        const words = [
            'Digital Presence?',
            'Business Vision?',
            'Brand Identity?',
            'User Experience?',
            'Future?'
        ];
        let currentWordIndex = 0;

        function changeWord() {
            const element = document.getElementById('changing-word');
            currentWordIndex = (currentWordIndex + 1) % words.length;
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                element.textContent = words[currentWordIndex];
                element.style.transition = 'all 0.5s ease';
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }, 300);
        }

        setInterval(changeWord, 3000);

        // Smooth scroll functions
        function scrollToServices() {
            document.getElementById('services').scrollIntoView({ behavior: 'smooth' });
        }

        function scrollToContact() {
            document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
        }

        // Handle service card clicks
        function handleServiceClick(service) {
            console.log('Service clicked:', service);
            scrollToContact();
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
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe sections
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('section');
            sections.forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(20px)';
                section.style.transition = 'all 0.8s ease';
                observer.observe(section);
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
    </script>
</body>