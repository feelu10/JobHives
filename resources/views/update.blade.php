<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>JobHives</title>
        <!--=============== Favicon ===============-->
        <link rel="icon" type="image/x-icon" href="/assets-list/img/favicon.svg">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
            <!-- Styles -->
        <!--=============== css ===============-->
        <link rel="stylesheet" href="{{ asset('asset-list/css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('asset-list/js/app.js') }}" defer></script>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('merge/assets/scss/styles.css') }}">
        <!--=============== Favicon ===============-->
        <link rel="icon" type="image/x-icon" href="{{ asset('merge/assets/img/favicon.png') }}">

    </head>
    <body class="">
        <main class="main">
        <header class="header" id="header">
            <nav class="nav containers">
                <a href="#" class="nav__logo">
                    <i class='bx bx-hive'></i>
                    JobHives</a>

           <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ url('/') }}" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ url('/about-us') }}" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="/list" class="nav__link active-link">Find Jobs</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ url('/contact-us') }}" class="nav__link">Contact Us</a>
                    </li>
                    <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                    
                    @auth
                    <li class="nav__item dropdown nav__itemx">
                        <a class="nav__link dropdown-toggle nav__itemx" href="/logout" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <i class='bx bxs-down-arrow'></i>
                        </a>
                        <div class="dropdown">
                            <div class="dropdown-content">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                            </div>
                        </div>

                    </li>
                    @else
                    <li class="nav__item">
                        <a href="{{ route('login') }}" class="button button__header">Login</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('register') }}"class=" button__header sec__btn">Signup</a>
                    </li>
                    @endauth
                </ul>
            </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

               
            </nav>
        </header>

        <div class=" text-gray-900 antialiased">
        <section class="text-gray-600 body-font overflow-hidden">
        <div class="containers px-5 py-12 mx-auto">
            <div class="mb-12 flex items-center">
                <h2 class="text-whitex text-2xl font-medium text-gray-900 title-font px-4">
                    Your listings ({{ $listings->count() }})
                </h2>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                </form>
            </div>
            <div class="-my-6">
                @foreach($listings as $listing)
                    <a
                        href="{{ route('listings.show', $listing->slug) }}"
                        class="border-r py-6 px-4 flex flex-wrap md:flex-nowrap border-b border-gray-100 {{ $listing->is_highlighted ? 'bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500' : 'bg-white hover:bg-gray-100' }}"
                    >
        <div class="md:w-16 md:mb-0 mb-6 mr-4 flex-shrink-0 flex flex-col">
                            <img src="/storage/{{ $listing->logo }}" class="w-16 h-16 rounded-full object-cover">
                        </div>
                        <div class="md:w-1/2 mr-8 flex flex-col items-start justify-center">
                            <h2 class="text-whitex text-xl font-bold text-gray-900 title-font mb-1">{{ $listing->title }}</h2>
                            <p class="text-whitex leading-relaxed text-gray-900">{{ $listing->company }} &mdash; <span class="text-gray-600">{{ $listing->location }}</span></p>
                        </div>
                        <div class="md:flex-grow mr-8 mt-2 flex items-center justify-start">
                            @foreach($listing->tags as $tag)
                                <span class="tagx inline-block mr-2 tracking-wide text-indigo-500 text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500">{{ strtoupper($tag->name) }}</span>
                            @endforeach
                        </div>
                        <span class="md:flex-grow flex flex-col items-end justify-center">
                            <span>{{ $listing->created_at->diffForHumans() }}</span>
                            <span><strong class="text-bold">{{ $listing->clicks()->count() }}</strong> Apply Button Clicks</span>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
        </section>
        </div>
        <main class="main">
        <footer class="footer section">
            <div class="footer__container containers grid">
                <div class="footer__content">
                    <i class='bx bx-hive'></i>
                    <a href="" class="footer__logo">JobHives</a>
                    <p class="footer__description"><q> Empowering Your Career Journey</q></p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Services</h3>
                    <ul class="footer__links">
                        <li><a href="" class="footer__link">Location</a></li>
                        <li><a href="" class="footer__link">Privacy Policy</a></li>
                        <li><a href="" class="footer__link">Report a bug</a></li>
                        <li><a href="" class="footer__link">Terms of Service</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Company</h3>
                    <ul class="footer__links">
                        <li><a href="" class="footer__link">Blog</a></li>
                        <li><a href="" class="footer__link">Our mision</a></li>
                        <li><a href="" class="footer__link">Get in touch</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Community</h3>
                    <ul class="footer__links">
                        <li><a href="" class="footer__link">Support</a></li>
                        <li><a href="" class="footer__link">Questions</a></li>
                        <li><a href="" class="footer__link">Customer help</a></li>
                    </ul>
                </div>

                <div class="footer__social">
                <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="https://www.twitter.com/" target="_blank" class="footer__social-link"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169; JobHives. All right reserved</p>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>
        <!--=============== SWIPER JS ===============-->
        <script src="merge/assets/js/swiper-bundle.min.js"></script>
        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('merge/assets/js/main.js') }}"></script>
    </body>
</html>