<?php

    include "../assets/base_datos.php";

    if(isset($_POST)) {
        $bd = $_POST['base_datos'];

        echo "La base de datos seleccionada es ".$bd;
    }

/*    if(isset($_POST) && !empty($_POST)) {
        session_start();

        $correo = $_POST['correo_sesion'];
        $pass = $_POST['contrasena_sesion'];
        $bd = $_POST['base_datos'];

        $obj = new baseDatos();

        $con = $obj->nueva_conexion($bd);

        $sql_select =  "SELECT * from usuario ";

        $res = mysqli_query($con, $sql_select);



        if($con) {
        if($result > 0) {
            $resultados = mysqli_fetch_all($res, MYSQLI_ASSOC);

            foreach ($resultados as $key) {
                $_SESSION['usuario'] = $key['nombre_usu'];
            }   
            $result = mysqli_num_rows($res);

            $var_session = $_SESSION['usuario'];

            header ("Location: ../index.php");

            
        }else {
            echo "<script>alert('Usuario o Contraseña incorrecto'); window.open('../src/iniciar_sesion.php', '_self');</script>";
        }
        }else {
        header ("Location: ../src/errorDB.php");
        }
    }else {
        header ("Location: ./src/volver.php");

    }
    

    */


?>