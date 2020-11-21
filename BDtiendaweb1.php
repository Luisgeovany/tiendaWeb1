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
            // Atributos--Variables
            public $usuarioBD="root";
            public $passwordBD="";


            // constructor
            public function __construct(){}

            // metodos == Funciones
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

                //1.Conectarme a la base de datos
                $conexionBD=$this->conectarBD();
        
                //2.Preparar la consulta que se va a realizar
                $consultaInsertarDatos= $conexionBD->prepare($consultaSQL);
        
                //3. Ejecutar la consulta
                $resultado=$consultaInsertarDatos->execute();
                
                //4. Verificar el resultado
                if($resultado){
                    echo("<h1>Producto agregado con exito</h1>");
                    echo '<a href="listaproductos.php">Ver Lista de Productos</a>';
              
                }else{
                echo("Error");
            }
    
        }
    
    public function consultarDatos($consultaSQL){
        // Conectar la base de datos
        $conexionBD=$this->conectarBD();
    
        //2.Preparar la consulta que se va a realizar
        $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);
    
        //3. Definir la forma en la que vmos a traer los datos
        // setFetchMode
        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
    
        //4.Ejecutar la consulta
        $consultaBuscarDatos->execute();
    
        //5. Retornar los datos consultados
        return($consultaBuscarDatos->fetchAll());
    
    }


    
    
    
    public function eliminarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        
        //2.Preparar la consulta que se va a realizar
        $consultaEliminarDatos= $conexionBD->prepare($consultaSQL);
        
        //3. Ejecutar la consulta
        $resultado=$consultaEliminarDatos->execute();

        //4. Verificar el resultado
        if($resultado){
            echo("<h1>Producto Eliminado con exito</h1>");   
            echo '<a href="listaproductos.php">Ver Lista de Productos</a>';
              
        }else{         
           echo("Error agregando el registro");
        }
    }
    public function editarDatos($consultaSQL){

        //1.Conectarme a la base de datos
        $conexionBD=$this->conectarBD();
   
        //2.Preparar la consulta que se va a realizar
        $consultaEditarDatos= $conexionBD->prepare($consultaSQL);
    
        //3. Ejecutar la consulta
        $resultado=$consultaEditarDatos->execute();
    
        //4. Verificar el resultado
        if($resultado){
            echo("Registro editado con exito");
        }else{
            echo("Error editando el registro");
        }
   
   }
   
}
?>
</body>
</html>
