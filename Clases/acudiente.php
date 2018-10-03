<?php
class acudiente {

    public function consultar_acudiente($conexion){
        $query="select * from consultarAcudiente";
        $consulta=mysqli_query($conexion,$query);
        return $consulta;
    }
    public function registrar_acudiente($conexion,$nombreAcudiente,$apellidoAcudiente,$edadAcudiente, $telefono,$direccion,$ciudadAcudiente){
        $query="call registrar_acudiente('$nombreAcudiente','$apellidoAcudiente',$edadAcudiente, '$telefono','$direccion',$ciudadAcudiente)";
        $consulta=mysqli_query($conexion,$query);
        

        if($consulta){
            $respuesta="Usuario Registrado";
        }else{
            $respuesta="Problemas al registrar";
        }

        return $respuesta;

    }
       

}