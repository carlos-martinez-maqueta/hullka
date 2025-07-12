<?php
require('config/conexion.php');
require('class/global.php');

$codigo = $_GET['codigo'] ?? null;

if (!$codigo) {
    echo json_encode(['error' => 'Código no enviado']);
    exit;
}

$acopio = Globales::mdlObtenerAcopioPorCodigo($codigo); // Ajusta este método

if (!$acopio) {
    echo json_encode(['error' => 'No encontrado']);
    exit;
}

echo json_encode($acopio);
