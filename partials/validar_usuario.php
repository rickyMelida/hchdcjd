<?php

    include "../assets/base_datos.php";

    $correo = $_POST['correo_sesion'];
    $pass = $_POST['contrasena_sesion'];
    $bd = $_POST['base_datos'];

    $obj = new baseDatos();

    $con = $obj->nueva_conexion($bd);

    $sql_select =  "SELECT * from usuario ";

    $res = mysqli_query($con, $sql);

    $result = mysqli_num_rows($res);

    if($con) {
        echo "Si se conecto a la nueva base de datos";
    }else {
        echo "No, no se conecto a la base de datos";
    }

    if($result > 0) {
        echo "Si, existe el usuario";
    }else {
        echo "No, no existe el usuario, estoy en la bd ".$bd;
    }


?>