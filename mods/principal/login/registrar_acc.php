<?php
	include('conex.php');
    if(isset($_POST['guardar_acc'])){
        $cuenta = $_POST['cuenta'];
        $clave = $_POST['clave'];
        $correo = $_POST['email'];
        $sql = "INSERT INTO account (usuario, clave, email) VALUES ('$cuenta','$clave','$correo')";
        $resultado = mysqli_query($conex,$sql);
        if ($resultado == true){
            session_start();
            $_SESSION['usuario'] = $cuenta;
            header("location:inicio_perfil/perfil.php");
        }else{
            ?>
            <h3 class="buttons1"> El usuario ya existe!</h3>
            <?php
        }
    }
?>