<?php
session_start();

if(!isset($_SESSION['login'])){
    header("location: /AWD/Panda-commerce/login.php");
}

require_once "includes/header.php";
require_once "includes/navbar.php";
?>    
<main>
        <section class="container my-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded-3">
                    <div class="carousel-item active ">
                        <div class="row g-5 slide-background p-5 d-flex align-items-center">
                            <div class="col-lg-7 col-md-7 col-12">
                                <h1>Cool Dude Headphone</h1>
                                <p>This is the best headphone in the world for people who just want to waste time in
                                    front of funky world. </p>
                                <h2>$420</h2>
                                <button class="button px-5 py-3 rounded-2">BUY NOW <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                            <div class="col-lg-5 col-md-5 col-12">
                                <img src="images/banner-images/headphone.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row slide-background p-5 d-flex align-items-center">
                            <div class="col-lg-7 col-md-7 col-12">
                                <h1>Mega LCD TV For Sports</h1>
                                <p>This is the best tv in the world for people who just want to waste time in front of
                                    tv.</p>
                                <h2>$1200</h2>
                                <button class="button px-5 py-3 rounded-2">BUY NOW
                                    <i class="fas fa-arrow-right"></i></button>
                            </div>
                            <div class="col-lg-5 col-md-5 col-12">
                                <img src="images/banner-images/tv.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row slide-background p-5 d-flex align-items-center">
                            <div class="col-lg-7 col-md-7 col-12">
                                <h1>X-Box for your living room</h1>
                                <p>This is the best x-box in the world for people who just want to waste time in front
                                    of fake sports.
                                </p>
                                <h2>$600</h2>
                                <button class="button px-5 py-3 rounded-2">BUY NOW <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                            <div class="col-lg-5 col-md-5 col-12">
                                <img src="images/banner-images/xbox.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="container my-5 px-5">
            <h1 class="my-5">Categories</h1>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="d-flex align-items-center justify-content-between mini-card-1 rounded-3 p-3">
                        <h1 class="text-white">Watch</h1>
                        <img class="w-auto" src="images/categories/watch.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="d-flex align-items-center justify-content-between mini-card-2 rounded-3 p-3">
                        <h1 class="text-white">Bag</h1>
                        <img class="w-auto" src="images/categories/bag.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="d-flex align-items-center justify-content-between mini-card-3 rounded-3 p-3">
                        <h1 class="text-white">Shoes</h1>
                        <img class="w-auto" src="images/categories/shoes.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-bg pb-5" >
            
            <?php 
            require_once "includes/shoes.php"
            ?>

            <div class="container my-5 px-5" id="backpack">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="my-5">Backpack</h1>
                    <h6 class="see">See All</h6>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 slide-background pb-4 px-3 ">
                    <div class="col">
                        <div class="card h-100 border-0 rounded-3">
                            <img src="images/bags/bag-1.png" class="card-img-top" alt="...">
                            <div class="card-body d-flex align-items-center flex-column">
                                <h3 class="card-title">Biaowang Backpack</h3>
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                    . </p>
                                <h3>$892</h3>
                                <button class="button px-5 py-3 rounded-2 border-0">BUY NOW <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 rounded-3">
                            <img src="images/bags/bag-2.png" class="card-img-top" alt="...">
                            <div class="card-body d-flex align-items-center flex-column">
                                <h3 class="card-title">Dxyizu WS54 Smart</h3>
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                    . </p>
                                <h3>$789</h3>
                                <button class="button px-5 py-3 rounded-2 border-0">BUY NOW <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 rounded-3">
                            <img src="images/bags/bag-3.png" class="card-img-top" alt="...">
                            <div class="card-body d-flex align-items-center flex-column">
                                <h3 class="card-title">Ison Backpack</h3>
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                    amet.</p>
                                <h3>$1289</h3>
                                <button class="button px-5 py-3 rounded-2 border-0">BUY NOW <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section style="height: 300px;" id="contact" class=" container my-5 slide-background rounded-3 p-lg-5 p-md-5 d-flex align-items-center justify-content-center
            flex-column">
            <h3 class="fw-bold">LET'S STAY IN TOUCH</h3>
            <p>Get updates on sales specials and more</p>
            <div class="input-group w-50">
                <input type="search" class="form-control rounded" placeholder="Enter your email" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="button" class="btn button px-4">Sent</button>
            </div>
        </section>
    </main>

<?php
     require_once "includes/footer.php";
?>    