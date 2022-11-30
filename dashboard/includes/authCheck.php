<?php
if(!isset($_SESSION['login']) || !($_SESSION['userType'] == 'admin')){
    session_destroy();
    header("location: /AWD/Panda-commerce/login.php");
}
?>