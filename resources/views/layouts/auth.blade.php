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
    <style>
        nav, footer{
            display: none !important;
        }
        body{
             background-image: url({{ asset('img/34081398421_9225e56f8c_b.jpg') }});
             background-size: cover;
             background-position: center;
             background-repeat: no-repeat;
        }
        input.form-control{
            padding: .8rem !important;
            border-radius: .25rem !important;
            border: 1px solid #ced4da !important;
        }
        .login-or {
          position: relative;
          font-size: 18px;
          color: #aaa;
          margin-top: 10px;
                  margin-bottom: 10px;
          padding-top: 10px;
          padding-bottom: 10px;
        }
        .span-or {
          display: block;
          position: absolute;
          left: 50%;
          top: -2px;
          margin-left: -25px;
          background-color: #fff;
          width: 50px;
          text-align: center;
        }
        .hr-or {
          background-color: #cdcdcd;
          height: 1px;
          margin-top: 0px !important;
          margin-bottom: 0px !important;
        }
        .btn-app{
          color: #fff;
          background-color: #4b3f4a;
          border-color: #4b3f4a;
        }
        .btn-app{
          color: #fff;
          background-color: #231a21;
          border-color: #231a21;
        }
        .btn-app::hover{
          background-color: #231a21;
          border-color: #231a21;
        }
        
        ::-webkit-input-placeholder { font-size: 1rem !important; } /* WebKit */
        ::-moz-placeholder { font-size: 1rem !important; } /* Firefox 19+ */
        ::placeholder { font-size: 1rem !important; }
    </style>
      @yield('styles')
  </head>

  <body class="@if(Route::is(['home'])) index-page @endif sidebar-collapse">
    <div id="app">
      <div class="div">
        <div class="wrapper">
        <!-- content -->
          @yield('content')
        <!-- content-end -->
        </div>
      </div>
    </div>
  </body>

  @yield('scripts')
</html>