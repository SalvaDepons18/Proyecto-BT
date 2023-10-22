<?php
	session_start();
	
	if(empty($_SESSION['usuario'])){
		echo("<script>alert(\"Debe iniciar sesión.\");window.location='views/views_login.php';</script>");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>S.I.G.D</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/minibitme.PNG" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php if($_SESSION['tipo']=="administrador"){ ?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/bitme.PNG" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item nav-category">
      <span class="nav-link">Navegar</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#a" aria-expanded="false" aria-controls="a">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Usuarios</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="a">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="views/agregarusuario.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="controllers/controllers_usuarios.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/modusuario.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/eliusuario.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#b" aria-expanded="false" aria-controls="b">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Equipos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="b">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_equipos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_equipos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_equipos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/eliequipo.php">Eliminar</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#c" aria-expanded="false" aria-controls="c">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Partidos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="c">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_partido2.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_partido.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_partido3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/elipartido.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#d" aria-expanded="false" aria-controls="d">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Deportistas</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="d">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="views/agregardeportista.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="controllers/controllers_deportista.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/moddeportista.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/elideportista.php">Eliminar</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#e" aria-expanded="false" aria-controls="e">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Sanciones</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="e">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="views/agregarsanciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="controllers/controllers_sanciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/modsanciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/elisanciones.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#f" aria-expanded="false" aria-controls="f">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Instituciones</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="f">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="views/agregarinstituciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="controllers/controllers_instituciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/modinstituciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/eliinstituciones.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#g" aria-expanded="false" aria-controls="g">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Incidencias</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="g">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias2.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/eliincidencia.php">Eliminar</a></li>
        </ul>
      </div>
      <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#h" aria-expanded="false" aria-controls="a">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Torneos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="h">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_torneos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_torneos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_torneos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/elitorneo.php">Eliminar</a></li>
        </ul>
      </div>  
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#i" aria-expanded="false" aria-controls="i">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Deportes</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="i">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="views/agregardeporte.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_deporte.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/moddeporte.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/elideporte.php">Eliminar</a></li>
        </ul>
      </div>  
    </li>

    </li>
  </ul>
</nav>


<?php }  if($_SESSION['tipo']=="DT"){ ?>

  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/bitme.PNG" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item nav-category">
      <span class="nav-link">Navegar</span>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#b" aria-expanded="false" aria-controls="b">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Equipos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="b">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_equipos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_equipos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_equipos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/eliequipo.php">Eliminar</a></li>
        </ul>
      </div>
    </li>

  </ul>
</nav>

<?php }if($_SESSION['tipo']=="administrativo"){ ?>

  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/bitme.PNG" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item nav-category">
      <span class="nav-link">Navegar</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#a" aria-expanded="false" aria-controls="a">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Usuarios</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="a">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="views/agregarusuario.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="controllers/controllers_usuarios.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/modusuario.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/eliusuario.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#b" aria-expanded="false" aria-controls="b">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Equipos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="b">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_equipos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_equipos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_equipos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/eliequipo.php">Eliminar</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#c" aria-expanded="false" aria-controls="c">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Partidos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="c">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_partido2.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_partido.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_partido3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/elipartido.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#d" aria-expanded="false" aria-controls="d">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Deportistas</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="d">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="views/agregardeportista.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="controllers/controllers_deportista.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/moddeportista.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/elideportista.php">Eliminar</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#e" aria-expanded="false" aria-controls="e">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Sanciones</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="e">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="views/agregarsanciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="controllers/controllers_sanciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/modsanciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/elisanciones.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#f" aria-expanded="false" aria-controls="f">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Instituciones</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="f">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="views/agregarinstituciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="controllers/controllers_instituciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/modinstituciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/eliinstituciones.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#g" aria-expanded="false" aria-controls="g">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Incidencias</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="g">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias2.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/eliincidencia.php">Eliminar</a></li>
        </ul>
      </div>
      <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#h" aria-expanded="false" aria-controls="a">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Torneos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="h">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_torneos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_torneos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_torneos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/elitorneo.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    </li>
  </ul>
</nav>

<?php }if($_SESSION['tipo']=="analista"){ ?>

  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/bitme.PNG" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item nav-category">
      <span class="nav-link">Navegar</span>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#e" aria-expanded="false" aria-controls="e">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Sanciones</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="e">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="views/agregarsanciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="controllers/controllers_sanciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/modsanciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/elisanciones.php">Eliminar</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#g" aria-expanded="false" aria-controls="g">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Incidencias</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="g">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias2.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/eliincidencia.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    
  </ul>
</nav>

<?php }if($_SESSION['tipo']=="juez"){ ?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/bitme.PNG" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item nav-category">
      <span class="nav-link">Navegar</span>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#e" aria-expanded="false" aria-controls="e">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Sanciones</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="e">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_sanciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/modsanciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="views/elisanciones.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#g" aria-expanded="false" aria-controls="g">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Incidencias</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="g">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_incidencias3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="views/eliincidencia.php">Eliminar</a></li>s
        </ul>
      </div>
    </li>

  </ul>
</nav>

<?php }if($_SESSION['tipo']=="scouting"){ ?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/bitme.PNG" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item nav-category">
      <span class="nav-link">Navegar</span>
    </li>
      
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#d" aria-expanded="false" aria-controls="d">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Deportistas</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="d">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="controllers/controllers_deportista.php">Ver</a></li>
        </ul>
      </div>
    </li> 

  </ul>
</nav>

<?php } ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->


        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/manu.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['usuario']; ?>  </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Perfil</h6>
                  <div class="dropdown-divider"></div>
                  
                  <a class="dropdown-item preview-item" href="models/logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Cerrar Sesión</p>
                    </div>
                  </a>
                 
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">SISTEMA INFORMATICO DE GESTION DEPORTIVA BIT ME</h1>
                    <h3> <?php echo "¡Bienvenido al sistema ".$_SESSION['usuario']."!"; ?> </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © BIT ME 2022</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>