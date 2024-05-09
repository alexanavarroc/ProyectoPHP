<?php
include("conexion.php");
if (isset($_POST["crear"])) {
    $titulo = mysqli_real_escape_string($conn, $_POST["titulo"]);
    $autor = mysqli_real_escape_string($conn, $_POST["autor"]);  
    $type = mysqli_real_escape_string($conn, $_POST["type"]);  
    $descripcion = mysqli_real_escape_string($conn, $_POST["descripcion"]);  
    $sql = "INSERT INTO libros (titulo, autor, tipo, descripcion) VALUES ('$titulo', '$autor', '$type', '$descripcion')";

    if(mysqli_query($conn , $sql)){
        echo "Insertado";
    } else {
        die("Error");
    }
}
?>
