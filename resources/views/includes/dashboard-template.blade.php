<!DOCTYPE html>

<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Holyrood English School</title>
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
   <!-- CSS-->
   <link rel="stylesheet" href="{{asset('css/styles.css')}}">
   <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
   <!-- Google Font: Source Sans Pro -->
   <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">


</head>

<body class="hold-transition sidebar-mini">

   <div class="wrapper">

      <!-- Header -->
      @include('includes.header')

      <!-- Sidebar -->
      @yield('sidebar')

      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  @yield('title')
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <div class="content">
            <div class="container-fluid">
               <div class="row">
                  @yield('content')
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      @include('includes.control-sidebar')
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      @include('includes.footer')
      <!-- /. Main Footer -->
   </div>
   <!-- ./wrapper -->

   <!-- REQUIRED SCRIPTS -->
   <!--Backend Javascript-->
   <script src="{{asset('js/backend.js')}}"></script>
   <!-- jQuery -->
   <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
   <!-- Bootstrap 4 -->
   <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <!-- AdminLTE App -->
   <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

   <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>

   <script>
      $('.datepicker').datepicker({
        format: '{{ config("app.date_format_js") }}',
        language: "es",
        autoclose: true
     })
   </script>

</body>

</html>