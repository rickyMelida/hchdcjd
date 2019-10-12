<?php

    include "../assets/base_datos.php";

    /*if(isset($_POST)) {
        $bd = $_POST['base_datos'];

        echo "La base de datos seleccionada es ".$bd;

        $obj = new baseDatos();
        $con = $obj->nueva_conexion($bd);
        $sql = "SELECT * from usuario";

        $res = $obj->mostrar($sql, $con);

        echo "<table>";
        foreach($res as $key) {
            echo "<tr>";
            echo "<td>".$key['nombre_usu']."</td>";
            echo "<td>".$key['correo_usu']."</td>";
            echo "<td>".$key['pass_usu']."</td>";
            echo "</tr>";

        }

        echo "</table>";
        
    }*/




?>