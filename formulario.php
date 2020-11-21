<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="style.css">
   
    <title>Formulario de Registro</title>
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
    <main>
        <h1>Administracion de Productos</h1>
        <form class="form-register" action="productos.php" method="post">
            <h2 class="form-titulo">Registrar un Producto</h2>
            <div class="contenedor-inputs">
                <input type="text" class="input-100" name="nombre" placeholder="Nombre del Producto" required>
                <input type="text"class="input-50" name="marca"placeholder="Marca del Producto"required>
                <input type="text"class="input-50" name="precio" placeholder="Precio del Producto"required>
                <input type="text"class="input-100" name="imagen" placeholder="URL imagen">
                 
                <input type="submit" value="REGISTRAR" name="botonRegistrar" class="btn-enviar">
            </div>
        </form>
    </main>
    
</body>
</html>