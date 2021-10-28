<?php

class Login{
    public function Login($usuario, $pass){
        include "../Database/server.php";

        $info = array();
        $sql = "CALL Login(?,?)";
        $stmts = $mysqli->prepare($sql);
        $stmts->bind_param("ss", $usuario, $pass);

        if ($stmts->execute()) {
            
            $stmts->store_result();
            $stmts->bind_result($id, $nombre, $usuario, $password, $email);

            while ($stmts->fetch()) {

                $data = array('ID' => $id, 'Nombre' => $nombre, 'Usuario' => $usuario, 'Password' => $password, 'Email' => $email);
                $info[] = $data;
            }
            
            if($info[0]["Usuario"] == null){
                $stmts->close();

                return $mysqli->error;
                
                $info = 0;
            }else{
                $stmts->close();

                session_start();
                $_SESSION['ID'] = $id;
                $_SESSION['Usuario'] = $usuario;
                $_SESSION['Nombre'] = $nombre;

                $info = 1;
            }
        }else{
            $info = $stmts->error;
        }
        return $info;
    }

    public function cerrarSesion(){
        session_start();
        session_destroy();
    }
}

?>