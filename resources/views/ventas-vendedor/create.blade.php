@extends('home')
@section('content')


	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
            			<strong> Venta Realizada con Exito.</strong>
 	</div>


	<div class="container-fluid">
	<div class="row">
		

		<div class="col-md-6 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Nueva Venta</div>
				<div class="panel-body">

				{!! Form::open(['route'=>'venta.store' , 'method'=>'post']) !!}
				
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					
					<div class="row">
					
					<div class="col-md-6">
							{!! Form::label('Codigo de Venta:')!!}
							{!! Form::text('CodVenta',$codigo,['id'=>'CodVenta','class'=>'form-control','required','disabled'])!!}
		
						</div>


					<div class="col-md-6">
						{!! Form::label('Vendedor:')!!}
                		<select id="vendedor" class="form-control" onchange="selecOp();">
                		@foreach ($users as $u) {
                    	<option value="{{$u->username}}">{{ $u->first_name }}</option>
                		@endforeach  
                		</select>
					</div>

					
		
					</div>		
	</div>
	</div>
	
	</div>

		<div class="col-md-6 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Vendedores</div>
				<div class="panel-body">
					

					<table id="tablavendedores" class="table">
        			<thead>
            		<tr>
                		<th>Usuario</th>
                		<th>nombre</th>
                		<th>Operacion</th>
                
            		</tr>
        </thead>
        <tbody id="tablab-vendedores">
        	
        	<tr>
        		<td>{{ Auth::user()->username }}</td>
        		<td>{{ Auth::user()->first_name }}</td>        		
        	</tr>

        </tbody>
    </table>
		
	
				</div>


			</div>
		</div>


		
	</div>
	</div>

	
		



	<div class="container-fluid">
	
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading text-center">agregar detalles de la venta</div>
				<div class="panel-body">


	<form action="/" method="post">
			
    <input type="hidden" name="idProducto" id="idProducto" class="form-control">
    <input type="hidden" name="stock" id="stock" class="form-control">

		<div class="row">
        <div class="col-md-2">
            <label for="codigo">Codigo:</label>
            
            <input type="text" name="codigo" id="codigo" class="form-control" >
        </div>

       <div class="col-md-2">
            <label for="nombre">descripcion:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" />
        </div>

     

        <div class="col-md-2">
            <label for="unitario">precio:</label>
            <div class="input-group">
            <div class="input-group-addon">S/.</div>
            <input type="number" name="titulo" id="precio" class="form-control" required />
            </div>


        </div>

        <div class="col-md-2">
            <label for="cantidad">cantidad:</label>
            <input type="number" name="titulo" id="cantidad" class="form-control" />


        </div>

         <div class="col-md-2">
            <label for="total">total:</label>
            <div class="input-group">
            <div class="input-group-addon">S/.</div>
            <input type="number" name="titulo" id="total" class="form-control" />
            </div>
        </div>
        
        <div class="col-md-2">
            <button type="button" id="agregar" class="btn btn-primary" onclick="agregar_fila();">Agregar</button>
        </div>
        </div>

       </form>
     </div>
     </div>
     </div>
     </div>
     




	<div class="container-fluid">
	
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading text-center">detalles</div>
				<div class="panel-body">

    <div class="row">
	<table id="tabla" class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>descripcion</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Operaciones</th>
                
            </tr>
        </thead>
        <tbody id="tabla-ventaProducto">
        	
        </tbody>
    </table>
    </div>
	 <div class="row">
	

	<div class="col-md-6">
        <button type="button" id="calculartotal" class="btn btn-primary ">Importe Total</button>

        
        <div class="input-group">
        <div class="input-group-addon">S/.</div>

        <input type="number" name="titulo" value="0" id="preciototal" class="form-control" disabled/>
        </div>
    </div>

	<div class="col-md-6">
        
        <button type="button" id="calculartotal" class="btn btn-primary ">Importe pagado</button>
        <div class="input-group">
        <div class="input-group-addon">S/.</div>
        <input type="number" name="titulo" value="" id="preciopagado" class="form-control" />
        </div>
    </div>
    </div>
	
</div>

</div>
</div>
</div>







	<div class="container-fluid">
	<div class="row">



		<div class="col-md-6 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading text-center">metodo de pago</div>
				<div class="panel-body">


	<form action="/" method="post">
	<div class="col-md-6">
                {!! Form::label('Tipo de Moneda:')!!}
                <select id="moneda" class="form-control">
                	<option value="0" selected>seleccione moneda...</option>
					@foreach ($monedas as $m) {
                	<option value="{{$m->CodMoneda}}">{{ $m->nombre }}</option>
                @endforeach 

                </select>
    </div>
    <div class="col-md-6">
                {!! Form::label('Monto:')!!}
            	<input type="number" name="titulo" id="txtmonto" class="form-control" onblur="selecmoneda();" />    
    </div>
    
    

    

	</form>

     </div>
     </div>
     </div>
     <div class="col-md-6 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading text-center">tabla monedas</div>
				<div class="panel-body">

	
		<table id="tablamoneda" class="table">
        			<thead>
            		<tr>
                		<th>moneda de pago</th>
                		<th>importe</th>
                		<th>Operacion</th>
                
            		</tr>
        </thead>
        <tbody id="tablab-moneda">
        	
        </tbody>
    </table>
    </div>



     </div>
     </div>
     </div>
     </div>
     


<div class="container-fluid">
	<div class="row">





     <div class="form-group">
			<div class="col-md-6 col-md-offset-5">
				
			 {!! Form::button('Realizar pago',['id'=>'btnRecorrer','class'=>'btn btn-primary'])!!}

             {!! Form::button('prueba alertify',['id'=>'mensaje','class'=>'btn btn-primary'])!!}


          
  
</form>


	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	






    
    @section('scripts')
    
        <script src="{{asset('js/venta.js')}}"></script>
    @stop   

	

{!! Form::close()!!}




<script>




		function selecmoneda(){

				var opmonedas = document.getElementById("moneda");
				var txtmonto = document.getElementById("txtmonto");
				var tablabmoneda = document.getElementById("tablab-moneda");


				var valormoneda = opmonedas.options[opmonedas.selectedIndex].value;
				var textomoneda = opmonedas.options[opmonedas.selectedIndex].text;
				var monto = txtmonto.value;


				txtmonto.value = '';
    			opmonedas.focus();


				var item={

					valormoneda:valormoneda.trim(),
					textomoneda:textomoneda.trim(),
					monto:monto.trim()
				}

				var tr = document.createElement('tr');
        		var td1 = document.createElement('td');
        		var td2 = document.createElement('td');
        		var tdoperaciones = document.createElement('td');

        		tr.appendChild(td1);
        		tr.appendChild(td2);
        		tr.appendChild(tdoperaciones);

        		td1.textContent = item.valormoneda;
        		td2.textContent = item.monto;

        		tablabmoneda.appendChild(tr)

        		var element2 = document.createElement("input");
               
        			element2.type = "button" ;
        			element2.value  ="eliminar";
        			element2.className="btn btn-primary";
        		
        			tdoperaciones.appendChild(element2);

        			element2.onclick=function(){

            				var td = this.parentNode;
            				var tr = td.parentNode;
            				var table = tr.parentNode;
                					table.removeChild(tr);

		}




	}



		function selecOp() { 
			var opciones=document.getElementById("vendedor");
			var tablabvendedores =document.getElementById("tablab-vendedores");

			var valor =  opciones.options[opciones.selectedIndex].value;
			var texto =  opciones.options[opciones.selectedIndex].text;

			var item = {
        		
        		username: valor.trim(),
        		nombre: texto.trim(),
        		
    		};


			var tr = document.createElement('tr');
        	var td1 = document.createElement('td');
        	var td2 = document.createElement('td');
        	var tdoperaciones = document.createElement('td');

        	tr.appendChild(td1);
        	tr.appendChild(td2);
        	tr.appendChild(tdoperaciones);

        	td1.textContent = item.username;
        	td2.textContent = item.nombre;

        	tablabvendedores.appendChild(tr);


        	var element2 = document.createElement("input");
               
        	element2.type = "button" ;
        	element2.value  ="eliminar";
        	element2.className="btn btn-primary";
        		
        	tdoperaciones.appendChild(element2);

        	element2.onclick=function(){

            	var td = this.parentNode;
            	var tr = td.parentNode;
            	var table = tr.parentNode;
                	table.removeChild(tr);

        }        	 
	} 


	function agregar_fila() {
    

    var tablaVentaProducto = document.getElementById('tabla-ventaProducto');
    var txtCodigo= document.getElementById('codigo');
    var txtNombre = document.getElementById('nombre');
    //var txtTipo = document.getElementById('tipo');
    //var txtPeso = document.getElementById('peso');
    var txtPrecio = document.getElementById('precio');
    var txtCantidad = document.getElementById('cantidad');
    var txtTotal = document.getElementById('total');

    var btnAgregar = document.getElementById('agregar');
    var txtpreciototalanterior = document.getElementById('preciototal');



    var codigo = txtCodigo.value || '';
    var nombre = txtNombre.value || '';
    //var tipo = txtTipo.value || '';
    //var peso = txtPeso.value || '';
    var precio = txtPrecio.value || '';
    var cantidad = txtCantidad.value || '';
    var total = txtTotal.value || '';
    var pta = txtpreciototalanterior.value || '';
    
    
    

    if (!codigo || !codigo.trim().length) {
        alert('debe ingresar un codigo');
        return;
    }
    
    if (!nombre || !nombre.trim().length) {
        alert('debe ingresar un nombre');
        return;
    }
    
    /*if (!tipo || !tipo.trim().length) {
        alert('debe ingresar una tipo');
        return;
    }

    if (!peso || !peso.trim().length) {
        alert('debe ingresar una peso');
        return;
    }
    */
    if (!precio || !precio.trim().length) {
        alert('debe ingresar una precio');
        return;
    }

    if (!cantidad || !cantidad.trim().length) {
        alert('debe ingresar una cantidad');
        return;
    }

    if (!total || !total.trim().length) {
        alert('debe ingresar precio y cantidad');
        return;
    }
    txtCodigo.value = '';
    txtNombre.value = '';
    //txtTipo.value = '';
    //txtPeso.value = '';
    txtPrecio.value = '';
    txtCantidad.value = '';
    txtTotal.value = '';

    txtCodigo.focus();

    ///////////////////////////////////////////////////////////////7

    // formato JSON de un item detalle // 

    var item = {
        codigo: codigo.trim(),
        nombre: nombre.trim(),
        //tipo: tipo.trim(),
        //peso: peso.trim(),
        precio: precio.trim(),
        cantidad: cantidad.trim(),
        total: total.trim()
         
    };

    

    
        var tr = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        //var td3 = document.createElement('td');
        //var td4 = document.createElement('td');
        var td5 = document.createElement('td');
        var td6 = document.createElement('td');
        var td7 = document.createElement('td');

        var tdoperaciones = document.createElement('td');

        tr.appendChild(td1);
        tr.appendChild(td2);
        //tr.appendChild(td3);
        //tr.appendChild(td4);
        tr.appendChild(td5);
        tr.appendChild(td6);
        tr.appendChild(td7);
        tr.appendChild(tdoperaciones);

        td1.textContent = item.codigo;
        td2.textContent = item.nombre;
        //td3.textContent = item.tipo;
        //td4.textContent = item.peso;
        td5.textContent = item.precio;
        td6.textContent = item.cantidad;        
        td7.textContent = item.total;

        tablaVentaProducto.appendChild(tr);	

        
			

        document.getElementById('preciototal').value = parseFloat(item.total)+parseFloat(pta);
     
        //crear boton eliminar
        var element2 = document.createElement("input");
               
        element2.type = "button" ;
        element2.value  ="X";
        element2.className="btn btn-primary";
        tdoperaciones.appendChild(element2);

        element2.onclick=function(){

            var td = this.parentNode;
            var tr = td.parentNode;

            var celda=tr.getElementsByTagName("td")[4];
            var valorcelda=celda.firstChild.nodeValue;

            var table = tr.parentNode;
                table.removeChild(tr);

            var preciototalActual=document.getElementById('preciototal').value;
            var precioRemover=parseFloat(valorcelda);

            document.getElementById('preciototal').value=preciototalActual - precioRemover;
        }
	};
	



</script>
@stop