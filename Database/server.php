<?php

$mysqli = new mysqli('totumdev.uy','nqjctkft_ticketfest','Ticketfest2021!','nqjctkft_ticketfest');

$mysqli->set_charset("utf8");

//Error de conexion
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>