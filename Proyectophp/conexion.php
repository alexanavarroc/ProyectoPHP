<?php
    // $dbHost = "localhost";
    // $dbUser = "root";
    // $dbPass = "";
    // $dbName = "proyectophp"

    // $conn = new mysqli_conexion($dbHost, $dbUser, $dbPass, $dbName, $dbName);
    //     if (!$conn) {
    //         die("Algo salio mal");
    //     }



    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "proyectophp";
    
    // Crear una instancia de la clase mysqli para establecer la conexión
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    
    // Verificar si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    } else {
        echo "Conexión exitosa";
    }

    

?>