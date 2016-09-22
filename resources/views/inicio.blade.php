
<?php
  
  if(Auth::guest()){
    header("location: login");
    //header(refresh:0 url:"login");
    exit();  
  }

  
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Reservas</title>
    <meta name="description" content="description">
    <meta name="author" content="ITS_PERU">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
    <link href="plugins/select2/select2.css" rel="stylesheet">
    <link href="plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
    <link href="css/style_v1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="plugins/chartist/chartist.min.css" rel="stylesheet">

    <link href="puglins/light/lightbox.css" rel="stylesheet">



    <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
        rel="stylesheet" type="text/css" /> 

    <!-- ==================================================================== -->
    <!-- plugins adicionales  -->
    <link rel="stylesheet" href="plugins/jquery-te/jquery-te-1.4.0.css">
    <link rel="stylesheet" type="text/css" href="sweet/sweetalert.css">    
    <!-- ==================================================================== -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
        <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<!--Start Header-->
<div id="screensaver">
  <canvas id="canvas"></canvas>
  <i class="fa fa-lock" id="screen_unlock"></i>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-cerrar" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>

  </div>
</div>

<header class="navbar">
  <div class="container-fluid expanded-panel">
    <div class="row">
      <div id="logo" class="col-xs-12 col-sm-2">
        <a href="index.php">CuscoPeru</a>
      </div>
      <div id="top-panel" class="col-xs-12 col-sm-10">
        <div class="row">
          <div class="col-xs-8 col-sm-4">
            <div id="search">
              <input type="text" placeholder="search"/>
              <i class="fa fa-search"></i>
            </div>
          </div>
          <div class="col-xs-4 col-sm-8 top-panel-right">
            <a href="#" class="about">about</a>
            <a href="index_v1.html" class="style1"></a>
            <ul class="nav navbar-nav pull-right panel-menu">
              <li class="hidden-xs">
                <a href="index.php" class="modal-link">
                  <i class="fa fa-bell"></i>
                  <span class="badge">7</span>
                </a>
              </li>
              <li class="hidden-xs">
                <a class="ajax-link" href="ajax/calendar.html">
                  <i class="fa fa-calendar"></i>
                  <span class="badge">7</span>
                </a>
              </li>
              <li class="hidden-xs">
                <a href="ajax/page_messages.html" class="ajax-link">
                  <i class="fa fa-envelope"></i>
                  <span class="badge">7</span>
                </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                  <div class="avatar">
                    <img src="img/avatar.jpg" class="img-circle" alt="avatar" />
                  </div>
                  <i class="fa fa-angle-down pull-right"></i>
                  <div class="user-mini pull-right">
                    <span class="welcome">Welcome,</span>
                    <span>{{ Auth::user()->first_name }}</span>
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="ajax/page_messages.html" class="ajax-link">
                      <i class="fa fa-envelope"></i>
                      <span>Messages</span>
                    </a>
                  </li>
                  <li>
                    <a href="ajax/gallery_simple.html" class="ajax-link">
                      <i class="fa fa-picture-o"></i>
                      <span>Albums</span>
                    </a>
                  </li>
                  <li>
                    <a href="ajax/calendar.html" class="ajax-link">
                      <i class="fa fa-tasks"></i>
                      <span>Tasks</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-cog"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="logout.php">
                      <i class="fa fa-power-off"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
  <div class="row">
    <div id="sidebar-left" class="col-xs-2 col-sm-2">
      <ul class="nav main-menu">
        <li>
          <a href="#" class="ajax-link">
            <i class="fa fa-dashboard"></i>
            <span class="hidden-xs">Dashboard</span>
          </a>
        </li>
        <!-- ************** USUARIOS **************** --> 
      
            @if(Auth::user()->rol == "administrador"){  
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-user"></i>
            <span class="hidden-xs">productos</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="producto">listar productos</a></li>
            <li><a class="ajax-link" href="app/usuarios/lista/leer.html">XXX</a></li>
          </ul>
        </li>
        
            }
            @endif


        <!-- ************** CALENDARIO **************** -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-calendar"></i>
            <span class="hidden-xs">Calendario</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="ajax/calendar.html">Eventos</a></li>
          </ul>
        </li>
        <!-- **************************************** -->
        <!-- ************** RESERVAS **************** -->
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-book"></i>
            <span class="hidden-xs">Reservas</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="app/reservas/crear_reserva.html">Nuevo</a></li>
            <li><a class="ajax-link" href="app/reservas/lista/leer.html">Listar</a></li>
          </ul>
        </li>
        
        <!-- **************************************** -->
        <!-- ************** PAQUETES **************** -->
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-archive"></i>
            <span class="hidden-xs">Paquetes</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="app/paquete/nuevo/crear.html">Nuevo</a></li>
            <li><a class="ajax-link" href="app/paquete/lista/leer.html">Listar</a></li>
          </ul>
          </li>
          
        <!-- **************************************** -->
        <!-- ************** LOGISTICA **************** -->
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-cogs"></i>
            <span class="hidden-xs">Logística</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="app/logistica/lista/leer.html">Operacion</a></li>
          </ul>
        </li>
       
        <!-- **************************************** -->
        <!-- ************** PAGOS **************** -->
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-credit-card"></i>
            <span class="hidden-xs">Pagos</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="app/pagos/reservas/leer.html">Reservas</a></li>
            <li><a class="ajax-link" href="app/pagos/liquidacion/leer.html">Liquidacion</a></li>
          </ul>         
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-dollar"></i>
            <span class="hidden-xs">Precios</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="app/precios/nuevo/crear.html">Registrar</a></li>
            <li><a class="ajax-link" href="app/precios/lista/leer.html">Lista</a></li>
          </ul>         
        </li>
        
          

        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-dollar"></i>
            <span class="hidden-xs">Reportes</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="app/reportes/ver/reportesgenerales.html">Reportes Generales</a></li>
            
          </ul>         
        </li>
        


        <!-- **************************************** -->
      </ul>
    </div>


    <!--Start Content-->
    <div id="content" class="col-xs-12 col-sm-10">
      <div id="about">
        <div class="about-inner">
          <h4 class="page-header">Open-source admin theme for you</h4>
          <p>DevOOPS team</p>
          <p>Homepage - <a href="http://devoops.me" target="_blank">http://devoops.me</a></p>
          <p>Email - <a href="mailto:devoopsme@gmail.com">devoopsme@gmail.com</a></p>
          <p>Twitter - <a href="http://twitter.com/devoopsme" target="_blank">http://twitter.com/devoopsme</a></p>
          <p>Donate - BTC 123Ci1ZFK5V7gyLsyVU36yPNWSB5TDqKn3</p>
        </div>
      </div>
      <div class="preloader">
        <img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
      </div>

      
      <div id="ajax-content">
        

      </div>
    </div>
    <!--End Content-->
  </div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<!--<script src="plugins/jquery/jquery.min.js"></script>-->
<script src="plugins/jquery/jquery-3.0.0.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script> -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!--<script src="plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="plugins/tinymce/tinymce.min.js"></script>
<script src="plugins/tinymce/jquery.tinymce.min.js"></script> -->
<!-- ======================================================================== -->
<!-- =========================== adicionales ================================ -->
<script src="plugins/jquery-validate/jquery.validate.min.js"></script>
<script src="plugins/jquery-validate/additional-methods.min.js"></script>
<script src="plugins/jquery-validate/messages_es.min.js"></script>
<script src="sweet/sweetalert.min.js"></script>
<script src="ckeditor_4.5.10/ckeditor.js"></script>
<script src="plugins/jquery-te/jquery-te-1.4.0.min.js"></script>
<script src="plugins/wizard-master/jquery.bootstrap.wizard.min.js"></script>

<!-- ===========================sript ventana emergente de los reportes ================================ -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<!-- ======================================================================== -->
<!-- All functions for this theme + document.ready processing -->
<script src="js/devoops.js"></script>
<script src="puglin/light/lightbox.js"></script>
</body>
</html>
