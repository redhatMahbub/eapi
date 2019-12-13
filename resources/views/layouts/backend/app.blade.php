<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by themesbrand" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/morris/morris.css') }}">
    <link href="{{ asset('assets/backend/plugins/metro/MetroJs.min.css') }}" rel="stylesheet" >

    <!-- App css -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    @stack('css')
</head>

<body>

<!-- Top Bar Start -->
@include('layouts.backend.partials.header')
<!-- Top Bar End -->

<div class="page-wrapper">
    <!-- Left Sidenav -->
    @include('layouts.backend.partials.sidebar')
    <!-- end left-sidenav-->

    <!-- Page Content-->
    <div class="page-content">

        @yield('content')

        @include('layouts.backend.partials.footer')
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->


<!-- jQuery  -->
<script src="{{ asset('assets/backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/backend/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/waves.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery.slimscroll.min.js') }}"></script>

<!--Plugins-->
<script src="{{ asset('assets/backend/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/metro/MetroJs.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/jquery-knob/excanvas.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/backend/pages/jquery.dashboard.init.js') }}"></script>
<!-- App js -->
<script src="{{ asset('assets/backend/js/app.js') }}"></script>
@stack('js')
</body>
</html>