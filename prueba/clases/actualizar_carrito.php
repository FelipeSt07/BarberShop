<?php

require ('../config/config.php');
include("../config/conexion.php");
$conexion = conectar();

if (isset($_POST['action'])) {
    
    $action = $_POST['action'];
    $idproducto = isset($_POST['idproducto']) ? $_POST['idproducto'] : 0;

    if ($action == 'agregar') {
        $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;
        $respuesta = agregar($idproducto, $cantidad);
        if ($respuesta>0) {
            $datos['ok'] = true;
        } else {
            $datos['ok'] = false;
        }
        $datos['sub'] = MONEDA . number_format($respuesta,2,'.',',');
    } else if ($action == 'eliminar') {
        $datos['ok'] =  eliminar($idproducto);
    } else {
        $datos['ok'] = false;
    }
} else {
    $datos['ok'] = false;
}

echo json_encode($datos);

function agregar($idproducto, $cantidad){
    
    $res = 0;
    if ($idproducto > 0 && $cantidad > 0 && is_numeric($cantidad)) {
        if (isset($_SESSION['carrito']['productos'][$idproducto])) {
            $_SESSION['carrito']['productos'][$idproducto] = $cantidad;
            
            $conexion = conectar();
            $query = "SELECT precio FROM `producto` WHERE idproducto='$idproducto' AND estado=1
            LIMIT 1";
            $result = mysqli_query($conexion, $query);
            $row = mysqli_fetch_assoc($result);
            $precio = $row['precio'];
            $res = $cantidad * $precio;
            
            return $res;
        }
        $res = 2;
        return $res;
    } else {
        return $res;
    }
}

function eliminar($idproducto){
    if ($idproducto > 0) {
        if (isset($_SESSION['carrito']['productos'][$idproducto])) {
            unset($_SESSION['carrito']['productos'][$idproducto]);
            return true;
        }
    } else {
        return false;
    }
}

?>