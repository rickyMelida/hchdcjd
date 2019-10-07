<?php



class baseDatos {
  
  private $server = 'localhost:3306';
  private $username = 'root';
  private $password = '';

  public function conexion() {
    $conn = mysqli_connect($this->server, $this->username, $this->password);
  
    return $conn;
  }

  public function nueva_conexion($bd) {
    $conn = mysqli_connect($this->server, $this->username, $this->password, $bd);
    return $conn;
  }
}

class resultado {
  public function mostrar($sql) {
    $con = new baseDatos();
    $conectar = $con->conexion();

    $result = mysqli_query($conectar, $sql);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);

  }
}



?>
