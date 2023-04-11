@include('components.head')
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
                                <a href="{{ url('/') }}" class="nav__link ">Home</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ url('/about-us') }}" class="nav__link ">About Us</a>
                            </li>
                            <li class="nav__item">
                                <a href="/joblists" class="nav__link active-link">Find Jobs</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ url('/contact-us') }}" class="nav__link ">Contact Us</a>
                            </li>
                            <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                            
                            @auth
                            <li class="nav__item dropdown nav__itemx">
                                <a class="nav__linkx dropdown-toggle nav__itemx" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <i class='bx bxs-down-arrow'></i>
                                </a>
                                @if (Auth::user()->role_name == 'Employee' || Auth::user()->role_name == 'Employer' || Auth::user()->role_name == 'Admin')
                                    <div class="dropdown">
                                        <div class="dropdown-content">
                                            <a href="{{ route('dashboard') }}">Dashboard</a>
                                            <a href="/createjob">Create Job</a>
                                            <a href="/joblists/mylist/{{ Auth::id() }}">My Listings</a>
                                            <a href="/joblists">View Jobs</a>
                                            <a href="{{ route('logout') }}">Logout</a>
                                    </div>
                                @endif
                                @if (Auth::user()->role_name=='User')
                                <div class="dropdown">
                                        <div class="dropdown-content">
                                            <a href="{{ route('dashboard') }}">Dashboard</a>
                                            <a href="/joblists">View Jobs</a>
                                            <a href="{{ route('logout') }}">Logout</a>
                                        </div>
                                    </div>
                                 @endif
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
       
            {{ $slot }}
        
        </div>
        <main class="main">
        @include('main.footer')
    </body>
</html>
