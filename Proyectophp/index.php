<?php
    $nombre_servidor = "localhost";
    $username = "root";
    $pasword = "";

    //conexion
    $conn = new mysqli($nombre_servidor, $username, $password);

    //verificar conexion

    if($conn->connect_error){
        die("falló la conexión: " . $conn->connect_error);
    }

    echo "Conexión al servidor fue existoso! :)"; // eliminar después 

    // crear bd 
    $sql = "CREATE DATABASE IF NOT EXISTS prueba_db";
    //correr sql 
    if ($conn->query($sql) === TRUE){
        echo "se creó correctamente la BD";
    
    } else {
        echo "error al crear BD:" .$conn->error;
    }

    //crear tabla permisos 
    $sql = "CREATE TABLE IF NOT EXISTS permisos(
        id INT(1) AUTO_INCREMENT,
        permiso VARCHAR 50
        PRIMARY KEY(id)
        )";

            //correr sql 
    if ($conn->query($sql) === TRUE){
        echo "se creó correctamente la BD";
    
    } else {
        echo "error al crear tabla permisos:" .$conn->error;
    }


     //crear tabla usuarios 
     $sql = "CREATE TABLE IF NOT EXISTS usuarios(
        id INT(3) AUTO_INCREMENT,
        username VARCHAR 50,
        password VARHCAR(50),
        id_permiso INT(1),
        PRIMARY KEY(id),
        FOREIGN KEY (id_permiso) REFERENCES permisos(id)
        )";

            //correr sql 
    if ($conn->query($sql) === TRUE){
        echo "se creó correctamente la tabla usuarios";
    
    } else {
        echo "error al crear tabla usuarios:" .$conn->error;
    }

?>

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
                $sql = "SELECT * FROM libros";
                $resultado = mysqli_query($conn,$sql);

                while ($row = mysqli_fetch_array($resultado)) {
                ?>
                    <tr>
                        <td><?php echo $row["Id"]; ?></td>
                        <td><?php echo $row["titulo"]; ?></td>
                        <td><?php echo $row["autor"]; ?></td>
                        <td><?php echo $row["tipo"]; ?></td>
                        
                        <td>
                            <a href="verMas.php?Id=<?php echo $row["Id"] ?>" class="btn btn-info">Leer más</a>
                            <a href="" class="btn btn-warning">Editar</a>
                            <a href="" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>

<<<<<<< HEAD
        </table>
=======
        <div class="col-8 p-4">
            <table class="table">
                <thead>
                        <tr>
                            <th scope="col">Id Alumno</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Id Libros</th>
                            <th scope="col">Carrera</th>
                            <th scope="col"></th>

                        </tr>
                </thead>
                <tbody>
                    <?php
                    include "conect/conexion.php";
                    $sql = $conexion->query(" select * from alumno ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->idalumno ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->idlibros ?></td>
                            <td><?= $datos->carrera ?></td>

                            <td>
                                <a href="">editar</a>
                                <a href="">eliminar</a>
                            </td>
                        </tr>
                    <?php }
                    
                    ?>
                   
                </tbody>
            </table> 

        </div>
>>>>>>> 97245d0331e8cece1796ce93a7843ba3762a7d18
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>