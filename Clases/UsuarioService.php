<?php
include_once "Conexion.php";
include_once 'Usuario.php';

class UsuarioService
{
  private $con;

  function __construct()
  {
    $this->con = new Conexion();
  }

  public function agregar($username, $password, $realname){
    $sql = "INSERT INTO usuario (username, password, realname) VALUES ('$username','$password','$realname')";
    return $this->con->query($sql);
  }

  public function verificar($username, $password) {
    $u = null;

    $sql = "SELECT * FROM usuario WHERE username = '$username' AND password = '$password'";
    $result = $this->con->query($sql);
    if (mysqli_num_rows($result) > 0) {
      $fila = mysqli_fetch_array($result);
      $u = new Usuario();
      $u->setIdUsuario($fila["idusuario"]);
      $u->setUsername($fila["username"]);
      $u->setPassword($fila["password"]);
      $u->setRealname($fila["realname"]);
    }
    return $u;
  }

  public function listar(){
    $usuarios = array();
    $usuario = null;
    $sql = "SELECT idusuario, username, realname FROM usuario";
    $result = $this->con->query($sql);
    if (mysqli_num_rows($result) > 0) {
      while ($fila = mysqli_fetch_array($result)) {
        $usuario = new Usuario;
        $usuario->setIdUsuario($fila["idusuario"]);
        $usuario->setUserName($fila["username"]);
        $usuario->setRealname($fila["realname"]);
        array_push($usuarios,$usuario);
      }
    }
    return $usuarios;
  }

  public function eliminar($idusuario){
    $sql = "DELETE FROM usuario WHERE idusuario = '$idusuario'";
    return $this->con->query($sql);
  }

}
?>
