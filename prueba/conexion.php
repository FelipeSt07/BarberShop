<?php
function conectar() {
    $hostname = 'localhost';
    $usuariodb = 'root';
    $passworddb ='';
    $dbname = 'clientes';
    
        $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
        return $conectar;
    }
?>