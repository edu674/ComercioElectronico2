<?php 
require "cabecero.php";
require_once("../modelos/tienda.php");
$id=$_GET['id'];
$resultado=new tienda();
$producto=$resultado->VistaProducto($id);
$carusel=$resultado->productos(0,14);
 ?>
 <!-- librerias para el slider -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

<body class="white" onload="slider()">
	
    <div class="row " >
		<div class="col l5 s8 offset-l1 offset-s2" style="padding-top:50px">
			<img class="materialboxed" src="../img/productos/<?php echo($producto[6]);?>" width="100%"  height="400" style="object-fit: contain; max-width: 400px">
		</div>
		<div class="producto">
		<div class="col l6 s8 offset-s2" style="padding-top: 70px">
			<h2 class="textoTitulo"><?php echo($producto[2]);  ?></h5>
			<h4 class="txtPrecio">$<?php echo number_format($producto[7], 2, '.', ',');?></h4>
			<h6><?php echo($producto[5]); ?></h6>
			<br>
			<br>
            <a class="waves-effect waves-light btn-large red boton" href="carrito.php?producto=<?php echo $id?>">Agregar al carrito </a>		
		</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<hr>
	<h2 class="center-align">Productos que podrian interesarte</h2>
	 <div class="container">
	 	<div class="row">
	 		<div class="carrusel col s12">

	<?php  
        while($row = mysqli_fetch_array($carusel)){
	 ?> 
	<div class="col s3">
      <div class="card">
        <div class="card-image">
          <img class="activator" src="../img/productos/<?php echo $row['imagen']?>" height="162" style="object-fit: scale-down;">
          <a class="btn red btn-floating halfway-fab pulse"href="productos.php?id=<?php echo $row['id_producto']?>"><i class="material-icons right">add_shopping_cart</i></a>
        </div>
        
        <div class="card-content">
            <div style="height:80px; overflow: hidden;"><h6 style="font-family: Arial Black;" align="center"><?php echo $row['nombre'] ?></h6></div>
             <h6 align="center">$<?php echo number_format($row['precio'], 2, '.', ',');?></h6>
        </div>

        <div class="card-reveal">
            <i class="card-title material-icons right">close</i>
           <span class="grey-text text-darken-4"><h6 style="font-family: Arial Black;"><?php echo $row['nombre'] ?></h6></span>
           <p ><?php echo $row['descripcion'] ?></p>
        </div>
      </div>
    </div>
   <?php } ?> 
   </div>
	 </div> 
	</div>
</body>
<!-- librerias para el slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>		


 <?php 
require "footer.php";
 ?>