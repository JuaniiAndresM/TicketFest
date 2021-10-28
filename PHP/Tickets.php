<?php
include '../PHP/procedimientosTicket.php';
session_start();

$ticket = new Ticket();

switch ($_POST["Opcion"]) {
    case 1:
        $tickets = $ticket->TraerTicketsUsuario($_SESSION['ID']);
        $numero_tickets = count($tickets);
        
        echo $numero_tickets;
    break;
}

?>