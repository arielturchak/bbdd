<?php
$contrasena = '';
$usuario = 'root';
$nombrebd = 'nota';


try {
    $bd = new PDO(
        'mysql:host=localhost;dbname=' . $nombrebd,
        $usuario,
        $contrasena
    );

    // Establece el modo de errores de PDO para mostrar excepciones
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa"; // Opcional: Mensaje para verificar la conexión exitosa

    // Aquí puedes continuar con tus operaciones en la base de datos

} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}



// try{
//     $bd = new PDO(
//         'mysql :host=localhost;
//         dbname=' .$nombrebd,
//         $usuario,
//         $contrasena
//     );

// }catch(Exception $e) {
//     echo "Error de conexión ".$e->getMessage();
// }

?>