<?php require_once "includes/header.php" ?>
<?php require_once "includes/db.php" ?>
<?php require_once "includes/navbar.php" ?>

<?php
$get_query = "SELECT * FROM users WHERE delete_status = 2";
$users = mysqli_query($db_connect, $get_query);

// print_r($users);

//-----this function return a single data from a object -----
// $allData = mysqli_fetch_assoc($users);

// echo "<pre>";
// print_r($allData);
// echo "</pre>";

?>

<div class="container">
  <h3 class="text-center pb-5">User Data</h3>
  <table class="table table-bordered">
    <thead class="table-primary">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
      </tr>
      <?php
    if ($users->num_rows == 0):
    ?>
      <tr class="bg-warning text-center">
        <td class="bg-warning" colspan="20">No Data Found</td>
      </tr>
      <?php
    endif;
    ?>
    </thead>
    <tbody class="table-warning">
      <?php
    $number = 1;
    foreach ($users as $user):
    ?>
      <tr>
        <th>
          <?= $number++; ?>
        </th>
        <th>
          <?php echo $user['id']; ?>
        </th>
        <td>
          <?= $user['firstName']; ?>
        </td> <!-- //instead of "php echo" we4 can use "=" -->
        <td>
          <?= $user['lastName']; ?>
        </td>
        <td>
          <?= $user['userEmail']; ?>
        </td>
        <td>
          <?= $user['message']; ?>
        </td>
        <td>
          
          <a href="updateRestore.php?id=<?= $user['id']; ?>" class="btn btn-info btn-sm">Restore</a>
        
          <a href="deleteRestore.php?id=<?= $user['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      <?php
    endforeach;
    ?>
    </tbody>
  </table>
</div>

<?php
require_once "includes/footer.php";
?>