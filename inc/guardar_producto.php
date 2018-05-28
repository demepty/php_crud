<?php
include('../conn/conexion.php');
$opcion=($_POST['op']);
$nombre=$_POST['nombre'];
$codigo=$_POST['cod'];
$categoria=$_POST['categoria'];
$proveedor=$_POST['proveedor'];
$precio=$_POST['precio'];
$cantidad=$_POST['quantity'];


switch ($opcion) {
	case '1':
		guardar($nombre,$codigo,$categoria,$proveedor,$precio,$cantidad,$con);
	break;
	case '2':
		echo('Noooooooo');
	break;
	default:
		echo('Noooooooo tampocooo');
	break;
}

function guardar($nombre,$codigo,$categoria,$proveedor,$precio,$cantidad,$con)
{		
		$stdi=mysqli_query($con,"INSERT INTO tblprod (prod_name,prod_code,id_categoria,id_proveedor,price,prod_qty) VALUES('$nombre', '$codigo','$categoria','$proveedor','$precio','$cantidad')") 
		or die ( "Algo ha ido mal en la consulta a la base de datos");
		
		if ($stdi)
		{
			echo ("
			<div class='alert alert-success' role='alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			<strong>¡Bien hecho!</strong>						
			</div>");
		}
	
	else
	{
		echo ("	<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong>¡Error!</strong></div>");	
	}
	mysqli_close( $con );
}

?>
