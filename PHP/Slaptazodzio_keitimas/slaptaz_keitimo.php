<?php

header("Content-Type: application/json; charset= UTF-8");
if(strlen(trim($_REQUEST['psw'])) < 8){
    $atsakymas= [
        success => false,
        error =>'Slaptažodį turi sudaryti mažiausiai 8 simboliai'];
}else if ($_REQUEST["psw"] == $_REQUEST["pswRep"]) {
    sleep(5);
    $atsakymas = [
        success => true,
        token =>"Slaptažodis pakeistas"];
    } else {
        $atsakymas = [
            success => false,
            error => 'Neteisingas vardas arba slaptažodis'
        ];
    }
    echo json_encode($atsakymas);




