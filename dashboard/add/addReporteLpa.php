<?php
include '../config/conexion.php';
include '../class/global.php';

session_start();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // $codigo = !empty($_POST['codigo']) ? $_POST['codigo'] : null;
    $dni_socio = !empty($_POST['dni_socio']) ? $_POST['dni_socio'] : null;
    $productor = !empty($_POST['productor']) ? $_POST['productor'] : null;
    $base_sectorial = !empty($_POST['base_sectorial']) ? $_POST['base_sectorial'] : null;
    $tipo = !empty($_POST['tipo']) ? $_POST['tipo'] : null;

    
    $result = Globales::addReporteLpa($dni_socio, $productor, $base_sectorial, $tipo);


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
