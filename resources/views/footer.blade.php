<?php
// includes/footer.php
?>

<!-- FOOTER -->
<footer class="footer-bg text-gray-900 py-16 md:py-20 px-6 sm:px-8 lg:px-20 relative">
    <style>
        .footer-bg {
            background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%);
            position: relative;
            overflow: hidden;
        }

        .footer-bg::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(167, 139, 250, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .footer-bg::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(124, 58, 237, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .footer-section {
            position: relative;
            z-index: 10;
        }

        .footer-link {
            position: relative;
            transition: all 0.3s ease;
            font-weight: 500;
            color: #1f2937;
        }

        .footer-link::before {
            content: '';
            position: absolute;
            left: -6px;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 0;
            background: linear-gradient(180deg, #a78bfa, #7c3aed);
            transition: height 0.3s ease;
        }

        .footer-link:hover::before {
            height: 100%;
        }

        .footer-link:hover {
            color: #7c3aed;
            padding-left: 6px;
        }

        .social-icon {
            transition: all 0.3s ease;
            position: relative;
        }

        .social-icon:hover {
            transform: translateY(-3px) scale(1.1);
            filter: drop-shadow(0 5px 15px rgba(124, 58, 237, 0.4));
        }
    </style>

    <div class="max-w-7xl mx-auto">
        <!-- Desktop Layout -->
        <div class="hidden lg:grid grid-cols-4 gap-12 mb-12">
            <!-- Brand Section -->
            <div class="footer-section col-span-1">
                <div class="mb-8">
                    <img src="#" alt="IGEN VERITAS" class="w-32 h-auto mb-6">
                </div>
                <div class="flex gap-4">
                    <a href="https://instagram.com" class="social-icon">
                        <img src="#" alt="Instagram" class="w-10 h-10">
                    </a>
                    <a href="https://linkedin.com" class="social-icon">
                        <img src="#" alt="LinkedIn" class="w-10 h-10">
                    </a>
                    <a href="https://twitter.com" class="social-icon">
                        <img src="#" alt="Twitter" class="w-10 h-10">
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="footer-section">
                <h3 class="text-lg font-bold text-gray-900 mb-6 relative">
                    Navigation
                    <div class="h-1 w-12 bg-gradient-to-r from-purple-500 to-purple-300 mt-2 rounded-full"></div>
                </h3>
                <ul class="space-y-3">
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">About Us</a></li>
                    <li><a href="#" class="footer-link">Our Services</a></li>
                    <li><a href="#" class="footer-link">Contact Us</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-section">
                <h3 class="text-lg font-bold text-gray-900 mb-6 relative">
                    Services
                    <div class="h-1 w-12 bg-gradient-to-r from-purple-500 to-purple-300 mt-2 rounded-full"></div>
                </h3>
                <ul class="space-y-3">
                    <li><a href="#" class="footer-link">Software Development</a></li>
                    <li><a href="#" class="footer-link">AI Consultation</a></li>
                    <li><a href="#" class="footer-link">Tech Solutions</a></li>
                    <li><a href="#" class="footer-link">Enterprise Services</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-section">
                <h3 class="text-lg font-bold text-gray-900 mb-6 relative">
                    Contact
                    <div class="h-1 w-12 bg-gradient-to-r from-purple-500 to-purple-300 mt-2 rounded-full"></div>
                </h3>
                <div class="space-y-4 text-gray-700">
                    <p class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-purple-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <span>igenveritas@gmail.com</span>
                    </p>
                    <p class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-purple-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773c.418.935 1.331 2.601 2.986 4.256 1.655 1.655 3.321 2.568 4.256 2.986l.773-1.548a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2.694a13 13 0 01-13-13V3z"></path>
                        </svg>
                        <span>+60 19971 0470</span>
                    </p>
                    <p class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-purple-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Taman Pinggiran Indah,<br>68100, Batu Caves, Selangor</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Mobile & Tablet Layout -->
        <div class="lg:hidden">
            <div class="space-y-12">
                <div class="text-center">
                    <img src="#" alt="IGEN VERITAS" class="w-32 h-auto mx-auto mb-6">
                    <div class="flex gap-3 justify-center">
                        <a href="https://instagram.com" class="social-icon">
                            <img src="#" alt="Instagram" class="w-10 h-10">
                        </a>
                        <a href="https://linkedin.com" class="social-icon">
                            <img src="#" alt="LinkedIn" class="w-10 h-10">
                        </a>
                        <a href="https://twitter.com" class="social-icon">
                            <img src="#" alt="Twitter" class="w-10 h-10">
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-8 text-center">
                    <div class="footer-section">
                        <h3 class="font-bold text-gray-900 mb-4">Navigation</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="footer-link text-gray-700 block">Home</a></li>
                            <li><a href="#" class="footer-link text-gray-700 block">About Us</a></li>
                            <li><a href="#p" class="footer-link text-gray-700 block">Our Services</a></li>
                            <li><a href="#" class="footer-link text-gray-700 block">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <h3 class="font-bold text-gray-900 mb-4">Contact</h3>
                        <p class="text-sm text-gray-700 mb-2">igenveritas@gmail.com</p>
                        <p class="text-sm text-gray-700 mb-2">+60 19971 0470</p>
                        <p class="text-xs text-gray-700">Batu Caves, Selangor</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t-2 border-purple-300/30 mt-12 pt-8">
            <p class="text-center text-gray-600 text-sm font-medium">
                © 2024 <span class="text-purple-600 font-bold">IGEN VERITAS</span>. All rights reserved.
            </p>
        </div>
    </div>
</footer>

</body>
</html>