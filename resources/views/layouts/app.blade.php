
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    {{--<!-- Fonts -->--}}
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}
    {{--<title>@yield('title')</title>--}}
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">--}}
    {{--<link href="https://omi-book-meeting.ominext.co/libs/animate-css/animate.min.css" rel="stylesheet" />--}}
    {{--<link href="https://omi-book-meeting.ominext.co/libs/pace/pace.css" rel="stylesheet" />--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--}}
    {{--<link href="https://omi-book-meeting.ominext.co/css/template.css" rel="stylesheet" type="text/css">--}}
    {{--<link href="https://omi-book-meeting.ominext.co/css/style-responsive.css" rel="stylesheet">--}}

    {{--<!-- jQuery library -->--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
<head>
    <meta charset="UTF-8">
    <title>Book Meeting | Ominext</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Ominext Creative">
    <!-- Base Css Files -->

    {{--<link href="https://omi-book-meeting.ominext.co/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/jquery-ui-1.10.4.custom.min.css') }}" rel="stylesheet"/>
    {{--<link href="https://omi-book-meeting.ominext.co/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/bootstrap.min.css') }}" rel="stylesheet"/>

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">--}}
    {{--<link href="https://omi-book-meeting.ominext.co/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/font-awesome.min.css') }}" rel="stylesheet"/>

    {{--<link href="https://omi-book-meeting.ominext.co/libs/fontello/css/fontello.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/fontello.css') }}" rel="stylesheet"/>

    {{--<link href="https://omi-book-meeting.ominext.co/libs/animate-css/animate.min.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/animate.min.css') }}" rel="stylesheet"/>

    {{--<link href="https://omi-book-meeting.ominext.co/libs/nifty-modal/css/component.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/component.css') }}" rel="stylesheet"/>

    {{--<link href="https://omi-book-meeting.ominext.co/libs/magnific-popup/magnific-popup.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/magnific-popup.css') }}" rel="stylesheet"/>


    {{--<link href="https://omi-book-meeting.ominext.co/libs/pace/pace.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/pace.css') }}" rel="stylesheet"/>

    {{--<link href="https://omi-book-meeting.ominext.co/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/sortable-theme-bootstrap.css') }}" rel="stylesheet"/>

    <link href="https://omi-book-meeting.ominext.co/libs/jquery-icheck/skins/all.css" rel="stylesheet"/>
    {{--<link href="{{ URL::asset('../assets/css/jquery-ui-1.10.4.custom.min.css') }}" rel="stylesheet"/>--}}

    <!-- Code Highlighter for Demo -->
    {{--<link href="https://omi-book-meeting.ominext.co/libs/prettify/github.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/github.css') }}" rel="stylesheet"/>

    {{--<link href="https://omi-book-meeting.ominext.co/libs/jquery-notifyjs/styles/metro/notify-metro.css" rel="stylesheet" type="text/css"/>--}}
    <link href="{{ URL::asset('../assets/css/notify-metro.css') }}" rel="stylesheet"/>

    <!-- Extra CSS Libraries Start -->
    {{--<link href="https://omi-book-meeting.ominext.co/libs/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>--}}
    <link href="{{ URL::asset('../assets/css/fullcalendar.css') }}" rel="stylesheet"/>

    {{--<link href="https://omi-book-meeting.ominext.co/css/template.css" rel="stylesheet" type="text/css"/>--}}
    <link href="{{ URL::asset('../assets/css/template.css') }}" rel="stylesheet"/>

    <!-- Extra CSS Libraries End -->

    {{--<link href="https://omi-book-meeting.ominext.co/css/style-responsive.css" rel="stylesheet"/>--}}
    <link href="{{ URL::asset('../assets/css/style-responsive.css') }}" rel="stylesheet"/>


    {{--<link rel="stylesheet" href="https://omi-book-meeting.ominext.co/libs/timepicker/jquery.timepicker.css">--}}
    <link href="{{ URL::asset('../assets/css/jquery.timepicker.css') }}" rel="stylesheet"/>

    {{--<link rel="stylesheet" href="https://omi-book-meeting.ominext.co/libs/timepicker/bootstrap-datepicker.css">--}}
    <link href="{{ URL::asset('../assets/css/bootstrap-datepicker.css') }}" rel="stylesheet"/>

    {{--<link rel="stylesheet" href="https://omi-book-meeting.ominext.co/libs/css/datetimepicker/datetimepicker.css">--}}
    <link href="{{ URL::asset('../assets/css/datetimepicker.css') }}" rel="stylesheet"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        body.modal-open {
            overflow: hidden;
        }
        .modal-backdrop{
            height: 1000px;
        }
        #search_event{
            padding-bottom: 15px;
        }
        .lblErrContentReport{
            display:none;
        }
        @media  screen and (min-width: 1000px) {
            .cl-start-time{
                padding-left: 0px;
            }
            .cl-text-search{
                padding-right: 0px;
            }
            .cl-button-search{
                padding-left: 0px;
                padding-right: 0px;
            }
        }
        @media  screen and (max-width: 768px) {
            .cl-start-time,.cl-end-time, .cl-text-search, .cl-button-search, .cl-button-search-room{
                padding-bottom: 10px;
                padding-left: 0px;
                padding-right: 0px;
            }
        }
    </style>

    <script type="text/javascript">
        var SITE_ROOT = 'https://omi-book-meeting.ominext.co/'
        var FULL_SITE_ROOT = 'https://omi-book-meeting.ominext.co/'
    </script>

    <script src="https://omi-book-meeting.ominext.co/js/html5shiv.js"></script>
    <script src="https://omi-book-meeting.ominext.co/js/respond.min.js"></script>

    <style type="text/css">
        .lblErrSummary, .lblErrStart, .lblErrEnd, .lblErrRoomName, .lblErrGroupName, .lblErrEmail {
            display: none;
            text-align: center;
        }
    </style>
</head>
<body class="fixed-left login-page  vsc-initialized pace-done widescreen">
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>--}}
{{--<script src="/omi-booking/resources/js/init.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.js"></script>
{{--<script src="https://omi-book-meeting.ominext.co/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>--}}
<script src="{{ URL::asset('../assets/js/jquery-ui-1.10.4.custom.min.js') }}"></script>
{{--<script src="https://omi-book-meeting.ominext.co/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>--}}
<script src="{{ URL::asset('../assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="https://omi-book-meeting.ominext.co/libs/jquery-detectmobile/detect.js"></script>
<script src="https://omi-book-meeting.ominext.co/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
<script src="{{ URL::asset('../assets/js/jquery.animateNumbers.js') }}"></script>
<script src="https://omi-book-meeting.ominext.co/libs/ios7-switch/ios7.switch.js"></script>
{{--<script src="https://omi-book-meeting.ominext.co/libs/fastclick/fastclick.js"></script>--}}
<script src="{{ URL::asset('../assets/js/fastclick.js') }}"></script>
{{--<script src="https://omi-book-meeting.ominext.co/libs/jquery-blockui/jquery.blockUI.js"></script>--}}
<script src="{{ URL::asset('../assets/js/jquery.blockUI.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/bootstrap-bootbox/bootbox.min.js"></script>--}}
<script src="{{ URL::asset('../assets/js/bootbox.min.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/jquery-slimscroll/jquery.slimscroll.js"></script>--}}
<script src="{{ URL::asset('../assets/js/jquery.slimscroll.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/jquery-sparkline/jquery-sparkline.js"></script>--}}
<script src="{{ URL::asset('../assets/js/jquery-sparkline.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/nifty-modal/js/classie.js"></script>--}}
<script src="{{ URL::asset('../assets/js/classie.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/nifty-modal/js/modalEffects.js"></script>--}}
<script src="{{ URL::asset('../assets/js/modalEffects.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/sortable/sortable.min.js"></script>--}}
<script src="{{ URL::asset('../assets/js/sortable.min.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>--}}
<script src="{{ URL::asset('../assets/js/bootstrap.file-input.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/bootstrap-select/bootstrap-select.min.js"></script>--}}
<script src="{{ URL::asset('../assets/js/bootstrap-select.min.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/bootstrap-select2/select2.min.js"></script>--}}
<script src="{{ URL::asset('../assets/js/select2.min.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/magnific-popup/jquery.magnific-popup.min.js"></script>--}}
<script src="{{ URL::asset('../assets/js/jquery.magnific-popup.min.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/pace/pace.min.js"></script>--}}
<script src="{{ URL::asset('../assets/js/pace.min.js') }}"></script>

{{--<script src="https://omi-book-meeting.ominext.co/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>--}}
<script src="{{ URL::asset('../assets/js/bootstrap-datepicker.js') }}"></script>

<script src="https://omi-book-meeting.ominext.co/libs/jquery-icheck/icheck.min.js"></script>
{{--<script src="{{ URL::asset('../assets/js/icheck.min.js') }}"></script>--}}

</body>
</html>
{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    {{--<!-- Fonts -->--}}
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="app">--}}
    {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
        {{--<div class="container">--}}
            {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--{{ config('app.name', 'Laravel') }}--}}
            {{--</a>--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}

            {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="navbar-nav mr-auto">--}}

                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="navbar-nav ml-auto">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@guest--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                        {{--</li>--}}
                        {{--@if (Route::has('register'))--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--@else--}}
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                    {{--{{ __('Logout') }}--}}
                                {{--</a>--}}

                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                    {{--@csrf--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--@endguest--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--<main class="py-4">--}}
        {{--@yield('content')--}}
    {{--</main>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

