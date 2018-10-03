<?php

include 'Clases/conexion.php';
include 'Clases/estudiante.php';

$objConexion= new conexion();
$objEstudiante = new estudiante();

$conexion=$objConexion->conectar();
$datos = $objEstudiante->consultar_estudiante($conexion);

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
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>EDAD</th>
        <th>CIUDAD DE NACIMIENTO</th>
        <th>RESPONSABLE</th>
       
       
        
</tr>  
<?php

while($dato=mysqli_fetch_array($datos)){
   
?>     
<tr>
        <td><?php echo $dato['NOMBRE'];?></td>
        <td><?php echo $dato['APELLIDO'];?></td>
        <td><?php echo $dato['EDAD'];?></td>
        <td><?php echo $dato['CIUDAD_DE_NACIMIENTO'];?></td>
        <td><?php echo $dato['RESPONSABLE'];?></td>
    
       
</tr>
<?php
}
?>


</table>
</body>
</html>