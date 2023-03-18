<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/aos/aos.css">
    <link rel="stylesheet" href="/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/vendor/fontawesome-free/all.css">
    <link rel="stylesheet" href="/vendor/glightbox/css/glightbox.min.css">
    <link rel="stylesheet" href="/vendor/swiper/swiper-bundle.min.css">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- My styles -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/product.css">

    @yield("links")

    <title>Product page</title>
</head>
<body>
    <div class="d-flex bg-light text-dark">
        <ul class="navbar-nav justify-content-center flex-row w-100 d-flex">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="/v" class="nav-link">Anything</a></li>
            <li class="nav-item"><a href="/products/create" class="nav-link">Create-Product</a></li>
            <li class="nav-item"><a href="/products" class="nav-link">Product-Index</a></li>
        </ul>
    </div>
    <h3 class="display- text-light">Laravel 9 CRUD Application</h3>
    <div class="container text-light">
        <h3>@yield('title')</h3>
        @yield('content')
    </div>
</body>
</html>