<?php

require_once "phpmailer/phpmailer.php"; 

if (isset($_POST['name'])) {
  if (!empty($_POST['name'])){
  $name = strip_tags($_POST['name']);
  $nameFieldset = "Имя: ";
  }
}

if (isset($_POST['model'])) {
  if (!empty($_POST['model'])){
  $model = strip_tags($_POST['model']);
  $modelFieldset = "Модель: ";
  }
}

if (isset($_POST['phone'])) {
  if (!empty($_POST['phone'])){
  $phone = strip_tags($_POST['phone']);
  $phoneFieldset = "Телефон: ";
  }
}

if (isset($_POST['mail'])) {
  if (!empty($_POST['mail'])){
  $mail = strip_tags($_POST['mail']);
  $mailFieldset = "Почта: ";
  }
}

if (isset($_POST['value'])) {
  if (!empty($_POST['value'])){
  $value = strip_tags($_POST['value']);
  $valueFieldset = "Объем заказа: ";
  }
}

if (isset($_POST['theme'])) {
  if (!empty($_POST['theme'])){
  $theme = strip_tags($_POST['theme']);
  $themeFieldset = "Тема: ";
  }
}
$token = "662980747:AAGF-XvrHVx_i8j8z8HPz74owXfhsYNS_D0";
$chat_id = "-830626102";
$arr = array(

 
  $nameFieldset => $name,
 
  $phoneFieldset => $phone,
   $valueFieldset => $value,
  $mailFieldset => $mail
  
);
foreach($arr as $key => $value) {
  $txt .= $key.$value."%0A";
};

if (sendMail("sunmeecompany@gmail.com", "Заявка с сайта", "Имя:".$_POST['name'].". Телефон: ".$_POST['phone'] ,"From: mail@sunmee.uz \r\n"))
 {     echo " ";
} else {
    echo " ";
}

$response = file_get_contents('https://api.telegram.org/bot662980747:AAGF-XvrHVx_i8j8z8HPz74owXfhsYNS_D0/sendMessage?chat_id=-830626102&text='.$txt.'');

 ?>

<!DOCTYPE html><html lang="en"><head>     	<meta charset="UTF-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <link      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"      rel="stylesheet"      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"      crossorigin="anonymous"    />    <link      rel="stylesheet"      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="      crossorigin="anonymous"      referrerpolicy="no-referrer"    />    <link      rel="stylesheet"      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"    />    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&amp;subset=cyrillic" rel="stylesheet">    <link rel="stylesheet" href="css2/style.min.css" />        <link rel="stylesheet" href="css2/bootstrap.min.css" />        <title>Sunmee</title></head> <body>    <div class="all thank">    <div class="header-top"><img src="img/logo_book.png" alt="" class="logo" style="width: 200px;"></div>    <div class="thanks">      <div class="container">                 <div class="thanks-block">         <div class="row">          <div class="kitob col-md-5">            <img src="img/thank-you-main.png" class="first" alt="">           <!-- <img src="img/sale.png" class="sale" alt="">-->          </div>                    <div class="thank-you col-md-7">            <h1><span>Tabriklaymiz!</span><br>buyurtmangiz muvaffaqiyatli qabul qilindi!</h1>            <h2>Siz bilan tez orada bog`lanamiz !</h2>          </div>         </div>                    <div onclick="window.location.href = 'http://sunmee.uz/'" class="button">ORQAGA QAYTISH</div><br><br>                  </div>      </div>    </div>  </div>    <script src="js/jquery-3.3.1.min.js"></script>    <script src="js/owl.carousel.min.js"></script>    <script src="js/menu.js"></script>  </body><!--  <body>    	<div class="all thank">    		<div class="header-top"><img src="img/logo_book.png" alt="" class="logo"/></div>    <div class="thanks">      <div class="container">                 			<div class="thanks-block">         				<div class="row">          					<div class="kitob col-md-5">            						<img src="img/thank-you-main.png" class="first" alt=""/>            <img src="img/sale.png" class="sale" alt=""          					</div>  <center>					<div class="thank-you">            						<h1><span>Tabriklaymiz!</span><br/>siz ro`yxatdan muvaffaqiyatli o`tdingiz!</h1>            						<h2>Siz bilan tez orada bog`lanamiz !</h2>          					</div> </center>        				</div>                 <br>   					<center><button onclick="window.location.href = 'http://sunmee.uz/'" class="order_btn">ORQAGA QAYTISH</button></center><br><br>                  </div>      				</div>    			</div>  		</div>    		<script src="js/jquery-3.3.1.min.js"></script>    <script src="js/owl.carousel.min.js"></script>    <script src="js/menu.js"></script>  	</body></html> -->