	<div class="form-group">
	{!!Form::label('venta','Producto: ')!!}
	{!!Form::text('venta',null, ['id'=>'nombre','class'=>'form-control', 'placeholder' => 'Ingresa el Nombre'])!!}
	{!!Form::label('venta','Tipo: ')!!}
	{!!Form::text('venta',null, ['id'=>'tipo','class'=>'form-control', 'placeholder' => 'Ingresa el Tipo'])!!}
	{!!Form::label('venta','Peso: ')!!}
	{!!Form::text('venta',null, ['id'=>'peso','class'=>'form-control', 'placeholder' => 'Ingresa el Peso'])!!}
	{!!Form::label('venta','Precio: ')!!}
	{!!Form::text('venta',null, ['id'=>'precio','class'=>'form-control', 'placeholder' => 'Ingresa el Precio'])!!}
</div>