<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"  href="style.css">
    </head>

    <body>
        <?php 
            date_default_timezone_set("Europe/Amsterdam");
            $date = date("H:m");
            if ($date >= date("06:01") && $date <= date ("12:00")){
                $background = "images/morning.png";
                $greeting = "Good morning"; 
            }
            else if ($date >= date("12:01") && $date <= date ("18:00")){
                $greeting = "Good afternoon"; 
                $background = "images/afternoon.png";
            }
            else if ($date >= date("18:01") && $date <= date ("23:59")){
                $greeting = "Good evening"; 
                $background = "images/evening.png";
            }
            else if($date >= date("00:00") && $date <= date ("06:00")){
                $greeting = "Good night"; 
                $background = "images/night.png";
            }
        ?>

        <div id="main-container">
            <?php
                echo "<h1 class='text'>$greeting</h1>";
                echo "<h2 class='text'>Het is nu: $date</h2>" 
            ?>
        </div>


    <style>
        body{
        background-image:url('<?php echo $background ?>');
        }
    <?php include 'style.css'; ?>
    </style>

    </body>
</html>