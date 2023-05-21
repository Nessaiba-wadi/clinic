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
    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/responsive.css') }}">
</head>
<!-- header begin -->
@include('partials.header')
<!-- header end -->
<body>
    <!-- Add your site or application content here -->
    <!-- header begin -->
    <header>
        <!-- menu-area -->
        <div class="header-menu-area header-padding transparrent-header">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="logo pos-rel">
                            <a href="index.html"><img src="img/logo/logo-2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-6">
                        <div class="header__menu header-menu-white">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="index.html">Home +</a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Home style 1</a></li>
                                            <li><a href="index-2.html">Home style 2</a></li>
                                            <li><a href="index-3.html">Home style 3</a></li>
                                            <li><a href="index-4.html">Home style 4</a></li>
                                            <li><a href="index-5.html">Home style 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Department +</a>
                                        <ul class="submenu">
                                            <li><a href="services.html">Services 01</a></li>
                                            <li><a href="services-2.html">Services 02</a></li>
                                            <li><a href="services-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="doctor.html">Doctors +</a>
                                        <ul class="submenu">
                                            <li><a href="doctor.html">Doctors 01</a></li>
                                            <li><a href="doctor-2.html">Doctors 02</a></li>
                                            <li><a href="doctor-details.html">Doctors Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul class="submenu">
                                            <li><a href="shop.html">Shop Page</a></li>
                                            <li><a href="product-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">News +</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                            <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                                            <li><a href="blog-2-col-mas.html">Blog 2 Col Masonry</a></li>
                                            <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                                            <li><a href="blog-3-col-mas.html">Blog 3 Col Masonry</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="blog-details-left-sidebar.html">Details Left Sidebar</a></li>
                                            <li><a href="blog-details-audio.html">Details Audio</a></li>
                                            <li><a href="blog-details-video.html">Details Video</a></li>
                                            <li><a href="blog-details-gallery.html">Details Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages +</a>
                                        <ul class="submenu">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="appoinment.html">Appoinment</a></li>
                                            <li><a href="portfolio-2-col.html">Portfolio 2 column</a></li>
                                            <li><a href="portfolio.html">Portfolio 3 column</a></li>
                                            <li><a href="portfolio-slider.html">Portfolio Slider</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-2 d-none d-lg-block d-xl-block">
                        <div class="header-right f-right">
                            <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon btn-icon-green"><span>+</span>contact
                                us</a>
                            <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon btn-icon-white"><i class="fas fa-phone"></i>Make
                                A Call</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu mobile-menu-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <main>
        <!-- hero-area start -->
        <section class="hero-area">
            <div class="hero-slider">
                <div class="slider-active">
                    <div class="single-slider slider-height slider-height-2 d-flex align-items-center" data-background="img/slider/slider-bg-2.jpg">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-10">
                                    <div class="hero-text hero-text-2 pt-35">
                                        <div class="hero-slider-caption hero-slider-caption-2">
                                            <h5 class="white-color" data-animation="fadeInUp" data-delay=".2s">We are here for your care.</h5>
                                            <h1 class="white-color" data-animation="fadeInUp" data-delay=".4s">Best Care & Better Doctor.</h1>
                                        </div>
                                        <div class="hero-slider-btn">
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="about.html" class="btn btn-icon btn-icon-blue ml-0"><span>+</span>about us</a>
                                            <a data-animation="fadeInRight" data-delay="1.0s" href="https://www.youtube.com/watch?v=eXQgPCsd83c" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-12">
                                    <div class="slider-right-2">
                                        <div class="caregive-box">
                                            <div class="search-form">
                                                <span class="sub-heading">We are here for you</span>
                                                <h3>Find A Care Giver</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="appoinment-form-box appoinment-form-box-option d-flex mb-40">
                                                        <div class="appoint-ment-icon">
                                                            <img src="img/icon/caregive-option-icon-2.png" alt="">
                                                        </div>
                                                        <form class="appointment-form-2" action="#">
                                                            <label for="input">select your location</label>
                                                            <select name="lc" id="lc" class="postform">
                                                                <option value="-1">Choose A Location</option>
                                                                <option class="level-0" value="36">Chicago, United States</option>
                                                                <option class="level-0" value="37">California, United States</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="appoinment-form-box appoinment-form-box-option d-flex mb-40">
                                                        <div class="appoint-ment-icon">
                                                            <img src="img/icon/caregive-option-icon-2.png" alt="">
                                                        </div>
                                                        <form class="appointment-form-2" action="#">
                                                            <label for="input">select your services</label>
                                                            <select name="lc" id="lc" class="postform">
                                                                <option value="-1">Choose A Service</option>
                                                                <option class="level-0" value="36">Chicago, United States</option>
                                                                <option class="level-0" value="37">California, United States</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-35">
                                                    <div class="inner caregive-btn text-center">
                                                        <a href="appoinment.html" class="btn gray-btn-border">Make Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-area end -->
        <!-- about-area start -->
        <section class="about-area about-area-mid pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="feature-box mb-40">
                                    <div class="feature-small-icon mb-35">
                                        <img src="img/icon/s-fea-icon-1.png" alt="">
                                    </div>
                                    <div class="feature-small-content">
                                        <h3>Advanced Care</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="feature-box mt-40">
                                    <div class="feature-small-icon mb-35">
                                        <img src="img/icon/s-fea-icon-2.png" alt="">
                                    </div>
                                    <div class="feature-small-content">
                                        <h3>Respite Care</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="feature-box mb-30">
                                    <div class="feature-small-icon mb-35">
                                        <img src="img/icon/s-fea-icon-3.png" alt="">
                                    </div>
                                    <div class="feature-small-content">
                                        <h3>Daily Care</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="feature-box mt-40 mb-30">
                                    <div class="feature-small-icon mb-35">
                                        <img src="img/icon/s-fea-icon-4.png" alt="">
                                    </div>
                                    <div class="feature-small-content">
                                        <h3>Neuorology Care</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-11">
                        <div class="about-right-side pt-25 mb-30">
                            <div class="about-title mb-20">
                                <h5 class="pink-color">About Us</h5>
                                <h1>Short Story About MediDove Clinic.</h1>
                            </div>
                            <div class="about-text">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia.</p><br>
                            </div>
                            <div class="about-text-list mb-40">
                                <ul>
                                    <li><i class="fa fa-check"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span></li>
                                    <li><i class="fa fa-check"></i><span>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                                    <li><i class="fa fa-check"></i><span>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea co.</span></li>
                                </ul>
                            </div>
                            <div class="button-area">
                                <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"><span>+</span>learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->
        <!-- mission-vision-area start -->
        <section class="about-area gray-bg pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-10 col-md-12">
                        <div class="about-title mb-20">
                            <h5 class="pink-color">Our Mission & Vission</h5>
                            <h1>Keep Going With Your Passion.</h1>
                        </div>
                        <div class="about-text mission-about-text">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><br>
                        </div>
                        <div class="mission-vision-list pr-90">
                            <div class="mv-single-list d-flex">
                                <div class="mv-icon">
                                    <img src="img/icon/mv-icon-1.png" alt="#">
                                </div>
                                <div class="mv-text">
                                    <p>It enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                                </div>
                            </div>
                            <div class="mv-single-list d-flex border-0">
                                <div class="mv-icon">
                                    <img src="img/icon/mv-icon-2.png" alt="#">
                                </div>
                                <div class="mv-text">
                                    <p>It enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-lg-none d-xl-block">
                        <div class="mv-right-img pos-rel mb-30">
                            <img src="img/about/mvright-img-1.jpg" alt="">
                        </div>
                        <div class="testi-quato-icon about-icon-white d-none d-xl-block">
                            <img src="img/about/about-icon-white.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- mission-vission-area end -->
        <!-- Counter Section Satrt -->
        <section class="counter-wraper theme-bg pt-120 pb-175">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-lg-2 col-md-3">
                        <div class="single-couter counter-box text-center mb-180">
                            <img src="img/counter/counter-icon-4.png" alt="">
                            <h1><span class="counter">540</span>+</h1>
                            <h6 class="green-color">Expert Doctors</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="single-couter counter-box text-center mb-180">
                            <img src="img/counter/counter-icon-5.png" alt="">
                            <h1><span class="counter">899</span>+</h1>
                            <h6 class="green-color">Problem Solve</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="single-couter counter-box text-center mb-180">
                            <img src="img/counter/counter-icon-6.png" alt="">
                            <h1><span class="counter">100</span>+</h1>
                            <h6 class="green-color">Award Winner</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter area end -->
        <!-- appoinment-area start -->
        <section class="appoinment-area gray-bg pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="appoinment-box-2">
                            <div class="row no-gutters">
                                <div class="col-xl-8 col-lg-12">
                                    <div class="appoinment-box-content">
                                        <div class="about-title mb-40">
                                            <h5 class="pink-color">Free Consultation</h5>
                                            <h1>Get An Appointment For Get Release.</h1>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="appoinment-form-box d-flex mb-40">
                                                    <div class="appoint-ment-icon">
                                                        <img src="img/icon/caregive-option-icon-3.png" alt="">
                                                    </div>
                                                    <form class="appointment-form-2" action="#">
                                                        <label for="input">your name</label>
                                                        <input type="text" placeholder="Enter Your Name">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="appoinment-form-box d-flex mb-40">
                                                    <div class="appoint-ment-icon">
                                                        <img src="img/icon/caregive-option-icon-4.png" alt="">
                                                    </div>
                                                    <form class="appointment-form-2" action="#">
                                                        <label for="input">your email</label>
                                                        <input type="text" placeholder="Enter Email Address">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="appoinment-form-box appoinment-form-box-option d-flex mb-40">
                                                    <div class="appoint-ment-icon">
                                                        <img src="img/icon/caregive-option-icon-2.png" alt="">
                                                    </div>
                                                    <form class="appointment-form-2" action="#">
                                                        <label for="input">select your services</label>
                                                        <select name="lc" id="lc" class="postform">
                                                            <option value="-1">Choose A Service</option>
                                                            <option class="level-0" value="36">Chicago, United States</option>
                                                            <option class="level-0" value="37">California, United States</option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="appoinment-form-box d-flex mb-40">
                                                    <div class="appoint-ment-icon">
                                                        <img src="img/icon/caregive-option-icon-5.png" alt="">
                                                    </div>
                                                    <form class="appointment-form-2" action="#">
                                                        <label for="input">your phone</label>
                                                        <input type="text" placeholder="Enter Your Phone">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="appoint-button">
                                                    <a href="#" class="btn green-bg-btn">Make Appointment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="appoinment-right f-right">
                                        <img src="img/appoinment/appoinment-right-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- appoinment-area end -->
        <!-- services-area start -->
        <section class="servcies-area gray-bg pt-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 offset-xl-4 col-lg-10 offset-lg-1">
                        <div class="section-title text-center pos-rel mb-75">
                            <div class="section-icon">
                                <img class="section-back-icon" src="img/section/section-back-icon.png" alt="">
                            </div>
                            <div class="section-text pos-rel">
                                <h5>Services</h5>
                                <h1>What We Do For You?</h1>
                            </div>
                            <div class="section-line pos-rel">
                                <img src="img/shape/section-title-line.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="service-box service-box-2 mb-30 pos-rel">
                            <div class="service-thumb">
                                <img src="img/services/service-icon-1.png" alt="">
                            </div>
                            <div class="service-content service-content-2">
                                <h6 class="green-color text-up-case letter-spacing mb-20">Older & Children</h6>
                                <h3><a href="#">Medical Home Care</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <a class="service-link" href="services-details.html"><i class="fas fa-arrow-right"></i>Read More</a>
                            </div>
                            <div class="service-number">
                                <h1 class="service-big-number">01</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="service-box service-box-2 mb-30 pos-rel">
                            <div class="service-thumb">
                                <img src="img/services/service-icon-2.png" alt="">
                            </div>
                            <div class="service-content service-content-2">
                                <h6 class="green-color text-up-case letter-spacing mb-20">Older & Children</h6>
                                <h3><a href="#">Medical Eye Point</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <a class="service-link" href="services-details.html"><i class="fas fa-arrow-right"></i>Read More</a>
                            </div>
                            <div class="service-number">
                                <h1 class="service-big-number">02</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="service-box service-box-2 mb-30 pos-rel">
                            <div class="service-thumb">
                                <img src="img/services/service-icon-3.png" alt="">
                            </div>
                            <div class="service-content service-content-2">
                                <h6 class="green-color text-up-case letter-spacing mb-20">Older & Children</h6>
                                <h3><a href="#">Medical Older Care</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <a class="service-link" href="services-details.html"><i class="fas fa-arrow-right"></i>Read More</a>
                            </div>
                            <div class="service-number">
                                <h1 class="service-big-number">03</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="service-box service-box-2 mb-30 pos-rel">
                            <div class="service-thumb">
                                <img src="img/services/service-icon-4.png" alt="">
                            </div>
                            <div class="service-content service-content-2">
                                <h6 class="green-color text-up-case letter-spacing mb-20">Older & Children</h6>
                                <h3><a href="#">Medical Dental Care</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <a class="service-link" href="services-details.html"><i class="fas fa-arrow-right"></i>Read More</a>
                            </div>
                            <div class="service-number">
                                <h1 class="service-big-number">04</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area end -->
        <!-- testimonials-area start -->
        <div class="testimonials-area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                        <div class="section-title text-center pos-rel mb-70">
                            <div class="section-icon">
                                <img class="section-back-icon" src="img/section/section-back-icon.png" alt="">
                            </div>
                            <div class="section-text pos-rel">
                                <h5>Testimonials</h5>
                                <h1>Our Happy Clients Says About Us.</h1>
                            </div>
                            <div class="section-line pos-rel">
                                <img src="img/shape/section-title-line.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-row testimonials-activation">
                    <div class="col-xl-12">
                        <div class="testi-box-2">
                            <div class="test-rating-inner d-flex justify-content-between mb-30 align-items-center pr-15">
                                <div class="testi-quato-icon testi-quato-icon-green m-0">
                                    <img src="img/testimonials/testi-quato-icon.png" alt="">
                                </div>
                                <div class="testi-rating-list">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testi-content-2">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipil sicing elit, sed do eiusmod tempor.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <div class="testi-author d-flex align-items-center mt-30">
                                <div class="testi-author-icon-2">
                                    <img src="img/icon/tesit-author-icon-1.png" alt="">
                                </div>
                                <div class="testi-author-desination-2">
                                    <h4>Rosalina D. Williamson</h4>
                                    <span>Founder At <span class="f-500 green-color">MinimalDesign</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="testi-box-2">
                            <div class="test-rating-inner d-flex justify-content-between mb-30 align-items-center pr-15">
                                <div class="testi-quato-icon testi-quato-icon-green m-0">
                                    <img src="img/testimonials/testi-quato-icon.png" alt="">
                                </div>
                                <div class="testi-rating-list">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testi-content-2">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipil sicing elit, sed do eiusmod tempor.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <div class="testi-author d-flex align-items-center mt-30">
                                <div class="testi-author-icon-2">
                                    <img src="img/icon/tesit-author-icon-2.png" alt="">
                                </div>
                                <div class="testi-author-desination-2">
                                    <h4>Hiliam D. Wanakanda</h4>
                                    <span>Founder At <span class="f-500 green-color">MinimalDesign</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="testi-box-2">
                            <div class="test-rating-inner d-flex justify-content-between mb-30 align-items-center pr-15">
                                <div class="testi-quato-icon testi-quato-icon-green m-0">
                                    <img src="img/testimonials/testi-quato-icon.png" alt="">
                                </div>
                                <div class="testi-rating-list">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testi-content-2">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipil sicing elit, sed do eiusmod tempor.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <div class="testi-author d-flex align-items-center mt-30">
                                <div class="testi-author-icon-2">
                                    <img src="img/icon/tesit-author-icon-1.png" alt="">
                                </div>
                                <div class="testi-author-desination-2">
                                    <h4>Hiliam D. Wanakanda</h4>
                                    <span>Founder At <span class="f-500 green-color">MinimalDesign</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonials-area end -->
        <!-- news-letter-area start -->
        <section class="news-letter-area pt-120 pb-120" data-background="img/newsletter/news-letter-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-6 col-lg-8 offset-lg-4">
                        <div class="news-letter-box">
                            <div class="about-title news-letter-title mb-20">
                                <h5 class="pink-color">Subscribe For Get Update</h5>
                                <h1>Let’s Find An Office Near You.</h1>
                            </div>
                            <div class="news-letter-text mb-30">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Enter your email address">
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-letter-area end -->
        <!-- team-area start -->
        <section class="team-area pt-115 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title text-center pos-rel mb-70">
                            <div class="section-icon">
                                <img class="section-back-icon" src="img/section/section-back-icon.png" alt="">
                            </div>
                            <div class="section-text pos-rel">
                                <h5>Angels</h5>
                                <h1>Our Doctors</h1>
                            </div>
                            <div class="section-line pos-rel">
                                <img src="img/shape/section-title-line.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row team-activation">
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="img/team/team-member-1.jpg" alt="">
                            </div>
                            <div class="team-author-info">
                                <span>Founder</span>
                                <h6>Rosalina D. Williamson</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="img/team/team-member-2.jpg" alt="">
                            </div>
                            <div class="team-author-info">
                                <span>Founder</span>
                                <h6>Rosalina D. Williamson</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="img/team/team-member-3.jpg" alt="">
                            </div>
                            <div class="team-author-info mb-30">
                                <span>Founder</span>
                                <h6>Rosalina D. Williamson</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="img/team/team-member-4.jpg" alt="">
                            </div>
                            <div class="team-author-info mb-30">
                                <span>Founder</span>
                                <h6>Rosalina D. Williamson</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="img/team/team-member-5.jpg" alt="">
                            </div>
                            <div class="team-author-info">
                                <span>Founder</span>
                                <h6>Rosalina D. Williamson</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="img/team/team-member-6.jpg" alt="">
                            </div>
                            <div class="team-author-info">
                                <span>Founder</span>
                                <h6>Rosalina D. Williamson</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="img/team/team-member-3.jpg" alt="">
                            </div>
                            <div class="team-author-info">
                                <span>Founder</span>
                                <h6>Rosalina D. Williamson</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="img/team/team-member-4.jpg" alt="">
                            </div>
                            <div class="team-author-info">
                                <span>Founder</span>
                                <h6>Rosalina D. Williamson</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-area end -->
        <!-- latest-news-area start -->
        <section class="latest-news-area gray-bg pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title text-center pos-rel mb-70">
                            <div class="section-icon">
                                <img class="section-back-icon" src="img/section/section-back-icon.png" alt="">
                            </div>
                            <div class="section-text pos-rel">
                                <h5>News</h5>
                                <h1>Get Every Single <br> Updates From Here.</h1>
                            </div>
                            <div class="section-line pos-rel">
                                <img src="img/shape/section-title-line.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="latest-news-box latest-news-box-2 mb-30">
                            <div class="latest-news-thumb">
                                <a href="news-details.html"><img src="img/blog/news-thumb-1.jpg" alt=""></a>
                            </div>
                            <div class="latest-news-content-box">
                                <div class="latest-news-content">
                                    <div class="news-meta mb-10">
                                        <span><a href="#" class="news-tag">Medical,</a></span>
                                        <span><a href="#" class="news-tag">Medicine</a></span>
                                    </div>
                                    <h3><a href="news-details.html">Lorem ipsum dolor sit met, cons ectetur.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tem incididunt ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="latest-news-box latest-news-box-2 mb-30">
                            <div class="latest-news-thumb">
                                <a href="news-details.html"><img src="img/blog/news-thumb-2.jpg" alt=""></a>
                            </div>
                            <div class="latest-news-content-box">
                                <div class="latest-news-content">
                                    <div class="news-meta mb-10">
                                        <span><a href="#" class="news-tag">Medical,</a></span>
                                        <span><a href="#" class="news-tag">Medicine</a></span>
                                    </div>
                                    <h3><a href="news-details.html">Lorem ipsum dolor sit met, cons ectetur.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tem incididunt ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="latest-news-box latest-news-box-2 mb-30">
                            <div class="latest-news-thumb">
                                <a href="news-details.html"><img src="img/blog/news-thumb-3.jpg" alt=""></a>
                            </div>
                            <div class="latest-news-content-box">
                                <div class="latest-news-content">
                                    <div class="news-meta mb-10">
                                        <span><a href="#" class="news-tag">Medical,</a></span>
                                        <span><a href="#" class="news-tag">Medicine</a></span>
                                    </div>
                                    <h3><a href="news-details.html">Lorem ipsum dolor sit met, cons ectetur.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tem incididunt ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest-news-area end -->

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

                                <div class="footer-emailing">
                                    <ul>
                                        <li><i class="far fa-envelope"></i>nessaiba@medidove.com</li>
                                        <li><i class="far fa-clone"></i>Health.com</li>
                                        <li><i class="far fa-flag"></i>43 Bd Rachidi, Casablanca</li>
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
                                    <h3>Politique de confidentialité</h3>
                                </div>
                                <div class="privacy-policy">
                                    <p>Consultez notre politique de confidentialité pour en savoir plus sur la manière dont nous protégeons vos données personnelles et respectons votre vie privée.</p>
                                    <a href="politique-confidentialite.html">Politique de confidentialité</a>
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
                                <p>Copyright by@ Nessaiba wadi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
        <!-- footer end -->

    <!-- JS here -->
    <script src="{{ secure_asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ secure_asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ secure_asset('js/popper.min.js') }}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ secure_asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ secure_asset('js/one-page-nav-min.js') }}"></script>
    <script src="{{ secure_asset('js/slick.min.js') }}"></script>
    <script src="{{ secure_asset('js/ajax-form.js') }}"></script>
    <script src="{{ secure_asset('js/wow.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ secure_asset('js/waypoints.min.js') }}"></script>
    <script src="{{ secure_asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ secure_asset('js/plugins.js') }}"></script>
    <script src="{{ secure_asset('js/main.js') }}"></script>
</body>

</html>
