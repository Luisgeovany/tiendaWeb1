<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirmacion.css">
    <title>Confirmacion</title>
   
<style>
    h1{
        text-align: center;
        font-size: 40px;
        color :white;
        font-family: raleway;        
        background:  green;
        color: #fff;
        text-decoration: none;
        padding: 12px 20px;
        
        border-radius: 15px;
    }
    a{
        font-size: 40px;
        text-align: center;       
        background:  rgb(156, 64, 218);
        color: #fff;
        text-decoration: none;
        padding: 12px 20px;
        justify-content: center;
        border-radius: 15px;
        display: flexbox;
    }
    a:hover{
        text-decoration: none;
        color:white;
        font-size: 45;
        font-weight: bold; 
    }

</style>
</head>
<body>
    <?php

        class BaseDatos{
            
            public $usuarioBD="root";
            public $passwordBD="";

            public function __construct(){}

            public function conectarBD(){

            try{
                $infoDB="mysql:host=localhost;dbname=tiendaweb1bd";
                $conexionBD=new PDO($infoDB,$this->usuarioBD,$this->passwordBD);
                return($conexionBD);

                }catch(PDOException $error){
                echo($error-> getMessage());
                }
            }
            public function agregarDatos($consultaSQL){

                $conexionBD=$this->conectarBD();
        
                $consultaInsertarDatos= $conexionBD->prepare($consultaSQL);
        
                $resultado=$consultaInsertarDatos->execute();
                
                if($resultado){
                    echo("<h1>Producto agregado con exito</h1>");
                    echo '<a href="listaproductos.php">Ver Lista de Productos</a>';
              
                }else{
                echo("Error");
            }
    
        }
    
    public function consultarDatos($consultaSQL){
        
        $conexionBD=$this->conectarBD();
    
        $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);
    
        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
    
        $consultaBuscarDatos->execute();
    
        return($consultaBuscarDatos->fetchAll());
    
    }


    
    
    
    public function eliminarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        
        $consultaEliminarDatos= $conexionBD->prepare($consultaSQL);

        $resultado=$consultaEliminarDatos->execute();

        if($resultado){
            echo("<h1>Producto Eliminado con exito</h1>");   
            echo '<a href="listaproductos.php">Ver Lista de Productos</a>';
              
        }else{         
           echo("Error agregando el registro");
        }
    }
    public function editarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
   
        $consultaEditarDatos= $conexionBD->prepare($consultaSQL);

        $resultado=$consultaEditarDatos->execute();

        if($resultado){
            echo("Registro editado con exito");
            echo '<a href="listaproductos.php">Ver Lista de Productos</a>';
        }else{
            echo("Error editando el registro");
        }
   
   }
   

   
}
?>
</body>
</html>
