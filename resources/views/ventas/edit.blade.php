@extends('index')

@section('content')

@include('ventas.modalEditarDetalle')


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
			<div class="panel panel-default">
				<div class="panel-heading">Ventas Sucursal</div>
				<div class="panel-body">
					



<!--recuperamos el valor del campo para luego leerlo en el script y hacer la consulta ajax-->
<button id="venta" style="visibility:hidden">{{$CodVenta}}</button>



<table id="Tdetalles" class="table table-hover">
	<thead>
		<th>ID</th>
		<th>PRODUCTO</th>
		<th>DESCRIPCION</th>
		<th>CANTIDAD</th>
		<th>TOTAL</th>
		<th>VENTA</th>
		<th>OPERACIONES</th>
		
	</thead>

		<tbody id="datos-detalles">
		
	@section('scripts')
	
		<script src="{{asset('js/script-lista-detalles.js')}}"></script>
		
	@stop	


		</tbody>

</table>

</div>
</div>
</div>
</div>
</div>
@stop