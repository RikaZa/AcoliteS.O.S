<?php
    include('../conex.php');
    session_start();
    $varsesion = $_SESSION['usuario'];
    if($varsesion == null || $varsesion = ""){
        header("location:../index.php");
        die();
    }
    include('insert_vehiculo.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> colite S.O.S | Inicio | </title>
  <link rel="shortcut icon" href="../../../../img/Inicio/favicon.png" type="image/x-icon">

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

  <link rel="stylesheet" href="../conf/style/index.css">
  <script src="../conf/js/carrousel.js"></script>
</head>
<body class="bgpg" id="inicio">
<header>
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <a href="index.php"><img src="../../../../img/Inicio/logo.png" alt="logo" class="logo"></a>
        </div>
        <div class="col-lg-7">
          <div>
            <nav id="header">
              <ul class="nav social-header list-inline text-xs-right espaciomenu">
                <li><a href="../../../../index.php">Home</a></li>
                <li><a href="../../../../mods/principal/servicios/index.html">Servicios</a></li>
                <li><a href="../../../../mods/principal/nosotros/index.html">Contáctanos</a></li>
                <li><a href="../../../../mods/principal/contacto/index.html">Nosotros</a></li>
                <li><a href="../../../../mods/principal/login/Inicio_perfil/LogOut.php">Salir</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    
  </header>
   <h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>
   <br>
   <?php
        ?>
            <div clas="datos_cliente">
            <h3>Datos del cliente</h3>
            <h4>Cédula: <?php echo $cedula; ?></h4>
            <h4>Nombre:<?php echo $nombre; ?></h4>
            <h4>Apellido:<?php echo $apellido; ?></h4>
            <h4>Telefono:<?php echo $telefono; ?></h4>
            <h4>Ciudad:<?php
            if ($ciudad == 1){
                    echo "Quito";
            }elseif ($ciudad == 2){
                echo "Guayaquil";
            }             
            ?></h4>
            </div>
        <?php
   ?>

   <section class ="Registrar_pedido">
        <h2>Registra tu vehículo</h2>
        <form  method="post">
            <input type="text" name="placa" placeholder="Placa" require>
            <input type="text" name="marca" placeholder="Marca" require>
            <input type="text" name="modelo" placeholder="Modelo" require>
            <input type="text" name="color" placeholder="Color" require>
            <input type="submit" name="registrar_vehiculo" value="Enviar">
        </form>
    </section>

    <section class="Nuevo_pedido">
    <h2>Nuevo pedido</h2>
    <form method = "post">
        <input type="submit" name="btn_nuevo_pedido" value="Nuevo">
    </form>
    </section>

    <section class="lista_vehiculo">
    <h2>Mis Vehículos</h2>
    <form method = "post">
        <input type="submit" name="btn_buscar_vehiculo" value="Consultar">
    </form>
        <?php
           if(isset($_POST['btn_buscar_vehiculo'])){
               $sql_consult_vehiculo= "SELECT * FROM vehiculo WHERE CI_cliente = '$cedula'";
            $sql_exectute = mysqli_query($conex,$sql_consult_vehiculo);
            while($mostrar = mysqli_fetch_array($sql_exectute)){
        ?>
        <table border="1">
        <tr>
        <td>Placa</td>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Color</td>
        </tr>
         
        <tr>    
            <td><?php echo $mostrar['placa'];?></td>
            <td><?php echo $mostrar['marca'];?></td>
            <td><?php echo $mostrar['modelo'];?></td>
            <td><?php echo $mostrar['color'];?></td>
        </tr>
        <?php
            }
        }
        ?>
        </table>
    </section>
    <section class="List_pedidos">
    <h2>Mis pedidos</h2>
    <form method = "post">
        <input type="submit" name="btn_buscar_pedido" value="Consultar">
    </form>
    </section>
</body>

<footer>
  <br>
  <div class="piederechos">
    <h5 class="textopie">© Acolite S.O.S - 2020 | Todos los derechos reservados.</h5>
  </div>
</footer>
</html>