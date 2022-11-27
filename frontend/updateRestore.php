<?php require_once "includes/header.php" ?>
<?php require_once "includes/db.php" ?>

<?php
$id = $_GET["id"];


$updateStatus_query = "UPDATE users SET delete_status = 1 WHERE id=$id";
$updateStatus = mysqli_query($db_connect,$updateStatus_query);
if($updateStatus){
    header("location: restoreUsers.php");
}