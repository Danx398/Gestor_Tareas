<?php
    session_start();
    include_once "../../clases/Conexion.php";
    include_once "../../app/metodos.php";
    
    $id=$_POST['id'];
    $obj=new Conexion();
    $conexion=$obj->conectar();
    $obj = new metodos();
    // $datos = array('hola','2022-02-01');
    // echo $datos[0];
    // echo $datos[1];
    $sql="SELECT * from t_tarea where id='$id'";
    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_array($result);

    $data = array(
        "id"=>$ver['id'],
        "comentarios" => $ver['Comentarios'],
        "horaFin" => $ver['hora_fin'],
        "fechaFin" => $ver['fecha_fin'],
        "nombreTarea" => $ver['nombre_tarea']
    );
    
    echo json_encode($data);
?>

