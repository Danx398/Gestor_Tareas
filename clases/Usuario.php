<?php
    // include "./Conexion.php";
    class Usuario{
        public function logear($usuario, $password){
            try {
                $con = new Conexion();
                $conexion=$con->conectar();
                $sql = "SELECT * FROM t_usuarios WHERE usuario='$usuario' AND password='$password'";
                $respuesta=mysqli_query($conexion,$sql);

                // Debemos preguntar cuandos registros existen
                $existe=mysqli_num_rows($respuesta);
                if ($existe>0) {
                    $_SESSION['usuario']=$usuario;
                    return true;
                }else{
                    return false;
                }
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
?>