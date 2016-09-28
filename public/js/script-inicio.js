

//en y ira nombre de productos y en a su cantidad por stock

function Carga(){


  //ruta de productos faltantes
  
  var route = "/antonio/public/producto/faltante";

  //obetenemos productos faltantes en formato json
  //stock < 3
  $.get(route, function(res){

  //obtenemos la barra de los 10 primeros productos que el
  //stock sea menor que 5
  Morris.Bar({

  element: 'bar',
  data:$(res),
  xkey: 'CodProducto',
  ykeys: ['stock'],
  labels: ['STOCK']
});

    


  });

}


$(document).ready(function(){
Carga();

});


/*Morris.Bar({


  element: 'bar',
  data: [
    { y: '2006', a: 75, b:100 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 75,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 75,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 75, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});





Morris.Donut({
  element: 'donut',
  data: [
    {label: "Download Sales", value: 30},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 30}
  ]
});





});*/

