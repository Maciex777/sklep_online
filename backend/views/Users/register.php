
<main>
  <div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto mt-4">
    <div class="block text-center">
      <h2 class="heading-font text-center mt-5">Utwórz konto</h2>
      <p class="text-center py-4"> Dla Twojej wygody uprościliśmy proces rejestracji w sklepie Halka. <br/>Podaj swoje dane a nasza obsługa klienta skontaktuje się z Tobą telefonicznie w przeciągu 24 godzin w celu założenia konta na Halka.com.pl</p>
      <form class="text-left clearfix mt-30" action="<?php echo ROOT_URL; ?>mailer/mail.php" method="post">
      <div class="row">
	  <div class="form-group col-12 col-md-6">
        <input type="text" class="form-control" name="name" placeholder="Imię" required="required">
      </div>
      <div class="form-group col-12 col-md-6">
        <input type="text" class="form-control" name="surname" placeholder="Nazwisko" required="required">
      </div>
      <div class="form-group col-12 col-md-6">
        <input type="email" class="form-control" name="mail" placeholder="E-mail" required="required">
      </div>
      <div class="form-group col-12 col-md-6">
        <input type="tel" name="phone" class="form-control"  placeholder="Numer telefonu" required="required">
      </div>
      </div>
      <button type="submit" class="btn my-button standard-buttons btn-lg px-5 py-2 mt-2" value="register">Wyślij zgłoszenie</button>
      </form>
      <p class="mt-4 text-left">Masz już konto ?<a href="<?php echo ROOT_URL; ?>users/login"> Zaloguj się</a></p>

    </div>
    </div>
  </div>
  </div>
</main> <!-- koniec głównej treści strony -->
