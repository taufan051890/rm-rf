<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <title>rm -rf.Studio | @yield('title')</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

<!--Master Slider-->
<link href="{{ asset('css/masterslider/style/masterslider.css') }}" rel="stylesheet">
<link href="{{ asset('css/masterslider/skins/default/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/masterslider/style/ms-partialview.css') }}" rel="stylesheet">
<!--End Master Slider-->

<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header -->

    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')

    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>


<script src="{{ asset('js/jquery.js') }}"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<!--Master Slider-->
<script src="{{ asset('js/masterslider/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/masterslider/masterslider.js') }}"></script>
<!--End Master Slider-->
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
