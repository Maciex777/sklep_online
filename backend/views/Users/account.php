<main>

    <div class="container">
        <div class="col-md-12 mt-5 pt-4">
                        <h1 class="heading-font text-center">Moje konto</h1>
<h2>  <?php if (isset($_SESSION['response'])){
  echo $_SESSION['response'];
}?></h2>

		                <h3 class="mt-4">Dane osobiste</h3>
						<hr>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname" class="text-muted">Imię</label>
                                        <h3><?php echo $_SESSION['user_data']['name']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname" class="text-muted">Nazwisko</label>
                                        <h3><?php echo $_SESSION['user_data']['surname']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city" class="text-muted">Ulica</label>
                                        <h3><?php echo $viewmodel['street']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="street" class="text-muted">Dom</label>
                                        <h3><?php echo $viewmodel['building']; ?></h3>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="kod" class="text-muted">Mieszkanie</label>
                                        <h3><?php echo $viewmodel['appartment'];?></h3>
                                    </div>
                                </div>
                              </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city" class="text-muted">Miasto</label>
                                        <h3><?php echo $viewmodel['city']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="street" class="text-muted">Ulica</label>
                                        <h3><?php echo $viewmodel['street']; ?></h3>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="kod" class="text-muted">Kod pocztowy</label>
                                        <h3><?php echo $viewmodel['post_code'];?></h3>
                                    </div>
                                </div>
                              </div>
                            <!-- /.row -->

							<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone" class="text-muted">Telefon</label>
                                        <h3><?php echo $_SESSION['user_data']['phone_number']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="text-muted">E-mail</label>
                                        <h3><?php echo $_SESSION['user_data']['email']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">

                                </div>
                            </div>
                        </form>

                        <hr>
						 <h3 class="my-4">Zmień hasło</h3>

                        <form action="<?php echo ROOT_URL;?>users/account" method="post" class="mx-auto">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password_old">Stare hasło</label>
                                        <input type="password" class="form-control" id="password_old" name="old_password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password_1">Nowe hasło</label>
                                        <input type="password" class="form-control" id="password_1"
                                        name="new_password_1">
                                    </div>
                                </div>
							</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password_2">Powtórz nowe hasło</label>
                                        <input type="password" class="form-control" id="password_2" name="new_password_2">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="col-lg-6 text-center text-md-left">
							<!-- Button -->
								<button type="submit" name="submit" value="password_change" class="btn my-button standard-buttons btn-lg mt-3">Zmień hasło</button>
                            </div>
                        </form>
                </div>

    </div>
	</main> <!-- koniec głównej treści strony -->
