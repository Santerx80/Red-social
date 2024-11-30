<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: assets/pages/inicio.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>X</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">

            <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                <!--Registro-->
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" name="nombre" placeholder="Name">
                <input type="email" name="correo" placeholder="Email">
                <input type="password" name="contrasena" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        
        <div class="form-container sign-in">

            <form action="php/login_usuario.php" method="POST" class="formulario__login">
                <!--Inicio de seccion-->
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" name="correo" placeholder="Email">
                <input type="password" name="contrasena" placeholder="Password">
                <a href="#">Forget Your Password</a>
                <button>Sign In</button>
            </form>
        </div>
        
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/style/script.js"></script>
</body>
</html>