<?php require_once "includes/header.php" ?>
<?php require_once "includes/db.php" ?>
<?php require_once "includes/navbar.php" ?>

<?php
$get_query = "SELECT * FROM users WHERE delete_status = 1";
$users = mysqli_query($db_connect, $get_query);

$read_query = "SELECT * FROM users WHERE read_status = 2";
$read = mysqli_query($db_connect,$read_query);
// echo $read->num_rows;

$unread_query = "SELECT * FROM users WHERE read_status = 1";
$unread = mysqli_query($db_connect,$unread_query);
// echo $unread->num_rows;

// print_r($users);

//-----this function return a single data from a object -----
// $allData = mysqli_fetch_assoc($users);

// echo "<pre>";
// print_r($allData);
// echo "</pre>";
?>

<div class="container">

<div class="text-center">
<div class="toast show">
    <div class="toast-header">
    <strong class="me-auto">Message Notifications</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
    <h6 class="text-center">You have <?= $read->num_rows ?> read message & <?= $unread->num_rows ?> unread message! </h6>
    </div>
  </div>
</div>

  <h3 class="text-center pb-2">User Data</h3>
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
      <tr class="
    <?php
      if ($user['read_status'] == 2) {
        echo 'table-light';
      }
    ?>
    ">
        <th>
          <?= $number++; ?>
        </th>
        <th>
          <?php echo $user['id']; ?>
        </th>
        <td>
          <?= $user['firstName']; ?>
        </td> <!-- //instead of "php echo" we can use "=" -->
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
          <?php
      if ($user['read_status'] == 1):
        ?>
          <a href="userUpdate.php?id=<?= $user['id']; ?>" class="btn btn-info btn-sm">Mark as read</a>
          <?php
      endif;
    ?>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Delete
          </button>
        </td>
      </tr>
      <?php
    endforeach;
    ?>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure to delete the user?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">No</button>
              <a href="userDelete.php?id=<?= $user['id']; ?>" class="btn btn-danger btn-sm">Yes</a>
            </div>
          </div>
        </div>
      </div>
    </tbody>
  </table>
 <div class="text-center pt-2">
 <a href="restoreUsers.php" class="btn btn-info">Restore Users</a>
 </div>
</div>

<?php
require_once "includes/footer.php";
?>