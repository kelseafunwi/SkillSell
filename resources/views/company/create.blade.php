@extends('layout.structure')

@section('shouldLoginLinkDisplay', 'd-none')

@section('title', 'Job Create')

@section('companies-active', 'active');

@section('page-link-name', "Website Information")

@section('content')
    <!-- ======= Job Create Section ======= -->
    <section class="job-create" id="job-create">
        <form action="/company" method="POST">
            @csrf
            <div class="container mt-1">w
                <div class="section-title">
                    <p>Company Registration Page</p>
                    <h2>Create your company here</h2>
                </div>
                <div class="row justify-content-center offset-1 justify-content-between">
                    <div class="job-card d-flex">
                        <div class="col-md-2 d-flex align-items-center">
                            <h3>Company Name</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter the Company name Here" required>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 d-flex align-items-center">
                            <h3>Ceo Name</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="text" name="ceo_name" class="form-control form-control-lg" placeholder="Enter the Company CEO name" required>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Company Details</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <textarea class="form-control" placeholder="Enter the Company Description here" rows="5" name="details" id="details" autocomplete="on" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Profile</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="file" name="company_picture" id="company_picture">
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Category</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="text" name="category" class="form-control form-control-lg" placeholder="Enter the Company Category" required>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Location</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="text" name="location" class="form-control form-control-lg" placeholder="Enter the Company Location" required>
                            </div>
                        </div>
                    </div>

                    <div class="job-card d-flex">
                        <div class="col-md-2 mb-auto">
                            <h3>Phone</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="number" name="phone" class="form-control form-control-lg" placeholder="Enter a Company Phone" required>
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
                            <h3>Tax ID No</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <input type="text" name="taskID" class="form-control form-control-lg" placeholder="Task Identification Number" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center my-2">
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-lg">Create the Company</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
