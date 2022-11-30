<?php session_start(); ?>

<?php require_once "includes/authCheck.php"; ?>
<?php require_once "includes/header.php"; ?>
<?php require_once "includes/db.php"; ?>

<?php 
$get_shoes = "SELECT * FROM shoes";
$shoes = mysqli_query($db_connect, $get_shoes);
?>

<div class="wrapper">

    <?php require_once "includes/sidebar.php"; ?>

    <div class="page-wrapper">

        <?php require_once "includes/topbar.php"; ?>

        <div class="content-wrapper">
            <div class="m-5 p-5">  
                <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <h3 class="pb-4 text-center fw-bold">Shoes Data</h3>
                        <table class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                                <?php
                                if ($shoes->num_rows == 0):
                                ?>
                                <tr class="bg-warning text-center">
                                    <td class="bg-warning" colspan="20">No Data Found</td>
                                </tr>
                                <?php
                                endif;
                                ?>
                            </thead>
                            <tbody class="">
                                <?php
                                $number = 1;
                                foreach ($shoes as $shoe):
                                ?>
                                <tr>
                                    <th>
                                        <?= $number++; ?>
                                    </th>
                                    <th>
                                        <?php echo $shoe['id']; ?>
                                    </th>
                                    <td>
                                        <?= $shoe['shoeName']; ?>
                                    </td> <!-- //instead of "php echo" we4 can use "=" -->
                                    <td>
                                        <?= $shoe['shoePrice']; ?>
                                    </td>
                                    <td>
                                        <?= $shoe['shoeDescription']; ?>
                                    </td>
                                    <td class="d-flex justify-content-between">
                                        <?php 
                                        if($shoe['active_status'] == 1):
                                        ?>
                                        <a href="updateShoeStatus.php?id=<?= $shoe['id'];?>&type=active"
                                            class="btn btn-info btn-sm">Active</a>
                                        <?php endif; ?>
                                        <?php 
                                        if($shoe['active_status'] == 2):
                                        ?>
                                        <a href="updateShoeStatus.php?id=<?= $shoe['id'];?>&type=deactive"
                                            class="btn btn-danger btn-sm">Deactive</a>
                                        <?php endif; ?>
                                        <a href="editShoe.php?id=<?= $shoe['id']; ?>"
                                            class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                    <h3 class="pb-4 text-center fw-bold">Add a New Shoe</h3>
                        <form method="post" action="shoesData.php" enctype="multipart/form-data" class="border border-1 rounded p-3 shadow">
                                <div class="form-outline mb-4 ">
                                    <label class="form-label" for="form3Example3">Shoe Name</label>
                                    <input name="shoeName" type="text" id="form3Example3" class="form-control " />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Shoe Price</label>
                                    <input name="shoePrice" type="text" id="form3Example4" class="form-control" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Shoe Image</label>
                                    <input name="shoeImage" type="file" id="form3Example4" class="form-control" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="mb-2" class="form-label" for="form3Example4">Shoe description</label>
                                    <textarea name="shoeDescription" class="form-control" cols="30" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mb-4 w-100">
                                    ADD
                                </button>
                        </form>
                            </div>
                    </div>
               </div>
           </div>
        </div>
        <?php require_once "includes/footer.php" ?>