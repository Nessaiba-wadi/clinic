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
    <!-- about-area start -->
    <!-- about-area end -->
    <!-- calculate-area start -->
    <section class="appointment-area appointment-area-3 pos-rel pt-115 pb-120"
             data-background="{{ asset('img/appoinment/appointment-bg.jpg') }}">
        <div class="container">

            <div class="row ">
                <div class="col-lg-12 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <h2>List Of Doctors</h2>

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>username</th>
                                        <th>email</th>
                                        <th>role</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>@if(is_null($user->deleted_at))
                                                    <span style="color: green">Active</span>
                                                @else
                                                    <span style="color: red">Non Active</span>
                                            @endif</td>
                                            <td>
                                                <form method="POST" action="{{ route('user.destroy', $user) }}" onsubmit="return confirm('Are you sure you want to delete this User? This action cannot be undone.')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-danger btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No Doctors found</td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- calculate-area end -->
    <!-- latest-news-area start -->
    <!-- latest-news-area end -->
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
