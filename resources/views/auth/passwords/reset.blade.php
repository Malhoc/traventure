@extends('layouts.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!--Sign Up Section-->
<section class="signup-section">
    <div class="auto-container">
        <div class="form-box site-form">
            <div class="signup-form" style="margin-top: 70px">
                <h5>Sign Up</h5>
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    <div class="row clearfix">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="f-label">Email Address <i>*</i></div>
                            <div class="field-inner">
                                <input type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="f-label">Password <i>*</i></div>
                            <div class="field-inner">
                                <input type="password" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="f-label">Re-Enter Password <i>*</i></div>
                            <div class="field-inner">
                                <input type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            @error('email')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                            @error('password')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="theme-btn btn-style-two"><span>{{ __('Reset Password') }}<i
                                        class="icon far fa-angle-right"></i></span></button>
                        </div>
                    </div>
                </form>
            </div>

            {{-- <div class="lower-link">Already have an account? <a href="{{ route('login') }}">Login In</a></div> --}}
        </div>
    </div>
</section>
@endsection
