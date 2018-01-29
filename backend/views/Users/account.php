<main>

    <div class="container">
        <div class="col-md-12 mt-5">
                        <h1>Moje konto</h1>
<h2>  <?php if (isset($_SESSION['response'])){
  echo $_SESSION['response'];
}?></h2>

		                <h3 class="mt-4">Dane osobiste</h3>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Imię</label>
                                        <h3><?php echo $_SESSION['user_data']['name']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Nazwisko</label>
                                        <h3><?php echo $_SESSION['user_data']['surname']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city">Ulica</label>
                                        <h3><?php echo $viewmodel['street']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="street">Dom</label>
                                        <h3><?php echo $viewmodel['building']; ?></h3>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="kod">Mieszkanie</label>
                                        <h3><?php echo $viewmodel['appartment'];?></h3>
                                    </div>
                                </div>
                              </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city">Miasto</label>
                                        <h3><?php echo $viewmodel['city']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="street">Ulica</label>
                                        <h3><?php echo $viewmodel['street']; ?></h3>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="kod">Kod pocztowy</label>
                                        <h3><?php echo $viewmodel['post_code'];?></h3>
                                    </div>
                                </div>
                              </div>
                            <!-- /.row -->

							<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Telefon</label>
                                        <h3><?php echo $_SESSION['user_data']['phone_number']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <h3><?php echo $_SESSION['user_data']['email']; ?></h3>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">

                                </div>
                            </div>
                        </form>

                        <hr>
						 <h3 class="mt-4">Zmień hasło</h3>

                        <form action="<?php echo ROOT_URL;?>users/account" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Stare hasło</label>
                                        <input type="password" class="form-control" id="password_old" name="old_password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_1">Nowe hasło</label>
                                        <input type="password" class="form-control" id="password_1"
                                        name="new_password_1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Powtórz nowe hasło</label>
                                        <input type="password" class="form-control" id="password_2" name="new_password_2">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="col-sm-12 text-center">
							<!-- Button -->
								<!-- <a href="" class="btn my-button standard-buttons btn-lg mt-3">Zapisz nowe hasło</a> -->
                <button type="submit" name="submit" value="password_change" class="btn my-button standard-buttons btn-lg mt-3">Zmień hasło</button>
                            </div>
                        </form>
                </div>

    </div>
	</main> <!-- koniec głównej treści strony -->
