<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Schyns Fitness Training / Real Health</title>

    <meta name="description" content="Pleasure is responsive, material admin dashboard panel">
    <meta name="author" content="Teamfox">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-touch-fullscreen" content="yes">

    <!-- BEGIN CORE CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin1/css/admin1.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/css/elements.css') }}">
    <!-- END CORE CSS -->

    <!-- BEGIN PLUGINS CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/rickshaw/rickshaw.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/bxslider/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/bootstrap-table/dist/bootstrap-table.min.css') }}">

    <!-- DATES STYLES -->
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/clockface/css/clockface.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <!-- END PLUGINS CSS -->

    <!-- TABLES STYLES -->
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/plugins/datatables/themes/bootstrap/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/globals/css/plugins.css') }}">
    <!-- END PLUGINS CSS -->

    <!-- BEGIN SHORTCUT AND TOUCH ICONS -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/globals/img/icons/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/globals/img/icons/apple-touch-icon.png') }}">
    <!-- END SHORTCUT AND TOUCH ICONS -->

    <script src="{{ URL::asset('assets/globals/plugins/modernizr/modernizr.min.js') }}"></script>
</head>
<body>

    <div class="nav-bar-container">

        <!-- BEGIN ICONS -->
        <div class="nav-menu">
            <div class="hamburger">
                <span class="patty"></span>
                <span class="patty"></span>
                <span class="patty"></span>
                <span class="patty"></span>
                <span class="patty"></span>
                <span class="patty"></span>
            </div><!--.hamburger-->
        </div><!--.nav-menu-->


        <div class="nav-bar-border"></div><!--.nav-bar-border-->

        <!-- BEGIN OVERLAY HELPERS -->
        <div class="overlay">
            <div class="starting-point">
                <span></span>
            </div><!--.starting-point-->
            <div class="logo">Real Health</div><!--.logo-->
        </div><!--.overlay-->

        <div class="overlay-secondary"></div><!--.overlay-secondary-->
        <!-- END OF OVERLAY HELPERS -->

    </div><!--.nav-bar-container-->

    <div class="content">

        <div class="page-header full-content">

@include('layouts.header')

        </div><!--.page-header-->

        <!--Codigo para mostrar alertas y mensajes de confirmación -->
@if (Session::has('message'))
    <div class="alert alert-success alert-dismissable" id = "alerta">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{Session::get('message')}}
    </div>
@endif

@yield('body')


@include('layouts.footer')

    </div><!--.content-->

    <div class="layer-container">

@include('layouts.sidebar')

        <!-- BEGIN SEARCH LAYER -->
        <div class="search-layer">

@include('layouts.search')

        </div><!--.search-layer-->
        <!-- END OF SEARCH LAYER -->

        <!-- BEGIN USER LAYER -->
        <div class="user-layer">

@include('layouts.settings')

        </div><!--.user-layer-->
        <!-- END OF USER LAYER -->

    </div><!--.layer-container-->




    <!-- BEGIN PLUGINS AREA -->
    <script src="{{ URL::asset('http://maps.google.com/maps/api/js?sensor=true&amp;libraries=places') }}"></script>
    <script src="{{ URL::asset('assets/globals/plugins/gmaps/gmaps.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/plugins/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/plugins/audiojs/audiojs/audio.min.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/plugins/d3/d3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/plugins/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/plugins/jquery-knob/excanvas.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/plugins/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/plugins/gauge/gauge.min.js') }}"></script>
    <!-- END PLUGINS AREA -->

    <!-- BEGIN GLOBAL AND THEME VENDORS -->
    <script src="{{ URL::asset('assets/globals/js/global-vendors.js') }}"></script>
    <!-- END GLOBAL AND THEME VENDORS -->

    <script src="{{ URL::asset('assets/globals/scripts/sliders.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/scripts/maps-google.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/scripts/widget-audio.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/scripts/charts-knob.js') }}"></script>
    <script src="{{ URL::asset('assets/globals/scripts/index.js') }}"></script>

    <!-- PLEASURE -->
    <script src="{{ URL::asset('assets/globals/js/pleasure.js') }}"></script>
    <!-- ADMIN 1 -->
    <script src="{{ URL::asset('assets/admin1/js/layout.js') }}"></script>



@yield('scripts')    

    <!-- BEGIN INITIALIZATION-->
    <script>
    $(document).ready(function () {
        Pleasure.init();
        Layout.init();

        Index.init();
        WidgetAudio.single();
        ChartsKnob.init();

    });
    </script>
    <!-- END INITIALIZATION-->

</body>
</html>