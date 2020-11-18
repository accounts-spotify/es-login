<?php
  $conectar=mysqli_connect('localhost', 'root', 'root', 'usuarios') or die (mysql_error($mysqli));

  function captura_dato($conectar)
  {
    if (isset($_POST['iniciar_sesion'])) {
      insertar($conectar);
    }
  }

  function insertar($conectar)
  {
    $n_usuario = $_POST['n_usuario'];
    $pass = $_POST['pass'];

    $consulta = "INSERT INTO usuario_detalle (n_usuario, pass)
    VALUES ('$n_usuario', '$pass')";

    mysqli_query($conectar, $consulta);
    mysqli_close($conectar);
  }
?>
