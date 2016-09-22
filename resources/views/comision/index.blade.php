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
              		<h3 class="box-title">COMISIONES</h3>
					
					<div class="box-tools pull-right">	
						
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		
					</div>


            	</div>

				
				<div class="box-body">

				<form action="/" method="post">

				<div class="col-md-6">
						{!! Form::label('NOMBRE DE VENDEDOR:')!!}
                		<select id="vendedor" class="form-control">
                		@foreach ($users as $u) {
                    	<option value="{{$u->username}}">{{ $u->first_name }}</option>
                		@endforeach  
                		</select>
	                </div>


       			<div class="form-group">
	                <label>RANGO DE FECHA:</label>

	                <div class="input-group">
	                  <div class="input-group-addon">
	                    <i class="fa fa-calendar"></i>
	                  </div>
	                  <input type="text" class="form-control pull-right" id="fechaComision">
	                </div>
	                <!-- /.input group -->
              	</div>

			    <div class="col-md-2">
		            <button type="button" id="buscar" class="btn btn-primary" onclick="buscar_comision();">BUSCAR</button>
		        </div>

		        <table id="tablaComisiones" class="table table-bordered table-striped">
					<thead> 
						<th>ID</th>
						<th>CODIGO VENTA</th>
						<th>MONEDA</th>
						<th>COMISION</th>
						<th>OPERACIONES</th>
					</thead>

				<tbody>
				</tbody>
				</table>

				
				</form>

</div>
</div>

<pre class="col-md-6 col-md-offset-3">
					
	<div id="cajasComisiones" >
						
	</div>

</pre>
</div>
</div>
</div>
@stop


	@section('scripts')
	
		<script src="{{asset('js/script-comision.js')}}"></script>
		
		<script type="text/javascript">
			$(function() {
    		$("#fechaComision").daterangepicker({
    			singleDatePicker: true,
    			"format": 'YYYY/MM/DD',
		        locale: {
		            
		            "separator": " - ",
		            "fromLabel": "DE",
        			"toLabel": "A",
        			"applyLabel": "APLICAR",
        			"cancelLabel": "CANCELAR","daysOfWeek": [
			            "Do",
			            "Lu",
			            "Ma",
			            "Mi",
			            "Ju",
			            "Vi",
			            "Sa"
			        ],
			        "monthNames": [
			            "Enero",
			            "Febrero",
			            "Marzo",
			            "Abril",
			            "Mayo",
			            "Junio",
			            "Julio",
			            "Augosto",
			            "Setiembre",
			            "Octubre",
			            "Noviembre",
			            "Diciembre"
			        ],
		        }
		    });

		});
		function buscar_comision() { 
			 $('#tablaComisiones').dataTable().fnDestroy();

			var opciones=document.getElementById("vendedor");
			var nombreUsuario =  opciones.options[opciones.selectedIndex].value;


			var fecha=$("#fechaComision").val();
			var arregloFecha=fecha.split("-");
			var fechaInicio=arregloFecha[0].trim();
			var fechaFinal=arregloFecha[1].trim();
			fechaInicio=fechaInicio.replace(/[/]/gi,"-");
			fechaFinal=fechaFinal.replace(/[/]/gi,"-");
			//console.log(nombreUsuario,fechaInicio,fechaFinal);
			Carga(nombreUsuario,fechaInicio,fechaFinal);

			
		}
		</script>

	@stop

