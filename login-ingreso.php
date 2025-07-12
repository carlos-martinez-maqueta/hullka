<?php
session_start();
include 'config/conexion.php';
include 'dashboard/class/global.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $correo = $_POST['correo'] ?? null;
        $contrasena = $_POST['contrasena'] ?? null;

        if (!$correo || !$contrasena) {
            echo json_encode(['status' => 'error', 'message' => 'Faltan datos.']);
            exit;
        }

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['status' => 'error', 'message' => 'Correo no válido.']);
            exit;
        }

        $stmt = $conn->prepare("SELECT id, contrasena, codigo_validacion FROM tbl_personal WHERE correo = :correo AND estado = 'activo'");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($contrasena, $user['contrasena'])) {
                // Guardar temporalmente el ID del usuario para la verificación
                $_SESSION['pending_user_id'] = $user['id'];

                echo json_encode([
                    'status' => 'verify_code',
                    'message' => 'Por favor ingresa tu código de validación.',
                ]);
                exit;
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Contraseña incorrecta.']);
                exit;
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Usuario no registrado o inactivo.']);
            exit;
        }

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
        exit;
    }
}


?>
