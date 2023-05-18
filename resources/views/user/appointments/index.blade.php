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
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <form method="post">
                                    @csrf
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Firstname *</label>
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                           placeholder="Please enter your firstname *"
                                                           required="required" data-error="Firstname is required."
                                                           value="{{ auth()->user()->patient->first_name }} {{ auth()->user()->patient->last_name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Phone Number</label>
                                                    <input id="form_lastname" type="text" name="surname"
                                                           class="form-control"
                                                           placeholder="Please enter your lastname *"
                                                           required="required" data-error="Lastname is required."
                                                           value="{{ auth()->user()->patient->phone_number }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_need">Please specify your need *</label>
                                                    <select name="specialty_id" id="specialty" class="form-control"
                                                            required="required" data-error="Please specify your need.">
                                                        <option value="" selected disabled>----- Select Speciality -----
                                                        </option>
                                                        @foreach($specialties as $specialty)
                                                            <option
                                                                value="{{ $specialty->id }}">{{ $specialty->specialty_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_need">Please specify your need *</label>
                                                    <select id="doctor_id" name="doctor_id" class="doctorListing1 form-control"
                                                            required="required" data-error="Please specify your need.">
                                                        <option selected disabled value="">---- Select The Doctor ----</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Appointment Date *</label>
                                                    <input type="date" name="appointment_date"
                                                           placeholder="Please enter your firstname *"
                                                           required="required" data-error="Firstname is required."
                                                           >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Appointment Time *</label>
                                                    <input
                                                           type="time" name="appointment_time"
                                                           class="form-control"
                                                           placeholder="Please enter your lastname *"
                                                           required="required" data-error="Lastname is required."
                                                           >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_reason">Reason *</label>
                                                    <textarea id="form_reason" name="reason" class="form-control"
                                                              placeholder="Write your reason here." rows="4"
                                                              required="required"
                                                              data-error="Please, leave us a reason."></textarea>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message">
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
    <!-- latest-news-area start -->
    <section class="latest-news-area pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title pos-rel mb-75">
                        <div class="section-icon">
                            <img class="section-back-icon back-icon-left" src="img/section/section-back-icon.png"
                                 alt="">
                        </div>
                        <div class="section-text pos-rel">
                            <h5>News</h5>
                            <h1>Get Every Single Updates Here.</h1>
                        </div>
                        <div class="section-line pos-rel">
                            <img src="img/shape/section-title-line.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                    <div class="section-button text-right pt-80">
                        <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                           class="btn btn-icon ml-0"><span>+</span>our
                            blog</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news-box mb-30">
                        <div class="latest-news-thumb mb-35">
                            <img src="img/blog/blog-thumb-1.jpg" alt="">
                        </div>
                        <div class="latest-news-content">
                            <div class="news-meta mb-10">
                                <span><a href="#" class="news-tag">Medical,</a></span>
                                <span><a href="#" class="news-tag">Medicine</a></span>
                            </div>
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, cons ectetur adidis dicolo
                                    wiran.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore
                                magna
                                aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news-box mb-30">
                        <div class="latest-news-thumb mb-35">
                            <img src="img/blog/blog-thumb-2.jpg" alt="">
                        </div>
                        <div class="latest-news-content">
                            <div class="news-meta mb-10">
                                <span><a href="#" class="news-tag">Medical,</a></span>
                                <span><a href="#" class="news-tag">Medicine</a></span>
                            </div>
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, cons ectetur adidis dicolo
                                    wiran.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore
                                magna
                                aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="recent-news-list mb-30">
                        <div class="latest-news-content singl-news news-border-bottom">
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, consectetur adidis.</a></h3>
                            <span class="meta-date"><i class="far fa-calendar"></i>23rd Jan 2019</span>
                            <span class="meta-date"><a href="#"><i class="far fa-comments"></i>33 Comments</a></span>
                        </div>
                        <div class="latest-news-content singl-news news-border-bottom">
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, consectetur adidis.</a></h3>
                            <span class="meta-date"><i class="far fa-calendar"></i>23rd Jan 2019</span>
                            <span class="meta-date"><a href="#"><i class="far fa-comments"></i>33 Comments</a></span>
                        </div>
                        <div class="latest-news-content singl-news ">
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, consectetur adidis.</a></h3>
                            <span class="meta-date"><i class="far fa-calendar"></i>23rd Jan 2019</span>
                            <span class="meta-date"><a href="#"><i class="far fa-comments"></i>33 Comments</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    // Use jQuery for simplicity, but you can use vanilla JS as well
    $(document).ready(function () {
        $('#specialty').change(function () {
            var specialty = $(this).val();
            if (specialty) {
                $.ajax({
                    url: '/get-doctors/' + specialty,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#doctor_id').empty();
                        $.each(data, function (key, value) {
                            $('#doctor_id').append('<option value="' + value.id + '">' + value.first_name + ' ' + value.last_name + '</option>');
                        });
                        $('#doctor_id').niceSelect('update');
                    }
                });
            }
        });

    });

    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '/book_appointment', // Update with the URL for your route
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.success,
                        willClose: () => {
                            location.reload();
                        }
                    })
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again.',
                    })
                }
            });
        });
    });
</script>
</body>

</html>
