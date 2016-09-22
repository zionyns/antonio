@extends('index')

@section('content')

@include('usuario.modal')


@if(Session::has('mensaje'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('mensaje') }}
</div>
@endif




<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="box box-success">


				
				<div class="box-header with-border">
              		<h3 class="box-title">LISTA DE USUARIOS</h3>
					
					<div class="box-tools pull-right">	
						
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		
					</div>


            	</div>

				
				<div class="box-body">

<table id="Tusuarios" class="table table-bordered table-striped">
	<thead>
		<th>ID</th>
		<th>USERNAME</th>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
		<th>ROL</th>
		<th>EMAIL</th>
		<th>SUCURSAL</th>
		<th>OPERACIONES</th>

	</thead>

		
		<tbody>
			




	@section('scripts')
	
		<script src="{{asset('js/script-usuario.js')}}"></script>

	@stop	


		</tbody>

</table>

</div>
</div>
</div>
</div>
</div>
</div>
@stop