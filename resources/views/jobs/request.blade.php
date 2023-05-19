@extends('layout.structure')

@section('shouldLoginLinkDisplay', 'd-none')

@section('title', 'Job Create')


@section('homepage-active', 'active')

@section('page-link-name', "Website Information")

@section('content')
    <!-- ======= Job Create Section ======= -->
    <section class="job-create vh-100" id="job-create">
        <form action="/jobs">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <div class="row gx-2 justify-content-center">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" placeholder="Job Title" class="form-control form-control-lg">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" placeholder="Job Title" class="form-control form-control-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
