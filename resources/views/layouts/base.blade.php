<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Yobalema') }} | @yield('title') </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts.stylesheets')

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    @include('layouts.header')

    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- End Navbar -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
@include('layouts.sidebar')
<!-- End Sidebar-->

<main id="main" class="main">

    <!-- Start Content -->
    @yield('content')
    <!-- End Content -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('layouts.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

@include('layouts.scripts')

</body>

</html>
