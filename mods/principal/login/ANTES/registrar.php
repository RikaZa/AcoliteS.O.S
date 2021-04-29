<?php 
include("conexion.php");
if (isset($_POST['register'])){
    if (strlen($_POST['cuenta']) >= 1 && strlen($_POST['password'])>= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['telefono'])>= 1){
        $acc = trim($_POST['cuenta']);
        $pass = trim($_POST['password']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['telefono']);
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