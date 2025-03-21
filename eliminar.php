<?php include("conexion.php"); 

   $id = $_GET['id'];
   $conexion->query(query: "DELETE FROM registro_es 
                    WHERE id=$id");
    header(header: "Location:index.php");
?>