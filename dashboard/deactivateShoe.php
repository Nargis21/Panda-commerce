<?php
require_once "includes/db.php";

$id = $_GET['id'];

$deactivateShoe_query = "UPDATE shoes SET active_status = 1 WHERE id = $id";
$deactivateShoe = mysqli_query($db_connect, $deactivateShoe_query);

if($deactivateShoe){
    header("location: addShoe.php");
}

?>