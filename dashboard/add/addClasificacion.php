<?php
include '../config/conexion.php';
include '../class/global.php';

session_start();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // $codigo = !empty($_POST['codigo']) ? $_POST['codigo'] : null;
    $marca = !empty($_POST['marca']) ? $_POST['marca'] : null;
    $puntaje = !empty($_POST['puntaje']) ? $_POST['puntaje'] : null;

    
    $result = Globales::addClasificacion($marca, $puntaje);


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
