<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halka</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/styles.css">
</head>
<body>

<header>
		<div class="container-fluid mb-2">
			<div class="row pt-2 text-center text-md-right fade-in-down">
				<div class="col-md-2 col-lg-3 text-center">
					<a href="<?php echo ROOT_URL; ?>" class="logo"><img class="img-fluid pt-3" src="<?php echo ROOT_URL; ?>assets/img/logo.png" alt="logo"></a>
			</div>
				<div class="col-md-10 col-lg-9">
					<div class="row log-nav col-md-12 text-center text-md-right pt-3">
						<div class="col-12 col-sm-6 col-md-8 col-lg-9 float-left text-md-right">
						<?php if (isset($_SESSION['is_logged_in'])) { ?>
							<a href="<?php echo ROOT_URL; ?>" class="pr-2"><?php echo $_SESSION['user_data']['name'];?>, witaj!</a>

							<a href="<?php echo ROOT_URL; ?>users/logout" class="pr-2"><i class="fa fa-user"></i> Wyloguj się</a>

						<?php }else { ?>

							<a href="<?php echo ROOT_URL; ?>users/login" class="pr-2"><i class="fa fa-user"></i> Zaloguj się</a>

						<?php } ?>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-3 dropdown-basket">
							<a class="basket float-right pr-5"  data-toggle="dropdown" href="<?php echo ROOT_URL;?>sklep/koszyk" title="koszyk">
								<span class="amount pr-4">0 zł</span>
								<span class="count"></span>
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Pozycja 1</a></li>
								<div class="dropdown-divider"></div>
								<li><a class="dropdown-item" href="#">Pozycja 2</a></li>
								<div class="dropdown-divider"></div>
								<li><a class="dropdown-item" href="#">Pozycja 3</a></li>
								<div class="dropdown-divider"></div>
								<li><a class="dropdown-item" href="#">Pozycja 4</a></li>
								<div class="dropdown-divider"></div>
								<li><p class="dropdown-item" href="#">Kwota:</p></li>
								<div class="dropdown-divider"></div>
								<li><a class="dropdown-item" href="./koszyk.html">Zobacz koszyk</a></li>
								<li><a class="dropdown-item" href="./checkout.html">Zamówienie</a></li>
							</ul>
						</div>
					</div>
					<div class="row col-md-12">
						<nav class="navbar navbar-expand-sm navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
								<span class="navbar-toggler-icon"></span> MENU
							</button>
							<div class="collapse navbar-collapse" id="collapsibleNavbar">
								<ul class="nav text-center flex-column flex-sm-row align-items-start">
									<li class="nav-item dropdown" >
										<a href="<?php echo ROOT_URL; ?>sklep/kategoria/9" class="nav-link dropdown-toggle" data-toggle="dropdown">Pani</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Pozycja 1</a></li>
												<ul>
													<li><a class="dropdown-item" href="#">Pozycja 2</a></li>
													<li><a class="dropdown-item" href="#">Pozycja 3</a></li>
													<li><a class="dropdown-item" href="#">Pozycja 4</a></li>
												</ul>
											<li><a class="dropdown-item" href="#">Pozycja 2</a></li>
											<li><a class="dropdown-item" href="#">Pozycja 3</a></li>
											<li><a class="dropdown-item" href="#">Pozycja 4</a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a href="<?php echo ROOT_URL; ?>sklep/kategoria/1" class="nav-link dropdown-toggle"  data-toggle="dropdown">Pan</a>
										<ul class="dropdown-menu">
											<li>
												<a class="dropdown-item" href="#">Pozycja 1</a></li>
												<ul>
													<li><a class="dropdown-item" href="#">Pozycja 2</a></li>
													<li><a class="dropdown-item" href="#">Pozycja 3</a></li>
													<li><a class="dropdown-item" href="#">Pozycja 4</a></li>
												</ul>
											<li><a class="dropdown-item" href="#">Pozycja 2</a></li>
											<li><a class="dropdown-item" href="#">Pozycja 3</a></li>
											<li><a class="dropdown-item" href="#">Pozycja 4</a></li>
										</ul>
									</li>
								<li class="nav-item"><a href="<?php echo ROOT_URL; ?>home/about" class="nav-link">O sklepie</a></li>
								<li class="nav-item"><a href="<?php echo ROOT_URL; ?>home/kontakt" class="nav-link">Kontakt</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header> <!-- koniec nagłówka -->

		<?php require($view); ?>


		<!-- Stopka -->
		<footer>
			<div class="container">
				<div class="row col-12 pb-3 pt-5 clearfix">
					<div class="col-12 text-right">
						<p>&copy; Halka 2018</p>
					</div>
				</div>
			</div>
		</footer> <!-- koniec stopki -->

		<script src="<?php echo ROOT_URL; ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo ROOT_URL; ?>assets/js/popper.min.js"></script>
		<script src="<?php echo ROOT_URL; ?>assets/js/bootstrap.min.js"></script>
	</body>
	</html>
