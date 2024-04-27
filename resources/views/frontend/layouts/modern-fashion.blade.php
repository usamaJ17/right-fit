<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" data-footer="dark">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | Toner - eCommerce + Admin HTML Template Build with HTML, React, Laravel, Nodejs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    <!-- head css -->
    @include('frontend.layouts.head-css')
</head>

<body>

    <!-- top tagbar -->
    @include('frontend.layouts.top-tagbar')
    <!-- topbar -->
    @include('frontend.layouts.topbar-fluid')

    @yield('content')

    <!-- footer -->
    @include('frontend.layouts.footer-fluid')
    <!-- scripts -->
    @include('frontend.layouts.vendor-scripts')
    @include('frontend.layouts.custom-scripts')

</body>

</html>
