<?php

include '../Clases/conexion.php';
include '../Clases/estudiante.php';
include '../Clases/acudiente.php';
include '../Clases/ciudad.php';


$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objEstudiante = new estudiante();
$objAcudiente=new acudiente();
//print_r($_POST);
echo $objEstudiante->registrar($conexion,$_POST['nombreEstudiante'],$_POST['apellidoEstudiante'],$_POST['edad'],$_POST['idCiudad2'],$_POST['idAcudiente2']);
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
   
   
</form>
</body>
</html>