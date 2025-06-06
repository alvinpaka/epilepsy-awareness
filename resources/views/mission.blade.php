@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-slate-50 via-white to-indigo-50 overflow-hidden">
    <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))] -z-10"></div>
    <div class="container mx-auto px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Our Commitment
            </div>
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                Our <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Mission</span>
            </h1>
            <div class="w-32 h-1.5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 mx-auto rounded-full mb-8"></div>
            <p class="text-xl lg:text-2xl text-slate-600 max-w-3xl mx-auto leading-relaxed font-light">
                Empowering individuals and families affected by epilepsy through 
                <span class="font-semibold text-indigo-700">education</span>, 
                <span class="font-semibold text-purple-700">support</span>, and 
                <span class="font-semibold text-pink-700">advocacy</span>.
            </p>
        </div>
    </div>
</section>

<!-- Vision Section -->
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-slate-900">Our Vision</h2>
                    </div>
                    
                    <div class="space-y-6 text-lg text-slate-700 leading-relaxed">
                        <p class="font-medium text-xl text-slate-800">
                            We envision a world where every person living with epilepsy has access to the resources, 
                            support, and understanding they need to thrive.
                        </p>
                        <p>
                            A world where epilepsy is widely understood, where stigma is eliminated, and where 
                            everyone affected by epilepsy can live their lives to the fullest potential.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-indigo-50">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">Core Values</h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    The pillars that guide our work and define our commitment to the epilepsy community
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Awareness Card -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-slate-100 hover:border-indigo-200 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Awareness</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        Raising public awareness and understanding of epilepsy to eliminate stigma and 
                        promote acceptance and inclusion in all aspects of society.
                    </p>
                </div>

                <!-- Education Card -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-slate-100 hover:border-purple-200 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Education</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        Providing comprehensive, evidence-based information about epilepsy, its management, 
                        and available resources to empower informed decisions.
                    </p>
                </div>

                <!-- Support Card -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-slate-100 hover:border-indigo-200 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Support</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        Creating a supportive community where individuals and families affected by epilepsy 
                        can connect, share experiences, and find strength together.
                    </p>
                </div>

                <!-- Advocacy Card -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-slate-100 hover:border-purple-200 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Advocacy</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        Advocating for policies and resources that improve lives, advance research, 
                        and work toward better treatments and ultimately, a cure.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 rounded-3xl p-12 lg:p-16 text-white overflow-hidden">
                <div class="absolute inset-0 bg-black opacity-10 rounded-3xl"></div>
                <div class="absolute top-0 right-0 w-40 h-40 bg-white opacity-10 rounded-full -translate-y-20 translate-x-20"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-white opacity-10 rounded-full translate-y-16 -translate-x-16"></div>
                
                <div class="relative text-center">
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6">Join Our Cause</h2>
                    <p class="text-xl lg:text-2xl mb-8 opacity-90 max-w-2xl mx-auto leading-relaxed">
                        Together, we can make a meaningful difference in the lives of millions affected by epilepsy. 
                        Join us in our mission to create a brighter future for the epilepsy community.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="{{ route('contact') }}" class="group inline-flex items-center bg-white text-indigo-700 px-8 py-4 rounded-full font-semibold text-lg hover:bg-indigo-50 hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                            Get Involved
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex items-center text-white border-2 border-white/30 px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/10 hover:border-white/50 transition-all duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection