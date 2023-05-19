@extends('layout.structure')

@section('shouldLoginLinkDisplay', 'd-none')

@section('homepage-active', 'active')

@section('title', 'Company Main Page')

{{-- @section('about-active', 'active'); --}}

@section('page-link-name', "Website Information")

@section('content')
    <!-- ======= Company Section ======= -->
    <section class="company mt-space">
        <div class="container-fluid">
            <form action="/jobs/search" method="GET">
                @csrf
                <div class="row justify-content-center mx-auto">
                    <div class="col-md-8">
                        <div class="d-flex mb-2 job-search-bar justify-content-center">
                            <a href="/jobs/create" class="nav-link ">Create Job</a>
                            <a href="/jobs/request" class="nav-link">Job Request</a>
                            <a href="/jobs/status" class="nav-link">Job Status</a>
                            <a href="/jobs/categories" class="nav-link">Job Categories</a>
                        </div>
                        <div class="input-group" data-aos="fade-up">
                            <input type="text" onchange="refreshOnChange();" name="jobTextfield" class="form-control search-input" placeholder="Search For A Job"
                            value="@isset($searchValue) ? {{$searchValue}} @endisset">
                            <button type="submit" data-aos="slide-left" class="btn btn-primary text-light">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container mt-5">
            <div class="row gy-2">
                {{-- @if (@session('message'))
                    <div data-aos="zoom-out" data-aos-delay="300" class="alert alert-primary">{{ @session('message') }}</div>
                @endif --}}
                @foreach ($JobPost as $job)
                    <div class="col-sm-12 col-md-4">
                        <div class="info-box">
                            <span class="small_text">Created at: {{ $job->created_at }}</span><br />
                            <span class="small_text">By: {{ $job->user->fullname }} {{ $job->user->lastname }}</a></span>
                            <h3 class="company-title">{{ $job->title }}<span></span></h3>
                            <p>
                                {{ $job->details }}
                                <br/><a class="nav-link text-start" title="Visit the Company website here" href="www.{{ $job->website }}">{{ $job->website ? "Visit Website": " " }}</a>
                                Location: {{ $job->location }}<br />
                                Category: {{ $job->category }}<br />
                                Amount: {{ $job->amount }} FCFA<br />
                                Deadline: {{ $job->deadline }}<br />
                                Phone: {{ $job->phone }}
                            </p>
                            <form method="POST" action="/jobs/{{ $job->id }}/delete" class="d-flex">
                                @csrf
                                <a href="/jobs/{{ $job->id }}" title="View more about this Company" class="btn btn-outline-primary">Details</a>
                                @if ($job->user_id == Auth::id())
                                    <a href="/jobs/{{ $job->id }}/edit" title="View more about this Company" class="mx-1 btn btn-outline-primary">Modify</a>
                                    <button type="submit" title="View more about this Company" class="btn btn-outline-danger">Delete Job</button>
                                @endif
                            </form>
                        </div>
                    </div>
                @endforeach

                <div class="row justify-content-md-end">
                    <div class="col-md-8 mt-2 justify-content-end">
                        {{ $JobPost->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Company Section -->
@endsection
