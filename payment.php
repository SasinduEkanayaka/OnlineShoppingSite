<?php
  include_once'config.php';

  if(isset($_POST['pay']))
  {
    $type = $_POST['card-type'];
    $user_name = $_SESSION['current_user'];
    $cnumber = $_POST['card-number'];
    $holdername = $_POST['holdername'];
    $exp = $_POST['exp'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO card_details (card_type, user_name, card_number, holdername, exp, cvv)
            VALUES ('$type', '$user_name', '$cnumber', '$holdername', '$exp', '$cvv')";

    mysqli_query($conn, $sql);

    $payment_id = mysqli_insert_id($conn);

    $_SESSION['current_payment'] = $payment_id;

    header("location:viewPayment.php");
  }
?>