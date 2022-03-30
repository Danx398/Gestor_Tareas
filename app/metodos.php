<?php
    // require_once "../clases/Conexion.php";
    class metodos{
        public function agregarDatosUsuario($datos){
            $c=new Conexion();
            $conexion = $c->conectar();
            $sql="INSERT INTO t_usuarios (usuario,password,nombre,apellido_paterno,apellido_materno) 
            VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
            return $resultado=mysqli_query($conexion,$sql);
        }
        public function agregarDatosTarea($datos){
            $c=new Conexion();
            $conexion = $c->conectar();
            $sql="INSERT INTO t_tarea(nombre_tarea,fecha_fin,hora_fin,comentarios,fecha_inicio,hora_inicio) 
            VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]',curdate(),DATE_FORMAT(now( ), '%H:%i:%S'))";
            return $resultado=mysqli_query($conexion,$sql);
        }
        public function mostrarDatos($sql){
            $c=new Conexion();
            $conexion = $c->conectar();
            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        public function eliminarDatos($id){
            $c=new Conexion();
            $conexion=$c->conectar();
            $sql= "DELETE from t_tarea where id='$id'";
            return $result=mysqli_query($conexion,$sql);
        }
        public function actualizarDatos($datos){
            $c=new Conexion();
            $conexion=$c->conectar();
            $sql = "UPDATE t_tarea SET nombre_tarea='$datos[0]',
                                       fecha_fin='$datos[1]',
                                       hora_fin='$datos[2]',
                                       Comentarios='$datos[3]' where id='$datos[4]'";
            $result=mysqli_query($conexion,$sql);
            return $result;
        }
        public function cambiarEstado(){
            
        }
    }
?>