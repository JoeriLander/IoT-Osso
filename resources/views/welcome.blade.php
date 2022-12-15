<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"> </script>
        <title>Laravel</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <style>

    </style>

    <body class="antialiased" id="body">
    <header id="header">
            <button class="button" onclick="toggleMenu()"> menu </button>
            <h1> IoT Osso </h1>
    </header>


    <?php
        $json = file_get_contents('save.json');
        $jsonDecoded = json_decode($json);
        $jsonEncoded = json_encode($jsonDecoded);
    ?>

    <form method="post">
        <div class="container">
            <div class="row">
                    <div class="col">
                        <input type="button" class="button float-start" id="btn3" value="<?php echo $jsonDecoded->led3?"true":"false"; ?>" />
                    </div>
                    <div class="col">
                        <input type="button" class="button float-start" id="btn1" value="<?php echo $jsonDecoded->led1?"true":"false"; ?>" />
                    </div>
                   <div class="col">
                       <input type="button" class="button float-start" id="btn2" value="<?php echo $jsonDecoded->led2?"true":"false"; ?>" />
                       <input type="range" class="slide" id="servoRaam"  name="slider1"  min="0" max="180" value="<?php echo $jsonDecoded->servoRaam ?>" />
                   </div>
            </div>
        </div>
    </form>


    <input type="range" class="slide" id="slider1"  name="slider1"  min="0" max="255" value="<?php echo $jsonDecoded->slider1; ?>" />

    <input type="range" class="slide" id="servoDeur"  name="slider1"  min="0" max="180" value="<?php echo $jsonDecoded->servoDeur ?>" />


        <footer id="footer">
            <h2> Joeri Lander </h2>
        </footer>
    <div id="box">
        <input type="color" class="colorPicker" id="colorPickerBody" />
        <input type="color" class="colorPicker" id="colorPickerHeaderFooter" />
    </div>
        <script src="js/ajax.js"></script>
    </body>
</html>
