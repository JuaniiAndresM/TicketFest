<?php

class Ticket{
    public function CrearTicket($nuevoTicket){
        include "../Database/server.php";
        $sentencia = '';
        if ($sentencia = $mysqli->prepare("CALL CrearTicket(?,?,?,?);")) {
            $sentencia->bind_param('ssii', $nuevoTicket);
            if ($sentencia->execute()) {
                echo true;
            }
        } else {
            throw new Exception('Error en prepare: ' . $mysqli->error);
            echo false;
        }
    }

    public function CrearParticipante($nuevoParticipante){
        include "../Database/server.php";
        $sentencia = '';
        if ($sentencia = $mysqli->prepare("CALL CrearParticipante(?,?,?,?);")) {
            $sentencia->bind_param('isii', $nuevoParticipante);
            if ($sentencia->execute()) {
                echo true;
            }
        } else {
            throw new Exception('Error en prepare: ' . $mysqli->error);
            echo false;
        }
    }

    public function TraerTicketsUsuario($id_usuario){
        include "../Database/server.php";
        $info = array();
        $sql = "CALL TraigoTicketsUsuario(?)";
        $stmts = $mysqli->prepare($sql);
        $stmts->bind_param("i", $id_usuario);

        if ($stmts->execute()) {
            $stmts->store_result();
            $stmts->bind_result($id_ticket, $title, $date, $value, $usuario);
            while ($stmts->fetch()) {
                $data = array('ID' => $id_ticket,'Titulo' => $title,'Date' => $date,'Valor' => $value, 'Usuario' => $usuario);
                $info[] = $data;
            }
            $stmts->close();
        }
        return $info;
    }
}

?>