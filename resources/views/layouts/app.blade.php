<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Epilepsy awareness and education to promote understanding and societal acceptance">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Epilepsy Awareness'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/epilepsy.css'])
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <!-- Accessibility considerations for epilepsy -->
    <style>
        :root {
            --animation-duration: 0.3s;
        }
        * {
            transition: background-color var(--animation-duration) ease, color var(--animation-duration) ease;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen">
        <nav class="bg-gradient-to-r from-indigo-500 to-purple-600 shadow-lg sticky-nav">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="font-bold text-xl text-white">Epilepsy<span class="text-yellow-300">Awareness</span></span>
                    </div>
                    <div class="hidden md:flex space-x-8">
                    <div class="relative group ">
                        <a href="/" class="text-white hover:text-yellow-300 font-medium transition duration-200 flex items-center">
                            Home
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-0 w-48 z-10 top-full">
                            <a href="#facts" class="block px-4 py-2 text-gray-800 hover:bg-yellow-300 hover:text-purple-800 transition duration-200">Facts</a>
                            <a href="#first-aid" class="block px-4 py-2 text-gray-800 hover:bg-yellow-300 hover:text-purple-800 transition duration-200">First Aid</a>
                            <a href="#stories" class="block px-4 py-2 text-gray-800 hover:bg-yellow-300 hover:text-purple-800 transition duration-200">Stories</a>
                            <a href="#resources" class="block px-4 py-2 text-gray-800 hover:bg-yellow-300 hover:text-purple-800 transition duration-200">Resources</a>
                        </div>
                    </div>
                        <a href="/about" class="text-white hover:text-yellow-300 font-medium transition duration-200">About Us</a>
                        <a href="/mission" class="text-white hover:text-yellow-300 font-medium transition duration-200">Our Mission</a>
                        <a href="/contact" class="text-white hover:text-yellow-300 font-medium transition duration-200">Contact Us</a>
                    </div>
                    <div class="hidden md:flex space-x-4">
                        <a href="/donations" class="bg-yellow-400 hover:bg-yellow-300 text-purple-800 px-6 py-2 rounded-full font-medium hover:shadow-lg transition duration-300 transform hover:scale-105">Donate</a>
                    </div>
                    <button class="md:hidden focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
<!-- Footer -->
<footer class="bg-gray-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="font-bold text-xl ml-2">Epilepsy<span class="text-purple-400">Awareness</span></span>
                    </div>
                    <p class="text-gray-400">Promoting understanding and societal acceptance of epilepsy through education and advocacy.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#facts" class="text-gray-400 hover:text-white transition duration-300">Epilepsy Facts</a></li>
                        <li><a href="#first-aid" class="text-gray-400 hover:text-white transition duration-300">First Aid</a></li>
                        <li><a href="#stories" class="text-gray-400 hover:text-white transition duration-300">Personal Stories</a></li>
                        <li><a href="#resources" class="text-gray-400 hover:text-white transition duration-300">Resources</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Organization</h4>
                    <ul class="space-y-2">
                        <li><a href="/about" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
                        <li><a href="/mission" class="text-gray-400 hover:text-white transition duration-300">Our Mission</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition duration-300">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.708.87 3.215 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/>
                            </svg>
                            Twitter
                        </a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                            </svg>
                            Instagram
                        </a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                            </svg>
                            LinkedIn
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 text-center">
                <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} EpilepsyAware. All rights reserved.</p>
            </div>
        </div>
    </footer>
</html>