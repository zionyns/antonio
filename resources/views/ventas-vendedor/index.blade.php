@extends('home')

@section('content')



@if(Session::has('mensaje'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('mensaje') }}
</div>
@endif






<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading">lista de Ventas</div>
				<div class="panel-body">
					

<table class="table table-bordered">
	<thead>
		<th>CODIGO</th>
		<th>FECHA</th>
		<th>VENDEDOR</th>
		<th>VENDEDOR SECUNDARIO</th>
		<th>TIPO DE MONEDA</th>

	</thead>
	@foreach($venta as $venta)
	<tbody>
		<td>{{ $venta->CodVenta }}</td>
		<td>{{ $venta->fecha }}</td>
		<td>{{ $venta->vendedor }}</td>
		<td>{{ $venta->vendedorsecundario }}</td>
		<td>{{ $venta->tipomoneda }}</td>
		<td>{{ $venta->preciototal }}</td>
		<td>

		{!! link_to_route('venta.edit', $title = 'Editar', $parameters = $venta->id, $attributes = ['class'=>'btn btn-primary']); !!}

	

		{!! Form::open(['route'=>['venta.destroy',$venta->id], 'method'=>'DELETE'])!!}
		{!! Form::submit('Eliminarrrr',['class'=>'btn-danger'])!!}
		{!! Form::close()!!}
		</td>
	</tbody>
	@endforeach
</table>

</div>
</div>
</div>
</div>
</div>
@stop