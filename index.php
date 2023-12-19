<?php
include 'model/conexion.php';
$sentencia = $bd->query("SELECT * FROM alumno;");
// Obtiene todas las filas resultantes de la consulta y las almacena en la variable $alumnos como un array de objetos.
$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
// obtiene todas las filas resultantes de la consulta en forma de un array de objetos.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
</head>
<body>
    <h3>Lista de Alumnos</h3>
    <table>
        <tr>
            <td>Código</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Nombre</td>
            <td>Parcial</td>
            <td>Final</td>
        </tr>
    <?php foreach($alumnos as $dato): ?>
            <tr>
                <td><?php echo property_exists($dato, 'id_alumno') ? $dato->id_alumno : ''; ?></td>
                <td><?php echo property_exists($dato, 'ap_paterno') ? $dato->ap_paterno : ''; ?></td>
                <td><?php echo property_exists($dato, 'ap_materno') ? $dato->ap_materno : ''; ?></td>
                <td><?php echo property_exists($dato, 'nombre') ? $dato->nombre : ''; ?></td>
                <td><?php echo property_exists($dato, 'ex_parcial') ? $dato->ex_parcial : ''; ?></td>
                <td><?php echo property_exists($dato, 'ex_final') ? $dato->ex_final : ''; ?></td>
                <td><?php echo property_exists($dato, 'ex_final') && property_exists($dato, 'ex_parcial') ? ($dato->ex_final + $dato->ex_parcial) / 2 : ''; ?></td> 
            </tr>
        <?php endforeach; ?>
        </table>
        <hr>
        <h3>Ingresar alumnos:</h3>
        <form method="POST" action="insertar.php">
            <table>
                <tr>
                    <td>Apellido paterno: </td>
                    <td><input type="text" name="txtPaterno"></td>
                </tr>
                <tr>
                    <td>Apellido materno: </td>
                    <td><input type="text" name="txtMaterno"></td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"></td>
                </tr>
                <tr>
                    <td>Nota Parcial: </td>
                    <td><input type="text" name="txtParcial"></td>
                </tr>
                <tr>
                    <td>Nota Final:</td>
                    <td><input type="text" name="txtFinal"></td>
                </tr>
                <input type="hidden" name="oculto" value="1">
                <tr>
                    <td><input type="reset" name=""></td>
                    <td><input type="submit" value="INGRESAR ALUMNO"></td>
                </tr>
            </table>    
    </form>
</body>
</html>