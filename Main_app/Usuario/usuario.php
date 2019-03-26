<!--Se puede acceder, soló si un usaurio existente inicio sesión , de lo contrario redireccionará siempre al inicio -->
<?php
    session_start();

    if(isset($_SESSION["usuario"])){

    } else if($_SESSION["usuario"] != "Usuario"){
        header("Location: ../../");
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuario</title>
    <link rel="stylesheet" href="css/usuarioStyle.css">
  </head>
  <body>
    <h1>Sesión Iniciada Bienvenido</h1>
    
    <a href="../salir.php">Salir</a>
  
  </body>
</html>
