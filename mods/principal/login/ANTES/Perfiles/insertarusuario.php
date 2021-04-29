<?php 
include("conexion.php");
if (isset($_POST['register'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido'])>= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['ciudad'])>= 1){
        $name = trim($_POST['nombre']);
        $pass = trim($_POST['apellido']);
        $email = trim($_POST['telefono']);
        $phone = trim($_POST['ciudad']);
        $consulta = "INSERT INTO cuentas (usuario, clave, correo, telefono) VALUES ('$acc','$pass','$email','$phone')";
        $resultado = mysqli_query($conex,$consulta);       
        if ($resultado){
            session_start();
            $_SESSION['usuario'] = $acc;
            header("location:Perfiles/perfil_acc.php");
        }else{
            ?>
            <h3 class="buttons1"> El usuario ya existe!</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="buttons1"> Completa los campos</h3>
        <?php
    }

}

?>