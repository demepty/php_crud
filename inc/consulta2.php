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

if (isset($_POST['pro']) ? $_POST['pro'] : '') {
   
    $json1   =array();    
    $sql1    ="SELECT id_proveedor,CONCAT(nombre,' ',apellido) as proveedor FROM tbl_proveedor ";
    $result1 =mysqli_query($con,$sql1) or die ( "Algo ha ido mal en la consulta a la base de datos");

    while ($a1 = mysqli_fetch_assoc($result1)) {

        $json1[]=$a1;
        # code...
        }
    echo json_encode($json1);
}  

// cerrar conexión de base de datos
mysqli_close( $con );
 ?>