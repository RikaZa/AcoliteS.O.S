<?php
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
    <title>Test_perfil</title>
</head>
<body>
    <h2>Binvenido <?php echo $_SESSION['usuario']; ?></h2>
    <br>
    <a href="logout.php">Cerrar Sesión</a>
    <section class ="Register_Client">
        <h2>Regístrate como cliente</h2>
        <form  method="post">
            <input type="text" name="cedula" placeholder="Cédula" require>
            <input type="text" name="nombre" placeholder="Nombre" require>
            <input type="text" name="apellido" placeholder="Apellido" require>
            <input type="text" name="telefono" placeholder="Teléfono" require>
            <label for="ciudad">Ciudad</label>
            <select name="ciudad">
                <option value="1">Quito</option>
                <option value="2">Guayaquil</option>
            </select>
            <input type="submit" name="guardar_cliente" value="Enviar">
        </form>
        <?php
        include("insert_client.php");
        ?>
    </section>
    <section class ="Register_Mecanico">
        <h2>Regístrate como Mecánico</h2>
        <form  method="post">
            <input type="text" name="cedula" placeholder="Cédula" require>
            <input type="text" name="nombre" placeholder="Nombre" require>
            <input type="text" name="apellido" placeholder="Apellido" require>
            <input type="text" name="telefono" placeholder="Teléfono" require>
            <label for="ciudad">Ciudad</label>
            <select name="ciudad">
                <option value="1">Quito</option>
                <option value="2">Guayaquil</option>
            </select>
            <input type="submit" name="guardar_mecanico" value="Enviar">
        </form>
        <?php
        include("insert_mecanico.php");
        ?>
    </section>
</body>
</html>