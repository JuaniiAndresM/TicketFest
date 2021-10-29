<?php
session_start();
if(!isset($_SESSION['Usuario'])){
    header('Location: /TicketFest/Form/Login.php');
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
    <script src="/TicketFest/Javascript/Tickets/Tickets.js"></script>
    <script src="/TicketFest/Javascript/Tickets/functionTickets.js"></script>
    <script src="/TicketFest/Javascript/web.js"></script>

    <link rel="stylesheet" href="/TicketFest/styles/styles.css">
    
    <title>TicketFest | Lleva las cuentas de tus fiestas o eventos aquí.</title>
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
        <div class="content-header menu-principal">
            <img class="content-header__logo" src="/TicketFest/media/img/logo.png" alt="">
            <div class="header">
                <div class="profile">
                    <div class="profile-img">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="profile-name">

                        <?php
                        echo '  <h2>'.$_SESSION['Nombre'].'</h2>';
                        ?>

                        <p id="numTickets"></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body menu">

            <div class="menu-buttons">
                <a class="button" href="/TicketFest/Menu/CrearTicket.php"><i class="fas fa-plus"></i> Crear Ticket</a>
                <a class="button" href="/TicketFest/Menu/TicketList.php"><i class="fas fa-history"></i> Historial de Tickets</a>
            </div>
        </div>
        <div id="bottom-menu">
        </div>
    </div>
    
</body>
</html>