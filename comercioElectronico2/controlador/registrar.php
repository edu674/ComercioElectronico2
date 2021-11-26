
<?php
session_start(); 
     require_once("../modelos/formularios.php");
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$codigoPostal=$_POST['codigopostal'];
	$correo=$_POST['correo'];
	$calle=$_POST['calle'];
	$colonia=$_POST['colonia'];
	$municipio=$_POST['municipio'];
	$estado=$_POST['estado'];
	$contrasena=$_POST['contrasena'];
	$contrasena2=$_POST['contrasena2'];
	$tipo=$_POST['tipo'];
	$telefono=$_POST['telefono'];
	$direccion2=$_POST['direccion2'];
	$telefono2=$_POST['telefono2'];
     $registar=new formularios();
     $res=$registar->verificarCorreo($correo);
     if (strcmp($contrasena,$contrasena2)==0) {
    if ($res>0) {	
    	echo'<script> 
		window.location.href="../vistas/formulario.php?validar=1";
		</script>';
    }else{
    $contrasena=hash('sha512',$contrasena);	
    $registar->agregarUsuario($correo,$contrasena,$nombres,$apellidos,$calle,$colonia,$municipio,$estado,$codigoPostal,$telefono,$direccion2,$telefono2,$tipo);
    $userdata=array(
    	'correo'=>$correo,
    	'nombre'=>$nombres,
    	'tipo'=>$tipo
    );
    $_SESSION['usuario']=$userdata;
    echo'<script> 
		window.location="../vistas/usuario.php";
		</script>';
    }
 }else{
 	echo'<script> 
		window.location.href="../vistas/formulario.php?validar=2";
		</script>';
 }
?>

