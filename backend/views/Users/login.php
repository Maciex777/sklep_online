<!-- <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">User Login</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php// $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Email</label>
    		<input type="text" name="email" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
  </div>
</div> -->

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block">
                    <h2 class="text-center pt-4 pb-4">Zaloguj się do sklepu</h2>
                    <?php if ($viewmodel != ""){?>
                    <h6 class="text-center pt-4 pb-4"><?php echo $viewmodel ?></h6>
                  <?php } ?>
                    <form class="text-left clearfix mt-50" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control"  placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Hasło">
                        </div>
                        <button type="submit" name="submit" class="btn btn-main" value="login">Zaloguj się</button>

                    </form>
                    <p class="mt-4">Jesteś nowy na tej stronie?<a href="<?php echo ROOT_URL; ?>signin"> Utwórz konto</a></p>
                    <p><a href="<?php echo ROOT_URL; ?>forget-password"> Zapomniałeś hasła?</a></p>
                </div>
            </div>
        </div>
    </div>
	</main> <!-- koniec głównej treści strony -->
