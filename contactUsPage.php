<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/contactUsStyles.css">

    <title>Land Paradise | Contact Us</title>
  
</head>
  
<body>

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

    <center>
        <h2>CONTACT US</h2>
    </center>

            <div class = "contact-detail">
                <P>
                    <B>Head Office:</B><br>
                    Land Paradise (Pvt) Ltd.<br>
                    No 123,<br>
                    Bauddhaloka Mawatha,<br> 
                    Colombo 07.<br><br>
                    <B>General Numbers:</B><br>
                    +94 123 456789<br><br>
                    <B>Hotline Numbers:</B><br>
                    +94 123 456789<br><br>
                    <B>Email:</B><br>
                    info@landparadise.lk<br><br>
                    <B>Websites:</B><br>
                    www.landparadise.lk
                </P>
            </div>
    
            <div class = "contact-form">
                <form action="contactUs.php" method="POST">
                    <center><h3>INQUIRE NOW</h3></center>
            
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" placeholder="Name" required><br><br>
                    
                    <label for="phone">Phone Number:</label><br>
                    <input type="phone" id="phone" name="phone" placeholder="9999999999" pattern="[0-9]{10}" required><br><br>
                    
                    <label for="email">E-mail Address:</label><br>
                    <input type="email" id="email" name="email" placeholder="example@email.com" pattern="[a-z0-9]+@[a-z]+\.[a-z]{2,3}" required><br><br>
                    
                    <label for="message">Message:</label><br>
                    <textarea name="message" rows="6" cols="50" required></textarea><br><br>
                
                    <input type="submit" id="sendbtn" value="Send">
                </form>
            </div>
        

            <div class = "map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59818.17453982399!2d79.79179112464814!3d6.896967302695955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259706bfa613f%3A0xf79d7adae85305f7!2sCinnamon%20Gardens%2C%20Colombo!5e0!3m2!1sen!2slk!4v1686031367909!5m2!1sen!2slk" width="200" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    
    <?php
      include_once'footer.php';
    ?>

</body>
</html>