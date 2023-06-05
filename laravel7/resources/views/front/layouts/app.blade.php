<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- BEGIN: Head-->
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Mon mémoire - @yield('title') </title>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=de vice-width, initial-scale=1" />
    @notifyCss

    {{-- Include core + vendor Styles --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('front/fonts/fonts.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('front/icons/remixicon.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('front/libs/toast/toast.min.css')}}"> 
    <link type="text/css" rel="stylesheet" href="{{ asset('front/libs/autocomplete/easy-autocomplete.css')}}">


</head>
<!-- END: Head-->

<body @yield('body-class')>
    @include('notify::components.notify')
    
    <div id="page">

        @include('front.layouts.partials.sidebar_mobile')

        @include('front.layouts.partials.header')
        
        @include('front.layouts.partials.searchcontainer')
 
        @yield('breadcrumb')
            
        <main id="page-content">
            
            @yield('content')
            
        </main>

        @include('front.layouts.partials.footer')

    </div>

    <script src="{{ asset('front/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('front/libs/toast/toast.js')}}"></script>
    <script src="{{ asset('front/libs/tooltip/tooltip.js')}}"></script>
    <script src="{{ asset('front/js/scripts.js')}}"></script>
    <script src="{{ asset('front/libs/autocomplete/jquery.easy-autocomplete.js')}}"></script>
    <script src="{{ asset('front/js/autocomplete.js')}}"></script>
    <script src="{{ asset('front/libs/jquery-ui/jquery-ui.js')}}"></script>
    @notifyJs
   

</body>
</html>
