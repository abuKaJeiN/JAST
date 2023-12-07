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

    $sql = "SELECT * FROM products WHERE id = ".$id."";
    $result = mysqli_query($conn, $sql);
    // query

    /* if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <a href="">
                    <img' . $row["productStyleAttr"] . '>
                    <h4>' . $row["productName"] . '</h4>
                    <h3>' . $row["productPrice"] . '$</h3>
                </a>';
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn); */
    ?>
    <main>
        <div id="product">
            <div id="gallery">
                <div class="img" style="background: url(../ref/e36/e36\ m3.jpg) no-repeat 25%; background-size: cover;"></div>
                <!-- <div class="img" style="background: url(../ref/e36/secure-r243432243ender.nike.jpg) no-repeat center; background-size: cover;"></div>
                <div class="img" style="background: url(../ref/e36/secure-re234324nder.nike.jpg) no-repeat center; background-size: cover;"></div>
                <div class="img" style="background: url(../ref/e36/secure-ren432432der.nike.jpg) no-repeat center; background-size: cover;"></div>
                <div class="img" style="background: url(../ref/e36/secure-rende243342243r.nike.jpg) no-repeat center; background-size: cover;"></div>
                <div class="img" style="background: url(../ref/e36/secure-render24234.nike.jpg) no-repeat center; background-size: cover;"></div> -->
            </div>
            <div id="big">
                <div class="bigImg" style="background: url(../ref/e36/e36\ m3.jpg) no-repeat 25%; background-size: cover;"></div>
            </div>
            <div id="action">
                <h1><?php 
                echo $id;
                
                if (mysqli_num_rows($result) == 1) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ((isset($prodname) && $prodname != $row['productName']) || !isset($prodname)) {
                            /* echo "<script>
                                jsRedirect(/test);
                            </script>"; */
                            // /test/".$row['productName']."/".$id."
                            echo "trigger";
                            header("location:/test/".$row['productName']."/".$id);
                        }
                        echo $row['productName'];
                    }
                } else {
                    echo " cannot find resoursce";
                }
                ?></h1>
            </div>
        </div>
        <!-- <div id="testimonials/reviews">
            
        </div>
        <div id="sellingPoints">

        </div>
        <div id="faq">

        </div>
        <div id="recommended">

        </div> -->

    </main>
    <footer></footer>
</body>
<?php

?>
</html>