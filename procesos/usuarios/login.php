<?php
    session_start();
    include "../../clases/Conexion.php";
    include "../../clases/Usuario.php";
    $Usuarios = new Usuario();
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    $respuesta= $Usuarios->logear($usuario,$password);
    if ($respuesta) {
        echo "Estas dentro";
        $_SESSION['login']=1;
       header("location:../../view/inicio.php");
    }else{
        $_SESSION['loginIn']=1;
        header("location:../../index.php");
        // echo "No puedes entrar";
    }
?>