<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- BEGIN: Head-->
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Mon mémoire - @yield('title') </title>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    {{-- Include core + vendor Styles --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('front/fonts/fonts.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('front/icons/remixicon.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/style.css')}}">

</head>
<!-- END: Head-->

<body @yield('body-class')>
    
    @include('front.layouts.partials.header')

    @yield('breadcrumb')

    <main id="page-content">
        <div class="container">
           
            @yield('content')
            
        </div>
    </main>

    @include('front.layouts.partials.footer')

</body>
</html>
