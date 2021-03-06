<?php
    session_start();
    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion = ""){
        header("location:../index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Colite S.O.S | Perfil | </title>
  <link rel="shortcut icon" href="img/Inicio/favicon.png" type="image/x-icon">

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
      <div class="col-lg-5">
        <a href="perfil_acc.php"><img src="img/Inicio/logo.png" alt="logo" class="logo"></a>
      </div>
    </header>
    <section class="interfasePerfil">
    <h2>Bienvenido <?php echo $_SESSION['usuario']?></h2>
      <div class="menuPerfil">
        <ul class="icon_menu">
          <li><a href="#"> <img src="img/menu/logout.pnp">perfil</a></li>
          <li><a href="perfil_config.php"> <img src="img/menu/logout.pnp">configuraciones</a></li>
          <li><a href="logout.php"> <img src="img/menu/logout.pnp">Salir</a></li>
        </ul>
      </div>

      <div class="perfilCliente">
            <h1>Registrar Cliente</h1>
            <form action="insertarUsuario.php"  method="post">
                <input type="text" name= "nombre" placeholder="Nombre" required>                 
                <input type="text" name= "apellido" placeholder="Apellido" required>                
                <input type="text" name= "telefono" placeholder="Tel??fono" required>                 
                <input type="text" name= "Ciudad" placeholder="Ciudad" required>                
                <input type="submit" name="register" value="Registrarse">
            </form>

            <h1>Registrar Mec??nico</h1>
            <form action="insertarMec??nico.php"  method="post">
                <input type="text" name= "nombre" placeholder="Nombre" required>                 
                <input type="text" name= "apellido" placeholder="Apellido" required>                
                <input type="text" name= "telefono" placeholder="Tel??fono" required>                 
                <input type="text" name= "Ciudad" placeholder="Ciudad" required>                
                <input type="submit" name="register" value="Registrarse">
            </form>
      </div>
    </section>
    </div>

  
</body>
<footer>
  <br>
  <div class="piederechos">
    <h5 class="textopie">?? Acolite S.O.S - 2021 | Todos los derechos reservados.</h5>
  </div>
</footer>
</html>