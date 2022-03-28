<?php
  if(isset($_SESSION['usuario'])){
?>
<div class="container">
  <div class="row">
    <div class="col-4">
      <!-- <h5 class="text-center ms-5 mt-3">Agregar Nueva Tarea</h5> -->
      <form action="#" method="post" class="form-control mt-3 ms-5 mt-5">
        <button type="button" class="btn btn-outline-dark container-fluid mt-2" data-bs-toggle="modal"
          data-bs-target="#exampleModalTarea">Agregar Nueva Tarea</button>
      </form>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-12">
      <hr>
      <h3 class="text-center">Tareas Agregadas</h3>
      <table class="table table-responsive table-bordered">
        <thead>
          <tr>
            <td>Nombre Tarea</td>
            <td>Fecha inicio</td>
            <td>Hora inicio</td>
            <td>Fecha final</td>
            <td>Hora fin</td>
            <td>Comentarios</td>
            <td>Estado</td>
            <td>Editar</td>
            <td>Eliminar</td>
          </tr>
        </thead>
        <tbody>
          <?php
                include_once "../clases/Conexion.php";
                include_once "../app/metodos.php";
                $sql = "SELECT * FROM t_tarea";
                $obj = new metodos();
                $datos=$obj->mostrarDatos($sql);
                foreach($datos as $key):
              ?>
          <tr>
            <th><?= $key['nombre_tarea'] ?></th>
            <th><?= $key['fecha_inicio'] ?></th>
            <th><?= $key['hora_inicio'] ?></th>
            <th><?= $key['fecha_fin'] ?></th>
            <th><?= $key['hora_fin'] ?></th>
            <th><?= $key['Comentarios'] ?></th>
            <th></th>
            <th><a href="./inicio.php?id=<?= $key['id'] ?>" class="" data-bs-toggle="modal" data-bs-target="#exampleModalEditar"><i class="fas fa-edit fs-4 ms-2 text-warning"></i></a></th>
            <th><a href="../procesos/tareas/eliminarTarea.php?id=<?=$key['id'] ?>"><i
                  class="fas fa-backspace fs-4 ms-2 text-danger"></i></a></th>
          </tr>
          <?php
                endforeach;
              ?>
        </tbody>
      </table>
    </div>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalTarea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Tareas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../procesos/tareas/insertarTarea.php">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre de la tarea:</label>
            <input required="" name="nombre_tarea" type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Fecha de Fin:</label>
            <input required="" name="fecha_fin" type="date" class="form-control" id="recipient-name">
          </div>
          <!-- <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Hora de Inicio:</label>
                <input required="" name="hora_inic" type="time" class="form-control" id="recipient-name">
              </div> -->
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Hora de Fin:</label>
            <input required="" name="hora_fin" type="time" class="form-control" id="recipient-name">
          </div>
          <!-- <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre de la tarea:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div> -->
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Comentarios:</label>
            <textarea required="" name="comentarios" class="form-control" id="message-text"></textarea>
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary position-absolute end-0 me-3">Guardar Tarea</button>

        </form>
      </div>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>

<?php
  }
    ?>