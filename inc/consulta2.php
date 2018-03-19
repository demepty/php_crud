<?php
include('../conn/conexion.php');

if (isset($_POST['dato']) ? $_POST['dato'] : '') {
   
    $json   =array();    
    $sql    ="SELECT id_categoria,desc_categoria FROM categoria ";
    $result =mysqli_query($con,$sql) or die ( "Algo ha ido mal en la consulta a la base de datos");

    while ($a = mysqli_fetch_assoc($result)) {

        $json[]=$a;
        # code...
        }
    echo json_encode($json);
}  
// cerrar conexión de base de datos
mysqli_close( $con );
 ?>