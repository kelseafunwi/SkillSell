<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SkillzSell | @yield('title')</title>
    <meta content="Website that helps you offer and receive services for money" name="description">
    <meta content="SkillSell, finding jobs and making money in Cameroon" name="keywords">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="   /vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/vendor/aos/aos.css">
        <link rel="stylesheet" href="/vendor/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="/vendor/fontawesome-free/all.css">
        <link rel="stylesheet" href="/vendor/boxicons/css/boxicons.min.css" >
        <link rel="stylesheet" href="/vendor/remixicon/remixicon.css">
        <link rel="stylesheet" href="/vendor/glightbox/css/glightbox.min.css">
        <link rel="stylesheet" href="/vendor/swiper/swiper-bundle.min.css">

        <!-- My styles -->
        <link rel="stylesheet" href="/css/main.css">

        @yield("links")
        <link rel="stylesheet" href="/css/pages.css">
</head>

<body>

    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

     <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="/vendor/aos/aos.js"></script>
     <script src="/vendor/glightbox/js/glightbox.min.js"></script>
     <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
     <script src="/vendor/php-email-form/validate.js"></script>
     <script src="/vendor/swiper/swiper-bundle.min.js"></script>
     <script src="/vendor/purecounter/purecounter_vanilla.js"></script>

    <script src="/js/main.js"></script>
    <script>
        @yield('scripts-text')
    </script>
    @yield("scripts")
</body>

</html>
