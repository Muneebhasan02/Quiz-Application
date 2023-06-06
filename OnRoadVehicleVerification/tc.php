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
        <form action="transfer.php" class="form-container" method="post">
          <h2 class="underline">Current Owner Details</h2>

          <label for="Name"><b>Name</b></label>  
          <input type="text" name="owner" required>
      
          <label for="Father Name"><b>Father Name</b></label>
          <input type="text" name="father" required>
      
          <label for="CNIC No"><b>CNIC No</b></label>
          <input type="text" name="cnic" required>
      
          <h2 class="underline">New Owner Details</h2>
      
          <label for="Name"><b>Name</b></label>  
          <input type="text" name="new_owner" required>
      
          <label for="Father Name"><b>Father Name</b></label>
          <input type="text" name="new_father" required>
      
          <label for="CNIC No"><b>CNIC No</b></label>
          <input type="text" name="new_cnic" required>
      
          <h2 class="underline">Application Details</h2>
      
          <label for="Transfer Application Date"><b>Transfer Application Date</b></label>
          <input type="date" name="transfer_date" required>
      
          <label for="Reg No"><b>Reg No</b></label>
          <input type="text" name="regno" required>
      
          <label for="Make"><b>Make</b></label>
          <input type="text"  name="make" required>
          
          <label for="Model"><b>Model</b></label>
          <input type="text"  name="model" required>
          
          <label for="Variant"><b>Variant</b></label>
          <input type="text"  name="varient" required>
      
          <button type="submit" class="btn" name="submit">Login</button>
         
        </form>
      </div>
  ';
}
?>

    <!-- <div class="container">
      <img src="transfer.png" alt="Verification Image" class="verification-image">
      <h1>Transfer Chalan</h1>
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
