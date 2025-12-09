<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - IGEN VERITAS</title>
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
            transform: translateY(-15px);
            box-shadow: 0 20px 50px rgba(124, 58, 237, 0.2);
        }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #a855f7, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Glass morphism */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Value card styles */
        .value-card {
            position: relative;
            overflow: hidden;
        }
        
        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.05), rgba(168, 85, 247, 0.05));
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .value-card:hover::before {
            opacity: 1;
        }
        
        /* Team member card */
        .team-member {
            position: relative;
            background: white;
            border-radius: 2rem;
            overflow: hidden;
        }
        
        .team-member-img {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #7c3aed, #a855f7);
        }
        
        .team-member-img::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transition: all 0.6s ease;
            opacity: 0;
        }
        
        .team-member:hover .team-member-img::before {
            opacity: 1;
            transform: translate(10px, -10px);
        }
        
        /* Hide scrollbar but keep functionality */
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        
        /* Pulse animation */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
        
        .pulse-animation {
            animation: pulse 2s ease-in-out infinite;
        }
        
        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
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
                    <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-white text-sm font-semibold mb-6">About Our Journey</span>
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                        We're <span class="gradient-text">IGEN VERITAS</span>
                    </h1>
                </div>
                <p class="text-lg sm:text-xl lg:text-2xl text-purple-100 mb-8 max-w-3xl mx-auto fade-in-up delay-1 leading-relaxed">
                    Harnessing the power of AI and innovative software to optimize and elevate your business
                </p>
                <div class="fade-in-up delay-2">
                    <button onclick="scrollToSection('story')" class="px-8 py-4 bg-white text-purple-900 font-bold rounded-full hover:bg-purple-50 transition-all duration-300 shadow-2xl hover:shadow-purple-500/50 transform hover:scale-110">
                        Learn Our Story →
                    </button>
                </div>
            </div>
        </section>

        <!-- Story Section -->
        <section id="story" class="py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white via-purple-50 to-white">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="fade-in-left">
                        <span class="inline-block text-purple-600 font-bold text-sm mb-4 uppercase tracking-wider">Our Story</span>
                        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-gray-900 mb-6 leading-tight">
                            The Vision Behind IGEN VERITAS
                        </h2>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            <strong>IGEN</strong> represents the spirit of the new generation, born in the digital age, curious, adaptive, and constantly pushing boundaries. It reflects energy, innovation, and a mindset that embraces change rather than fears it.
                        </p>
                        <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                            <strong>VERITAS</strong> is the Latin word for <strong>truth.</strong> In a world where information spreads faster than ever, truth is more important than technology itself. It is our foundation honesty in communication, integrity in design, and transparency in every solution we build.
                        </p>
                    </div>
                    
                    <div class="fade-in-right">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-pink-600 rounded-3xl transform rotate-6"></div>
                            <div class="relative bg-gradient-to-br from-purple-600 to-pink-600 rounded-3xl p-1">
                                <div class="bg-white rounded-3xl p-8">
                                    <div class="space-y-8">
                                        <div class="text-center">
                                            <div class="text-5xl font-black gradient-text mb-2">🚀</div>
                                            <p class="text-gray-700 font-semibold">Fresh Perspective</p>
                                            <p class="text-sm text-gray-500 mt-2">Bringing innovative ideas to life</p>
                                        </div>
                                        <div class="h-px bg-gradient-to-r from-transparent via-purple-300 to-transparent"></div>
                                        <div class="text-center">
                                            <div class="text-5xl font-black gradient-text mb-2">💡</div>
                                            <p class="text-gray-700 font-semibold">Cutting-Edge Tech</p>
                                            <p class="text-sm text-gray-500 mt-2">Latest AI & software solutions</p>
                                        </div>
                                        <div class="h-px bg-gradient-to-r from-transparent via-purple-300 to-transparent"></div>
                                        <div class="text-center">
                                            <div class="text-5xl font-black gradient-text mb-2">🎯</div>
                                            <p class="text-gray-700 font-semibold">Client-Focused</p>
                                            <p class="text-sm text-gray-500 mt-2">Your success is our mission</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision & Mission Section -->
        <section class="py-32 px-4 sm:px-6 lg:px-8 bg-gray-900 text-white relative overflow-hidden">
            <div class="absolute top-20 right-10 w-80 h-80 bg-purple-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-10 w-96 h-96 bg-purple-600/5 rounded-full blur-3xl"></div>
            
            <div class="max-w-6xl mx-auto relative z-10">
                <div class="grid md:grid-cols-2 gap-16">
                    <div class="fade-in-up">
                        <div class="inline-block px-4 py-2 bg-purple-600/20 rounded-full text-purple-300 text-sm font-semibold mb-6 border border-purple-500/30">Vision</div>
                        <h2 class="text-4xl sm:text-5xl font-black mb-6">Our Vision</h2>
                        <p class="text-xl text-gray-300 leading-relaxed">
                            To create a future where businesses operate with clarity, confidence, and control through intelligent technology.
                        </p>
                    </div>
                    
                    <div class="fade-in-up delay-1">
                        <div class="inline-block px-4 py-2 bg-purple-600/20 rounded-full text-purple-300 text-sm font-semibold mb-6 border border-purple-500/30">Mission</div>
                        <h2 class="text-4xl sm:text-5xl font-black mb-6">Our Mission</h2>
                        <p class="text-xl text-gray-300 leading-relaxed">
                            To design powerful, user-focused software that simplifies operations, accelerates growth, and enables organizations to make smarter decisions.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values Section -->
        <section id="values" class="py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-purple-50">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-20">
                    <span class="inline-block text-purple-600 font-bold text-sm mb-4 uppercase tracking-wider">What Drives Us</span>
                    <h2 class="text-5xl sm:text-6xl lg:text-7xl font-black text-gray-900 mb-6">
                        Core <span class="text-gray-900t">Values</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">The principles that guide every decision we make</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Value 1 -->
                    <div class="value-card hover-lift bg-white rounded-2xl p-8 shadow-lg">
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4">Innovation</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We continuously push boundaries and embrace cutting-edge technologies to deliver forward-thinking solutions that drive real change.
                        </p>
                    </div>

                    <!-- Value 2 -->
                    <div class="value-card hover-lift bg-white rounded-2xl p-8 shadow-lg fade-in-up delay-1">
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4">Integrity</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Transparency and ethical practices form the foundation of everything we do, building lasting trust with our clients and partners.
                        </p>
                    </div>

                    <!-- Value 3 -->
                    <div class="value-card hover-lift bg-white rounded-2xl p-8 shadow-lg fade-in-up delay-2">
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-cyan-600 to-blue-600 flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4">Excellence</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We strive for perfection in every project, delivering exceptional quality that exceeds expectations and creates lasting impact.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="py-32 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-20">
                    <span class="inline-block text-purple-600 font-bold text-sm mb-4 uppercase tracking-wider">Our People</span>
                    <h2 class="text-5xl sm:text-6xl lg:text-7xl font-black text-gray-900 mb-6">
                        Meet The Visionaries
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">Talented leaders driving innovation at the forefront of AI</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Team Member 1 -->
                    <div class="team-member hover-lift fade-in-left">
                        <div class="team-member-img h-64 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center relative overflow-hidden">
                            <div class="w-48 h-48 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                <img src="{{ asset('images/team/akmal_igen.jpg') }}" 
                                    alt="Syarifuddin Akmal" 
                                    class="w-48 h-48 rounded-full object-cover">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-black text-gray-900 mb-2">Syarifuddin Akmal</h3>
                            <div class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs font-bold mb-4">CEO & Founder</div>
                            <div class="flex gap-2">
                                <button onclick="window.open('https://www.linkedin.com/in/muhammad-syarifuddin-akmal-azizul-shah-362b432a8/', '_blank')" class="p-2 rounded-full hover:bg-purple-100 transition-colors">
                                    <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="team-member hover-lift fade-in-left delay-1">
                        <div class="team-member-img h-64 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center relative overflow-hidden">
                            <div class="w-48 h-48 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                <img src="{{ asset('images/team/arif_azlan.png') }}" 
                                    alt="Syarifuddin Akmal" 
                                    class="w-48 h-48 rounded-full object-cover">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-black text-gray-900 mb-2">Arif Azlan</h3>
                            <div class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-bold mb-4">Front End Dev</div>
                            <div class="flex gap-2">
                                <button onclick="window.open('https://www.linkedin.com/in/muhammad-arif-bin-azlan-1698a72b8/', '_blank')" class="p-2 rounded-full hover:bg-blue-100 transition-colors">
                                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="team-member hover-lift fade-in-right delay-1">
                        <div class="team-member-img h-64 bg-gradient-to-br from-cyan-600 to-teal-600 flex items-center justify-center relative overflow-hidden">
                            <div class="w-48 h-48 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                <img src="{{ asset('images/team/arif_jihan.jpg') }}" 
                                    alt="Syarifuddin Akmal" 
                                    class="w-48 h-48 rounded-full object-cover">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-black text-gray-900 mb-2">Arif Jihan</h3>
                            <div class="inline-block px-3 py-1 bg-cyan-100 text-cyan-600 rounded-full text-xs font-bold mb-4">UI/UX Designer</div>
                            <div class="flex gap-2">
                                <button onclick="window.open('https://www.linkedin.com/in/ariff-norjihan-8a1105332/', '_blank')" class="p-2 rounded-full hover:bg-cyan-100 transition-colors">
                                    <svg class="w-5 h-5 text-cyan-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="team-member hover-lift fade-in-right delay-2">
                        <div class="team-member-img h-64 bg-gradient-to-br from-pink-600 to-rose-600 flex items-center justify-center relative overflow-hidden">
                            <div class="w-48 h-48 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                <img src="{{ asset('images/team/harith.jpeg') }}" 
                                    alt="Syarifuddin Akmal" 
                                    class="w-48 h-48 rounded-full object-cover">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-black text-gray-900 mb-2">Harith Zulhairi</h3>
                            <div class="inline-block px-3 py-1 bg-pink-100 text-pink-600 rounded-full text-xs font-bold mb-4">Back End Dev</div>
                            <div class="flex gap-2">
                                <button onclick="window.open('https://www.linkedin.com/in/muhammad-harith-bin-zulhairi-732b16140/', '_blank')" class="p-2 rounded-full hover:bg-pink-100 transition-colors">
                                    <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </button>
                            </div>
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
                    Ready to Transform Your <span class="gradient-text">Business?</span>
                </h2>
                <p class="text-lg sm:text-xl text-purple-100 mb-10 max-w-2xl mx-auto fade-in-up delay-1 leading-relaxed">
                    Let's collaborate to bring your vision to life with innovative AI solutions tailored to your needs
                </p>
                <a href="{{ route('contact') }}" 
                    class="px-12 py-5 bg-white text-purple-900 font-black text-xl rounded-full hover:bg-purple-50 transition-all duration-300 shadow-2xl hover:shadow-white/50 transform hover:scale-110 glow-effect inline-block">
                    Get In Touch 🚀
                </a>
            </div>
        </section>
    </main>

    @include('footer')

    <script>
    // Function to handle smooth scrolling to sections
    function scrollToSection(sectionId) {
        const element = document.getElementById(sectionId);
        if (element) {
            window.scrollTo({
                top: element.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    }

    // Function to handle Get Started/Get In Touch button
    function handleGetStarted() {
        alert("Thank you for your interest! We'll contact you soon to discuss your project.");
        // In a real application, this would open a contact form or redirect to contact page
        // window.location.href = "/contact";
    }

    // Intersection Observer for fade-in animations on scroll
    document.addEventListener('DOMContentLoaded', function() {
        // Create particles dynamically
        createParticles();
        
        // Initialize intersection observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated-visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
            observer.observe(el);
        });

        // Add hover sound effects (optional)
        addHoverEffects();
        
        // Add scroll progress indicator
        createScrollProgress();
        
        // Add keyboard navigation
        setupKeyboardNavigation();
        
        // Initialize horizontal scroll for team section
        initializeTeamScroll();
    });


    // Function to create dynamic particles
    function createParticles() {
        const particlesContainer = document.querySelector('.gradient-hero');
        if (!particlesContainer) return;

        for (let i = 0; i < 15; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            
            // Random size between 5-20px
            const size = Math.random() * 15 + 5;
            
            // Random position
            const left = Math.random() * 100;
            const top = Math.random() * 100;
            
            // Random animation delay
            const delay = Math.random() * 20;
            
            // Random animation duration
            const duration = Math.random() * 10 + 15;
            
            // Set styles
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            particle.style.left = `${left}%`;
            particle.style.top = `${top}%`;
            particle.style.animationDelay = `${delay}s`;
            particle.style.animationDuration = `${duration}s`;
            
            // Random color
            const colors = [
                'rgba(255, 255, 255, 0.3)',
                'rgba(168, 85, 247, 0.2)',
                'rgba(124, 58, 237, 0.2)',
                'rgba(236, 72, 153, 0.2)'
            ];
            particle.style.background = colors[Math.floor(Math.random() * colors.length)];
            
            particlesContainer.appendChild(particle);
        }
    }

    // Function to add interactive hover effects
    function addHoverEffects() {
        // Add ripple effect to buttons
        const buttons = document.querySelectorAll('button');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple element
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.7);
                    transform: scale(0);
                    animation: ripple-animation 0.6s linear;
                    width: ${size}px;
                    height: ${size}px;
                    top: ${y}px;
                    left: ${x}px;
                `;
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                // Remove ripple after animation
                setTimeout(() => ripple.remove(), 600);
            });
        });

        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            .animated-visible {
                opacity: 1 !important;
                transform: translate(0, 0) !important;
            }
        `;
        document.head.appendChild(style);
    }

    // Function to create scroll progress indicator
    function createScrollProgress() {
        const progressBar = document.createElement('div');
        progressBar.id = 'scroll-progress';
        progressBar.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #7c3aed, #a855f7);
            z-index: 1000;
            transition: width 0.3s ease;
        `;
        document.body.appendChild(progressBar);

        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            progressBar.style.width = scrolled + '%';
        });
    }

    // Function to setup keyboard navigation
    function setupKeyboardNavigation() {
        document.addEventListener('keydown', (e) => {
            // Spacebar to scroll down one viewport
            if (e.code === 'Space' && !e.target.matches('input, textarea, button')) {
                e.preventDefault();
                window.scrollBy({
                    top: window.innerHeight * 0.8,
                    behavior: 'smooth'
                });
            }
            
            // Escape to scroll to top
            if (e.code === 'Escape') {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
            
            // Number keys to jump to sections
            if (e.code >= 'Digit1' && e.code <= 'Digit5') {
                const sections = ['story', 'values', 'team'];
                const index = parseInt(e.code.slice(-1)) - 1;
                if (sections[index]) {
                    scrollToSection(sections[index]);
                }
            }
        });
    }

    // Add page load animation
    window.addEventListener('load', () => {
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.5s ease-in';
        
        setTimeout(() => {
            document.body.style.opacity = '1';
        }, 100);
    });

    // Add mouse move parallax effect
    document.addEventListener('mousemove', (e) => {
        const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
        const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
        
        const floatElements = document.querySelectorAll('.float-animation');
        floatElements.forEach(el => {
            el.style.transform = `translate(${moveX}px, ${moveY}px)`;
        });
    });

    // Add click animation to value cards
    document.querySelectorAll('.value-card').forEach(card => {
        card.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        });
    });

    // Add scroll-triggered animations
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        
        const parallaxElements = document.querySelectorAll('.fade-in-left, .fade-in-right');
        parallaxElements.forEach(el => {
            el.style.transform = `translateY(${rate * 0.5}px)`;
        });
    });

    // Add console welcome message
    console.log('%c🌟 Welcome to IGEN VERITAS 🌟', 'font-size: 18px; color: #7c3aed; font-weight: bold;');
    console.log('%cInnovating with integrity, one line of code at a time.', 'color: #a855f7;');
</script>

</body>
</html>