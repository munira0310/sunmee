

<?php
require_once "phpmailer/phpmailer.php"; 
$mail = new PHPMailer;
$mail->Host = 'server1.ahost.uz';                    // Название сервера можете узнать в личном кабинете на странице управления услугой.
$mail->Username = 'info@sunmee.uz';          // Почтовый ящик (e-mail), созданный в cPanel -> Учетные записи почты.
$mail->Password = 'b=WWdfQO_n?v';                            // Пароль от созданного почтового ящика.
$fromName = 'Заказ с сайта http://sunmee.uz/';

// info@sunmee.uz
// b=WWdfQO_n?v

$name = $_POST['name'];
$phone = $_POST['tel'];
// $radio = $_POST['radio'];
require_once "phpmailer/phpmailer.php"; 
 $mail = new PHPMailer;
 $mail->CharSet = 'utf-8';

 $mail->isSMTP();
 $mail->Host = 'server1.ahost.uz';
 $mail->SMTPAuth = true;
 $mail->Username = 'info@sunmee.uz';
 $mail->Password = 'b=WWdfQO_n?v';
 $mail->SMTPSecure = 'ssl';
 $mail->Port = 465;
 $mail->setFrom('info@sunmee.uz');
  $mail->addAddress('sunmeecompany@gmail.com');
 $mail->isHTML(true);
 $mail->Subject = 'Заявка с сайта sunmee.uz';
 $mail->Body    = ' Имя: '.$name .' <br> Телефон: '.$phone.'<br>  Тип: '.'<br>';
 $mail->AltBody = '';

	 


	 
 if(!$mail->send()) {
    header('location: thank-you.html');
 }  else { 
     header('location: thank-you.html');
 }
