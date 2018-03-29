<?php

include('../conn/conexion.php');
if((isset($_POST['nombre']) ? $_POST['nombre'] : '') && (isset($_POST['cod']) ? $_POST['cod'] : '')
	&&(isset($_POST['categoria']) ? $_POST['categoria'] : '')&&(isset($_POST['proveedor']) ? $_POST['proveedor'] : '')
	&&(isset($_POST['precio']) ? $_POST['precio'] : '')&&(isset($_POST['quantity']) ? $_POST['quantity'] : '')
	){

	$nombre=$_POST['nombre'];
	$codigo=$_POST['cod'];
	$categoria=$_POST['categoria'];
	$proveedor=$_POST['proveedor'];
	$precio=$_POST['precio'];
	$cantidad=$_POST['quantity'];
	
	$stdi=mysqli_query($con,"INSERT INTO tblprod (prod_name,prod_code,id_categoria,prod_ctry,price,prod_qty) VALUES('$nombre', '$codigo','$categoria','$proveedor','$precio','$cantidad')") 
	or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	if ($stdi) {
		echo ("
		<div class='alert alert-success' role='alert'>
								<button type='button' class='close' data-dismiss='alert'>&times;</button>
								<strong>¡Bien hecho!</strong>						
						</div>");
	}
}

else{
	echo ("	<div class='alert alert-danger' role='alert'>
							<button type='button' class='close' data-dismiss='alert'>&times;</button>
							<strong>¡Error!</strong>						
					</div>");

}
mysqli_close( $con );
?>
