<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Registrar</title>
</head>
<body>
    
</body>
</html>

<?php

include("BDtiendaweb1.php");

if(isset($_POST["botonRegistrar"])){
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $imagen=$_POST["imagen"];

    $transaccion=new BaseDatos();
  
    $consultaSQL="INSERT INTO productos(nombre, marca,precio,imagen)
     VALUES ('$nombre','$marca','$precio','$imagen')";

     $transaccion->agregarDatos(($consultaSQL));

     header("location:formulario.php");

}
    
?>