<?php require_once "includes/header.php"; ?>
<?php require_once "includes/db.php"; ?>

<?php
$id = $_POST['id'];
$shoeName = $_POST['shoeName'];
$shoePrice = $_POST['shoePrice'];
$shoeDescription = $_POST['shoeDescription'];

$update_query = "UPDATE shoes SET shoeName = '$shoeName', shoePrice = '$shoePrice', shoeDescription = '$shoeDescription' WHERE id = $id";

$update = mysqli_query($db_connect, $update_query);

if($update){
    header("location: addShoe.php");
}

?>