<?php
/*
require "vendor/autoload.php";

use Formapro\TelegramBot\Bot;
use Formapro\TelegramBot\SendMessage;

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$radio = $_POST['radio'];


//$bot = new Bot("1099245785:AAFzYb3Pnwv84gATg9KYULnMXTxVGKaNEck");


$msg = "Имя: " .$name . " / Телефон: " . $phone . " / Тип: " . $radio;


$myfile = fopen("zayavka/".$name.".txt", "w") or die("Unable to open file!");
$txt = $msg;
fwrite($myfile, $txt);
$txt = $msg;
fwrite($myfile, $txt);
fclose($myfile);

/*$bot->sendMessage(new SendMessage(
    -1001471909787,
    $msg
));
*/
/*
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// send email

	$msg = wordwrap($msg,70);

    mail('buzbekistan@yandex.com','Заказ с сайта http://booknomy.uz/' ,$msg, $headers);


// use wordwrap() if lines are longer than 70 characters

header("Location: thank-you.html");
exit();
*/
?>



<?php
require_once "phpmailer/phpmailer.php"; 
$mail = new PHPMailer;
$mail->Host = 'server2.ahost.uz';                    // Название сервера можете узнать в личном кабинете на странице управления услугой.
$mail->Username = 'info@booknomy.uz';          // Почтовый ящик (e-mail), созданный в cPanel -> Учетные записи почты.
$mail->Password = '%S)9]N;Qsjik';                            // Пароль от созданного почтового ящика.
$fromName = 'Заказ с сайта http://sunmee.uz/';       


$name_2 = $_POST['user_name_2'];
$phone_2 = $_POST['user_phone_2'];
$radio3 = $_POST['radio3'];
$radio4 = $_POST['radio4'];
$radio5 = $_POST['radio5'];
$radio6 = $_POST['radio6'];
require_once "phpmailer/phpmailer.php"; 
 $mail = new PHPMailer;
 $mail->CharSet = 'utf-8';

 $mail->isSMTP();
 $mail->Host = 'server2.ahost.uz';
 $mail->SMTPAuth = true;
 $mail->Username = 'info@booknomy.uz';
 $mail->Password = '%S)9]N;Qsjik';
 $mail->SMTPSecure = 'ssl';
 $mail->Port = 465;
 $mail->setFrom('info@booknomy.uz');
 $mail->addAddress('sunmeecompany@gmail.com');
  $mail->addAddress('booknomyuz20@gmail.com');
 $mail->isHTML(true);
 $mail->Subject = 'Заявка с сайта booknomy.uz';
 $mail->Body    = ' Имя: '.$name_2 .' <br> Телефон: '.$phone_2.'<br>  Тип: '.'<br>'. $radio3 ."  ".$radio4."   ".$radio5."   ".$radio6;
 $mail->AltBody = '';

	 




require_once"bd.php";




if($name_2 !="" ){
    


            $url = "http://185.200.242.53/getdata.php?name=$name_2&phone=$phone_2&radio=$radio3&radio1=$radio4&radio2=$radio5&radio3=$radio6";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, preg_replace("/ /", "%20", $url));
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
            $data = curl_exec($ch);
            curl_close($ch);


}
  
	 
 if(!$mail->send()) {
    header('location: thank-you.html');
 }  else { 
     header('location: thank-you.html');
 }
