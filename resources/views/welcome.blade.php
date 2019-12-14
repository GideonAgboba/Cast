@extends('layouts.app')
@section('title', 'Home')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{elixir('/assets/css/welcome.css')}}">
@stop
@section('content')
    <div class="main-header">
        <div class="row justify-content-center">
            <div class="col-md-9 text-center">
                <div class="pt50">
                    <div class="row justify-content-center text-center">
                        <div class="col-12 col-md-4 text-center">
                            <div class="counter_box text-center">
                                <span class="counter">12</span>
                                <h5>Years of experience</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <div class="counter_box text-center">
                                <span class="counter">257</span>
                                <h5>happy clients</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <div class="counter_box text-center">
                                <span class="counter">192</span>
                                <h5>projects completed</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search">
                    <input type="" placeholder="Enter Search Keyword..." name="">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{elixir('assets/img/bg/camera.jpg')}}">
            </div>
        </div>
    </div>
    <div class="portfolio">
        <div class="container-fluid">
            <!--=================== masaonry portfolio start====================-->
            <div class="grid img-container justify-content-center no-gutters">
                <div class="grid-sizer col-sm-12 col-md-6 col-lg-3"></div>
                <div class="grid-item branding  col-sm-12 col-md-6 col-lg-3">
                    <a href="assets/img/portfolio/home-port1.png" title="project name 1">
                        <div class="project_box_one">
                            <img src="assets/img/portfolio/home-port1.png" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-camera"></i>
                                        <h4>project name</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item  branding architecture  col-sm-12 col-md-6">
                    <a href="assets/img/portfolio/home-port2.png" title="project name 2">
                        <div class="project_box_one">
                            <img src="assets/img/portfolio/home-port2.png" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-camera"></i>
                                        <h4>project name</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item  design col-sm-12 col-md-6 col-lg-3">
                    <a href="assets/img/portfolio/home-port3.png" title="project name 5">
                        <div class="project_box_one">
                            <img src="assets/img/portfolio/home-port3.png" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-camera"></i>
                                        <h4>project name</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item  photography design col-sm-12 col-md-6 col-lg-3">
                    <a href="assets/img/portfolio/home-port4.png" title="project name 5">
                        <div class="project_box_one">
                            <img src="assets/img/portfolio/home-port4.png" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-camera"></i>
                                        <h4>project name</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item  branding photography  col-sm-12 col-md-6 col-lg-3">
                    <a href="assets/img/portfolio/home-port5.png" title="project name 5">
                        <div class="project_box_one">
                            <img src="assets/img/portfolio/home-port5.png" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-camera"></i>
                                        <h4>project name</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item   architecture design col-sm-12 col-md-6 col-lg-3">
                    <a href="assets/img/portfolio/home-port6.png" title="project name 5">
                        <div class="project_box_one">
                            <img src="assets/img/portfolio/home-port6.png" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-camera"></i>
                                        <h4>project name</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item  photography architecture col-sm-12 col-md-6 col-lg-3">
                    <a href="assets/img/portfolio/home-port7.png" title="project name 5">
                        <div class="project_box_one">
                            <img src="assets/img/portfolio/home-port7.png" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-camera"></i>
                                        <h4>project name</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item  branding design  col-sm-12 col-md-6 col-lg-3">
                    <a href="assets/img/portfolio/home-port8.png" title="project name 5">
                        <div class="project_box_one">
                            <img src="assets/img/portfolio/home-port8.png" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-camera"></i>
                                        <h4>project name</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item architecture  col-sm-12 col-md-6 col-lg-6">
                    <a href="assets/img/portfolio/home-port9.png" title="project name 4">
                        <div class="project_box_one">
                            <img src="assets/img/portfolio/home-port9.png" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-camera"></i>
                                        <h4>project name</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--=================== masaonry portfolio end====================-->
        </div>
    </div>
@stop