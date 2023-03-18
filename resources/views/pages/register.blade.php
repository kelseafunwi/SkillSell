<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Inner Page - Gp Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

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
        <link rel="stylesheet" href="/css/register.css">
</head>

<body>

    @extends('layout.header')

    <main id="main" class="mb-5">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Register</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Register</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                          </div>
          
                          <form>
                            <p>Please login to your account</p>
          
                            <div class="form-outline mb-4">
                              <input type="email" id="form2Example11" class="form-control"
                                placeholder="Phone number or email address" />
                              <label class="form-label" for="form2Example11">Username</label>
                            </div>
          
                            <div class="form-outline mb-4">
                              <input type="password" id="form2Example22" class="form-control" />
                              <label class="form-label" for="form2Example22">Password</label>
                            </div>
          
                            <div class="text-center pt-1 mb-5 pb-1">
                              <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                                in</button>
                              <a class="text-muted" href="#!">Forgot password?</a>
                            </div>
          
                            <div class="d-flex align-items-center justify-content-center pb-4">
                              <p class="mb-0 me-2">Don't have an account?</p>
                              <button type="button" class="btn btn-outline-danger">Create new</button>
                            </div>
          
                          </form>
          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                          <h4 class="mb-4">We are more than just a company</h4>
                          <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

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


        <!-- Template Main JS File -->
    <!-- My Js -->
    @yield("scripts")
    <script src="/js/main.js"></script>

</body>

</html>