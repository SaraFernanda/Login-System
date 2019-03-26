<!--si la variable de sesion existe ingresa, snino no se hara nada, inicar a donde se debe riredireccionar si el usuario ya se valido-->
<?php
    session_start();
    if(isset($_SESSION["usuario"])){
      if($_SESSION["usuario"]["tipo"] == "Usuario"){
        header("Location: Main_app/Usuario/usuario");
      }
    }

?>

<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <title>Login System</title>
    <link rel="stylesheet" href="css/main2.css">
  </head>
  <body>
    <h1>LOGIN SYSTEM</h1>
    <div class="error">
      <span>Los datos no corresponden a un usuario existente</span>
    </div>
    <div class="main">
     <form action="" id="formLg">
        <input type="text" name="usuariolg"  placeholder="Usuario" required>
        <input type="password" name="passlg"  placeholder="Contraseña" required>
        <input type="submit" class="botonlg"  value="Iniciar Sesion" >
     </form>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
