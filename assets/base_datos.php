<?php

  class baseDatos {
    
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $bd = "informesGAC";

    public function conexion() {
      $conn = mysqli_connect($this->server, $this->username, $this->password, $this->bd);
    
      return $conn;
    }

    public function nueva_conexion($bd) {
      $conn = mysqli_connect($this->server, $this->username, $this->password, $bd);
      return $conn;
    }

    public function mostrar($sql,$conectar) {
      
      $result = mysqli_query($conectar, $sql);

      return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
  }


?>
