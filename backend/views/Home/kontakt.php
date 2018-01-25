<!-- Główna treść strony -->
	<main class="fade-in">
		<div class="container">
			<div class="row">
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
							<p class="texct-muted">adres@email.com</p>
						</div>
					</div>

				</div>
				<div class="col-md-8 pt-4">
					<form action="./index.html" method="POST">
						<div class="row">
							<div class="col-md-5 text-md-right">
								<label for="username" class="pt-1">Imię i nazwisko</label>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<input type="text" id="username" class="form-control" placeholder="Podaj imię i nazwisko" required="required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 text-md-right">
								<label for="email" class="pt-1">Email</label>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<input type="email" id="email" class="form-control" placeholder="Podaj email" required="required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 text-md-right">
								<label for="email" class="pt-1">Treść</label>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<textarea class="form-control" placeholder="Podaj treść wiadomości" required="required"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7 offset-md-5"><input type="submit" name="submit" value="Wyślij wiadomość" class="btn btn-outline-info btn-block"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main> <!-- koniec głównej treści strony -->
