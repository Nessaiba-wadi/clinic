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
    <!-- hero-area start -->
    <!-- hero-area end -->
    <!-- about-area start -->
    <!-- about-area end -->
    <!-- calculate-area start -->
    <section class="appointment-area appointment-area-3 pos-rel pt-115 pb-120"
             data-background="{{ secure_asset('img/appoinment/appointment-bg.jpg') }}">
        <div class="container">

            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <form method="post" action="{{ route('update-profile') }}">
                                    @csrf
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Firstname *</label>
                                                    <input id="form_name" type="text" name="FirstName" class="form-control"
                                                           placeholder="Please enter your firstname *"
                                                           required="required" data-error="Firstname is required."
                                                           value="{{ auth()->user()->patient->first_name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Last Name *</label>
                                                    <input id="form_name" type="text" name="LastName" class="form-control"
                                                           placeholder="Please enter your firstname *"
                                                           required="required" data-error="Firstname is required."
                                                           value="{{ auth()->user()->patient->last_name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Email</label>
                                                    <input id="form_lastname" type="text"
                                                           class="form-control"
                                                           placeholder="Please enter your lastname *"
                                                           required="required" data-error="Lastname is required."
                                                           value="{{ auth()->user()->email }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Phone Number</label>
                                                    <input id="form_lastname" type="text" name="phoneNumber"
                                                           class="form-control"
                                                           placeholder="Please enter your lastname *"
                                                           required="required" data-error="Lastname is required."
                                                           value="{{ auth()->user()->patient->phone_number }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Birth Date</label>
                                                    <input id="form_lastname" type="date" name="Birth_date"
                                                           class="form-control"
                                                           placeholder="Please enter your lastname *"
                                                           required="required" data-error="Lastname is required."
                                                           value="{{ auth()->user()->patient->date_of_birth }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Gender</label>
                                                    <div>
                                                        <select name="gender" id="gender">
                                                            @if(auth()->user()->patient->gender == "H")
                                                                <option value="H" selected>Homme</option>
                                                                <option value="F">Femme</option>
                                                            @else
                                                                <option value="H">Homme</option>
                                                                <option value="F" selected>Femme</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_reason">Address</label>
                                                    <textarea id="form_reason" name="adresse" class="form-control"
                                                              placeholder="Write your Adresse here." rows="4"
                                                              required="required"
                                                              data-error="Please, leave us a reason.">{{ auth()->user()->patient->address }}</textarea>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Update the profile">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- calculate-area end -->
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
