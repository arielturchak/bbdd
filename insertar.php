<?php
    if(!isset($_POST['oculto'])) {
        exit();
    }
        include 'model/conexion.php';
        $paterno = $_POST['txtPaterno'];
        $materno = $_POST['txtMaterno'];
        $nombre = $_POST['txtNombre'];
        $parcial = $_POST['txtParcial'];
        $final = $_POST['txtFinal'];

        $sentencia = $bd->prepare("INSERT INTO alumno VALUES(?,?,?,?,?);");
        $resultado = $sentencia->execute([$paterno, $materno, $nombre, $parcial, $final]);
    
    
?>