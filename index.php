<?php
    // session_start();
    // include_once './store.php';
   // $students = $_SESSION['students'] ?? [];

   include_once '../vendor/autoload.php';

   use project\controllers\Product;
   
   $productObj = new Product();
   
   $productList=$productObj->index();

   use project\controllers\Category;
   
   $categoryObj = new Category();
   
   $categoryList=$categoryObj->index();

    ?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/main.css">
    <title>Electro Gadgets</title>
</head>

<body>
    <div class="container_fluid ">

        <!-- Pre Header -->
        <section class="preHeader  d-flex w-100 justify-content-between">
            <div class="leftContent  mt-2 ">
                <ul class=" mt-2">
                    <li class="px-4">
                        <i class="fa fa-phone text-warning"></i>
                        +060 (800) 801-858
                    </li>
                    <li>
                        <i class="fa fa-mail-bulk text-warning"></i>
                        info@electro.com
                    </li>
                </ul>
            </div>
            <div class="rightContent d-flex justify-content-end  mt-2">
                <ul class=" d-flex mt-2">
                    <li class="px-3">
                        <i class="fa fa-location-pin"></i>
                        Store Locator
                    </li>

                    <li class="px-3">
                        <i class="fa-solid fa-truck-arrow-right"></i> Track Your Order
                    </li>
                    <li class="px-3">
                        <i class="fa-solid fa-user"></i> <a href="login.php" id="login">Register or Sign in</a>
                    </li>

                </ul>

            </div>

        </section>
        <!-- Pre Header Ends -->

        <!-- Header Start -->
        <header class=" position-sticky sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="logo me-5">
                        <img src="images/logo.png" alt="">
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Search Bar -->
                        <form class="example w-50" action="">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- End Search Bar -->

                        <!-- Nav Items -->

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-2 fs-6 ">
                            <li class="nav-item px-2">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="about.html">About
                                </a>
                            </li>
                            <li class="nav-item px-2 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Categories
                                    <span
                                        class="position-absolute top-0  translate-middle badge rounded-pill bg-success">
                                        New
                                    </span>
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">

                                <?php foreach ($categoryList as $categories) {?>
                                    <li><a class="dropdown-item"  href="product.php?id=<?=$categories['category_name']?>"><?=$categories['category_name']?></a></li>

                                        <?php
                                      }
                                      ?>
                                 

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="products.php">Browse All Products</a></li>
                                </ul>
                            </li>
                            <li class="nav-item px-2">
                                <a href="products.php" type="button"
                                    class="btn btn-transparent text-light position-relative">
                                    All Products
                                    <span
                                        class="position-absolute top-0  translate-middle badge rounded-pill bg-danger">
                                        HOT
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>

                            </li>
                            <li class="nav-item px-2">
                                <a href="cart.html" type="button"
                                    class="btn btn-transparent btn-sm position-relative nav-link">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        3
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>

                            </li>
                        </ul>
                        <!-- //////// -->

                    </div>
                </div>
            </nav>
        </header>

        <!-- Sildebar and Slider -->
        <section class="heading container ">
            <div class="row">
                <div class="col-md-4  h-100 ">
                    <div class="sidebar py-4">
                        <ul class=" dropend">
                            <li>
                                <button type="button" class="btn btn-transparent position-relative fw-bold">
                                    Value of the Day
                                    <span
                                        class="position-absolute top-0  translate-middle badge rounded-pill bg-success">
                                        NEW
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-transparent position-relative fw-bold">
                                    New Arrival
                                    <span class="position-absolute top-0   badge rounded-pill bg-primary">
                                        Sale
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </button>

                            </li>
                            <li>
                                <button type="button" class="btn btn-transparent position-relative fw-bold">
                                    Top 100 Offers

                                </button>

                            </li>
                            <li>
                                <button type="button" class="btn btn-transparent position-relative fw-bold">
                                    Best Selling

                                </button>

                            </li>
                            <li>
                                <div class="btn-group dropend">
                                    <a class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        TV & Audio
                                    </a>
                                    <ul class="dropdown-menu">
                                        <div class="row px-4" id="sideSpace">
                                            <div class="col-md-3  text-start ">
                                                <p class="fw-bold text-center">Smart TV</p>
                                                <a href="" class="dropdown-item">Amazon Fire TV</a>
                                                <a href="" class="dropdown-item">Android TV</a>
                                                <a href="" class="dropdown-item">Google TV</a>
                                                <a href="" class="dropdown-item">Livestreamed news</a>
                                                <a href="" class="dropdown-item">NetCast</a>
                                                <a href="" class="dropdown-item">Redmi</a>

                                            </div>
                                            <div class="col-md-3  text-start">
                                                <p class="fw-bold text-center">
                                                    Headphones
                                                </p>
                                                <a href="" class="dropdown-item">Wireless (Bluetooth)</a>
                                                <a href="" class="dropdown-item">Earbuds (In-ear)</a>
                                                <a href="" class="dropdown-item">Circumaural</a>
                                                <a href="" class="dropdown-item">Supra-aural</a>
                                                <a href="" class="dropdown-item">Noise-cancelling</a>
                                                <a href="" class="dropdown-item">Bone conduction</a>
                                                <a href="" class="dropdown-item">Closed-back</a>


                                            </div>
                                            <div class="col-md-3 text-start px-4">
                                                <p class="fw-bold text-center">Sound System</p>
                                                <a href="" class="dropdown-item">Studio Monitors.</a>
                                                <a href="" class="dropdown-item">In-Wall Speakers</a>
                                                <a href="" class="dropdown-item">Outdoor Speakers</a>
                                                <a href="" class="dropdown-item">PA System</a>
                                                <a href="" class="dropdown-item">Bookshelf Speakers</a>
                                                <a href="" class="dropdown-item">Home Stereo Sound System</a>



                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group dropend">
                                    <a class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Gadgets
                                    </a>
                                    <ul class="dropdown-menu">
                                        <div class="row px-4" id="sideSpace">
                                            <div class="col-md-3  text-start me-2">
                                                <p class="fw-bold text-center">Watches</p>
                                                <a href="" class="dropdown-item">All Watches</a>
                                                <a href="" class="dropdown-item">Men Watches</a>
                                                <a href="" class="dropdown-item">Google TV</a>
                                                <a href="" class="dropdown-item">Women Watches</a>
                                                <a href="" class="dropdown-item">Kid's Watches</a>
                                                <a href="" class="dropdown-item">Premium Watches</a>

                                            </div>
                                            <div class="col-md-3  text-start ms-2 me-5">
                                                <p class="fw-bold text-center">
                                                    Audio & Video
                                                </p>
                                                <a href="" class="dropdown-item">Wireless (Bluetooth)</a>
                                                <a href="" class="dropdown-item">All Cameras & Photography</a>
                                                <a href="" class="dropdown-item">Camera Accessories</a>
                                                <a href="" class="dropdown-item">All SLR's</a>
                                                <a href="" class="dropdown-item">Security & Surveillance</a>
                                                <a href="" class="dropdown-item">Binoculars & Telescopes</a>
                                                <a href="" class="dropdown-item">Camcorders</a>


                                            </div>
                                            <div class="col-md-3 text-start ms-4">

                                                <p class="fw-bold text-center">Industrial Supplies</p>
                                                <a href="" class="dropdown-item">All Industrial Supplies</a>
                                                <a href="" class="dropdown-item">Accessories</a>
                                                <a href="" class="dropdown-item">Keyboard</a>
                                                <a href="" class="dropdown-item">Music</a>
                                                <a href="" class="dropdown-item">Software</a>
                                                <a href="" class="dropdown-item">Watches</a>



                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group dropend">
                                    <a class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        All in One
                                    </a>
                                    <ul class="dropdown-menu">
                                        <div class="row px-4" id="sideSpace">
                                            <div class="col-md-3  text-start me-5">
                                                <p class="fw-bold text-center">Computers & Accessories</p>
                                                <a href="" class="dropdown-item">Mouse</a>
                                                <a href="" class="dropdown-item">Keyboards</a>
                                                <a href="" class="dropdown-item">RAM</a>
                                                <a href="" class="dropdown-item">Monitor</a>
                                                <a href="" class="dropdown-item">Graphocs Card</a>
                                                <a href="" class="dropdown-item">Cables</a>

                                            </div>
                                            <div class="col-md-3  text-start ms-2 me-5">
                                                <div class="col-md-3  text-start">
                                                    <p class="fw-bold text-center">
                                                        Headphones
                                                    </p>
                                                    <a href="" class="dropdown-item">Wireless (Bluetooth)</a>
                                                    <a href="" class="dropdown-item">Earbuds (In-ear)</a>
                                                    <a href="" class="dropdown-item">Circumaural</a>
                                                    <a href="" class="dropdown-item">Supra-aural</a>
                                                    <a href="" class="dropdown-item">Noise-cancelling</a>
                                                    <a href="" class="dropdown-item">Bone conduction</a>
                                                    <a href="" class="dropdown-item">Closed-back</a>


                                                </div>


                                            </div>
                                            <div class="col-md-3 text-start ms-4">
                                                <div class="image" id="sidebarImage">
                                                    <img src="images/smartphone.png" alt="">

                                                </div>





                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group dropend">
                                    <a class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Laptop And Computers
                                    </a>
                                    <ul class="dropdown-menu">


                                        <li>
                                            <a href="">Keyboard</a>

                                        </li>
                                        <li><a href="">Mouse</a></li>
                                        <li><a href="">Computers</a></li>
                                        <li><a href="">PC</a></li>
                                        <li><a href="">Software</a></li>
                                        <li><a href="">Printers & Ink</a></li>
                                        <li><a href="">Eyewear</a></li>
                                        <li><a href="">PC Computers</a></li>
                                    </ul>
                                </div>
                            </li>


                        </ul>

                    </div>


                </div>
                <!-- Slider -->
                <div class="col-md-8 ">
                    <!--Slider Here-->
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/slider1.gif" alt="Los Angeles" class="d-block" style="width:100%">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/slider2.gif" alt="Chicago" class="d-block" style="width:100%">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/slider3.gif" alt="New York" class="d-block" style="width:100%">
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                </div>
            </div>


        </section>

        <!-- === Deals of the Day=== -->
        <section class="deals container  h-100 mb-4">
            <div class="title d-flex">
                <p class="fw-bold">Deals of the Day</p>

                <div id="countdown" class="ms-3 ">
                    <ul class="d-flex mt-2 me-3">
                        <li>Ends In:</li>
                        <li><span id="days"></span> </li>
                        <li><span id="hours"></span> Hours</li>
                        <li><span id="minutes"></span> Minutes</li>
                        <li><span id="seconds"></span> Seconds</li>
                    </ul>
                </div>
                <hr>
            </div>
            <hr>
            <!-- Deals Product List -->
            <div class="row mt-4 dealsProduct gx-2 ">
                <div class="col-md-2 col-sm-6 mb-1 col-lg-2">

                    <a href="single-product.html">
                        <div class="card">
                            <div class="card-header fw-bold text-center text-primary overflow-hidden ">
                                Philips H4205 On-Ear Wireless Headphones
                            </div>
                            <img src="./images/Products/headphone/p6.jpg" class="card-img-top" alt="">

                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="price">
                                    <h5>$150.00</h5>
                                    <del>$200.00</del>
                                </div>
                                <div class="cart mt-5 ">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-md-2 col-sm-6 mb-1 col-lg-2">

                    <a href="single-product.html">
                        <div class="card">
                            <div class="card-header fw-bold text-center text-primary overflow-hidden ">
                                ASUS Chromebook CX1
                            </div>
                            <img src="./images/Products/laptop/asus1.jpg" class="card-img-top" alt="">

                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="price">
                                    <h5>$300.00</h5>
                                    <del>$350.00</del>
                                </div>
                                <div class="cart mt-5 ">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-2 col-sm-6 mb-1 col-lg-2">

                    <a href="single-product.html">
                        <div class="card">
                            <div class="card-header fw-bold text-center text-primary overflow-hidden ">
                                Oppo F21 Pro 5G
                            </div>
                            <img src="./images/Products/mobile/p1.jpg" class="card-img-top" alt="">

                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="price">
                                    <h5>$74.00</h5>
                                    <del>$111.00</del>
                                </div>
                                <div class="cart mt-5 ">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-2 col-sm-6 mb-1 col-lg-2">

                    <a href="single-product.html">
                        <div class="card">
                            <div class="card-header fw-bold text-center text-primary overflow-hidden ">
                                Epsion Printer hd Image
                            </div>
                            <img src="./images/Products/printer/canon5.jpg" class="card-img-top" alt="">

                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="price">
                                    <h5>$94.00</h5>
                                    <del>$111.00</del>
                                </div>
                                <div class="cart mt-5 ">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-md-2 col-sm-6 mb-1 col-lg-2">

                    <a href="single-product.html">
                        <div class="card">
                            <div class="card-header fw-bold text-center text-primary overflow-hidden ">
                                Epson PictureMate PM-520
                            </div>
                            <img src="./images/Products/mobile/oppo p5.png" class="card-img-top" alt="">

                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="price">
                                    <h5>$74.00</h5>
                                    <del>$111.00</del>
                                </div>
                                <div class="cart mt-5 ">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-2 col-sm-6 mb-1 col-lg-2">

                    <a href="single-product.html">
                        <div class="card">
                            <div class="card-header fw-bold text-center text-primary overflow-hidden ">
                                MI Extreme Airdots
                            </div>
                            <img src="./images/Products/headphone/airpod4.jpg" class="card-img-top" alt="">

                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="price">
                                    <h5>$54.00</h5>
                                    <del>$99.00</del>
                                </div>
                                <div class="cart mt-5 ">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>

        </section>
        <!-- =====End Deals of the Day======== -->
        <section class="shopBanner  container mb-4">
            <img src="./images/banners/banner1.gif" alt="">


        </section>


        <!-- Smartphone and Tablets -->

        <section class="popularCategory container mt-5 mb-3">
            <div class="row">
                <h4 class="mb-3">Smartphones & Tablets</h4>
                <div class="col-md-4 bg-danger sideAds d-flex justify-content-start align-items-center ">
                    <div class="button mt-5 pt-5 ">
                        <button class="btn btn-warning rounded-1 text-light btn-lg mt-5">View More</button>
                    </div>

                </div>
                <div class="col-md-8  ">
                    <div class="row gx-0 gy-2">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Smartphone</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        OPPO F15
                                    </div>
                                    <img src="./images/Products/mobile/p1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $150.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Smartphone</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        ViVo V9
                                    </div>
                                    <img src="./images/Products/mobile/p3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $260.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Smartphone</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        VIVO V10
                                    </div>
                                    <img src="./images/Products/mobile/p2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $240.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Smartphone</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        ONE Plus SL10
                                    </div>
                                    <img src="./images/Products/mobile/p6.png" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $245.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Tablet</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        Xiaomi Pad 5
                                    </div>
                                    <img src="./images/Products/tablets/m1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $245.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Tablet</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        HUAWEI Tablet
                                    </div>
                                    <img src="./images/Products/tablets/huawei1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $300.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Tablet</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        Google Tablet
                                    </div>
                                    <img src="./images/Products/tablets/t1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $123.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Tablet</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        Android Tablet
                                    </div>
                                    <img src="./images/Products/tablets/t2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $336.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>

                    </div>

                </div>
            </div>

        </section>
        <!--END Smartphone and Tablets -->

        <!-- --------BAnner------- -->
        <section class="banner2 container mb-5 mt-5 ">
            <div class="row">
                <div class="col-md-6 bannerLeft ">
                    <img src="images/banners/banner3.gif" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 bannerRight">
                    <img src="./images/banners/banner4.png" alt="" class="img-fluid">
                </div>
            </div>

        </section>
        <!-- END BAnner -->

        <!-- Headphones -->
        <section class="headphones container mb-5">
            <h4 class="mb-3">Headphones</h4>
            <div class="row">
                <div class="col-md-3 ads ">
                    <img src="./images/banners/banner5.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>SOLO Wireless</small>
                                    </div>
                                    <img src="./images/Products/headphone/p3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center">
                                            <div class="price fs-5 text-info">
                                                $150.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <div class="lower">
                                            <small>
                                                <del class="text-danger">$200.00</del>
                                            </small>
                                        </div>

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Edifier W820BT</small>
                                    </div>
                                    <img src="./images/Products/headphone/p5.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $99.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                           <small>
                                               <del class="text-danger">$200.00</del>
                                           </small>
                                       </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Earbuds Beats</small>
                                    </div>
                                    <img src="./images/Products/headphone/airpod1.jpg" class="card-img-top"
                                        alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $169.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                           <small>
                                               <del class="text-danger">$200.00</del>
                                           </small>
                                       </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Beats Flex</small>
                                    </div>
                                    <img src="./images/Products/headphone/bhp1.jpg" class="card-img-top"
                                        alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center ">
                                            <div class="price fs-5 text-info">
                                                $78.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <div class="lower">
                                            <small>
                                                <del class="text-danger">$99.00</del>
                                            </small>
                                        </div>

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>MI Airdots</small>
                                    </div>
                                    <img src="./images/Products/headphone/aripod3.jpg" class="card-img-top"
                                        alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $88.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                                       <small>
                                                                           <del class="text-danger">$200.00</del>
                                                                       </small>
                                                                   </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Sterio Wireless</small>
                                    </div>
                                    <img src="./images/Products/headphone/p6.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $142.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                                       <small>
                                                                           <del class="text-danger">$200.00</del>
                                                                       </small>
                                                                   </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- END Headphones -->

        <!-- Laptops Section -->
        <section class=" laptops headphones container mt-5 mb-5">
            <h4 class="mb-3">Laptops</h4>
            <div class="row">
                <div class="col-md-3 ads ">
                    <img src="./images/banners/banner6.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-9">
                    <div class="row gy-2">
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>ASUS L210</small>
                                    </div>
                                    <img src="./images/Products/laptop/asus1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center">
                                            <div class="price fs-5 text-info">
                                                $300.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <div class="lower">
                                            <small>
                                                <del class="text-danger">$346.00</del>
                                            </small>
                                        </div>

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Expertboox B7</small>
                                    </div>
                                    <img src="./images/Products/laptop/asus3.jpg" class="card-img-top" alt="Laptop">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $454.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                   <small>
                                                       <del class="text-danger">$200.00</del>
                                                   </small>
                                               </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>HP 14sfqAU</small>
                                    </div>
                                    <img src="./images/Products/laptop/h2.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $476.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                   <small>
                                                       <del class="text-danger">$200.00</del>
                                                   </small>
                                               </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>HP 15sfqAU</small>
                                    </div>
                                    <img src="./images/Products/laptop/h3.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center ">
                                            <div class="price fs-5 text-info">
                                                $467.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <div class="lower">
                                            <small>
                                                <del class="text-danger">$500.00</del>
                                            </small>
                                        </div>

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>ASUS Noteboox</small>
                                    </div>
                                    <img src="./images/Products/laptop/asus4.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $420.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                                               <small>
                                                                                   <del class="text-danger">$200.00</del>
                                                                               </small>
                                                                           </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>HP Proboox</small>
                                    </div>
                                    <img src="./images/Products/laptop/h6.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $431.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                                               <small>
                                                                                   <del class="text-danger">$200.00</del>
                                                                               </small>
                                                                           </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--END Laptops Section -->


        <!-- Recommended -->
        <section class="recommended container mt-2 mb-5">
            <h4 class="mb-4">Recommended for You</h4>
            <div class="row gx-2 gy-2">
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <a href="single-product.html">
                        <div class="card">
                            <small class="text-danger text-center"> Ctg:Laptop</small>
                            <div class="card-header text-primary fw-bold text-center p-0">
                                <small>ASUS L210 8GB 9G</small>
                            </div>
                            <img src="./images/Products/laptop/asus1.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <div class="upper d-flex justify-content-center">
                                    <div class="price fs-3 text-info">
                                        $300.00
                                    </div>
                                    <div class="cart ms-4 ">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                </div>
                                <div class="lower d-flex justify-content-center">
                                    <small>
                                        <del class="text-danger ">$346.00</del>
                                    </small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <a href="single-product.html">
                        <div class="card">
                            <small class="text-danger text-center"> Ctg:Printer</small>
                            <div class="card-header text-primary fw-bold text-center p-0">
                                <small>HP HD Printer</small>
                            </div>
                            <img src="./images/Products/printer/hp3.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <div class="upper d-flex justify-content-center">
                                    <div class="price fs-2 text-info">
                                        $258.00
                                    </div>
                                    <div class="cart ms-4 ">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                </div>
                                <!-- <div class="lower d-flex justify-content-center">
                                <small>
                                    <del class="text-danger ">$346.00</del>
                                </small>
                            </div> -->

                            </div>

                        </div>
                    </a>

                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <a href="single-product.html">
                        <div class="card">
                            <small class="text-danger text-center"> Ctg:Smartphone</small>
                            <div class="card-header text-primary fw-bold text-center p-0">
                                <small>VIVO V15 48MP 8/128</small>
                            </div>
                            <img src="./images/Products/mobile/p12.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <div class="upper d-flex justify-content-center">
                                    <div class="price fs-3 text-info">
                                        $129.00
                                    </div>
                                    <div class="cart ms-4 ">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                </div>
                                <div class="lower d-flex justify-content-center">
                                    <small>
                                        <del class="text-danger ">$150.00</del>
                                    </small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <a href="single-product.html">
                        <div class="card">
                            <small class="text-danger text-center"> Ctg:Smartphone</small>
                            <div class="card-header text-primary fw-bold text-center p-0">
                                <small>ONE PLUS 48MP 8/128</small>
                            </div>
                            <img src="./images/Products/mobile/p2.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <div class="upper d-flex justify-content-center">
                                    <div class="price fs-3 text-info">
                                        $99.00
                                    </div>
                                    <div class="cart ms-4 ">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                </div>
                                <div class="lower d-flex justify-content-center">
                                    <small>
                                        <del class="text-danger ">$120.00</del>
                                    </small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <a href="single-product.html">
                        <div class="card">
                            <small class="text-danger text-center"> Ctg:Smartphone</small>
                            <div class="card-header text-primary fw-bold text-center p-0">
                                <small>OPPO f15 48MP 8/128</small>
                            </div>
                            <img src="./images/Products/mobile/oppo p5.png" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <div class="upper d-flex justify-content-center">
                                    <div class="price fs-3 text-info">
                                        $99.00
                                    </div>
                                    <div class="cart ms-4 ">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                </div>
                                <div class="lower d-flex justify-content-center">
                                    <small>
                                        <del class="text-danger ">$120.00</del>
                                    </small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <a href="single-product.html">
                        <div class="card">
                            <small class="text-danger text-center"> Ctg:Headphone</small>
                            <div class="card-header text-primary fw-bold text-center p-0">
                                <small>Wireless Super Beat</small>
                            </div>
                            <img src="./images/Products/headphone/bhp3.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <div class="upper d-flex justify-content-center">
                                    <div class="price fs-3 text-info">
                                        $48.00
                                    </div>
                                    <div class="cart ms-4 ">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                </div>
                                <div class="lower d-flex justify-content-center">
                                    <small>
                                        <del class="text-danger ">$57.00</del>
                                    </small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <a href="single-product.html">
                        <div class="card">
                            <small class="text-danger text-center"> Ctg:Laptop</small>
                            <div class="card-header text-primary fw-bold text-center p-0">
                                <small>HP New Laptop 9G</small>
                            </div>
                            <img src="./images/Products/laptop/h5.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <div class="upper d-flex justify-content-center">
                                    <div class="price fs-3 text-info">
                                        $332.00
                                    </div>
                                    <div class="cart ms-4 ">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                </div>
                                <div class="lower d-flex justify-content-center">
                                    <small>
                                        <del class="text-danger ">$350.00</del>
                                    </small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <a href="single-product.html">
                        <div class="card">
                            <small class="text-danger text-center"> Ctg:Laptop</small>
                            <div class="card-header text-primary fw-bold text-center p-0">
                                <small>ASUS VIVO Book 9G HD</small>
                            </div>
                            <img src="./images/Products/laptop/asus6.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <div class="upper d-flex justify-content-center">
                                    <div class="price fs-3 text-info">
                                        $367.00
                                    </div>
                                    <div class="cart ms-4 ">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                </div>
                                <div class="lower d-flex justify-content-center">
                                    <small>
                                        <del class="text-danger ">$390.00</del>
                                    </small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
            </div>

        </section>
        <!--END Recommended -->
        <!-- <section class="featured">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 featured">
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                    </div>
                    <div class="col-md-3 onsale">
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                    </div>
                    <div class="col-md-3 topRated">
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                    </div>
                    <div class="col-md-3 bg-info">
                        <h1>Image</h1>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Newsletter -->
        <section id="newsletter" class="container-fluid newsletter py-2">
            <div class="row ">
                <div class="col-md-3 newsletter-title">

                    <p class="text-end mt-2">
                        <i class="fa-solid fa-paper-plane"></i>
                        Sign up to Newsletter
                    </p>
                </div>
                <div class="col-md-3 newsletter-titlle-two text-end mt-3">
                    <p class="small">...and receive <b>$20 coupon for first shopping</b></p>
                </div>
                <div class="col-md-6 newsletter-searchbar d-flex justify-content-end">
                    <form class="example w-100 mt-3" action="">
                        <input class="px-3" type="email" placeholder="Enter Your Mail" name="search">
                        <button type="submit" class=" text-light" id="subscribe">Subscribe</button>
                    </form>

                </div>
            </div>
        </section>



        <!-- Footer -->
        <footer class="top-footer text-center text-lg-start text-black">
            <!-- Grid container -->
            <div class="footer-content container p-4">
                <!--Grid row-->
                <div class="row my-4">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                        <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                            style="width: 150px; height: 150px;">
                            <img src="images/logo.png" height="130" alt="" loading="lazy" />
                        </div>

                        <p class="text-center">Home for all kind of electrical products and gadgates
                        </p>

                        <ul class="list-unstyled d-flex flex-row justify-content-center">
                            <li>
                                <a class=" px-2" href="#!">
                                    <img class="fac" src="./images/icons8-facebook-64.png" />
                                </a>
                            </li>
                            <li>
                                <a class=" px-2" href="#!">
                                    <img class="instra" src="./images/icons8-instagram.gif" />

                                </a>
                            </li>
                            <li>
                                <a class=" ps-2" href="#!">
                                    <img class="tube" src="./images/icons8-youtube-64.png" />

                                </a>
                            </li>
                        </ul>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">Pages</h5>

                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="index.html" class="text-black-50">Home</a>
                            </li>
                            <li class="mb-2">
                                <a href="products.html" class="text-black-50">Category</a>
                            </li>
                            <li class="mb-2">
                                <a href="products.html" class="text-black-50">Products</a>
                            </li>
                            <li class="mb-2">
                                <a href="about.html" class="text-black-50">About</a>
                            </li>
                            <li class="mb-2">
                                <a href="contact.html" class="text-black-50">Contact Us</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black-50">Help</a>
                            </li>
                            <li class="mb-2">
                                <a href="cart.html" class="text-black-50">Orders</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">Popular</h5>

                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="products.html" class="text-black-50">Smartphone and Tablets</a>
                            </li>
                            <li class="mb-2">
                                <a href="products.html" class="text-black-50">Laptop and PC</a>
                            </li>
                            <li class="mb-2">
                                <a href="products.html" class="text-black-50">Sound System</a>
                            </li>
                            <li class="mb-2">
                                <a href="products.html" class="text-black-50">Trending</a>
                            </li>
                            <li class="mb-2">
                                <a href="products.html" class="text-black-50">Best Deals</a>
                            </li>
                            <li class="mb-2">
                                <a href="products.html" class="text-black-50">Offers</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">Contact</h5>

                        <ul class="list-unstyled">
                            <li>
                                <p><i class="fa fa-map-marker-alt pe-2"></i>Warsaw, 57 Street, Poland</p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone pe-2"></i>+ 01 234 567 89</p>
                            </li>
                            <li>
                                <p><i class="fa fa-envelope pe-2 mb-0"></i>contact@example.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="container-fluid copyright text-center">
                © 2020 Copyright: <b>Encoded</b> . <small> All Rights Reserved</small>
                <a class="text-black-50" href="#"></a>

            </div>
            <!-- Copyright -->
        </footer>














        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

        </script>

        <script>
            (function () {
                const second = 1000,
                    minute = second * 60,
                    hour = minute * 60,
                    day = hour * 24;

                //I'm adding this section so I don't have to keep updating this pen every year :-)
                //remove this if you don't need it
                let today = new Date(),
                    dd = String(today.getDate()).padStart(2, "0"),
                    mm = String(today.getMonth() + 1).padStart(2, "0"),
                    yyyy = today.getFullYear(),
                    nextYear = yyyy + 1,
                    dayMonth = "08/30/",
                    birthday = dayMonth + yyyy;

                today = mm + "/" + dd + "/" + yyyy;

                //end

                const countDown = new Date(birthday).getTime(),
                    x = setInterval(function () {

                        const now = new Date().getTime(),
                            distance = countDown - now;

                        document.getElementById("days").innerText = Math.floor(distance / (day)),
                            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);


                        //seconds
                    }, 0)
            }());
        </script>
</body>

</html>