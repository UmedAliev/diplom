<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/plyr.css">
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/default-skin.css">
    <link rel="stylesheet" type="text/css" href="src/App/Resources/css/main.css">
    <link rel="icon" type="image/png" href="src/App/Resources/icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="src/App/Resources/icon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="72x72" href="src/App/Resources/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="src/App/Resources/icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="src/App/Resources/icon/apple-touch-icon-144x144.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>Kinoman – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">

<!-- header -->
<header class="header">
    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- header logo -->
                        <a href="/" class="header__logo" style="color: #AAAAAA">
                            Kinoman

                        </a>
                        <!-- end header logo -->

                        <!-- header nav -->
                        <li class="header__nav-item">
                            <a href="/" class="header__nav-link"> Home</a>
                        </li>


                        </li>
                        <!-- end dropdown -->

                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a href="catalog" class="header__nav-link"> Catalog</a>
                        </li>
                        <!-- end dropdown -->

                        <li class="header__nav-item">
                            <a href="price" class="header__nav-link">Pricing Plan</a>
                        </li>

                        <li class="header__nav-item">
                            <a href="help" class="header__nav-link">Help</a>
                        </li>

                        <!-- dropdown -->
                        <li class="dropdown header__nav-item">
                            <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#"
                               role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false"><i class="icon ion-ios-more"></i></a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
                                <li><a href="/about">About</a></li>
                                <li><a href="/signin">Sign In</a></li>
                                <li><a href="/signup">Sign Up</a></li>
                                <li><a href="/fillFormMovie">Upload movie</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown -->
                        </ul>
                        <!-- end header nav -->

                        <!-- header auth -->
                        <div class="header__auth">
                            <button class="header__search-btn" type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>
                            <?php
                            session_start();
                            // session_destroy();
                            if (!$_SESSION["user_id"]) {
                                ?>
                                <a href="/signin" class="header__sign-in">
                                    <i class="icon ion-ios-log-in"></i>
                                    <span>sign in</span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="/profile" class="header__sign-in">
                                    <i class="icon ion-ios-log-in"></i>
                                    <span>profile</span>
                                </a>

                                <?php
                            }
                            ?>


                        </div>
                        <!-- end header auth -->

                        <!-- header menu btn -->
                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end header menu btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header search -->
    <form action="#" class="header__search">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__search-content">
                        <input type="text" placeholder="Search for a movie, TV Series that you are looking for">

                        <button type="button">search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- end header search -->
</header>
<!-- end header -->

<!-- home -->
<section class="home">
    <!-- home bg -->
    <div class="owl-carousel home__bg">
        <div class="item home__cover" data-bg="src/App/Views/img/home/home__bg.jpg"></div>
        <div class="item home__cover" data-bg="src/App/Views/img/home/home__bg2.jpg"></div>
        <div class="item home__cover" data-bg="src/App/Views/img/home/home__bg3.jpg"></div>
        <div class="item home__cover" data-bg="src/App/Views/img/home/home__bg4.jpg"></div>
    </div>
    <!-- end home bg -->