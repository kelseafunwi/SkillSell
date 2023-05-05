@extends('layout.structure')

@section('page-title', 'Counts')

{{-- @section('about-active', 'active'); --}}

@section('page-link-name', "Counts")

@section('content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details mt-space">
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
                    <li><strong>Company CEO Name</strong>: {{ $company->ceo  }}</li>
                    <li><strong>Company Name</strong>: {{ $company->company_name  }}</li>
                    <li><strong>Company Category</strong>: {{ $company->category }}</li>
                    <li><strong>Creation date</strong>: {{ $company->created_at }}</li>
                    <li><strong>Project URL</strong>: <a href="#">{{ $company->company_website }}</a></li>
                </ul>
            </div>
            <div class="portfolio-description">
                <h2> {{ $company->name }} </h2>
                <p>
                    {{ $company->description }}
                </p>
            </div>
            </div>

        </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
