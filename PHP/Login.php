<?php
include '../PHP/procedimientosForm.php';

$login= new Form();
$log = array();

if(isset($_POST['usuario'])){

    $user = $_POST["usuario"];
    $pwd = $_POST["pass"];

    $contra = hash('sha256', $pwd);

    echo $login->Login($user, $contra); 

}else{
    
    $log = array('error'=> true);
    
}

?>