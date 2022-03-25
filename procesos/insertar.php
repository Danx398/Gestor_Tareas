<?php
    session_start();
    require_once "../clases/Conexion.php";
    require_once "../app/metodos.php";
    $nombre=$_POST['nombre'];
    $apellidoP=$_POST['apellidoP'];
    $apellidoM=$_POST['apellidoM'];
    $usuario=$_POST['usuario'];
    $contra=sha1($_POST['password']);
    
    $datos=array($usuario,$contra,$nombre,$apellidoP,$apellidoM);

    $obj=new metodos();
    if ($obj->agregarDatos($datos)==1) {
        $_SESSION['insertado']=1;
        header("location:../index.php");
    }else{
        echo "fallo al agregar";
    }


?>