<?

if (array_key_exists('messageFF', $_POST)) {

   $to = 'beauty@ivi-soft.com';

   $subject = 'Новая заявка IVI-Salon с '.$_SERVER['HTTP_REFERER'];

   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";

   $message = "Имя и фамилия: ".$_POST['nameFF']."\n\nНазвание компании: ".$_POST['companyFF']."\n\nКонтактная информация(email и тел): ".$_POST['contactFF']." ".$_POST['contacttelFF']."\nIP: ".$_SERVER['REMOTE_ADDR']."\n\nСообщение: ".$_POST['messageFF'];

   $headers = 'Content-type: text/plain; charset="utf-8"';

   $headers .= "MIME-Version: 1.0\r\n";

   $headers .= "Date: ". date('D, d M Y h:i:s CAT') ."\r\n";

   mail($to, $subject, $message, $headers);

   echo $_POST['nameFF'];

}

?>