@include('main.head')
        <!--=============== HEADER ===============-->
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
                                <a href="{{ url('/about-us') }}" class="nav__link ">About Us</a>
                            </li>
                            <li class="nav__item">
                                <a href="/joblists" class="nav__link">Find Jobs</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ url('/contact-us') }}" class="nav__link active-link">Contact Us</a>
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
                                            <a href="logout">Log Out </a>
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
        <main class="main">
            <!--=============== contactpage ===============-->
        <section class="contactpage section containers" id="contactpage">
        <div class="contactpage__container grid">
          <div class="contactpage__box">
            <h2 class="contactpage__title">
              Reach out to us today <br />
              via any of the given <br />
              information
            </h2>

            <div class="contactpage__data">
              <div class="contactpage__information">
                <h3 class="contactpage__subtitle">Call us for instant support</h3>
                <span class="contactpage__description">
                    <i class='bx bx-phone contact__page-icon' ></i>
                    +999 - 888 - 777
                </span>
              </div>

              <div class="contactpage__information">
                <h3 class="contactpage__subtitle">Write us by mail</h3>
                <span class="contactpage__description">
                    <i class='bx bxs-envelope contact__page-icon' ></i>
                    Jobhives@gmail.com
                </span>
              </div>
            </div>
          </div>
          @if (Auth::check())
          <form method="POST" action="{{ route('send-email') }}" class="contactpage__form">
            @csrf
            <div class="contactpage__inputs">
                <div class="contactpage__content">
                <input type="email" placeholder=" " class="contactpage__input" name="email" id="email" required>
                <label for="email" class="contactpage__label">Email</label>
                </div>
                <div class="contactpage__content">
                <input type="text" placeholder=" " class="contactpage__input" name="subject" id="subject" required>
                <label for="subject" class="contactpage__label">Subject</label>
                </div>
                <div class="contactpage__content contactpage__area">
                <textarea name="message" placeholder=" " class="contactpage__input" required></textarea>
                <label for="message" class="contactpage__label">Message</label>
                </div>
            </div>
            <button type="submit" class="button button-flex contact__btn">
                Send Message
                <i class='bx bx-right-arrow-alt button__icon'></i>
            </button>
            </form>
            @else
    <p>Please <a href="{{ route('login') }}">log in</a> or <a href="{{ route('register') }}">register</a> to access this form.</p>
@endif
        </div>
      </section>

            <!--=============== Call ===============-->
            <section class="about section containers">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center">Get In Touch With Us</h2>
                        <p class="about__description">We are always ready to listen to our customers and hear what they have to say.
                             Whether you have a question, a suggestion, or a concern,
                              we encourage you to reach out to us using the form below or by emailing us at <b>Jobhives@gmail.com</b>.
                               Your feedback is important to us and helps us improve our services to better meet your needs.
                        </p>
                    </div>
                    <img class="svg__img svg__color" src="merge/assets/img/callus1.svg">
                   
                       
                </div>
            </section>

            <!--=============== Extras ===============-->
            <section class="security section containers">
                <div class="security__container grid">
                    <div class="security__data">
                        <h2 class="section__title-center">We Want to Hear From You!</h2>
                        <p class="security__description">At TechTutors, we believe that communication is key to building a strong relationship with our clients. 
                            That's why we encourage you to get in touch with us if you have any questions, concerns, or feedback. 
                            Your input is invaluable to us and helps us improve our services to better meet your needs.
                        </p>
                    </div>

                   
                    <img class="svg__img svg__color about__img" src="merge/assets/img/callus2.svg">
                   
                </div>
            </section>

            <!--=============== Newsletter ===============-->
            <section class="newsletter section containers">
                <div class="newsletter__bg grid">
                    <div>
                        <h2 class="newsletter__title">Subscribe Our <br> Newsletter</h2>
                        <p class="newsletter__description">
                            Don't miss out on your discounts. Subscribe to our email 
                            newsletter to get the best offers, discounts, coupons, 
                            gifts and much more.
                        </p>
                    </div>

                    <form action="" class="newsletter__subscribe">
                        <input type="email" placeholder="Enter your email" class="newsletter__input">
                        <button class="newsletter__button">
                            SUBSCRIBE
                        </button>
                    </form>
                </div>
            </section>

        </main>
        @include('main.footer')
