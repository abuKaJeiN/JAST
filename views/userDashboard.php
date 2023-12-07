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
    <link rel="stylesheet" href="/views/userdashboard.css">
    <link rel="icon" href="../assets/brand identity/favico.png">
    <script>
        function jsRedirect(url="/") {
            window.location.replace(url);
        }
    </script>
</head>

<body>
    <?php
    include_once __DIR__ . "/components/navbar.component.php";
    echo createNavbar();
    ?>
    <div class="mainWrapper">
        <div id="sidenav"> <!-- change index.css so that it doesnt use nav but an id -->
            <button type="button">deliveries</button>
            <button type="button">favourites</button>
            <button type="button">customer support</button>
            <button type="button" id="logout" onclick="jsRedirect('/logout');">logout</button> <!-- tu użyj callback z routera na pc --> 
        </div>
        <div id="contentWrapper">
            <div id="default">
                hi name
                this is your dashboard
            </div>
            <div id="favorite">
                favorites
            </div>
        </div>
    </div>
</body>

</html>