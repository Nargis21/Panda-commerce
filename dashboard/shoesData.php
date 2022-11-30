<?php
require_once "includes/db.php";

$shoeName = $_POST['shoeName'];
$shoePrice = $_POST['shoePrice'];
$shoeDescription = $_POST['shoeDescription'];

$imageName = $_FILES['shoeImage']['name'];
$explodeName = explode('.',$imageName);
$imageExtension = end($explodeName);
$fileExtensions = ['jpg','JPG','jpeg','JPEG','png','PNG'];

if(in_array($imageExtension,$fileExtensions)){
    echo "Okay!";
}
else{
    echo "File Format Not Supported!";
}

die();

$insert_shoe = "INSERT INTO shoes(shoeName, shoePrice, shoeDescription) VALUES ('$shoeName', '$shoePrice', '$shoeDescription')";

$insert = mysqli_query($db_connect, $insert_shoe);

if($insert){
    header("location: addShoe.php");
}

?>