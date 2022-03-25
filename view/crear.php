<!doctype html>
<html lang="en">

<head>
    <title>Crear Nuevo Usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <?php
        require_once "../app/config.php";
        require_once "../app/dependencias.php";
    ?>

</head>

<body>
    <h1 class="text-center fs-4 mb-4 mt-3">Registro de Nuevo Usuario</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="../procesos/insertar.php" method="post" class="form-control" autocomplete="off"> 
                    <label for="">Nombre</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                        <input placeholder="Nombre" required="" class="form-control" type="text" name="nombre">

                    </div>
                    <label for="">Apellido Paterno</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
                        <input placeholder="Apellido Paterno" required="" class="form-control" type="text" name="apellidoP">

                    </div>
                    <label for="">Apellido Materno</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
                        <input placeholder="Apellido Materno" required="" class="form-control" type="text" name="apellidoM">

                    </div>
                    <label for="">Usuario</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-check"></i></span>
                        <input placeholder="Usuario" required="" class="form-control" type="text" name="usuario">

                    </div>
                    <label for="">Contraseña</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        <input placeholder="Contraseña" required="" class="form-control" type="password" name="password" id="">

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <button class="btn btn-secondary container-fluid mb-3">Agregar Usuario</button>
                        </div>
                        <div class="col-4 ms-5">
                        <a href="../index.php" class="btn btn-secondary container-fluid mb-3">Cancelar</a>
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script> -->
    <script src="../controller/validacion.js"></script>
</body>

</html>