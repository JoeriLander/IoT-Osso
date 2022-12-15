<?php
$json = json_decode(file_get_contents('save.json'));

    if(isset($_POST["btn1"])) {
        $json->led1 = !($json->led1 === true);
    }

    if(isset($_POST["btn2"])) {
        $json->led2 = !($json->led2 === true);

    }

    if(isset($_POST["btn3"])) {
        $json->led3 = !($json->led3 === true);

    }

    if(isset($_POST["slider1"]))
    {
        $newVal = $_POST["slider1"];
        $json->slider1 = (int) $newVal;
    }

    if(isset($_POST["servoDeur"]))
    {
        $newValDeur = $_POST["servoDeur"];
        $json->servoDeur = (int) $newValDeur;
    }

    if(isset($_POST["servoRaam"]))
    {
        $newValRaam = $_POST["servoRaam"];
        $json->servoRaam = (int) $newValRaam;
    }


    $jsonEncoded = json_encode($json);
    file_put_contents("save.json", $jsonEncoded); // hier zet ik de contents van json in de save file
    echo $jsonEncoded;
