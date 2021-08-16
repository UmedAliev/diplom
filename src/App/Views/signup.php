<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="src/App/Resources/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="src/App/Resources/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="src/App/Resources/css/owl.carousel.min.css">
    <link rel="stylesheet" href="src/App/Resources/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="src/App/Resources/css/nouislider.min.css">
    <link rel="stylesheet" href="src/App/Resources/css/ionicons.min.css">
    <link rel="stylesheet" href="src/App/Resources/css/plyr.css">
    <link rel="stylesheet" href="src/App/Resources/css/photoswipe.css">
    <link rel="stylesheet" href="src/App/Resources/css/default-skin.css">
    <link rel="stylesheet" href="src/App/Resources/css/main.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="src/App/Views/icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="../Resources/icon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="72x72" href="src/App/Views/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="src/App/Views/icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="src/App/Views/icon/apple-touch-icon-144x144.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>kinoman – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">

<div class="sign section--bg" data-bg="img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- registration form -->
                    <form action="/registration" method="post" class="sign__form">
                        <a href="index.php" class="sign__logo">
                            <img src="../Resources/img/logo.svg" alt="">
                        </a>

                        <div class="sign__group">
                            <!--                                <label for="name" style="color: white" >NAME:</label><br>-->
                            <input type="text" name="name" id="name" class="sign__input" placeholder="Name">
                        </div>

                        <div class="sign__group">
                            <!--                                <label for="name" style="color: white" >EMAIL:</label><br>-->
                            <input type="text" class="sign__input" name="email" placeholder="Email">
                        </div>

                        <div class="sign__group">
                            <!--                                <label for="name" style="color: white" >PASSWORD:</label><br>-->
                            <input type="password" class="sign__input" name="password" placeholder="Password">
                        </div>

                        <div class="sign__group">
                            <!--                                <label for="name" style="color: white" >RETRY PASSWORD:</label><br>-->
                            <input type="password" name="retry_password" class="sign__input"
                                   placeholder="RETRY PASSWORD:">
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox" checked="checked">
                            <label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
                        </div>

                        <button class="sign__btn" type="submit">Sign up</button>

                        <span class="sign__text">Already have an account? <a href="signin.php">Sign in!</a></span>
                    </form>
                    <!-- registration form -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script src="src/App/Views/js/jquery-3.3.1.min.js"></script>
<script src="src/App/Views/js/bootstrap.bundle.min.js"></script>
<script src="src/App/Views/js/owl.carousel.min.js"></script>
<script src="src/App/Views/js/jquery.mousewheel.min.js"></script>
<script src="src/App/Views/js/jquery.mCustomScrollbar.min.js"></script>
<script src="src/App/Views/js/wNumb.js"></script>
<script src="src/App/Views/js/nouislider.min.js"></script>
<script src="src/App/Views/js/plyr.min.js"></script>
<script src="src/App/Views/js/jquery.morelines.min.js"></script>
<script src="src/App/Views/js/photoswipe.min.js"></script>
<script src="src/App/Views/js/photoswipe-ui-default.min.js"></script>
<script src="src/App/Views/js/main.js"></script>
</body>

</html>