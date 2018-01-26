
<main>
  <div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="block text-center">
      <h2 class="text-center">Utwórz konto</h2>
      <h4 class="text-center"> Dla Twojej wygody uprościliśmy proces rejestracji w sklepie Halka. Podaj swoje dane a nasza obsługa klienta skontaktuje się z Tobą telefonicznie w przeciągu 24 godzin w celu założenia konta na Halka.com.pl<h4>
      <form class="text-left clearfix mt-30" action="<?php echo ROOT_URL; ?>mailer/mail.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Imię" required="required">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="surname" placeholder="Nazwisko" required="required">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="mail" placeholder="E-mail" required="required">
      </div>
      <div class="form-group">
        <input type="tel" name="phone" class="form-control"  placeholder="Numer telefonu" required="required">
      </div>
      <button type="submit" class="btn btn-main text-center" value="register">Zarejestruj się</button>
      </form>
      <p class="mt-4 text-left">Masz już konto ?<a href="<?php echo ROOT_URL; ?>users/login"> Zaloguj się</a></p>

    </div>
    </div>
  </div>
  </div>
</main> <!-- koniec głównej treści strony -->
