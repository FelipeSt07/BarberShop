<?php
    include("conexion.php");
    $conexion = conectar();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['identificacion'];
    $fecha = $_POST['fechanac'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $confcorreo = $_POST['confcorreo'];
    $clave = md5($_POST['clave']);
    $confclave = md5($_POST['confclave']);

    



    }
?>