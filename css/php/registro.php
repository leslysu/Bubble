<?php
    include 'conexion.php';
    $nombre=$_POST['Nombre'];
    $apellido=$_POST['Apellido'];
    $email=$_POST['Email'];
    

    $consulta="INSERT into usuario(nombre,apellido,email) values('$nombre','$apellido','$email')";
    $resultado=mysqli_query($conexion, $consulta);

    if($resultado){
        echo "Registro Exitoso";
    }else{
        echo "No se Pudo Registar";
    }
?>
