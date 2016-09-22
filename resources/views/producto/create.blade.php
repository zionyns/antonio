@extends('index')

@section('content')

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Producto</div>
				<div class="panel-body">



{!! Form::open(array('id' =>'formproducto', 'class'=>'form-horizontal')) !!}


	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    		<strong> sucursal agregada correctamente</strong>
	</div>


	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

		
		     
    <div class="form-group">
        {!! Form::label('codigo','Codigo:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::text('CodProducto',null,['id'=>'CodProducto','class'=>'form-control','required','placeholder'=>'Codigo'])!!}
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('sucursal','Sucursal:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::text('sucursal',null,['id'=>'sucursal','class'=>'form-control','required','placeholder'=>'Sucursal'])!!}
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('nombre','Nombre:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
       {!! Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','required','onKeyUp'=>"this.value=this.value.toUpperCase();",'placeholder'=>'Nombre'])!!}
       </div>
		
    </div>
    <div class="form-group">
        {!! Form::label('tipo','Tipo:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::text('tipo',null,['id'=>'tipo','class'=>'form-control','required','placeholder'=>'Tipo'])!!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('peso','Peso:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::input('number','number',null,['id'=>'peso','class'=>'form-control' , 'required','placeholder'=>'Peso'])!!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('stock','Stock:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::input('number','number',null,['id'=>'stock','class'=>'form-control' , 'required','placeholder'=>'Stock'])!!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('precio','Precio',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::input('number','number',null,['id'=>'stock','class'=>'form-control' , 'required','placeholder'=>'Precio'])!!}
        </div>
    </div>
    





		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				
			{!!link_to('#',$title='Registrarrr',$attributes = ['id'=>'registro-producto','class'=>'btn btn-primary'], $secure = null)!!}

			</div>

	

	@section('scripts')
	
		<script src="{{asset('js/script-producto.js')}}"></script>

	@stop	

		</div>
{!! Form::close()!!}

</div>
</div>
</div>
</div>
</div>

@stop