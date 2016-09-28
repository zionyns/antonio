$(document).ready(function(){


		$("#formproducto" ).validate( {
				rules: {
					
					CodProducto	: {
						required: true,
						minlength: 5
					},
					sucursal: {
						required: true,
					},
					nombre: {
						required: true,
					},
					tipo: {
						required: true,
					},
					peso: {
						required: true,
					},
					stock: {
						required: true,
					},
					precio: {
						required: true,
					}
				},
				messages: {
					
					CodProducto: {
						required: "Porfavor ingrese un codigo",
						minlength: "Se sugiere que su codigo tenga mas de 5 caracteres"
					},
					sucursal: {
						required: "Porfavor ingrese codigo de sucursal",
					},
					nombre: {
						required: "Porfavor ingrese una descripcion",
					},
					tipo: {
						required: "Porfavor ingrese un tipo",
					},
					peso: {
						required: "Porfavor ingrese un peso",
					},
					stock: {
						required: "Porfavor ingrese un stock",
					},
					precio: {
						required: "Porfavor ingrese un precio",
					}
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".col-sm-5" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			} )
});



$(document).ready(function(){


		$("#formproducto" ).validate( {
				rules: {
					
					CodProducto	: {
						required: true,
						minlength: 5
					},
					sucursal: {
						required: true,
					},
					nombre: {
						required: true,
					},
					tipo: {
						required: true,
					},
					peso: {
						required: true,
					},
					stock: {
						required: true,
					},
					precio: {
						required: true,
					}
				},
				messages: {
					
					CodProducto: {
						required: "Please enter a username",
						minlength: "Se sugiere que su codigo tenga mas de 5 caracteres"
					},
					sucursal: {
						required: "Porfavor ingrese codigo de sucursal",
					},
					nombre: {
						required: "Porfavor ingrese una descripcion",
					},
					tipo: {
						required: "Porfavor ingrese un tipo",
					},
					peso: {
						required: "Porfavor ingrese un peso",
					},
					stock: {
						required: "Porfavor ingrese un stock",
					},
					precio: {
						required: "Porfavor ingrese un precio",
					}
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".col-sm-5" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			} )
});
$(document).ready(function(){
		Carga();	
});


function Carga(){


	//tabla donde duardamos la lista de sucursales
	var tablaDatos = $('#Tproductos > tbody');
	var route = "/antonio/public/producto";

	$('#Tproductos > tbody').empty();

	$.get(route, function(res){
		$(res).each(function(key,value)
		{
			tablaDatos.append("<tr><td>"+value.CodProducto+"</td><td>"+value.nombre+"</td><td>"+value.tipo+"</td><td>"+value.peso+"</td><td>"+value.stock+"</td><td>"+value.precio+"</td><td>"+value.sucursal+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});

	$(function () {
   

    $('#Tproductos').DataTable({
      
      dom: 'Bfrtip',
        buttons: [

        	 'copy', 'csv', 'excel', 'pdf', 'print'
            //{
            //    extend: 'pdfHtml5',
            //    orientation: 'landscape',
            //    pageSize: 'LEGAL'
            //}
         ],
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    	})
  		});
	});

}





function Eliminar(btn){
	var route = "/antonio/public/producto/"+btn.value+"";
	var token = $("#token").val();
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-success").fadeIn();
		}
	});
}


function Mostrar(btn){
	var route = "/antonio/public/producto/"+btn.value+"/edit";

	$.get(route, function(res){
		
		$("#id").val(res.id);
		$("#CodProducto").val(res.CodProducto);
		$("#nombre").val(res.nombre);
		$("#tipo").val(res.tipo);
		$("#peso").val(res.peso);
		$("#stock").val(res.stock);
		$("#precio").val(res.precio);
		$("#sucursal").val(res.sucursal);
	});
}






//////////////////////ACTUALIZAR SUCURSAL///////////////////////////////////7777////////7

$(document).on('click', '#actualizar',function (){
	
	var value = $("#id").val();

	var codigo = $("#CodProducto").val();
	var nombre = $("#nombre").val();
	var tipo = $("#tipo").val();
	var peso = $("#peso").val();
	var stock = $("#stock").val();
	var precio = $("#precio").val();
	var sucursal = $("#sucursal").val();
	

	var route = "/antonio/public/producto/"+value+"";
	var token = $("#token").val();



	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {"CodProducto": codigo,"nombre":nombre,"tipo":tipo,"peso":peso,"stock":stock,"precio":precio,"sucursal":sucursal},
		success: function(){
			
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();

		}
	});


});

///////////////////////REGISTRO PRODUCTO///////////////////////////////////////7
$(document).on('click', '#registro-producto',function (){

	//recuperamos valores
	var codigo = $("#CodProducto").val();
	var nombre = $("#nombre").val();
	var tipo = $("#tipo").val();
	var peso = $("#peso").val();
	var stock = $("#stock").val();
	var precio = $("#precio").val();
	var sucursal = $("#sucursal").val();
	
	if (!sucursal || !sucursal.trim().length) {
         swal({title: "ALERTA",   
                text: "Porfavor ingrese SUCURSAL  de producto!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
    }

	if (!precio || !precio.trim().length) {
         swal({title: "ALERTA",   
                text: "Porfavor ingrese PRECIO  de producto!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
    }
	if (!stock || !stock.trim().length) {
         swal({title: "ALERTA",   
                text: "Porfavor ingrese STOCK  de producto!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
    }

	if (!peso || !peso.trim().length) {
         swal({title: "ALERTA",   
                text: "Porfavor ingrese el PESO  de producto!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
    }

	if (!tipo || !tipo.trim().length) {
         swal({title: "ALERTA",   
                text: "Porfavor ingrese TIPO  de producto!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
    }

	if (!codigo || !codigo.trim().length) {
         swal({title: "ALERTA",   
                text: "Porfavor ingrese CÓDIGO  de producto !",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
    }
    if (!nombre || !nombre.trim().length) {
         swal({title: "ALERTA",   
                text: "Porfavor ingrese DESCRIPCION  de producto!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",      
                closeOnConfirm: false,
            })
        ;
        return;
    }

	swal({      title: "ESTAS SEGURO?",   
                text: "Esta apunto de registrar este producto!",   
                type: "warning",   showCancelButton: true,   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Si, CONFIRMAR",   
                cancelButtonText: "No, CANCELAR",   
                closeOnConfirm: false,   
                closeOnCancel: false }, 
                
    function(isConfirm){   
    if (isConfirm) {

				//ruta a la que hacemos referencia
				
				var route = "/antonio/public/producto";
				var token = $("#token").val();

				$.ajax({
					url: route,
					headers: {'X-CSRF-TOKEN': token},
					type: 'POST',
					dataType: 'json',
					data:{"CodProducto": codigo,"nombre":nombre,"tipo":tipo,"peso":peso,"stock":stock,"precio":precio,"sucursal":sucursal},

					success:function(){
						$("#msj-success").fadeIn();
					},
					error:function(msj){
						$("#msj").html(msj.responseJSON.genre);
						$("#msj-error").fadeIn();
					}
				});

		swal("SUCCESSFULL!", "PRODUCTO AGREGADO CORRECTAMENTE.", "success", window.location.href = "/antonio/public/producto");
	}
	else {     
        swal("CANCELADO","UD A CANCELADO LA OPERACION ","error");   
    }
    });
});