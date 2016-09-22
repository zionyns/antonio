	<div class="modal fade" id="modalVenta" tabindex="-1" role="dialog" aria-labelledby="myModalVenta">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalVenta">Añadir Producto</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      	@include('ventas.form.formProducto')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!!link_to('#', $title='Aceptar', $attributes = ['id'=>'aceptar', 'class'=>'btn btn-primary'], $secure = null)!!}
      </div>
    </div>
  </div>
</div>