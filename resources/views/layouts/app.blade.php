<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paaila Institute - Empowering Your Future</title>
    <meta name="description"
        content="Paaila Institute offers computer training, skills development, internships, career counseling, and consultancy services to equip individuals with the tools for success in a global landscape.">
    <meta name="keywords"
        content="Paaila Institute, Computer Training, Skills Development, Internship, Career Counseling, Consultancy, Education Center, Career Growth, Skills Training">

    <meta property="og:title" content="Paaila Institute - Empowering Your Future">
    <meta property="og:description"
        content="Paaila Institute offers computer training, skills development, internships, career counseling, and consultancy services to equip individuals with the tools for success in a global landscape.">
    <meta name="og:image" content="{{asset("/logo/PAAILA_LOGO-01.png")}}">
    <meta property="og:url" content="https://paaila.edu.np">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Paaila Institute">
    <meta property="og:type" content="website">

    <meta name="twitter:title" content="Paaila Institute - Empowering Your Future">
    <meta name="twitter:description"
        content="Paaila Institute offers computer training, skills development, internships, career counseling, and consultancy services to equip individuals with the tools for success in a global landscape.">
    <meta name="twitter:image" content="{{asset("/logo/PAAILA_LOGO-01.png")}}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/logo/PAAILA_LOGO-07.png" />

    <!-- CSS here -->
    <link rel="stylesheet" href={{asset("/fontawesome-free-6.7.1-web/css/all.min.css")}} />
    <link rel="stylesheet" href={{asset("/css/bootstrap.min.css")}} />
    <link rel="stylesheet" href={{asset("/css/venobox.min.css")}} />
    <link rel="stylesheet" href={{asset("/css/animate.min.css")}} />
    <link rel="stylesheet" href={{asset("/css/keyframe-animation.css")}} />
    <link rel="stylesheet" href={{asset("/css/odometer.min.css")}} />
    <link rel="stylesheet" href={{asset("/css/nice-select.css")}} />
    <link rel="stylesheet" href={{asset("/css/daterangepicker.css")}} />
    <link rel="stylesheet" href={{asset("/css/swiper.min.css")}} />
    <link rel="stylesheet" href={{asset("/css/main.css")}} />
    <link rel="stylesheet" href={{asset("/css/custom.css")}} />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="tu-preloader">
        <div class="tu-preloader_holder">
            <img src="/logo/PAAILA_LOGO-07.png" alt="laoder img" />
            <div class="tu-loader"></div>
        </div>
    </div>

    <x-header />

    <div class="mobile-side-menu">
        <div class="side-menu-content">
            <div class="side-menu-head">
                <a href="/"><img src="/logo/PAAILA_LOGO-01.png" alt="logo" /></a>
                <button class="mobile-side-menu-close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="side-menu-wrap"></div>
            <ul class="side-menu-list">
                <li>
                    <i class="fa-solid fa-location-dot"></i>Address :
                    <span>Pyangaun, Lalitpur</span>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>Phone :
                    <a href="tel:+977-9851326399">+977-9851326399</a>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>Email :
                    <a href="mailto:hello@paaila.edu.np">hello@paaila.edu.np</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.mobile-side-menu -->
    <div class="mobile-side-menu-overlay"></div>

    @yield('content')

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top">
            <i class="fa-solid fa-chevron-up"></i>
        </button>
    </div>
    <!--scrollup-->

    <x-footer />

    <!-- JS here -->
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/jquary-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('js/venobox.min.js') }}"></script>
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/meanmenu.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.js') }}"></script>
    <script src="{{ asset('js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>