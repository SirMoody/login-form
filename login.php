<?php
$correct_username = "admin";
$correct_password = "1234";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $correct_username && $password == $correct_password) {
  echo "Login successful! Welcome $username.";
} else {
  echo "Invalid login. Try again.";
}
?>