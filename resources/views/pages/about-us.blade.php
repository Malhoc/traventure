@extends('layouts.master')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/website') }}/images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>ABOUT US</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="{{route('index')}}">Home</a></li>
                        <li class="current">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--About Us Section-->
    <section class="about-three">
        <div class="floated-icon right"><img src="{{ asset('assets/website') }}/images/resource/hills-image.svg" alt="" title=""></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <h2>World Best Travel Agency</h2>
                        <div class="text upper-text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
                        <div class="f-blocks clearfix">
                            <div class="f-block">
                                <div class="inner-box">
                                    <div class="icon"><img src="{{ asset('assets/website') }}/images/resource/about-icon-1.svg" alt="" title=""></div>
                                    <h6>Expert Team for Support</h6>
                                </div>
                            </div>
                            <div class="f-block">
                                <div class="inner-box">
                                    <div class="icon"><img src="{{ asset('assets/website') }}/images/resource/about-icon-2.svg" alt="" title=""></div>
                                    <h6>Urgent Support for Client</h6>
                                </div>
                            </div>
                        </div>
                        <div class="quote-box">
                            <div class="quote">"Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives."</div>
                            <div class="quote-info clearfix">
                                <div class="image"><img src="{{ asset('assets/website') }}/images/resource/about-thumb-1.jpg" alt="" title=""></div>
                                <div class="info">
                                    <span class="name">Jonathon bLIL</span>
                                    <span class="designation">Founder of treker</span>
                                </div>
                                <div class="signature"><img src="{{ asset('assets/website') }}/images/resource/signature-1.png" alt="" title=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <img src="{{ asset('assets/website') }}/images/resource/about-image-3.svg" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
