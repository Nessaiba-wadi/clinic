<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MediDove - Medical and Health HTML5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.png in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

<!-- header begin -->
<header>
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-0 col-md-7 offset-md-1">
                    <div class="header-info">
                        <span><i class="fas fa-phone"></i> +1 800 833 9780</span>
                        <span><i class="fas fa-envelope"></i> info@example.com</span>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="header-top-right-btn f-right">
                        <a href="appoinment.html" class="btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu-area -->
    <div class="header-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-5 d-flex align-items-center">
                    <div class="logo logo-circle pos-rel">
                        <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="header__menu f-right">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="about.html">Home</a></li>
                                <li><a href="about.html">Specialties</a></li>
                                <li><a href="about.html">Doctors</a></li>
                                <li><a href="about.html">Create Account</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<main>
    <!-- login Area Strat-->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Login From Here</h3>
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf
                            <label for="email" :value="__('Email')">Email Address <span>*</span></label>
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  placeholder="Enter Username or Email address..." />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <label for="password" :value="__('Password')">Password <span>*</span></label>
                            <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="Enter password..." />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <div class="login-action mb-20 fix">
                                    <span class="log-rem f-left">
                                        <input id="remember_me" name="remember" type="checkbox" />
                                        {{ __('Remember me') }}
                                    </span>
                                <span class="forgot-login f-right">
                                        <a href="#">{{ __('Lost your password??') }}</a>
                                    </span>
                            </div>
                            <button class="btn btn-icon-green w-100">Login Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <button class="btn theme-btn w-100">Register Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
</main>

<!-- footer start -->
<footer>
    <div class="footer-top primary-bg footer-map pos-rel pt-120 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer-contact-info footer-contact-info-3 mb-40">
                        <div class="footer-logo mb-35">
                            <a href="#"><img src="img/logo/footer-logo-3.png" alt=""></a>
                        </div>
                        <div class="footer-contact-content mb-25">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                        </div>
                        <div class="footer-emailing">
                            <ul>
                                <li><i class="far fa-envelope"></i>info@examplemedical.com</li>
                                <li><i class="far fa-clone"></i>examplemedical.com</li>
                                <li><i class="far fa-flag"></i>227 Marion Street, Columbia</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h3>Departments</h3>
                        </div>
                        <div class="footer-menu footer-menu-2">
                            <ul>
                                <li><a href="#">Surgery and Radiology</a></li>
                                <li><a href="#">Departments</a></li>
                                <li><a href="#">Family Medicine</a></li>
                                <li><a href="#">Our Doctors</a></li>
                                <li><a href="#">Women’s Health</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Optician</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Pediatrics</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Dermatology</a></li>
                                <li><a href="#">Book an Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h3>News Feeds</h3>
                        </div>
                        <div class="blog-feeds pr-15">
                            <div class="signle-blog-feeds mb-20">
                                <div class="blog-feeds-thumb">
                                    <a href="news-details.html"><img src="img/blog/feeds-thumb-1.jpg" alt=""></a>
                                </div>
                                <div class="blog-feeds-text">
                                    <h5><a href="news-details.html">Lorem ipsum dolor sit am et, consectetur.</a></h5>
                                    <span class="feeds-date">14 July 2019</span>
                                </div>
                            </div>
                            <div class="signle-blog-feeds mb-20">
                                <div class="blog-feeds-thumb">
                                    <a href="news-details.html"><img src="img/blog/feeds-thumb-2.jpg" alt=""></a>
                                </div>
                                <div class="blog-feeds-text">
                                    <h5><a href="news-details.html">Lorem ipsum dolor sit am et, consectetur.</a></h5>
                                    <span class="feeds-date">14 July 2019</span>
                                </div>
                            </div>
                            <div class="signle-blog-feeds  mb-20">
                                <div class="blog-feeds-thumb">
                                    <a href="news-details.html"><img src="img/blog/feeds-thumb-3.jpg" alt=""></a>
                                </div>
                                <div class="blog-feeds-text">
                                    <h5><a href="news-details.html">Lorem ipsum dolor sit am et, consectetur.</a></h5>
                                    <span class="feeds-date">14 July 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-25 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-copyright footer-copyright-3 text-center">
                        <p>Copyright by@ BasicTheme - 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- JS here -->
<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/one-page-nav-min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/ajax-form.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEEMx3XDpByNzYNn0n62Zsq_sVYPx1zY"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
