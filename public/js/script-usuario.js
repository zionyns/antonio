
$(document).ready(function(){

		$("#formusuario").validate( {
				rules: {
					
					Username: {
						required: true,
						minlength: 5
					},
					First_name: {
						required: true,
						minlength: 5,
					},

					Last_name: {
						required: true,
						minlength: 5,
					},

					Email: {
						required: true,
						minlength: 5,
					},

					Password: {
						required: true,
						minlength: 5,
					},

					Confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#Password"
					}

				},
				messages: {
					
					Username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 5 characters"
					},
					First_name: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					Last_name: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},

					Email: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},

					Password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},

					Confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
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
	var tablaDatos = $("#Tusuarios > tbody");
	var route = "/antonio/public/usuario";

	$("#Tusuarios > tbody").empty();

	$.get(route, function(res){
		$(res).each(function(key,value)
		{
			tablaDatos.append("<tr><td>"+value.id+"</td><td>"+value.username+"</td><td>"+value.first_name+"</td><td>"+value.last_name+"</td><td>"+value.rol+"</td><td>"+value.email+"</td><td>"+value.sucursal+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});

		$(function () {
   

    $('#Tusuarios').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  		});

	});
}


<<<<<<< HEAD
=======
function Eliminar(btn){
	var route = "/antonio/public/sucursal/"+btn.value+"";
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
	var route = "/antonio/public/sucursal/"+btn.value+"/edit";

	$.get(route, function(res){
		
		$("#id").val(res.id);
		$("#CodSucursal").val(res.CodSucursal);
		$("#NombreSucursal").val(res.NombreSucursal);
		$("#Direccion").val(res.Direccion);

	});
}

>>>>>>> origin/master





//////////////////////ACTUALIZAR SUCURSAL///////////////////////////////////7777////////7

$(document).on('click', '#actualizar',function (){
	
	var value = $("#id").val();

	var dato1 = $("#CodSucursal").val();
	var dato2 = $("#NombreSucursal").val();
	var dato3 = $("#Direccion").val();
<<<<<<< HEAD
=======
	
>>>>>>> origin/master
	var route = "/antonio/public/sucursal/"+value+"";
	var token = $("#token").val();




	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {"CodSucursal": dato1,"NombreSucursal":dato2,"Direccion":dato3},
		success: function(){
			
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();

		}
	});


});


///////////////////////REGISTRO USUARIO///////////////////////////////////////7
$(document).on('click', '#registro-usuario',function (){
	//recuperamos valores

	swal({      title: "ESTAS SEGURO?",   
                text: "",   
                type: "warning",   showCancelButton: true,   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "CONFIRMAR",   
                cancelButtonText: "CANCELAR",   
                closeOnConfirm: false,   
                closeOnCancel: false }, 
                
    function(isConfirm){   
    if (isConfirm) {




	var username = $("#Username").val();
	var first_name = $("#First_name").val();
	var last_name = $("#Last_name").val();
	var email = $("#Email").val();
	var sucursal = $("#Sucursal").val();
	var rol = $("#Rol").val();
	var password = $("#Password").val();
	var confirm_pass = $("#Confirm_password").val();
	//ruta a la que hacemos referencia

	alert(username+"/"+first_name+"/"+last_name+"/"+email+"/"+sucursal+"/"+rol+"/"+password+"/"+password);
	
	var route = "/antonio/public/usuario";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{first_name: first_name,last_name:last_name,rol:rol,username:username,email:email,password:password,sucursal:sucursal},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
	});


	swal("SUCCESSFULL!", "USUARIO AGREGADOS CORRECTAMENTE", "success");




                                        

                    } else {     
                        swal("CANCELADO","UD A CANCELADO LA OPERACION ","error");   
                    }

    });

});