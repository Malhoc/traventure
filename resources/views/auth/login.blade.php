@extends('layouts.master')

@section('content')
    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="form-box site-form">
                <div class="login-form">
                    <h5>Login In</h5>
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="row clearfix">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Email Address <i>*</i></div>
                                <div class="field-inner">
                                    <input type="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>
                                </div>

                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Password <i>*</i></div>
                                <div class="field-inner">
                                    <input type="password" name="password" value="" required
                                        autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                @error('email')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                @error('password')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner clearfix">
                                    <div class="remember">
                                        <div class="check-block">
                                            <input type="checkbox" id="check-1" name="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label for="check-1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="forgot-pass">
                                        <a href="{{ route('password.request') }}">Forgot your password? </a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-two"><span>Login In<i
                                            class="icon far fa-angle-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="lower-link">Don't have a account? <a href="{{ route('register') }}">Sign Up</a> Now</div>
            </div>
        </div>
    </section>
@endsection
