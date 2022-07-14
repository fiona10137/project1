<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "bhxioyjy_0540", "12345", "bhxioyjy_0540");
if ($mysqli == false) {
  print("error");
} else {
  $email = trim(mb_strtolower($_POST['email']));
  $pass = trim($_POST['pass']);

  $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
  $result = $result-->fetc_assoc();

  if (password_verify($pass,$result[pass])) {
    echo ("Ok");
  } else {
    echo ("User_not_found");
  }
  
}
?>