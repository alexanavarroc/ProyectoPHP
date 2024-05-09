<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        
        <header class="d-flex justify-content-between my-4">

            <h1>Editar libro 📚</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Regresar</a>
            </div>

        </header>

        <?php
        if (isset($_GET['Id'])) {
            $Id = $_GET['Id'];
            include("conexion.php");
            $sql = "SELECT * FROM libros WHERE Id=$Id";
            $resultado = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($resultado);

            ?>
            
        <form action="proceso.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="titulo" value="<?php echo $row["titulo"]; ?>" id="" placeholder="Titulo Libro:">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" value="<?php echo $row["autor"]; ?>" name="autor" id="" placeholder="Autor del Libro:">
            </div>

            <div class="form-element my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Genero de libro</option>
                    <option value="NoFiccion" <?php if($row['tipo']=="NoFiccion"){echo "selected";} ?>>NoFiccion</option>
                    <option value="Fantasia" <?php if($row['tipo']=="Fantasia"){echo "selected";} ?>>Fantasia</option>
                    <option value="Horror" <?php if($row['tipo']=="Horror"){echo "selected";} ?>>Horror</option>
                    <option value="Thriller" <?php if($row['tipo']=="Thriller"){echo "selected";} ?>>Thriller</option>
                </select>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" value="<?php echo $row["descripcion"]; ?>" name="descripcion" id="" placeholder="Descripción del libro">
            </div>
            <input type="hidden" name="Id" value='<?php echo $row['Id']; ?>'>
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="editar" value="Editar libro 📚">
            </div>
        </form>

        <?php
        }
        ?>

    </div>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>