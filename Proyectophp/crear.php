<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear-PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        
        <header class="d-flex justify-content-between my-4">

            <h1>Añadir nuevo libro 📚</h1>
            <div>
                <a href="" class="btn btn-primary">Regresar</a>
            </div>

        </header>
        <form action="proceso.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="titulo" id="" placeholder="Titulo Libro:">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="autor" id="" placeholder="Autor del Libro:">
            </div>

            <div class="form-element my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Genero de libro</option>
                    <option value="NoFiccion">NoFiccion</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Horror">Horror</option>
                    <option value="Thriller">Thriller</option>
                </select>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="descripcion" id="" placeholder="Descripción del libro">
            </div>

            <div class="form-element">
                <input type="submit" class="btn btn-success" name="crear" value="Añadir libro">
            </div>
        </form>
    </div>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>