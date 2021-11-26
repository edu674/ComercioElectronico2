<?php 
require_once("../modelos/usuario.php");
session_start();
$user=$_SESSION['usuario'];
$carrito=$_SESSION['carrito'];
$total=$_SESSION["total"];
$paypal=$_GET['paypal'];
$status="aproved";
$id=session_id();
$usuario=new Usuario();
$ventas=$usuario->ventas($id,$user["correo"],$total,$status,$paypal);
for ($i=0; $i <count($carrito) ; $i++) { 
$ventasProductos=$usuario->ventasProductos($ventas,$carrito[$i]["id"],$carrito[$i]["cantidad"],$carrito[$i]["precio"]);
$producto=$usuario->actualizarCantidaProducto($carrito[$i]["cantidad"],$carrito[$i]["id"]);
}
unset($_SESSION["total"]);
unset($_SESSION["carrito"]);
 echo'<script> 
        window.location.href="../vistas/VistaPago.php";

        </script>';
 ?>