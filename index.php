<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- <title>Login</title> -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <?php
        // require_once
        require_once "./app/config.php";
        require_once "./app/dependencias.php";
    ?>
    <title><?= TITULO_PAGINA ?></title>
</head>

<body>
    <h1 class="text-center">Login con PHP y MYSQL</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="./procesos/usuarios/login.php" method="post" class="form-control border" autocomplete="off">
                    <img class="mb-4 rounded mx-auto d-block mt-3" src="./images/pruebaUser.png" alt="" width="40%"
                        height="40%">
                    <label for="">Usuario</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input required="" type="text" name="usuario" class="form-control"
                            placeholder="Ingresa tu Usuario" id="input_usuario">
                    </div>
                    <label for="">Contraseña</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        <input required="" type="password" name="password" class="form-control"
                            placeholder="Ingresa tu contraseña" id="input_password">
                    </div>
                    <div class="row  justify-content-center">
                        <div class="col-6 col-md-6 col-sm-12">
                            <button class="btn btn-outline-dark form-control container-fluid">Iniciar Sesión</button>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <p class="text-muted">¿No tienes una cuenta? <a class="" href="./view/crear.php">
                                Crea una
                            </a> </p>

                    </div>


                </form>
            </div>

        </div>
    </div>
</body>

</html>
<script src="./controller/validacion.js"></script>
<?php
    if(isset($_SESSION['insertado'])==1){
        echo "
            <script>
                // alert('Insertado con exito');
                swal({
                    title:'Excelente!',
                    text:'Insertado con exito',
                    icon:'success',
                    button:'Aceptar',
                });
                // swal('insertado con exito');
            </script>
        ";
        unset($_SESSION['insertado']);
    }
    if (isset($_SESSION['loginIn'])==1) {
        echo "
            <script>
                // alert('Insertado con exito');
                swal({
                    title:'Credenciales Incorrectas',
                    text:'Revise sus datos',
                    icon:'error',
                    button:'Aceptar',
                });
                // swal('insertado con exito');
            </script>
        ";
        unset($_SESSION['loginIn']);
    }
    if (isset($_SESSION['cerrarSesion'])==1) {
        echo "
            <script>
                // alert('Sesión cerrada con exito');
                swal({
                    title:'Sesión cerrada con exito',
                    text:'Lo esperaremos para su siguiente visita',
                    icon:'success',
                    button:'Aceptar',
                });
                // swal('insertado con exito');
            </script>
        ";
        unset($_SESSION['cerrarSesion']);
    }
?>