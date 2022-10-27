<?php

//variables para realizar conexion de BD
$server="localhost";
$user="root";
$password="";
$bd="delivery";//nombre de la base de datos (BD)

//Variables que capturan datos del formulario 
$orden       = $_POST['num_pedido'];
$comida      = $_POST['pedido'];
$cantidad_com = $_POST['cantidad_com_1'];
$precio_com_1 = $_POST['precio_com_1'];
$bebida      = $_POST['bebida'];
$cantidad_beb = $_POST['cantidad_beb_1'];
$precio_beb_1 = $_POST['precio_beb_1'];
$comida2      = $_POST['pedido_2'];
$cantidad_com2 = $_POST['cantidad_com_2'];
$precio_com_2 = $_POST['precio_com_2'];
$bebida2      = $_POST['bebida_2'];
$cantidad_beb2 = $_POST['cantidad_beb_3'];
$precio_beb_2 = $_POST['precio_beb_2'];
$comida3      = $_POST['pedido_3'];
$cantidad_com3 = $_POST['cantidad_com_3'];
$precio_com_3 = $_POST['precio_com_3'];
$bebida3      = $_POST['bebida_3'];
$cantidad_beb3 = $_POST['cantidad_beb_3'];
$precio_beb_3 = $_POST['precio_beb_3'];
$nombre      = $_POST['nombre'];
$apellido    = $_POST['apellido']; 
$fecha       = $_POST['fecha'];
$hora        = $_POST['hora'];
$telefono    = $_POST['telefono'];
$direccion   = $_POST['direccion'];
$demora      = $_POST['demora'];

//proceso de conexion
$connect = new mysqli($server,$user,$password,$bd);
if (!$connect){
    echo "No hay conexion";
    return;
}
$almacenar = "INSERT INTO todo_delivery (num_pedido, pedido_com_1, cantidad_com_1, precio_com_1, pedido_beb_1, cantidad_beb_1,
precio_beb_1, pedido_com_2, cantidad_com_2, precio_com_2, pedido_beb_2, cantidad_beb_2, precio_beb_2, pedido_com_3, cantidad_com_3, precio_com_3, pedido_beb_3, cantidad_beb_3, precio_beb_3,
nombre, apellido, fecha, hora, telefono, dirrecion, demora) VALUE ('$orden','$comida','$cantidad_com','$precio_com_1', '$bebida',
'$cantidad_beb','$precio_beb_1', '$comida2','$cantidad_com2','$precio_com_2','$bebida2','$cantidad_beb2','$precio_beb_2','$comida3','$cantidad_com3', '$precio_com_3','$bebida3','$cantidad_beb3','$precio_beb_3',
'$nombre','$apellido','$fecha','$hora','$telefono','$direccion','$demora')"; 

$almacenar2 =  "INSERT INTO reporte_oficial_semanal (PRODUCTO1,CANTIDAD1,PRODUCTO2,CANTIDAD2,PRODUCTO3,CANTIDAD3,PRODUCTO4,
CANTIDAD4,PRODUCTO5,CANTIDAD5,PRODUCTO6,CANTIDAD6,) VALUE ('$comida','$cantidad_com','$bebida',
'$cantidad_beb','$comida2','$cantidad_com2','$bebida2','$cantidad_beb2','$comida3','$cantidad_com3','$bebida3','$cantidad_beb3')";

if (mysqli_query ($connect,$almacenar) ){
    if (mysqli_query ($connect,$almacenar2) ){
    echo "Su registro ha sido almacenado";
    }
} else {
    echo "Su registro no ha sido almacenado";
}
?>
