<?php

//Variables para realizar conexion de BD
$servidor = "localhost";
$usuario = "root";
$contra = "";
$BD = "usuario"; //nombre de nuestra base de datos

$nombreDeUsuario = $_POST['user'];
$contraseña = $_POST['password'];
$root = 10;

function encriptar ($contraseña, $root){
    for ($i = 0; $i < strlen ($contraseña); $i++){
        $contraseña[$i] = chr (ord ($contraseña[$i]) + $root);
}
return $contraseña;
}

$contraseña = encriptar($contraseña, $root);


//Proceso de conexion
$conexion = mysqli_connect ($servidor, $usuario, $contra, $BD);

if (!$conexion){
    echo "No hay conexion";

    return;
}


    $almacenar = "INSERT INTO usuarios (usuario, contraseña) values ('$nombreDeUsuario', '$contraseña')";

    
//Comprobar si se guarda el registro
if (mysqli_query ($conexion, $almacenar) ){
    echo "Su registro ha sido almacenado";
} else {
    echo "Su registro no ha sido almacenado";
}

?>