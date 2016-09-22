@extends('index')

@section('content')




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
			  		<h3 class="box-title">LISTA DE INGRESO DE PRODUCTOS</h3>
					
					<div class="box-tools pull-right">	
						
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

					</div>


				</div>
			
				<div class="box-body">



<table class="table">
	<thead>
		<th>ID</th>
		<th>CODIGO</th>
		<th>SUCURSAL</th>
		<th>USUARIO</th>
		<th>FECHA</th>
		<th>OPERACIONES</th>
	</thead>

	@foreach($ingresos as $ingreso)
	<tbody>
		<td>{{ $ingreso->id }}</td>
		<td>{{ $ingreso->CodIngreso }}</td>
		<td>{{ $ingreso->sucursal }}</td>
		<td>{{ $ingreso->usuario }}</td>
		<td>{{ $ingreso->fecha }}</td>
		<td>
		{!! link_to_route('ingreso.edit', $title = 'Mostrar Detalles', $parameters = $ingreso->CodIngreso, $attributes = ['class'=>'btn btn-primary']); !!}
		<td>

	
		<td>
		{!! Form::open(['route'=>['ingreso.destroy',$ingreso->CodIngreso], 'method'=>'DELETE'])!!}
		{!! Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
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