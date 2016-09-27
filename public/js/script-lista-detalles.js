$(document).ready(function(){
		Carga();	
});



function Carga(){

	
	//tabla donde duardamos la lista de sucursales

	
	
	var venta=$("#venta").text();

	var tablaDatos = $('#Tdetalles > tbody');
	var route = "/antonio/public/detalleventas/detalles/"+venta+"";



	$('#Tdetalles > tbody').empty();

	$.get(route, function(res){
		$(res).each(function(key,value)
		{
			tablaDatos.append("<tr><td>"+value.id+"</td><td>"+value.CodProducto+"</td><td>"+value.descripcion+"</td><td>"+value.cantidad+"</td><td>"+value.total+"</td><td>"+value.venta+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});

	$(function () {
   

    
  		});


	});

}

function Mostrar(btn){
	var route = "/antonio/public/detalleventa/"+btn.value+"/edit";

	$.get(route, function(res){
		
		//guardamos en un hiden que detalle es...
		$("#id").val(res.id);

		$("#producto").val(res.producto);
		$("#descripcion").val(res.descripcion);
		$("#cantidad").val(res.cantidad);
		$("#total").val(res.total);
		
	});
}


$(document).on('click', '#actualizar',function (){
	
	//recuperamos el valor del hidden de la ventana emergente
	var value = $("#id").val();
	var cantidad = $("#cantidad").val();
	var total = $("#total").val();
	

	var route = "/antonio/public/detalleventa/"+value+"";
	var token = $("#token").val();




	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {"cantidad": cantidad,"total":total},
		success: function(){
			
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();

		}
	});


});

function Eliminar(btn){
	var route = "/antonio/public/detalleventa/"+btn.value+"";
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




