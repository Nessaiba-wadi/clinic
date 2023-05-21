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
    <link rel="stylesheet" href="{{ secure_secure_asset('css/bootstrap.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_secure_asset('css/responsive.css') }}">
</head>

<body>

<!-- header begin -->
@include('partials.header')
<!-- header end -->

    <main>
        <!-- cta-area start -->
        <section class="cta-area pos-rel pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-md-12">
                        <div class="cta-text text-center">
                            <div class="section-title pos-rel mb-50">
                                <div class="section-text section-text-white pos-rel">
                                    <h5>Stay healthy & strong to enjoy life</h5>
                                    <h1 class="white-color">Trust Us To Be There To Help All & Make Things Well Again.</h1>
                                </div>
                            </div>
                            <div class="section-button section-button-left">
                                <a data-animation="fadeInLeft" data-delay=".6s" href="login" class="btn btn-icon btn-icon-green ml-0"><span>+</span>get a consultant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-area end -->
        <!-- about-area start -->
        <section class="about-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="medical-icon-brand-2">
                            <img src="img/about/medical-brand-icon-border.png" alt="">
                        </div>
                        <div class="about-left-side pos-rel mb-30">
                            <div class="about-front-img">
                            </div>
                            <div class="about-shape">
                                <img src="img/index/index1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-right-side pt-55 mb-30">
                            <div class="about-title mb-20">
                                <h5>About Us</h5>
                                <h1>Short Story About MediDove Clinic.</h1>
                            </div>
                            <div class="about-text">
                                <p>Welcome to MediDove Clinic, where exceptional care meets compassion. Our clinic is dedicated to providing top-quality healthcare services in a warm and welcoming environment. With a team of highly skilled professionals and state-of-the-art facilities, we offer personalized care tailored to your unique needs. Trust us to be your partner in your journey towards better health and wellness. Experience the difference at MediDove Clinic today.</p>
                            </div>
                            <div class="about-author d-flex align-items-center">

                                <div class="author-desination">
                                    <h4>Nessaiba Wadi</h4>
                                    <h6>founder</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->
        <!-- services-area start -->
        <section class="servcies-area gray-bg pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title text-center pos-rel mb-75">
                            <div class="section-icon">
                                <img class="section-back-icon" src="img/section/section-back-icon.png" alt="">
                            </div>
                            <div class="section-text pos-rel">
                                <h5>Departments</h5>
                                <h1>Managed Your Heathcare Services</h1>
                            </div>
                            <div class="section-line pos-rel">
                                <img src="img/shape/section-title-line.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-box text-center mb-30">
                            <div class="service-thumb">
                                <img src="img/services/service1.png" alt="">
                            </div>
                            <div class="service-content">
                                <h3><a href="#">Cardiology</a></h3>
                                <p>Specializes in heart-related conditions and diseases such as coronary artery disease and arrhythmias.</p>
                                <a class="service-link" href="specialties">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-box text-center mb-30">
                            <div class="service-thumb">
                                <img src="img/services/service5.png" alt="">
                            </div>
                            <div class="service-content">
                                <h3><a href="#">Neurology Sargery</a></h3>
                                <p>Specializes in the diagnosis and treatment of disorders of the nervous system.</p>
                                <a class="service-link" href="specialties">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-box text-center mb-30">
                            <div class="service-thumb">
                                <img src="img/services/service6.png" alt="">
                            </div>
                            <div class="service-content">
                                <h3><a href="#">Dermatology</a></h3>
                                <p>Deals with skin, hair, and nail disorders, including acne, eczema, and skin infections.</p>
                                <a class="service-link" href="specialties">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area end -->
        <section class="fact-area fact-map primary-bg pos-rel pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="section-title pos-rel mb-45">
                            <div class="section-text section-text-white pos-rel">
                                <h5>We are available 24/7</h5>
                                <h1 class="white-color">We Always Ready For A Challenge.</h1>
                            </div>
                        </div>
                        <div class="section-button section-button-left mb-30">
                            <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('user.appointments') }}"
                               class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-md-8">
                        <div class="cta-satisfied">
                            <div class="single-satisfied mb-50">
                                <h1>1M+</h1>
                                <h5><i class="fas fa-user"></i> Satisfied Patients</h5>
                                <p>Our app has left users satisfied and happy with its seamless functionality and user-friendly design. Join our community of satisfied users and experience the joy our app brings.</p>
                            </div>
                            <div class="single-satisfied mb-50">
                                <h1>100+</h1>
                                <h5><i class="far fa-thumbs-up"></i>Free and User-Friendly</h5>
                                <p>MediDove is not only cost-free but also designed with a simple interface for easy navigation, making it accessible and hassle-free for all users.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-area start -->
        <section class="team-area pt-115 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="section-title pos-rel mb-75">
                            <div class="section-icon">
                                <img class="section-back-icon back-icon-left" src="img/section/section-back-icon.png" alt="">
                            </div>
                            <div class="section-text pos-rel">
                                <h5>Our Team</h5>
                                <h1>A Professional & Care Provider</h1>
                            </div>
                            <div class="section-line pos-rel">
                                <img src="img/shape/section-title-line.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="section-button text-right d-none d-lg-block pt-80">
                            <a data-animation="fadeInLeft" data-delay=".6s" href="login" class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-box text-center mb-60">
                            <div class="team-thumb mb-45 pos-rel">
                                <img src="img/doctors/p5.jpg" alt="">
                                <a class="team-link" href="doctors">👀</a>
                            </div>
                            <div class="team-content">
                                <h3>D.walid khaddoum</h3>
                                <h6>Founder</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-box text-center mb-60">
                            <div class="team-thumb mb-45 pos-rel">
                                <img src="img/doctors/p4.jpg" alt="">
                                <a class="team-link" href="doctors">👀</a>
                            </div>
                            <div class="team-content">
                                <h3>Aissam Jadli</h3>
                                <h6>dentist</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-box text-center mb-60">
                            <div class="team-thumb mb-45 pos-rel">
                                <img src="img/doctors/p1.jpg" alt="">
                                <a class="team-link" href="doctors">👀</a>
                            </div>
                            <div class="team-content">
                                <h3>Ihsane molan</h3>
                                <h6>neurologist</h6>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- team-area end -->
        <!-- fact-area start -->


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
    </main>

<!-- JS here -->
<script src="{{ secure_secure_asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/popper.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/bootstrap.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/one-page-nav-min.js') }}"></script>
<script src="{{ secure_secure_asset('js/slick.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/ajax-form.js') }}"></script>
<script src="{{ secure_secure_asset('js/wow.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/waypoints.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ secure_secure_asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEEMx3XDpByNzYNn0n62Zsq_sVYPx1zY"></script>
<script src="{{ secure_secure_asset('js/plugins.js') }}"></script>
<script src="{{ secure_secure_asset('js/main.js') }}"></script>
</body>

</html>
