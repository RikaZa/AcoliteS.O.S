<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>

    <section class="ACC_CREATE">
    <h2>Crear cuenta</h2>
    <form  method="post">
    <input type="text" name="cuenta" placeholder="Cuenta" require>
    <input type="password" name="clave" placeholder="Contraseña"require>
    <input type="email" name="email" placeholder="Correo Electrónico"require>
    <input type="submit" name="guardar_acc" value="Registrarse">
    </form>
    <?php
    include ("registrar_acc.php");
    ?>
    </section>

    <section class="ACC_CREATE">
    <h2>Iniciar Sesión</h2>
    <form  method="post">
    <input type="text" name="cuenta" placeholder="Cuenta" require>
    <input type="password" name="clave" placeholder="Contraseña"require>
    <input type="submit" name="ingresar" value="Iniciar Sesión">
    </form>
    <?php
    include ("validar.php");
    ?>
    </section>   
</body>
</html>