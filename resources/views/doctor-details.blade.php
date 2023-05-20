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
    <!-- service-details-area start -->
    <div class="doctor-details-area pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <article class="doctor-details-box">
                        <div class="section-title pos-rel mb-25">
                            <div class="section-icon">
                                <img class="section-back-icon back-icon-left" src="{{ asset('img/section/section-back-icon-sky.png') }}"
                                     alt="">
                            </div>
                            <div class="section-text pos-rel">
                                <h5 class="green-color text-up-case">introducing {{ $doctor->first_name }} {{ $doctor->last_name }}</h5>
                                <h1>Doctor Profile</h1>

                            </div>
                            <div class="section-line pos-rel">
                                <img src="{{ asset('img/doctor/section-title-line.png') }}" alt="">
                            </div>
                        </div>
                        <div class="service-details-text mb-40">
                            <p>{{ $doctor->bio }}</p>
                        </div>
                    </article>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="service-widget mb-50">
                        <div class="team-wrapper team-box-2 team-box-3 text-center mb-30">
                            <div class="team-thumb">
                            </div>
                            <div class="r-info mt-35 mb-35">
                                <h3> {{ $doctor->first_name }} {{ $doctor->last_name }}</h3>
                                <h6>Phone number :{{ $doctor->phone_number }}</h6>
                                <h6>address : {{ $doctor->address }}</h6>
                                <h6 class="f-500 text-up-case letter-spacing pink-color">@foreach($doctor->specialties as $specialty)
                                        <li>{{ $specialty->specialty_name }}</li>
                                    @endforeach</h6>
                            </div>
                            <div class="team-social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="service-widget mb-50">
                        <div class="widget-title-box mb-30">
                            <h3 class="widget-title">Qualifications</h3>
                        </div>
                        <div class="more-service-list">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="more-service-icon"><img src="img/services/more-ser-1.png" alt=""></div>
                                        <div class="more-service-title doctor-details-title"><h6>{{ $doctor->qualification }}</span></h6></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-widget mb-50">
                        <div class="widget-title-box mb-30">
                            <h3 class="widget-title">Experience</h3>
                        </div>
                        <div class="more-service-list">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="more-service-title doctor-details-title">{{ $doctor->years_of_experience }} year</span></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-widget mb-80">
                        <div class="widget-title-box mb-30">
                            <h3 class="widget-title">Get Some Advice?</h3>
                        </div>
                        <form class="service-contact-form" action="">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-input contact-icon contact-user mb-20">
                                        <input type="text" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-input contact-icon contact-mail mb-20">
                                        <input type="text" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-input contact-icon contact-hourglass">
                                        <select name="#" id="service-option">
                                            <option value="1">Select type of care</option>
                                            <option value="2">Select type of care</option>
                                            <option value="2">Select type of care</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="ser-form-btn text-center mt-40">
                            <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"
                               style="animation-delay: 0.6s;" tabindex="0"><span>+</span>Request </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-details-area end -->
</main>
<!-- footer start -->
<footer>
    <div class="footer-top primary-bg footer-map pos-rel pt-120 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer-contact-info footer-contact-info-3 mb-40">
                        <div class="footer-logo mb-35">
                            <a href="#"><img src="/img/logo/footer-logo-3.png" alt=""></a>
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
