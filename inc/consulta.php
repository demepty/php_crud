<?php
include('../conn/conexion.php');

$sql    ="SELECT * FROM tblprod order by prod_name";
$result =mysqli_query($con,$sql) or die ( "Algo ha ido mal en la consulta a la base de datos");

while ($a = mysqli_fetch_assoc($result)) {

    $json["data"][]=$a;
    # code...
}
echo json_encode($json);
    
// cerrar conexión de base de datos
mysqli_free_result($result); //liberando memoria
mysqli_close( $con ); //cerrando la conexion
 ?>