<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $password ='';
    $dbname = 'db_barberia';
    
        $conectar = mysqli_connect($servidor,$usuario,$password,$dbname);
        return $conectar;
    if ($conectar->connect_error) {
        die("Error al conectar la base de datos".$coencta->connect_error);
    }
?>