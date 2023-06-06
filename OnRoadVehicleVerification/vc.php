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
?>
      <div class="form-popup" id="myForm1">
        <form action="/action_page.php" class="form-container">
          <h1>vehicle_chalan</h1>
      
          <label for="Challan Amount"><b>Challan Amount</b></label>
          <input type="text" name="Owner" value=<?php 
           $amount = $_SESSION['amount'];
           echo "$amount";
          ?>>
      
          <label for="Challan Reason"><b>Challan Reason</b></label>
          <input type="text" name="psw" value=<?php 
           $reason = $_SESSION['reason'];
           echo "$reason";
          ?>>
      
          <label for="Paid Till"><b>Paid Till</b></label>
          <input type="text"  name="psw" value=<?php 
           $date = $_SESSION['date'];
           echo "$date";
          ?>>
          
          <label for="Owner Name"><b>Owner Name</b></label>
          <input type="text"  name="psw" value=<?php 
           $name = $_SESSION['name'];
           echo "$name";
          ?>>
      
          <label for="Registration No"><b>Registration No</b></label>
          <input type="text"  name="psw" value=<?php 
           $regno = $_SESSION['regno'];
           echo "$regno";
          ?>>
          
      
          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>

      <div class="form-popup" id="myForm2">
        <form action="/action_page.php" class="form-container">
          <h1>No Challan</h1>
          <h2>Good Job KeepItUp🙂</h2>
      
      
          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>

    <div class="container">
      <img src="chalan.png" alt="Verification Image" class="verification-image">
      <h1>vehicle Chalan</h1>
      <form background="back.jpg" action="challan.php" method="post">
       
        <input type="text" id="reg" name="reg"  placeholder=" Car Registration Number" required>
        <button type="submit" id="btn" name="submit">Verify</button>
      </form>
    </div>

    <script>
  let btn = document.getElementById("btn");
  let form1 = document.getElementById("myForm1");
  let form2 = document.getElementById("myForm2");
  let res = <?php echo json_encode($_SESSION['result']); ?>; // Store the PHP variable in a JavaScript variable
  console.log(res);

  if (res == true) {
    form1.style.display = 'inline-block';

  } else {
    form2.style.display = 'inline-block';
  }
</script>

  <?php 
  session_destroy();
  ?>
  </body>
</html>
