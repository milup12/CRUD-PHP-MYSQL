<?php

include 'Clases/conexion.php';
include 'Clases/ciudad.php';

$objConexion= new conexion();
$objCiudad = new ciudad();

$conexion=$objConexion->conectar();
$datos = $objCiudad->consultar_ciudad($conexion);

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
    <table borde ="">
<tr>
        <th>ID</th>
        <th>CIUDAD</th>
        
</tr>  
<?php

while($dato=mysqli_fetch_array($datos)){
?>     
<tr>
        <td><?php echo $dato['idCiudad'];?></td>
        <td><?php echo $dato['nombre'];?></td>
       
</tr>
<?php
}
?>


</table>
</body>
</html>