<?php 

    $conexion = new PDO ("mysql:host=localhost;dbname=app-php","root","");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
    return $conexion;
        
?>