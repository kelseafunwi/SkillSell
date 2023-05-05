@extends('layout.structure')

@section('shouldLoginLinkDisplay', 'd-none')

@section('page-title', 'Counts')

{{-- @section('about-active', 'active'); --}}

@section('page-link-name', "Website Information")

@section('content')
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts mt-space">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
            <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
                <div class="content d-flex flex-column justify-content-center">
                <h3>SkillzSell Usage information</h3>
                <p>
                   Information about the website
                </p>
                <div class="row">
                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
                        <p><strong>Number of Clients</strong></p>
                    </div>
                    </div>

                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                        <p><strong>Number of Jobs</strong></p>
                    </div>
                    </div>

                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-clock"></i>
                        <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
                        <p><strong>Number of Users</strong></p>
                    </div>
                    </div>

                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                        <p><strong>Number of Active Users</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                    </div>
                    </div>
                </div>
                </div><!-- End .content-->
            </div>
            </div>

        </div>
    </section><!-- End Counts Section -->
@endsection
