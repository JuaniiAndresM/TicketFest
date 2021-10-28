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
    
    <title>TicketFest | Crear Ticket</title>
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
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <div class="profile-name">
                        <h2>Nuevo Ticket</h2>
                        <p id="numTickets"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-tickets">
            <div class="steps">
                <div class="step1"></div>
                <div class="step2"></div>
                <div class="step3"></div>
                <div class="line"></div>
                <div class="complete"></div>                
            </div>

            <div class="create-ticket">
                <div class="input">
                    <i class="fas fa-ticket-alt"></i>
                    <input type="text" name="titulo_ticket" placeholder="Titulo del Ticket" id="titulo" required>
                </div>
                <div class="input">
                    <i class="far fa-calendar-alt"></i>
                    <input type="date" name="titulo_ticket" placeholder="Titulo del Ticket" id="titulo" required>
                </div>
                <button onclick="step1_continue()"><i class="fas fa-arrow-right"></i> Siguiente</button>
            </div>
        </div>

        <div id="bottom-menu"></div>
    </div>
    
</body>
</html>