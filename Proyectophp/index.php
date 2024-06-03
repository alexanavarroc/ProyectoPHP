<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Lista de libros 📚</h1>
            <div>
                <a href="crear.php" class="btn btn-primary">Añadir libro nuevo</a>
            </div>
        </header>

        <?php
        session_start();

        if(isset($_SESSION["crear"])) {
            echo '<div class="alert alert-success">' . $_SESSION["crear"] . '</div>';
            unset($_SESSION["crear"]);
        }

        if(isset($_SESSION["editar"])) {
            echo '<div class="alert alert-success">' . $_SESSION["editar"] . '</div>';
            unset($_SESSION["editar"]);
        }

        if(isset($_SESSION["borrar"])) {
            echo '<div class="alert alert-success">' . $_SESSION["borrar"] . '</div>';
            unset($_SESSION["borrar"]);
        }
        ?>

        <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Tipo</th>
                <th>Action</th>
              </tr>  
            </thead>
            <tbody>
                <?php
                include("conexion.php");

                // Crear base de datos si no existe
                $dbName = 'db';  // Reemplaza con el nombre de tu base de datos
                $conn = mysqli_connect($dbHost, $dbUser, $dbPass);
                if (!$conn) {
                    die("Error de conexión: " . mysqli_connect_error());
                }

                $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
                if (mysqli_query($conn, $sql)) {
                    mysqli_select_db($conn, $dbName);
                } else {
                    die("Error al crear la base de datos: " . mysqli_error($conn));
                }

                // Crear tabla si no existe
                $table_sql = "CREATE TABLE IF NOT EXISTS libros (
                    Id INT AUTO_INCREMENT PRIMARY KEY,
                    titulo VARCHAR(255) NOT NULL,
                    autor VARCHAR(255) NOT NULL,
                    tipo VARCHAR(50) NOT NULL
                )";

                if (!mysqli_query($conn, $table_sql)) {
                    die("Error al crear la tabla: " . mysqli_error($conn));
                }

                // Obtener datos de la tabla
                $query = "SELECT Id, titulo, autor, tipo FROM libros";
                $resultado = mysqli_query($conn, $query);

                if(!$resultado){
                    die("Error" . mysqli_error($conn));
                }

                while ($row = mysqli_fetch_array($resultado)) {
                ?>
                    <tr>
                        <td><?php echo $row["Id"]; ?></td>
                        <td><?php echo $row["titulo"]; ?></td>
                        <td><?php echo $row["autor"]; ?></td>
                        <td><?php echo $row["tipo"]; ?></td>
                        <td>
                            <a href="verMas.php?Id=<?php echo $row["Id"]; ?>" class="btn btn-info">Leer más</a>
                            <a href="editar.php?Id=<?php echo $row["Id"]; ?>" class="btn btn-warning">Editar</a>
                            <a href="borrar.php?Id=<?php echo $row["Id"]; ?>" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>
</html>
