<?php
include('conn/conexion.php');
$codigo=mysqli_query($con,"SELECT CONCAT('COD',MAX(id)) AS COD FROM `tblprod` ")or
die("Problemas en el select:".mysqli_error($con));
$in='';
if($dato=mysqli_fetch_assoc($codigo)){
    $in .='<input type="text" class="form-control" value="'.$dato['COD'].'" disabled>';
}
  ?>     
      
                      


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Este css debe ir primero por si se necesita perosnalizar alguna clase de bootstraps-->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/prueba.js"></script>
    <!--<script src="assets/js/ajaxx.js"></script> -->
    <script src="assets/js/sweetalert.js"></script> <!--Colocamos este js primero y luego el de alertas -->
    <script src="assets/js/alertas.js"></script>    <!--Colocamos este js creado solo para las alertas -->
    <title>Crud con php</title>
</head>
<body>
    <header>
    <div class="cabecera">
            <div class="container">
                <h1> Crud con php Ajax y bootstrap 4</h1>
            </div>
    </div>
    </header>
    
    <div class="container menu">
    <form name="add_product" id="add_producto">
    <fieldset>
        <div class="row">
            <div class="col-xs-8 offset-md-4 text-center">
                <legend>Ingresa los datos del Producto</legend>
            </div>         
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <label for=""> Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="col-md-4 ">
                <label for=""> Codigo</label>
<?php echo $in; ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <label for=""> Categoria</label>
                <select name="categoria" id="cat" class="form-control">                    
                </select>
            </div>
            <div class="col-md-4">
                <label for=""> Proveedor</label>
                <input type="text" name="proveedor" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <label for=""> Precio</label>
                <input type="text" name="precio" id="" class="form-control">
            </div>
            <div class="col-md-4">
                <label for=""> Cantidad</label>
                <input type="number" name="quantity" min="1" max="10" class="form-control">
            </div>            
        </div>
        <div class="row">      
            <div class="col-md-8 offset-md-2">
                <br>
                <input type="submit" value="Guardar-datos" class="btn btn-primary" style="width:100%">
            </div>                          
        </div>
    </fieldset>
    </form>   
    <div id="enviando"></div> 
    <div id="resultado"></div>
    </div>

<script src="assets/js/ajaxx.js"></script> 
</body>
</html>
?>