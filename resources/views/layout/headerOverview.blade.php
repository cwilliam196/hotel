<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


  	{{-- <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" /> --}}

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="assets/css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="assets/css/cs-select.css">
	<link rel="stylesheet" href="assets/css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="assets/css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="assets/css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="{{url('/')}}">Hotel XYZ</a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li><a  href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/services')}}">Services</a></li>
                                <li><a href="{{url('/blog')}}">Blog</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            
        </div>
        <!-- end:fh5co-header -->

@yield('container')

<footer id="footer" class="fh5co-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="copyright">
                    <p><small>&copy; 2021 Hotel XYZ. <br> All Rights Reserved. <br>
                   Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Company</h3>
                        <ul class="link">
                            <li><a href="{{ url('/services')}}">Services</a></li>
                            <li><a href="{{ url('/blog')}}">Blog</a></li>
                            <li><a href="{{ url('/contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Our Facilities</h3>
                        <ul class="link">
                            <li>Resturant</li>
                            <li>Bars</li>
                            <li>Pick-up</li>
                            <li>Swimming Pool</li>
                            <li>Spa</li>
                            <li>Gym</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <ul class="social-icons">
                    <li>
                        <a href="#"><i class="icon-twitter-with-circle"></i></a>
                        <a href="#"><i class="icon-facebook-with-circle"></i></a>
                        <a href="#"><i class="icon-instagram-with-circle"></i></a>
                        <a href="#"><i class="icon-linkedin-with-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- Javascripts -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<!-- Dropdown Menu -->
<script src="assets/js/hoverIntent.js"></script>
<script src="assets/js/superfish.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="assets/js/jquery.countTo.js"></script>
<!-- Stellar Parallax -->
<script src="assets/js/jquery.stellar.min.js"></script>
<!-- Owl Slider -->
<!-- // <script src="js/owl.carousel.min.js"></script> -->
<!-- Date Picker -->
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="assets/js/classie.js"></script>
<script src="assets/js/selectFx.js"></script>
<!-- Flexslider -->
<script src="assets/js/jquery.flexslider-min.js"></script>

<script src="assets/js/custom.js"></script>
<script src="assets/js/google_map.js"></script>


</body>
</html>