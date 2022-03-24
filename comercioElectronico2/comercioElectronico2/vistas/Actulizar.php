<?php 
session_start();//inicia la variable global session
include("../modelos/tienda.php"); //manda a llamar al modelo tienda.php para buscar al usuario a actualizar 
$data= new tienda();//se invoca a la clase tienda del modelo tienda
$cor=$_SESSION['usuario']['correo'];// la variable cor tomara el valor de la varible sesion usuraio, tomando como valor unicamente el correo
$userdata=$data->buscarUsuario($cor);//la variable userdata almacenara atraves de la funcion buscarUsuario los datos del usuario y los colocara en los input 

 ?>
 	<div class="row">
 		<h1>Actualizar Datos </h1>
 		<div class="col s10">
 			<form action="../controlador/Actualizar.php" method="post">
 			<h4>Nombres:</h4>
 			<input type="text" name="nombres" id="nombres" value="<?php echo $userdata["nombres"]; ?>"/>
 			<h4>Apellidos:</h4>
 			<input type="text" name="apellidos" id="apellidos" value="<?php echo $userdata["apellidos"]; ?>"/>
            <h4>Calle:</h4>
            <input type="text" name="calle" id="calle" value="<?php echo $userdata["calle"]; ?>"/>
            <h4>Colonia:</h4>
            <input type="text" name="colonia" id="colonia" value="<?php echo $userdata["colonia"]; ?>"/>
 			<h4>Municipio:</h4>
 			<input type="text" name="municipio"  id="municipio" value="<?php echo $userdata["municipio"]; ?>"/>
 			<h4>Estado:</h4>
 			<input type="text" name="estado" id="estado" value="<?php echo $userdata["estado"]; ?>"/>
 			<h4>Codigo Postal:</h4>
 			<input type="text" name="codigopostal" id="codigopostal" value="<?php echo $userdata["codigo_postal"]; ?>"/>
 			<h4>Telefono:</h4>
 			<input type="text" name="telefono" id="telefono" value="<?php echo $userdata["Telefono"]; ?>"/>
 			<h4>Telefono Secundario:</h4>
 			<input type="text" name="telefono2" id="telefono2" value="<?php echo $userdata["telefono_opcional"]; ?>"/>
 			<h4>Direccion Secundaria:</h4>
 			<input type="text" name="direccion2"  id="direccion2" value="<?php echo $userdata["direccion_opcional"]; ?>"/>
 			<button class="btn waves-effect waves-light red" type="submit" name="action">Actualizar
               <i class="material-icons right">send</i>
              </button>
 			</form>
 		</div>
 		
 	</div>
 	
