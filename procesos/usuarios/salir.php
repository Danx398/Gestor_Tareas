<?php
    session_start();
    // session_destroy();
    unset($_SESSION['usuario']);
    // $_SESSION['login']=1;
    
    function hola(){
        $_SESSION['cerrarSesion']=1;
        header("location:../../index.php");
    }
    hola();
?>