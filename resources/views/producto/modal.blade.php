	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Producto</h4>
      </div>
      <div class="modal-body">
      
      	
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      	
        <input type="hidden" id="id">
        
          
    <div class="form-group">
        {!! Form::label('codigo:')!!}
        {!! Form::text('CodProducto',null,['id'=>'CodProducto','class'=>'form-control','required','disabled'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('nombre :')!!}
        {!! Form::text('nombre',null,['id'=>'nombre','class'=>'form-control' , 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('tipo:')!!}
        {!! Form::text('tipo',null,['id'=>'tipo','class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('peso:')!!}
        {!! Form::text('peso',null,['id'=>'peso','class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('stock:')!!}
        {!! Form::text('stock',null,['id'=>'stock','class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('precio:')!!}
        {!! Form::text('precio',null,['id'=>'precio','class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('sucursal:')!!}
        {!! Form::text('sucursal',null,['id'=>'sucursal','class'=>'form-control','required','disabled'])!!}
    </div>



      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      {!!link_to('#', $title='Actualizar', $attributes = ['id'=>'actualizar', 'class'=>'btn btn-primary'], $secure = null)!!}
      </div>
    </div>
  </div>
</div>

