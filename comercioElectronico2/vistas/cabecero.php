<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
    <title></title>
   
   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   
   <!-- iconos google-->    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
    
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body> 
<!-- barra de navegacion -->
<header class="main-header">
    <div class="navbar-fixed">
    <nav class="nav-wrapper blue">
         <div class="nav-wrapper"> 
        <div class="container">
           <ul class="brand-logo">
          <!--  <li><img  src="../img/logo4.png" height="64px"></li> -->
          <!--  <li><img  src="../img/nombre3.png" height="64px" ></li> -->
           <li><img src="../img/banner.png" alt="" height="64px"></li>
           </ul> 
            <!-- <li><a><img class="brand-logo" src="../img/nombre.png" height="64px"></a></li> -->
            <a href="" data-target="menu-responsive" class="sidenav-trigger"><i class="material-icons md-36">menu</i></a>
            <!-- nav var principal -->
            <ul class="right hide-on-med-and-down" id="nav-mobile">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">catalogo</a></li>
                <li><a href="index.php">Acarca de nosotros</a></li>
                <li><a href="#modal1" class=" modal-trigger transparent "><i class="material-icons md-36">account_circle</i></a></li>
                <li><span class="badge"><p class="circle red black-text">0</p></span><a href=""><i class="material-icons md-36">shopping_cart</i></a></li>
            </ul>

    </div> 
    </nav>
  </div>
  <!-- sidenav responsive -->
   <ul class="sidenav" id="menu-responsive" >
        <div class="user-view">
           <div class="background"><img src="../img/background5.jpg"></div>
            <div class="center-align"><a href="#modal1" class=" modal-trigger transparent"><i class="material-icons black-text md-70 center-aling">account_circle</i></a>
            <a href=""><span class="black-text name">Nombre de Usuario</span></a>
            <a href=""><span class="black-text email">Correo@mail.com</span></a>
            </div>
        </div>
            <li><a href="">Inicio<i class="material-icons md-36">home</i></a></li>
            <li><a href="">catalogo<i class="material-icons md-36">book</i></a></li>
            <li><a href="">Acarca de nosotros<i class="material-icons md-36">person_search</i></a></li>
            <li><a href="">Carrito de compras(0)<i class="material-icons md-36">shopping_cart</i></a></li>

    </ul>
</header>

<!-- fin barra de navegacion -->
<!-- modal -->
  <div id="modal1" class="modal">
    <div class="modal-content center red white-text">  
      <h4>Iniciar Sesion</h4>
      </div>
      <div class="modal-content center">
    <div class="modal-content">
      <div class="input-field ">
      <i class="material-icons md-36 prefix">account_circle</i>
      <input type="text" name="usuario" placeholder="usuario@mail.com">
      </div>

      <div class="input-field">
          <i class="material-icons md-36 prefix">vpn_key</i>
          <input type="text" name="contrasena" placeholder="contraseña">
      </div>
     <p align="center">Usuario nuevo? Registarserse <a href="formulario.php">aqui</a></p>
    </div>
    <div class="modal-footer transparent">
      <a class="waves-effect waves-light btn-large" width="100%">Iniciar Sesion</a>
    </div>
    </div>
</div>
 
<!-- fin modal -->
</body>
</html>