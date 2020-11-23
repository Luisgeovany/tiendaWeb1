<?php 

    include("BDtiendaweb1.php");

    $id=$_GET["id"];

    if (isset($_POST["botonEditar"])){

        $nombre=$_POST["nombreEditar"];
        $marca=$_POST["marcaEditar"];
        $precio=$_POST["precioEditar"];

        
        $transaccion=new BaseDatos();

        $consultaSQL="UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio' WHERE ID='$id'";

        $transaccion->editarDatos($consultaSQL);

       header("location:listaproductos.php");

    }
?>