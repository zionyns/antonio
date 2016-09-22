$(document).ready(function(){
		Carga();	
});



function Carga(){

	
	//tabla donde duardamos la lista de sucursales

	
	
	var ingreso=$("#ingreso").text();

	var tablaDatos = $('#Tdetalles > tbody');
	var route = "/Sonesta2/public/detalleingreso/detalles/"+ingreso+"";

	

	$('#Tdetalles > tbody').empty();

	$.get(route, function(res){
		$(res).each(function(key,value)
		{
			tablaDatos.append("<tr><td>"+value.id+"</td><td>"+value.CodProducto+"</td><td>"+value.Cantidad+"</td><td>"+value.Peso+"</td><td>"+value.Precio+"</td><td>"+value.ingreso+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		
		});

	$(function () {
   

    
  	});


	});

}

function Mostrar(btn){
	var route = "/Sonesta2/public/detalleingreso/"+btn.value+"/edit";

	$.get(route, function(res){
		
		//guardamos en un hiden que detalle es...
		$("#id").val(res.id);

		$("#producto").val(res.Producto);
		$("#cantidad").val(res.Cantidad);
		$("#peso").val(res.Peso);
		$("#precio").val(res.Precio);
		$("#ingreso").val(res.ingreso);
		
	});
}


$(document).on('click', '#actualizar',function (){
	
	//recuperamos el valor del hidden de la ventana emergente
	var value = $("#id").val();


	var cantidad = $("#cantidad").val();
	var peso = $("#peso").val();
	var precio = $("#precio").val();
	

	var route = "/Sonesta2/public/detalleingreso/"+value+"";
	var token = $("#token").val();




	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {"Cantidad": cantidad,"Peso":peso,"Precio":precio},
		success: function(){
			
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();

		}
	});


});








function Eliminar(btn){
	var route = "/Sonesta2/public/detalleventa/"+btn.value+"";
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




