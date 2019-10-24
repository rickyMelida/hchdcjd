<?php
    require_once "../assets/base_datos.php";
    $bd = '';
    if($_POST) {
        $bd = $_POST['bd'];  
        setcookie('servidor', $bd);      
        if(empty($_COOKIE['servidor'])) {
            echo("<script>alert('No se selecciono ninguna base de datos');</script>");
        }else {  
            echo "La base de datos seleccionada es ".$_COOKIE['servidor'];
            
            $obj = new baseDatos();
            $db = $obj->nueva_conexion($bd);
        }
    }

?>
<!DOCTYPE html>
<html lang="es">

 <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Iniciar Sesíon</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

 </head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="../images/logos/s&rlogo1 100x36.png" alt="S&R Sistema de Reportes">
                            </a>
                                <p>
                                    Sistema de Reportes
                                </p>
                        </div>
                        <div class="login-form">
                            <form action="../partials/validar_usuario.php" method="post">
                                <div class="form-group">
                                    <label>Direccion de Correo</label>
                                    <input class="au-input au-input--full" type="email" name="correo_sesion" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input class="au-input au-input--full" type="password" name="contrasena_sesion" placeholder="Contraseña">
                                    <input type="hidden" name="base_datos" value="<?php echo $_COOKIE['servidor']; ?>">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="recuerdame">Recuerdame
                                    </label>
                                    <label>
                                        <a href="olvidar_contrasena.php">Olvidé mi Contraseña</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">iniciar sesion</button>
                               
                            </form>
                            <div class="register-link">
                                <p>
                                    No Tienes Usuario?
                                    <a href="usuario.php">Registrate Aqui</a>
                                </p>
                            </div>
                            <div class="register-link">
                                <a href="#" data-toggle="modal" data-target="#acceso">Setup</a>
                            </div>

                            <!--Modal de seleccion de la base de datos-->
                            <div class="modal fade " id="acceso">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Iniciar sesion de administrador</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="../partials/select_bd.php" method="post">
                                                <div class="form-group">
                                                    <label for="usuario">usuario</label>
                                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <input type="submit" class="btn btn-primary" value="Acceder">
                                            </form>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!------------------------->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

 </body>

 </html>