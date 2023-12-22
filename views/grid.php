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
    <link href="/views/grid.css" rel="stylesheet">
    <link rel="icon" href="/assets/brand identity/favico.png">
</head>

<body>
    <?php
    include_once __DIR__ . "/components/navbar.component.php";
    echo createNavbar();
    ?>
    <main>
        <div class="wrapper">
            <p class="bigText">HOODIES</p>
            <div class="flex">
                <p class="breadCrumbs">Products/Hoodies</p>
                <button class="sortButton">sort</button>
            </div>
            <div class="productGrid">
                <!--<a href="">
                    <img src="../ref/blackhoodie-removebg-preview.png" style="rotate: 0deg;" alt="Name of the hoodie">
                    <h4>Cool hoodie title</h4>
                    <h3>80$</h3>
                </a>-->
                <?php

                $servername = "localhost"; //obv to be changed
                $username = "root";
                $password = "";
                $dbname = "JAST";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $urlProdName = str_replace(" ", "_", $row['productName']);
                        $sqlThumbnail = "SELECT imagePath FROM productimages WHERE productId = " . $row["id"] . " LIMIT 1";
                        $resultThumbnail = mysqli_query($conn, $sqlThumbnail);
                        if (mysqli_num_rows($resultThumbnail)){
                            $fetchedThumbnail = mysqli_fetch_assoc($resultThumbnail);
                        } else {
                            $fetchedThumbnail['imagePath'] = 'assets/missing_preview.png';
                        }
                        echo '
                        <a href="/product/' . $urlProdName . '/' . $row["id"] . '">
                            <img src="/' . $fetchedThumbnail['imagePath'] . '">
                            <h4>' . $row["productName"] . '</h4>
                            <h3>' . $row["productPrice"] . '$</h3>
                        </a>';
                    }
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </main>
</body>

</html>