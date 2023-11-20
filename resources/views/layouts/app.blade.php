<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TPSPANEL') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('public/js/app.js') }}" defer></script> --}}

    <link rel="shortcut icon" type="image/png" href="{{ asset('public/assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/asset/vendor/bootstrap/css/bootstrap.min.css')}}">
 
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/asset/vendor/animate/animate.css')}}">
  
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/asset/vendor/css-hamburgers/hamburgers.min.css')}}">
    
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/asset/vendor/select2/select2.min.css')}}">
  
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/asset/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/asset/css/main.css')}}">
   
</head>

   
</head>
<body>
	
  @yield('content')

 
	<script src="{{asset('public/assets/asset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
 
	<script src="{{asset('public/assets/asset/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/assets/asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
 
	<script src="{{asset('public/assets/asset/vendor/select2/select2.min.js')}}"></script>
 
	<script src="{{asset('public/assets/asset/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
 
	<script src="{{asset('public/assets/asset/js/main.js')}}"></script>

    {{-- <script src="{{ asset('public/js/app.js') }}" defer></script> --}}
</body>
</html>
