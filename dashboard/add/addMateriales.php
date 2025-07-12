<?php
include '../config/conexion.php';
include '../class/global.php';

session_start();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // $codigo = !empty($_POST['codigo']) ? $_POST['codigo'] : null;
    $nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : null;
    $cantidad = !empty($_POST['cantidad']) ? $_POST['cantidad'] : null;

    
    $result = Globales::addMateriales($nombre, $cantidad);


    if ($result) {

        $response = array(
            'status' => 'success',
            'message' => 'Se agregó correctamente.'
        );
    } else {
        // Error al registrar Items
        $response = array(
            'status' => 'error',
            'message' => 'Error al agregar.'
        );
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
