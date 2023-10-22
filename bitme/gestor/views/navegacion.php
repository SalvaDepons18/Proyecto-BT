<?php if($_SESSION['tipo']=="administrador"){ ?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="../index.php"><img src="../assets/images/bitme.PNG" alt="logo" /></a>
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
          <li class="nav-item"> <a class="nav-link" href="../views/agregarusuario.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_usuarios.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/modusuario.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/eliusuario.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_equipos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_equipos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_equipos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/eliequipo.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_partido2.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_partido.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_partido3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/elipartido.php">Eliminar</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="../views/agregardeportista.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_deportista.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/moddeportista.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/elideportista.php">Eliminar</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="../views/agregarsanciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_sanciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/modsanciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/elisanciones.php">Eliminar</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="../views/agregarinstituciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_instituciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/modinstituciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/eliinstituciones.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias2.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/eliincidencia.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_torneos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_torneos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_torneos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/elitorneo.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../views/agregardeporte.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_deporte.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/moddeporte.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/elideporte.php">Eliminar</a></li>
        </ul>
      </div>  
    </li>

    </li>
  </ul>
</nav>


<?php }  if($_SESSION['tipo']=="DT"){ ?>

  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="../index.php"><img src="../assets/images/bitme.PNG" alt="logo" /></a>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_equipos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_equipos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_equipos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/eliequipo.php">Eliminar</a></li>
        </ul>
      </div>
    </li>

  </ul>
</nav>

<?php }if($_SESSION['tipo']=="administrativo"){ ?>

  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="../index.php"><img src="../assets/images/bitme.PNG" alt="logo" /></a>
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
          <li class="nav-item"> <a class="nav-link" href="../views/agregarusuario.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_usuarios.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/modusuario.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/eliusuario.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_equipos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_equipos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_equipos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/eliequipo.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../views/agregarpartido.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_partido.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/modpartido.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/elipartido.php">Eliminar</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="../views/agregardeportista.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_deportista.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/moddeportista.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/elideportista.php">Eliminar</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="../views/agregarsanciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_sanciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/modsanciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/elisanciones.php">Eliminar</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="../views/agregarinstituciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_instituciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/modinstituciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/eliinstituciones.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias2.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/eliincidencia.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_torneos.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_torneos2.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_torneos3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/elitorneo.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    </li>
  </ul>
</nav>

<?php }if($_SESSION['tipo']=="analista"){ ?>

  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="../index.php"><img src="../assets/images/bitme.PNG" alt="logo" /></a>
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
          <li class="nav-item"> <a class="nav-link" href="../views/agregarsanciones.php">Agregar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_sanciones.php">Ver</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/modsanciones.php">Modificar</a></li>
          <li class="nav-item"> <a class="nav-link" href="../views/elisanciones.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias2.php">Agregar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/eliincidencia.php">Eliminar</a></li>
        </ul>
      </div>
    </li>
    
  </ul>
</nav>

<?php }if($_SESSION['tipo']=="juez"){ ?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="../index.php"><img src="../assets/images/bitme.PNG" alt="logo" /></a>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_sanciones.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/modsanciones.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/elisanciones.php">Eliminar</a></li>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias.php">Ver</a></li>
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_incidencias3.php">Modificar</a></li>
        <li class="nav-item"> <a class="nav-link" href="../views/eliincidencia.php">Eliminar</a></li>
        </ul>
      </div>
    </li>

  </ul>
</nav>

<?php }if($_SESSION['tipo']=="scouting"){ ?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="../index.php"><img src="../assets/images/bitme.PNG" alt="logo" /></a>
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
        <li class="nav-item"> <a class="nav-link" href="../controllers/controllers_deportista.php">Ver</a></li>
        </ul>
      </div>
    </li> 

  </ul>
</nav>

<?php } ?>