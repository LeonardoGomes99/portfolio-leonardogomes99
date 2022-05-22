<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/portfolio.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/maicons.css" rel="stylesheet">
    <link href="/css/minibar.virtual.css" rel="stylesheet">
    <link href="/css/themify-icons.css" rel="stylesheet">
    <link href="/css/topbar.virtual.css" rel="stylesheet">
    <link href="/css/virtual.css" rel="stylesheet">
</head>
<body>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('content')
</body>
<script src="/js/jquery-3.5.1.min.js"></script>
    
<script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
    
<script src="/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="/vendor/nice-select/js/jquery.nice-select.min.js"></script>

<script src="/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="/vendor/wow/wow.min.js"></script>

<script src="/vendor/animateNumber/jquery.animateNumber.min.js"></script>

<script src="/vendor/waypoints/jquery.waypoints.min.js"></script>

<script src="/js/google-maps.js"></script>

<script src="/js/topbar-virtual.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
</html>