<?php

$return = $_GET['return'];

$currency = $_POST['currency'];



if( $currency != null ){
    $value="UAH";
}
if($currency == null){
    $value="UAH";
}
if($currency == "UAH"){
    $value="UAH";
}
if($currency == "USD"){
    $value="USD";
}
if($currency == "EUR"){
    $value="EUR";
}
if($currency == "PLN"){
    $value="PLN";
}

setcookie("currency", $value, time()+3600, "/");

    header("Location: $return");
    exit;

?>