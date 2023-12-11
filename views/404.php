<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAST - 404</title>
    <link href="/views/index.css" rel="stylesheet">
    <link href="/views/404.css" rel="stylesheet">
    <link rel="icon" href="/assets/brand identity/favico.png">
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

    <main>
        <h1>404</h1>
        <p>page unavailable</p>
        <button type="button" onclick="window.history.back();">go back to previous page</button>
    </main>

</body>

</html>