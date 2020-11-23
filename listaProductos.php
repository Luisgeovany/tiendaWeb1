<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/listaproductos.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col">
				<nav>
					<ul>   
						<li><a href="formulario.php"<span class="icon icon-home2">Registrar Productos</span></a>
						</li>
						<li><a href="listaproductos.php"<span class="icon icon-menu">Lista Productos </span></a>
						</li>
						<li><a href="contacto.php"<span class="icon icon-mail3">Contacto</span></a>
						</li>
					</ul>
				</nav>              
            </div>
        </div>        
    </div>  
</header>
    <br>

    <?php 

        include("BDtiendaweb1.php");

        //1. Crear un objeto de la clase BaseDatos
        $transaccion= new BaseDatos();

        //2. Crear la consulta SQL para buscar datos
        $consultaSQL="SELECT * FROM productos where 1";

        //3. Utilizar el metodo para consultarDatos()
        $productos=$transaccion->consultarDatos($consultaSQL);
        

        
   
    ?>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($productos as $producto):?>

                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="<?php echo($producto["Imagen"])?>" class="card-img-top" alt="imagen">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo($producto["Nombre"]) ?></h3>
                            <p class="card-text"><?php echo($producto["Marca"]) ?></p>
                            <p class="card-text"><?php echo($producto["Precio"]) ?></p>
                            <a href="eliminarproductos.php?id=<?php echo($producto["ID"])?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["ID"])?>">    
                                Editar
                            </button>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="editar<?php echo($producto["ID"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">EDITAR PRODUCTO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarproductos.php?id=<?php echo($producto["ID"])?>" method="POST">
                                        <div class="form-group">
                                            <label>nombre:</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["Nombre"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>marca:</label>
                                            <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["Marca"])?>">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>precio:</label>
                                            <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["Precio"])?>">
                                           
                                        </div>
                                        <button type="submit" class="btn btn-warning    " name="botonEditar">Editar</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>


                </div>

            <?php endforeach?>

        </div>
    
    
    </div>
                
    
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>