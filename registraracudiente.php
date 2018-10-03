<?php
include 'Clases/conexion.php';
include 'Clases/ciudad.php';
include 'Clases/acudiente.php';

$ObjConexion = new conexion();
$ObjCiudad = new ciudad();
$ObjAcudiente=new acudiente();

$conexion = $ObjConexion->conectar();
$ciudades = $ObjCiudad->consultar_ciudad($conexion);
$conexion = $ObjConexion->conectar();
$acudientes= $ObjAcudiente->consultar_acudiente($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Estudiante</title>
</head>
<body>
    <form action="Controlador/Registraracudiente.php" method="post">
    <label for="">Nombre: </label><input type="text" name="nombreAcudiente" id=""><br>
    <label for="">Apellido: </label><input type="text" name="apellidoAcudiente" id=""><br>
    <label for="">Edad: </label><input type="text" name="edadAcudiente" id=""><br>
    <label for="">telefono: </label><input type="text" name="telefono" id=""><br>
    <label for="">dirección:</label><input type="text" name="direccion" id=""><br>
    <label for="">Ciudad </label>   
    <select name="ciudadAcudiente" id="ciudadAcudiente">
        <?php 
            while($ciudad = mysqli_fetch_array($ciudades) ){
        ?>
        <option value="<?php echo $ciudad['idCiudad'];?>">
            <?php echo $ciudad['nombre']; ?>  
        </option>
        <?php 
         }
        ?>
    </select><br>
    <input type="submit" value="Registrar"><br>
    
</form>
</body>
</html>