<?php

include("BDtiendaweb1.php");

$id=$_GET["id"];

$transaccion=new BaseDatos();

$consultaSQL="DELETE FROM productos WHERE ID='$id'";

$transaccion->eliminarDatos($consultaSQL);











?>