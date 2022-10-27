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
        while ($cantidad = $ejecutar -> fetch_assoc()){ //Hasta aqui creo que ya sabes como se hace
            /* 
            Aqui lo que hice fue crear variables en las cuales les asignaba los datos que habian en la base de datos
            como ya estaban en variables y era tipo int el campo de la bd fue facil hacer las operaciones
            */
            $precioCom1 = $cantidad['precio_com_1'];
            $cantidadCom1 = $cantidad['cantidad_com_1'];
            $resultadoCom1 = $precioCom1 * $cantidadCom1;
            $precioBeb1 = $cantidad['precio_beb_1'];
            $cantidadBeb1 = $cantidad['cantidad_beb_1'];
            $resultadoBeb1 = $precioBeb1 * $cantidadBeb1;
            $precioCom2 = $cantidad['precio_com_2'];
            $cantidadCom2 = $cantidad['cantidad_com_2'];
            $resultadoCom2 = $precioCom2 * $cantidadCom2;
            $precioBeb2 = $cantidad['precio_beb_2'];
            $cantidadBeb2 = $cantidad['cantidad_beb_2'];
            $resultadoBeb2 = $precioBeb2 * $cantidadBeb2;
            $precioCom3 = $cantidad['precio_com_3'];
            $cantidadCom3 = $cantidad['cantidad_com_3'];
            $resultadoCom3 = $precioCom3 * $cantidadCom3;
            $precioBeb3 = $cantidad['precio_beb_3'];
            $cantidadBeb3 = $cantidad['cantidad_beb_3'];
            $resultadoBeb3 = $precioBeb3 * $cantidadBeb3;
            $total = $resultadoCom1 + $resultadoBeb1 + $resultadoCom2 + $resultadoBeb2 + $resultadoCom3 + $resultadoBeb3;
            //imprimiendo busquedad
            echo $cantidad['fecha']. " ". $cantidad['hora']."<br>";
            echo $cantidad['nombre']. " ". $cantidad['apellido']."<br>";
            echo $cantidad['dirrecion']. "<br>";
            echo "<b> N° de pedido .........". $cantidad['num_pedido']. "</b><br>";
            echo $cantidad["cantidad_com_1"]. " ". $cantidad['pedido_com_1']. " .....$". $resultadoCom1. "<br>";
            echo $cantidad["cantidad_beb_1"]." ". $cantidad['pedido_beb_1']. " .....$". $resultadoBeb1."<br>";
            echo $cantidad["cantidad_com_2"]. " ". $cantidad['pedido_com_2']. " .....$". $resultadoCom2. "<br>";
            echo $cantidad["cantidad_beb_2"]." ". $cantidad['pedido_beb_2']. " .....$". $resultadoBeb2."<br>";
            echo $cantidad["cantidad_com_3"]. " ". $cantidad['pedido_com_3']. " .....$". $resultadoCom3. "<br>";
            echo $cantidad["cantidad_beb_3"]." ". $cantidad['pedido_beb_3']. " .....$". $resultadoBeb3."<br>";
            echo "<b>Total.............$".$total. "</b>";
        }
        $almacenar2 =  "INSERT INTO reporte_oficial_semanal (PRODUCTO1,CANTIDAD1,PRODUCTO2,CANTIDAD2,PRODUCTO3,CANTIDAD3,PRODUCTO4,
CANTIDAD4,PRODUCTO5,CANTIDAD5,PRODUCTO6,CANTIDAD6,IMPORTE_TOTAL_FACTURADO) VALUE ('','','','','','','','','','','','','$total')";
    } else {
        echo "Lo sentimos pera la imformacion ingresada no se encuentra en nuestro sistema ";
    }

?>