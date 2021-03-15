<?php

$codekupon = $_POST['codekupon'];



if( $codekupon != null ){
    $value=1;
}
if($codekupon == null){
    $value=1;
}
if($codekupon == "CoDe10"){
    $value=0.9;
}
if($codekupon == "Code20"){
    $value=0.8;
}
if($codekupon == "CODE75"){
    $value=0.75;
}

setcookie("kupon", $value, time()+3600, "/");


    header('Location: https://tattoo-room.in.ua/');
    exit;

?>