<?php
session_start(); 
require_once("../modelos/formularios.php");
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$contrasena=hash('sha512',$contrasena); 
$modelo= new formularios();
$verificarUsuario=$modelo->verificarUsuario($usuario,$contrasena);
if($verificarUsuario!=NULL){
    
    $userdata= array(
        'correo'=>$verificarUsuario[1],
        'nombre'=>$verificarUsuario[3],
        'tipo'=>$verificarUsuario[13]

    );
    $_SESSION['usuario']=$userdata;
    
        echo'<script> 
        window.location="../vistas/usuario.php";
        </script>';
    

}else{
 $_SESSION['respuesta']=1;   
 // header('Location: ../vistas/index.php');
  echo'<script> 
        window.location="../vistas/index.php?pagina=1";
        </script>';
}
 ?>

