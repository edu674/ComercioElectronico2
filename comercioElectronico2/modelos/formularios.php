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
    $query=mysqli_num_rows($query);
    return $query;
  }

  public function actualizarUsuario($correo,$nombres,$apellidos,$calle,$colonia,$municipio,$estado,$codigoPostal,$telefono,$direccion2,$telefono2)
{
    global $conexion; 
  $insert_sql="UPDATE `usuarios` SET `nombres`='$nombres',`apellidos`='$apellidos',`calle`='$calle',`colonia`='$colonia',`municipio`='$municipio',`estado`='$estado',`codigo_postal`='$codigoPostal',`Telefono`='$telefono',`direccion_opcional`='$direccion2',`telefono_opcional`='$telefono2' WHERE correo_electronico='$correo'";
  $query=mysqli_query($conexion,$insert_sql);
  return $query;
}

 public function verificarUsuario($correo,$contrasena){
    global $conexion;
    $sql="SELECT *  FROM `usuarios` WHERE correo_electronico='$correo' and contraseña='$contrasena'";
    $query=mysqli_query($conexion,$sql);
    $query=mysqli_fetch_row($query);
    return $query;
  }




}


 ?>