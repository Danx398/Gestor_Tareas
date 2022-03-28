<?php
    session_start();
    include_once "../../clases/Conexion.php";
    include_once "../../app/metodos.php";
    $id=$_GET['id'];
    $obj = new metodos();
    if ($obj->eliminarDatos($id)==1) {
        $_SESSION['eliminarTarea']=1;
        header("location:../../view/inicio.php");
    }else{
        echo "No se pudo eliminar";
    }
    
    
?>