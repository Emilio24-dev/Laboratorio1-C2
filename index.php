<?php include "conexion.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prin.css">

    <title>Centro Educativo</title>
</head>
<body>
    <h1>Centro Educativo</h1>
    <h2>Listado de estudiantes</h2>
    <?php 
    $listado = $conexion->query(query: "SELECT * FROM registro_es");

    echo "<table>
                    <thead>
                        <tr>
                            <th> Nombre </th>
                            <th> Apellido </th>
                            <th> Telefono </th>
                        </tr>
                    </thead>
                    <tbody>";
    while ($dato = $listado->fetch_assoc()){
        echo "<tr>
                <td>{$dato['nom_es']}</td>
                <td>{$dato['ape_es']}</td>
                <td>{$dato['tel_es']}</td>
                <td>
                    <a href='editar.php?id={$dato['id']}'><button>Editar</button></a>
                    <a href='eliminar.php?id={$dato['id']}'><button>Eliminar</button></a>
                </td>
            </tr>    
        ";
    } 
    echo "</tbody>
            </table>";
    ?>
    <a href="registro.php"><button type="button">Agregar nuevo estudiante</button></a>
</body>
</html>