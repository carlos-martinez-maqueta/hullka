<?php
session_start(); // Asegúrate de iniciar la sesión si aún no lo has hecho
include '../config/conexion.php';
include '../class/global.php'; 

$user_id = $_SESSION['user_id'];

if (isset($_POST['action']) && $_POST['action'] == 'get_almacenes') {
    $result = Globales::getAlmacenes();
    echo json_encode($result);
}
if (isset($_POST['action']) && $_POST['action'] == 'get_base_sectorial_id') {
    $id = $_POST['resultId'];
    $result = Globales::getBaseSectorialId($id);
    echo json_encode($result);
}