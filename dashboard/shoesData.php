<?php
require_once "includes/db.php";

$shoeName = $_POST['shoeName'];
$shoePrice = $_POST['shoePrice'];
$shoeDescription = $_POST['shoeDescription'];

$insert_shoe = "INSERT INTO shoes(shoeName, shoePrice, shoeDescription) VALUES ('$shoeName', '$shoePrice', '$shoeDescription')";

$insert = mysqli_query($db_connect, $insert_shoe);

if($insert){
    header("location: addShoe.php");
}

?>