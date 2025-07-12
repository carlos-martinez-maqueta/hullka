<?php
session_start();
include 'config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo_usuario = $_POST['codigo'] ?? '';
    $user_id = $_SESSION['pending_user_id'] ?? null;

    if (!$user_id) {
        echo json_encode(['status' => 'error', 'message' => 'Sesión no válida.']);
        exit;
    }

    // Obtener el código desde la BD
    $stmt = $conn->prepare("SELECT codigo_validacion FROM tbl_personal WHERE id = :id");
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $codigo_usuario === $user['codigo_validacion']) {
        // Código correcto, iniciar sesión
        $_SESSION['user_id'] = $user_id;
        unset($_SESSION['pending_user_id']);

        echo json_encode(['status' => 'success', 'message' => 'Código validado, acceso concedido.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Código incorrecto.']);
    }
}
