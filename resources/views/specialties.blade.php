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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
@include('partials.header')
<!-- header end -->

<main>
    <!-- about-area start -->
    <section class="about-area pt-120 pb-90">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="section-title section-title-m-0 pos-rel mb-50 text-right">
                        <div class="section-icon">
                            <img class="section-back-icon back-icon-right" src="img/section/section-back-icon.png" alt="">
                        </div>
                        <div class="section-text section-text-small pos-rel">
                            <h5>health care facility</h5>
                            <h1>Would you rather stay at home than go into a health care facility?</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="facalty-text mb-50">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                            omnis iste natus error sit voluptatem accusantium.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Specialty as $Specialt)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-box service-box-border text-center mb-30">
                            <div class="service-thumb">
                                <img src="img/services/service1.png" alt="">
                            </div>
                            <div class="service-content">
                                <h3><a href="{{ route('doctors.specialty', ['id' => $Specialt->id]) }}">{{ $Specialt->specialty_name }}</a></h3>
                                <p>{{ $Specialt->description }}</p>
                                <a class="service-link" href="{{ route('doctors.specialty', ['id' => $Specialt->id]) }}">View Doctors</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- about-area end -->
    <!-- calculate-area start -->
    <section class="calculate-area pos-rel pt-115 pb-120" data-background="img/calculate/calculate-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-10">
                    <div class="section-title calculate-section pos-rel mb-45">
                        <div class="section-text section-text-white pos-rel">
                            <h5>make a call</h5>
                            <h1 class="white-color">Quote Calculator</h1>
                            <p>If you require services on a public holiday, overnight services or live-in services, please call (+00)888.666.88 so we
                                can discuss prices with you.</p>
                        </div>
                    </div>
                    <div class="section-button section-button-left mb-30">
                        <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon btn-icon-green ml-0"><span>+</span>Make Appointment</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="calculate-box white-bg">
                        <div class="calculate-content">
                            <div class="row">
                                <div class="col-xl-12">
                                    <select>
                                        <option value="1">When would you like our support?</option>
                                        <option value="2">When would you like our support?</option>
                                    </select>
                                </div>
                                <div class="col-xl-12">
                                    <select>
                                        <option value="1">When would you like us arrive?</option>
                                        <option value="2">When would you like our support?</option>
                                    </select>
                                </div>
                                <div class="col-xl-12">
                                    <select>
                                        <option value="1">How long should we stay?</option>
                                        <option value="2">When would you like our support?</option>
                                    </select>
                                </div>
                                <div class="col-xl-12">
                                    <select>
                                        <option value="1">Where are you located?</option>
                                        <option value="2">When would you like our support?</option>
                                    </select>
                                </div>
                                <div class="col-xl-12">
                                    <form class="calculate-form" action="#">
                                        <input type="text" placeholder="Your Phone number">
                                        <i class="fas fa-phone"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn mt-40">submit query</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- calculate-area end -->
    <!-- hiring-area start -->
    <section class="hiring-area pt-120 pb-120">
        <div class="container">
            <div class="row no-gutters hire-bg-2">
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-img">
                        <img class="img" src="img/hire/hire1.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-text">
                        <h1>For Employers</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint
                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a data-animation="fadeInLeft" data-delay=".6s" href="contact.html"
                           class="btn btn-icon btn-icon-green ml-0"><span>+</span>Contact us</a>
                    </div>
                </div>
            </div>
            <div class="row no-gutters hire-bg">
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-text">
                        <h1>For Employers</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo
                            consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                            Excepteur sint
                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                           class="btn btn-icon ml-0"><span>+</span>apply today</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-img">
                        <img class="img" src="img/hire/hire2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hiring-area end -->
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
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
