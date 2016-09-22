
$(document).ready(function(){
		Carga();	
});


function Carga(){


	//tabla donde duardamos la lista de sucursales
	var tablaDatos = $('#Tproductos > tbody');
	var route = "/Sonesta2/public/producto";

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
	var route = "/Sonesta2/public/producto/"+btn.value+"";
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
	var route = "/Sonesta2/public/producto/"+btn.value+"/edit";

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
	

	var route = "/Sonesta2/public/producto/"+value+"";
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


///////////////////////REGISTRO SUCURSAL///////////////////////////////////////7
$(document).on('click', '#registro-producto',function (){
	//recuperamos valores
	

	var codigo = $("#CodProducto").val();
	var nombre = $("#nombre").val();
	var tipo = $("#tipo").val();
	var peso = $("#peso").val();
	var stock = $("#stock").val();
	var precio = $("#precio").val();
	var sucursal = $("#sucursal").val();
	
	//ruta a la que hacemos referencia
	
	var route = "/Sonesta2/public/producto";
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
});