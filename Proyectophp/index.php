
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
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["crear"];
                unset($_SESSION["crear"]);
                ?>
            </div>
            <?php
        }
        ?>

        <?php
        
        if(isset($_SESSION["editar"])) {
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["editar"];
                unset($_SESSION["editar"]);
                ?>
            </div>
            <?php
        }
        ?>

        <?php
        
        if(isset($_SESSION["borrar"])) {
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["borrar"];
                unset($_SESSION["borrar"]);
                ?>
            </div>
            <?php
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
                $query = "SELECT Id, titulo, autor, tipo * FROM libros";
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


<!-- copiar para el cont_login -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

