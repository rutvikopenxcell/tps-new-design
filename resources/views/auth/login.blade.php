@extends('layouts.app')
@section('content')
 	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('public/assets/asset/images/img-01.png')}}" alt="IMG">
				</div>
                 <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                 @csrf
					<span class="login100-form-title">
						  <a href="{{url('')}}"><img src="{{ asset('public/assets/images/icon/logo.jpg')}}" alt="logo"></a>
					</span>
                    
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email"  value="" placeholder="{{ __('E-Mail Address') }}" autofocus autocomplete="off">
                       <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="{{ __('Password') }}" required autocomplete="off">
                       <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="text-center p-t-12">
						 @include('./common.error')
					</div>
					
					<div class="container-login100-form-btn">
                         <button class="login100-form-btn" id="form_submit" type="submit"> {{ __('Login') }} </button>
					</div> 
				</form>
			</div>
		</div>
	</div>
@endsection
