<?php
include("conexion.php");
$user = $_POST['cuenta'];
$pass = $_POST['pass_user'];

$stm = "SELECT * FROM cuentas WHERE usuario = '$user' and clave = '$pass'";
$result = mysqli_query($conex, $stm);
if ($result == true) {
    $usuario = mysqli_fetch_array($result);
    if ($pass == $usuario['clave']){
        session_start();
        $_SESSION['usuario'] = $user;
        $response = array(
            'response' => 'true',

        );
        header("location:Perfiles/perfil_acc.php");
    }else {
        $response = array(
            header("location:index.php")
        );
    }
      
}
die(json_encode($response));