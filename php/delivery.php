<?php

//variables para realizar conexion de BD
$server="localhost";
$user="root";
$password="";
$bd="delivery";//nombre de la base de datos (BD)

//Variables que capturan datos del formulario 
$orden       = $_POST['orden'];
$nombre      = $_POST['nombre'];
$apellido    = $_POST['apellido']; 
$comida      = $_POST['pedido'];
$bebida      = $_POST['bebida'];
$fecha       = $_POST['fecha'];
$hora        = $_POST['hora'];         
$productos1  = $_POST['solicitud1'];
$cantidad1   = $_POST['cantidad1'];
$precio1     = $_POST['precio1'];
$productos2  = $_POST['solicitud2'];
$cantidad2   = $_POST['cantidad2'];
$precio2     = $_POST['precio2'];
$productos3  = $_POST['solicitud3'];
$cantidad3   = $_POST['cantidad3'];
$precio3     = $_POST['precio3'];
$total       = $_POST['total'];
$telefono    = $_POST['telefono'];
$direccion   = $_POST['direccion'];
$abonado     = $_POST['dinero'];
$demora      = $_POST['demora'];

//proceso de conexion
$connect = new mysqli($server,$user,$password,$bd);

echo "<center>";
echo "<table border=8>";

if(!$connect){
        echo "No hay conexion con la base de datos ";
    }else {
        //sentencia SQL para almacenar los datos
        $almacenar1 = "INSERT INTO sem (PRODUCTOS_SOLICITADOS,CANTIDAD,IMPORTE_UNITARIO,IMPORTOTAL_FACTURADO) 
        VALUES ('$productos1','$cantidad1','$precio1','')";
        $almacenar2 = "INSERT INTO sem (PRODUCTOS_SOLICITADOS,CANTIDAD,IMPORTE_UNITARIO,IMPORTOTAL_FACTURADO) 
        VALUES ('$productos2','$cantidad2','$precio2','')";
        $almacenar3 = "INSERT INTO sem (PRODUCTOS_SOLICITADOS,CANTIDAD,IMPORTE_UNITARIO,IMPORTOTAL_FACTURADO) 
        VALUES ('$productos3','$cantidad3','$precio3','$total')";

        //comprobando si se guarda el registro
        if (mysqli_query($connect,$almacenar1)){
            if (mysqli_query($connect,$almacenar2)){
                if (mysqli_query($connect,$almacenar3)){
            echo "<tr><td bgcolor=#DCB5FF>¡SU REGISTRO HA SIDO ALMACENADO EXITOSAMENTE ;)</tr></td></table>";
            }
        }
        }else{
            echo "<tr><td bgcolor=#ff7575>SU REGISTRO NO HA SIDO ALMACENADO :(<br><br>";
            echo "<tr><td bgcolor=#FFCBB3>ESTA PALABRA YA SE ENCUENTRA ALMACENADA, POR FAVOR DIGITE OTRA.</tr></td></table>";
        }
    }
echo "<tr><td bgcolor=#ff7575> REGISTRO DE<br><br>";
echo "</center>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORTE SEMANAL Y ESTADISTICAS</title>
</head>
<body>
<table id=reporte border="2">
    <tr>
        <th>PRODUCTOS SOLICITADOS</th>
        <th>CANTIDAD</th>
        <th>IMPORTE UNITARIO</th>
        <th>IMPORTE TOTAL FACTURADO</th>
    </tr>

    <?php
    //Extraccion de datos de la bd 
    $sql = "SELECT * from sem";
    $resultado = mysqli_query($connect,$sql);
    while($mostrar = mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <th><?php echo $mostrar['PRODUCTOS_SOLICITADOS'] ?></th>
        <th><?php echo $mostrar['CANTIDAD'] ?></th>
        <th><?php echo $mostrar['IMPORTE_UNITARIO'] ?></th>
        <th><?php echo $mostrar['IMPORTOTAL_FACTURADO'] ?></th>
    </tr>
    <?php
    }
    ?>
</body>
</html>

<?php
//sentencia SQL para almacenar los datos
        //$eliminar="DELETE FROM sem WHERE IMPORTOTAL_FACTURADO='$total'";
         
        //comprobando si se guarda el registro
        //if ($connect->query($eliminar)===TRUE){
           //echo "<tr><td bgcolor=#53FF53>¡SU REGISTRO HA SIDO ELIMINADO EXITOSAMENTE!</tr></td></table>";
        //}else{
          //echo "<tr><td bgcolor=#ADFEDC>NO FUE POSIBLE ELIMINAR EL REGISTRO</tr></td></table>";}
?>