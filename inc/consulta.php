<?php
include('../conn/conexion.php');

$json   =array();
$id     =isset($_POST['id']) ? $_POST['id'] : '';;
$sql    ="SELECT * FROM usurios WHERE ID = '$id' ";
$result =mysqli_query($con,$sql) or die ( "Algo ha ido mal en la consulta a la base de datos");

while ($a = mysqli_fetch_assoc($result)) {

    $json[]=$a;
    # code...
}
echo json_encode($json);
    
// cerrar conexión de base de datos
mysqli_close( $con );
 ?>