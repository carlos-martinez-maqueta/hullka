<?php
include '../config/conexion.php';

$response = []; // array para guardar todo

if (isset($_POST['dni'])) {
    $dni = $_POST['dni'];

    // Buscar datos del socio
    $stmt = $conn->prepare("SELECT * FROM tbl_socios WHERE dni = :dni");
    $stmt->bindParam(':dni', $dni);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $socio = $stmt->fetch(PDO::FETCH_ASSOC);
        $response['socio'] = $socio;
    } else {
        $response['socio'] = null;
    }

    // Buscar datos en tbl_reporte_lpa con ese DNI
    $stmt2 = $conn->prepare("SELECT * FROM tbl_reporte_lpa WHERE dni = :dni");
    $stmt2->bindParam(':dni', $dni);
    $stmt2->execute();

    if ($stmt2->rowCount() > 0) {
        // Si esperas varios reportes, usa fetchAll
        $reportes = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        $response['reportes'] = $reportes;
    } else {
        $response['reportes'] = [];
    }

    echo json_encode($response);

} else {
    echo json_encode(["error" => "DNI no recibido."]);
}
?>
