<?php

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

require_once "includes/header.php";
require_once "includes/navbar.php";
require_once "includes/header.php";
require_once "includes/navbar.php";
?>    

<div class="w-25 mx-auto pb-5">
     <h1 class="text-xl pb-5 text-center">Login</h1>
<form class="">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" class="form-control" />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 w-100">
                  Login
                </button>
              </form>
</div>

<?php
     require_once "includes/footer.php";
?>   