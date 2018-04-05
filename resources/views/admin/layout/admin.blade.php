<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="{{ asset('css/lib.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/admin/style.blue.css') }}">
    <!-- Favicon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>

    @yield('styles')
    <!-- Styles -->
    <style>
      .input-material:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px #0a4e99 inset !important;
      }
    </style>
</head>
<body>
    <div id="app">
        <!-- Side Navbar -->
        @include('admin.layout.components.side-navbar')
        
        <div class="page">
          <!-- navbar-->
            @include('admin.layout.components.header')
          <!-- Counts Section -->
          <section class="dashboard-counts section-padding">
            @yield('content')
          </section>

        @include('admin.layout.components.footer')

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/lib.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('js/admin/app.js') }}"></script>
    <script src="{{ asset('js/admin/front.js') }}"></script>
    @yield('scripts')
</body>
</html>
