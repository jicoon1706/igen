<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - IGEN VERITAS</title>
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
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #a855f7, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Form styles */
        .form-input {
            background: rgba(255, 255, 255, 0.95);
            border: 2px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 0.875rem 1.25rem;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #7c3aed;
            box-shadow: 0 0 0 4px rgba(124, 58, 237, 0.1);
            background: white;
        }
        
        .form-input::placeholder {
            color: #9ca3af;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.625rem;
            font-size: 0.95rem;
        }
        
        .form-label span {
            color: #ef4444;
        }
        
        /* Submit button */
        .submit-btn {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #7c3aed, #a855f7);
            color: white;
            font-weight: 700;
            font-size: 1.05rem;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 0.75rem;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(124, 58, 237, 0.3);
        }
        
        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }
        
        .submit-btn:hover:not(:disabled)::before {
            left: 100%;
        }
        
        .submit-btn:not(:disabled):hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(124, 58, 237, 0.4);
        }
        
        .submit-btn:disabled {
            background: #d1d5db;
            cursor: not-allowed;
            opacity: 0.6;
        }
        
        /* Contact info card */
        .contact-card {
            background: white;
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            text-align: center;
        }
        
        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(124, 58, 237, 0.15);
        }
        
        .contact-card-icon {
            width: 4rem;
            height: 4rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.75rem;
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

        /* Success message */
        .success-message {
            display: none;
            position: fixed;
            top: 2rem;
            right: 2rem;
            background: #10b981;
            color: white;
            padding: 1.25rem 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: slideInDown 0.5s ease;
            z-index: 1000;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
                    <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-white text-sm font-semibold mb-6">Get in Touch</span>
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                        Let's Connect &<br><span class="gradient-text">Collaborate</span>
                    </h1>
                </div>
                <p class="text-lg sm:text-xl lg:text-2xl text-purple-100 mb-8 max-w-3xl mx-auto fade-in-up delay-1 leading-relaxed">
                    Have a project in mind or questions about our services? We'd love to hear from you. Reach out and let's start your transformation journey.
                </p>
            </div>
        </section>

        <!-- Contact Form & Info Section -->
        <section class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white via-purple-50 to-white relative">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-3 gap-12 items-start">
                    <!-- Contact Info Cards -->
                    <div class="space-y-6 fade-in-left">
                        <div>
                            <span class="inline-block text-purple-600 font-bold text-sm mb-4 uppercase tracking-wider">Contact Information</span>
                            <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-8">Get In Touch</h2>
                        </div>

                        <!-- Email Card -->
                        <div class="contact-card fade-in-up">
                            <div class="contact-card-icon bg-gradient-to-br from-purple-600 to-pink-600">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                            <a href="mailto:info@igenveritas.com" class="text-purple-600 hover:text-purple-700 font-semibold transition-colors">
                                info@igenveritas.com
                            </a>
                        </div>

                        <!-- Phone Card -->
                        <div class="contact-card fade-in-up delay-1">
                            <div class="contact-card-icon bg-gradient-to-br from-blue-600 to-purple-600">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Phone</h3>
                            <a href="tel:+60199710470" class="text-purple-600 hover:text-purple-700 font-semibold transition-colors">
                                +60 17 310 3966
                            </a>
                        </div>

                        <!-- Address Card -->
                        <div class="contact-card fade-in-up delay-2">
                            <div class="contact-card-icon bg-gradient-to-br from-cyan-600 to-blue-600">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Address</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Batu Caves<br>
                                Selangor, Malaysia
                            </p>
                        </div>

                        <!-- Response Time -->
                        <div class="bg-purple-50 rounded-xl p-4 mt-8 fade-in-up delay-3">
                            <p class="text-sm text-gray-700">
                                <span class="font-bold text-purple-600">⏱️ Response Time</span><br>
                                We typically respond within 24 hours
                            </p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="lg:col-span-2 fade-in-right">
                        <form id="contactForm" class="bg-white rounded-2xl shadow-2xl p-8 sm:p-10">
                            <!-- Name Row -->
                            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="form-label">
                                        First Name <span>*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="firstName" 
                                        name="firstName" 
                                        class="form-input w-full"
                                        placeholder="John"
                                        required
                                    >
                                </div>
                                <div>
                                    <label class="form-label">
                                        Last Name <span>*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="lastName" 
                                        name="lastName" 
                                        class="form-input w-full"
                                        placeholder="Doe"
                                        required
                                    >
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-6">
                                <label class="form-label">
                                    Email Address <span>*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    class="form-input w-full"
                                    placeholder="john@example.com"
                                    required
                                >
                            </div>

                            <!-- Company -->
                            <div class="mb-6">
                                <label class="form-label">
                                    Company Name
                                </label>
                                <input 
                                    type="text" 
                                    id="company" 
                                    name="company" 
                                    class="form-input w-full"
                                    placeholder="Your company"
                                >
                            </div>

                            <!-- Subject -->
                            <div class="mb-6">
                                <label class="form-label">
                                    Subject <span>*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="subject" 
                                    name="subject" 
                                    class="form-input w-full"
                                    placeholder="How can we help?"
                                    required
                                >
                            </div>

                            <!-- Message -->
                            <div class="mb-8">
                                <label class="form-label">
                                    Message <span>*</span>
                                </label>
                                <textarea 
                                    id="message" 
                                    name="message" 
                                    class="form-input w-full"
                                    placeholder="Tell us more about your project..."
                                    rows="5"
                                    required
                                ></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button 
                                type="submit" 
                                id="submitBtn" 
                                class="submit-btn w-full sm:w-auto"
                                disabled
                            >
                                Send Message
                            </button>
                            <p class="text-sm text-gray-500 mt-4">
                                We'll get back to you as soon as possible.
                            </p>
                        </form>
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
                    Ready to Start Your <span class="gradient-text">Transformation?</span>
                </h2>
                <p class="text-lg sm:text-xl text-purple-100 mb-10 max-w-2xl mx-auto fade-in-up delay-1 leading-relaxed">
                    Our team of experts is ready to help you achieve your goals with innovative AI solutions
                </p>
                <div class="fade-in-up delay-2">
                    <button onclick="document.getElementById('contactForm').scrollIntoView({behavior:'smooth'})" class="px-10 py-4 bg-white text-purple-900 font-black text-lg rounded-full hover:bg-purple-50 transition-all duration-300 shadow-2xl hover:shadow-white/50 transform hover:scale-110">
                        Connect With Us 🚀
                    </button>
                </div>
            </div>
        </section>
    </main>

    @include('footer')

    <!-- Success Message -->
    <div class="success-message" id="successMessage">
        ✓ Thank you! Your message has been sent successfully. We'll be in touch soon.
    </div>

   <script>
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const successMessage = document.getElementById('successMessage');
    const inputs = form.querySelectorAll('input[required], textarea[required]');

    // Validate form function
    function validateForm() {
        let isValid = true;
        inputs.forEach(input => {
            if (input.type === 'email') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                isValid = isValid && emailRegex.test(input.value);
            } else {
                isValid = isValid && input.value.trim() !== '';
            }
        });
        
        submitBtn.disabled = !isValid;
        return isValid;
    }

    // Add event listeners for validation
    inputs.forEach(input => {
        input.addEventListener('input', validateForm);
        input.addEventListener('change', validateForm);
    });

    // Handle form submission
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        if (validateForm()) {
            // Disable submit button
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';
            
            try {
                // Get CSRF token
                const token = document.querySelector('meta[name="csrf-token"]')?.content;
                
                // Prepare form data - FIX: Use correct field names
                const data = {
                    first_name: document.getElementById('firstName').value,
                    last_name: document.getElementById('lastName').value,
                    email: document.getElementById('email').value,
                    company: document.getElementById('company').value,
                    subject: document.getElementById('subject').value,
                    message: document.getElementById('message').value
                };
                
                // Send to server
                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(data)
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Show success message
                    successMessage.style.display = 'block';
                    
                    // Reset form
                    form.reset();
                    
                    // Hide message after 5 seconds
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 5000);
                } else {
                    alert('Error: ' + (result.message || 'Something went wrong'));
                }
                
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again later.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Send Message';
                validateForm();
            }
        }
    });

    // Intersection Observer for animations
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

        // Observe contact cards
        const contactCards = document.querySelectorAll('.contact-card');
        contactCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = `all 0.6s ease ${index * 0.1}s`;
            observer.observe(card);
        });

        // Initial validation check
        validateForm();
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
</body>
</html>