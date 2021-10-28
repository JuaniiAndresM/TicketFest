<?php
include '../PHP/procedimientosTicket.php';
session_start();

$ticket = new Ticket();

if(!isset($_SESSION['Usuario'])){
    header('Location: /TicketFest/Form/Login.php');
}

if(isset($_GET['ID_Ticket'])){

    $id = $_GET['ID_Ticket'];
    $ticket_p = $ticket->TraerTicket($id);

    $Date = $ticket_p[0]['Date'];
    $Date2 = explode('-',$Date,3);

    $participante_p = $ticket->TraerParticipantes($id);
    $cantidad_participantes = count($participante_p);
}else{
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
    <script src="/TicketFest/Javascript/Tickets/TicketList.js"></script>
    <script src="/TicketFest/Javascript/web.js"></script>

    <link rel="stylesheet" href="/TicketFest/styles/styles.css">
    
    <?php
        echo '<title>TicketFest | '.$ticket_p[0]['Titulo'].'</title>'
    ?>
    
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
                        <?php

                        echo '  <h2>'.$ticket_p[0]['Titulo'].'</h2>
                                <h4><i class="fas fa-money-bill-wave"></i> $'.$ticket_p[0]['Valor'].'</h4>
                                <p><i class="far fa-calendar-alt"></i> '.$Date2[2].'/'.$Date2[1].'/'.$Date2[0].'</p>';
                        

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-tickets">
            <div class="search"></div>

            <div class="ticket-wrapper">

                <?php

                for($x = 0; $x < $cantidad_participantes; $x++){
                    echo '  <button class="ticket">
                                <div class="ticket-img">
                                    <i class="fas fa-user-friends"></i>
                                </div>
                                <div class="ticket-body">
                                    <h2>'.$participante_p[$x]['Nombre'].'</h2>
                                    <p><i class="fas fa-user"></i> '.$participante_p[$x]['Integrantes'].'</p>
                                    <p><i class="fas fa-money-bill-wave"></i> $'.$participante_p[$x]['Valor'].'</p>
                                </div>
                            </button>';
                }

                ?>

            </div>
        </div>

        <div id="bottom-menu"></div>
    </div>
    
</body>
</html>