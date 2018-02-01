<!-- Główna treść strony -->
	<img id="contact-background" src="<?php echo ROOT_URL; ?>assets/img/kontakt-background.jpg" alt=""/>
	<main class="fade-in">
		<div class="container">
			<div class="row contact-page">
			<div class="col-12 col-md-4 offset-lg-2 col-lg-4 mt-5 pt-sm-5 order-md-2 ">
					<div class="pb-4 text-center">
							 <i class="fa fa-phone fa-2x pb-2"></i>
							<h5><strong>Telefon:</strong></h5>
							<p>+48 22 123 12 12</p>
							<i class="fa fa-envelope-o fa-2x pb-2"></i>
							<h5><strong>Email:</strong></h5>
							<p>halkasklep@wp.pl</p>
								<i class="fa fa-map-marker fa-2x pb-2" aria-hidden="true"></i>
							<h5><strong>Adres:</strong></h5>
							<p>
								ul. Przykładowa 1/4 <br>
								12-123 Warszawa
							</p>
					</div>
				</div>
				<div class="col-12 col-md-8 col-lg-6 pt-4 text-center order-md-1">
					<div class="col-12 pt-3 pb-2 mt-4 mb-2 ml-5 text-center">
						<h1 class="text-center heading-font">Skontaktuj się z nami</h1>
					</div>
					<p class="py-4 contact-header">Potrzebujesz pomocy? Przyślij nam swój numer telefonu, zadzwonimy do Ciebie w przeciągu dziesięciu minut.</p>
					<form action="../mailer/mail.php" method="POST">
						<div class="row">
							<div class="col-md-6 text-md-left">
								<div class="form-group">
									<label for="username" class="pt-1 pl-2 font-weight-bold">Imię</label>
									<input type="text" id="username" name="name" class="form-control" placeholder="Podaj imię " required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['name'];} ?>">
								</div>
							</div>
							<div class="col-md-6 text-md-left">
								<div class="form-group">
									<label for="username" class="pt-1 pl-2 font-weight-bold">Nazwisko</label>
									<input type="text" id="username" name="surname" class="form-control" placeholder="Podaj nazwisko" required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['surname'];} ?>">
								</div>
							</div>
						</div>
						<div class="row">							
							<div class="col-md-6 text-md-left">
								<div class="form-group">
									<label for="email" class="pt-1 pl-2 font-weight-bold">Email <span class="text-muted"> *</span></label>
									<input type="email" id="email" class="form-control" name="email" placeholder="Podaj email" required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['email'];} ?>">
								</div>
							</div>
							<div class="col-md-6 text-md-left">
								<div class="form-group">
									<label for="phone" class="pt-1 pl-2 font-weight-bold">Numer kontaktowy</label>
									<input type="tel" name="phone" id="phone" class="form-control" placeholder="Podaj numer telefonu" required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['phone_number'];} ?>" >
								</div>
							</div>
						</div>
						<div class="row">									
							<div class="col-md-12 text-md-left">
								<input hidden="hidden" type="text" name="form_type" value="kontakt">
								<div class="col-md-12 text-left"><input type="submit" name="submit" value="Wyślij wiadomość" class="btn my-button standard-buttons btn-block submit"></div>
							</div>
							<h6 class="text-muted text-left p-3">* Pole opcjonalne - podaj swój adres e-mail, a wyślemy Ci wiadomość weryfikującą przychodzące połączenie telefoniczne</h6>
						</div>
					</form>
				  </div>
			  </div> <!-- koniec row contact-page -->
		</div> <!-- koniec container -->
	</main> <!-- koniec głównej treści strony -->
