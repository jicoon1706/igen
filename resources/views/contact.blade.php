<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contact Us - IGEN VERITAS</title>
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

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-slideInUp {
            animation: slideInUp 0.8s ease-out;
        }

        /* Form styles */
        .contact-form {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        @media (min-width: 768px) {
            .contact-form {
                padding: 3rem;
            }
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 1.5rem;
        }

        .form-group label {
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        .form-group span {
            color: #ef4444;
        }

        .form-group input,
        .form-group textarea {
            padding: 0.75rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #7c3aed;
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .submit-btn {
            padding: 1rem 2rem;
            background-color: #7c3aed;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .submit-btn:hover:not(:disabled) {
            background-color: #6d28d9;
            box-shadow: 0 10px 25px -5px rgba(124, 58, 237, 0.4);
            transform: translateY(-2px);
        }

        .submit-btn:disabled {
            background-color: #d1d5db;
            cursor: not-allowed;
        }

        .contact-info-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            align-items: center;
            margin-top: 4rem;
            padding: 2rem;
            background: linear-gradient(135deg, #f3e8ff 0%, #faf5ff 100%);
            border-radius: 1rem;
        }

        .contact-item {
            text-align: center;
            font-size: 1.125rem;
            color: #581c87;
            font-weight: 500;
        }

        .divider {
            display: none;
            width: 2px;
            height: 60px;
            background-color: #d8b4fe;
        }

        @media (min-width: 768px) {
            .contact-info-row {
                grid-template-columns: 1fr 2px 1fr 2px 1fr;
            }

            .divider {
                display: block;
            }
        }
    </style>
</head>
<body class="bg-white text-gray-900">
    @include('header')

    <main class="w-full">
        <!-- Hero Section -->
        <section class="min-h-[50vh] gradient-purple flex items-center justify-center px-4 sm:px-6 lg:px-8 relative overflow-hidden pt-20">
            <!-- Decorative elements -->
            <div class="absolute top-10 left-5 w-48 h-48 bg-purple-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-5 w-64 h-64 bg-purple-300/20 rounded-full blur-3xl"></div>
            
            <div class="max-w-4xl mx-auto text-center relative z-10 animate-fadeInUp">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                    Contact Us
                </h1>
                <p class="text-lg sm:text-2xl text-purple-100">
                    We'd love to hear from you.
                </p>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="py-16 sm:py-24 px-4 sm:px-6 lg:px-8 bg-gray-50">
            <div class="max-w-3xl mx-auto animate-slideInUp">
                <form class="contact-form" action="" method="POST">
                    <!-- First Name and Last Name Row -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fname">First Name<span>*</span></label>
                            <input type="text" id="fname" name="fname" required>
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name<span>*</span></label>
                            <input type="text" id="lname" name="lname" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email Address<span>*</span></label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <!-- Subject -->
                    <div class="form-group">
                        <label for="subject">Subject<span>*</span></label>
                        <input type="text" id="subject" name="subject" placeholder="What is this about?">
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <label for="message">Message<span>*</span></label>
                        <textarea id="message" name="message" placeholder="Type your message here..." required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" id="submit-btn" class="submit-btn w-full sm:w-auto" disabled>
                        Get Started
                    </button>
                </form>
            </div>
        </section>

        <!-- Contact Info Section -->
        <section class="py-16 sm:py-24 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-5xl mx-auto">
                <div class="contact-info-row animate-fadeInUp">
                    <div class="contact-item">
                        <div class="font-semibold mb-2">Email</div>
                        <a href="mailto:igenveritas@gmail.com" class="text-purple-600 hover:text-purple-700 transition">
                            igenveritas@gmail.com
                        </a>
                    </div>
                    <div class="divider"></div>
                    <div class="contact-item">
                        <div class="font-semibold mb-2">Phone</div>
                        <a href="tel:+60199710470" class="text-purple-600 hover:text-purple-700 transition">
                            +60 19971 0470
                        </a>
                    </div>
                    <div class="divider"></div>
                    <div class="contact-item">
                        <div class="font-semibold mb-2">Address</div>
                        <p class="text-purple-900">
                            Taman Pinggiran Indah,<br>68100, Batu Caves, Selangor
                        </p>
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
                    Have Questions?
                </h2>
                <p class="text-lg text-purple-100 mb-8 max-w-2xl mx-auto">
                    Our team is ready to help you transform your business with innovative AI solutions
                </p>
            </div>
        </section>
    </main>

    @include('footer')

    <script>
        function validateForm() {
            const fname = document.getElementById('fname').value.trim();
            const lname = document.getElementById('lname').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();

            const submitBtn = document.getElementById('submit-btn');

            if (fname !== '' && lname !== '' && email !== '' && subject !== '' && message !== '') {
                submitBtn.disabled = false;
                submitBtn.style.backgroundColor = '#7c3aed';
            } else {
                submitBtn.disabled = true;
                submitBtn.style.backgroundColor = '#d1d5db';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('#fname, #lname, #email, #subject, #message');
            inputs.forEach(input => {
                input.addEventListener('input', validateForm);
            });
            validateForm(); // Initial check
        });

        // Intersection Observer for animations on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp', 'animate-slideInUp');
                }
            });
        }, observerOptions);

        // Observe all animated sections
        document.querySelectorAll('[class*="animate-"]').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>