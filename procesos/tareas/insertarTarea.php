<?php
    session_start();
    require_once "../../clases/Conexion.php";
    require_once "../../app/metodos.php";

    $nombre_tarea = $_POST['nombre_tarea'];
    $fecha_fin = $_POST['fecha_fin'];
    //$hora_inicio=$_POST['hora_inic'];
    $hora_fin=$_POST['hora_fin'];
    $comentarios = $_POST['comentarios'];
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>"
    $datos = array($nombre_tarea,$fecha_fin,$hora_fin,$comentarios);
    $obj = new metodos();
    if ($obj->agregarDatosTarea($datos)==1) {
        $_SESSION['insertadoTarea']=1;
        header("location:../../view/inicio.php");
    }else{
        echo "fallo al agregar";
    }
    
?>