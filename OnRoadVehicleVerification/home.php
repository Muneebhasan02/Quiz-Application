<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comme:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body  background="back.jpg">
    <header>
        <nav>
          <ul>
            <li><a href="/home.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact</a></li>
            <button onclick="">Logout</button>
           <!-- logout() -->
          </ul>
        </nav>
      </header>

      <?php
session_start();
if(!isset($_SESSION['isLoggedIn'])){
  header('location: index.php');
}

?>


    <h2>How could we assist you today..</h2>

    <div class="functionalities">
        <div class="item">
            <a href="v.php" class="verf">Vehicle Verification</a>
        </div>

        <div class="item">
          <a href="tv.php" class="token_verf">Token Verification</a>
        </div>
        
        <div class="item">
          <a href="scv.php" class="smart_card">Smart Card</a>
        </div>

        <div class="item">
          <a href="vc.php" class="vehicle_chalan">Vehicle Chalan</a>
        </div>

        <div class="item">
          <a href="tc.php" class="t_chalan">Tansfer Chalan</a>
        </div>

        <div class="item">
          <a href="vr.php" class="vehicle_reg">Vehicle Registration</a>
        </div>

    </div>
    <script>
      
 function logout() {
    // Send an AJAX request to a PHP script that destroys the session
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "logout.php", true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Session destroyed, redirect to index.php
        window.location.href = "index.php";
      }
    };
    xhr.send();
  }

    </script>
</body>
</html>