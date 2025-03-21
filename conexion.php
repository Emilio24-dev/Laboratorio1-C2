<?php 

    $conexion = mysqli_connect(hostname: "localhost",
    username: "root", password:"", database: "estudiantes");

    if (mysqli_connect_error()) {
        echo "Error: ". mysqli_connect_error();
    } 
    else {
        /*echo "Conexión exitosa";*/
    }


?>