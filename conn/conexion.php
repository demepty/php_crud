<?php
$dbserver = "localhost";
$dbuser = "root";
$password = "";
$dbname = "crud2";

$con = mysqli_connect ($dbserver, $dbuser, $password) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $con, $dbname) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>