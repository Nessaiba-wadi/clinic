<header>
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-0 col-md-7 offset-md-1">
                    <div class="header-info">
                        <span><i class="fas fa-phone"></i> +1 800 833 9780</span>
                        <span><i class="fas fa-envelope"></i> info@example.com</span>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="header-top-right-btn f-right">
                        <a href="appoinment.html" class="btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu-area -->
    <div class="header-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-5 d-flex align-items-center">
                    <div class="logo logo-circle pos-rel">
                        <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="header__menu f-right">
                        <nav id="mobile-menu">
                            <ul>
                                @guest
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('specialties') }}">Specialties</a></li>
                                    <li><a href="{{ route('doctors') }}">Doctors</a></li>
                                    <li><a href="{{ route('create-account') }}">Create Account</a></li>
                                @endguest

                                @auth
                                    @if(Auth::user()->role == 'patient')
                                        <li><a href="{{ route('user.appointments') }}">Appointments +</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('user.appointments.upcoming') }}">Upcoming
                                                        appointments</a></li>
                                                <li><a href="{{ route('user.appointments.passed') }}">Past
                                                        appointments</a></li>
                                                <li><a href="{{ route('user.appointments') }}">Book a new
                                                        appointment </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('specialties') }}">Specialties</a></li>
                                        <li><a href="{{ route('doctors') }}">Doctors</a></li>
                                        <li><a href="{{ route('user.favorites') }}">Favorites</a></li>
                                        <li><a href="{{ route('profile') }}">Profile</a></li>
                                        <li><a href="{{ route('logout') }}">Logout</a></li>
                                    @endif
                                @endauth

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
