<?php  

include'conexion.php';
include_once 'reportes/src/Cezpdf.php';


$conn=crearConexion();
$sql= "SELECT * FROM TUsuario";
$result = $conn->query($sql);
$nfilas = $result->num_rows;

//$result=mysql_query($sql);

$fruits = array ("fruits" => array ( "a" => "orange",
                                       "b" => "banana",
                                       "c" => "apple"
                                     ),
                  "numbers" => array ( 1,
                                       2,
                                       3,
                                       4,
                                       5,
                                       6
                                     ),
                  "holes"   => array (      "first",
                                       5 => "second",
                                            "third"
                                     )

);



$data2 = array(
 array('num'=>1,'name'=>'gandalf','type'=>'wizard')
,array('num'=>2,'name'=>'bilbo','type'=>'hobbit','url'=>'http://www.ros.co.nz/pdf/')
,array('num'=>3,'name'=>'frodo','type'=>'hobbit')
,array('num'=>4,'name'=>'saruman','type'=>'bad dude','url'=>'http://sourceforge.net/projects/pdf-php')
,array('num'=>5,'name'=>'sauron','type'=>'really bad dude')
);

//$data2=array("1","2","3");

//array_push($data,$data2);

//var_dump($data) ;
 

 $data = array();
 if($result!=NULL){
     if($nfilas>0){
       
       while($row= $result->fetch_assoc()){
          //here you can work with the results...

   		  array_push($data,$row);
          		//$valor = "ID:".$row['idusuario']." NAME: ".$row['nombres']." EMAIL: ".$row['correo']."pasword : ".$row['password']."telefono : ".$row['telefono']."Tipo usuario :".$row['tipousuario']."usuario: ".$row['usuario'];
       }
    }
}

//var_dump($data) ;
//var_dump($fruits);
//var_dump($data2) ;

$pdf = new CezPDF("a4");
$cols2 = array('num'=>'No', 'type'=>'Type','name'=>'<i>Alias</i>');
$cols = array('idusuario'=>'idusuario','usuario'=>'<i>usuario</i>', 'nombres'=>'nombres','correo'=>'<i>email</i>','password'=>'<i>password</i>','telefono'=>'<i>telefono</i>','tipousuario'=>'<i>tipo usuario</i>');

$pdf->ezText("", 10);
$pdf->ezText("", 10);
$pdf->ezText("", 10);
$pdf->ezText("", 10);
$pdf->ezText("", 10);
$pdf->ezText("", 10);
$pdf->ezText("", 10);
$pdf->ezText("", 10);
$pdf->ezText("", 10);

$pdf->ezTable($data, $cols);


if (isset($_GET['d']) && $_GET['d']){
    echo $pdf->ezOutput(TRUE);
} else {
  $pdf->ezStream();
}


?>