<?php
session_start();
if($_SESSION){
session_destroy();
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stilos.css">
    <title>Biblioteca Virtual</title>
  </head>
  <body>

    <div class="login">

      <form class="form-login" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label id="bienvenido"for="">Bienvenido</label>


        <input type="text" name="usuario" placeholder="Usuario" id="nombre"value="">
        <input type="password" name="password" placeholder="Contraseña" id="password"value="">
        <input type="submit" name="entrar" id="entrar" value="Entrar">
      </form>
    </div>

    <?php if(isset($_POST['entrar'])): ?>
    <?php
      $path = "Usuarios.csv";
      $path2 = "Libros.csv";
      $path3 = "Reseñas.csv";
      $usuario = $_POST['usuario'];
      $password = $_POST['password'];
      $file = fopen($path, "r");
      $file3 = fopen($path3, "r");
      //Administrador
      while($fields = fgetcsv($file,","))
      {
        if($usuario == $fields[0] && $password == $fields[1] && $password != 'Password'){
          session_start();
          $_SESSION['usuario_session']  = $usuario;
          header('Location: http://localhost/Project/php/panelAdministrador/panelAdministrador.php');
        }
      }
      fclose($file);
      //Libros
      $file2 = fopen($path2, "r");
        while($fields2 = fgetcsv($file2,","))
        {
          if($usuario == $fields2[0] && $password==$fields2[6]  && $password != 'Password'){
            session_start();
            $_SESSION['usuario_session']  = $usuario;
            header('Location: http://localhost/Proyect/php/panelLibro.php');
          }
        }
        fclose($file2);
        //Reseñas
      $file3 = fopen($path3, "r");
        while($fields3 = fgetcsv($file3,","))
        {
          if($usuario == $fields3[0] && $password==$fields3[6] && $password != 'Password'){
            session_start();
            $_SESSION['usuario_session']  = $usuario;
            header('Location: http://localhost/Project/php/panelDocente/panelReseña.php');
          }
        }
        fclose($file3);

     ?>

    <?php endif; ?>
  </body>
</html>
