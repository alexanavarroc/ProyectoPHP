<?php
include("conexion.php");
if (isset($_POST["crear"])) {
    $titulo = mysqli_real_escape_string($conn, $_POST["titulo"]);
    $autor = mysqli_real_escape_string($conn, $_POST["autor"]);  
    $tipo = mysqli_real_escape_string($conn, $_POST["tipo"]);  
    $descripcion = mysqli_real_escape_string($conn, $_POST["descripcion"]);  
    $sql = "INSERT INTO libros (titulo, autor, tipo, descripcion) VALUES ('$titulo', '$autor', '$tipo', '$descripcion')";

    if(mysqli_query($conn , $sql)){
        echo "Libro añadido";
    } else {
        die("Error");
    }
}

if (isset($_POST["editar"])) {
    $titulo = mysqli_real_escape_string($conn, $_POST["titulo"]);
    $autor = mysqli_real_escape_string($conn, $_POST["autor"]);  
    $tipo = mysqli_real_escape_string($conn, $_POST["type"]);  
    $descripcion = mysqli_real_escape_string($conn, $_POST["descripcion"]);  
    $Id = mysqli_real_escape_string($conn, $_POST["Id"]);  
    $sql = "UPDATE libros SET titulo = '$titulo', autor = '$autor', tipo = '$tipo', descripcion = '$descripcion' WHERE Id=$Id";

    if(mysqli_query($conn , $sql)){
        echo "Libro actualizado";
    } else {
        die("Error");
    }
}

?>
