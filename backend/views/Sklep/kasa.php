	<!-- Główna treść strony -->
	<main>
		<div class="container">

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="checkout2.html">
                            <h1>Zamówienie</h1>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Imię</label>
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
                                            <input type="text" class="form-control" id="city" placeholder="Miasto">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Ulica</label>
                                            <input type="text" class="form-control" id="street" placeholder="Ulica">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mail-code">Kod pocztowy</label>
                                            <input type="text" class="form-control" id="mail-code" placeholder="Kod pocztowy">
                                        </div>
                                    <!-- </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="country">Kraj</label>
                                            <select class="form-control" id="country"></select>
                                        </div>
                                    </div> -->

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

                                </div>
                                <!-- /.row -->
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
          </div>
                <!-- /.col-md-9 -->

                <div class="col-md-4">

					<div class="card">
						<h5 class="card-header">Podsumowanie zamówienia</h5>
						<div class="card-body">
							<!--  -->
							<div>
								<span><strong>Kwota:</strong></span>

								<span>
									39.00 zł
								</span>
							</div>

							<div>
								<span><strong>Wysyłka:</strong></span>

								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Dowóz" checked>
										Dowóz 15 zł
									</label>
								</div>

								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Odbiór osobisty">
										Odbiór osobisty
									</label>
								</div>

							<div>
								<span><strong>Suma:</strong></span>

								<span>
									39.00 zł
								</span>
							</div>

							<div class="mt-3">
								<!-- Button -->
								<button>
									Kupuję i płacę
								</button>
							</div>
						</div>
					</div>
				</div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
	</main> <!-- koniec głównej treści strony -->
