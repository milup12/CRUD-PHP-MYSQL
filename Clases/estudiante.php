<?php

class estudiante{

    public function registrar($conexion,$nombreEstudiante,$apellidoEstudiante,$edad,$idCiudad2,$idAcudiente2){
        $query = "CALL registrar_estudiante('$nombreEstudiante','$apellidoEstudiante',$edad,$idCiudad2,$idAcudiente2)";
        $consulta= mysqli_query($conexion,$query);

        if($consulta){
            $respuesta="Usuario Registrado";
        }else{
            $respuesta="Problemas al registrar";
        }

        return $respuesta;
    }
  

    public function consultar_estudiante($conexion){
        $query="select * from consultarEstudiante";
        $consulta=mysqli_query($conexion,$query);
        return $consulta;
    }
}