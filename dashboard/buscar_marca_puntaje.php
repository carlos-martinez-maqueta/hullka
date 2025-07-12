<?php
include 'config/conexion.php';

if (isset($_GET['puntaje'])) {
    $puntaje = $_GET['puntaje'];

    $stmt = $conn->prepare("SELECT marca FROM tbl_clasificacion_taza WHERE puntaje = :puntaje");
    $stmt->bindValue(':puntaje', $puntaje, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        echo json_encode(['status' => 'success', 'marca' => $row['marca']]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No se encontró la marca']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Parámetro faltante']);
}
