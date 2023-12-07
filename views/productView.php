<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAST - Dashboard</title>
    <link href="/views/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/views/productview.css">
    <link rel="icon" href="../assets/brand identity/favico.png">
    <script>
        function jsRedirect(url = "/") {
            window.location.replace(url);
        }
    </script>
</head>

<body>
    <?php
    include_once __DIR__ . "/components/navbar.component.php";
    echo createNavbar();
    ?>
    <!-- <div class="secondary nav">
        hoodies shoes tees custom
    </div> -->
    <main>
        <div id="product">
            <div id="gallery">
                <div class="img" style="background: url(../ref/e36/e36\ m3.jpg) no-repeat 25%; background-size: cover;"></div>
                <div class="img" style="background: url(../ref/e36/secure-r243432243ender.nike.jpg) no-repeat center; background-size: cover;"></div>
                <div class="img" style="background: url(../ref/e36/secure-re234324nder.nike.jpg) no-repeat center; background-size: cover;"></div>
                <div class="img" style="background: url(../ref/e36/secure-ren432432der.nike.jpg) no-repeat center; background-size: cover;"></div>
                <div class="img" style="background: url(../ref/e36/secure-rende243342243r.nike.jpg) no-repeat center; background-size: cover;"></div>
                <div class="img" style="background: url(../ref/e36/secure-render24234.nike.jpg) no-repeat center; background-size: cover;"></div>
            </div>
            <div id="big">
                <div class="bigImg" style="background: url(../ref/e36/e36\ m3.jpg) no-repeat 25%; background-size: cover;"></div>
            </div>
            <div id="action">
                <h1>buymeyoustupidfuck</h1>
            </div>
        </div>
        <!-- <div id="testimonials/reviews">
            
        </div> -->
        <div id="sellingPoints">

        </div>
        <div id="faq">

        </div>
        <div id="recommended">

        </div>

    </main>
    <footer></footer>
</body>

</html>