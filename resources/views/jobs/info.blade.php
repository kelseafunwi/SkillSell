@extends('layout.structure')

@section('page-title', 'Counts')

@section('homepage-active', 'active')

@section('shouldLoginLinkDisplay', 'd-none')

{{-- @section('about-active', 'active'); --}}

@section('page-link-name', "Job Information")

@section('content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details mt-space">
        <div class="container">

        <div class="row gy-4">
            @if (@session('message'))
                <div class="alert alert-primary my-5" data-aos="fade-up">{{ @session('message') }}</div>
            @endif
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
                    <h3>Job information</h3>
                    <ul>
                    <li><strong>Title</strong>: {{ $JobPost->title }}</li>
                    <li><strong>Phone</strong>: {{ $JobPost->phone }}</li>
                    <li><strong>Deadline</strong>: {{ $JobPost->deadline }}</li>
                    <li><strong>Project URL</strong>: <a href="#">{{ $JobPost->website }}</a></li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>{{  $JobPost->category }}</h2>
                    <p>
                    {{ $JobPost->details }}\

                    @if (Auth::id() == $JobPost->creator_id)
                        <a href="/jobs/{{ $JobPost->id }}/edit" class="my-4 btn btn-primary">Edit Job Information</a>
                    @endif
                    </p>
                </div>
                </div>

        </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
