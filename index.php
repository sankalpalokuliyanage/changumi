<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    <link href="img/logo.png" rel="apple-touch-icon">
    
    <title>Changumi Online Store</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    

<style>
    * {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        letter-spacing: 0.03em;
    }

    .container-fluid {
        max-width: 1600px;
        padding: 0 15px;
    }

    .main-logo {
        width: 150px;
    }

    #topbar {
        background: black;
        padding: 10px;
    }

    .support-box {
        color: white;
    }

    a {
        color: #fff;
        text-decoration: none;
    }

    .right-element {
        text-align: right;
        margin-right: 0;
    }

    .right-element .for-buy {
        margin-right: 20px;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
        #topbar {
            padding: 20px;
        }

        .main-logo {
            width: 100px;
        }

        .search-bar {
            display: none;
        }

        .support-box {
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        #topbar {
            padding: 15px;
        }

        .support-box {
            display: none;
        }

        .main-logo {
            width: 80px;
        }

        .right-element {
            flex-direction: column;
            align-items: flex-end;
        }

        .navbar-nav {
            flex-direction: column;
            text-align: center;
        }

        .menu-list {
            gap: 1rem;
        }
    }
</style>


<header>
    <div class="container-fluid">
        <div id="topbar" class="row py-3 border-bottom align-items-center">
            <div class="col-6 col-sm-4 text-center text-sm-start">
                <div class="main-logo">
                    <a href="index.html">
                        <img src="img/changumiicon.png" alt="logo" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 d-none d-lg-flex">
                <div class="search-bar row bg-light p-2 rounded-4 w-100">
                    <form id="search-form" class="d-flex w-100" action="index.html" method="post">
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for cosmetics and kitchen products">
                        <button type="submit" class="btn btn-light p-0">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-6 col-sm-8 col-lg-4 d-flex justify-content-end gap-3 align-items-center mt-3 mt-sm-0">
                <div class="support-box text-end d-none d-md-block">
                    <span class="fs-6 text-white">For Support?</span>
                    <h5 class="mb-0">+82 10 4832 0845</h5>
                </div>

                <div class="right-element">
                    <a href="#" class="user-account for-buy"><i class="fas fa-user"></i> <span>Account</span></a>
                    <a href="#" class="cart for-buy"><i class="fas fa-shopping-cart"></i> <span>Cart</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-3">
            <div class="d-flex justify-content-center align-items-center">
                <nav class="main-menu navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header justify-content-center">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body">
                            <ul class="navbar-nav menu-list list-unstyled d-flex flex-column flex-lg-row gap-3 gap-md-4 mb-0">
                                <li class="nav-item">
                                    <a href="#luxury" class="nav-link">Luxury Cosmetics</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#norcos" class="nav-link">Cosmetics</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Kitc" class="nav-link">Kitchen</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#blog" class="nav-link">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>




    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>