<?php
session_start(); // Iniciar sesión

// Destruir la sesión
session_unset(); // Eliminar variables de sesión
session_destroy(); // Destruir la sesión

// Redirigir al inicio de sesión
header('Location: ../');
exit();
?>
