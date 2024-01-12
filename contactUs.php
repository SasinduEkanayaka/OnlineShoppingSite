<?php
  include_once'config.php';
?>

<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "insert into inquiry (name,phone_number,email,massege)
   values ('$name','$phone','$email','$message');";

   mysqli_query($conn, $sql);
?>