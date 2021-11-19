<?php 
session_start(); 
    require_once("../modelos/formularios.php");
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$codigoPostal=$_POST['codigopostal'];
	$correo=$_SESSION['usuario']['correo'];
	$calle=$_POST['calle'];
	$colonia=$_POST['colonia'];
	$municipio=$_POST['municipio'];
	$estado=$_POST['estado'];
	$telefono=$_POST['telefono'];
	$direccion2=$_POST['direccion2'];
	$telefono2=$_POST['telefono2'];
     $registar=new formularios();
     $res=$registar->actualizarUsuario($correo,$nombres,$apellidos,$calle,$colonia,$municipio,$estado,$codigoPostal,$telefono,$direccion2,$telefono2);
      if ($res==1) {
      $_SESSION['respuesta']=1;
      echo'<script> 
		window.location.href="../vistas/usuario.php";

		</script>';
    }else{
 	echo'<script> 
		window.location.href="../vistas/usuario.php";
		</script>';
 }
 ?>
