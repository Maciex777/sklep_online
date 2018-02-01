<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halka - sklep z odzieżą dla seniorów</title>
	<meta name="description" content="Sklep on-line z odzieżą dla starszych osób.">
  <!-- STYLESHEET META -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin-ext" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/styles.css">
  <!-- JS META -->
  <script src="<?php echo ROOT_URL; ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>assets/js/main_script.js"></script>

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
						<img class="img-fluid" id="main-title" src="<?php echo ROOT_URL; ?>assets/img/title.png" alt="tytuł strony">
						<?php if (isset($_SESSION['is_logged_in'])) { ?>
							<a href="<?php echo ROOT_URL; ?>/users/account" class="pr-md-5 mr-md-5 pr-4 mr-4" id="welcome"><?php echo $_SESSION['user_data']['name'];?>, witaj!</a>

							<a href="<?php echo ROOT_URL; ?>users/logout" class="pr-2" id="logout"><i class="fa fa-user"></i> Wyloguj się</a>

						<?php }else { ?>

							<a href="<?php echo ROOT_URL; ?>users/login" class="pr-2" id="login"><i class="fa fa-user"></i> Zaloguj się</a>

						<?php } ?>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-3 dropdown-basket">
							<a class="basket float-right pr-xl-4" href="<?php echo ROOT_URL; ?>sklep/koszyk" title="koszyk">
								<span class="amount pr-4"><span id="cart_value"><?php if (isset($_SESSION['order_value'])) {echo $_SESSION['order_value'];}else {echo "0";} ?></span> zł</span>
								<span class="count"></span>
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
							</a>
							<div class="my-dropdown-menu p-3">
								<div id="mini-cart">
								</div>
								<hr />
								<div class="row">
									<div class="col-6">
										<p class="mb-0"><b>Suma:</b></p>
									</div>
									<div class="col-6">
										<p class="mb-0 text-right gold-color"><b><?php if (isset($_SESSION['order_value'])) {echo $_SESSION['order_value'];}else {echo "0";} ?> zł</b></p>
									</div>
								</div>
								<hr />
								<div class="row">
									<div class="col-12">
										<a href="<?php echo ROOT_URL;?>sklep/koszyk" class="btn my-button btn-block mb-2">Pokaż koszyk</a>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<a href="<?php echo ROOT_URL; ?>sklep/kasa" class="btn my-button btn-block">Zamówienie</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row col-md-12">
						<nav class="fixtop navbar navbar-expand-md navbar-light mx-auto mx-md-0">
							<div class="container">
        						<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
									<span class="navbar-toggler-icon"></span> MENU
								</button>
								<div class="navbar-collapse collapse" id="collapsibleNavbar">
									<ul class="nav navbar-nav">
									 <?php include("./views/menu.php"); ?>
									</ul>
								</div>
							</div> 	<!-- koniec containera -->
						</nav> 	<!-- koniec nawigacji-->
					</div>
				</div>
			</div>	<!-- koniec row -->
		</div>	<!-- koniec container-fluid-->
	</header> <!-- koniec nagłówka -->

		<?php require($view); ?>
		
<!-- Stopka -->		
<footer>
		<div class="container text-center text-md-left pt-5">
			<div class="row pt-4">
			  <div class="col-md-4 col-sm-12">
				<!--Column1-->
				<div class="footer-pad">
				  <h4>Kontakt</h4>
				  <address>
						<ul class="list-unstyled">
							<li>
								+48 22 123 12 12<br>
							</li>
							<li>
								halkasklep@wp.pl
							</li>
							<li>
								ul. Przykładowa 1/4 <br>
								12-123 Warszawa
							</li>
						</ul>
					</address>
				</div>
			  </div>
			  <div class="col-md-4 col-sm-12">
				<!--Column2-->
				<div class="footer-pad">
				  <h4>Katalog produktów</h4>
				  <ul class="list-unstyled">
					<li><a href="<?php echo ROOT_URL; ?>sklep/kategoria/9">Pani</a></li>
					<li><a href="<?php echo ROOT_URL; ?>sklep/kategoria/1">Pan</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-md-4 col-sm-12">
				<!--Column3-->
				<div class="footer-pad">
				  <h4>Informacje o sklepie</h4>
				  <ul class="list-unstyled">
					<li><a href="<?php echo ROOT_URL; ?>home/about">O nas</a></li>
					<li><a href="<?php echo ROOT_URL; ?>home/regulamin">Regulamin</a></li>
				  </ul>
				</div>
			  </div>
			</div>
			<hr>
			<div class="row">
				<div class="col-12 text-center pt-5">
				  <h5 class="halka"><strong>Halka - Sklep z Odzieżą dla seniora</strong></h5>
				</div>
				<div class="col-12 py-4 text-center">
					<p> <strong>&copy; Halka 2018</strong></p>
				</div>
			</div>			
	</div>
</footer>

<!-- Strzałka przekierowująca do góry -->
<button id="myBtn" title="Go to top"></button>

<script src="<?php echo ROOT_URL; ?>assets/js/popper.min.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/bootstrap.min.js"></script>

</body>
</html>
