@extends('layouts.app')

@section('title', 'Epilepsy Awareness - Understanding and Acceptance')

@section('content')
@if(session('success'))
    <div id="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    <script src="{{ $scriptUrl }}"></script>
@endif

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50">
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 text-white overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-10 left-10 w-20 h-20 bg-white rounded-full animate-pulse"></div>
            <div class="absolute top-32 right-20 w-16 h-16 bg-white rounded-full animate-bounce"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white rounded-full animate-ping"></div>
            <div class="absolute bottom-32 right-1/3 w-24 h-24 bg-white rounded-full animate-pulse"></div>
        </div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent animate-fadeIn">
                    Understanding Epilepsy Together
                </h1>
                <p class="text-xl md:text-2xl mb-10 text-gray-100 max-w-3xl mx-auto leading-relaxed">
                    Epilepsy impacts millions globally, yet myths persist. Join us to learn the facts, support inclusion, and foster a compassionate community.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                    <a href="#facts" class="group bg-white text-indigo-700 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                        <span class="flex items-center">
                            Discover the Facts
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </a>
                    <a href="#first-aid" class="group bg-transparent border-2 border-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-indigo-700 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            First Aid Guide
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white relative">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-indigo-50 to-indigo-100 transform hover:scale-105 transition-all duration-300">
                    <div class="text-5xl font-bold text-indigo-600 mb-3 animate-pulse">50M</div>
                    <div class="text-gray-700 font-medium">People worldwide with epilepsy</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-purple-50 to-purple-100 transform hover:scale-105 transition-all duration-300">
                    <div class="text-5xl font-bold text-purple-600 mb-3 animate-pulse">1 in 26</div>
                    <div class="text-gray-700 font-medium">Will develop epilepsy in their lifetime</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-green-50 to-green-100 transform hover:scale-105 transition-all duration-300">
                    <div class="text-5xl font-bold text-green-600 mb-3 animate-pulse">70%</div>
                    <div class="text-gray-700 font-medium">Could live seizure-free with proper treatment</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-red-50 to-red-100 transform hover:scale-105 transition-all duration-300">
                    <div class="text-5xl font-bold text-red-600 mb-3 animate-pulse">3x</div>
                    <div class="text-gray-700 font-medium">Higher risk of premature death</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facts Section -->
    <section id="facts" class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block bg-indigo-100 text-indigo-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">EDUCATION</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Key Facts About Epilepsy</h2>
                <div class="w-32 h-2 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($facts as $index => $fact)
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-l-4 border-indigo-500">
                    <div class="flex items-start mb-6">
                        <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full p-4 mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-indigo-700 mb-2">Fact #{{ $index + 1 }}</h3>
                            <div class="w-12 h-1 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-full"></div>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">{{ $fact }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- First Aid Section -->
    <section id="first-aid" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">EMERGENCY RESPONSE</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Seizure First Aid</h2>
                <div class="w-32 h-2 bg-gradient-to-r from-red-500 to-pink-500 mx-auto rounded-full"></div>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <div class="bg-gradient-to-r from-red-500 to-pink-500 p-1 rounded-3xl shadow-2xl">
                    <div class="bg-white p-10 rounded-3xl">
                        <!-- Emergency Alert -->
                        <div class="bg-gradient-to-r from-red-50 to-pink-50 border-l-4 border-red-500 p-6 rounded-lg mb-8">
                            <div class="flex items-center">
                                <div class="bg-red-500 p-2 rounded-full mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-red-800 mb-1">Emergency Alert</h3>
                                    <p class="text-red-700">If a seizure lasts more than 5 minutes, or if the person has difficulty breathing afterwards, call emergency services immediately.</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <div>
                                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="First Aid" class="rounded-2xl shadow-lg w-full h-64 object-cover">
                            </div>
                            <div class="flex flex-col justify-center">
                                <h3 class="text-3xl font-bold text-gray-800 mb-4">What to Do During a Seizure</h3>
                                <p class="text-gray-600 text-lg leading-relaxed">Knowing how to respond can make a life-saving difference. Follow these essential steps to help someone during a seizure.</p>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            @foreach($firstAid as $item)
                            <div class="flex items-start bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-xl border-l-4 border-green-500 hover:shadow-lg transition-shadow duration-300">
                                <div class="bg-green-500 p-2 rounded-full mr-4 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span class="text-gray-800 font-medium">{{ $item }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Myths vs Facts Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-indigo-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">FACT CHECK</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Myths vs. Facts</h2>
                <div class="w-32 h-2 bg-gradient-to-r from-yellow-500 to-orange-500 mx-auto rounded-full"></div>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                    <div class="grid md:grid-cols-2">
                        <!-- Myths Column -->
                        <div class="p-8 bg-gray-50">
                            <h3 class="text-2xl font-bold text-red-600 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                                Common Myths
                            </h3>
                            <ul class="space-y-4">
                                @foreach($myths as $myth)
                                <li class="flex items-start">
                                    <span class="bg-red-100 text-red-600 p-1 rounded-full mr-3 mt-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">{{ $myth }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- Facts Column -->
                        <div class="p-8 bg-white">
                            <h3 class="text-2xl font-bold text-green-600 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                The Facts
                            </h3>
                            <ul class="space-y-4">
                                @foreach($facts as $key => $fact)
                                <li class="flex items-start">
                                    <span class="bg-green-100 text-green-600 p-1 rounded-full mr-3 mt-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">{{ $fact }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Personal Stories Section -->
    <section id="stories" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">COMMUNITY</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Personal Stories</h2>
                <div class="w-32 h-2 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto mt-6">Real experiences from people living with epilepsy and their loved ones</p>
            </div>
            
            @if($stories->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-12">
                    @foreach($stories as $story)
                        <div class="group bg-gradient-to-br from-white to-gray-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-l-4 {{ $loop->index % 2 === 0 ? 'border-indigo-500' : 'border-purple-500' }}">
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="font-bold text-lg text-gray-800">{{ $story->name }}</h3>
                                    <div class="w-8 h-8 bg-gradient-to-br {{ $loop->index % 2 === 0 ? 'from-indigo-400 to-indigo-600' : 'from-purple-400 to-purple-600' }} rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-600 text-sm font-medium mb-3">{{ $story->subject }}</p>
                            </div>
                            
                            <div class="text-sm text-gray-700 leading-relaxed mb-4">
                                <p class="line-clamp-3">"{{ $story->story }}"</p>
                            </div>
                            
                            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                <div class="flex items-center text-xs text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ $story->created_at->diffForHumans() }}
                                </div>
                                <button class="text-indigo-600 hover:text-indigo-800 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16 bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl">
                    <div class="max-w-md mx-auto">
                        <div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-4 rounded-full w-20 h-20 mx-auto mb-6">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">No Stories Yet</h3>
                        <p class="text-gray-600">Be the first to share your story and inspire others!</p>
                    </div>
                </div>
            @endif
            
            <div class="text-center mt-12">
                <button onclick="openModal()" class="group bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-4 rounded-full font-semibold hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-2xl">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Share Your Story
                    </span>
                </button>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section id="resources" class="py-20 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">RESOURCES</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Educational Resources</h2>
                <div class="w-32 h-2 bg-gradient-to-r from-blue-500 to-indigo-500 mx-auto rounded-full"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto mt-6">Downloadable materials to help spread awareness</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Fact Sheets Card -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl p-6 inline-flex mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Fact Sheets</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Printable information about epilepsy for schools and workplaces</p>
                    <a href="#" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors group">
                        Download PDF
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-y-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                </div>
            
                <!-- Educational Videos Card -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl p-6 inline-flex mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18l15-9L5 3z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Educational Videos</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Visual guides to understanding epilepsy and seizure first aid</p>
                    <a href="#" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-800 transition-colors group">
                        Watch Videos
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-y-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18l15-9L5 3z" />
                        </svg>
                    </a>
                </div>
            
                <!-- Toolkits Card -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl p-6 inline-flex mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Toolkits</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Complete awareness packages for organizations and events</p>
                    <a href="#" class="inline-flex items-center text-green-600 font-semibold hover:text-green-800 transition-colors group">
                        Download Toolkit
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-y-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold mb-8">Join the Movement for Epilepsy Awareness</h2>
                <p class="text-xl text-indigo-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                    Together, we can break down barriers, dispel myths, and create a more inclusive world for people with epilepsy.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                    <a href="/contact" class="group bg-white text-indigo-700 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                        <span class="flex items-center">
                            Get Involved
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </a>
                    <a href="/donations" class="group bg-transparent border-2 border-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-indigo-700 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                        <span class="flex items-center">
                            Donate Now
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Share Story Modal -->
    <div id="storyModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 opacity-0 invisible transition-all duration-300">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto transform translate-y-10 transition-all duration-300">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-bold text-gray-800">Share Your Story</h3>
                    <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <p class="text-gray-600 mt-2">Your experience can inspire and educate others</p>
            </div>
            
            <form action="{{ route('stories.store') }}" method="POST" class="p-6">
                @csrf
                <div class="space-y-6">
                    <div class="mb-4 flex flex-wrap gap-4">
                        <div class="flex-1 min-w-[200px]">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                        </div>
                        <div class="flex-1 min-w-[200px]">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                            <input type="hidden" name="country_code" id="country-code">
                            <div id="phone-error" class="hidden mt-1">
                                <p class="text-sm text-red-600">Please enter a valid phone number</p>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">Example: +256 700 123456</p>
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
                    
                    <div>
                        <label for="story" class="block text-sm font-medium text-gray-700 mb-1">Your Story</label>
                        <textarea id="story" name="story" rows="3" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
                    </div>
                    
                    <div class="flex items-center">
                        <input id="consent" name="consent" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" required>
                        <label for="consent" class="ml-2 block text-sm text-gray-700">
                            I consent to having my story shared publicly on this platform
                        </label>
                    </div>
                </div>
                
                <div class="mt-8">
                    <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-4 rounded-lg font-semibold hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                        Share Your Story
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="{{ asset('js/story.js') }}"></script>