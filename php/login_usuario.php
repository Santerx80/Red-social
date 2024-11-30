<?php

    session_start();
    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conex, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0){
        $user = mysqli_fetch_assoc($validar_login);
        $_SESSION['usuario'] = $correo;
        $_SESSION['nombre'] = $user['nombre'];
        header("location: ../assets/pages/inicio.php");
        exit;
    } else {
        echo '
        <script>
            alert("Usuario no existe");
            window.location = "../index.php";
        </script>
        ';
        exit;
    }
?> 
