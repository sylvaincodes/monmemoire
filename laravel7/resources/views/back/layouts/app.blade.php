<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- BEGIN: Head-->
<head>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Admin - @yield('title') </title>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    @notifyCss
    
    {{-- Polices--}}
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    
    {{-- Icons --}}
    <link rel="stylesheet" type="text/css" href="{{asset('back/fonts/feather/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('back/fonts/flag-icon-css/css/flag-icon.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('back/fonts/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css/app-lite.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css/components-lite.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css/modal.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css/custom.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('front/libs/autocomplete/easy-autocomplete.css')}}">
    
</head>
<!-- END: Head-->

<body @yield('body-class') class="vertical-layout vertical-menu 2-columns menu-hide fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-primary" data-col="2-columns">
    
    @include('notify::components.notify')
    
    @include('back.layouts.partials.header')

    @include('back.layouts.partials.leftsidebar')
    
    <div class="app-content content">

        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            
            @yield('breadcrumb') 
            
            <div class="content-body">
                
                @yield('content') 
                
            </div>
            
        </div>
    </div>
    
    
    @include('back.layouts.partials.footer')
    
    <script src="{{ asset('front/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('front/libs/toast/toast.js')}}"></script>
    <script src="{{asset('back/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/js/core/app-lite.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/js/scripts/pages/dashboard-lite.js')}}" type="text/javascript"></script>
    <script src="{{ asset('front/libs/autocomplete/jquery.easy-autocomplete.js')}}"></script>
    <script src="{{ asset('back/js/autocomplete.js')}}"></script>
    <script src="{{asset('back/js/script.js')}}" type="text/javascript"></script>
    @notifyJs
    @yield('script')
</body>
</html>
