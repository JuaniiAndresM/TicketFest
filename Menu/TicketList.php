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
    <script src="/TicketFest/Javascript/Tickets/TicketList.js"></script>
    <script src="/TicketFest/Javascript/Tickets/Tickets.js"></script>
    <script src="/TicketFest/Javascript/Tickets/functionTickets.js"></script>
    <script src="/TicketFest/Javascript/web.js"></script>

    <link rel="stylesheet" href="/TicketFest/styles/styles.css">
    
    <title>TicketFest | Mis Tickets</title>
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
        <div class="content-header usuario-wrapper">
            <a href="/TicketFest/Menu/Principal.html"><i class="fas fa-angle-left"></i></a>
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
        <div class="content-tickets">
            <div class="search"></div>

            <div class="ticket-wrapper" id="load-tickets"></div>
        </div>

        <div id="bottom-menu"></div>
    </div>
    
</body>
</html>