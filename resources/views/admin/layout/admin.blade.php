<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>

    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.blue.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets-admin/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([ 'csrfToken' => csrf_token(), ]); ?>
    </script>

    @yield('styles')
    <!-- Styles -->
    <style>
      .input-material:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px #0a4e99 inset !important;
      }
    </style>
</head>
<body>
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

    <!-- Scripts -->
    <script src="{{ asset('assets-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('assets-admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('assets-admin/js/front.js') }}"></script>
    @yield('scripts')
</body>
</html>
