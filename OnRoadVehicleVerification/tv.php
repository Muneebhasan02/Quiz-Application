<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Vehicle Verification</title>
    <link rel="stylesheet" href="vcss.css">
  </head>
  <body background="back.jpg">
  <?php
session_start();
?>
    <header>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </header>

      <div class="form-popup" id="myForm1">
        <form action="/action_page.php" class="form-container">
          <h1>token_verf</h1>
      
          <label for="Token Paid Till"><b>Token Paid Till</b></label>
          <input type="text" name="Owner" value=<?php 
           $valid = $_SESSION['valid'];
           echo "$valid";
          ?>>
      
          <label for="Owner Name"><b>Owner Name</b></label>
          <input type="text" name="psw" value=<?php 
           $name = $_SESSION['name'];
           echo "$name";
          ?>>
      
          <label for="Registration No"><b>Registration No</b></label>
          <input type="text"  name="psw" value=<?php 
           $reg = $_SESSION['Regno'];
           echo "$reg";
          ?>>
          
          <label for="Amount Paid"><b>Amount Paid</b></label>
          <input type="text"  name="psw" value=<?php 
           $amount = $_SESSION['amount'];
           echo "$amount";
          ?>>
          
          <label for="Paid Via"><b>Paid Via</b></label>
          <input type="text"  name="psw" value=<?php 
           $payment = $_SESSION['payment'];
           echo "$payment";
          ?>>
      
          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>

      <!-- <div class="form-popup" id="myForm2">
        <form action="/action_page.php" class="form-container">
          <h1>Login</h1>
      
          <label for="Expire Date"><b>Expire Date</b></label>
          <input type="text" name="Owner" readonly>
          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div> -->

    <div class="container">
      <img src="token.png" alt="Verification Image" class="verification-image">
      <h1>Token Verification</h1>
      <form background="back.jpg" action="tokenverf.php" method="post">

        <input type="text" id="regNumber" name="reg"  placeholder=" Car Registration Number" required>
        <button type="submit" id="btn">Verify</button>
      </form>
    </div>
    <script>
       let btn = document.getElementById("btn");
       let form = document.getElementById("myForm1");
      // let form = document.getElementById("myForm2");
      btn.onclick = function (){
        form.style.display = 'inline-block';
      }
    </script>
  
  </body>
</html>
