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
    <!-- hero-area start -->
    <!-- hero-area end -->
    <!-- team-area start -->
    <section class="team-area pt-115 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title pos-rel mb-75">
                        <div class="section-icon">
                            <img class="section-back-icon back-icon-left" src="img/section/section-back-icon.png"
                                 alt="">
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
                        <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('user.appointments') }}"
                           class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($doctors)
                    @foreach($doctors as $doctor)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="team-box text-center mb-60">
                                <div class="team-thumb mb-45 pos-rel">
                                    <img src="{{ $doctor->picture_profile }}" alt="">
                                    <a class="team-link favorite-link"
                                       href="#"
                                       data-id="{{ $doctor->id }}"
                                       style="background-color: {{ $doctor->isFavoritedBy(auth()->user()) ? 'rgb(225, 36, 84)' : 'rgb(143, 181, 105)' }};"
                                    >
                                        +
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h3><a href="{{ route('doctors.show', $doctor) }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</a></h3>
                                    @foreach($doctor->specialties as $specialty)
                                        <h6>{{ $specialty->specialty_name }}</h6>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Favorite Doctors.</p>
                @endif
            </div>
        </div>
    </section>
    <!-- team-area end -->
    <!-- fact-area start -->
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna
                                aliqua.</p>
                        </div>
                        <div class="single-satisfied mb-50">
                            <h1>100+</h1>
                            <h5><i class="far fa-thumbs-up"></i> World Awards</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna
                                aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-area end -->
    <!-- about-area start -->
    <section class="about-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-couter counter-box counter-box-white text-center mb-30">
                        <img src="img/counter/counter-icon-7.png" alt="">
                        <h1><span class="theme-color counter">540</span>+</h1>
                        <h6 class="green-color pb-20">Expert Doctors</h6>
                        <div class="counter-text mt-10">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                lab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-couter counter-box counter-box-white text-center mb-30">
                        <img src="img/counter/counter-icon-83.png" alt="">
                        <h1><span class="theme-color counter">899</span>+</h1>
                        <h6 class="green-color pb-20">Problem Solve</h6>
                        <span class="counter-shpae"></span>
                        <div class="counter-text mt-10">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                lab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-couter counter-box counter-box-white text-center mb-30">
                        <img src="img/counter/counter-icon-9.png" alt="">
                        <h1><span class="theme-color counter">100</span>+</h1>
                        <h6 class="green-color pb-20">Award Winner</h6>
                        <span class="counter-shpae"></span>
                        <div class="counter-text mt-10">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                lab.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area end -->
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
<script>
    document.querySelectorAll('.favorite-link').forEach((link) => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // prevent the default link click action
            const doctorId = this.dataset.id;

            fetch(`/unfavorite-doctor/${doctorId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        this.closest('.col-xl-4').remove();  // remove the doctor card from the UI
                    }
                });
        });
    });
</script>
</body>
</html>
