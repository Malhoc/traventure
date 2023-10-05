@extends('layouts.master')

@section('content')


        <!-- Banner Section -->
        <section class="inner-banner">
            <div class="image-layer" style="background-image: url({{ asset('assets/website') }}/images/background/banner-image-1.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Check Out</h2>
                    <div class="bread-crumb">
                        <ul class="clearfix">
                            <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                            <li class="current">Booking Payment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--CheckOut Page-->
        <section class="checkout-page">
            <div class="auto-container">

                <!--Checkout Details-->
                <div class="site-form">

                    <div class="billing-detail">

                        <div class="row clearfix">
                            <div class="billing-column col-lg-6 col-md-12 col-sm-12">
                                <form method="post" action="{{route('tours.booking.payment')}}">
                                    @csrf
                                    <div class="billing-form">
                                        <h4 class="checkout-title">Billing details</h4>
                                        <div class="row clearfix">
                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="f-label">First Name <i>*</i></div>
                                                <div class="field-inner">
                                                    <input type="text" name="first_name" value="{{$booking->name}}" placeholder="" required>
                                                </div>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="f-label">Last Name <i>*</i></div>
                                                <div class="field-inner">
                                                    <input type="text" name="last_name" required value="" placeholder="">
                                                </div>
                                            </div>


                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="f-label">Country / Region <i>*</i></div>
                                                <div class="field-inner">
                                                    <select name="country" required>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
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

                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="f-label">Street address <i>*</i></div>
                                                <div class="field-inner">
                                                    <input type="text" name="street_address" value="" required placeholder="">
                                                </div>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="f-label">Town / City <i>*</i></div>
                                                <div class="field-inner">
                                                    <input type="text" name="town_or_city" value="" required placeholder="">
                                                </div>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="f-label">Postcode / ZIP (optional)</div>
                                                <div class="field-inner">
                                                    <input type="text" name="zipcode" value="" placeholder="">
                                                </div>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="f-label">Phone <i>*</i></div>
                                                <div class="field-inner">
                                                    <input type="text" name="phone" value="{{$booking->phone}}" required placeholder="">
                                                </div>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="f-label">Email <i>*</i></div>
                                                <div class="field-inner">
                                                    <input type="email" name="email" value="{{$booking->email}}" required placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- <div class="billing-form">
                                        <h4 class="checkout-title">Billing details</h4>
                                        <div class="row clearfix">
                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="f-label">If you have a coupon, please apply it below.</div>
                                                <div class="field-inner">
                                                    <textarea name="field-name" placeholder=""></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div> --}}

                            </div>
                            <div class="order-column col-lg-6 col-md-12 col-sm-12">
                                <div class="order-box">
                                    <h4 class="checkout-title">Your Tour Package</h4>
                                    <div class="order-summary">
                                        <ul>
                                            <li class="sum-head clearfix">
                                                <span class="ttl">Tour / Product</span>
                                                <span class="dtl">Subtotal</span>
                                            </li>
                                            <li class="prod clearfix">
                                                <span class="ttl"><a href="{{route('tours.show', $booking->tour)}}">{{$booking->tour->title}}</a> (Guests : {{$booking->no_of_guests}})</span>
                                                <span class="dtl">${{$booking->tour->price}}</span>
                                            </li>
                                            {{-- <li class="prod clearfix">
                                                <span class="ttl">No. of Guests</a></span>
                                                <span class="dtl">{{$booking->no_of_guests}}</span>
                                            </li> --}}
                                            {{-- <li class="sub-total clearfix">
                                                <span class="ttl">Subtotal</span>
                                                <span class="dtl">${{$booking->tour->price * $booking->no_of_guests}}</span></li> --}}
                                            <li class="g-total clearfix">
                                                <span class="ttl">Total</span>
                                                <span class="dtl">${{$booking->tour->price * $booking->no_of_guests}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Payment Options-->
                                    <div class="payment-options">
                                        {{-- <ul>
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-1" checked>
                                                    <label for="payment-1"><strong>Check payment</strong></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-2" checked>
                                                    <label for="payment-2"><strong>Cash on delivery</strong></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-3">
                                                    <label for="payment-3"><strong>Paypal</strong></label>
                                                </div>
                                            </li>
                                        </ul> --}}
                                        <div class="agreement">
                                            <input type="checkbox" name="term_condition_agree" id="agree" required>
                                            <label for="agree">I agree with this <a href="terms-conditions.html">teams
                                                    and condition</a> *</label>
                                        </div>
                                        <div class="btn-box">
                                            <button type="submit" class="theme-btn btn-style-two"><span>Confirm Booking</span></button>
                                        </div>
                                    </div>
                                </form>
                                    <!--End Place Order-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Checkout Page -->
@endsection
