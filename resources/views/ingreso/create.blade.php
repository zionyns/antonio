@extends('index')
@section('content')
 
  
  
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-15 col-md-offset-15">
            <div class="box box-success">


                
                <div class="box-header with-border">
                    <h3 class="box-title">NUEVO INGRESO DE PRODUCTOS</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        
                    </div>


                </div>

                
                <div class="box-body">

<div class="row">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    
        
        <div class="col-md-4">
                {!! Form::label('CODIGO:')!!}
                {!! Form::text('CodIngreso',$codigo,['id'=>'CodIngreso','class'=>'form-control','required','disabled'])!!}
        </div>
    
</div>
</br>
</br>
                

<div class="row" >
<div>
    <form action="/" method="post">

  
           
            
        
             <!--<label for="tipo">id:</label>-->
             <input type="hidden" name="idproducto" id="idproducto" class="form-control" >   

        
        <div class="col-md-2">
            <label for="tipo">ELIJA PRODUCTO:</label>
             <input type="text" name="codigo" id="codigo" class="form-control" >   

        </div>

        <div class="col-md-2">
            <label for="tipo">DESCRIPCION:</label>
             <input type="text" name="descripcion" id="descripcion" class="form-control" disabled>   

        </div>


        <div class="col-md-1">
            <label for="cantidad">CANTIDAD:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" />


        </div>
        
        <div class="col-md-2">
            <label for="cantidad">PESO:</label>
            <input type="number" name="peso" id="peso" class="form-control" />


        </div>

        <div class="col-md-2">
            <label for="total">PRECIO:</label>
            <input type="number" name="precio" id="precio" class="form-control" />


        </div>

        <div class="col-md-3">
        <label for="total" style="visibility:hidden">.</label>
            <button type="button" id="agregar" class="btn btn-primary form-control" onclick="agregar_fila();">AGREGAR A CARRITO</button>
        </div>
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    

    <div class="container-fluid">
    
    <div class="row">
        <div class="col-md-15 col-md-offset-15">
            <div class="box box-success">


                
                <div class="box-header with-border">
                    <h3 class="box-title">DETALLES DE INGRESO DE PRODUCTO</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        
                    </div>


                </div>

                
                <div class="box-body">
    <table id="tabla" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PESO</th>
                <th>PRECIO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <tbody id="tabla-elementos">
            
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>




     <div class="form-group">
            <div class="col-md-5 col-md-offset-3">
                {!! Form::button('REALIZAR OPERACION ',['id'=>'btnRecorrer','class'=>'btn btn-primary form-control'])!!}

            </div>
    </div>




    @section('scripts')
    
        <script src="{{asset('js/script-ingreso.js')}}"></script>

    @stop   


{!! Form::close()!!}



<script>


function agregar_fila() {



var tablaElementos = document.getElementById('tabla-elementos');
     
    var txtid       = document.getElementById('idproducto');
    var txtproducto = document.getElementById('codigo');
    var txtcantidad = document.getElementById('cantidad');
    var txtpeso     = document.getElementById('peso');
    var txtprecio   = document.getElementById('precio');
    var btnAgregar  = document.getElementById('agregar');
    //recuperamos datos y validamos////////////////////////////
    var idproducto  = txtid.value ||'';
    var codproducto = txtproducto.value || '';
    var cantidad    = txtcantidad.value || '';
    var peso        = txtpeso.value || '';
    var precio      = txtprecio.value || '';


    if (!codproducto || !codproducto.trim().length) {
            
        swal("ERROR", "INGRESE UN CODIGO", "error");
        return;
    }

    if (!cantidad || !cantidad.trim().length) {
            
        swal("ERROR", "INGRESE LA CANTIDAD", "error");
        return;
    }

    if (!peso || !peso.trim().length) {
            
        swal("ERROR", "INGRESE PESO", "error");
        return;
    }

    if (!precio || !precio.trim().length) {
            
        swal("ERROR", "INGRESE PRECIO", "error");
        return;
    }


    txtcantidad.value = '';
    txtpeso.value='';
    txtprecio.value = '';
    txtproducto.value='';

    txtproducto.focus();

    // formato JSON de un item detalle // 
    var item = {
        idproducto:idproducto.trim(),
        codproducto:codproducto.trim(),
        cantidad: cantidad.trim(),
        peso: peso.trim(),
        precio: precio.trim()
    };

        var tr = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');
        var td5 = document.createElement('td');

        var tdoperaciones = document.createElement('td');

        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        tr.appendChild(td4);
        tr.appendChild(td5);
        tr.appendChild(tdoperaciones);

        td1.textContent = item.idproducto;
        td2.textContent = item.codproducto;
        td3.textContent = item.cantidad;
        td4.textContent = item.peso;
        td5.textContent = item.precio;        

        tablaElementos.appendChild(tr);


        //crear boton eliminar
        var element2 = document.createElement("input");
               
        element2.type = "button" ;
        element2.value  ="x";
        element2.className="btn btn-primary form-control";
        tdoperaciones.appendChild(element2);

        element2.onclick=function(){

            var td = this.parentNode;
            var tr = td.parentNode;
            var table = tr.parentNode;
                table.removeChild(tr);
        }
    
};        
</script>

</body>
@stop