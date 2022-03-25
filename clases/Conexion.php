<?php
        class Conexion{
            public static function conectar(){
               try {
                $servidor = "localhost";
                $usuario = "root";
                $password = "";
                $bd = "tareas" ;

                $conexion = new mysqli($servidor,$usuario, $password, $bd);

                return $conexion;
               } catch (\Throwable $th) {
                   return $th->getMessage();
               }
            }
        }
        // if (!Conexion::conectar()) {
        //     echo "correcto";
        // }
    ?>
