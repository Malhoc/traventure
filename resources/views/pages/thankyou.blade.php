@extends('layouts.master')

@section('content')
    <div class="preloader"></div>
    <section class="not-found" style="margin-bottom: 30px">
        <div class="auto-container" style="margin-top: 250px">
            <div class="not-found-inner">
                <h2>Thank You, Your Booking is Confirmed !</h2>
                <div class="text">The page which you are looking for does not exist galley of type and scrambled it to make
                    a type specimen book. Please return to the homepage.</div>
                <div class="link-box" style="ma"><a href="{{ route('index') }}" class="theme-btn btn-style-two"><span>Go
                            Back Home<i class="icon far fa-angle-right"></i></span></a></div>
            </div>
        </div>
    </section>
@endsection
