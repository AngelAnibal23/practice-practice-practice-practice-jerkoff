<?php
$servidor = "localhost";
$usuario = "root";
$password = "MySql#2026!";
$base_datos = "dota2_db";

$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>