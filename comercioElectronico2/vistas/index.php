<?php 
require('cabecero.php');
 ?>

<?php 
    if (!$_GET) {
         header('Location: index.php?pagina=1');
     }
    include('../php/conexion.php');
     require_once("../modelos/tienda.php");
     $resultado=new tienda();
     $query=$resultado->buscar();
     $objeto=$query->fetch_object();
     $int=$objeto;
     // var_dump($query);
       $total=16;
       $inicio=($_GET['pagina']-1)*$total;
       // $resultado=  $conexion -> query("SELECT * FROM `productos`") or die($conexion -> error);
       // var_dump($resultado);
       // $totalbd=$resultado->num_rows;
       $totalbd=$query->num_rows;
       $paginas=$totalbd/16;
       $paginas=ceil($paginas);
       
       if ($_GET['pagina']>$paginas) {
         header('Location: index.php?pagina='.$paginas);
       } 
       if ($_GET['pagina']<=0) {
         header('Location: index.php?pagina=1');
       } 
        $query=$resultado->productos($inicio,$total);
        // var_dump($query);0
        // $sql=  $conexion -> query("SELECT * FROM `productos` LIMIT $inicio,$total") or die($conexion -> error);
         // var_dump($sql);

     ?>           
<!-- carrusel -->
<body onload="Carrusel()">
    <div class="row">

        <div class="col s12 ">
            <h2 class="center-align titulo">Productos de nuestra selecion</h2>
            
            <div class="carousel  center-aling">
                <div class="carousel-item">
                    <h2 class="subtitulo">Escoba</h2>
                    <div class="linea-division"></div>
                    <a href=""><img class="responsive-img" src="../img/escoba.jpg"></a>
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Clorox</h2>
                    <div class="linea-division"></div>
                    <img src="../img/cloro.jpg">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Esponjas</h2>
                    <div class="linea-division"></div>
                    <img src="../img/esponjas.jpg">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">fabuloso</h2>
                    <div class="linea-division"></div>
                    <img src="../img/fabuloso.jpg">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">antibacterial</h2>
                    <div class="linea-division"></div>
                    <img src="../img/gel.jpg">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Trapos</h2>
                    <div class="linea-division"></div>
                    <img src="../img/trapos.jpg">
                </div>    
            </div>
          <a name="catalogo"></a>  <!-- con esta ancla se direcciona directo al catalogo de productos desde la paginacion con #catalogo -->    
        </div>
        
    </div>   
<!-- fin carrousel -->
<hr>
<div class="contenido">
<div class="row">
 <div class="col s10 push-s1 pull-s1">
          <h2 class="center-align titulo">Catalogo de productos</h2>       
       <?php 

         while($fila = mysqli_fetch_array($query)){
        ?>       
<!-- card1 -->
    <div class="col l3 s6">
      <div class="card">
        <div class="card-image">
          <img class="activator" src="../img/productos/<?php echo $fila['imagen']?>" height="162" style="object-fit: scale-down;">
          <a class="btn red btn-floating halfway-fab pulse"><i class="material-icons right">add_shopping_cart</i></a>
        </div>
        
        <div class="card-content">
            <div style="height:80px; overflow: hidden;"><h6 style="font-family: Arial Black;" align="center"><?php echo $fila['nombre'] ?></h6></div>
             <h6 align="center">$<?php echo $fila['precio']?></h6>
        
        
        </div>

        <div class="card-reveal">
            <i class="card-title material-icons right">close</i>
           <span class="grey-text text-darken-4"><h6 style="font-family: Arial Black;"><?php echo $fila['nombre'] ?></h6></span>
           <p ><?php echo $fila['descripcion'] ?></p>
        </div>
      </div>
    </div>
  <?php 
   } ?>               
</div>
</div>

</div> <!-- fin div contenido -->
 <!-- paginacion -->
<div class="center-align">
    <ul class="pagination">
   
    <li class="<?php echo $_GET['pagina']<=1? 'disabled':'waves-effect' ?>"><a href="index.php?pagina=<?php echo $_GET['pagina']-1?>#catalogo"><i class="material-icons">chevron_left</i></a></li>  

    <?php
    for ($i=0; $i < $paginas; $i++) { 
    ?>
    <li class="<?php echo$_GET['pagina']==$i+1? 'active blue':'waves-effect'?>"><a href="index.php?pagina=<?php echo ($i+1); ?>#catalogo"><?php echo ($i+1); ?></a></li>
    <?php } ?>
    <li class="<?php echo $_GET['pagina']>=$paginas? 'disabled':'waves-effect'?>"><a href="index.php?pagina=<?php echo $_GET['pagina']+1?>#catalogo"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<!-- fin paginacion -->
<br>
<!-- boton flotante -->
<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons m-36">share</i>
  </a>
  <ul>
    <li><a class="btn-floating blue darken-1 btn-large" href="https://www.facebook.com"><img src="../img/facebook1.png" align="center" height="30px" width="30px"></a></li>
    <li><a class="btn-floating green btn-large"><img src="../img/whatsapp2.png" align="center" height="30px" width="30px"></a></li>
  </ul>
</div>
<!-- fin boton flotante -->
<!-- footer -->
</body>
<?php 
require("footer.php");
 ?>
<!-- <script type="text/javascript">
    function Carrusel(){
        alert("Browser has loaded the current frame");
    };
</script> --> 
<!-- <script type="text/javascript" src="../js/main.js"></script> -->
