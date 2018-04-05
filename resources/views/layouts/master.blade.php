<!doctype html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>{{ Config::get('app.name') }} | @yield('title') </title>

    <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- METAS -->
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <meta property="og:title" content="{{ Config::get('app.name') }}">
      <meta property="og:type" content="website">
      <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
      <meta name="MobileOptimized" content="width">
      <meta name="HandheldFriendly" content="true">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
      <!-- Bootstrap CSS File -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/lib.css') }}">
      <link rel="stylesheet" href="{{ asset('css/elementUi.css') }}">
      <link rel="stylesheet" href="{{ asset('css/vuama-ui.css') }}">
      @yield('styles')
  </head>

  <body class="@if(Route::is(['home'])) index-page @endif sidebar-collapse">
    <div id="app">
      <div class="div">
        <!-- navbar -->
          @include('layouts.website.navbar')
        <!-- navbar-end -->
        <div class="wrapper">
        <!-- content -->
          @yield('content')
        <!-- content-end -->
        </div>
        <!-- footer -->
        @include('layouts.website.footer')
        <!-- footer-end -->
      </div>
    </div>
  </body>


  <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
  {{-- <script src="{{ asset('js/wow.min.js') }}"></script> --}}
  <script src="{{ asset('js/lib.js') }}"></script>
  {{-- <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/brands.js"  crossorigin="anonymous"></script> --}}
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

  @yield('scripts')
</html>