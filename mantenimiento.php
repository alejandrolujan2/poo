<?php
    
    $servername = "localhost";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "mantenimiento";

  
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Error al conectarse a la base de datos: " . $conn->connect_error);
    } 

   
    $sql = "DELETE FROM estadio WHERE fecha < '2023-12-12'";

    
    if ($conn->query($sql) === TRUE) {
        echo "El mantenimiento se ha realizado exitosamente.";
    } else {
        echo "Error en el mantenimiento: " . $conn->error;
    }

    
    $conn->close();
?>
