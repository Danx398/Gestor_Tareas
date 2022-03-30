// validacion();
function validacion(){

    if($('#input_usuario').val() == "" & $('#input_password').val() == ""){
        swal("Campos vacios", "Revise porfavor", "error");
    }else{

    }
    // else if($('#input_nombre').val() == ""){
    //     swal("Campo nombre vacio", "Revise porfavor", "error");
    // }else if($('#input_apellido').val() == ""){
    //     swal("Campo apellido vacio", "Revise porfavor", "error");
    // } else{
    //     concatenar();
    // }

};
function actualizarDatos(id) {
    // alert(id);
    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"../procesos/tareas/editarTarea.php",
        success:function(respuesta){
            console.log(respuesta)
           respuesta = jQuery.parseJSON(respuesta);
           $('#nombreTarea').val(respuesta['nombreTarea']);
           $('#fechaFin').val(respuesta['fechaFin']);
           $('#horaFin').val(respuesta['horaFin']);
           $('#comentariosTarea').val(respuesta['comentarios']);
           $('#idTarea').val(respuesta['id']);
        }
    });
}

