<?php require_once "includes/header.php" ?>
<?php require_once "includes/db.php" ?>

<?php
$id = $_GET["id"];

$delete_query = "DELETE FROM users WHERE id=$id";
$delete = mysqli_query($db_connect, $delete_query);

if($delete){
    header("location: restoreUsers.php");
}

