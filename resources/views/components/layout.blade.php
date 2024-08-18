<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                                    {{ auth()->user()->is_admin ? 'Admin is true' : 'Admin is false' }}
                                    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                                @endif
                            @endauth

                            <x-nav-link href="/about" :active="request()->is('about')">About Us</x-nav-link>
                            <x-nav-link href="/faq" :active="request()->is('faq')">FAQ</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                            <x-nav-link href="/news" :active="request()->is('news')">Latest News</x-nav-link>
                            <x-nav-link href="/readme" :active="request()->is('readme')">Readme</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
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
                        @endauth
                        @auth
                            <form method="POST" action="/logout">
                                @csrf
                                <x-form-button>Log Out</x-form-button>
                            </form>
                        @endauth
                    </div>
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
                    });
                </script>
                <div class="-mr-2 flex md:hidden">

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

        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <a href="/" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                   aria-current="page">Home</a>
                <a href="/about"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
                <a href="/contact"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact</a>
            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="/public/images/logo.svg" alt="User Image">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">Houdi</div>
                        <div class="text-sm font-medium leading-none text-gray-400">/</div>
                    </div>
                    <button type="button"
                            class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                        </svg>
                    </button>
                </div>
                <nav class="bg-gray-800 p-4">
                    <div class="container mx-auto flex justify-between items-center">
                        <div>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('profile.edit') }}" class="flex items-center text-white hover:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 13.877a1.5 1.5 0 00-.707 1.636l1.243 4.428a1.5 1.5 0 001.33 1.061h8.965a1.5 1.5 0 001.33-1.061l1.243-4.428a1.5 1.5 0 00-.707-1.636L12 6.5 5.121 13.877z" />
                                </svg>
                                Profile
                            </a>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </nav>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>
</body>
</html>

