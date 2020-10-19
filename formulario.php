<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>
        <h1>*** ADMINISTRACION DE PRODUCTOS ***</h1>
        <hr>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                <form class="form" action="formulario.php" method="POST">
                <div class="row">
                        <div class="col">
                            <label for="precio">Nombre Producto:</label>
                            <input type="text" class="form-control" placeholder="Ingrese el Nombre" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="producto">Marca del producto:</label>
                            <input type="text" class="form-control" placeholder=" Ingrese la Marca" required>
                        </div>
                        <div class="col-6">
                            <label for="marca">Precio del Producto:</label>
                            <input type="text" class="form-control" placeholder="Ingrese el Precio" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="descripcion">Descripcion Producto:</label>
                            <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese una Descripcion"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-success">REGISTRAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </main>
    <footer></footer>
    


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>