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
    @yield('css') 
</head>
   <div id="wrapper">
        @include('common/leftpanel')      
        <div id="page-wrapper" class="gray-bg">
            @include('common/toppanel')
        
            <div class="main-content-inner">
                @yield('content')
            </div>
        <div>
       {{-- @include('common/footer') --}}
    </div>
    
    <!-- Scripts -->
    @include('common/commonjs')
    @yield('script')
    
</body>
</html>
