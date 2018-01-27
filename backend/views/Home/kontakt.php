<!-- Główna treść strony -->
	<main class="fade-in">
		<div class="container">
			<div class="row main_page pt-5 mt-5">
				<div class="col-md-4">
					<div class="card">
						<h3 class="card-header">Dane kontaktowe</h3>
						<div class="card-body">
							<strong>Adres:</strong>
							<p class="texct-muted">
								ul. Przykładowa 1/4 <br>
								12-123 Warszawa
							</p>
							<strong>Telefon:</strong>
							<p class="texct-muted">+48 22 123 12 12</p>
							<strong>Email:</strong>
							<p class="texct-muted">halkasklep@wp.pl</p>
						</div>
					</div>

				</div>
				<div class="col-md-8 pt-4">
					<form action="./mail.php" method="POST">
						<div class="row">
							<div class="col-md-5 text-md-right">
								<label for="username" class="pt-1">Imię</label>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<input type="text" id="username" name="name" class="form-control" placeholder="Podaj imię " required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['name'];} ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 text-md-right">
								<label for="username" class="pt-1">Nazwisko</label>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<input type="text" id="username" name="surname" class="form-control" placeholder="Podaj nazwisko" required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['surname'];} ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 text-md-right">
								<label for="email" class="pt-1">Email</label>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<input type="email" id="email" class="form-control" name="email" placeholder="Podaj email" required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['email'];} ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 text-md-right">
								<label for="phone" class="pt-1">Numer kontaktowy</label>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<input type="tel" name="phone" id="phone" class="form-control" placeholder="Podaj numer telefonu" required="required" value="<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){echo $_SESSION['user_data']['phone_number'];} ?>" >
								</div>
							</div>
						</div>
						<div class="row">
							<input hidden="hidden" type="text" name="form_type" value="kontakt">
							<div class="col-md-7 offset-md-5"><input type="submit" name="submit" value="Wyślij wiadomość" class="btn my-button standard-buttons btn-block"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main> <!-- koniec głównej treści strony -->
