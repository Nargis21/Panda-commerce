<?php require_once "includes/header.php"; ?>
<?php require_once "includes/db.php"; ?>
<?php
$id = $_GET['id'];

$get_shoe = "SELECT * FROM shoes WHERE id = $id";
$shoe = mysqli_query($db_connect, $get_shoe);

$assoc_shoe = mysqli_fetch_assoc($shoe);

?>

<div class="col-lg-6 col-md-12 col-12 mx-auto">
    <h3 class="py-4 text-center fw-bold">Update Shoe</h3>
    <form method="post" action="updateShoesData.php" class="border border-1 rounded p-3 shadow">
        <input type="hidden" value="<?= $assoc_shoe['id']; ?>" name="id">
        <div class="form-outline mb-4 ">
            <label class="form-label" for="form3Example3">Shoe Name</label>
            <input name="shoeName" value="<?= $assoc_shoe['shoeName']; ?>" type="text" id="form3Example3" class="form-control " />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4">Shoe Price</label>
            <input name="shoePrice" value="<?= $assoc_shoe['shoePrice']; ?>" type="text" id="form3Example4" class="form-control" />
        </div>
        <div class="form-outline mb-4">
            <label class="mb-2" class="form-label" for="form3Example4">Shoe description</label>
            <textarea name="shoeDescription" class="form-control" cols="30" rows="4"><?= $assoc_shoe['shoeDescription']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4 w-100">
            Update
        </button>
    </form>
</div>