<?php require_once "includes/db.php"; ?>
<?php require_once "includes/header.php"; ?>
<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo "Name: ".$_POST["firstName"]." ".$_POST["lastName"];
// echo "<br>";
// echo "Email : ".$_POST["userEmail"];
// echo "<br>";
// echo "Password: ".$_POST["password"];
// echo "<br>";
// echo "Message: ".$_POST["message"];


//------Get password from the signup form------
$password = $_POST["password"];

//------set the password strength using preg_match which is a php build in function for regex match------
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

//-------check empty field-------
if(empty($_POST["firstName"]) || empty($_POST["lastName"]) || empty($_POST["userEmail"]) || empty($_POST["password"]) || empty($_POST["message"]) ){
    echo '<div class="alert alert-danger" role="alert">
   Please fill up the form correctly, you are missing something!
  </div>';
}

//--------check validate email--------
elseif (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
    echo '<div class="alert alert-danger" role="alert">
    Please provide a valid email!
  </div>';
}

//--------check password strength--------
elseif(!($uppercase && $lowercase && $number && $specialChars && strlen($password) >= 8)) {
    echo '<div class="alert alert-danger" role="alert">
    Password should be at least 8 characters in length should include at least one upper case letter, one number, and one special character.
  </div>';
}

//-----default message-------
else{

    // echo "You have successfully registered";

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $userEmail = $_POST["userEmail"];
    $message = $_POST["message"];

    $insert_query = "INSERT INTO users(firstName, lastName, userEmail, password, message) VALUES ('$firstName','$lastName','$userEmail','$password','$message')";

    $insert = mysqli_query($db_connect, $insert_query);

       if($insert){
        // echo "You have successfully registered!";
        header("location: login.php");
       }
       else{
        echo "Something wrong!";
       }
}

?>