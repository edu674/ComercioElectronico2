<?php 
require "../php/conexion.php";

 class tienda{
 	
 	
 	public function buscar(){
        global $conexion;
 		$query=  $conexion -> query("SELECT * FROM `productos`") or die($conexion -> error);
 		// $query->num_rows;
        // var_dump($query);

        return $query;
 	}

        public function productos($var1,$var2){
        global $conexion;
        $sql=  $conexion -> query("SELECT * FROM `productos` LIMIT $var1,$var2") or die($conexion -> error);
        // $query->num_rows;
        // var_dump($query);

        return $sql;
    }
 }
 ?>


