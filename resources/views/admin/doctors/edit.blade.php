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
            height: 60px
        }

        .basic-login input[type='checkbox'] {
            height: auto;
        }

        .flex-container {
            display: -webkit-box;
            align-items: center;
        }
        .profile-img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 50%;
            object-fit: cover;
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
                        <h3 class="text-center mb-60">Update doctor {{ $doctor->first_name }} {{ $doctor->last_name }} Profile</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('doctors.update', $doctor) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label for="picture_profile">Profile Picture:</label>
                            <img class="profile-img" src="{{ asset('storage/'.$doctor->picture_profile) }}" alt="Doctor's Profile Picture">
                            <input type="file" id="picture_profile" name="picture_profile">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">Firstname *</label>
                                        <input id="first_name" type="text" name="first_name" class="form-control"
                                               placeholder="Please enter firstname *"
                                               required="required" data-error="Firstname is required."
                                               value="{{ old('first_name', $doctor->first_name) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name *</label>
                                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $doctor->last_name) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Gender</label>
                                        <select id="gender" name="gender">
                                            <option value="">Select...</option>
                                            <option value="Male" @if(old('gender', $doctor->gender) == 'Male') selected @endif>Male</option>
                                            <option value="Female" @if(old('gender', $doctor->gender) == 'Female') selected @endif>Female</option>
                                            <option value="Other" @if(old('gender', $doctor->gender) == 'Other') selected @endif>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Qualification:</label>
                                        <input type="text" id="qualification" class="form-control" name="qualification" value="{{ old('qualification', $doctor->qualification) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_birth">Birth Date</label>
                                        <input id="date_of_birth"
                                               type="date"
                                               name="date_of_birth"
                                               class="form-control"
                                               placeholder="Please enter your Date of birth *"
                                               required="required" data-error="Date of Birth is required."
                                               value="{{ old('date_of_birth', $doctor->date_of_birth) }}">                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input id="phone_number"
                                               type="text"
                                               name="phone_number"
                                               class="form-control"
                                               placeholder="Please enter your Date of birth *"
                                               required="required" data-error="Date of Birth is required."
                                               value="{{ old('phone_number', $doctor->phone_number) }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_reason">Address</label>
                                        <textarea id="address"
                                                  name="address"
                                                  style="width: 590px" class="form-control"
                                                  placeholder="Write your Adresse here." rows="1"
                                                  required="required"
                                                  data-error="Please, leave us a reason.">{{ old('address', $doctor->address) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_reason">Bio</label>
                                        <textarea id="bio"
                                                  name="bio"
                                                  style="width: 590px" class="form-control"
                                                  placeholder="Write your Adresse here." rows="4"
                                                  required="required"
                                                  data-error="Please, leave us a reason.">{{ old('bio', $doctor->bio) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10"></div>
                            <label for="pass">years_of_experience <span>*</span></label>
                            <input type="number" id="years_of_experience" name="years_of_experience" value="{{ old('years_of_experience', $doctor->years_of_experience) }}">
                            <label>Specialties:</label>
                            @foreach($specialities as $speciality)
                                <div class="flex-container">
                                    <input
                                        type="checkbox"
                                        name="specialties[]"
                                        value="{{ $speciality->id }}"
                                        @if($doctor->specialties->contains($speciality)) checked @endif
                                    >
                                    <label>{{ $speciality->specialty_name }}</label>
                                </div>
                            @endforeach



                            <div class="mt-10"></div>
                            <button type="submit" class="btn theme-btn-2 w-100">Update</button>
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
