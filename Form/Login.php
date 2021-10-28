<?php
session_start();
if(isset($_SESSION['Usuario'])){
    header('Location: /TicketFest/Menu/Principal.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/TicketFest/media/img/Favicon.png" type="image/x-icon">

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://kit.fontawesome.com/1e193e3a23.js' crossorigin='anonymous'></script>
    <script src="/TicketFest/Javascript/loader.js"></script>
    <script src="/TicketFest/Javascript/Form/Usuario.js"></script>
    <script src="/TicketFest/Javascript/Form/Login.js"></script>

    <link rel="stylesheet" href="/TicketFest/styles/styles.css">
    
    <title>TicketFest | Login</title>
</head>
<body>

    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div class="app-background">
        <div class="background"></div>
        <div class="circle"></div>
        <div class="circle2"></div>
        <div class="circle"></div>
        <div class="circle2"></div>
    </div>
    
    <div class="content-wrapper">
        <div class="content-header">
            <img class="content-header__logo" src="/TicketFest/media/img/logo.png" alt="">
            <a href="/TicketFest/index.html"><i class="fas fa-arrow-left"></i></a>
            <div class="header">
                <h1>Login:</h1>
                <p>Logueate para empezar a crear tus tickets.</p>
            </div>
        </div>
        <div class="content-login">
            <div class="header-pc">
                <h1>Login:</h1>
                <p>Logueate para empezar a crear tus tickets.</p>
            </div>
            <div class="form-inputs">
                <div class="input">
                    <i class="fas fa-user"></i>
                    <input type="text" name="usuario" placeholder="Usuario" id="usuario">
                </div>
                <div class="input">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Contraseña" id="password">
                </div>
                <button onclick="login()"><i class="fas fa-sign-in-alt"></i> Login</button>
                <a href="/TicketFest/Form/ForgotPassword.html" class="pass">¿Olvidaste tu contraseña?</a>
                
            </div>
        </div>
    </div>
    
</body>
</html>