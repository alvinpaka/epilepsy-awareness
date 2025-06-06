@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-slate-50 via-white to-indigo-50 overflow-hidden">
    <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))] -z-10"></div>
    <div class="container mx-auto px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
                Our Story
            </div>
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                About <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Us</span>
            </h1>
            <div class="w-32 h-1.5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 mx-auto rounded-full mb-8"></div>
            <p class="text-xl lg:text-2xl text-slate-600 max-w-3xl mx-auto leading-relaxed font-light">
                Discover the journey that led us to become a leading voice in 
                <span class="font-semibold text-indigo-700">epilepsy awareness</span> and 
                <span class="font-semibold text-purple-700">community support</span>.
            </p>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 rounded-2xl border border-indigo-100 shadow-xl shadow-indigo-100/50 p-10 lg:p-12 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-full -translate-y-16 translate-x-16 opacity-60"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-purple-100 to-pink-100 rounded-full translate-y-12 -translate-x-12 opacity-60"></div>
                
                <div class="relative">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-slate-900">Our Story</h2>
                    </div>
                    
                    <div class="space-y-6 text-lg text-slate-700 leading-relaxed">
                        <p class="font-medium text-xl text-slate-800">
                            Founded in 2023, Epilepsy Awareness Initiative was born out of a shared vision to create 
                            a more informed and supportive community for individuals and families affected by epilepsy.
                        </p>
                        <p>
                            What began as a small support group has grown into a comprehensive platform dedicated to 
                            education, advocacy, and community support for those impacted by epilepsy. Our journey 
                            represents the power of collective action and shared determination.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-indigo-50">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">Our Impact</h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    Measuring our commitment through meaningful outcomes and community engagement
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- People Reached -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 text-center border border-slate-100 hover:border-indigo-200 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="text-5xl font-bold text-indigo-600 mb-3">1M+</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">People Reached</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Through our awareness campaigns and educational programs across multiple platforms
                    </p>
                </div>

                <!-- Communities -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 text-center border border-slate-100 hover:border-purple-200 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <div class="text-5xl font-bold text-purple-600 mb-3">50+</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Communities</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Actively engaged in our support network, creating lasting connections
                    </p>
                </div>

                <!-- Dedication -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 text-center border border-slate-100 hover:border-indigo-200 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <div class="text-5xl font-bold text-indigo-600 mb-3">100%</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Dedicated</h3>
                    <p class="text-slate-600 leading-relaxed">
                        To making a meaningful difference in the lives of those affected by epilepsy
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">Our Approach</h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    A comprehensive strategy built on three foundational pillars of change
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-50 via-white to-indigo-50 rounded-2xl border border-slate-100 shadow-xl shadow-slate-100/50 p-10 lg:p-12 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-full -translate-y-20 translate-x-20 opacity-40"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-tr from-purple-100 to-pink-100 rounded-full translate-y-16 -translate-x-16 opacity-40"></div>
                
                <div class="relative space-y-10">
                    <!-- Education -->
                    <div class="flex items-start group">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">Education First</h3>
                            <p class="text-lg text-slate-700 leading-relaxed">
                                Providing accurate, up-to-date information about epilepsy to dispel myths and misconceptions. 
                                We believe that knowledge is the foundation of understanding and acceptance.
                            </p>
                        </div>
                    </div>

                    <!-- Community -->
                    <div class="flex items-start group">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">Community Connection</h3>
                            <p class="text-lg text-slate-700 leading-relaxed">
                                Building a supportive network where individuals and families can share experiences and find support. 
                                Together, we create spaces for healing, growth, and mutual understanding.
                            </p>
                        </div>
                    </div>

                    <!-- Advocacy -->
                    <div class="flex items-start group">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">Strategic Advocacy</h3>
                            <p class="text-lg text-slate-700 leading-relaxed">
                                Working to improve policies and increase funding for epilepsy research and support services. 
                                We amplify voices and drive systemic change for lasting impact.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-indigo-50">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 rounded-3xl p-12 lg:p-16 text-white overflow-hidden">
                <div class="absolute inset-0 bg-black opacity-10 rounded-3xl"></div>
                <div class="absolute top-0 right-0 w-40 h-40 bg-white opacity-10 rounded-full -translate-y-20 translate-x-20"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-white opacity-10 rounded-full translate-y-16 -translate-x-16"></div>
                
                <div class="relative text-center">
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6">Ready to Make a Difference?</h2>
                    <p class="text-xl lg:text-2xl mb-8 opacity-90 max-w-2xl mx-auto leading-relaxed">
                        Join our growing community of advocates, supporters, and changemakers who are 
                        transforming the epilepsy landscape one story at a time.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="{{ route('contact') }}" class="group inline-flex items-center bg-white text-indigo-700 px-8 py-4 rounded-full font-semibold text-lg hover:bg-indigo-50 hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                            Join Our Community
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex items-center text-white border-2 border-white/30 px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/10 hover:border-white/50 transition-all duration-300">
                            Our Programs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection