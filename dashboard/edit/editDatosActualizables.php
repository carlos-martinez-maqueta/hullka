<?php
session_start();
include '../config/conexion.php';
include '../class/global.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = !empty($_POST['id']) ? $_POST['id'] : null;
    $tara = !empty($_POST['tara']) ? $_POST['tara'] : null;
    $qq_netos = !empty($_POST['qq_netos']) ? $_POST['qq_netos'] : null;
    $muestra_general = !empty($_POST['muestra_general']) ? $_POST['muestra_general'] : null;
    
    $result = Globales::editDatos($id, $tara, $qq_netos, $muestra_general);

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
