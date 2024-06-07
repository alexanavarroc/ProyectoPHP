<?php
    // $dbHost = "localhost";
    // $dbUser = "root";
    // $dbPass = "";
   
    $dbHost = "phpdatabasenavarro.mysql.database.azure.com";
    $dbUser = "alexanavarrocalderon";
    $dbPass = "pelonpelO1";
    $dbName = "db";  // Esto no 
    
    // Crear una instancia de la clase mysqli para establecer la conexión
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    
    // Verificar si la conexión fue exitosa
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    } else {
        echo "Conexión exitosa";
    }
?>
