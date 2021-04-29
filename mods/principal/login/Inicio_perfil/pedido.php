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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido_test</title>
</head>
<body>
   <h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>
   <br>
   <a href="logout.php">Cerrar Sesión</a>
   <?php
    if ($result == true) {
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
    }else{
        echo "Registra tus datos";
    }

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
        <table border="1">
        <tr>
            <td>Placa</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Color</td>
        </tr>
        <?php 
            $sql_consult_vehiculo= "SELECT * FROM vehiculo WHERE CI_cliente = '$cedula'";
            $sql_exectute = mysqli_query($conex,$sql_consult_vehiculo);
            while($mostrar = mysqli_fetch_array($sql_exectute)){
        ?>
        <tr>    
            <td><?php echo $mostrar['placa'];?></td>
            <td><?php echo $mostrar['marca'];?></td>
            <td><?php echo $mostrar['modelo'];?></td>
            <td><?php echo $mostrar['color'];?></td>
        </tr>
        <?php
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
</html>