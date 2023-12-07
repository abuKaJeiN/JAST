<?php 
  function createNavbar() {
    if (isset($_SESSION['userName'])) {
      $profile = '<a id="profile" href="/userdashboard">'.$_SESSION['userName'].'</a>';
    } else {
      $profile = '<a id="profile" href="/login">profile</a>';
    }
    //echo $_SESSION['userName'];
    return '
    <link href="/views/index.css" rel="stylesheet">
    <nav>
        <div class="navWrapper">
            <a href="/">home</a>
            <a href="/product">shop</a>
            <div class="icon">
                <h1>JAST</h1>
            </div>
            <a href="">faq</a>
            '. 
            $profile
            .'
        </div>
    </nav>
    <script>
        profileName = document.getElementById(`profile`).textContent;
        if (profileName.length > 7) {
            document.getElementById(`profile`).textContent = profileName.substring(0, 7) + "...";
        } 
    </script>
    ';
  }
?>


<?php 
/* include "./header.component.php";
echo createNavbar();  */
?>
