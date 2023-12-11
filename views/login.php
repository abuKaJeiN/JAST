<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAST - login / sign in</title>
    <link href="/views/index.css" rel="stylesheet">
    <link href="/views/login.css" rel="stylesheet">
    <link rel="icon" href="/assets/brand identity/favico.png">
    <?php
        function displayAlert($message){
            echo '<script language="javascript">';
            echo 'alert("'.$message.'")';
            echo '</script>';
        }
        
        function jsRedirect($url = '/home'){
            echo '<script language="javascript">';
            echo 'window.location.replace("'.$url.'");';
            echo '</script>';
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "JAST";

        session_start();
    ?>
</head>
<body>
    <main>        
        <form action="" method="post">
            <div class="login">
                <p class="login">log in</p>
                <input type="text" name="login">
                <input type="password" name="password">
                <input type="submit" name="submitLogin" value="log in">
                <p>or</p>
                <button id="facebook">facebook</button>
            </div>
            <?php
            if(isset($_POST['submitLogin'])){ //check if form was submitted

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if (!$conn) {
                    /* die("Connection failed: " . mysqli_connect_error()); */ //debug
                    die(displayAlert("Connection failed"));
                }

                $sql = 'SELECT * FROM `userdata` WHERE UserName LIKE "'.$_POST['login'].'";';
                $result = mysqli_query($conn, $sql);

                $providedKey = $_POST['password']; //space to encrypt password

                if (mysqli_num_rows($result) != 1) { //if login exists and has one entry
                    displayAlert('Wrong password or login');
                } elseif (mysqli_num_rows($result) == 1) {
                    while($row = mysqli_fetch_assoc($result)) {
                        if ($row['UserKey'] === $providedKey) {
                            displayAlert('logged in as: '.$row['UserName'].'');
                            $_SESSION['userName'] = $_POST['login'];
                            mysqli_close($conn);
                            sleep(1);
                            jsRedirect();
                            exit();
                        } else {
                            displayAlert('Wrong password or login');
                        }
                    }
                } else {
                    displayAlert('Wrong password or login');
                }
            }
            ?>
        </form>
        <form action="" method="post">
            <div class="signin">
                <p class="signin">sign up</p>
                <input type="text" name="username">
                <input type="password" name="newpassword">
                <input type="submit" name="submitSignin" value="sign in">
                <p>or</p>
                <button id="facebook">facebook</button>
            </div>
            <?php
            if(isset($_POST['submitSignin'])){ //check if form was submitted
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if (!$conn) {
                    /* die("Connection failed: " . mysqli_connect_error()); */ //debug
                    die(displayAlert("Connection failed"));
                }

                $sql = 'SELECT * FROM `userdata` WHERE UserName LIKE "'.$_POST['username'].'";';
                $result = mysqli_query($conn, $sql);

                $providedKey = $_POST['newpassword']; //space to encrypt password and check its security

                if (mysqli_num_rows($result) != 0) { //if login exists already
                    displayAlert('name is already taken');
                } else {
                    $sql = 'INSERT INTO `userdata` (`UserName`, `UserKey`) VALUES ("'.$_POST['username'].'", "'.$providedKey.'");';
                    $result = mysqli_query($conn, $sql);
                    displayAlert('signed in succesfully');
                    $_SESSION['userName'] = $_POST['username'];
                    mysqli_close($conn);
                    sleep(1);
                    jsRedirect();
                    exit();
                }
            }
            ?>
        </form>
    </main>
</body>
</html>