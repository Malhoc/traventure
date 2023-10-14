@extends('layouts.master')

@section('content')
     <!--Wishlist Section-->
     <section class="wishlist-section">
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="wishlist-outer" style="margin-top: 70px">
                <div class="table-outer">
                    <div class="table-box">
                        <table class="wishlist-table">
                            <tbody>
                                @forelse ($bookings as $booking)
                                <tr>
                                    <td class="prod-column image-column">
                                        <div class="image-box">
                                            <figure class="prod-thumb"><a href="#"><img src="{{ asset('storage') }}/{{$booking->tour->thumbnail}}" alt=""></a></figure>
                                        </div>
                                    </td>
                                    <td class="prod-column info-column">
                                        <div class="info-box">
                                            <h4 class="prod-title">{{$booking->tour->title}}</h4>
                                            <div class="price">Price : <span>${{$booking->price}}</span></div>
                                            <div class="price">Booking # : <span>{{$booking->id}}</span></div>
                                            <div class="date">{{date('d M Y', strtotime($booking->created_at))}}</div>
                                        </div>
                                    </td>
                                    <td class="avail">
                                        <div class="yes">Status</div>
                                        <div class="add-btn"><a href="#" class="theme-btn add-cart-btn"><span>{{$booking->status}}</span></a></div>
                                    </td>
                                </tr>
    @empty
        <p>No Boking.</p>
    @endforelse


                            </tbody>
                        </table>
                    </div>

                    {{-- <div class="wishlist-lower clearfix">
                        <div class="left clearfix">
                            <div class="link-title">Wishlist Link</div>
                            <div class="link-form clearfix">
                                <div class="field">
                                    <input type="text" name="coupon-code" value="" placeholder="https://themeforest.net/">
                                </div>
                                <div class="button">
                                    <button type="button" class="theme-btn btn-style-two"><span>Copy Link</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="share clearfix">
                            <div class="share-title">share on : </div>
                            <ul class="share-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Section-->
@endsection
