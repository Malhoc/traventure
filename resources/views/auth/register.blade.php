@extends('layouts.master')

@section('content')
<!--Sign Up Section-->
<section class="signup-section">
    <div class="auto-container">
        <div class="form-box site-form">
            <div class="signup-form">
                <h5>Sign Up</h5>
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="row clearfix">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="f-label">User Name <i>*</i></div>
                            <div class="field-inner">
                                <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="f-label">Email Address <i>*</i></div>
                            <div class="field-inner">
                                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="f-label">Password <i>*</i></div>
                            <div class="field-inner">
                                <input type="password" name="password" required autocomplete="new-password"d>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="f-label">Re-Enter Password <i>*</i></div>
                            <div class="field-inner">
                                <input type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="theme-btn btn-style-two"><span>Sign Up<i
                                        class="icon far fa-angle-right"></i></span></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="lower-link">Already have an account? <a href="{{ route('login') }}">Login In</a></div>
        </div>
    </div>
</section>
@endsection
