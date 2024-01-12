<!DOCTYPE html>
<html>
  <head>
    <title>Land Paradise | Payment</title>
    <link rel="stylesheet" href="styles/paymentStyles.css">
    <link rel="stylesheet" href="styles/styles.css">

  </head>
  <body>
    <div class="bg">
    <?php
      error_reporting(0);
      session_start();
      
      if($_SESSION['current_user'])
      {
        include_once'loggedInHeader.php';
      }
      else
      {
        include_once'header.php';
      }
    ?>
    <hr>
  <center>
    <div class="container">
      <div class="main-content">
        <p class="text">Amount : &nbsp;&nbsp; LKR.</p>
      </div>
  
    
  <form action="payment.php" method="POST">
    
      <div class="card-details">
       
        <div class="card-type">
            <label> Card Type </label><br>
            <input type="radio" id="visa" name="card-type" value="visa">
            <label for="visa"><img class="visa" src="images/visa.png"></label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="mastercard" name="card-type" value="mastercard">
            <label for="visa"><img class="mastercard" src="images/mastercard.png"></label>
        </div>
        <br>
        <div class="card-number">
          <label> Card Number </label>
          <input type="text" id="card-number" name="card-number" class="card-number-field" placeholder="###-###-###" required>
        </div>

        <div class="nameholder-number">
            <label> Card Holder name </label>
            <input type="text" id="holdername" name="holdername" class="card-name-field" placeholder="Enter your Name" required>
          </div>

        <div class="date-number">
          <label> Expiry Date </label>
          <input type="text" id="exp" name="exp" class="date-number-field" placeholder="YYYY-MM-DD" required>
        </div>
  
        <div class="cvv-number">
          <label class = "tooltip">CVV Number<span class="tooltiptext">CVV 
            Number is displayed at back side on the card. Normally its in 3 digits.</span></label>
          <input type="text" id="cvv" name="cvv" class="cvv-number-field" 
                 placeholder="xxx" required>
        </div>
        <br><br><br>
        
        <button type="submit" name="pay" class="submit-now-btn">PAY</button>

      </div>
</form> 
    </div>
  </center>

    <hr>

    <?php
      include_once'footer.php';
    ?>

  </body>
</html>