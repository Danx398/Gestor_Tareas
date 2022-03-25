<?php
    require_once "../clases/Conexion.php";
    class metodos{
        public function agregarDatos($datos){
            $c=new Conexion();
            $conexion = $c->conectar();
            $sql="INSERT INTO t_usuarios (usuario,password,nombre,apellido_paterno,apellido_materno) 
            VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
            return $resultado=mysqli_query($conexion,$sql);
        }
    }
?>