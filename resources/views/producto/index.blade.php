@extends('index')

@section('content')

@include('producto.modal')

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
			  		<h3 class="box-title">lista de productos</h3>
					
					<div class="box-tools pull-right">	
						
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

					</div>


				</div>
			
				<div class="box-body">
                
				<table  id="Tproductos" class="table table-bordered table-striped">
					<thead>

					<th>CODIGO</th>
					<th>NOMBRE</th>
					<th>TIPO</th>
					<th>PESO</th>
					<th>STOCK</th>
					<th>PRECIO</th>
					<th>SUCURSAL</th>
					<th>OPERACIONES</th>

					</thead>
	

				<tbody>

				

				</tbody>

				</table>	

			

              	</div>

			@section('scripts')
	
					<script src="{{asset('js/script-producto.js')}}"></script>

					
			@stop	
	

</div>
</div>
</div>
</div>
@stop