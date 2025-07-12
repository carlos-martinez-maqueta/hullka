<?php
session_start();
include '../config/conexion.php';
include '../class/global.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = !empty($_POST['id']) ? $_POST['id'] : null;
    $rendimiento_fisico = !empty($_POST['rendimiento_fisico']) ? $_POST['rendimiento_fisico'] : null;
    $porcentaje_rendimiento = !empty($_POST['porcentaje_rendimiento']) ? $_POST['porcentaje_rendimiento'] : null;

    $segunda = !empty($_POST['segunda']) ? $_POST['segunda'] : null;
    $porcentaje_segunda = !empty($_POST['porcentaje_segunda']) ? $_POST['porcentaje_segunda'] : null;

    $descarte = !empty($_POST['descarte']) ? $_POST['descarte'] : null;

    $porcentaje_descarte = !empty($_POST['porcentaje_descarte']) ? $_POST['porcentaje_descarte'] : null;

    $cascara = !empty($_POST['cascara']) ? $_POST['cascara'] : null;
    $porcentaje_cascara = !empty($_POST['porcentaje_cascara']) ? $_POST['porcentaje_cascara'] : null;

    $humedad = !empty($_POST['humedad']) ? $_POST['humedad'] : null;
    
    $result = Globales::editDatosAcopio($id, $rendimiento_fisico, $porcentaje_rendimiento, $segunda, 
$porcentaje_segunda, $descarte, $porcentaje_descarte, $cascara, $porcentaje_cascara, $humedad);

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
