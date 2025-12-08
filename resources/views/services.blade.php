<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - IGEN VERITAS</title>
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
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out;
        }

        .animate-slideInRight {
            animation: slideInRight 0.8s ease-out;
        }
        
        /* Team button styles */
        .team-button {
            display: inline-flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 2rem;
            background-color: white;
            color: #581c87;
            font-weight: 600;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }
        
        .team-button:hover {
            background-color: #f5f3ff;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .arrow-circle {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            background-color: #7c3aed;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .team-button:hover .arrow-circle {
            background-color: #6d28d9;
            transform: translateX(4px);
        }

        .arrow-circle img {
            filter: brightness(0) invert(1);
        }

        /* Service detail item */
        .service-detail-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .service-detail-item img {
            flex-shrink: 0;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body class="bg-white text-gray-900">
    @include('header')

    <main class="w-full">
        <!-- Hero Section -->
        <section class="min-h-[60vh] gradient-purple flex items-center justify-center px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-10 left-5 w-48 h-48 bg-purple-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-5 w-64 h-64 bg-purple-300/20 rounded-full blur-3xl"></div>
            
            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight animate-fadeInUp">
                    Our Services
                </h1>
                <p class="text-lg sm:text-2xl text-purple-100 animate-fadeInUp" style="animation-delay: 0.2s;">
                    What we can do for you
                </p>
            </div>
        </section>

        <!-- Service 1: Software Development -->
        <section class="py-16 sm:py-24 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div class="animate-slideInLeft">
                        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            SOFTWARE<br>DEVELOPMENT
                        </h2>
                        <div class="w-16 h-1 bg-gradient-to-r from-purple-600 to-purple-400 mb-6"></div>
                        
                        <p class="text-lg sm:text-xl text-gray-700 mb-10 leading-relaxed">
                            Transform your ideas into powerful, AI-enhanced software solutions.
                        </p>

                        <!-- Service Details -->
                        <div class="space-y-6 mb-10">
                            <div class="service-detail-item">
                                <img src="../src/assets/scissors.png" alt="Tailor-made" width="40" height="40" class="w-10 h-10">
                                <div>
                                    <p class="text-base sm:text-lg text-gray-700">Tailor-made solution made just for you.</p>
                                </div>
                            </div>
                            <div class="service-detail-item">
                                <img src="../src/assets/programming.png" alt="Cross-platform" width="40" height="40" class="w-10 h-10">
                                <div>
                                    <p class="text-base sm:text-lg text-gray-700">Cross-platform solutions for effective use.</p>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <a href="#" class="team-button inline-flex">
                            <span class="text-base sm:text-lg">Talk to our team</span>
                            <div class="arrow-circle">
                                <img src="../src/assets/back_arrow.png" alt="Arrow" width="20" height="20">
                            </div>
                        </a>
                    </div>

                    <!-- Image Content -->
                    <div class="animate-slideInRight flex justify-center order-first lg:order-last">
                        <div class="w-full max-w-sm h-96 bg-gradient-to-br from-purple-100 to-purple-50 rounded-lg shadow-2xl flex items-center justify-center">
                            <svg class="w-40 h-40 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4m-4-4l-4 4m4-4l4-4M9.172 13.828a4 4 0 015.656 0M9.172 9.172a4 4 0 015.656 0m-5.656 5.656a4 4 0 01-5.656-5.656m11.313-2.243a9 9 0 10-12.728 12.728m0 0a9 9 0 0012.728-12.728"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service 2: AI Consultation -->
        <section class="py-16 sm:py-24 px-4 sm:px-6 lg:px-8 bg-gray-50">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Image Content -->
                    <div class="animate-slideInLeft flex justify-center">
                        <div class="w-full max-w-sm h-96 bg-gradient-to-br from-purple-100 to-purple-50 rounded-lg shadow-2xl flex items-center justify-center">
                            <svg class="w-40 h-40 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="animate-slideInRight">
                        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            AI<br>CONSULTATION
                        </h2>
                        <div class="w-16 h-1 bg-gradient-to-r from-purple-600 to-purple-400 mb-6"></div>
                        
                        <p class="text-lg sm:text-xl text-gray-700 mb-10 leading-relaxed">
                            Unlock the full potential of AI with tailored strategies that streamline operations and enhance decision-making.
                        </p>

                        <!-- Service Details -->
                        <div class="space-y-6 mb-10">
                            <div class="service-detail-item">
                                <img src="../src/assets/automation.png" alt="Automation" width="40" height="40" class="w-10 h-10">
                                <div>
                                    <p class="text-base sm:text-lg text-gray-700">Smarter automation for improved efficiency and reduced costs.</p>
                                </div>
                            </div>
                            <div class="service-detail-item">
                                <img src="../src/assets/analysis.png" alt="Analysis" width="40" height="40" class="w-10 h-10">
                                <div>
                                    <p class="text-base sm:text-lg text-gray-700">Data-driven insights to fuel innovation and growth.</p>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <a href="#" class="team-button inline-flex">
                            <span class="text-base sm:text-lg">Talk to our team</span>
                            <div class="arrow-circle">
                                <img src="../src/assets/back_arrow.png" alt="Arrow" width="20" height="20">
                            </div>
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
                    Ready to Get Started?
                </h2>
                <p class="text-lg text-purple-100 mb-8 max-w-2xl mx-auto">
                    Let's discuss how our services can transform your business and drive success
                </p>
                <button onclick="handleGetStarted()" class="inline-flex items-center gap-3 px-8 py-3 bg-white text-purple-900 font-bold text-base sm:text-lg rounded-lg hover:bg-purple-50 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                    <span>Contact Us Today</span>
                    <div class="w-6 h-6 bg-purple-600 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </button>
            </div>
        </section>
    </main>

    @include('footer')

    <script>
        // Handle contact button
        function handleGetStarted() {
            const email = prompt('Enter your email to get started:');
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
                    entry.target.classList.add('animate-fadeInUp', 'animate-slideInLeft', 'animate-slideInRight');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('[class*="animate-"]').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>