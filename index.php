<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Terrion</title>
</head>
<body>
    
    <?php
        include("header.php");
    ?>
    
    <div id="boxes">
        <?php
            $url = $_GET["faqe"];

            // echo  $url;

            if($url === 'home'){
                include("boxes.php");
            }elseif ($url === 'about') {
                include('about.php');
            }elseif ($url === 'contact') {
                include('contact.php');
            }else{
                include("boxes.php");
            }

            // switch($url){
            //     case 'home': include("boxes.php");
            //     break;
            //     case 'about': include('about.php');
            //     break;
            //     case 'contact': include('contact.php');
            //     break;
            //     default: include('about.php');
            // }
        ?>
    </div>

    <div id="quote">
        <div class="container">
            <div class="qoute-box">
                <i class="fas fa-quote-left fa-2x"></i> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eius tempora corporis deleniti iusto animi! loaa Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <span class="autori">Qendrim Vrella, CEO, Google</span></p>
            </div>
        </div>
    </div>

    <div id="clients">
        <div class="container">
            <h2>Clients We Have Work With</h2>
            <div class="box-client">
                <img src="./sources/client-1.png" alt="photo">
                <img src="./sources/client-2.png" alt="photo">
                <img src="./sources/client-3.png" alt="photo">
                <img src="./sources/client-4.png" alt="photo">
                <img src="./sources/client-5.png" alt="photo">
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>