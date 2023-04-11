
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
                                <a href="{{ url('/') }}" class="nav__link active-link">Home</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ url('/about-us') }}" class="nav__link">About Us</a>
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
        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section">
                <div class="home__container containers grid">
                    <img class="svg__img svg__color home__img" src="merge/assets/img/main-img.png">
                       

                    <div class="home__data">
                        <h1 class="home__title">Join the hive and explore endless career possibilities</h1>
                        <p class="home__description">Whether you're just starting out or looking to make a career change, JobHives offers a platform for discovering and pursuing your dream career.</p>

                        <a href="{{ route('register') }}" class="button">Get Started</a>

                    </div>   
                </div>
            </section>

            <!--==================== LOGOS ====================-->
            <section class="logos section">
                <div class="logos__container containers grid">
                    <div class="logos__img">
                        <img src="merge/assets/img/logo1.png" alt="">
                    </div>
                    <div class="logos__img">
                        <img src="merge/assets/img/logo2.png" alt="">
                    </div>
                    <div class="logos__img">
                        <img src="merge/assets/img/logo3.png" alt="">
                    </div>
                    <div class="logos__img">
                        <img src="merge/assets/img/logo4.png" alt="">
                    </div>
                </div>
            </section>
            

            

            <!--=============== Jobs ===============-->
            <section class="services section containers">
                <h2 class="section__title">Popular jobs we offer</h2>
                <div class="services__container grid">
                    <div class="services__data">
                        <h3 class="services__subtitle">Figma UI UX Design.</h3>
                        <img class="svg__color services__img" src="merge/assets/img/figma.svg">
                           
                        <p class="services__description">Full time</p>
                        <div>
                            <a href="course.html" class="button button-link">Learn More
                            </a>
                        </div>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">Web Developer</h3>
                        <img class="svg__color services__img" src="merge/assets/img/frontend.svg">
                           
                        </svg>
                        <p class="services__description">Full time</p>
                        <div>
                            <a href="course.html" class="button button-link">Learn More</a>
                        </div>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">Building User Interface.</h3>
                        <img class="svg__color services__img" src="merge/assets/img/UI.svg">
                           
                        </svg>
                        <p class="services__description">Part time</p>
                        <div>
                            <a href="course.html" class="button button-link">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== Testimonial ===============-->
            <section class="testimonial section containers">
                <h2 class="section__title">Testimonials</h2>
                <div class="testimonial__container grid">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    I had been searching for a job for months with no luck,
                                     but JobHives changed everything. Within a week of signing up,
                                      I had multiple interviews scheduled and ended up landing my dream job!
                                       I'm so grateful for this platform and would highly recommend it to
                                        anyone in the job market
                                </p>
                                <h3 class="testimonial__date">June 24. 2023</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="merge/assets/img/testimonial1.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">John Smith</span>
                                        <span class="testimonial__perfil-detail">UX Designer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    As a recent college graduate, I wasn't sure where to start with my job search.
                                     But JobHives made it easy to explore different industries and find job openings that fit my skills and interests.
                                     Thanks to JobHives, I'm now working in a job that I love and am excited to build my career
                                </p>
                                <h3 class="testimonial__date">April 20. 2023</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="merge/assets/img/testimonial2.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Sarah Johnson</span>
                                        <span class="testimonial__perfil-detail">UI Designer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    I had been working in the same job for years and was ready for a change, but didn't know where to start.
                                     JobHives' personalized job recommendations and career resources helped me to identify
                                      my strengths and explore new career paths. Now, I'm in a job that challenges
                                       me and allows me to grow professionally
                                </p>
                                <h3 class="testimonial__date">Oct 27. 2023</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="merge/assets/img/testimonial3.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">David Lee</span>
                                        <span class="testimonial__perfil-detail">Back-End developer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    JobHives was a game changer for my job search. I was able to quickly and easily apply to multiple job 
                                    openings and received several job offers within weeks. The platform is intuitive and user-friendly,
                                     making it easy to navigate and find relevant job opportunities.
                                </p>
                                <h3 class="testimonial__date">March 27. 2023</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="merge/assets/img/testimonial4.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Michael Davis</span>
                                        <span class="testimonial__perfil-detail">Front-End Web Developer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    JobHives provided me with the tools and resources I needed to succeed in my job search.
                                     From resume and cover letter templates to interview tips and salary negotiation advice,
                                      JobHives was a one-stop-shop for all of my career needs. Thanks to JobHives,
                                       I'm now in a job that I love and have the tools to continue to grow my career
                                <h3 class="testimonial__date">Jan 5. 2023</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="merge/assets/img/testimonial5.png" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Ashley Rodriguez</span>
                                        <span class="testimonial__perfil-detail">UX & UI Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-button-next">
                            <i class='bx bx-right-arrow-alt' ></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class='bx bx-left-arrow-alt' ></i>
                        </div>
                    </div>

                    <div class="testimonial__images">
                        <div class="testimonial__square"></div>
                        <img src="merge/assets/img/tm-img.png" alt="" class="testimonial__img">
                    </div>
                </div>
            </section>

            <!--=============== APP ===============-->
            <section class="app section containers">
                <div class="app__container grid">
                    <div class="app__data">
                        <h2 class="section__title-center">JobHives Mobile App <br> Your Career on the Go</h2>
                        <p class="app__description">Take your job search to the next level with the JobHives mobile app. Designed with job seekers in mind,
                             our app lets you browse job listings, apply to positions,
                              and track your applications all from the convenience of your phone.</p>
                        <div class="app__buttons">
                            <a href="https://www.apple.com/ph/app-store/" target="_blank" class="button button-flex">
                                <i class='bx bxl-apple button__icon'></i> App Store
                            </a>
                            <a href="https://play.google.com/" target="_blank" class="button button-flex">
                                <i class='bx bxl-play-store button__icon' ></i> Google Play
                            </a>
                        </div>
                    </div>

                    <img class="svg__img svg__color app__img" src="merge/assets/img/app-ilustration.svg" >

                </div>
            </section>
        </main>

        <!--=============== FOOTER ===============-->
        @include('main.footer')