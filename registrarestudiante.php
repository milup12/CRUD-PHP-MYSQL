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
    <form action="Controlador/Registrarestudiante.php" method="post">
    <label for="">Nombre: </label><input type="text" name="nombreEstudiante" id=""><br>
    <label for="">Apellido: </label><input type="text" name="apellidoEstudiante" id=""><br>
    <label for="">Edad: </label><input type="text" name="edad" id=""><br>
    <label for="">Ciudad </label>   
    <select name="idCiudad2" id="idCiudad2">
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

    <label for="">Acudiente: </label>
    <select name="idAcudiente2" id="idAcudiente2">

    <?php 
    while($acudiente = mysqli_fetch_array($acudientes) ){
        ?>
     <option value="<?php echo $acudiente['idAcudiente'];?>">
     <?php echo $acudiente['nombreAcudiente']; ?>  
    </option>
    <?php 
    }
    ?>
    </select><br>
            
    <input type="submit" value="Registrar"><br>
    
</form>

</body>
</html>