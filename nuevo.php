                
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("headers.html");?>
</head>
<body>
    <header>
    <?php    include ("head.html");  ?>
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
                <input type="text" hidden value='1' name='op'>            
                <label for=""> Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="col-md-4 ">
                <label for=""> Codigo</label>
                <input type="text" class="form-control"  name="cod" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <label for=""> Categoria</label>
                <select name="categoria" id="cat" class="form-control" required>                    
                </select>
            </div>
            <div class="col-md-4">
                <label for=""> Proveedor</label>
                <select name="proveedor" id="elpro" class="form-control" required>                    
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <label for=""> Precio</label>
                <input type="text" name="precio" id="" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""> Cantidad</label>
                <input type="number" name="quantity" min="1" max="10" class="form-control" required>
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
    <div class="container" style="padding-top:30px;">
        <div class="row">
            <div class="text-center col-md-4 offset-md-4 ">
                <a href="index.php" class="btn btn-lg btn-primary test button3"><span class="fa fa-home"></span> Inicio</a>  
            </div>
        </div>
          
    </div> 

<script src="assets/js/ajaxx.js"></script> 
</body>
</html>
