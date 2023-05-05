@extends('layout.structure')

@section('homepage-active', 'active')


@section('linksClass', 'd-none')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                <h1>The path linking you to your riches.<span></span></h1>
                <h2>Receive and Offer Jobs to people from any where in Cameroon just by clicking</h2>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-right">
                <div class="col-md-8 m-3 justify-content-center">
                    <a class="btn btn-primary btn-lg" href="/login">Login </a> <a class="btn btn-primary btn-lg" href="/register">Register</a>
                </div>
            </div>
            <div class="row gy-4 mt-1 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <h2 class="text-light fs-1 fw-bold">Service Category</h2>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        {{-- <i class="ri-store-line"></i> --}}
                        <h3><a href="/jobs/agriculture">Agriculture</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        {{-- <i class="ri-bar-chart-box-line"></i> --}}
                        <h3><a href="/jobs/offer">Tech Related</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        {{-- <i class="ri-calendar-todo-line"></i> --}}
                        <h3><a href="">Medicine Field</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        {{-- <i class="ri-paint-brush-line"></i> --}}
                        <h3><a href="">Home Based</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        {{-- <i class="ri-database-2-line"></i> --}}
                        <h3><a href="">Entertainment</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="image col-lg-6" style='background-image: url("/img/features.jpg");' data-aos="fade-right"></div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bx bx-receipt"></i>
                    <h4>Posting</h4>
                    <p>Every User of the website has the ability to Posts to be done by Someone in the app</p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Sorting</h4>
                    <p>Jobs and Services will be offered to the User in priority with important constraint noted.  </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bx bx-images"></i>
                    <h4>Varieties</h4>
                    <p>There are jobs on any Category of the skills ranging from Agricultural, Computer Related, Teachings e.t.c</p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bx bx-shield"></i>
                    <h4>Exposure</h4>
                    <p>One of the most important functionality is the fact that, we expose you to the world out there where you meet very talented people with different skills to solve different problems</p>
                </div>
                </div>
            </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        This website help me a lot in finding the right people to hire in my Company and i'm really grateful for that.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                        <i class="b x bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>SkillzSell is an Intermediary creating a Link between your skills and money</h3>
                    <p class="fst-italic">
                        This website was created for the purpose of helping Cameroonians.
                        We Offer a wide variety of services such as:
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Internships Offers for Students and Learners of a particular field</li>
                        <li><i class="ri-check-double-line"></i> Sorting the right part time or Full time Job for you</li>
                        <li><i class="ri-check-double-line"></i> Making advertising of possible job offers very easy through the use of a post and a variety  of Capabilites for post writting.</li>
                    </ul>
                    <p>
                        House based Job Offers Such as Grass Cutting, Plating Hair, Cooking and Decoration e.t.c
                    </p>
                    <a href="/team" class="btn btn-info">View our Team</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Buea</p>
                    </div>

                    <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>funwikelseandohnwi@gmail.com</p>
                    </div>

                    <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+237 650476698</p>
                    </div>

                </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->
    </main>
@endsection
