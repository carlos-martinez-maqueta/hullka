<?php
session_start();
include '../config/conexion.php';
include '../class/global.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = !empty($_POST['id']) ? $_POST['id'] : null;
    $nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : null;
    
    $result = Globales::editBaseSectorialId($id, $nombre);

    if ($result) {
        $response = array(
            'status' => 'success',
            'message' => 'Se editó correctamente.'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Error al editar.'
        );
    }
    echo json_encode($response);
}
