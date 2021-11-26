<?php
require_once("cabecero.php");
require_once("../controlador/Carrito.php");
if (isset($_SESSION["usuario"])) {
$carrito=new Carrito();
if (isset($_GET['producto'])) {
	$id=$_GET['producto']; 
    $agregar=$carrito->agregarcarrito($id);	
}
if (isset($_SESSION["carrito"])) {
$arreglocarrito=$_SESSION['carrito']; 
}
}
?>
 <main  style="position: relative; min-height:500px;">
 	
 	<div class="row">
 		<div class="col s12">

            <?php
            if (isset($_SESSION["usuario"])) {
            if (isset($_SESSION["carrito"])) {
             ?>
 			<table class="responsive-table">
 				<thead>
 					<tr>
 						<th><h6 align="center">Imagen</h6></th>
 						<th><h6 align="center">Producto</h6></th>
 						<th><h6 align="center">Precio</h6></th>
 						<th><h6 align="center">Cantidad</h6></th>
 						<th><h6 align="center">Total</h6></th>
 						<th><h6 align="center">Eliminar</h6></th>
 					</tr>
 				</thead>
 				<tbody>
 					<tr>
 						<?php
                        $suma=0;
                        for ($i=0; $i <count($arreglocarrito) ; $i++) { 
 						 ?>
 						 <td><div align="center"><img src="../img/productos/<?php echo $arreglocarrito[$i]["imagen"]?>" height="150px" width="150px"></div></td>
 						 <td><h6 align="center"><?php echo $arreglocarrito[$i]["nombre"]?></h6></td>
 						 <td><h6 align="center">$<?php echo number_format($arreglocarrito[$i]["precio"], 2, '.', ',')?></h6></td>
 						 <td><h6 align="center"><?php echo $arreglocarrito[$i]["cantidad"]?></h6></td>
 						 <td><h6 align="center">$<?php echo number_format($arreglocarrito[$i]["precio"]*$arreglocarrito[$i]["cantidad"], 2, '.', ',') ?></h6></td>
 						 <td><center><a class="waves-effect waves-light btn red" href="../controlador/eliminarCarrito.php?id=<?php echo $arreglocarrito[$i]["id"] ?>">eliminar</a></center></td>
 						 </tr>
 						<?php 
                        $suma=$suma+$arreglocarrito[$i]["precio"]*$arreglocarrito[$i]["cantidad"];
                        $_SESSION['total']=$suma+100;

                    }

                        ?>
 				</tbody>
                <tfoot class="responsive-table">
 
                     <tr>
                       <td colspan="6"><h6 class="txttable">Subtotal:$<?php echo number_format($suma-$suma*.16, 2, '.', ',') ?></h6></td> 
                     </tr>
                     <tr>
                       <td colspan="6"> <h6 class="txttable">Iva: $<?php echo number_format($suma*.16, 2, '.', ',')?></h6> </td>  
                     </tr>
                      <tr>
                       <td colspan="6"><h6 class="txttable">Costo de envio: $<?php echo number_format(100, 2, '.', ',') ?></h6> </td>  
                     </tr>
                     <tr>
                       <td colspan="6"><h6 class="txttable">Total a Pagar: $<?php echo number_format($suma+100, 2, '.', ',')?></h6> </td> 
                     </tr>
  
                </tfoot>
 			</table>
            <div class="row">
                <div class="col s12">
                  <a href="pago.php" class="waves-effect waves-light btn-large red" style="min-width:100%;">Proceder al pago</a>  
                </div>
            </div>
        <?php } else{?>

            <h1 align="center" style="color: green;">No hay productos en el carrito!</h1>

        <?php } }

        else{
        ?>    
            <h1 align="center" style="color: green;">Debes iniciar sesion para acceder al carrito!</h1>
            <br>
            <center>
            <a href="#modal1" class="modal-trigger btn-large waves-effect waves-light red ">Iniciar Sesion</a>
            </center>
        <?php } ?>    
 		</div>
 		
 	</div>


 </main>

<?php 	
require_once("footer.php");
?>