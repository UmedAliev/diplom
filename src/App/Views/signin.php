<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="src/App/Views/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="src/App/Views/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="src/App/Views/css/owl.carousel.min.css">
	<link rel="stylesheet" href="src/App/Views/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="src/App/Views/css/nouislider.min.css">
	<link rel="stylesheet" href="src/App/Views/css/ionicons.min.css">
	<link rel="stylesheet" href="src/App/Views/css/plyr.css">
	<link rel="stylesheet" href="src/App/Views/css/photoswipe.css">
	<link rel="stylesheet" href="src/App/Views/css/default-skin.css">
	<link rel="stylesheet" href="src/App/Views/css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="src/App/Views/icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="src/App/Views/icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="src/App/Views/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="src/App/Views/icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="src/App/Views/icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">

	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="/authorization" method="post" class="sign__form">
							<a href="index.php" class="sign__logo">
								<img src="img/logo.svg" alt="">
							</a>

							<div class="sign__group">
								<input type="text" name="email" id="email" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" name="password" id="password" class="sign__input" placeholder="Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
							
							<button class="sign__btn" id="signin" type="submit">Sign in</button>

							<span class="sign__text">Don't have an account? <a href="/signup">Sign up!</a></span>

							<span class="sign__text"><a href="#">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
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
	<script src="src/App/Views/js/script.js"></script>
</body>

</html>