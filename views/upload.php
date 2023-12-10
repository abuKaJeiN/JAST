<!DOCTYPE html>
<html>
<body>


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    //echo "File is an image - " . $check["mime"] . "."; //replace echo with some kind of return
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists."; // add possibility to override
  $uploadOk = 0;
}

// Check file size

$mb = 1000 * 1000;
if ($_FILES["fileToUpload"]["size"] > 1 * $mb) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG files are allowed."; //convert to webp
  $uploadOk = 0;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "JAST";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    echo "file added succesfuly";
    $sql = "INSERT INTO `productimages` (`imagePath`, `altValue`, `productId`) VALUES ('" . $target_file . "', '" . $_POST['altValueOfImage'] . "', '" . $_POST['productIndex'] . "');";
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM productimages WHERE productId = " . $_POST['productIndex'] . "";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<br><img height="200px" src="/'.$row['imagePath'].'" alt="'.$row['altValue'].'">
        <p>id of img: '.$row['id'].'</p> 
        <p>id of product: '.$row['productId'].'</p>
        <p>alt db vs post: '.$row['altValue'].' '.$_POST['altValueOfImage'].'</p>
        <hr>';
      }
    } else {
      echo "you are stupid little kid who cannot write simple code";
    }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

/* $sql = "SELECT * FROM products WHERE id = " . $id . ""; */ //insert query
// $result = mysqli_query($conn, $sql); //result only if succesful

//<img src="/'.$row['imagePath'].'" alt="'.$row['altValue'].'">

mysqli_close($conn);
?>

</body>
</html>