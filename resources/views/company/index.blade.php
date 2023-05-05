@extends('layout.structure')

@section('shouldLoginLinkDisplay', 'd-none')

@section('companies-active', 'active')

@section('title', 'Company Main Page')

{{-- @section('about-active', 'active'); --}}

@section('page-link-name', "Website Information")

@section('content')
    <!-- ======= Company Section ======= -->
    <section class="company mt-space">
        <div class="container-fluid">
            <form action="/company" method="POST">
                @csrf
                <div class="row justify-content-center mx-auto">
                    <div class="col-md-8">
                        <div class="d-flex mb-2 job-search-bar justify-content-center">
                            <a href="/company/create" class="nav-link ">Create Company</a>
                            <a href="/joboffers/categories" class="nav-link">Company Categories</a>
                            <a href="/joboffers/status" class="nav-link">Internship Offers</a>
                            <a href="/joboffers/status" class="nav-link">Training Programs</a>
                        </div>
                        <div class="input-group" data-aos="fade-up">
                            <input type="text" name="companySearch" class="form-control search-input" placeholder="Search For A Company">
                            <button type="submit" data-aos="slide-left" class="btn btn-primary text-light">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container-fluid mt-4">
            <div class="row gy-2">
                @foreach ($company as $company)
                    <div class="col-md-4">
                        <div class="company-box">
                            <div class="row justify-content-center">
                                <div class="company-profile text-center">
                                    <img src="./img/team/team-1.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <h3>Company Name: {{ $company->company_name }}</h3>
                                <h3>Company Location: {{ $company->location }}</h3>
                                <h3>Company Description: </h3><p class="ms-4">{{ $company->description }}</p>
                                <h3>Company Website: <a href="{{ $company->company_website }}">Company Website</a></h3>
                                <h3>Company CEO: {{ $company->company_ceo }} </h3>
                                <h3>Company Phone: {{ $company->company_phone }} </h3>
                                <h3>Company Category: {{ $company->category }}</h3>
                                <h3>Company Creation date: {{ $company->created_at }}</h3>
                                <div class="d-flex ">
                                    <a class="btn btn-primary " href="/company/{{ $company->id }}">View More</a>
                                    <form action="/company/{{ Auth::id() }}" method="POST">
                                        @csrf
                                        <button type="submit" class="ms-2 btn btn-primary">Edit Information</button>
                                    </form>
                                    <form action="/company/{{ Auth::id() }}" method="DELETE">
                                        @csrf
                                        <button type="submit"  class="ms-2 btn btn-danger">Delete Information</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Counts Section -->
@endsection
