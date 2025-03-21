<?php include("conexion.php");

    $id = $_GET['id'];
    $resultado = $conexion->query(query: "SELECT * FROM registro_es 
                    WHERE id=$id");
    $alumno = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edi.css">
    <title>Editar</title>
</head>
<body>
    <form action="" method ="post">
        <label for="">Nombre</label>
        <input type="" name="nom" id="" 
        value= "<?php echo $alumno['nom_es']; ?>">
        <label for="">Apellido</label>
        <input type="text" name="ape" id=""
        value= "<?php echo $alumno['ape_es']; ?>">>
        <label for="">Telefono</label>
        <input type="text" name="tel" id=""
        value= "<?php echo $alumno['tel_es']; ?>">>
        <button type="submit">Agregar</button>
    </form>

    <?php 
     if($_SERVER['REQUEST_METHOD']=="POST"){
        $nombre = $_POST["nom"];
        $apellido = $_POST["ape"];
        $telefono = $_POST["tel"];

        $actualizacion = $conexion->prepare(query: "UPDATE 
        registro_es SET nom_es=?, ape_es=?, tel_es=?
        WHERE id=$id");
        $actualizacion->bind_param("sss", $nombre, $apellido, $telefono);
        $actualizacion->execute();
        header(header: "Location:index.php");
     }
    ?>
</body>
</html>