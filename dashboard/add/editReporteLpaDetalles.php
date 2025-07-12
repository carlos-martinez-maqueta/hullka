<?php
include '../config/conexion.php';
include '../class/global.php';

$id_reporte_lpa = $_POST['id_reporte_lpa'];
$total_finca = $_POST['total_finca'];
$cultivo_produccion = $_POST['cultivo_produccion'];
$cultivo_crecimiento = $_POST['cultivo_crecimiento'];
$estimado_produccion = $_POST['estimado_produccion'];
$cafe_pergamino = $_POST['cafe_pergamino'];
$sub_producto = $_POST['sub_producto'];

// Elimina los antiguos detalles primero
$conn->prepare("DELETE FROM tbl_reportes_lpa WHERE id_reporte_lpa = :id")->execute([':id' => $id_reporte_lpa]);

// Inserta los nuevos
for ($i = 0; $i < count($total_finca); $i++) {
    $stmt = $conn->prepare("INSERT INTO tbl_reportes_lpa 
        (id_reporte_lpa, total_finca, cultivo_produccion, cultivo_crecimiento, estimado_produccion, cafe_pergamino, sub_producto)
        VALUES (:id, :total_finca, :cultivo_produccion, :cultivo_crecimiento, :estimado_produccion, :cafe_pergamino, :sub_producto)");
    $stmt->execute([
        ':id' => $id_reporte_lpa,
        ':total_finca' => $total_finca[$i],
        ':cultivo_produccion' => $cultivo_produccion[$i],
        ':cultivo_crecimiento' => $cultivo_crecimiento[$i],
        ':estimado_produccion' => $estimado_produccion[$i],
        ':cafe_pergamino' => $cafe_pergamino[$i],
        ':sub_producto' => $sub_producto[$i],
    ]);
}

echo json_encode(['status' => 'success']);
