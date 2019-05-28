<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
   <!--  <link href="{{ url('/css/app.css') }}" rel="stylesheet"> -->
    

    <!-- FontAwesome -->
    <link href="{{ url('/css/all.min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">

    <!-- Custom -->
    <link href="{{ url('/css/custom.css') }}" rel="stylesheet">
    

    @yield('css')

  </head>

  <body>

  	<!-- top navigation -->
    @include('public.partials.navbar')
    <!-- /top navigation -->

    <!-- main body -->
    @yield('body')
    <!-- /mainbody -->

    <!-- footer -->
    @include('public.partials.footer')
    <!-- /footer -->
  	

    <!-- Bootstrap -->
    <script src="{{ url('/js/app.js') }}"></script>
    <script src="{{ url('/js/all.min.js') }}"></script>
   
    
  	@yield('javascript')
  </body>
 </html>