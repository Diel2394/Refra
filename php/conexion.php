<?php 

$conexion = new mysqli("localhost", "root", "", "reframetal");
if ($conexion->connect_errno){
    echo "Fallo al conectar a mysql:  (". $conexion -> connect->errno . ")" . $conexion -> connect->errno ; 
}