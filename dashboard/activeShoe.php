<?php
require_once "includes/db.php";

$id = $_GET['id'];
$type = $_GET['type'];

if ($type = 'active') {
    $activeShoe_query = "UPDATE shoes SET active_status = 2 WHERE id = $id";
    $activeShoe = mysqli_query($db_connect, $activeShoe_query);

    if ($activeShoe) {
        header("location: addShoe.php");
    }
} 

if($type = 'deactivate'){
    $deactivateShoe_query = "UPDATE shoes SET active_status = 1 WHERE id = $id";
    $deactivateShoe = mysqli_query($db_connect, $deactivateShoe_query);

    if ($deactivateShoe) {
        header("location: addShoe.php");
    }
}

// ?>