@extends('layouts.master')

@section('content')
<!--Reset Password Section-->
<section class="reset-section">
    <div class="auto-container">
        <div class="form-box site-form">
            <div class="reset-form " style="margin-top: 70px">
                <form method="post" action="{{ route('password.email') }}">
                    @csrf
                    <div class="row clearfix">
                        @if (session('status'))
                        <div class="invalid-alert"><i class="fa fa-times-circle"></i>
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="text">Lost your password? Please enter your username or email address.
                                You will receive a link to create a new password via email.</div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="f-label">Email Address <i>*</i></div>
                            <div class="field-inner">
                                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                        </div>
                        

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="text-right"><button type="submit"
                                    class="theme-btn btn-style-two"><span>Reset Password<i
                                            class="icon far fa-angle-right"></i></span></button></div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="lower-link">Don't have a account? <a href="signup.html">Sign Up</a> Now</div>
        </div>
    </div>
</section>
@endsection
