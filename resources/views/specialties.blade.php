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
                            <h5>Your health A to Z</h5>
                            <h1>Find the right healthcare for you</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="facalty-text mb-50">
                        <p>Medidove provides a comprehensive directory and user-friendly search tools to help you find the perfect healthcare provider. Read reviews, compare qualifications, and make informed decisions. Your health and well-being are our top priorities. Start your journey to optimal health today by finding the right healthcare for you on our platform.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Specialty as $Specialt)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-box service-box-border text-center mb-30">
                            <div class="service-thumb">
                                @if($Specialt->id == 1)
                                    <img src="img/Spec/Cardiology.jpg" alt="">
                                @elseif($Specialt->id == 2)
                                    <img src="img/Spec/Dermatology.jpg" alt="">
                                @elseif($Specialt->id == 3)
                                    <img src="img/Spec/Gastroenterology.jpg" alt="">
                                @elseif($Specialt->id == 4)
                                    <img src="img/Spec/Orthopedics.jpg" alt="">
                                @elseif($Specialt->id == 5)
                                    <img src="img/Spec/Obstetrics and Gynecology.jpg" alt="">
                                @elseif($Specialt->id == 6)
                                    <img src="img/Spec/Neurology.jpg" alt="">

                                @endif
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

    <!-- hiring-area start -->
    <section class="hiring-area pt-120 pb-120">
        <div class="container">
            <div class="row no-gutters hire-bg-2">
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-img">
                        <img class="img" src="img/section/doctor1.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-text">
                        <h1>Get in Touch</h1>
                        <p>Feel free to get in touch with us! If you have any questions, concerns, or would like to schedule an appointment, our team is here to assist you. Simply click the button below to reach out to us. We value your feedback and strive to provide you with the best possible care. We look forward to hearing from you!</p>
                        <a data-animation="fadeInLeft" data-delay=".6s" href="contact.html"
                           class="btn btn-icon btn-icon-green ml-0"><span>+</span>Contact us</a>
                    </div>
                </div>
            </div>
            <div class="row no-gutters hire-bg">
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-text">
                        <h1>Your Health</h1>
                        <p> at Medidove, the confidentiality of your personal information is our top priority. We take strict measures to protect your data and ensure its privacy at all times. Your information is used solely for the purpose of providing our medical services, and we comply with relevant data protection regulations. You can trust our commitment to your privacy and the security of your data.</p>
                        <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                           class="btn btn-icon ml-0"><span>+</span>Make appointment</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-img">
                        <img class="img" src="img/section/doctor2.jpg" alt="">
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
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
