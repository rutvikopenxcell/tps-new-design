<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">   
    <title>{{ config('app.name', 'TPSPANEL') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script>
    var baseUrl="{{url('')}}";
    </script>
     <!-- Styles -->     
    @include('common/commoncss')
    @include('common.includefile.css.parsley')
    @yield('css') 
</head>
<body style="background-color: #f7f7f7;">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="container">
        {{-- @include('common/leftpanel')       --}}
        {{-- <div class="main-content"> --}}
            {{-- @include('common/previewtopheader') --}}
           {{-- @include('common/pagetitlearea') --}}
            {{-- <div class="main-content-inner"> --}}
                @yield('content')
            {{-- </div> --}}
        {{-- <div> --}}
       {{-- @include('common/footer') --}}
    </div>
    {{-- @include('common/offsetarea') --}}
    <!-- Scripts -->
    @include('common/commonjs')
    @yield('script')
</body>
</html>
