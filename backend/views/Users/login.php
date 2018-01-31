<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3 mx-auto">
                <div class="block">
                    <h2 class="heading-font text-center pt-5 pb-4">Zaloguj się do sklepu</h2>
                    <?php if ($viewmodel != ""){?>
                    <h5 class="text-center pt-4 pb-4" style="color:red;"><?php echo $viewmodel ?></h5>
                  <?php } ?>
                    <form class="text-left clearfix mt-50" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control"  placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Hasło">
                        </div>
                        <button type="submit" name="submit" class="btn my-button standard-buttons btn-main px-5 py-2 my-3" value="login">Zaloguj się</button>

                    </form>
                    <p class="mt-4">Jesteś nowy na tej stronie?<a href="<?php echo ROOT_URL; ?>users/register"> Utwórz konto</a></p>
                    <p><a href="<?php echo ROOT_URL; ?>forget-password"> Zapomniałeś hasła?</a></p>
                </div>
            </div>
        </div>
    </div>
	</main> <!-- koniec głównej treści strony -->
