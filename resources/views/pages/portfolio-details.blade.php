<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SkillzSell</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Vendor Css styles -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/aos/aos.css">
    <link rel="stylesheet" href="/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/vendor/fontawesome-free/all.css">
    <link rel="stylesheet" href="/vendor/boxicons/css/boxicons.min.css" >
    <link rel="stylesheet" href="/vendor/remixicon/remixicon.css">
    <link rel="stylesheet" href="/vendor/glightbox/css/glightbox.min.css">
    <link rel="stylesheet" href="/vendor/swiper/swiper-bundle.min.css">


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- My styles -->
    <link rel="stylesheet" href="/css/main.css">

    @yield("links")
</head>

<body>

    @extends('layout.header')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfolio Details</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
            </div>

        </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                        <img src="/img/portfolio/portfolio-1.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                        <img src="/img/portfolio/portfolio-2.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                        <img src="/img/portfolio/portfolio-3.jpg" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: Web design</li>
                            <li><strong>Client</strong>: ASU Company</li>
                            <li><strong>Project date</strong>: 01 March, 2020</li>
                            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                        </p>
                    </div>
                </div>

            </div>

        </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    @extends('layout.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor Js -->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- My Js -->
    @yield("scripts")
    <script src="/js/main.js"></script>
</body>

</html>