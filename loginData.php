<?php session_start();?>

<?php require_once "includes/db.php"; ?>
<?php require_once "includes/header.php"; ?>

<?php

$userEmail = $_POST['userEmail'];
$password = md5($_POST['password']);

$check_user = "SELECT * FROM users WHERE userEmail='$userEmail' AND password='$password'";
$user = mysqli_query($db_connect,$check_user);

if($user->num_rows == 1){
$_SESSION['login'] = "Login Successful!";
header("location: index.php");
}
else{
    $_SESSION['loginError'] = "Your Email or Password Invalid";
    header("location: login.php");
}