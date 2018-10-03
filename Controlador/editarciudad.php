<?php

include '../Clases/conexion.php';
include '../Clases/ciudad.php';

$objConexion=new conexion();
$objCiudad = new ciudad();

$conexion=$objConexion->conectar();


echo $objCiudad->editarCiudad($conexion, $_POST['idCiudad'],$_POST['nombre']);

