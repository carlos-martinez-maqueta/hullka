<?php
session_start(); // Asegúrate de iniciar la sesión si aún no lo has hecho
include '../config/conexion.php';
include '../class/global.php'; 

$user_id = $_SESSION['user_id'];

if (isset($_POST['action']) && $_POST['action'] == 'get_personal') {
    $result = Globales::getPersonal();
    echo json_encode($result);
}
if (isset($_POST['action']) && $_POST['action'] == 'get_personal_id') {
    $id = $_POST['resultId'];
    $result = Globales::getPersonalId($id);
    echo json_encode($result);
}