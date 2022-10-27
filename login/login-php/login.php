<?php

//Variables para realizar conexion de BD
$servidor = "localhost";
$usuario = "root";
$contra = "";
$BD = "usuario"; //nombre de nuestra base de datos

$usuario_form =$_POST['user'];
$contraseña = $_POST['password'];
$puesto = $_POST['puesto'];
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

if ($puesto == "telefonista"){
$consulta = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE usuario = '".$usuario_form."' and  contraseña = '".$contraseña."'");

$nr = mysqli_num_rows ($consulta);

if ($nr == 1){
    header ("location: http://localhost/proyecto/index.html ");
}

elseif ($nr == 0) {
    echo "Datos invalidos";
}
}

elseif ($puesto == "cocinero"){
    
  
$consulta = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE usuario = '".$usuario_form."' and  contraseña = '".$contraseña."'");

$nr = mysqli_num_rows ($consulta);

if ($nr == 1){
    header ("location: http://localhost/proyecto/cocinero.html ");
}

elseif ($nr == 0) {
    echo "Datos invalidos";
}
}


elseif ($puesto == "gerente"){
    
  
$consulta = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE usuario = '".$usuario_form."' and  contraseña = '".$contraseña."'");

$nr = mysqli_num_rows ($consulta);

if ($nr == 1){
    header ("location: http://localhost/proyecto/reporte_semanal.php ");
}

elseif ($nr == 0) {
    echo "Datos invalidos";
}
}

?>