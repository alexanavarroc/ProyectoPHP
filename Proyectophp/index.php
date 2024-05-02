<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center p-3">Proyecto PHP</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3">
            <h3 class="text-center" style="color: gray">Registro de alumnos</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre alumno</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Libro</label>
                <input type="text" class="form-control" name="libro">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Carrera</label>
                <input type="text" class="form-control" name="carrera">
            </div>

            <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre alumno</label>
                <input type="text" class="form-control" name="nombre">
            </div> -->
            
            <button type="submit" class="btn btn-primary" name="btnregistrar">Registrar</button>
        </form>

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
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>