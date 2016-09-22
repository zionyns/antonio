@extends('index')

@section('content')






    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                        <strong> Venta Realizada con Exito.</strong>
    </div>




    <div class="container-fluid">
            <div class="row">
            <div class="col-md-6 col-md-offset-15">
            
            
            <div class="box box-success">       
                <div class="box-header with-border">
                    <h3 class="box-title" center>NUEVA VENTA</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                    </div>
                </div>
                <div class="box-body">
                <div class="row">
                {!! Form::open(['id' =>'formVenta','route'=>'venta.store' , 'method'=>'post','class'=>'form-horizontal']) !!}
                
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    
                    
                    
                    <div class="col-md-6">
                            {!! Form::label('CÓDIGO DE VENTA:')!!}
                            {!! Form::text('CodVenta',$codigo,['id'=>'CodVenta','class'=>'form-control','required','disabled'])!!}
        
                        </div>


                    <div class="col-md-6">
                        {!! Form::label('VENDEDOR:')!!}
                        <select id="vendedor" class="form-control" onchange="selecOp();">
                        <option value="0" selected>Seleccione vendedor...</option>
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
            <div class="box box-success">


                
                <div class="box-header with-border">
                    <h3 class="box-title" center>VENDEDORES</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                    </div>


                </div>

                
                <div class="box-body">
                    

                    <table id="tablavendedores" class="table">
                    <thead>
                    <tr>
                        <th>USUARIO</th>
                        <th>NOMBRE</th>
                        <th>OPERACIÓN</th>
                
                    </tr>
                    </thead>
                    <tbody id="tablab-vendedores">
            
                    <tr>
                      <td id="vendedorprincipal">{{ Auth::user()->username }}</td>
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
            <div class="row">
            <div class="col-md-12 col-md-offset-15">
            <div class="box box-warning">


                
                <div class="box-header with-border">
                    <h3 class="box-title" center>INGRESO PRODUCTO</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                    </div>


                </div>

                
                <div class="box-body">

                   <form id="ingresoProducto" action="/" method="post" >
            
                            <input type="hidden" name="idProducto" id="idProducto" class="form-control">
    
                            <input type="hidden" name="stock" id="stock" class="form-control">

                    
                <div class="row">
        
                    <input type="hidden" name="idproducto" id="idproducto" class="form-control" >


                <div class="col-md-2">
                    <label for="codigo">CÓDIGO:</label>
            
                    <input type="text" name="codigo" id="codigo" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                </div>

                <div class="col-md-2">
                    <label for="nombre">DESCRIPCIÓN:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" readonly="readonly"/>
                </div>



                <div class="col-md-2">
                <label for="unitario">PRECIO:</label>
                <div class="input-group">
                <div class="input-group-addon">S/.</div>
                            <input type="number" name="titulo" id="precio" class="form-control" readonly="readonly" />
                </div>


        </div>

        <div class="col-md-2">
            <label for="cantidad">CANTIDAD:</label>
            <input type="number" name="titulo" id="cantidad" class="form-control" />


        </div>

         <div class="col-md-2">
            <label for="total">TOTAL:</label>
            <div class="input-group">
            <div class="input-group-addon">S/.</div>
            <input type="number" name="titulo" id="total" class="form-control" readonly="readonly"/>
            </div>
        </div>

        <div class="col-md-2">
            <label for="PUNTO" style="visibility:hidden">.</label>
            <button type="button" id="agregar" class="btn btn-primary form-control" onclick="agregar_fila();">AGREGAR</button>
        </div>
        </div>

       </form>
     </div>
     </div>
     </div>
     </div>
     </div>
     



<div class="container-fluid">
            <div class="row">
            <div class="col-md-12 col-md-offset-15">
            <div class="box box-success">


                
                <div class="box-header with-border">
                    <h3 class="box-title" center>DETALLES DE VENTA</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                    </div>


                </div>

                
                <div class="box-body">

    <div class="row">
    <table id="tabla" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>CÓDIGO</th>
                <th>DESCRIPCIÓN</th>
                <th>PRECIO UNITARIO</th>
                <th>CANTIDAD</th>
                <th>TOTAL</th>
                <th>OPERACIONES</th>
                
            </tr>
        </thead>
        <tbody id="tabla-ventaProducto">
            
        </tbody>
    </table>
    </div>
     <div class="row">
    

    <div class="col-md-6">
        <button type="button" id="calculartotal" class="btn btn-primary ">IMPORTE TOTAL</button>

        
        <div class="input-group">
        <div class="input-group-addon">S/.</div>

        <input type="number" name="titulo" value="0" id="preciototal" class="form-control" disabled/>
        </div>
    </div>

    <div class="col-md-6">
        
        <button type="button" id="calculartotal" class="btn btn-primary ">IMPORTE PAGADO</button>
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
</div>


<div class="container-fluid">
            <div class="row">
            <div class="col-md-6 col-md-offset-15">
           <div class="box box-success">


                
                <div class="box-header with-border">
                    <h3 class="box-title" center>METODO DE PAGO</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                
                <div class="box-body">
     
    
                <form action="/" method="post">
    
                <div class="row">    
                <div class="col-md-5">

                {!! Form::label('TIPO DE MONEDA:')!!}
                <select id="moneda" class="form-control" >
                    <option value="0" selected>seleccione moneda...</option>
                    @foreach ($monedas as $m) {
                    <option value="{{$m->CodMoneda}}">{{ $m->nombre }}</option>
                @endforeach 

                </select>
                </div>

                <div class="col-md-4">
    
                {!! Form::label('MONTO:')!!}
                <input type="number" name="titulo" id="txtmonto" class="form-control"/>    
                </div>

                <div class="col-md-3">
    
                {!! Form::label('.')!!}
                
                 <button type="button" id="agregar_moneda" class="btn btn-success form-control" onclick="selecmoneda();">AGREGAR</button>

                </div>
    
            </form>

    </div>

    


     </div>
     </div>
     </div>
     
            
            <div class="col-md-6   col-md-offset-15">
            <div class="box box-success">


                
                <div class="box-header with-border">
                    <h3 class="box-title" center>TABLA MONEDAS</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                    </div>


                </div>

                
                <div class="box-body">
    
        <table id="tablamoneda" class="table">
                    <thead>
                    <tr>
                        <th>MONEDA DE PAGO</th>
                        <th>IMPORTE</th>
                        <th>OPERACIÓNES</th>
                
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
            <div class="col-md-6 col-md-offset-2">
                
             {!! Form::button('Realizar pago',['id'=>'btnRecorrer','class'=>'btn btn-success form-control'])!!}

            <!--  {!! Form::button('prueba alertify',['id'=>'mensaje','class'=>'btn btn-primary'])!!} -->

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
                monto.value = monto.value || '';
                opmonedas.focus();

                if (!monto || !monto.trim().length) {
                     swal({title: "Alerta",   
                            text: "Porfavor ingrese monto!",   
                            type: "warning",   
                            confirmButtonColor: "#DD6B55",   
                            confirmButtonText: "Yes, CONFIRMAR",      
                            closeOnConfirm: false,
                        })
                    ;
                    return;
                }
                if (!valormoneda || !valormoneda.trim().length || valormoneda==0) {
                     swal({title: "Alerta",   
                            text: "Porfavor seleccione tipo de moneda!",   
                            type: "warning",   
                            confirmButtonColor: "#DD6B55",   
                            confirmButtonText: "Yes, CONFIRMAR",      
                            closeOnConfirm: false,
                        })
                    ;
                    return;
                }

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
            for (var i = 1; i < tablavendedores.rows.length; i++)
            {
                cellsOfRow = tablavendedores.rows[i].getElementsByTagName('td');
                found = false;
                compareWith = cellsOfRow[1].innerHTML;
                if (compareWith==texto) 
                {
                    swal({title: "Este vendedor ya esta agregado",   
                            text: "Porfavor seleccione otro vendedor!",   
                            type: "warning",   
                            confirmButtonColor: "#DD6B55",   
                            confirmButtonText: "Yes, CONFIRMAR",      
                            closeOnConfirm: false,
                        })
                    ;
                    return;
                } 
            }
           

            // if (texto=="{{Auth::user()->first_name}}") {
            //      swal({title: "Este vendedor ya esta registrado",   
            //             text: "Porfavor seleccione otro vendedor!",   
            //             type: "warning",   
            //             confirmButtonColor: "#DD6B55",   
            //             confirmButtonText: "Yes, CONFIRMAR",      
            //             closeOnConfirm: false,
            //         })
            //     ;
            //     return;
            // }
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

    var txtId= document.getElementById('idproducto');
    var txtCodigo= document.getElementById('codigo');
    var txtNombre = document.getElementById('nombre');
    //var txtTipo = document.getElementById('tipo');
    //var txtPeso = document.getElementById('peso');
    var txtPrecio = document.getElementById('precio');
    var txtCantidad = document.getElementById('cantidad');
    var txtTotal = document.getElementById('total');

    var btnAgregar = document.getElementById('agregar');
    var txtpreciototalanterior = document.getElementById('preciototal');


    var id     = txtId.value || '';
    var codigo = txtCodigo.value || '';
    var nombre = txtNombre.value || '';
    //var tipo = txtTipo.value || '';
    //var peso = txtPeso.value || '';
    var precio = txtPrecio.value || '';
    var cantidad = txtCantidad.value || '';
    var total = txtTotal.value || '';
    var pta = txtpreciototalanterior.value || '';
    
    
    

    if (!codigo || !codigo.trim().length) {
         swal({title: "ERROR",   
                text: "Porfavor ingrese CÓDIGO  de producto Vendido!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
    }


    if (!cantidad || !cantidad.trim().length) {
        swal({title: "Alerta",   
                text: "Porfavor ingrese la CANTIDAD de producto Vendido!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
    }

    if (!total || !total.trim().length) {
        swal({title: "Alerta",   
                text: "Porfavor verifique si el total de producto esta ingresado correctamente!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
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
        id    : id.trim(),
        codigo: codigo.trim(),
        nombre: nombre.trim(),
        //tipo: tipo.trim(),
        //peso: peso.trim(),
        precio: precio.trim(),
        cantidad: cantidad.trim(),
        total: total.trim()
         
    };

    

    
        var tr = document.createElement('tr');

        var tdi = document.createElement('td');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        //var td3 = document.createElement('td');
        //var td4 = document.createElement('td');
        var td5 = document.createElement('td');
        var td6 = document.createElement('td');
        var td7 = document.createElement('td');

        var tdoperaciones = document.createElement('td');

        tr.appendChild(tdi);
        tr.appendChild(td1);
        tr.appendChild(td2);
        //tr.appendChild(td3);
        //tr.appendChild(td4);
        tr.appendChild(td5);
        tr.appendChild(td6);
        tr.appendChild(td7);
        tr.appendChild(tdoperaciones);

        tdi.textContent = item.id;
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
</body>
@stop