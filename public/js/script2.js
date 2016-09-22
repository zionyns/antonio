$(document).ready(function(){
	Carga();
});
 
function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://localhost/Joyeria/public/genero";

	$("#datos").empty();

	$.get(route, function(res){
		$(res).each(function(key,value)
		{
			tablaDatos.append("<tr><td>"+value.genre+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Eliminar(btn){
	var route = "http://localhost/Joyeria/public/genero/"+btn.value+"";
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
	var route = "http://localhost/Joyeria/public/genero/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#genre").val(res.genre);
		$("#id").val(res.id);
	});
}







$(document).on('click', '#actualizar',function (){
	

	var value = $("#id").val();
	
	var dato = $("#genre").val();
	var route = "http://localhost/Joyeria/public/genero/"+value+"";
	var token = $("#token").val();
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {"genre": dato},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});



$(document).on('click', '#registro',function (){
	var dato = $("#genre").val();
	var route = "http://localhost/Joyeria/public/genero";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{genre: dato},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
	});
});


