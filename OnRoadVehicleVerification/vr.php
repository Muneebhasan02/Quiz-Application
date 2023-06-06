<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Vehicle Verification</title>
    <link rel="stylesheet" href="vcss.css">
  </head>
  <body background="back.jpg">

    <header>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </header>

      <?php
session_start();

if (isset($_SESSION['message'])) {
    // Display the container if the session variable has a value

    echo "<h1 style='text-align: center; margin-top: 100px'>" . $_SESSION['message'] . "</h1>";
    session_destroy();

   
}
else{
 
  echo '
  <div class="container" id="myForm">
      <form action="registration.php" class="form-container" method="post">
          <h1>Login</h1>
          <label for="reg" class="sub"><b>Registration Number</b></label>
          <input type="text" name="reg" required>

          <label for="Owner"><b>Owner</b></label>
          <input type="text" name="owner" required>

          <label for="Father Name"><b>Father Name</b></label>
          <input type="text" name="father" required>

          <label for="CNIC No"><b>CNIC No</b></label>
          <input type="text" name="cnic" required>

          <label for="Chases No"><b>Chases No</b></label>
          <input type="text" name="chases" required>

          <label for="Make"><b>Make</b></label>
          <input type="text" name="make" required>

          <label for="Model"><b>Model</b></label>
          <input type="text" name="model" required>

          <label for="Variant"><b>Variant</b></label>
          <input type="text" name="varient" required>

          <button type="submit" class="btn" name="register">Login</button>
      </form>
  </div>';
}
?>


    <!-- <div class="container">
      <img src="reg.png" alt="Verification Image" class="verification-image">
      <h1>Vehicle Registration</h1>
      <form background="back.jpg">
       
        <input type="text" id="regNumber" name="regNumber"  placeholder=" Car Registration Number" required>
        <button type="submit" id="btn">Verify</button>
      </form>
    </div> -->
    <!-- <script>
      let btn = document.getElementById("btn");
      let form = document.getElementById("myForm");
     
     btn.onclick = function (){
       form.style.display = 'inline-block';
     }
   </script> -->
  </body>
</html>
