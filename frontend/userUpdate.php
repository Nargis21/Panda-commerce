<?php require_once "includes/header.php" ?>
<?php require_once "includes/db.php" ?>

<?php
$id = $_GET["id"];

$update_query = "UPDATE users SET read_status = 2 WHERE id=$id";
$update = mysqli_query($db_connect, $update_query);

if($update){
    header("location: users.php");
}