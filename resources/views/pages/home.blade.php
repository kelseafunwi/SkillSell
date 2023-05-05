@extends('layout.structure')

@section('title', "Home page")

@section('links')
	<link rel="stylesheet" href="/css/pages.css">
@endsection

@section('content')
	<section class="mt-space jobs-section">
		<div class="container-fluid">
            <div class="row justify-content-center">
              
                <div class="col-md-6 d-flex">
                    <div class="item-wrapper d-flex justify-content-center">
                        <div class="col-md-8">
                            <h5 class="job-title text-primary">Job Offer</h5>
                            <p class="job-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, numquam quisquam natus consequatur alias, nobis placeat assumenda consectetur commodi exercitationem laboriosam. Velit deserunt voluptatum quam? Fugit eos veritatis facere totam?</p>
                            <a href="/job/1/info" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex">
                    <div class="item-wrapper d-flex justify-content-center">
                        <div class="col-md-8">
                            <h5 class="job-title text-primary">Job Offer</h5>
                            <p class="job-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, numquam quisquam natus consequatur alias, nobis placeat assumenda consectetur commodi exercitationem laboriosam. Velit deserunt voluptatum quam? Fugit eos veritatis facere totam?</p>
                            <a href="/job/1/info" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
@endsection

@section('scripts')

@endsection