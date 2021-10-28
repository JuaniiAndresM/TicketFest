<?php

$mysqli = new mysqli('localhost','root','root','ticketfest');

$mysqli->set_charset("utf8");

//Error de conexion
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>