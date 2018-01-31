<!-- Główna treść strony -->
	<img id="contact-background" src="<?php echo ROOT_URL; ?>assets/img/kontakt-background.jpg" alt=""/>
	<main class="fade-in">
		<div class="container">
			<div class="row">
				<div class="pt-3 pb-2 mt-4 mb-2 ml-5">
					<h1 class="text-right"><strong>Skontaktuj się z nami</strong></h1>
				</div>
			</div>
			<div class="row contact-page">
			<div class="col-12 offset-lg-2 col-lg-4 mt-4 order-lg-2 ">
					<div class="card py-4">
						<div class="card-body mx-auto">
							<strong>Adres:</strong>
							<p class="texct-muted">
								ul. Przykładowa 1/4 <br>
								12-123 Warszawa
							</p>
							<strong>Telefon:</strong>
							<p class="texct-muted">+48 22 123 12 12</p>
							<strong>Email:</strong>
							<p class="">halkasklep@wp.pl</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 pt-4 text-center order-lg-1">
					<div class="card ">
					<h5 class="card-header p-4 contact-header">Potrzebujesz pomocy? Przyślij nam swój numer telefonu, zadzwonimy do Ciebie w przeciągu dziesięciu minut.</h5>
						<div class="card-body">
							<form action="./mail.php" method="POST">
								<div class="row">
									<div class="col-md-6 text-md-left">
										<div class="form-group">
											<label for="username" class="pt-1 pl-2">Imię</label>
											<input type="text" id="username" name="name" class="form-control" placeholder="Podaj imię " required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['name'];} ?>">
										</div>
									</div>
									<div class="col-md-6 text-md-left">
										<div class="form-group">
											<label for="username" class="pt-1 pl-2">Nazwisko</label>
											<input type="text" id="username" name="surname" class="form-control" placeholder="Podaj nazwisko" required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['surname'];} ?>">
										</div>
									</div>
								</div>
								<div class="row">							
									<div class="col-md-6 text-md-left">
										<div class="form-group">
											<label for="email" class="pt-1 pl-2">Email <span class="text-muted"> *</span></label>
											<input type="email" id="email" class="form-control" name="email" placeholder="Podaj email" required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['email'];} ?>">
										</div>
									</div>
									<div class="col-md-6 text-md-left">
										<div class="form-group">
											<label for="phone" class="pt-1 pl-2">Numer kontaktowy</label>
											<input type="tel" name="phone" id="phone" class="form-control" placeholder="Podaj numer telefonu" required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['phone_number'];} ?>" >
										</div>
									</div>
								</div>
								<div class="row">									
									<div class="col-md-12 text-md-left">
										<input hidden="hidden" type="text" name="form_type" value="kontakt">
										<div class="col-md-12 text-left"><input type="submit" name="submit" value="Wyślij wiadomość" class="btn my-button standard-buttons btn-block"></div>
									</div>
									<h6 class="text-muted text-left p-3">* Pole opcjonalne - podaj swój adres e-mail, a wyślemy Ci wiadomość weryfikującą nasz nr telefonu</h6>
								</div>
							</form>
						</div>
					</div> <!-- koniec card -->
				  </div>
			  </div> <!-- koniec row contact-page -->
		</div> <!-- koniec container -->
	</main> <!-- koniec głównej treści strony -->