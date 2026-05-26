@extends('layout')

@section('title', 'IGEN VERITAS | Contact Us')

@section('content')
    <!-- Hero Section (Dark Theme Centered) -->
    <section class="relative min-h-[60vh] flex items-center justify-center pt-32 pb-20 overflow-hidden bg-gray-950 text-center">
        <!-- Abstract Glows & Grid -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_0%,rgba(124,58,237,0.3),transparent)] pointer-events-none"></div>
        <div class="absolute inset-0 opacity-[0.04]" style="background-image:radial-gradient(circle,#a78bfa 1px,transparent 1px);background-size:28px 28px;"></div>
        
        <!-- Full Cover Ghost Image with heavy dark overlay -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <img src="{{ asset('images/contact_hero_bg.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover opacity-30" style="animation: heroZoomContact 2s ease-out forwards; mask-image: radial-gradient(circle at center, black 0%, transparent 80%); -webkit-mask-image: radial-gradient(circle at center, black 0%, transparent 80%);">
        </div>
        <style>@keyframes heroZoomContact { 0%{transform:scale(1.1);opacity:0} 100%{transform:scale(1);opacity:0.3} }</style>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full flex flex-col items-center">
            <div class="max-w-3xl" data-aos="fade-up" data-aos-duration="800">
                <h1 class="font-black text-white leading-[1.1] tracking-tight mb-6" style="font-size:clamp(3rem,7vw,4.5rem);">
                    Let's Connect &<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-violet-300 to-purple-400">Collaborate</span>
                </h1>
                <p class="text-gray-400 text-lg md:text-xl leading-relaxed max-w-2xl mx-auto">
                    Have a project in mind or questions about our services? We'd love to hear from you. Reach out and let's start your transformation journey.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Info & Booking Flow -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="bookingApp()">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Left Column: Contact Info Cards -->
                <div class="lg:col-span-4 space-y-6" data-aos="fade-right">
                    <div>
                        <span class="inline-block text-purple-600 font-bold text-sm mb-4 uppercase tracking-wider">Contact Information</span>
                        <h2 class="text-3xl font-black text-gray-900 mb-8">Get In Touch</h2>
                    </div>

                    <!-- Email Card -->
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover-scale flex items-center">
                        <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-bold text-gray-900 mb-1">Email</h3>
                            <a href="mailto:igenveritas@gmail.com" class="text-purple-600 text-sm font-semibold hover:text-purple-800">igenveritas@gmail.com</a>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover-scale flex items-center">
                        <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-bold text-gray-900 mb-1">Phone</h3>
                            <a href="tel:+60173103966" class="text-purple-600 text-sm font-semibold hover:text-purple-800">+60 17 310 3966</a>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover-scale flex items-center">
                        <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-bold text-gray-900 mb-1">Address</h3>
                            <p class="text-gray-600 text-sm">Batu Caves, Selangor</p>
                        </div>
                    </div>

                    <!-- Response Time Card -->
                    <div class="bg-gray-50 p-6 rounded-2xl border border-gray-200 mt-6 flex items-start">
                        <div class="w-8 h-8 flex items-center justify-center text-xl shrink-0">⏱️</div>
                        <div class="ml-3">
                            <h3 class="font-bold text-gray-900 mb-1 text-sm">Response Time</h3>
                            <p class="text-gray-600 text-sm">We typically respond within 24 hours to all inquiries.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Booking Calendar - Immersive Premium Experience -->
                <div class="lg:col-span-8 relative" data-aos="fade-left">
                    
                    <!-- Advanced Styles -->
                    <style>
                        .booking-glass {
                            background: rgba(17, 24, 39, 0.85); /* dark bg */
                            backdrop-filter: blur(16px);
                            -webkit-backdrop-filter: blur(16px);
                            border: 1px solid rgba(139, 92, 246, 0.2);
                            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), inset 0 0 0 1px rgba(255, 255, 255, 0.05);
                        }
                        .calendar-orb {
                            animation: orb-float 8s ease-in-out infinite alternate;
                        }
                        @keyframes orb-float {
                            0% { transform: translate(0, 0) scale(1); }
                            100% { transform: translate(20px, -20px) scale(1.1); }
                        }
                        .date-btn {
                            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                        }
                        .date-btn:not(:disabled):hover {
                            transform: scale(1.1);
                            box-shadow: 0 0 15px rgba(139, 92, 246, 0.5);
                            z-index: 10;
                        }
                        .date-btn.selected {
                            background: linear-gradient(135deg, #7c3aed 0%, #ec4899 100%);
                            color: white;
                            box-shadow: 0 0 20px rgba(139, 92, 246, 0.6);
                            transform: scale(1.1);
                            border: none;
                        }
                        .time-btn {
                            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                            background: rgba(255, 255, 255, 0.03);
                            border: 1px solid rgba(255, 255, 255, 0.1);
                        }
                        .time-btn:hover {
                            background: rgba(139, 92, 246, 0.1);
                            border-color: rgba(139, 92, 246, 0.5);
                            transform: translateY(-2px);
                            box-shadow: 0 5px 15px rgba(139, 92, 246, 0.2);
                        }
                        .time-btn.selected {
                            background: linear-gradient(135deg, #7c3aed 0%, #3b82f6 100%);
                            border-color: transparent;
                            box-shadow: 0 10px 20px rgba(139, 92, 246, 0.4);
                            transform: translateY(-2px);
                        }
                        .custom-input {
                            background: rgba(255, 255, 255, 0.05);
                            border: 1px solid rgba(255, 255, 255, 0.1);
                            color: white;
                            transition: all 0.3s ease;
                        }
                        .custom-input:focus {
                            background: rgba(255, 255, 255, 0.08);
                            border-color: #8b5cf6;
                            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2);
                        }
                        .custom-input::placeholder {
                            color: rgba(255, 255, 255, 0.3);
                        }
                    </style>

                    <!-- Animated Background Orbs -->
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-purple-600/30 rounded-full blur-[60px] calendar-orb pointer-events-none z-0"></div>
                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-pink-600/20 rounded-full blur-[60px] calendar-orb pointer-events-none z-0" style="animation-delay: -4s;"></div>

                    <div class="booking-glass p-8 sm:p-10 rounded-3xl relative z-10 min-h-[550px] overflow-hidden text-white">
                        <div class="flex justify-between items-center mb-10" x-show="step < 4">
                            <div>
                                <h3 class="text-3xl font-black bg-clip-text text-transparent bg-gradient-to-r from-purple-300 to-pink-300">Book a Consultation</h3>
                                <p class="text-gray-400 text-sm mt-1">Schedule a time to discuss your vision</p>
                            </div>
                            <!-- Mini Progress indicator -->
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 rounded-full transition-all duration-500" :class="step >= 1 ? 'bg-purple-500 shadow-[0_0_10px_#8b5cf6] scale-110' : 'bg-gray-600'"></div>
                                <div class="w-10 h-0.5 bg-gray-700 relative overflow-hidden">
                                    <div class="absolute top-0 left-0 h-full bg-purple-500 transition-all duration-500" :style="step > 1 ? 'width: 100%' : 'width: 0%'"></div>
                                </div>
                                <div class="w-3 h-3 rounded-full transition-all duration-500" :class="step >= 2 ? 'bg-purple-500 shadow-[0_0_10px_#8b5cf6] scale-110' : 'bg-gray-600'"></div>
                                <div class="w-10 h-0.5 bg-gray-700 relative overflow-hidden">
                                    <div class="absolute top-0 left-0 h-full bg-purple-500 transition-all duration-500" :style="step > 2 ? 'width: 100%' : 'width: 0%'"></div>
                                </div>
                                <div class="w-3 h-3 rounded-full transition-all duration-500" :class="step >= 3 ? 'bg-purple-500 shadow-[0_0_10px_#8b5cf6] scale-110' : 'bg-gray-600'"></div>
                            </div>
                        </div>

                        <div class="relative w-full h-[400px]">
                            <!-- Step 1: Calendar -->
                            <div x-show="step === 1" 
                                x-transition:enter="transition ease-out duration-500 delay-100" 
                                x-transition:enter-start="opacity-0 translate-x-12 scale-95" 
                                x-transition:enter-end="opacity-100 translate-x-0 scale-100" 
                                x-transition:leave="transition ease-in duration-300 absolute top-0 w-full" 
                                x-transition:leave-start="opacity-100 translate-x-0 scale-100" 
                                x-transition:leave-end="opacity-0 -translate-x-12 scale-95">
                                
                                <div class="bg-gray-800/50 border border-gray-700/50 rounded-2xl p-6 backdrop-blur-sm">
                                    <div class="flex justify-between items-center mb-6">
                                        <button class="p-2 text-gray-400 hover:text-white bg-gray-700/50 hover:bg-purple-600/50 rounded-xl transition-all"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
                                        <span class="font-bold text-lg text-white tracking-wide">May 2026</span>
                                        <button class="p-2 text-gray-400 hover:text-white bg-gray-700/50 hover:bg-purple-600/50 rounded-xl transition-all"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
                                    </div>
                                    <div class="grid grid-cols-7 gap-2 text-center text-xs tracking-widest uppercase mb-4">
                                        <div class="text-gray-500 font-bold">Su</div><div class="text-gray-500 font-bold">Mo</div><div class="text-gray-500 font-bold">Tu</div><div class="text-gray-500 font-bold">We</div><div class="text-gray-500 font-bold">Th</div><div class="text-gray-500 font-bold">Fr</div><div class="text-gray-500 font-bold">Sa</div>
                                    </div>
                                    <div class="grid grid-cols-7 gap-1 text-center">
                                        <div></div><div></div><div></div><div></div><div></div>
                                        <template x-for="day in 31">
                                            <button 
                                                @click="selectDate(day)"
                                                class="date-btn h-10 w-full rounded-xl flex items-center justify-center text-sm font-semibold border"
                                                :class="isPast(day) ? 'text-gray-600 border-transparent cursor-not-allowed' : (selectedDate === day ? 'selected' : 'text-gray-300 border-gray-700 hover:border-purple-500')"
                                                :disabled="isPast(day)"
                                                x-text="day"
                                            ></button>
                                        </template>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Time Slots -->
                            <div x-show="step === 2" style="display: none;" 
                                x-transition:enter="transition ease-out duration-500 delay-100" 
                                x-transition:enter-start="opacity-0 translate-x-12 scale-95" 
                                x-transition:enter-end="opacity-100 translate-x-0 scale-100" 
                                x-transition:leave="transition ease-in duration-300 absolute top-0 w-full" 
                                x-transition:leave-start="opacity-100 translate-x-0 scale-100" 
                                x-transition:leave-end="opacity-0 -translate-x-12 scale-95">
                                
                                <div class="flex items-center mb-8">
                                    <button @click="step = 1" class="mr-4 p-2.5 rounded-full bg-gray-800 hover:bg-purple-600 text-gray-300 hover:text-white transition-all shadow-md group"><svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></button>
                                    <div>
                                        <h4 class="text-xl font-bold text-white">Select a Time</h4>
                                        <p class="text-sm text-purple-300">May <span x-text="selectedDate"></span>, 2026</p>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                                    <template x-for="time in times">
                                        <button 
                                            @click="selectTime(time)"
                                            class="time-btn py-4 px-4 rounded-xl text-sm font-bold text-gray-300"
                                            :class="selectedTime === time ? 'selected text-white' : ''"
                                            x-text="time"
                                        ></button>
                                    </template>
                                </div>
                                
                                <div class="absolute bottom-0 right-0">
                                    <button @click="step = 3" :disabled="!selectedTime" class="bg-gradient-to-r from-purple-600 to-pink-500 text-white px-8 py-3.5 rounded-full font-bold hover:shadow-[0_0_20px_rgba(236,72,153,0.5)] transition-all transform hover:-translate-y-1 disabled:opacity-50 disabled:hover:transform-none disabled:hover:shadow-none flex items-center">
                                        Continue <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 3: Form -->
                            <div x-show="step === 3" style="display: none;" 
                                x-transition:enter="transition ease-out duration-500 delay-100" 
                                x-transition:enter-start="opacity-0 translate-x-12 scale-95" 
                                x-transition:enter-end="opacity-100 translate-x-0 scale-100" 
                                x-transition:leave="transition ease-in duration-300 absolute top-0 w-full" 
                                x-transition:leave-start="opacity-100 translate-x-0 scale-100" 
                                x-transition:leave-end="opacity-0 -translate-x-12 scale-95">
                                
                                <div class="flex items-center mb-6">
                                    <button @click="step = 2" class="mr-4 p-2.5 rounded-full bg-gray-800 hover:bg-purple-600 text-gray-300 hover:text-white transition-all shadow-md group"><svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></button>
                                    <div>
                                        <h4 class="text-xl font-bold text-white">Your Details</h4>
                                        <div class="flex items-center text-sm text-purple-300 mt-1">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            May <span x-text="selectedDate" class="ml-1"></span> at <span x-text="selectedTime" class="ml-1"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <form @submit.prevent="submitBooking" class="space-y-4">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <input type="text" required x-model="form.first_name" class="custom-input w-full rounded-xl py-3 px-4 outline-none text-sm font-medium" placeholder="First Name">
                                        </div>
                                        <div>
                                            <input type="text" required x-model="form.last_name" class="custom-input w-full rounded-xl py-3 px-4 outline-none text-sm font-medium" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <input type="email" required x-model="form.email" class="custom-input w-full rounded-xl py-3 px-4 outline-none text-sm font-medium" placeholder="Email Address">
                                        </div>
                                        <div>
                                            <input type="text" x-model="form.company" class="custom-input w-full rounded-xl py-3 px-4 outline-none text-sm font-medium" placeholder="Company (Optional)">
                                        </div>
                                    </div>
                                    <div>
                                        <textarea rows="2" required x-model="form.message" class="custom-input w-full rounded-xl py-3 px-4 outline-none text-sm font-medium resize-none" placeholder="Briefly describe what you'd like to discuss..."></textarea>
                                    </div>
                                    <div x-show="errorMessage" x-cloak style="display:none;" class="text-sm text-pink-300 bg-pink-900/30 border border-pink-700/50 rounded-xl px-4 py-2" x-text="errorMessage"></div>
                                    <div class="pt-2 flex justify-end">
                                        <button type="submit" class="bg-gradient-to-r from-purple-600 to-pink-500 text-white px-10 py-3.5 rounded-full font-bold hover:shadow-[0_0_25px_rgba(236,72,153,0.6)] transition-all transform hover:-translate-y-1 flex items-center relative overflow-hidden group">
                                            <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out"></div>
                                            <span x-show="!loading" class="relative z-10 flex items-center">Confirm Booking <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></span>
                                            <svg x-show="loading" class="animate-spin h-5 w-5 text-white relative z-10" style="display: none;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Step 4: Success -->
                            <div x-show="step === 4" style="display: none;" 
                                x-transition:enter="transition ease-out duration-700 delay-200" 
                                x-transition:enter-start="opacity-0 scale-50 rotate-[-10deg]" 
                                x-transition:enter-end="opacity-100 scale-100 rotate-0" 
                                class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                
                                <div class="relative mb-8">
                                    <div class="absolute inset-0 bg-pink-500 rounded-full blur-[30px] opacity-50 animate-pulse"></div>
                                    <div class="w-24 h-24 bg-gradient-to-tr from-purple-600 to-pink-500 rounded-full flex items-center justify-center relative z-10 shadow-2xl">
                                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                </div>
                                
                                <h3 class="text-3xl font-black text-white mb-3">Booking Confirmed!</h3>
                                <p class="text-purple-200 mb-2 text-lg">We're looking forward to meeting you on</p>
                                <div class="inline-block px-6 py-2 bg-white/10 border border-white/20 rounded-full backdrop-blur-md mb-8">
                                    <span class="font-bold text-white tracking-wide">May <span x-text="selectedDate"></span>, 2026 at <span x-text="selectedTime"></span></span>
                                </div>
                                <p class="text-sm text-gray-400 mb-8 max-w-sm">We've sent a calendar invitation and confirmation to your email address.</p>
                                
                                <button @click="step = 1; selectedDate = null; selectedTime = null" class="text-purple-400 font-bold hover:text-white transition-colors border-b border-transparent hover:border-white pb-0.5 group flex items-center">
                                    <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                                    Book another session
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
<script>
    // Alpine.js Booking Logic
    document.addEventListener('alpine:init', () => {
        Alpine.data('bookingApp', () => ({
            step: 1,
            selectedDate: null,
            selectedTime: null,
            loading: false,
            errorMessage: '',
            form: { first_name: '', last_name: '', email: '', company: '', message: '' },
            times: ['09:00 AM', '10:00 AM', '11:30 AM', '01:00 PM', '02:30 PM', '04:00 PM'],

            isPast(day) {
                const today = new Date();
                const todayStart = new Date(today.getFullYear(), today.getMonth(), today.getDate());
                const cellDate = new Date(2026, 4, day); // May 2026 (month is 0-indexed)
                return cellDate <= todayStart;
            },

            selectDate(day) {
                if (this.isPast(day)) return;
                this.selectedDate = day;
                this.step = 2;
            },

            selectTime(time) {
                this.selectedTime = time;
            },

            async submitBooking() {
                this.loading = true;
                this.errorMessage = '';
                try {
                    const res = await fetch('{{ route('booking.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({
                            first_name: this.form.first_name,
                            last_name: this.form.last_name,
                            email: this.form.email,
                            company: this.form.company,
                            date: String(this.selectedDate),
                            time: this.selectedTime,
                            message: this.form.message,
                        }),
                    });
                    const data = await res.json().catch(() => ({}));
                    if (!res.ok || data.success === false) {
                        const firstError = data.errors ? Object.values(data.errors)[0][0] : (data.message || 'Submission failed. Please try again.');
                        this.errorMessage = firstError;
                        return;
                    }
                    this.step = 4;
                    this.form = { first_name: '', last_name: '', email: '', company: '', message: '' };
                } catch (e) {
                    this.errorMessage = 'Network error. Please try again.';
                } finally {
                    this.loading = false;
                }
            }
        }))
    })
</script>
@endpush
