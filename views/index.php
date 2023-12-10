<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAST - Home</title>
    <link href="/views/index.css" rel="stylesheet">
    <link rel="icon" href="/assets/brand identity/favico.png">
</head>
<body>
    <!-- <nav>
        <div class="navWrapper">
            <a href="./index.php">home</a>
            <a href="./grid.php">shop</a>
            <div class="icon">
                <h1>JAST</h1>
            </div>
            <a href="">faq</a>
            <a href="./login.php">profile</a>
        </div>
    </nav> -->
    <?php 
        include_once __DIR__ . "/components/navbar.component.php";
        echo createNavbar(); 
    ?>
    <div id="vid">       
        <!-- <div id="yt"><iframe width="100%" height="100%" class="player" src="https://www.youtube.com/embed/_XqUpE06pyc&t?autoplay=1&controls=0&loop=1&playlist=_XqUpE06pyc&t&amp;showinfo=0" title="YouTube video player" allow="autoplay; encrypted-media;"></iframe>></iframe></div> -->
        <div id="captions">
            <h3 class="font">JAST</h3>
            <h4>For Car Enthusiasts With Taste</h4>
            <p>We craft custom clothes to make you feel like you are one with your car and make them fit your style like its trurerly yours.</p>
            <a href="/shop"><button>explore</button></a>
        </div>
        <video autoplay muted loop id="player">
            <source src="../assets/web.mp4" type="video/mp4" />
        </video> 
    </div>
    <h2 style="text-align: center;font-size: 3rem;margin: 6rem 0 -6rem 0;">WHAT WE OFFER</h2>
    <div id="top-3">

        <a><div class="prod">
            <div class="pfore" style="background-image: url(../ref/e36/secure-r243432243ender.nike-removebg-preview.png); transform: scaleX(-1); background-size: 90%; background-position: 4rem -3rem; rotate: 5deg;"></div>
            <div class="pmid" style="background-image: url(../ref/e36/e36_m3-removebg-preview.png); background-size: contain;"></div>
            <div class="pback" style="background-image: url(../ref); background-size: contain;"></div>
            <h4>Shoe Customization</h4>
        </div></a>


        <a><div class="prod">
            <div class="pfore" style="background-image: url(../ref/tee-removebg-preview.png); transform: scaleX(-1); background-size: 60%; background-position: center; rotate: 5deg;"></div>
            <div class="pmid" style="background-image: url(../ref/911gt3/gt3rsb.png); background-size: 80%;"></div>
            <div class="pback" style="background-image: url(../ref); background-size: contain;"></div>
            <h4>T-Shirts</h4>
        </div></a>


        <a><div class="prod">
            <div class="pfore" style="background-image: url(../ref/blackhoodie-removebg-preview.png); transform: scaleX(-1); background-size: 60%; background-position: 4rem center; rotate: 5deg;"></div>
            <div class="pmid" style="background-image: url(../ref/pexels-danila-rusanov-9831580-removebg-preview.png); background-size: 100%;"></div>
            <div class="pback" style="background-image: url(../ref); background-size: contain;"></div>
            <h4>Hoodies</h4>
        </div></a>


    </div>
    <div id="about">
        <h2 style="text-align: center;font-size: 3rem;">WHO ARE WE</h2>
        <div class="aboutWrapper">
            <p>At JAST, we craft premium, bespoke clothing and shoes that redefine personal style. We pride ourselves on using the finest materials and embroidery techniques to create unique, one-of-a-kind designs that seamlessly blend with your personality. Elevate your fashion experience with us, where every piece is a true reflection of you.</p>
            <video autoplay muted loop>
                <source src="../assets/web.mp4" type="video/mp4" />
            </video>
        </div>

    </div>
    <div id="reviews"></div>
</body>
</html>