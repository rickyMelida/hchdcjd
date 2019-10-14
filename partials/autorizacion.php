<?php    

//    error_reporting(0);
    session_start();
    $var_session = $_SESSION['usuario'];

      //require_once "validar_usuario.php";
        
        if($var_session == null || $var_session == '') {
            echo "<script>//alert('Debe iniciar sesion con un usuario valido!');
                    window.location.href = './src/iniciar_sesion.php';
            </script>";
        }else {
        header ("Location: ./src/iniciar_sesion.php");

    }   

    

?>