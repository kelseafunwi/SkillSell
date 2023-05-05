@extends('layout.structure')

@section('page-title', 'Services')

@section('people-active', 'active')

@section('page-link-name', "Services")


@section('content')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services mt-space">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Users Page</h2>
                <p>Check out the users of this website</p>
            </div>

            <div class="container-fluid">
                <form action="/people/search" method="POST">
                    @csrf
                    <div class="row justify-content-center mx-auto">
                        <div class="col-md-8">
                            <div class="input-group" data-aos="fade-up">
                                <input type="text" name="userSearch" class="form-control search-input" placeholder="Search For A User" value="{{ @session('searchvalue') ? @session('searchvalue') : "" }}">
                                <button type="submit" data-aos="slide-left" class="btn btn-primary text-light">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                @foreach ($users as $user)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="img-box">
                            <div class="image"><img src="/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                                <span>Name: </span><a class="text-primary" href="./people/{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</a><br />
                                <span>Email: </span><a class="text-primary" href="./people/1">{{ $user->email }}</a><br />
                                <span>Occupation: </span><a class="text-primary" href="./people/1">{{ $user->occupation }}</a><br />
                                <span>Rating: </span> <span><i class="bi text-warning bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></span><br />
                                <a href="/people/{id}/skills" class="fst-italic text-secondary">Skills</a>   <a class="fst-italic text-secondary" href="/people/{id}/post">Post</a>  <a class="fst-italic text-secondary" href="/people/{id}">Details</a>
                            <p></p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
