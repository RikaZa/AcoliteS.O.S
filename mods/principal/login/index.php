<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> colite S.O.S | Inicio | </title>
  <link rel="shortcut icon" href="../../../img/Inicio/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <link rel="stylesheet" href="conf/style/index.css">
  <script src="conf/js/carrousel.js"></script>

</head>
<body class="bgpg" id="inicio">
<header>
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <a href="index.php"><img src="../../../img/Inicio/logo.png" alt="logo" class="logo"></a>
        </div>
        <div class="col-lg-7">
          <div>
            <nav id="header">
              <ul class="nav social-header list-inline text-xs-right espaciomenu">
                <li><a href="../../../index.php">Home</a></li>
                <li><a href="../../../mods/principal/servicios/index.html">Servicios</a></li>
                <li><a href="../../../mods/principal/nosotros/index.html">Contáctanos</a></li>
                <li><a href="../../../mods/principal/contacto/index.html">Nosotros</a></li>
                <li><a href="../../../mods/principal/login/Inicio_perfil/LogOut.php">Login</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container caro" id="bgdiv">
      <div class="row">
        
        <div class="contenedor-form">
          <div class="toggle" >
              <span> Crear Cuenta</span>
          </div>
          
          <div class="formulario">
              <h2>Iniciar Sesión</h2>
              <form  method="post">
              <input type="text" name="cuenta" placeholder="Cuenta" require>
              <input type="password" name="clave" placeholder="Contraseña"require>
              <input type="submit" name="ingresar" value="Iniciar Sesión">
              </form>
              <?php
                include ("validar.php");
              ?>
          </div>          
          <div class="formulario">
              <h2>Crea tu Cuenta</h2>
              <form  method="post">
              <input type="text" name="cuenta" placeholder="Cuenta" require>
              <input type="password" name="clave" placeholder="Contraseña"require>
              <input type="email" name="email" placeholder="Correo Electrónico"require>
              <input type="submit" name="guardar_acc" value="Registrarse">
              </form>
              <?php
              include ("registrar_acc.php");
              ?>

          </div>
          <div class="reset-password">
              <a href="#">Olvide mi Contraseña?</a>
          </div>
      </div>
      <script src="conf/js/jquery-3.1.1.min.js"></script>
      <script src="conf/js/main.js"></script>
      </div>
    </div>
</body>

<footer>
  <br>
  <div class="piederechos">
    <h5 class="textopie">© Acolite S.O.S - 2020 | Todos los derechos reservados.</h5>
  </div>
</footer>
</html>