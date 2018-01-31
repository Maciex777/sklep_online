<!-- Główna treść strony -->
<main>
  <div class="container">
	<div class="row">

              <div class="col-12 col-lg-8 mt-4 pt-5">
				  <form method="post" action="checkout2.html">
					  <h1 class="heading-font text-center pb-4">Zamówienie</h1>

					  <div class="content pt-3">
						  <div class="row">
							  <div class="col-sm-6">
								  <div class="form-group">
									  <label  for="firstname">Imię</label>
									  <input type="text" class="form-control" id="firstname" value="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $_SESSION['user_data']['name'];}?>" placeholder="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										  echo $_SESSION['user_data']['name'];}else{echo "Imię";}?>">
								  </div>
							  </div>
							  <div class="col-sm-6">
								  <div class="form-group">
									  <label for="lastname">Nazwisko</label>
									  <input type="text" class="form-control" id="lastname" value="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $_SESSION['user_data']['surname'];}?>" placeholder="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										  echo $_SESSION['user_data']['surname'];}else{echo "Nazwisko";}?>">
								  </div>
							  </div>
						  </div>
						  <!-- /.row -->

						  <div class="row">
							  <div class="col-sm-6">
								  <div class="form-group">
									  <label for="city">Miasto</label>
									  <input type="text" class="form-control" id="city" value="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $viewmodel['city'];}?>" placeholder="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $viewmodel['city'];} else {echo "Miasto";}?>">
								  </div>
							  </div>
							  <div class="col-sm-6">
								  <div class="form-group">
									  <label for="street">Ulica</label>
									  <input type="text" class="form-control" id="street" value="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $viewmodel['street'];}?>" placeholder="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $viewmodel['street'];} else {echo "Ulica";}?>">
								  </div>
							  </div>
						  </div>
						  <!-- /.row -->

						  <div class="row">
							<div class="col-sm-4">
							  <div class="form-group">
								<label for="city">Numer domu</label>
								<input type="text" class="form-control" id="city" value="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
								echo $viewmodel['building'];}?>" placeholder="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
								echo $viewmodel['building'];} else {echo "Numer domu";}?>">
							  </div>
							</div>
							<div class="col-sm-4">
							  <div class="form-group">
								<label for="street">Numer mieszkania</label>
								<input type="text" class="form-control" id="street" value="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
								echo $viewmodel['appartment'];}?>" placeholder="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
								echo $viewmodel['appartment'];} else {echo "Numer mieszkania";}?>">
							  </div>
							</div>

							  <div class="col-sm-4">
								  <div class="form-group">
									  <label for="mail-code">Kod pocztowy</label>
									  <input type="text" class="form-control" id="mail-code" value="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $viewmodel['post_code'];}?>" placeholder="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $viewmodel['post_code'];} else {echo "Kod pocztowy";}?>">
								  </div>
							  </div>
						  </div>
						  <!-- /.row -->
						  
						  <div class="row">
							  <div class="col-sm-6">
								  <div class="form-group">
									  <label for="phone">Numer telefonu</label>
									  <input type="text" class="form-control" id="phone" value="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $_SESSION['user_data']['phone_number'];}?>" placeholder="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										  echo $_SESSION['user_data']['phone_number'];}else{echo "Numer telefonu";}?>">
								  </div>
							  </div>
							  <div class="col-sm-6">
								  <div class="form-group">
									  <label for="email">E-mail</label>
									  <input type="text" class="form-control" id="email" value="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										echo $_SESSION['user_data']['email'];}?>" placeholder="<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ){
										  echo $_SESSION['user_data']['email'];}else{echo "E-mail";}?>">
								  </div>
							  </div>

						  </div>	 <!-- /.row -->
					  </div>
				  </form>
			</div>
              <!-- /.col-md-9 -->

			<div class="col-12 col-lg-4 mt-4 mt-lg-5 pt-lg-5">
				<div class="card">
				  <h5 class="card-header">Podsumowanie zamówienia</h5>
				  <div class="card-body">
					<!--  -->
					<!-- <div>
					  <span><strong>Kwota:</strong></span>

					  <span>
						39.00 zł
					  </span>
					</div> -->

					<div>
					  <span><strong>Wysyłka:</strong></span>
					<hr>
					  <div class="form-check">
						<label class="form-check-label">
						  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Dowóz" checked>
						  Dowóz
						</label>
					  </div>

					  <div class="form-check">
						<label class="form-check-label">
						  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Odbiór osobisty">
						  Odbiór osobisty
						</label>
					  </div>
					<hr>
					<div>
					  <span><strong>Suma:</strong></span>

					  <span>
						<?php echo $_SESSION['order_value']; ?> zł
					  </span>
					</div>

					<div class="mt-3">
					  <!-- Button -->
					<button type="button" class="btn my-button standard-buttons btn-lg px-5 py-2 mt-4" name="dodaj" id = "add_to_cart" >Kupuję i płacę</button>
					</div>
				  </div>
				</div>
			  </div>
			</div> <!-- /.col-md-3 -->
	  </div><!-- / row -->
  </div>	<!-- /.container -->
</main> <!-- koniec głównej treści strony -->
