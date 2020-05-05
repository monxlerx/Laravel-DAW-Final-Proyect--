<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="{{asset('crud/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('crud/css/styles.css')}}">
      <!-- Latest compiled and minified JavaScript -->
      <script src="{{asset('crud/js/bootstrap.min.js')}}"></script>
      <!-- Jquery -->
      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      <!-- Datepicker Files -->
      <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
      <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-standalone.css')}}">
      <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
      <!-- Languaje -->
      <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
   </head>

   <body>
      <div class="container container-table">
         <div class="row vertical-top-row">
            <div class="text-center col-md-12">
               @yield('content')
            </div>
         </div>
      </div>
      <!--JQuery and rest of Javascript´s files-->
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/lightbox.min.js"></script>
      <script type="text/javascript" src="js/wow.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
   </body>

</html>
