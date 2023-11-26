<?php 
  function createNavbar() {
    if (isset($_SESSION['userName'])) {
      $profile = '<a href="./login.php">'.$_SESSION['userName'].'</a>';
    } else {
      $profile = '<a href="./login.php">profile</a>';
    }
    //echo $_SESSION['userName'];
    return '
    <link href="./index.css" rel="stylesheet">
    <nav>
        <div class="navWrapper">
            <a href="./index.php">home</a>
            <a href="./grid.php">shop</a>
            <div class="icon">
                <h1>JAST</h1>
            </div>
            <a href="">faq</a>
            '. 
            $profile
            .'
        </div>
    </nav>
    ';
  }
?>


<?php 
/* include "./header.component.php";
echo createNavbar();  */
?>
