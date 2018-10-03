<?php

include 'Clases/conexion.php';
include 'Clases/ciudad.php';

$objConexion=new conexion();
$objCiudad = new ciudad();

$conexion=$objConexion->conectar();

$datos=$objCiudad->consultaridCiudad($conexion,$_GET['idCiudad']);
$idAcudiente;
$nombreAcudiente;
$apellidoAcudiente;
$edadAcudiente;
$telefono;
$dirección;
$ciudadAcudiente;


while($dato=mysqli_fetch_array($datos)){
    $idAcudiente=$dato['idAcudiente'];
    $nombreAcudiente=$dato['nombreAcudiente'];
    $apellidoAcudiente=$dato['apellidoAcudiente'];
    $edadAcudiente=$dato['edadAcudiente'];
    $telefono= $dato['telefono'];
    $direccion=$dato['direccion'];
    $ciudadAcudiente = $dato['ciudadAcudiente'];


}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="Controlador/editar.php" method="post">
    <input value="<?php echo $id; ?>" type="hidden" name="idAcudiente">
    <label for="">Nombre:<label><input type="text" name="nombreAcudiente" value="<?php echo $nombreAcudiente; ?>"><br>
    <label for="">Apellido:<label><input type="text" name="apellidoAcudiente"  value="<?php echo $apellidoAcudiente; ?>"><br>
    <label for="">Edad:<label><input type="text" name="edadAcudiente"  value="<?php echo $edadAcudiente; ?>"><br>
    <label for="">telefono:<label><input type="text" name="telefono"  value="<?php echo $telefono; ?>"><br>
    <label for="">Dirección:<label><input type="text" name="dirección"  value="<?php echo $dirección; ?>"><br>
    <input type="submit" value="Actualizar">
</body>

<form action="Controlador/editar.php" method="post">
    <input value="<?php echo $id; ?>" type="hidden" name="id">
    <label for="">id:<label><input type="text" name="idCiudad" value="<?php echo $idCiudad; ?>"><br>
    <label for="">Nombre:<label><input type="text" name="nombre"  value="<?php echo $nombre; ?>"><br>

    <input type="submit" value="Actualizar">

</html>