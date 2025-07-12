<?php
session_start(); // Asegúrate de iniciar la sesión si aún no lo has hecho
include '../config/conexion.php';
include '../class/global.php'; 

$user_id = $_SESSION['user_id'];

if (isset($_POST['action']) && $_POST['action'] == 'get_reporte_lpa') {
    $result = Globales::getReporteLpa();
    echo json_encode($result);
}
// if (isset($_POST['action']) && $_POST['action'] == 'get_terceros_socios') {
//     $result = Globales::getTerceros();
//     echo json_encode($result);
// }
if (isset($_POST['action']) && $_POST['action'] == 'get_reporte_lpa_detalles') {
    $id = $_POST['resultId'];
    $result = Globales::getReporteLpaId($id);
    echo json_encode($result);
}
