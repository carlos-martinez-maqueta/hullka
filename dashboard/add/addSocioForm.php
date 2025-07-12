<?php
include '../config/conexion.php';
include '../class/global.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombres = !empty($_POST['nombres']) ? $_POST['nombres'] : null;
    $apellidos = !empty($_POST['apellidos']) ? $_POST['apellidos'] : null;
    $dni = !empty($_POST['dni']) ? $_POST['dni'] : null;
    $fecha_nacimiento = !empty($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : null;
    $nombre_esposa = !empty($_POST['nombre_esposa']) ? $_POST['nombre_esposa'] : null;
    $numero_hijos = !empty($_POST['numero_hijos']) ? $_POST['numero_hijos'] : null;
    $telefono = !empty($_POST['telefono']) ? $_POST['telefono'] : null;
    $direccion = !empty($_POST['direccion']) ? $_POST['direccion'] : null;
    $estatus = !empty($_POST['estatus']) ? $_POST['estatus'] : null;
    $base_sectorial = !empty($_POST['base_sectorial']) ? $_POST['base_sectorial'] : null;
    $tipo_sello = !empty($_POST['tipo_sello']) ? $_POST['tipo_sello'] : null;

    $id_socio = Globales::addSocio(
        $nombres, $apellidos, $dni, $fecha_nacimiento, $nombre_esposa,
        $numero_hijos, $telefono, $direccion, $estatus, $base_sectorial,
        $tipo_sello
    );

    if ($id_socio) {
        if (!empty($_POST['nombre_hijo']) && !empty($_POST['apellido_hijo'])) {
            $nombres_hijos = $_POST['nombre_hijo'];
            $apellidos_hijos = $_POST['apellido_hijo'];

            if (count($nombres_hijos) === count($apellidos_hijos)) {
                foreach ($nombres_hijos as $i => $nombre_hijo) {
                    $apellido_hijo = $apellidos_hijos[$i];
                    Globales::addHijo($nombre_hijo, $apellido_hijo, $id_socio);
                }
            }
        }


        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No se pudo agregar el socio.']);
    }
}
