<?php
	include('conex.php');
    if(isset($_POST['ingresar'])){
        $cuenta = $_POST['cuenta'];
        $clave = $_POST['clave'];
        $sql_consult = "SELECT * FROM account where usuario = '$cuenta'";
        $resultado = mysqli_query($conex,$sql_consult);
        while($consulta = mysqli_fetch_array($resultado)){
            $acc_pass = $consulta['clave'];
        }

        if ($acc_pass == $clave){
            session_start();
            $_SESSION['usuario'] = $cuenta;
            header("location:inicio_perfil/perfil.php");
        }else{
            ?>
            <h3> No se pudo iniciar sesión!</h3>
            <?php
        }
    }
?>