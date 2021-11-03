
<?php 
require('cabecero.php');
 ?>


	<div class="container">
		<!-- <div class="row">
		 -->	<div class="col-sm-12">
				<h3 align="center"> Formulario de registro</h3>
			</div>
		<!-- </div>
		 --><br>
		<div class="row">
			<div class="col s12">
				<form action="../php/registrar.php" method="post">
					<!--Nombre-->
		
					<div class="col s12">
						<h5>Nombres:</h5>
						<input type="text" name="nombres" class="form-control" placeholder="nombre1 nombre2"required/>
					</div>
					<div class="col s12">
						<h5>Apellidos</h5>
						<input type="text" name="apellidos" class="form-control" placeholder="apellido1 apellido2" required/>
					</div>
				
			
				<!--Dirección-->

				<div class="col s6">
					<h5>Calle</h5>
					<input type="text" name="calle" placeholder="calle" required/>
				</div>

				<div class="col s6">
					<h5>Colonia</h5>
					<input type="text" name="colonia" placeholder="colonia" required/>
				</div>
                <div class="col s6">
						<h5>Codigo Postal:</h5>
						<input type="text" name="codigopostal" class="form-control" placeholder="00000"/>
				</div>
				<div class="col s6">
					<h5>Municipio</h5>
					<input type="text" name="municipio" placeholder="Municipio" required/>
				</div>
				<div class="col s6">
					<h5>Estado</h5>
					<input type="text" name="estado" placeholder="Estado" required/>
				</div>
				<div class="col s6">
					<h5>Telefono</h5>
					<input type="text" name="telefono" placeholder="55-55-55-55-55"  data-length="10" required/>
				</div>

				<div class="col s12">
					<h5>Direccion 2: (opcional)</h5>
					<input type="text"  name="direccion2" placeholder="calle/colonia/municipio/estado/codigo postal">
				</div>
				
				<div class=" col s12">

					<h5>Telefono2: (opcional)</h5>
					<!-- <input id="input_text" type="text" data-length="10"> -->
					<input  type="text"  name="telefono2" placeholder="55-55-55-55-55" data-length="10" >
				</div>

				<div class="col s12">
					<input id="tipo" name="tipo" type="hidden" value="0">
				</div>


				<!--Correo-->
				<div class="col s12">
					<h5>Correo:</h5>
					<input type="email"  name="correo" placeholder="correo@mail.com" required>
				</div>
				<div class="col s12">
					<h5>Contraseña</h5>
					<input type="password"  name="contrasena" placeholder="Contraseña" required>
				</div>
				

				<br>
				<br> 

				<div  class="col s12">
					 <button class="btn waves-effect waves-light bt-color red" type="submit" name="action">Enviar
                     <i class="material-icons right">send</i>
                     </button>
				</div>
			</form>

		</div>
	</div>
	</div>

<?php 

require("footer.php");
 ?>
