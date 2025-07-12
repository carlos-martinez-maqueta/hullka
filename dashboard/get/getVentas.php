<?php
session_start(); // Asegúrate de iniciar la sesión si aún no lo has hecho
include '../config/conexion.php';
include '../class/global.php'; 

$user_id = $_SESSION['user_id'];

if (isset($_POST['action']) && $_POST['action'] == 'get_boletas') {
    $result = Globales::getBoletas();
    echo json_encode($result);
}
if (isset($_POST['action']) && $_POST['action'] == 'get_facturas') {
    $result = Globales::getFacturas();
    echo json_encode($result);
}
if (isset($_POST['action']) && $_POST['action'] == 'get_notas_de_venta') {
    $result = Globales::getNotasVenta();
    echo json_encode($result);
}