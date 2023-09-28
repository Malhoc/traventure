@extends('layouts.master')

@section('content')


    <!--Booking Section-->
    <section class="booking-section" style="margin-top: 50px">
        <div class="floated-icon left"><img src="{{ asset('assets/website') }}/images/resource/stones-left.svg" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('assets/website') }}/images/resource/stones-right-3.svg" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Book This Tour</span></h2>
                <div class="text">Contact us and get strapped in for a better adventure experience in your life-time. Just look for opportunity to be with nature. </div>
            </div>
            @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
            <div class="form-box site-form">
                <div class="booking-form">
                    <form method="post" action="{{route('booking.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Your Name <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="name" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Your Email <i>*</i></div>
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Your Phone <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="phone" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Country <i>*</i></div>
                                <div class="field-inner">
                                    <select name="country">
                                        <option value="USA">USA</option>
                                        <option value="China">China</option>
                                        <option value="Russia">Russia</option>
                                        <option value="UK">UK</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                    </select>
                                    <span class="alt-icon far fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Tour / Package <i>*</i></div>
                                <div class="field-inner">
                                    <select name="tour_id">
                                        @foreach ($tours as $tour)
                                        <option value="{{$tour->id}}">{{$tour->name}}</option>

                                        @endforeach
                                    </select>
                                    <span class="alt-icon far fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Date From <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" class="datepicker" name="date_from" value="" placeholder="" required>
                                    <span class="alt-icon fal fa-calendar fa-fw"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Number of Guest <i>*</i></div>
                                <div class="field-inner">
                                    <input type="number" name="no_of_guest" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Number of Children <i>*</i></div>
                                <div class="field-inner">
                                    <input type="number" name="no_of_child" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <h6>Our Rates</h6>
                                <div class="rates clearfix">
                                    <div class="rate-block">Adult: <span class="price">$120</span></div>
                                    <div class="rate-block">Children: <span class="price">$50</span></div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-two"><span>Submit Now<i class="icon far fa-angle-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--FAQs Section-->
    <section class="faq-one alternate">
        <div class="floated-icon left"><img src="{{ asset('assets/website') }}/images/resource/floated-icon-right-2.svg" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('assets/website') }}/images/resource/stones-right-3.svg" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Get Some Important Answer</span></h2>
            </div>
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="accordion-box clearfix">
                            <!--Block-->
                            <div class="accordion block active-block">
                                <div class="acc-btn active">What is Trekking? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do I need to carry? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">How concerned should I be about the altitude? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do we eat and drink while on trek? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="accordion-box clearfix">
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What is Trekking? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block active-block">
                                <div class="acc-btn active">What do I need to carry? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">How concerned should I be about the altitude? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do we eat and drink while on trek? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sponsors Section-->
    <section class="sponsors-one">
        <div class="auto-container">
            <div class="carousel-box">
                <div class="sponsors-carousel owl-theme owl-carousel">
                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-1.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-2.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-3.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-4.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-1.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-2.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-3.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-4.png" alt=""></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
