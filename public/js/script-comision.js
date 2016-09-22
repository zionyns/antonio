
function Carga(nombre,fechaInicial,fechaFinal){

    eliminarCajas();
	//tabla donde duardamos la lista de comisiones
	var tablaDatos = $("#tablaComisiones > tbody");
	
	var route = "/Sonesta2/public/comisiones";

	var vendedor=$("#vendedor").val();
	
	$("#tablaComisiones > tbody").empty();
	var monedas=[];
	var comisiones=[];

	$.get(route, function(res){
		$(res).each(function(key,value)
		{
			var fechaUsuario=value.created_at;
			var arregloFechaUsuario=fechaUsuario.split(" ");
			var fechaReferente=arregloFechaUsuario[0].trim();
			fechaReferente=fechaReferente.replace(/[/]/gi,"-");
			if(nombre==value.usuario && fechaInicial<=fechaReferente && fechaFinal>=fechaReferente)
			{	
				//monedas.push(value.moneda);
				array_push(monedas,comisiones,value.moneda,value.comision);
				tablaDatos.append("<tr><td>"+value.id+"</td><td>"+value.venta+"</td><td>"+value.moneda+"</td><td>"+value.comision+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
			}
			
		});
		for (var i=0; i<monedas.length; i++)
		{
			agregarCampo(monedas[i],comisiones[i]);
			//console.log(monedas[i]);
			//console.log(comisiones[i]);
		} 

		$(function () {
   

    $('#tablaComisiones').DataTable({
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

function array_push(arreglo_monedas,arreglo_comisiones,moneda,comision)
{
	var existe=false;
	var valor=0;
	for (var i=0;i<arreglo_monedas.length;i++) {//si el elemento existe no se agrega
		if (arreglo_monedas[i]==moneda) 
		{
			existe=true;
			arreglo_comisiones[i]=parseInt(arreglo_comisiones[i])+parseInt(comision);
		}
	}
	if (existe==false)//si el elemento no existe en el arreglo_monedas se agrega
	{
		arreglo_monedas.push(moneda);
		arreglo_comisiones.push(comision);
		//console.log("elemento agregado "+moneda);
	}
	//console.log("elemento diferente no agregado");
}
function agregarCampo(moneda,comision) 
{ 
	var a = document.createElement('label');
	a.innerHTML=moneda+": ";
	document.getElementById('cajasComisiones').appendChild(a); 
	//console.log("agregado");
    var o = document.createElement('input'); 
    o.type = "text"; 
    o.name = "txt"+moneda; 
    o.value = comision;
    o.readOnly=true;
    //o.style.width="50px";
    o.className="form-control";
    document.getElementById('cajasComisiones').appendChild(o); 
}
function eliminarCajas()
{
	$("#cajasComisiones").empty();
}