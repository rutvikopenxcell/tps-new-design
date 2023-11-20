@extends('layouts.app')
@section('content')
   <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <!-- login area start -->
        <div class="login-area login-s2">
            <div class="container">
                <div class="login-box ptb--100">                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="login-form-head">
                                {{-- <h4>Sign In</h4> --}}
                                {{-- <p>Hello there, Sign in and start managing your Admin Template</p> --}}
                                <a href="{{url('')}}"><img src="{{ asset('public/assets/images/icon/logo.jpg')}}" alt="logo"></a>
                        </div>

                        <div class="login-form-body">
                                @include('./common.error')
                                <div class="form-gp">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" name="name" id="exampleInputName1" required>
                                    <i class="ti-user"></i>
                                </div>
                                <div class="form-gp">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email"  name="email" id="exampleInputEmail1" required autofocus autocomplete="off">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="form-gp">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" id="exampleInputPassword1" name="password" required>
                                    <i class="ti-lock"></i>
                                </div>
                                <div class="form-gp">
                                    <label for="exampleInputPassword2">Confirm Password</label>
                                    <input type="password" id="exampleInputPassword2" name="password_confirmation" required>
                                    <i class="ti-lock"></i>
                                </div>
                                <div class="submit-btn-area">
                                    <button id="form_submit" type="submit">Register <i class="ti-arrow-right"></i></button>
                                    {{-- <div class="login-other row mt-4">
                                        <div class="col-6">
                                            <a class="fb-login" href="#">Sign up with <i class="fa fa-facebook"></i></a>
                                        </div>
                                        <div class="col-6">
                                            <a class="google-login" href="#">Sign up with <i class="fa fa-google"></i></a>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="form-footer text-center mt-5">
                                    <p class="text-muted">Don't have an account? <a href="login.html">Sign in</a></p>
                                </div> --}}
                            </div>



                         {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> --}}
{{-- 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
