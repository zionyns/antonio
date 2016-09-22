<!DOCTYPE html>
<html lang="en">
<head>



	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">inicio</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a>
					
					</li>
				</ul>

				<ul class="nav navbar-nav navbar">
					@if (Auth::guest())
					<!-- en este momento controlariamos si el usuario en vendedor o el usuario es administrador para mostrar el tipo de ventana principal que mostrariamos-->

						<li class="dropdown"><a href="/auth/login"
						 class="dropdown-toggle" data-toggle="dropdown">mantenimientos<b class="caret"></b></a>

							<ul class="dropdown-menu" class="navbar-toggle collapsed">
								<li ><a href="/usuario/create	">usuarios</a></li>
								<li ><a href="/auth/login">productos</a></li>
								<li ><a href="/auth/login">ventas</a></li>
							</ul>
						</li>



					<li class="dropdown"><a href="/auth/login" class="dropdown-toggle" data-toggle="dropdown">operaciones<b class="caret"></b></a>

							<ul class="dropdown-menu" class="navbar-toggle collapsed">
								<li ><a href="/auth/login">realizar venta</a></li>
								<li class="navbar-brand"><a href="/auth/login">ingreso de productos</a></li>
								<li class="navbar-brand"><a href="/auth/login">modificar venta</a></li>
							</ul>
						</li>



						<li class="dropdown"><a href="/auth/login" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>

							<ul class="dropdown-menu" class="navbar-toggle collapsed">
								<li class="navbar-brand"><a href="/auth/login">reporte1</a></li>
								<li class="navbar-brand"><a href="/auth/login">reporte2</a></li>
								<li class="navbar-brand"><a href="/auth/login">reporte3</a></li>
							</ul>
						</li>




						<li ><a href="/auth/login">Login</a>	</li>
						<li ><a href="/auth/register">Register</a></li>

					@else

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>

					@endif


					<div class="header-info">
				
			</div>

				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	

	{!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}

	{!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js') !!}
	
</body>
</html>


