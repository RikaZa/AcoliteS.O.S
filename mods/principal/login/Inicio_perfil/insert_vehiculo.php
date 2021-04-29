<?php
	include('../conex.php');
    $cuenta = $_SESSION['usuario'];
    $sql_Consult = "SELECT * FROM account where usuario = '$cuenta'";
    $result = mysqli_query($conex,$sql_Consult);
    while($consulta = mysqli_fetch_array($result)){
        $resut_id = $consulta['id_cuenta'];
        if ($resut_id >= 1){
            $sql_CI_Cliente = "SELECT * FROM clientes where id_cuenta = '$resut_id'";
            $result_sql = mysqli_query($conex,$sql_CI_Cliente);
            while($consult = mysqli_fetch_array($result_sql)){
                $cedula= $consult['CI_cliente'];
                $nombre= $consult['nombre'];
                $apellido= $consult['apellido'];
                $telefono= $consult['telefono'];
                $ciudad = $consult['id_ciudad'];
            }
            if(isset($_POST['registrar_vehiculo'])){
                $placa = trim($_POST['placa']);
                $marca = trim($_POST['marca']);
                $modelo =trim($_POST['modelo']);
                $color =trim($_POST['color']);
                $ci_cliente = $cedula;
                $sql_InsetVehiculo = "INSERT INTO vehiculo (placa, marca, modelo, color, CI_cliente)VALUES ('$placa','$marca','$modelo','$color','$ci_cliente')";
                $insert = mysqli_query($conex,$sql_InsetVehiculo);
                if ($insert == true){
                    echo "Registro exitoso";
                } else{
                    echo"No se pudo registrar.!";
                }
            }
        }
    } 
    
?>