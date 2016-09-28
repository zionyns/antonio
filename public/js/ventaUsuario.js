$(document).ready(function(){
    Carga();  
});


function Carga(){

	//tabla donde duardamos la lista de sucursales
	var tablaDatos = $('#tablaVentasUsuario > tbody');
	var route = "/antonio/public/venta/ventausuario";
  
	$('#tablaVentasUsuario > tbody').empty();
  console.log("+++");
    $.get(route, function(res){
    	$(res).each(function(key,value)
    	{
        console.log("---ppp",value.id);
    		tablaDatos.append("<tr><td>"+value.id+"</td><td>"+value.CodVenta+"</td><td>"+value.fecha+"</td><td>"+value.vendedor+"</td><td>"+value.preciototal+"</td><td>"+value.preciopagado+"</td><td>"+value.descuento+"</td><td>"+value.tipocambio+"</td><td><button value="+value.CodVenta+" OnClick='Mostrar(this);' class='btn btn-primary'>MOSTRAR DETALLE</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>ELIMINAR</button></td></tr>");
    	});

    $(function () {
   

    $('#tablaVentasUsuario').DataTable({
      
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

function Mostrar(btn){
    window.location.href = "/antonio/public/venta/"+btn.value+"/edit";
}

function Eliminar(btn){
  var route = "/antonio/public/venta/"+btn.value+"";
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
