<?php
session_start();
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
<?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
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
                    <i class="fa-solid fa-user"></i> <a href="login.html" id="login">Register or Sign in</a>
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
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
                                    <li><a class="dropdown-item" href="products.html">Smartphones</a></li>
                                    <li><a class="dropdown-item" href="products.html">Tablets</a></li>
                                    <li><a class="dropdown-item" href="products.html">Headphones</a></li>
                                    <li><a class="dropdown-item" href="products.html">Laptop</a></li>
                                    <li><a class="dropdown-item" href="products.html">iPad</a></li>
                                    <li><a class="dropdown-item" href="products.html">Smart Watch</a></li>
                                    <li><a class="dropdown-item" href="products.html">Bluetooth Headphone</a></li>
                                    <li><a class="dropdown-item" href="products.html">Gamming</a></li>
                                    <li><a class="dropdown-item" href="products.html">Keyboard</a></li>
                                    <li><a class="dropdown-item" href="products.html">Mouse</a></li>
                                    <li><a class="dropdown-item" href="products.html">Speaker</a></li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="products.html">Browse All Products</a></li>
                                </ul>
                            </li>
                            <li class="nav-item px-2">
                                <a href="products.html" type="button"
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

        <!-- Login Form -->

        <div class="container mb-4">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card shadow">
                        <div class="card-title text-center border-bottom">
                            <h2 class="p-3">Login</h2>
                        </div>
                        <div class="card-body">
                        <form action="./../admin_login/admin_login.php" class="login" method="POST">

                                <div class="mb-4">
                                    <label for="username" class="form-label">Username/Email</label>
                                    <input name="username" type="text" class="form-control" placeholder="Email Address | UserName" required />

                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input name="password" class="form-control" type="password" placeholder="Password" required />

                                </div>
                                <div class="mb-4">
                                    <input type="checkbox" class="form-check-input" id="remember" />
                                    <label for="remember" class="form-label">Remember Me</label>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" style="background-color: #e91e63;"
                                    value="Login"  class="btn text-light main-bg">Login</button>
                                </div>
                                <div class="already">
                                    <p class="small mt-1">Not Registered?
                                        <a href="register.html">Register Now</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>



<hr>
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
</body>

</html>