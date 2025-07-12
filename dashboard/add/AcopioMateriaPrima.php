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
    $cantida_sacos = !empty($_POST['cantida_sacos']) ? $_POST['cantida_sacos'] : null;
    $kilos_brutos = !empty($_POST['kilos_brutos']) ? $_POST['kilos_brutos'] : null;
    $tara = !empty($_POST['tara']) ? $_POST['tara'] : null;
    $kilos_netos = !empty($_POST['kilos_netos']) ? $_POST['kilos_netos'] : null;
    $qq_netos = !empty($_POST['qq_netos']) ? $_POST['qq_netos'] : null;
    
    $rendimiento_fisico = !empty($_POST['rendimiento_fisico']) ? $_POST['rendimiento_fisico'] : null;
    $porcentaje_rendimiento = !empty($_POST['porcentaje_rendimiento']) ? $_POST['porcentaje_rendimiento'] : null;

    $segunda = !empty($_POST['segunda']) ? $_POST['segunda'] : null;
    $porcentaje_segunda = !empty($_POST['porcentaje_segunda']) ? $_POST['porcentaje_segunda'] : null;

    $descarte = !empty($_POST['descarte']) ? $_POST['descarte'] : null;
    $porcentaje_descarte = !empty($_POST['porcentaje_descarte']) ? $_POST['porcentaje_descarte'] : null;

    $cascara = !empty($_POST['cascara']) ? $_POST['cascara'] : null;
    $porcentaje_cascara = !empty($_POST['porcentaje_cascara']) ? $_POST['porcentaje_cascara'] : null;

    $humedad = !empty($_POST['humedad']) ? $_POST['humedad'] : null;
    
    $result = Globales::addAcopio($dni_socio, $productor, 
    $base_sectorial, $tipo, $cantida_sacos, $kilos_brutos, 
    $tara, $kilos_netos, $qq_netos, $rendimiento_fisico, $porcentaje_rendimiento, $segunda, 
    $porcentaje_segunda, $descarte, $porcentaje_descarte, $cascara, $porcentaje_cascara, $humedad);


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
