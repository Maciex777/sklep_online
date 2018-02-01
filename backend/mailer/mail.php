<?php
include ("../config.php");
require_once "./PEAR/Mail.php";
// Mail.php w tym samym katalogu oraz katalogi Net i Mail wymagane
class Maile {

  const HOST = "ssl://smtp.wp.pl";
  const PORT = "465";
  const USERNAME = "halkasklep@wp.pl";
  const PASSWORD = "halka678";
  const FROM = "Halka sklep  <halkasklep@wp.pl>";

  private $to;
  private $subject;
  private $message;

  function mailSend($to, $subject, $message){

    $this->to = $to;
    $this->subject = $subject;
    $this->message = $message;

    $this->headers = array ('From' => self::FROM,
    'To' => $this->to,
    'Subject' => $this->subject);

    $smtp = Mail::factory('smtp',
    array (
      'host' => self::HOST,
      'port' => self::PORT,
      'auth' => true,
      'debug' => false,
      'username' => self::USERNAME,
      'password' => self::PASSWORD));

      $mail = $smtp->send($this->to, $this->headers, $this->message);

      if (PEAR::isError($mail)) {

        echo("<br><br><br><div id=\"err\"><b>".$mail->getMessage()."</b></div>");

      } else {

        echo("wysłano ");

      }
    }
    function mailSend_copy($subject, $message){

      $this->to = self::USERNAME;
      $this->subject = $subject;
      $this->message = $message;

      $this->headers = array ('From' => self::FROM,
      'To' => $this->to,
      'Subject' => $this->subject);

      $smtp = Mail::factory('smtp',
      array (
        'host' => self::HOST,
        'port' => self::PORT,
        'auth' => true,
        'debug' => false,
        'username' => self::USERNAME,
        'password' => self::PASSWORD));

        $mail = $smtp->send($this->to, $this->headers, $this->message);

        if (PEAR::isError($mail)) {

          echo("<br><br><br><div id=\"err\"><b>".$mail->getMessage()."</b></div>");

        } else {

          echo("wysłano ");

        }
      }
    }

    if (isset($_POST['form_type']) && $_POST['form_type'] === "kontakt"){

      if (isset($_POST['submit']) && $_POST['submit'] === "Wyślij wiadomość"){

        if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {

          header('Location: '.ROOT_URL.'Home/kontakt');
          $_SESSION['error'] = "Mail Error";

        }

        if (!filter_input(INPUT_POST, "phone", FILTER_VALIDATE_INT)) {

          header('Location: '.ROOT_URL.'Home/kontakt');
          $_SESSION['error'] = "Phone Error";

        }

        $name_surname = filter_input(INPUT_POST, "name_surname" ,FILTER_SANITIZE_STRING);
        $name = substr($name_surname,0,strpos($name_surname, " "));
        $surname = substr($name_surname,strpos($name_surname, " ")+1,strlen($name_surname));
        $token_call = substr($name,0,3).rand(100,999)."k".substr($surname,0,3);

        $subject = "Sklep Halka - prośba kontaktu telefonicznego nr:".$token_call;
        $message  = "Dzień dobry ".$name.", \n";
        $message .= "ta wiadomość została wysłana do Ciebie automatycznie ze strony Halka.com.pl \n";
        $message .= "-------------\n";
        $message .= "Proszę spodziewać się kontaktu telefonicznego w ciągu najbliższych 24 godzin. Udzielimy odpowiedzi na wszystkie pytania na temat działalności naszej witryny.\n";
        $message .= "-------------\n";
        $message .= "Tożsamość naszego konsultanta można zweryfikować pytając o poniższe dane:\n\n";
        $message .= "---  Imię i nazwisko podane w formularzu: ".$name_surname."\n";
        $message .= "---  Adres e-mail podany w formularzu: ".$_POST['email']."\n";
        $message .= "---  Numer indentyfiacyjny rozmowy:".$token_call."\n\n";
        $message .= "Z wyrazami szacunku,\nHalka.com.pl";

        $kontakt = new Maile();

        $kontakt->mailSend($_POST['email'],$subject,$message);

        $subject = "Prośba kontaktu telefonicznego nr:".$token_call;
        $message  = "Użytkownik:  ".$name_surname." poprosił o konktakt telefoniczny! \n\n";
        $message .= "-----\n";
        $message .= "Masz 24 godziny na kontakt z tym użytkownikiem. Jeżeli okres oczekiwania na telefon będzie dłuższy poinformuj ".$name." o tym fakcie. \n";
        $message .= "-----\n";
        $message .= "Dane potrzebne do weryfikacji obu stron rozmowy!!!:\n\n";
        $message .= "--Imię i nazwisko podane w formularzu: ".$name_surname."\n\n";
        $message .= "--Adres e-mail podany w formularzu: ".$_POST['email']."\n\n";
        $message .= "--Numer indentyfiacyjny rozmowy:".$token_call."\n\n";

        $kontakt->mailSend_copy($subject,$message);


      }}

      if (isset($_POST['submit']) && $_POST['submit'] === "register") {
        if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {

          header('Location: '.ROOT_URL.'Users/register');
          $_SESSION['error'] = "Mail Error";

        }

        if (!filter_input(INPUT_POST, "phone", FILTER_VALIDATE_INT)) {

          header('Location: '.ROOT_URL.'Users/register');
          $_SESSION['error'] = "Phone Error";

        }

        $name = filter_input(INPUT_POST, "name" ,FILTER_SANITIZE_STRING);
        $surname = filter_input(INPUT_POST, "surname" ,FILTER_SANITIZE_STRING);
        $token_call = substr($name,0,3).rand(100,999)."r".substr($surname,0,3);

        $subject = "Sklep Halka - prośba rejestracji telefonicznej nr:".$token_call;
        $message  = "Dzień dobry ".$name.", \n";
        $message .= "ta wiadomość została wysłana do Ciebie automatycznie ze strony Halka.com.pl \n";
        $message .= "-------------\n";
        $message .= "Proszę spodziewać się kontaktu telefonicznego w ciągu najbliższych 24 godzin. Nasz pracownik zarejestruje Państwa w naszym sklepie.\n";
        $message .= "-------------\n";
        $message .= "Tożsamość naszego konsultanta można zweryfikować pytając o poniższe dane:\n\n";
        $message .= "---  Imię i nazwisko podane w formularzu: ".$name." ".$surname."\n";
        $message .= "---  Adres e-mail podany w formularzu: ".$_POST['mail']."\n";
        $message .= "---  Numer indentyfiacyjny rozmowy:".$token_call."\n\n";
        $message .= "Z wyrazami szacunku,\nHalka.com.pl";

        $kontakt = new Maile();

        $kontakt->mailSend($_POST['email'],$subject,$message);

        $subject = "Prośba rejestracji telefonicznej nr:".$token_call;
        $message  = "Użytkownik:  ".$name." ".$surname." poprosił o rejestracje telefoniczną! \n\n";
        $message .= "-----\n";
        $message .= "Masz 24 godziny na kontakt z tym użytkownikiem. Jeżeli okres oczekiwania na telefon będzie dłuższy poinformuj ".$name." o tym fakcie. \n";
        $message .= "-----\n";
        $message .= "Dane potrzebne do weryfikacji obu stron rozmowy!!!:\n\n";
        $message .= "--Imię i nazwisko podane w formularzu: ".$name_surname."\n\n";
        $message .= "--Adres e-mail podany w formularzu: ".$_POST['email']."\n\n";
        $message .= "--Numer indentyfiacyjny rozmowy:".$token_call."\n\n";

        $kontakt->mailSend_copy($subject,$message);

      }
      header('Location: '.ROOT_URL);
      ?>
