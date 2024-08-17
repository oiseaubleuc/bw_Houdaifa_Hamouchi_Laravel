<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="{{ url('/') }}">
                            <img class="h-16 w-16 rounded-full" src="{{ asset('images/logo.svg') }}" alt="Your Company">
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            @auth
                                @if(auth()->user()->is_admin)
                                    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                                @endif
                            @endauth

                            <x-nav-link href="/about" :active="request()->is('about')">Over Ons</x-nav-link>
                            <x-nav-link href="/faq" :active="request()->is('faq')">FAQ</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                            <x-nav-link href="/news" :active="request()->is('news')">Laatste Nieuws</x-nav-link>
                        </div>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    <!-- Localization Dropdown -->
                    <div class="relative">
                        <button class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="languageMenuButton" aria-expanded="false" aria-haspopup="true">
                            <img src="{{ asset('images/' . App::getLocale() . '-flag.png') }}" alt="Current Language Flag" class="w-5 h-5 rounded-full inline-block mr-2" />
                            {{ App::getLocale() == 'en' ? 'English' : (App::getLocale() == 'fr' ? 'Français' : 'Nederlands') }}
                        </button>

                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 hidden" id="languageDropdown">
                            <a href="{{ route('lang.switch', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                <img src="{{ asset('images/english-flag.png') }}" alt="English Flag" class="w-5 h-5 rounded-full inline-block mr-2" />
                                English
                            </a>
                            <a href="{{ route('lang.switch', 'fr') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                <img src="{{ asset('images/french-flag.png') }}" alt="French Flag" class="w-5 h-5 rounded-full inline-block mr-2" />
                                Français
                            </a>
                            <a href="{{ route('lang.switch', 'nl') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                <img src="{{ asset('images/dutch-flag.png') }}" alt="Dutch Flag" class="w-5 h-5 rounded-full inline-block mr-2" />
                                Nederlands
                            </a>
                        </div>
                    </div>

                    <!--<div class="dropdown">
                         <button id="languageMenuButton">Select Language</button>
                         <div id="languageDropdown" class="dropdown-content">
                             <a href="#" data-lang="en">
                                 <img src="/public/images/english-flag.png" alt="English" /> English
                             </a>
                             <a href="#" data-lang="es">
                                 <img src="/public/images/dutch-icno.png" alt="Nederlands" /> Nederlands
                             </a>
                             <a href="#" data-lang="fr">
                                 <img src="/public/images/french-icno.png" alt="Français" /> Français
                             </a>
                         </div>
                     </div>-->
                    @guest
                        <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                    @endguest

                    @auth
                        <div class="relative">
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition">
                                <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('default-avatar.png') }}" alt="Profile Picture">
                            </button>
                            <div class="dropdown-content absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 z-10 hidden">
                                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                            </div>
                        </div>
                        <form method="POST" action="/logout">
                            @csrf
                            <x-form-button>Log Out</x-form-button>
                        </form>
                    @endauth
                </div>

                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                            class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900"></h1>
            @auth
                <x-button href="{{ route('jobs.index') }}">Formulieren</x-button>
            @endauth
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const profileButton = document.querySelector('.relative button');
        const dropdownContent = document.querySelector('.dropdown-content');

        profileButton.addEventListener('click', function () {
            dropdownContent.classList.toggle('hidden');
        });

        document.addEventListener('click', function (e) {
            if (!profileButton.contains(e.target) && !dropdownContent.contains(e.target)) {
                dropdownContent.classList.add('hidden');
            }
        });

        const languageButton = document.getElementById('languageMenuButton');
        const languageDropdown = document.getElementById('languageDropdown');

        languageButton.addEventListener('click', function () {
            languageDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function (e) {
            if (!languageButton.contains(e.target) && !languageDropdown.contains(e.target)) {
                languageDropdown.classList.add('hidden');
            }
        });
    });
</script>
</body>
</html>
