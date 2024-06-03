<?php
    // $dbHost = "localhost";
    // $dbUser = "root";
    // $dbPass = "";
   
    $dbHost = "phpdatabasenavarro.mysql.database.azure.com";
    $dbUser = "alexanavarrocalderon";
    $dbPass = "pelonpelO1";
    // $dbName = "dB";  // Esto no debería estar aquí
    
    // Crear una instancia de la clase mysqli para establecer la conexión
    $conn = new mysqli($dbHost, $dbUser, $dbPass);
    
    // Verificar si la conexión fue exitosa
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    } else {
        echo "Conexión exitosa";
    }
?>
