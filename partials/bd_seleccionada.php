<?php

    require_once "../assets/base_datos.php";

    $c = new baseDatos();
    $con = $c->conexion();


    $obj  = new resultado();
    $sql = "SHOW DATABASES";
    $datos = $obj->mostrar($sql);
    
    

   $bd = $_POST['bd'];
    
    if(isset($bd) && $bd != "mysql"){
        $con_nueva = $c->nueva_conexion($bd);

    }   

    if($con_nueva) {
        echo "<script>alert('Se conecto a la base de datos ".$bd."'); window.open('../src/iniciar_sesion.php', '_self');</script>";
        //header ("Location: ../src/iniciar_sesion.php");

    }
?>