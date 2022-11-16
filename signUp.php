<?php
require_once "includes/header.php";
require_once "includes/navbar.php";
?>    

<div class="w-25 mx-auto pb-5">
     <h1 class="text-xl pb-5 text-center">Sign Up</h1>
<form method="post" action="signUpData.php">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1">First name</label>
                      <input name="firstName" type="text" id="form3Example1" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example2">Last name</label>
                      <input name="lastName" type="text" id="form3Example2" class="form-control" />
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input name="userEmail" type="text" id="form3Example3" class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input name="password" type="password" id="form3Example4" class="form-control" />
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                  <label class="mb-2" class="form-label" for="form3Example4">Message</label>
                  <textarea name="message" class="form-control" cols="30" rows="4"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 w-100">
                  Sign up
                </button>
              </form>
</div>

<?php
     require_once "includes/footer.php";
?>   