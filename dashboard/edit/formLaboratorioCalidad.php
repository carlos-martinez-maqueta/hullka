<?php
session_start();
include '../config/conexion.php';
include '../class/global.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = !empty($_POST['id']) ? $_POST['id'] : null;
    $taza = !empty($_POST['taza']) ? $_POST['taza'] : null;
    $descripcion = !empty($_POST['descripcion']) ? $_POST['descripcion'] : null;
    $marca = !empty($_POST['marca']) ? $_POST['marca'] : null;
    
    $result = Globales::editDatosLaboratorio($id, $taza, $descripcion, $marca);

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
