<?php
session_start();
include '../config/conexion.php';
include '../class/global.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = !empty($_POST['id_edit']) ? $_POST['id_edit'] : null;
    $marca = !empty($_POST['marca_edit']) ? $_POST['marca_edit'] : null;
    $puntaje = !empty($_POST['puntaje_edit']) ? $_POST['puntaje_edit'] : null;

    
    $result = Globales::editDatosTaza($id, $marca, $puntaje);

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
