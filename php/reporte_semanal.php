
<?php
//variables para realizar conexion de BD
$server="localhost";
$user="root";
$password="";
$bd="delivery";//nombre de la base de datos (BD)

$connect = new mysqli($server,$user,$password,$bd);
if (!$connect){
    echo "No hay conexion";
    return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORTE SEMANAL DE VENTAS</title>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reporte_semanal.css" />
    <link rel="shortcut icon" href="logo_empresa.png" type="image/x-icon" />    
</head>
<body>
    <h1 class="titulo">REPORTE SEMANAL DE VENTAS</h1>
    <table id="reporte" border"2">
    <thead>
        <tr>
            <td class="encabezado">PRODUCTO</td>
            <td class="encabezado">CANTIDAD</td>
            <td class="encabezado">PRODUCTO</td>
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
    $resultado = mysqli_query($connect,$sql);
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
