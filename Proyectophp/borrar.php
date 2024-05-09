<?php
if (isset($_GET['Id'])) { 
    $Id = $_GET['Id'];
    include("conexion.php");
    $sql = "DELETE FROM libros WHERE Id = $Id";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["borrar"] = "Libro borrado de manera exitosa :) 📚";
        header("Location:index.php");
    }


}

?>