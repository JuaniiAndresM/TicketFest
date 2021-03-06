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

    public function TraerTicket($id_ticket){

        include "../Database/server.php";
        $info = array();
        $sql = "CALL TraigoTicket(?)";
        $stmts = $mysqli->prepare($sql);
        $stmts->bind_param("i", $id_ticket);

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

    public function TraerParticipantes($id_ticket){

        include "../Database/server.php";
        $info = array();
        $sql = "CALL TraigoParticipantes(?)";
        $stmts = $mysqli->prepare($sql);
        $stmts->bind_param("i", $id_ticket);

        if ($stmts->execute()) {
            $stmts->store_result();
            $stmts->bind_result($id_participante, $id_ticket, $nombre, $integrantes, $valor);
            while ($stmts->fetch()) {
                $data = array('ID_Participante' => $id_participante,'ID_Ticket' => $id_ticket,'Nombre' => $nombre,'Integrantes' => $integrantes, 'Valor' => $valor);
                $info[] = $data;
            }
            $stmts->close();
        }
        return $info;
    }
}

?>