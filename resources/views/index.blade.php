
<?php
  
  if(Auth::guest()){
    header("location: login");
    //header(refresh:0 url:"login");
    exit();  
  }

  
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>Sistema Joyeria | Dashboard</title>

    <link href="{{ asset('/plugins/jQueryUI/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
    
    <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">-->
        <!-- INICIO FECHA  
                   -->
    <link href="{{ asset('/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" /> 

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
    <!-- Optional theme -->


    <!-- Jquery -
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Datepicker Files -->
    


    
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" /> 
    <link href="{{ asset('/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" /> 
    <link href="{{ asset('/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" /> 
    <link href="{{ asset('/css/buttons.dataTables.min.css') }}" rel="stylesheet" type="text/css" /> 

  
    <!--

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet">
    
    -->



 
    <script src="{{asset('/datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('/datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
                <!-- FIN FECHA  -->
    
   <script src="{{ asset('/sweet/sweetalert-dev.js') }}" type="text/javascript"></script>

    <!-- alertityyyyyyyyyyyyyyyyy css-->

    <link href="{{ asset('/sweet/sweetalert.css') }}" rel="stylesheet" type="text/css" />
   
    <!-- FIN CONSULTAS AJAX -->

    

    <!--descomentar urgente<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->

    <link href="{{ asset('/bootstrap/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />  
    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" 
    <!-- Ionicons 2.0.0 -->
    <!--<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="{{ asset('/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
    
     

   

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->
   

</head>



<body class="hold-transition skin-blue sidebar-mini">



<div class="wrapper">
  @include('includes.header')
  @include('includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SISTEMA PARA JOYERIAa
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

      <!-- Main content -->
 

    <section class="content">


    
    @yield('content')

     
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Joyeria</a>.</strong> All rights
    reserved.
  </footer>
  <!-- ==================================================================== -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


 <!-- jQuery 2.1.3 -->
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
    <!-- jQuery UI 1.11.2 -->
    <!--<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>-->

    <script src="{{ asset('/plugins/jQueryUI/jquery-ui.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
       $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>    
    <!-- Morris.js charts-->


    <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->

    <script src="{{ asset('/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
  
    
    <script src="{{ asset('/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="{{ asset('/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{ asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>

    

    <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{ asset('/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/dist/js/app.min.js') }}" type="text/javascript"></script>


     <script src="{{ asset('/validate-js/jquery.validate.min.js') }}" type="text/javascript"></script> 
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/dist/js/demo.js') }}" type="text/javascript"></script>



    <!-- data tables -->    
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>


    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/dataTables.buttons.min.js') }}"></script>

    <script src="{{ asset('/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/buttons.print.min.js') }}"></script>




    
    


    @yield('scripts')


  </body>

</html>
