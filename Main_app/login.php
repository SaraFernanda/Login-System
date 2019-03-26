<?php
require('conexion.php');
sleep(2);
//ya se podrán iniciar sesiones
session_start();
$usu=$_POST['usuariolg'];
$pass=$_POST['passlg'];
$usuarios=$mysqli->query("Select nombres,tipo
                        From usuarios Where usuario='".$usu."'
                      AND password='".$pass."'");
//respuesta si los datos son validados de manera correcta
if ($usuarios->num_rows==1):
  $datos= $usuarios->fetch_assoc();
    //acceder a los datos despues de loguearse
  	$_SESSION["usuario"] = $datos;
    echo json_encode(array('error'=>false,'tipo'=>$datos['tipo']));
else:
    echo json_encode(array('error'=>true));
endif;
$mysqli->close();
 ?>
