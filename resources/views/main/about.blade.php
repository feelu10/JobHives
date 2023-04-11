@include('main.head')
        <header class="header" id="header">
            <nav class="nav containers">
                <a href="/" class="nav__logo">
                    <i class='bx bx-hive'></i>
                    JobHives</a>

                <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="{{ url('/') }}" class="nav__link ">Home</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ url('/about-us') }}" class="nav__link active-link">About Us</a>
                            </li>
                            <li class="nav__item">
                                <a href="/joblists" class="nav__link">Find Jobs</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ url('/contact-us') }}" class="nav__link">Contact Us</a>
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
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        </div>
                                    </div>
                                @endif
                                @if (Auth::user()->role_name=='User')
                                <div class="dropdown">
                                        <div class="dropdown-content">
                                            <a href="{{ route('dashboard') }}">Dashboard</a>
                                            <a href="/joblists">View Jobs</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
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
<!--=============== ABOUT ===============-->
<section class="about section containers">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center">Find Out A Little More <br> About Us</h2>
                        <p class="about__description">We believe that finding the right career should be
                             a seamless and stress-free experience,
                             which is why we've created a user-friendly job portal designed
                              to make your job search as efficient and effective as possible.
                        </p>
                    </div>
                    <img class="svg__img svg__color" src="merge/assets/img/find-more-img.svg">
                   
                       
                </div>
            </section>

            <!--=============== SECURITY ===============-->
            <section class="security section containers">
                <div class="security__container grid">
                    <div class="security__data">
                        <h2 class="section__title-center">Our platform</h2>
                        <p class="security__description"> Our platform is buzzing with a wide variety of job opportunities, 
                            from entry-level positions to executive roles and everything in between.
                             We're dedicated to helping job seekers explore endless career possibilities
                              and connect with potential employers who share their values and goals.
                        </p>
                    </div>
                    <img class="svg__img svg__color about__img" src="merge/assets/img/curi-img.svg">
                   
                </div>
            </section>
            <!--=============== CONTACT US ===============-->
            <section class="contact section containers">
                            <div class="contact__container grid">
                                <div class="contact__content">
                                    <h2 class="section__title-center">Contact Us From <br> Here</h2>
                                    <p class="contact__description">You can contact us from here, you can write to us, 
                                        call us or visit our service center, we will gladly assist you.</p>
                                </div>

                                <ul class="contact__content grid">
                                    <li class="contact__address">Telephone: <span class="contact__information">999 - 888 - 777</span></li>
                                    <li class="contact__address">Email:  <span class="contact__information">jobhives@gmail.com</span></li>
                                    <li class="contact__address">Location: <span class="contact__information">Cebu - Philippines</span></li>
                                </ul>

                                <div class="contact__content">
                                    <a href="{{ url('/contact-us') }}" class="button">Contact Us</a>
                                </div>
                            </div>
            </section>
            @include('main.footer')