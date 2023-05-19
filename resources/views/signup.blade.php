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
    <style>
        .nice-select {
            width: 270px;
        }
    </style>
</head>

<body>

<!-- header begin -->
@include('partials.header')
<!-- header end -->

<main>
    <!-- login Area Strat-->
    <section class="login-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Signup From Here</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register-patient') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_firstname">Firstname *</label>
                                        <input id="form_firstname" type="text" name="FirstName" class="form-control"
                                               placeholder="Please enter your firstname *"
                                               required="required" data-error="Firstname is required."
                                               value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Last Name *</label>
                                        <input id="form_name" type="text" name="LastName" class="form-control"
                                               placeholder="Please enter your firstname *"
                                               required="required" data-error="Firstname is required."
                                               value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Email</label>
                                        <input id="form_email"
                                               type="text"
                                               name="email"
                                               class="form-control"
                                               placeholder="Please enter your Email *"
                                               required="required" data-error="Email is required."
                                               value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone Number</label>
                                        <input id="form_phone"
                                               type="text"
                                               name="phoneNumber"
                                               class="form-control"
                                               placeholder="Please enter your lastname *"
                                               required="required" data-error="Lastname is required."
                                               value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Birth Date</label>
                                        <input id="form_lastname" type="date" name="date_of_birth" class="form-control" placeholder="Please enter your birth date *" required="required" data-error="Birth date is required." value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Gender</label>
                                        <div>
                                            <select name="gender" id="gender">
                                                    <option value="H">Homme</option>
                                                    <option value="F">Femme</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_reason">Address</label>
                                            <textarea id="form_reason"
                                                      name="adresse"
                                                      style="width: 590px" class="form-control"
                                                      placeholder="Write your Adresse here." rows="4"
                                                      required="required"
                                                      data-error="Please, leave us a reason."></textarea>
                                        </div>
                                </div>
                            </div>
                            <div class="mt-10"></div>
                            <label for="pass">Password <span>*</span></label>
                            <input id="pass" type="password" name="password" placeholder="Enter password..." />
                            <label for="pass">Confirm Password <span>*</span></label>
                            <input id="confirmpass" type="password" name="password_confirmation" placeholder="Enter password..." />
                            <div class="mt-10"></div>
                            <button type="submit" class="btn theme-btn-2 w-100">Register Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <a href="{{ route('login') }}" class="btn btn-icon-green w-100">login Now</a>
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
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
