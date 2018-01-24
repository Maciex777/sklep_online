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
		<div class="container-fluid mb-5">
			<div class="row pt-2 text-center text-md-right fade-in-down">
				<div class="col-md-3 text-center">
					<a href="<?php echo ROOT_URL; ?>" class="logo"><img class="img-fluid pt-3" src="<?php echo ROOT_URL; ?>assets/img/logo.png" alt="logo"></a>
				</div>
				<div class="log-nav col-md-9 text-center text-md-right">
					<div class="col-md-9   float-left text-md-right">

						<?php if (isset($_SESSION['is_logged_in'])) { ?>
							<a href="<?php echo ROOT_URL; ?>" class="pr-2"><?php echo $_SESSION['user_data']['name'];?>, witaj!</a>

							<a href="<?php echo ROOT_URL; ?>users/logout" class="pr-2"><i class="fa fa-user"></i> Wyloguj się</a>

						<?php }else { ?>

							<a href="<?php echo ROOT_URL; ?>users/login" class="pr-2"><i class="fa fa-user"></i> Zaloguj się</a>

						<?php } ?>
						<!--  <a href="./register.html"><i class="fa fa-user-plus"></i> Utwórz konto</a> -->
					</div>
					<div class="input-group col-md-3 float-left text-md-right mt-3">
						<div class="input-group-addon" ><i class="fa fa-search"></i></div>
						<input class="form-control" type="search" placeholder="Szukaj produktów" id="search-field">
					</div>
				</div>

			</div>
			<div class="row fade-in-down">
				<div class="col-md-8">
					<nav>
						<ul class="nav text-center float-right">
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
								<!-- <li class="nav-item"><a href="./wyprzedaże.html" class="nav-link">Wyprzedaże</a></li> -->
								<li class="nav-item"><a href="<?php echo ROOT_URL; ?>home/about" class="nav-link">O sklepie</a></li>
								<li class="nav-item"><a href="<?php echo ROOT_URL; ?>home/kontakt" class="nav-link">Kontakt</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-4">
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
							<li><a class="dropdown-item" href="#">Zobacz koszyk</a></li>
							<li><a class="dropdown-item" href="#">Zamówienie</a></li>
						</ul>
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
		<script src="<?php echo ROOT_URL; ?>assets/popper.min.js"></script>
		<script src="<?php echo ROOT_URL; ?>assets/js/bootstrap.min.js"></script>
	</body>
	</html>
