<?php include "conexion.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regi.css">
    <link rel="stylesheet" href="regi.css">
    <title>Agregar</title>
</head>
<body>
    <form action="" method ="post">
        <label for="">Nombre</label>
        <input type="text" name="nom" id="">
        <label for="">Apellido</label>
        <input type="text" name="ape" id="">
        <label for="">Telefono</label>
        <input type="text" name="tel" id="">
        <button type="submit">Agregar</button>
    </form>

    <?php 
     if($_SERVER['REQUEST_METHOD']=="POST"){
        $nombre = $_POST["nom"];
        $apellido = $_POST["ape"];
        $telefono = $_POST["tel"];

        $insercion = $conexion->prepare(query: "INSERT 
        INTO registro_es(nom_es, ape_es, tel_es) VALUES(?,?,?)");
        $insercion->bind_param("sss", $nombre, $apellido, $telefono);
        $insercion->execute();
        header(header: "Location:index.php");
     }
    ?>
</body>
</html> 