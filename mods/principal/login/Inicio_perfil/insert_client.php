<?php
	include('../conex.php');
    $cuenta = $_SESSION['usuario'];
    $sql_Consult = "SELECT * FROM account where usuario = '$cuenta'";
    $result = mysqli_query($conex,$sql_Consult);
    while($consulta = mysqli_fetch_array($result)){
        $resut_id = $consulta['id_cuenta'];
    }
 
    if(isset($_POST['guardar_cliente'])){
        $ci = $_POST['cedula'];
        $nombre = trim($_POST['nombre']);
        $apellido =trim($_POST['apellido']);
        $telefono =trim($_POST['telefono']);
        $ciudad =trim($_POST['ciudad']);
        $id_cuenta = $resut_id;
        $sql_InsetClient = "INSERT INTO clientes (CI_cliente, nombre, apellido, telefono,id_ciudad,id_cuenta)VALUES ('$ci','$nombre','$apellido','$telefono','$ciudad','$id_cuenta')";
        $insert = mysqli_query($conex,$sql_InsetClient);
            if ($insert == true){
                header("location:pedido.php");
            } else{
                echo"No se pudo registrar";
            }
        }

    
    
?>