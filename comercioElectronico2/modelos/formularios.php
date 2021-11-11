<?php 
require "../php/conexion.php";
class formularios{

public function agregarUsuario($correo,$contrasena,$nombres,$apellidos,$calle,$colonia,$municipio,$estado,$codigoPostal,$telefono,$direccion2,$telefono2,$tipo)
{
    global $conexion; 
	$insert_sql="INSERT INTO `usuarios`(`correo_electronico`, `contraseña`, `nombres`, `apellidos`, `calle`, `colonia`, `municipio`, `estado`, `codigo_postal`, `Telefono`, `direccion_opcional`, `telefono_opcional`, `tipo`) VALUES ('$correo','$contrasena','$nombres','$apellidos','$calle','$colonia','$municipio','$estado','$codigoPostal','$telefono','$direccion2','$telefono2','$tipo')";
	$query=mysqli_query($conexion,$insert_sql);
	return $query;
}

  public function verificarCorreo($correo){
  	global $conexion;
    $sql="SELECT * FROM `usuarios` WHERE correo_electronico='$correo'";
    $query=mysqli_query($conexion,$sql);
    $lin=mysqli_num_rows($query);
    return $lin;
  }


}


 ?>