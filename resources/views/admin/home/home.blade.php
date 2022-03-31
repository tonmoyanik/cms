@extends('master.admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Hello, <span>Welcome Here</span></h1>
                </div>
            </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /# column -->
    </div>
    <!-- /# row -->
    <section id="main-content">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-primary">
                            <div class="weather-widget">
                                <div id="weather-one" class="weather-one p-22"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="testimonial-widget-one p-17">
                                <div class="testimonial-widget-one owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <img class="testimonial-author-img"
                                                 src="" alt="" />
                                            <div class="testimonial-author">Anik Tonmoy</div>
                                            <div class="testimonial-author-position">Software Engineer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                minim veniam, quis
                                                nostrud exercitation <i class="fa fa-quote-right"></i>
                                            </div>
                                            <img class="testimonial-author-img"
                                                 src="assets/images/avatar/1.jpg" alt="" />
                                            <div class="testimonial-author">Anik Tonmoy</div>
                                            <div class="testimonial-author-position">Software Engineer
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /# column -->

            <!-- /# column -->
        </div>
        <!-- /# row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="year-calendar"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <!-- /# column -->
            <!-- /# row -->

    </section>

@endsection
