<?php
    session_start();
    include_once "../../clases/Conexion.php";
    include_once "../../app/metodos.php";
    
    $id=$_GET['id'];
    $obj = new metodos();
    
?>

