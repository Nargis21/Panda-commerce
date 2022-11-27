<?php
require_once "includes/db.php";

$id = $_GET['id'];

$activeShoe_query = "UPDATE shoes SET active_status = 2 WHERE id = $id";
$activeShoe = mysqli_query($db_connect, $activeShoe_query);

if($activeShoe){
    header("location: addShoe.php");
}

?>