<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    //Encriptamiento
    $contrasena = hash('sha512', $contrasena);

    $datos = "INSERT INTO usuarios(nombre, correo, contrasena) 
    VALUES('$nombre', '$correo', '$contrasena')";

    // Verificar no se repita correo bd
    $verificar_correo = mysqli_query($conex, "SELECT * FROM usuarios WHERE correo = '$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo ya está registrado");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

    // Verificar no se repita usuario bd
    $verificar_usuario = mysqli_query($conex, "SELECT * FROM usuarios WHERE nombre = '$nombre'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("Este nombre de usuario ya está registrado");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conex, $datos);

    if($ejecutar){
        echo '
        <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "../index.php";
            </script>
            ';
    }

    mysqli_close($conex);
?>