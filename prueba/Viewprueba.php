<?php 
session_start();
//verificar si el usuario inicio sesion
if (!isset($_SESSION['username'])) {
    //Redirigir al usuario al inicio de sesion
    header("location: login.php");
    exit;
}
include("config/conexion.php");
$conexion= conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/prueba.css">
</head>
<body>
    <div class="contenedor">
        <h3>Bienvenido al sistema</h3>
        <div class="nav" >
            <div class="opciones">
                <a href="">Validacion Sesion</a>
            </div>
            <div class="opciones">
                <a href="">Crear tabla</a>
            </div>
            <div class="opciones">
                <a href="">Registro</a>
            </div>
            <div class="opciones">
                <a href="">Busqueda</a>
            </div>
        </div>
        <div class="frase" >
            <p>Hola:</p>
        </div>
    </div>
</body>
</html>