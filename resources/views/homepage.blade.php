<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGEN VERITAS - Powering the Future with Intelligence</title>
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
        
        /* Component styles */
        .btn-primary {
            padding: 1rem 2rem;
            background-color: white;
            color: #581c87;
            font-weight: 600;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .btn-primary:hover {
            background-color: #f5f3ff;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transform: scale(1.05);
        }
        
        .btn-secondary {
            padding: 1rem 2rem;
            border: 2px solid white;
            color: white;
            font-weight: 600;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background-color: white;
            color: #581c87;
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
        <!-- Hero Section - Reduced height -->
        <section class="min-h-[80vh] gradient-purple flex items-center justify-center px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-10 left-5 w-48 h-48 bg-purple-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-5 w-64 h-64 bg-purple-300/20 rounded-full blur-3xl"></div>
            
            <div class="max-w-4xl mx-auto text-center relative z-10 pt-16">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight animate-fadeInUp">
                    Powering the Future <br class="hidden sm:block"> with Intelligence.
                </h1>
                <p class="text-lg sm:text-xl text-purple-100 mb-8 max-w-2xl mx-auto animate-fadeInUp" style="animation-delay: 0.2s;">
                    Transform your business with cutting-edge AI solutions and enterprise-grade software development
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fadeInUp" style="animation-delay: 0.4s;">
                    <button onclick="scrollToServices()" class="btn-primary text-base sm:text-lg">
                        Get Started
                    </button>
                    <button onclick="scrollToContact()" class="btn-secondary text-base sm:text-lg">
                        Learn More
                    </button>
                </div>
            </div>
        </section>

        <!-- Services Overview Section - Reduced height -->
        <section id="services" class="py-16 sm:py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                        What We Do
                    </h2>
                    <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto">
                        We offer widespread services with a keen focus on AI use in optimization.
                    </p>
                </div>

                <!-- Services Cards -->
                <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                    <!-- Software Development Card -->
                    <div class="service-card cursor-pointer" onclick="handleServiceClick('software')">
                        <div class="relative overflow-hidden h-64 sm:h-72 bg-gradient-to-br from-purple-100 to-purple-50 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-24 h-24 mx-auto text-purple-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5h.01M15.89 5.89l-.707-.707M5.109 5.109l-.707.707M5.109 18.891l.707-.707"></path>
                                </svg>
                                <p class="text-purple-600 font-semibold text-sm sm:text-base">Software Development</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-purple-900 mb-3">
                                Software Development
                            </h3>
                            <p class="text-base text-gray-600">
                                Our engineering mindset in development results in robust software that is efficient, scalable, and built for the future.
                            </p>
                        </div>
                    </div>

                    <!-- AI Consultation Card -->
                    <div class="service-card cursor-pointer" onclick="handleServiceClick('ai')">
                        <div class="relative overflow-hidden h-64 sm:h-72 bg-gradient-to-br from-purple-100 to-purple-50 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-24 h-24 mx-auto text-purple-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <p class="text-purple-600 font-semibold text-sm sm:text-base">AI Consultation</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-purple-900 mb-3">
                                AI Consultation
                            </h3>
                            <p class="text-base text-gray-600">
                                Consult with us for any AI integration in software products to optimize your solutions and stay ahead of the competition.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section - Reduced height -->
        <section id="contact" class="py-16 sm:py-20 px-4 sm:px-6 lg:px-8 gradient-purple relative overflow-hidden">
            <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-64 h-64 bg-purple-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-64 h-64 bg-purple-400/20 rounded-full blur-3xl"></div>
            
            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight">
                    Let Us Build Your <br> <span class="gradient-text text-4xl sm:text-5xl lg:text-6xl" id="changing-word">
                        Future.
                    </span>
                </h2>
                <p class="text-lg text-purple-100 mb-8 max-w-2xl mx-auto">
                    Start your transformation journey today with IGEN VERITAS
                </p>
                <button onclick="handleGetStarted()" class="inline-block px-8 py-3 bg-white text-purple-900 font-bold text-base sm:text-lg rounded-lg hover:bg-purple-50 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105 animate-pulse-glow">
                    Get Started
                </button>
            </div>
        </section>
    </main>

    @include('footer')

    <script>
        // Array of words to cycle through
        const words = ['Future.', 'Site.', 'Dreams.', 'Vision.', 'Success.'];
        let currentWordIndex = 0;

        // Change word every 3 seconds
        function changeWord() {
            const element = document.getElementById('changing-word');
            currentWordIndex = (currentWordIndex + 1) % words.length;
            element.textContent = words[currentWordIndex];
            
            // Add animation
            element.style.animation = 'none';
            setTimeout(() => {
                element.style.animation = 'fadeInUp 0.5s ease-out';
            }, 10);
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
        document.querySelectorAll('.service-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>