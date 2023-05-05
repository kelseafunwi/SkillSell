@extends('layout.structure')

@section('shouldLoginLinkDisplay', 'd-none')

@section('title', 'Job Create')

@section('job-active', 'active');

@section('page-link-name', "Website Information")

@section('content')
    <!-- ======= Job Create Section ======= -->
    <section class="job-create" id="job-create">
        <form action="/joboffers" method="POST">
            @csrf
            <div class="container mt-1">
                <div class="section-title">
                    <p>Job Creation Page</p>
                    <h2>Job Creation page</h2>
                </div>
                <div class="row justify-content-center offset-1 justify-content-between">
                    <div class="job-card d-flex">
                        <div class="col-md-2 d-flex align-items-center">
                            <h3>Job Title</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter the Job title Here" required>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Job Details</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <textarea class="form-control" placeholder="Enter the Job Description here" rows="5" name="details" id="details" autocomplete="on" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Category</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="text" name="category" class="form-control form-control-lg" placeholder="Enter the Job Offer Category" required>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Location</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="text" name="location" class="form-control form-control-lg" placeholder="Enter the Job Location" required>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Phone</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="number" name="phone" class="form-control form-control-lg" placeholder="Enter the phone numbers viewers of the job will use to reach you" required>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Salary</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="number" name="amount" class="form-control form-control-lg" placeholder="Amount you offer" required>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Website</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="text" name="website" class="form-control form-control-lg" placeholder="Website if any">
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Deadline</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="date" class="form-control form-control-lg" name="deadline">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center my-2">
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-lg">Create the Job</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
