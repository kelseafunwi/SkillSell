@extends('layout.structure')

@section('shouldLoginLinkDisplay', 'd-none')

@section('homepage-active', 'active')

@section('title', 'Job Create')

@section('job-active', 'active');

@section('links')
    <link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('page-link-name', "Website Information")

@section('content')
    <!-- ======= Job Create Section ======= -->
    <section class="job-create vh-100" id="job-create">
        <div class="tr-job-posted section-padding">
            <div class="container">
                <div class="job-tab text-center">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li role="presentation" class="active">
                            <a class="active show" href="#hot-jobs" aria-controls="hot-jobs" role="tab" data-toggle="tab" aria-selected="true">Hot Jobs</a>
                        </li>
                        <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab" data-toggle="tab" class="" aria-selected="false">Recent Jobs</a></li>
                        <li role="presentation"><a href="#popular-jobs" aria-controls="popular-jobs" role="tab" data-toggle="tab" class="" aria-selected="false">Popular Jobs</a></li>
                    </ul>
                    <div class="tab-content text-left">
                        <div role="tabpanel" class="tab-pane fade active show" id="hot-jobs">
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <div class="job-item">
                                        <div class="item-overlay">
                                            <div class="job-info">
                                                <a href="#" class="btn btn-primary">Full Time</a>
                                                <span class="tr-title">
                                                    <a href="#">Project Manager</a>
                                                    <span><a href="#">Dig File</a></span>
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                                </ul>
                                                <ul class="job-social tr-list">
                                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="company-logo">
                                                <img src="https://www.bootdey.com/image/300x100/7B68EE/000000" alt="images" class="img-fluid">
                                            </div>
                                            <span class="tr-title">
                                                <a href="#">Project Manager</a>
                                                <span><a href="#">Dig File</a></span>
                                            </span>
                                            <ul class="tr-list job-meta">
                                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                            </ul>
                                            <div class="time">
                                                <a href="#"><span>Full Time</span></a>
                                                <span class="pull-right">Posted 23 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="job-item">
                                        <div class="item-overlay">
                                            <div class="job-info">
                                                <a href="#" class="btn btn-primary">Part Time</a>
                                                <span class="tr-title">
                                                    <a href="#">Design Associate</a>
                                                    <span><a href="#">Loop</a></span>
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                                </ul>
                                                <ul class="job-social tr-list">
                                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="company-logo">
                                                <img src="https://www.bootdey.com/image/300x100/F0F8FF/000000" alt="images" class="img-fluid">
                                            </div>
                                            <span class="tr-title">
                                                <a href="#">Design Associate</a>
                                                <span><a href="#">Loop</a></span>
                                            </span>
                                            <ul class="tr-list job-meta">
                                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                            </ul>
                                            <div class="time">
                                                <a href="#"><span class="part-time">Part Time</span></a>
                                                <span class="pull-right">Posted 1 day ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="job-item">
                                        <div class="item-overlay">
                                            <div class="job-info">
                                                <a href="#" class="btn btn-primary">Freelance</a>
                                                <span class="tr-title">
                                                    <a href="#">Graphic Designer</a>
                                                    <span><a href="#">Humanity Creative</a></span>
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                                    <li><i class="fa fa-briefcase"      aria-hidden="true"></i>Mid Level</li>
                                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                                </ul>
                                                <ul class="job-social tr-list">
                                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="company-logo">
                                                <img src="https://www.bootdey.com/image/300x100/00FFFF/000000" alt="images" class="img-fluid">
                                            </div>
                                            <span class="tr-title">
                                                <a href="#">Graphic Designer</a>
                                                <span><a href="#">Humanity Creative</a></span>
                                            </span>
                                            <ul class="tr-list job-meta">
                                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                            </ul>
                                            <div class="time">
                                                <a href="#"><span class="freelance">Freelance</span></a>
                                                <span class="pull-right">Posted 10 day ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane -->
                    </div>
                </div><!-- /.job-tab -->
            </div><!-- /.container -->
        </div>
    </section>
@endsection

@section('scripts')
@endsection
