<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title -->
        <title>MedicAssist - Virtual Doctor For Your Health.</title>

		<!-- Favicon -->
        <link rel="icon" href="{{asset('img/favicon.png')}}">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{asset('css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

		@vite(['resources/js/app.js', 'resources/css/app.css']) <!-- Include Vite assets -->
</head>
    </head>
    <body>


		@if (\Request::is('/'))
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator">
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		@endif

        @include('partials.header')

        @yield('body')

		@if (\Request::is('/'))
        	@include('partials.footer')
		@endif

		<!-- jquery Min JS -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- jquery Ui JS -->
		<script src="{{asset('js/jquery-ui.min.js')}}"></script>
		<!-- Easing JS -->
        <script src="{{asset('js/easing.js')}}"></script>
		<!-- Color JS -->
		<script src="{{asset('js/colors.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{asset('js/popper.min.js')}}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{asset('js/jquery.nav.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('js/slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
		<!-- Niceselect JS -->
		<script src="{{asset('js/niceselect.js')}}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{asset('js/tilt.jquery.min.js')}}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{asset('js/owl-carousel.js')}}"></script>
		<!-- counterup JS -->
		<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{asset('js/steller.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{asset('js/wow.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{asset('js/main.js')}}"></script>
		<!-- Anmie JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js" integrity="sha512-aNMyYYxdIxIaot0Y1/PLuEu3eipGCmsEUBrUq+7aVyPGMFH8z0eTP0tkqAvv34fzN6z+201d3T8HPb1svWSKHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/66c9bfa950c10f7a009ff4e0/1i6219btu';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
    <!--End of Tawk.to Script-->


    </body>
</html>
