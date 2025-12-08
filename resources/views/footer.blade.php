<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Footer</title>
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
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes pulse-slow {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }

        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }

        .gradient-text {
            background: linear-gradient(135deg, #ffffff 0%, #e9d5ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-purple {
            background: linear-gradient(135deg, #c084fc 0%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body>

<footer class="relative bg-gray-900 text-white overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-0 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-pink-600/20 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 10%; top: 20%; animation-delay: 0s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 85%; top: 15%; animation-delay: 1s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 70%; top: 60%; animation-delay: 2s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 25%; top: 75%; animation-delay: 3s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 50%; top: 30%; animation-delay: 4s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 90%; top: 80%; animation-delay: 1.5s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 15%; top: 45%; animation-delay: 2.5s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 65%; top: 25%; animation-delay: 3.5s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 40%; top: 85%; animation-delay: 0.5s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 75%; top: 50%; animation-delay: 1.8s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 20%; top: 65%; animation-delay: 2.3s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 55%; top: 70%; animation-delay: 3.2s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 80%; top: 40%; animation-delay: 4.5s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 35%; top: 55%; animation-delay: 0.8s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 95%; top: 35%; animation-delay: 2.8s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 5%; top: 90%; animation-delay: 3.8s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 60%; top: 10%; animation-delay: 1.2s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 30%; top: 80%; animation-delay: 4.2s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 85%; top: 65%; animation-delay: 2.2s;"></div>
        <div class="absolute w-1 h-1 bg-white/30 rounded-full animate-float" style="left: 45%; top: 40%; animation-delay: 3.6s;"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Main Footer Content -->
        <div class="py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Brand Section -->
                <div class="lg:col-span-1">
                    <div class="mb-6">
                        <h3 class="text-2xl font-black gradient-text-purple">
                            IGEN VERITAS
                        </h3>
                        <p class="text-gray-400 mt-4 leading-relaxed">
                            Powering the future with intelligent solutions and cutting-edge technology.
                        </p>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-blue-500 transition-all duration-300 transform hover:scale-110 hover:rotate-12 border border-white/20">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-sky-500 transition-all duration-300 transform hover:scale-110 hover:rotate-12 border border-white/20">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-blue-600 transition-all duration-300 transform hover:scale-110 hover:rotate-12 border border-white/20">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-pink-500 transition-all duration-300 transform hover:scale-110 hover:rotate-12 border border-white/20">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Navigation -->
                <div>
                    <h4 class="text-lg font-bold mb-6 relative inline-block">
                        Navigation
                        <div class="absolute -bottom-2 left-0 w-12 h-1 bg-gradient-to-r from-purple-500 to-transparent rounded-full"></div>
                    </h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white hover:translate-x-2 inline-block transition-all duration-300 group">
                                <span class="group-hover:border-b-2 group-hover:border-purple-500">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white hover:translate-x-2 inline-block transition-all duration-300 group">
                                <span class="group-hover:border-b-2 group-hover:border-purple-500">About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white hover:translate-x-2 inline-block transition-all duration-300 group">
                                <span class="group-hover:border-b-2 group-hover:border-purple-500">Our Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white hover:translate-x-2 inline-block transition-all duration-300 group">
                                <span class="group-hover:border-b-2 group-hover:border-purple-500">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-bold mb-6 relative inline-block">
                        Services
                        <div class="absolute -bottom-2 left-0 w-12 h-1 bg-gradient-to-r from-purple-500 to-transparent rounded-full"></div>
                    </h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white hover:translate-x-2 inline-block transition-all duration-300 group">
                                <span class="group-hover:border-b-2 group-hover:border-purple-500">Website Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white hover:translate-x-2 inline-block transition-all duration-300 group">
                                <span class="group-hover:border-b-2 group-hover:border-purple-500">Mobile Apps</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white hover:translate-x-2 inline-block transition-all duration-300 group">
                                <span class="group-hover:border-b-2 group-hover:border-purple-500">AI Solutions</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white hover:translate-x-2 inline-block transition-all duration-300 group">
                                <span class="group-hover:border-b-2 group-hover:border-purple-500">Cloud Services</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6 relative inline-block">
                        Get in Touch
                        <div class="absolute -bottom-2 left-0 w-12 h-1 bg-gradient-to-r from-purple-500 to-transparent rounded-full"></div>
                    </h4>
                    <div class="space-y-4">
                        <a href="mailto:igenveritas@gmail.com" class="flex items-start gap-3 text-gray-400 hover:text-white transition-colors duration-300 group">
                            <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-purple-500/30 transition-colors">
                                <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Email</p>
                                <p class="font-semibold">igenveritas@gmail.com</p>
                            </div>
                        </a>

                        <a href="tel:+60173103966" class="flex items-start gap-3 text-gray-400 hover:text-white transition-colors duration-300 group">
                            <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-blue-500/30 transition-colors">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Phone</p>
                                <p class="font-semibold">+60 17310 3966</p>
                            </div>
                        </a>

                        <div class="flex items-start gap-3 text-gray-400">
                            <div class="w-10 h-10 bg-pink-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Location</p>
                                <p class="font-semibold">Batu Caves, Selangor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/10 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-400 text-sm">
                    © 2024 <span class="font-bold text-white">IGEN VERITAS</span>. All rights reserved.
                </p>
                <div class="flex gap-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        Privacy Policy
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        Terms of Service
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        Cookies
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    function handleSubscribe() {
        const emailInput = document.getElementById('newsletterEmail');
        const message = document.getElementById('subscribeMessage');
        const email = emailInput.value;
        
        if (email && email.includes('@')) {
            message.classList.remove('hidden');
            emailInput.value = '';
            
            setTimeout(() => {
                message.classList.add('hidden');
            }, 3000);
        }
    }

    // Allow Enter key to submit
    document.getElementById('newsletterEmail').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            handleSubscribe();
        }
    });
</script>

</body>
</html>