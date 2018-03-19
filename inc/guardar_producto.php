<?php

include('../conn/conexion.php');

$nombre=$_POST['nombre'];
$codigo=$_POST['cod'];
$categoria=$_POST['categoria'];
$proveedor=$_POST['proveedor'];
$precio=$_POST['precio'];
$cantidad=$_POST['quantity'];

$stdi=mysqli_query($con,"INSERT INTO tblprod (prod_name,prod_code,id_categoria,prod_ctry,price,prod_qty) VALUES('$nombre', '$codigo','$categoria','$proveedor','$precio','$cantidad')");

if ($stdi) {
	echo ("
	<div class='alert alert-success' role='alert'>
							<button type='button' class='close' data-dismiss='alert'>&times;</button>
							<strong>¡Bien hecho!</strong>						
					</div>");
}
else{
	echo ("
	<div class='alert alert-danger' role='alert'>
							<button type='button' class='close' data-dismiss='alert'>&times;</button>
							<strong>¡Error!</strong>						
					</div>");

}


mysqli_close( $con );
?>
