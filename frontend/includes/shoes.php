<?php
require_once "includes/db.php";

$get_shoes = "SELECT * FROM shoes WHERE active_status = 2";
$shoes = mysqli_query($db_connect, $get_shoes);
?>

<div class="container my-5 px-5" id="shoes">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="my-5">Shoes</h1>
        <h6 class="see">See All</h6>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 slide-background pb-4 px-3">
        <?php
    foreach ($shoes as $shoe):
    ?>
        <div class="col">
            <div class="card h-100 border-0 rounded-3">
                <img src="images/shoes/shoe-1.png" class="card-img-top" alt="...">
                <div class="card-body d-flex align-items-center flex-column">
                    <h3 class="card-title text-center">
                        <?= $shoe['shoeName']; ?>
                    </h3>
                    <p class="card-text ">
                        <?= $shoe['shoeDescription']; ?>
                    </p>
                    <h3>$<?= $shoe['shoePrice']; ?>
                    </h3>
                    <button class="button px-5 py-3 rounded-2 border-0">BUY NOW <i
                            class="fas fa-arrow-right"></i></button>
                </div>
                <div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>