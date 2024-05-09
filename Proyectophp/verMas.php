<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ver Mas</title>
    <style>
        .detalle-libros{
            background-color:hotpink;
            padding:50px;

        }
    </style>

</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Detalle del libro 📚</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Inicio</a>
            </div>
        </header>
        <div class="detalle-libros my-4">
            <?php
                if(isset($_GET["Id"])){
                    $Id = $_GET["Id"];
                    include("conexion.php");
                    $sql = "SELECT * FROM libros WHERE Id=$Id";
                    $resultado = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($resultado);
                ?>
                <h2>Titulo</h2>
                <p><?php echo $row["titulo"]; ?></p>

                <h2>autor</h2>
                <p><?php echo $row["autor"]; ?></p>

                <h2>Tipo</h2>
                <p><?php echo $row["tipo"]; ?></p>

                <h2>Descripcion</h2>
                <p><?php echo $row["descripcion"]; ?></p>
                
                <?php
                }
            ?>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>