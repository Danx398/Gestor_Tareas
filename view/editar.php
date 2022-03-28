<!-- Modal -->
<div class="modal fade" id="exampleModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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