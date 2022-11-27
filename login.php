<?php
session_start();
// include "includes/header.php";
// include "includes/navbar.php";
// include "includes/header.php";
// include "includes/navbar.php";

// include_once "includes/header.php";
// include_once "includes/navbar.php";
// include_once "includes/header.php";
// include_once "includes/navbar.php";

// require "includes/header.php";
// require "includes/navbar.php";
// require "includes/header.php";
// require "includes/navbar.php";


require_once "frontend/includes/header.php";
// require_once "frontend/includes/navbar.php";
?>

<div class="w-25 mx-auto py-5">
  <h1 class="text-xl py-5 text-center">Login</h1>
  <form method="post" action="loginData.php" class="">

    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form3Example3">Email address</label>
      <input name="userEmail" type="email" id="form3Example3" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form3Example4">Password</label>
      <input name="password" type="password" id="form3Example4" class="form-control" />
    </div>

    <!-- Show login error message -->
    <?php
    if (isset($_SESSION['loginError'])): ?>
    <p class="alert alert-danger">
      <?php echo $_SESSION['loginError'];
      session_destroy();
      ?>
    </p>
    <?php endif ?>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4 w-100">
      Login
    </button>
    <p>Don't have an account yet ?
      <a class="text-blue" href="signUp.php">Sign Up</a>
    </p>
  </form>
</div>