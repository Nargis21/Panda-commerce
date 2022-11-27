<header class="slide-gap">
        <nav class="banner-margin navbar navbar-expand-lg navbar-light bg-white fixed-top ">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand " href="index.php">
                    <img src="images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <form class="mx-5 d-none d-lg-inline-block">
                    <div class="position-relative">
                        <input class="form-control fst-italic border-0 background-color size border-1 rounded-pill "
                            type="search" placeholder="Search" aria-label="Search">
                        <i class="fas fa-search position-absolute icon "></i>
                    </div>
                </form> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <form class="mx-2 d-lg-none">
                                <div class="position-relative">
                                    <input
                                        class="form-control fst-italic border-0 background-color border-1 rounded-pill "
                                        type="search" placeholder="Search" aria-label="Search">
                                    <i class="fas fa-search position-absolute icon "></i>
                                </div>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#shoes">Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#backpack">Backpack</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <?php  
                        if(!isset($_SESSION['login'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/AWD/Panda-commerce/login.php">Login</a>
                        </li>
                        <?php endif ?>
                        <?php
                        if(isset($_SESSION['login'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/AWD/Panda-commerce/logout.php">Logout</a>
                        </li>
                        <?php endif ?> 
                    </ul>
                </div>
            </div>
        </nav>
    </header>