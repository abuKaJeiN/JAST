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

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "JAST";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM products WHERE id = ".$id."";
    $result = mysqli_query($conn, $sql);

    ?>
    <main>
        <div id="product">
            <div id="gallery">
                <div class="img" style="background: url(/ref/e36/e36\ m3.jpg) no-repeat 25%; background-size: cover;"></div>
            </div>
            <div id="big">
                <div class="bigImg" style="background: url(/ref/e36/e36\ m3.jpg) no-repeat 25%; background-size: cover;"></div>
            </div>
            <div id="action">
                <h1><?php 
                echo $id;
                
                if (mysqli_num_rows($result) == 1) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $urlProdName = str_replace(" ","_",$row['productName']);
                        if ((isset($prodname) && $prodname != $urlProdName) || !isset($prodname)) {
                            //change title to product name
                            echo "trigger";
                            header("location:/product/".$urlProdName."/".$id);
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