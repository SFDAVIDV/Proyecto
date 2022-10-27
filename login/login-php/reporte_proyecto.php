<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table id="reporte" border"2">
    <thead>
        <tr>
            <td class="encabezado">PRODUCTO</td>
            <td class="encabezado">CANTIDAD</td>
            <td class="encabezado">PRODUCTO)</td>
            <td class="encabezado">CANTIDAD</td>
            <td class="encabezado">PRODUCTO</td>
            <td class="encabezado">CANTIDAD</td>
            <td class="encabezado">PRODUCTO</td>
            <td class="encabezado">CANTIDAD</td>
            <td class="encabezado">PRODUCTO</td>
            <td class="encabezado">CANTIDAD</td>
            <td class="encabezado">PRODUCTO</td>
            <td class="encabezado">CANTIDAD</td>
            <td class="encabezado">MONTO TOTAL FACTURADO</td>
        </tr>
    <thead>

    <?php
    $sql = "SELECT * from reporte_oficial_semanal";
    $resultado = myhsqli_query($connect,$sql);
    while($mostrar = mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <td class="contenido"><?php echo $mostrar['PRODUCTO1'] ?></td>
        <td class="contenido"><?php echo $mostrar['CANTIDAD1'] ?></td>
        <td class="contenido"><?php echo $mostrar['PRODUCTO2'] ?></td>
        <td class="contenido"><?php echo $mostrar['CANTIDAD2'] ?></td>
        <td class="contenido"><?php echo $mostrar['PRODUCTO3'] ?></td>
        <td class="contenido"><?php echo $mostrar['CANTIDAD3'] ?></td>
        <td class="contenido"><?php echo $mostrar['PRODUCTO4'] ?></td>
        <td class="contenido"><?php echo $mostrar['CANTIDAD4'] ?></td>
        <td class="contenido"><?php echo $mostrar['PRODUCTO5'] ?></td>
        <td class="contenido"><?php echo $mostrar['CANTIDAD5'] ?></td>
        <td class="contenido"><?php echo $mostrar['PRODUCTO6'] ?></td>
        <td class="contenido"><?php echo $mostrar['CANTIDAD6'] ?></td>
        <td class="contenido"><?php echo $mostrar['IMPORTE_TOTAL_FACTURADO'] ?></td>
    </tr>

    <?php
    }
    ?>


</body>
</html>

?>
<?php
//sentencia SQL para almacenar los datos
        //$eliminar="DELETE FROM sem WHERE IMPORTOTAL_FACTURADO='$total'";
         
        //comprobando si se guarda el registro
        //if ($connect->query($eliminar)===TRUE){
           //echo "<tr><td bgcolor=#53FF53>¡SU REGISTRO HA SIDO ELIMINADO EXITOSAMENTE!</tr></td></table>";
        //}else{
          //echo "<tr><td bgcolor=#ADFEDC>NO FUE POSIBLE ELIMINAR EL REGISTRO</tr></td></table>";}
?>