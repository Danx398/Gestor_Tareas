<?php
  require_once "../../clases/Conexion.php";
  require_once "../../app/metodos.php";
  $id=$_POST['id_tarea'];
  $nombreT=$_POST['nombre_tarea'];
  $fechaF=$_POST['fecha_fin'];
  $horaF=$_POST['hora_fin'];
  $coments=$_POST['comentarios'];
  print_r($_POST);
  $datos=array($nombreT,$fechaF,$horaF,$coments,$id);

  $obj=new metodos();
  if ($obj->actualizarDatos($datos)==1) {
      header("location:../../view/inicio.php");
  }else{
      echo("no se puede agregar");
  }
?>