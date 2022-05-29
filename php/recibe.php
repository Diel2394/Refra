<?php
include ("conexion.php");

 function insertar($conexion){
     
    $cedula=$_POST['cc'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];

    echo "hola $cedula,$nombre,$apellido,$telefono,$correo";
    

    $consulta="insert into cliente(cc,nombre,apellido,telefono,correo) values('$cedula','$nombre','$apellido,'$telefono''$correo',)";
    mysql_query($conexion,$consulta);
    mysql_close($_conexion);

    
}

?>