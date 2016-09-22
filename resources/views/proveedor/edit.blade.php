
@extends('index')

@section('content')


	<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">editar proveedor</div>
				<div class="panel-body">




{!! Form::model($proveedor,['route'=>['proveedor.update',$proveedor->id],'method'=>'put'])!!}
		

		<div class="for-group">
				{!! Form::label('codigo:')!!}
				{!! Form::text('CodProveedor',null,['class'=>'form-control','required'])!!}
		</div>
		<div class="for-group">
				{!! Form::label('nombre sucursal:')!!}
				{!! Form::text('nombre',null,['class'=>'form-control' , 'required'])!!}
		</div>
		



		{!! Form::submit('Registrar',['class'=>'btn-primary'])!!}
{!! Form::close()!!}




{!! Form::open(['route'=>['proveedor.destroy',$proveedor->id], 'method'=>'DELETE'])!!}
		{!! Form::submit('Eliminar',['class'=>'btn-primary'])!!}
{!! Form::close()!!}

@stop