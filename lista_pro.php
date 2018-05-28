
<!DOCTYPE html>
<html lang="en">
<head>
<?php    include ("headers.html");  ?>
 
    <title>Crud con php</title>
</head>
<body>
    <header>
    <?php    include ("head.html");  ?>
    </header>
    <div class= "container">
        <form action="">
            <h4> Datos del Producto</h4>
            <div class="form-row">
                <input type="text" hidden id='id_pro'>
                <div class="form-group col-md-4">
                    <label for="" >Nombre</label>
                    <input type="text" class="form-control" id='name'>         
                </div>
                <div class="form-group col-md-8">
                    <div class='col-md-4'>
                        <label for="" >Categoria </label>
                        <input type="text" class="form-control" id='cat'>
                    </div>
                    <div class='col-md-4'>
                        <label for="">Nueva Categoria</label>
                        <select name="" id="sele_cat" class="form-control">
                            <option value="">data </option>
                        </select>

                    </div>
                    

                </div>
            
                <div class="form-group col-md-4">
                    <label for="" > Precio</label>
                    <input type="text" class="form-control" id='price'>                
                </div> 
            </div>
          
            
            
        </form>
        
    </div>
    <div class="container menu">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"> Listado de los productos</h2>
            </div>
           

        </div>
        <div class="row">
            <div class="col-md-12">
            <table class="table" id="my_table">
                <thead>
                    <tr>
                    <th >#</th>
                    <th >Nombre</th>
                    <th >Codigo</th>
                    <th >Categoria</th>
                    <th >Precio</th>
                    <th >Stock</th>
                    <th >Acciones</th>
                    </tr>
                </thead>
               
            </table>
                
            </div>
            
        </div>    
    </div>
    <div class="container" style="padding-top:30px;">
        <div class="row">
            <div class="text-center col-md-4 offset-md-4">
                <a href="index.php" class="btn btn-lg btn-primary"><span class="fa fa-home"></span> Inicio</a>  
            </div>
        </div>
          
    </div>   
<script src="assets/js/tablas.js"></script>
</body>
</html>