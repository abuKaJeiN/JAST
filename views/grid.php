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
    <link rel="icon" href="../assets/brand identity/favico.png">
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

                #db connect
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "JAST";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                // echo "Connected successfully";

                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);
                // query

                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo '
                        <a href="/test/'.$row["productName"].'/'.$row["id"].'">
                            <img'. $row["productStyleAttr"] . '>
                            <h4>'. $row["productName"] . '</h4>
                            <h3>'. $row["productPrice"] .'$</h3>
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