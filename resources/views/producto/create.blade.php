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
            <strong> Producto agregado correctamente</strong>
    </div>


    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

        
             
    <div class="form-group">
        {!! Form::label('codigo','CODIGO:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::text('CodProducto',null,['id'=>'CodProducto','class'=>'form-control','placeholder'=>'Codigo'])!!}
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('sucursal','SUCURSAL:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        <select id="sucursal" class="form-control" >
            <option value="0" selected>seleccione sucursal...</option>
            @foreach ($sucursales as $s) {
                <option value="{{$s->CodSucursal}}">{{ $s->NombreSucursal }}</option>
            @endforeach 
        </select>
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('nombre','DESCRIPCION:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
       {!! Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','onKeyUp'=>"this.value=this.value.toUpperCase();",'placeholder'=>'Nombre'])!!}
       </div>
        
    </div>
    <div class="form-group">
        {!! Form::label('tipo','TIPO:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::text('tipo',null,['id'=>'tipo','class'=>'form-control','placeholder'=>'Tipo'])!!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('peso','PESO:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::input('number','number',null,['id'=>'peso','class'=>'form-control','placeholder'=>'Peso'])!!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('stock','STOCK:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::input('number','number',null,['id'=>'stock','class'=>'form-control' ,'placeholder'=>'Stock'])!!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('precio','PRECIO',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-5">
        {!! Form::input('number','number',null,['id'=>'precio','class'=>'form-control' ,'placeholder'=>'Precio'])!!}
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