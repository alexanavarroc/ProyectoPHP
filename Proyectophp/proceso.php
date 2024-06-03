<?php

include("conexion.php");
if (isset($_POST["crear"])) {
    // Obtener los valores del formulario y escaparlos correctamente
    $titulo = mysqli_real_escape_string($conn, $_POST["titulo"]);
    $autor = mysqli_real_escape_string($conn, $_POST["autor"]);
    $tipo = mysqli_real_escape_string($conn, $_POST["tipo"]);
    $descripcion = mysqli_real_escape_string($conn, $_POST["descripcion"]);

    // Construir la consulta SQL
    $sql = "INSERT INTO libros (titulo, autor, tipo, descripcion) VALUES ('$titulo', '$autor', '$tipo', '$descripcion')";

    // Imprimir la consulta SQL para depuración
    echo "Consulta SQL: " . $sql . "<br>";

    // Ejecutar la consulta SQL y manejar los resultados
    if(mysqli_query($conn , $sql)){
        session_start();
        $_SESSION["crear"] = "Libro añadido de manera exitosa :) 📚";
        header("Location:index.php");
    } else {
        // Imprimir el mensaje de error de MySQL
        echo "Error MySQL: " . mysqli_error($conn) . "<br>";
        die("Error al ejecutar la consulta SQL");
    }
}

?>
