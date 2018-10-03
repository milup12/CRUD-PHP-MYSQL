<?php
class ciudad {
public function consultar_ciudad($conexion){
        $query="call consultar_ciudad()";
        $consulta=mysqli_query($conexion,$query);
        return $consulta;
    }
}   