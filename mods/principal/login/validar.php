<?php 

include("conexion.php");

$email = $_POST['email'];
$pass = $_POST['pass_user'];

$stm = "SELECT * FROM usuario WHERE email = '$email'";
$result = mysqli_query($conex, $stm);
if ($result == true) {
    $user = mysqli_fetch_array($result);
    if (password_verify($pass, $user['pass_user'])) {
        session_start();
        $_SESSION['user'] = $user['id'];
        $response = array(
            'response' => 'true',

        );
    } else {
        $response = array(
            'response' => 'false'
        );
    }
}
die(json_encode($response));

?>