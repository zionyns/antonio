@extends('index')

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
				<div class="panel-heading">proveedores</div>
				<div class="panel-body">
					

<table class="table">
	<thead>
		<th>CODIGO</th>
		<th>NOMBRE</th>
	</thead>

	@foreach($proveedores as $proveedor)
	<tbody >
		<td>{{ $proveedor->CodProveedor }}</td>
		<td>{{ $proveedor->nombre }}</td>

		<td>
		{!! link_to_route('proveedor.edit', $title = 'Editar', $parameters = $proveedor->id, $attributes = ['class'=>'btn btn-primary']); !!}

	

		{!! Form::open(['route'=>['proveedor.destroy',$proveedor->id], 'method'=>'DELETE'])!!}
		{!! Form::submit('Eliminarrrr',['class'=>'btn btn-danger'])!!}
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