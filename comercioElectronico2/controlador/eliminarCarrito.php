<?php
$id=$_GET["id"];
session_start(); //se verifica que la sesion este activa;
$arreglo=$_SESSION['carrito'];// el arreglo toma el valor de lo que este guardado en la sesion carrito
for ($i=0; $i <count($arreglo) ; $i++) { //a traves del for se busca el elemento que quiere ser eliminado
	if ($arreglo[$i]['id']!=$id) {//atraves del if le indicamos qque mientras el id del prducto sea distinto se almacenara en el nuevo arreglo, pues al ser elmimando el producto no queremos mantenerlo en el arreglo. 
		$arregloNuevo[]=array(//almacena los productos que encuentra en este nuevo arreglo
			 'id'=>$arreglo[$i]['id'], 
			 'nombre'=>$arreglo[$i]['nombre'],
			 'precio'=>$arreglo[$i]['precio'],
			 'imagen'=>$arreglo[$i]['imagen'],
			 'cantidad'=>$arreglo[$i]['cantidad']

		);
	}
}
if (isset($arregloNuevo)) {//si entra a este if quiere decir que encontro el producto y lo elimino correctamente
   $_SESSION['carrito']=$arregloNuevo;//el arrglo de la sesion asigana sus valores al arreglo nuevo
}else{
	unset($_SESSION['carrito']);//con la funcion unset se elimina el registro del carrito
}
echo'<script> 
window.location.href="../vistas/carrito.php";
</script>';
?>
