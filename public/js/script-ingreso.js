$(document).ready(function(){
      $( function() {    
        $( "#codigo" ).autocomplete({
            source: "/antonio/public/producto/autocomplete",
            minlenght:1,
            autoFocus:true,
            select:function(e,ui){


                $('#idproducto').val(ui.item.id);
                $('#descripcion').val(ui.item.nombre);

                console.log(ui.item.stock);
            }
        });
    });
});




$("#total" ).focus(function() {
 
  var unit = $("#unitario").val();
  var cant = $("#cantidad").val();

  var total = unit*cant;

  $("#total").val(total);

});




$("#btnRecorrer").click(function () {


    if ($('#tabla >tbody >tr').length == 0){
        swal("ERROR", "INGRESE PRODUCTOS", "error");
        return;
    }


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



    var hoy = new Date();
    var dia = hoy.getDate();
    var mes = hoy.getMonth() + 1 ;
    var año = hoy.getFullYear();
    var hora = hoy.getHours();
    var minuto = hoy.getMinutes();
    var segundo = hoy.getSeconds();
    if(dia<10){
        dia='0'+dia;
    }
    if(mes<10){
        mes='0'+mes;
    }
    if(hora<10){
        hora='0'+hora;
    }
    if(minuto<10){
        minuto='0'+minuto;
    }
    if(segundo<10){
        segundo='0'+segundo;
    }    
    var fecha = año+'-'+mes+'-'+dia;
    var hora = hora+':'+minuto+':'+segundo;
    var hoy = fecha+' '+hora;




		var codigo = $("#CodIngreso").val();

        var fecha = hoy;
        //var usuario = $("#usuario").val();
        //var sucursal = $("#select-sucursales").val();

		alert(codigo + ' - ' + fecha + ' - ' + ' - '); 

		var route1 = "/antonio/public/ingreso";
		var token = $("#token").val();

		$.ajax({
				url: route1,
				headers: {'X-CSRF-TOKEN': token},
				type: 'POST',	
				dataType: 'json',
				 data:{CodIngreso: codigo,fecha:fecha},

				success:function(){
				$("#msj-success").fadeIn();
				},
				error:function(msj){
				$("#msj").html(msj.responseJSON.genre);
				$("#msj-error").fadeIn();
				}
		
		})
	
        $("#tabla tbody tr").each(function (index) 
        {
            var campo1, campo2, campo3;
            $(this).children("td").each(function (index2) 
            {
                switch (index2) 
                {
                    case 0: campo1 = $(this).text();
                            break;
                    case 1: campo2 = $(this).text();
                            break;
                    case 2: campo3 = $(this).text();
                            break;
                    case 3: campo4 = $(this).text();
                            break;
                    case 4: campo5 = $(this).text();
                            break;
                    
                }
                $(this).css("background-color", "#ECF8E0");
            })

            //alert(campo1 + ' - ' + campo2 + ' - ' + campo3+ ' - ' + campo4+ ' - ' + campo5);



            var route = "/antonio/public/detalleingreso";
			var token = $("#token").val();

			$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},
				type: 'POST',	
				dataType: 'json',
				data:{Producto: campo1,Cantidad:campo3,Peso:campo4,Precio:campo5,ingreso:codigo},

				success:function(){
				$("#msj-success").fadeIn();
				},
				error:function(msj){
				$("#msj").html(msj.responseJSON.genre);
				$("#msj-error").fadeIn();
				}
				})

        })//fin recorrido detales

        swal("SUCCESSFULL!", "PRODUCTOS AGREGADOS CORRECTAMENTE", "success");




                                        

                    } else {     
                        swal("CANCELADO","UD A CANCELADO LA OPERACION ","error");   
                    }
        });
    });

