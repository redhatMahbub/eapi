<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">
<head>
    <title>Hasta - Responsive MultiPurpose HTML5 Template</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://www.google.com/fonts#UsePlace:use/Collection:Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Stylesheets -->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/frontend/js/bootstrap/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/js/mainmenu/menu.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/default.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/shortcodes.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('assets/frontend/css/responsive-leyouts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/js/masterslider/style/masterslider.css') }}" />
    <link href="{{ asset('assets/frontend/js/animations/css/animations.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/js/cubeportfolio/cubeportfolio.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/Simple-Line-Icons-Webfont/simple-line-icons.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/et-line-font/et-line-font.css') }}">
    <link href="{{ asset('assets/frontend/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/js/tabs/assets/css/responsive-tabs.css') }}" />



    <!-- Remove the below comments to use your color option -->
    <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
    <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="css/colors/violet.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
{{--    <link rel="stylesheet" href="{{ asset('assets/frontend/css/colors/mossgreen.css') }}" />--}}

</head>

<body>
<div class="site_wrapper">

    @include('layouts.frontend.partials.header')

    @yield('content')

    @include('layouts.frontend.partials.footer')

</div>
<!--end sitewraper-->



<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/universal/jquery.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/js/mainmenu/customeUI.js') }}"></script>
<script src="{{ asset('assets/frontend/js/mainmenu/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/frontend/js/masterslider/masterslider.min.js') }}"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        var slider = new MasterSlider();
        // adds Arrows navigation control to the slider.
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider' , {
            width:1600,    // slider standard width
            height:650,   // slider standard height
            space:0,
            speed:45,
            layout:'fullwidth',
            loop:true,
            preload:0,
            autoplay:true,
            view:"parallaxMask"
        });
    })(jQuery);
</script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/cubeportfolio/main.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl-carousel/custom.js') }}"></script>
<script src="{{ asset('assets/frontend/js/tabs/assets/js/responsive-tabs.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/tabs/smk-accordion.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/tabs/custom.js') }}"></script>
<script src="{{ asset('assets/frontend/js/scrolltotop/totop.js') }}"></script>

<script src="{{ asset('assets/frontend/js/scripts/functions.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.progress .progress-bar').progressbar({display_text: 'center', use_percentage: false});
    });
</script>
</body>
</html>
