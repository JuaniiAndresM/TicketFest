<?php

$USERNAME = $_POST["USERNAME"];
$NAME = $_POST['NAME'];
$MAIL = $_POST['MAIL'];
$PASSWORD = $_POST['PASSWORD'];
$PASSWORD_CONFIRMATION = $_POST['PASSWORDCONF'];

class ValidacionRegister
{
    private $VALIDO;

    public function __construct($USERNAME, $NAME, $MAIL, $PASSWORD, $PASSWORD_CONFIRMATION)
    {
        $this->USERNAME = $USERNAME;
        $this->NAME = $NAME;
        $this->MAIL = $MAIL;
        $this->PASSWORD = $PASSWORD;
        $this->PASSWORD_CONFIRMATION = $PASSWORD_CONFIRMATION;

    }
    public function INICIO_VALIDACION()
    {
        if (!$this->VALIDAR_USERNAME()) {
            echo "Usuario invalido";
        } elseif (!$this->VALIDAR_NAME()) {
            echo "Nombre invalido";
        } elseif (!$this->VALIDAR_MAIL()) {
            echo "Mail invalido";
        } elseif (!$this->VALIDAR_PASSWORD()) {
            echo "Contraseña invalida";
        } elseif ($this->VALIDAR_PASSWORD() == "nc") {
            echo "Las Contraseñas no coinciden.";
        } else {
            return "Datos validos";
        }
    }
    public function VALIDAR_USERNAME()
    {

        $PATTERN_USERNAME = "/\W/i";

        if (isset($this->USERNAME) && !preg_match($PATTERN_USERNAME, $this->USERNAME)) {
            $this->VALIDO = 1;
        } else {
            $this->VALIDO = 0;
        }

        return $this->VALIDO;
    }
    public function VALIDAR_NAME()
    {
        $PATTERN_NAME = "/^([^0-9]*)$/i";

        if (isset($this->NAME) && preg_match($PATTERN_NAME, $this->NAME)) {
            $this->VALIDO = 1;
        } else {
            $this->VALIDO = 0;
        }

        return $this->VALIDO;
    }
    public function VALIDAR_MAIL()
    {
        $PATTERN_MAIL = "/^\w*(@gmail.com)|(@hotmail.com)|(@yahoo.com){1}$/i";

        if (isset($this->MAIL) && preg_match($PATTERN_MAIL, $this->MAIL)) {
            $this->VALIDO = 1;
        } else {
            $this->VALIDO = 0;
        }

        return $this->VALIDO;
    }
    public function VALIDAR_PASSWORD()
    {
        $PATTERN_PASSWORD = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(\w){8,15}$/";

        if ($this->PASSWORD == $this->PASSWORD_CONFIRMATION && preg_match($PATTERN_PASSWORD, $this->PASSWORD)) {
            $this->VALIDO = 1;
        } else if ($this->PASSWORD != $this->PASSWORD_CONFIRMATION) {
            $this->VALIDO = "nc";
        }else {
            $this->VALIDO = 0;
        }

        return $this->VALIDO;
    }
}

if ($USERNAME != null && $NAME != null && $MAIL != null && $PASSWORD != null && $PASSWORD_CONFIRMATION != null) {
    $VALIDACION = new ValidacionRegister($USERNAME, $NAME, $MAIL, $PASSWORD, $PASSWORD_CONFIRMATION);
    echo $VALIDACION->INICIO_VALIDACION();
} else {
    echo "No pueden haber campos vacios.";
}
