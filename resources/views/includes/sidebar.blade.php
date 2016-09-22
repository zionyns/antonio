<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Busqueda..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU DE NAVEGACION</li>

            @if (!Auth::guest()){
            @if(Auth::user()->rol == "administrador")

            <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i> <span>USUARIOS</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="/Sonesta2/public/usuario/create"><i class="fa fa-user-plus"></i>NUEVO</a></li>
                    <li><a href="/Sonesta2/public/usuario"><i class="fa fa-eye"></i>LISTAR</a></li>
                    <!--
                    <li><a href="/Joyeria/public/genero"><i class="fa fa-circle-o"></i> Ejemplo Genero</a></li>-->
                </ul>
            </li>
            </li>
            @endif
            
            @if(Auth::user()->rol == "administrador")

            <li class="treeview">
                <a href="#">
                <i class="fa fa-sitemap"></i> <span>SUCURSALES</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="/Sonesta2/public/sucursal/create"><i class="fa fa-plus-square"></i>NUEVO</a></li>
                    <li><a href="/Sonesta2/public/sucursal"><i class="fa fa-eye"></i>LISTAR</a></li>
                    <!--
                    <li><a href="/Joyeria/public/genero"><i class="fa fa-circle-o"></i> Ejemplo Genero</a></li>-->
                </ul>
            </li>
            </li>
          
            
            @endif

            @if(Auth::user()->rol == "administrador")

            <li class="treeview">
                <a href="#">
                <i class="fa fa-dashboard"></i> <span>PRODUCTOS</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="/Sonesta2/public/producto/create"><i class="fa fa-plus-square"></i>NUEVO</a></li>
                    <li><a href="/Sonesta2/public/producto"><i class="fa fa-eye"></i>LISTAR</a></li>
                    <!--
                    <li><a href="/Joyeria/public/genero"><i class="fa fa-circle-o"></i> Ejemplo Genero</a></li>-->
                </ul>
            </li>
            </li>
          
            
            @endif
    

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>VENTAS</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/Sonesta2/public/venta/create"><i class="fa fa-plus-square"></i>NUEVO</a></li>
                    <li><a href="/Sonesta2/public/venta"><i class="fa fa-eye"></i>LISTAR</a></li>
                   
                </ul>
            </li>



            @if(Auth::user()->rol == "administrador")

            <li class="treeview">
                <a href="#">
                <i class="fa fa-exchange"></i>
                <span>INGRESOS</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/Sonesta2/public/ingreso/create"><i class="fa fa-plus-square"></i>NUEVO</a></li>
                    <li><a href="/Sonesta2/public/ingreso"><i class="fa fa-eye"></i>LISTAR</a></li>

                </ul>
            </li>
            
            @endif


            @if(Auth::user()->rol == "administrador")

            <li class="treeview">
                <a href="#">
                <i class="fa fa-money"></i>
                <span>COMISIONES</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/Sonesta2/public/comisiones"><i class="fa fa-money"></i>POR VENDEDOR</a></li>
                </ul>
            </li>
            
            @endif

           
            <li>
                <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendario</span>
                <small class="label pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Correo</span>
                <small class="label pull-right bg-yellow">12</small>
                </a>
            </li>
           
            <li class="header">Otros</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Importantes</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i>Peligros</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i>Informacion</a></li>
        </ul>
        
        @endif

    </section>
    <!-- /.sidebar -->
</aside>