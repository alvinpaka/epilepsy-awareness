@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
    
    body {
        font-family: 'Inter', sans-serif;
    }
    
    .gradient-bg {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .glass-effect {
        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.18);
    }
    
    .card-hover {
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    
    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }
    
    .floating {
        animation: floating 3s ease-in-out infinite;
    }
    
    @keyframes floating {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .pulse-glow {
        animation: pulse-glow 2s infinite;
    }
    
    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(102, 126, 234, 0.4); }
        50% { box-shadow: 0 0 30px rgba(102, 126, 234, 0.7); }
    }
    
    .text-shimmer {
        background: linear-gradient(45deg, #667eea, #764ba2, #667eea);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: shimmer 3s ease-in-out infinite;
    }
    
    @keyframes shimmer {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    .form-input {
        transition: all 0.3s ease;
    }
    
    .form-input:focus {
        transform: scale(1.02);
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }
    
    .contact-icon {
        transition: all 0.3s ease;
    }
    
    .contact-icon:hover {
        transform: rotate(5deg) scale(1.1);
    }
    
    .social-icon {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .social-icon::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }
    
    .social-icon:hover::before {
        left: 100%;
    }
    
    .hero-pattern {
        background-image: radial-gradient(circle at 25px 25px, rgba(255,255,255,0.1) 2px, transparent 0);
        background-size: 50px 50px;
    }
    
    .typing-animation {
        border-right: 2px solid #667eea;
        animation: typing 3.5s steps(40, end), blink 0.75s step-end infinite;
    }
    
    @keyframes typing {
        from { width: 0; }
        to { width: 100%; }
    }
    
    @keyframes blink {
        from, to { border-color: transparent; }
        50% { border-color: #667eea; }
    }
</style>

<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-slate-50 via-white to-indigo-50 overflow-hidden">
    <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))] -z-10"></div>
    <div class="container mx-auto px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                We're Here to Help
            </div>
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                Get In <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Touch</span>
            </h1>
            <div class="w-32 h-1.5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 mx-auto rounded-full mb-8"></div>
            <p class="text-xl lg:text-2xl text-slate-600 max-w-3xl mx-auto leading-relaxed font-light">
                Have questions about epilepsy awareness?
                <span class="font-semibold text-indigo-700">Need support? </span>, 
                <span class="font-semibold text-pink-700">Want to join our mission?</span>.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-4">
                <a href="#" class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    24/7 Support Available
                </a>
                <a href="#" class="px-8 py-3 bg-white hover:bg-gray-100 text-gray-800 font-medium border border-gray-300 rounded-lg transition-colors duration-200 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Quick Response Time
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="relative">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Contact Methods Grid -->
            <div class="grid lg:grid-cols-3 gap-8 mb-20">
                <!-- Email Card -->
                <div class="bg-white rounded-3xl shadow-xl p-8 card-hover border border-gray-100">
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl mb-6 contact-icon pulse-glow">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Email Us</h3>
                        <p class="text-gray-600 mb-6">Send us a message anytime. We typically respond within 2 hours during business days.</p>
                        <div class="space-y-3">
                            <a href="mailto:info@epilepsyawareness.org" class="block bg-gradient-to-r from-blue-50 to-purple-50 hover:from-blue-100 hover:to-purple-100 px-4 py-3 rounded-xl text-blue-600 font-semibold transition-all duration-300">
                                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                info@epilepsyawareness.org
                            </a>
                            <a href="mailto:support@epilepsyawareness.org" class="block bg-gradient-to-r from-blue-50 to-purple-50 hover:from-blue-100 hover:to-purple-100 px-4 py-3 rounded-xl text-blue-600 font-semibold transition-all duration-300">
                                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                </svg>
                                support@epilepsyawareness.org
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="bg-white rounded-3xl shadow-xl p-8 card-hover border border-gray-100">
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl mb-6 contact-icon pulse-glow">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Call Us</h3>
                        <p class="text-gray-600 mb-6">Speak directly with our support team. Immediate assistance available.</p>
                        <div class="space-y-3">
                            <a href="tel:+18005553745379" class="block bg-gradient-to-r from-green-50 to-teal-50 hover:from-green-100 hover:to-teal-100 px-4 py-3 rounded-xl text-green-600 font-bold text-lg transition-all duration-300">
                                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"></path>
                                </svg>
                                +1 (800) 555-EPILEPSY
                            </a>
                            <div class="text-sm text-gray-500 bg-gray-50 px-4 py-2 rounded-lg">
                                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                                Mon - Fri: 9:00 AM - 6:00 PM EST
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Card -->
                <div class="bg-white rounded-3xl shadow-xl p-8 card-hover border border-gray-100">
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-pink-500 to-red-600 rounded-2xl mb-6 contact-icon pulse-glow">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Visit Us</h3>
                        <p class="text-gray-600 mb-6">Come see us in person. Our doors are always open to the community.</p>
                        <div class="bg-gradient-to-r from-pink-50 to-red-50 px-4 py-4 rounded-xl">
                            <div class="text-pink-600 font-semibold">
                                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-6a1 1 0 00-1-1H9a1 1 0 00-1 1v6a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
                                </svg>
                                1234 Epilepsy Awareness Way
                            </div>
                            <div class="text-pink-600 font-semibold">
                                Boston, MA 02118, USA
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Contact Section -->
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Contact Form -->
                <div class="bg-white rounded-3xl shadow-2xl p-10 card-hover border border-gray-100">
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">Send a Message</h2>
                        <p class="text-gray-600">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                    </div>
                    
                    <form action=" " method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-sm font-bold text-gray-700 mb-3">
                                    <svg class="w-4 h-4 inline mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    First Name*
                                </label>
                                <input type="text" id="first-name" name="first_name" required 
                                    class="form-input w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium">
                                @error('first_name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-bold text-gray-700 mb-3">
                                    <svg class="w-4 h-4 inline mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    Last Name*
                                </label>
                                <input type="text" id="last-name" name="last_name" required 
                                    class="form-input w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium">
                                @error('last_name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-bold text-gray-700 mb-3">
                                <svg class="w-4 h-4 inline mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Email Address*
                            </label>
                            <input type="email" id="email" name="email" required 
                                class="form-input w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-bold text-gray-700 mb-3">
                                <svg class="w-4 h-4 inline mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                </svg>
                                Subject*
                            </label>
                            <select id="subject" name="subject" required 
                                class="form-input w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium">
                                <option value="" disabled selected>Choose your topic...</option>
                                <option value="general">💬 General Inquiry</option>
                                <option value="support">🆘 Support Request</option>
                                <option value="partnership">🤝 Partnership Opportunity</option>
                                <option value="volunteer">🙋‍♀️ Volunteer Inquiry</option>
                                <option value="donation">💝 Donation Question</option>
                                <option value="medical">🏥 Medical Information</option>
                            </select>
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-bold text-gray-700 mb-3">
                                <svg class="w-4 h-4 inline mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                Your Message*
                            </label>
                            <textarea id="message" name="message" rows="5" required 
                                placeholder="Tell us how we can help you..."
                                class="form-input w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-gray-800 font-medium resize-none"></textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="pt-4">
                            <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white px-8 py-5 rounded-2xl font-bold text-lg hover:from-blue-700 hover:via-purple-700 hover:to-pink-700 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105 pulse-glow">
                                <svg class="w-5 h-5 inline mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                Send Message
                                <svg class="w-5 h-5 inline ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Additional Information -->
                <div class="space-y-8">
                    <!-- Office Hours -->
                    <div class="bg-white rounded-3xl shadow-xl p-8 card-hover border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg class="w-6 h-6 text-blue-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                            Office Hours
                        </h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="font-semibold text-gray-700">Monday - Friday</span>
                                <span class="text-blue-600 font-bold">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="font-semibold text-gray-700">Saturday</span>
                                <span class="text-blue-600 font-bold">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="font-semibold text-gray-700">Sunday</span>
                                <span class="text-gray-400 font-bold">Closed</span>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-gradient-to-r from-green-50 to-blue-50 rounded-xl">
                            <p class="text-sm text-green-700 font-semibold">
                                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"></path>
                                </svg>
                                Emergency support available 24/7
                            </p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-white rounded-3xl shadow-xl p-8 card-hover border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg class="w-6 h-6 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Connect With Us
                        </h3>
                        <p class="text-gray-600 mb-6">Follow us on social media for updates, resources, and community events.</p>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="https://facebook.com/epilepsyawareness" target="_blank" class="social-icon bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 px-4 py-3 rounded-xl text-blue-600 font-semibold flex items-center transition-all duration-300">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                Facebook
                            </a>
                            <a href="https://twitter.com/epilepsyaware" target="_blank" class="social-icon bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 px-4 py-3 rounded-xl text-blue-600 font-semibold flex items-center transition-all duration-300">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23.643 4.937c-.835.37-1.732.62-2.675.733a4.67 4.67 0 002.048-2.578 9.3 9.3 0 01-2.958 1.13 4.66 4.66 0 00-7.938 4.25 13.229 13.229 0 01-9.602-4.868c-.4.69-.632 1.485-.632 2.351a4.66 4.66 0 002.075 3.879 4.645 4.645 0 01-2.11-.583v.06a4.66 4.66 0 003.737 4.568 4.692 4.692 0 01-2.104.08 4.661 4.661 0 004.352 3.234 9.348 9.348 0 01-5.786 1.995 9.5 9.5 0 01-1.112-.065 13.175 13.175 0 007.14 2.093c8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.401-.014-.602a9.47 9.47 0 002.323-2.41l.002-.003z"/>
                                </svg>
                                Twitter
                            </a>
                            <a href="https://instagram.com/epilepsyawareness" target="_blank" class="social-icon bg-gradient-to-r from-pink-50 to-purple-50 hover:from-pink-100 hover:to-purple-100 px-4 py-3 rounded-xl text-pink-600 font-semibold flex items-center transition-all duration-300">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.332.014 7.052.072 3.78.227 1.668 1.332.537 4.052.014 5.332 0 5.741 0 12c0 6.259.014 6.668.072 7.948.228 3.263 1.333 5.382 4.053 6.513.946.466 2.042.714 3.947.714 6.258 0 6.668-.014 7.948-.072 3.263-.228 5.382-1.333 6.513-4.053.466-.946.714-2.042.714-3.947 0-6.258-.014-6.668-.072-7.948-.228-3.263-1.333-5.382-4.053-6.513C16.668.014 16.258 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100-2.88 1.44 1.44 0 000 2.88z"/>
                                </svg>
                                Instagram
                            </a>
                            <a href="https://linkedin.com/company/epilepsyawareness" target="_blank" class="social-icon bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 px-4 py-3 rounded-xl text-blue-600 font-semibold flex items-center transition-all duration-300">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.327-.024-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.048c.476-.9 1.637-1.852 3.37-1.852 3.601 0 4.267 2.37 4.267 5.455v6.288zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection