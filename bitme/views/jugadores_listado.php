<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jugadores</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="../assets/img/minibitme.png" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="../assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/style.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">BIT ME</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="../index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="../gestor/views/views_login.php" class="nav-item nav-link">Usuarios Registrados</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Información</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="../views/jugadores.php" class="dropdown-item">Jugadores</a>
                            <a href="../views/partidos.php" class="dropdown-item">Partidos</a>
                            <a href="../views/equipos.php" class="dropdown-item">Equipos</a>
                        </div>
                    </div>
                    <a href="../views/contact.html" class="nav-item nav-link">Contacto</a>
                    <a href="../views/about.html" class="nav-item nav-link">¿Quiénes somos?</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-headerf mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Jugadores</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white">Inicio</p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Jugadores</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container pt-5">

        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Jugadores</h4>
            <h4 class="display-4 font-weight-bold">La información más actualizada</h4>
        </div>

          <!-- BARRA DE BUSQUEDA -->
        <div class="form-group">   
            <form method="post">
              <table width="100%">

                <tr>
                 <th>CI</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Ven. Ficha Médica</th>
                  <th>Número Camiseta</th>
                  <th>ID institución</th>

                </tr>
                
                <?php
                              foreach ($deportistas as $dep) {
                                echo "<tr><td>".$dep["ci"]."</td>
                                      <td>".$dep["nombre"]."</td>
                                      <td>".$dep["apellido"]."</td>
                                      <td>".$dep["edad"]."</td>
                                      <td>".$dep["fecha_ficha_medica"]."</td>
                                      <td>".$dep["numero_camiseta"]."</td>
                                      <td>".$dep["id_institucion"]."</td></tr>";
                              }
                            ?>
                          </table>
                          <br>
                <a href="../views/jugadores.php">Volver a buscar</a>
              </form>
            </div>
        <!-- BARRA DE BUSQUEDA -->

       
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="page-headerf container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">CONTACTO</h4>
                <p><i class="fa fa-envelope mr-2"></i>empresabitme@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Nuestras Redes</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="https://instagram.com/bitme_empresa?igshid=YmMyMTA2M2Y="><i
                            class="fa fa-angle-right mr-2"></i>Instagram</a>
                    <a class="text-white mb-2" href="https://twitter.com/bitme_empresa?s=11&t=qOqswb0O5JevPgEKZoktZw"><i
                            class="fa fa-angle-right mr-2"></i>Twitter</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Links Populares</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="../index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                    <a class="text-white mb-2" href="../views/about.html"><i class="fa fa-angle-right mr-2"></i>¿Quiénes
                        somos?</a>
                    <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contacto</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Atención al Público</h4>
                <h5 class="text-white">Lunes - Viernes</h5>
                <p>8:00 AM - 8:00 PM</p>
                <h5 class="text-white">Sabado - Domingo</h5>
                <p>10:00 PM - 14:00 PM</p>
            </div>
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">BIT ME</a>. All Rights Reserved. Designed by BIT
                ME
                <a class="text-white font-weight-bold" href="https://htmlcodex.com"></a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="../assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>