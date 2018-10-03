<?php

include 'Clases/conexion.php';
include 'Clases/acudiente.php';

$objConexion= new conexion();
$objAcudiente = new acudiente();

$conexion=$objConexion->conectar();
$datos = $objAcudiente->consultar_acudiente($conexion);

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
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>EDAD</th>
        <th>TELEFONO</th>
        <th>DIRECCIÓN</th>
        <th>CIUDAD</th>
       
       
        
</tr>  
<?php

while($dato=mysqli_fetch_array($datos)){
  
?>     
<tr>
        <td><?php echo $dato['idAcudiente'];?></td>
        <td><?php echo $dato['nombreAcudiente'];?></td>
        <td><?php echo $dato['apellidoAcudiente'];?></td>
        <td><?php echo $dato['edadAcudiente'];?></td>
        <td><?php echo $dato['telefono'];?></td>
        <td><?php echo $dato['direccion'];?></td>
        <td><?php echo $dato['nombre'];?></td>
    
       
</tr>
<?php
}
?>


</table>
</body>
</html>