<?php
include '../PHP/procedimientosTicket.php';
session_start();

$ticket = new Ticket();

$tickets = $ticket->TraerTicketsUsuario($_SESSION['ID']);
$numero_tickets = count($tickets);

if($numero_tickets == 0){
    echo '  <div class="no-tickets">
                <p>No hay tickets creados.</p>
                <a class="button" href="/TicketFest/Form/Login.php"><i class="fas fa-plus"></i> Crear Ticket</a>
            </div>';
}

for($x = 0; $x < $numero_tickets; $x++){

    $Date = $tickets[$x]['Date'];
    $Date2 = explode('-',$Date,3);

    echo '  <button class="ticket" onclick="ticket(' . $tickets[$x]["ID"] . ')">
                <div class="ticket-img">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <div class="ticket-body">
                    <h2>'.$tickets[$x]['Titulo'].'</h2>
                    <p><i class="far fa-calendar-alt"></i> '.$Date2[2].'/'.$Date2[1].'/'.$Date2[0].'</p>
                    <p><i class="fas fa-money-bill-wave"></i> $'.$tickets[$x]['Valor'].'</p>
                </div>
            </button>';
}


?>