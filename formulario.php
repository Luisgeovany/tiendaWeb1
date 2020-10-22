<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Administracion de Productos</h1>
    <form class="form-register" action="registrar.php" method="post">
        <h2 class="form-titulo">REGISTRA UN PRODUCTO</h2>
        <div class="contenedor-inputs">
            <input type="text" class="input-100" name="nombre" placeholder="Nombre del Producto" required>
            <input type="text"class="input-50" name="marca"placeholder="Marca del Producto"required>
            <input type="text"class="input-50" name="precio" placeholder="Precio del Producto"required>
            <input type="submit" value="REGISTRAR" class="btn-enviar">
            <p></p>


        </div>
    </form>
    
</body>
</html>