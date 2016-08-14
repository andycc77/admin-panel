<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Validation | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('admin/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('admin/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

    <body>
    <section id="container" class="">
    @include('admin.include.header')
    @include('admin.include.sidebar')
    <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
            @yield('content')
            </section>
        </section>
    <!--end main content start-->
    </section>

        <!-- javascripts -->
        <script src="{{ asset('admin/js/jquery.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
        <!-- nice scroll -->
        <script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <!-- jquery validate js -->
        <script type="text/javascript" src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>

        <!-- custom form validation script for this page-->
        <script src="{{ asset('admin/js/form-validation-script.js') }}"></script>
        <!--custome script for all page-->
        <script src="{{ asset('admin/js/scripts.js') }}"></script>


    </body>
</html>
