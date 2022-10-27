<?php

//variables para realizar conexion de BD
$server="localhost";
$user="root";
$password="";
$bd="delivery";//nombre de la base de datos (BD)

//proceso de conexion
$conexion = mysqli_connect ($server, $user, $password, $bd);

$pedido = $_POST['pedido'];

if (!$conexion){
    echo "Conexion erronea con la base de datos";

    return;
}

$buscar = "SELECT * FROM todo_delivery  WHERE num_pedido = $pedido";

$ejecutar = mysqli_query ($conexion, $buscar);

if ($ejecutar -> num_rows > 0) {
        while ($fila = $ejecutar -> fetch_assoc()){
            //imprimiendo busquedad
            echo "<b> PEDIDO". "</b><br>";
            echo "<b>Pedido 1: </b>" . $fila["pedido_com_1"]. "<br>";
            echo "<b>Cantidad: </b>" . $fila["cantidad_com_1"]. "<br>";
            echo "<b>Bebida: </b>" . $fila["pedido_beb_1"]. "<br>";
            echo "<b>Cantidad: </b>" . $fila["cantidad_beb_1"]. "<br>";
            echo "<b>Pedido 2: </b>" . $fila["pedido_com_2"]. "<br>";
            echo "<b>Cantidad: </b>" . $fila["cantidad_com_2"]. "<br>";
            echo "<b>Bebida: </b>" . $fila["pedido_beb_2"]. "<br>";
            echo "<b>Cantidad: </b>" . $fila["cantidad_beb_2"]. "<br>";
            echo "<b>Pedido 3: </b>" . $fila["pedido_com_3"]. "<br>";
            echo "<b>Cantidad: </b>" . $fila["cantidad_com_3"]. "<br>";
            echo "<b>Bebida: </b>" . $fila["pedido_beb_3"]. "<br>";
            echo "<b>Cantidad: </b>" . $fila["cantidad_beb_3"]. "<br>";
        }
    } else {
        echo "<b> Lo sentimos pera la imformacion ingresada no se encuentra en nuestro sistema </b>";
    }


?>