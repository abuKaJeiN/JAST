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
    <link rel="icon" href="/assets/brand identity/favico.png">
    <script defer>
        function jsRedirect(url = "/") {
            window.location.replace(url);
        }

        function changeBigPicture(file_path = "ref/e36/e36\ m3.jpg") {
            let bigImg = document.getElementById(`bigImg`);
            console.log(bigImg);
            console.log(file_path);
            url_file_path = `url("/${file_path}")`;
            console.log(url_file_path);
            bigImg.style.backgroundImage = url_file_path;
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

    ?>
    <main>
        <div id="product">
            <div id="gallery">
                <?php

                $sql = "SELECT * FROM productimages WHERE productId = " . $id . "";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="img" style="background: url(/' . $row['imagePath'] . ') no-repeat 25%; background-size: cover;" 
                        onclick="changeBigPicture(`' . $row['imagePath'] . '`)"></div>';
                    }
                }
                ?>
                <!-- <div class="img" style="background: url(/ref/e36/e36\ m3.jpg) no-repeat 25%; background-size: cover;"></div> -->
            </div>
            <div id="big">
                <?php

                $sql = "SELECT imagePath FROM productimages WHERE productId = " . $id . " LIMIT 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    //echo $row['imagePath'];
                    echo '<div id="bigImg" style="background: no-repeat 25%; background-size: contain; background-image: url(/' . $row['imagePath'] . ');"></div>';
                }

                ?>
                <!-- <div id="bigImg" style="background: no-repeat 25%; background-size: contain; background-image: url('/');"></div> -->
            </div>
            <div id="action">
                <h1><?php
                    echo $id;

                    $sql = "SELECT * FROM products WHERE id = " . $id . "";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) == 1) {
                        $row = mysqli_fetch_assoc($result);
                        $urlProdName = str_replace(" ", "_", $row['productName']);
                        if ((isset($prodname) && $prodname != $urlProdName) || !isset($prodname)) {
                            //change title to product name
                            echo "trigger";
                            header("location:/product/" . $urlProdName . "/" . $id);
                        }
                        echo $row['productName'];
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