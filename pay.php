<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="Keywords" content="вежливое такси, vezhlivoe taxi,онлайн оплата такси Балашиха, оплата такси Балашиха банковскими картами онлайн, такси Балашиха, цены на такси в аэропорт, цены на такси на вокзал, стоимость такси балашиха в аэропорт, стоимость такси балашиха, стоимость такси балашиха на вокзал, цены на такси балашиха в аэропорт, цены на такси балашиха, цены на такси балашиха на вокзал, корпоративное такси Балашиха по безналичному расчету, такси Балашиха оплата картами visa и mastercard онлайн, заказ такси Балашиха, такси Балашиха в аэропорт на вокзал.">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/media.css">
   <title>ТК Александр такси онлайн оплата</title>
   <meta name="description" content="ТК Александр такси онлайн оплата банковскими картами.">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
   <!-- WRAPPER -->
   <div class="wrapper clearfix">
      <header>
         <!-- TOPLINE -->
         <div class="top_images clearfix">
            <div class="logo">
               <a class="logo_img" href="index.html"><img src="img/Yandex-Google-Images/TK-Alexander-taxi.png" alt="logo"></a>
            </div>
            <div class="header_left__image">
               <img src="img/V_01_02.jpg" alt="img">
            </div>
         </div>
         <!-- TOPLINE END -->
         <div class="description">
            <img src="img/V_01_03.jpg" alt="descr">
         </div>
         <div class="bottom_line"></div>
      </header>
      <!-- PAY BODY -->
      <div class="box pay clearfix">
         <div class="head"><h4>ТК Александр такси онлайн оплата</h4>
            <div class="left"><img src="img/b_01_01.jpg" alt="left"></div>
            <div class="right"><img src="img/b_01_05.jpg" alt="right"></div>
         </div>
         <div class="pay_php">
            <?php










if(isset($_REQUEST['act']) && $_REQUEST['act']=='send_summ')
{


   $order='D-'.rand(1000000,99999999);
   $summ=$_REQUEST['summ']*100;
   $test_pay=file_get_contents('https://securepayments.sberbank.ru/payment/rest/register.do?amount='.$summ.'&language=ru&orderNumber='.$order.'&password=garag197&userName=vezhlivoetaxi-api&description='.$order.'&returnUrl=http://vezhlivoetaxi.com/pay.php?success='.$order);
   $dt=json_decode($test_pay);
   ?>
     <div style="padding:20px;">
     <center>
     Ваш номер заказа: <?php echo $order;?><br>
     <a href="<?php echo $dt->formUrl;?>">Перейти к оплате</a>
     </center>
     <p style="font-size:13px; text-align:left;">
     <span class="table3">•</span> Для оплаты услуг ТК Александр такси Вы будете перенаправлены на платежный шлюз ПАО "Сбербанк России" для ввода реквизитов Вашей карты. Пожалуйста, приготовьте Вашу пластиковую карту заранее. Соединение с платежным шлюзом и передача информации осуществляется в защищенном режиме с использованием протокола шифрования SSL.
<br><span class="table3">•</span>
В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa или MasterCard SecureCode для проведения платежа также может потребоваться ввод специального пароля. Способы и возможность получения паролей для совершения интернет-платежей Выможете уточнить в банке, выпустившем карту.
<br><span class="table3">•</span>
Настоящий сайт поддерживает 256-битное шифрование.     Конфиденциальность сообщаемой персональной информации обеспечивается ПАО "Сбербанк России".     Введенная информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ. Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платежных систем Visa Int. и MasterCardEurope Sprl.

     </p>
     </div>
     <?php


}else{

   if(isset($_REQUEST['success']) && isset($_REQUEST['orderId']))
   {


$info=$_REQUEST['success']." - ".date("d-m-Y H:i:s");

$fp = fopen('orders.txt', 'a');
fwrite($fp, $info."\r\n");
fclose($fp);


      ?>
         <div style="padding:20px;">
     <center>
     Спасибо, оплата прошла успешно. Номер Вашего заказа: <b><?php echo $_REQUEST['success'];?></b>
     </center>
     </div>
         <?php
   }else{
?>




   <form action="pay.php" method="post" style="padding:15px;">
     <input type="hidden" name="act" value="send_summ">
         Введите сумму для оплаты
     <input type="text" name="summ" value="">
     <input type="submit" value="Отправить">
     </form>


     <p class="pay_p" style="font-size:14px; text-align:center;">
     <span class="table3">•</span> Оплата услуг производится без комиссии и  происходит через авторизационный сервер процессингового центра ПАО "Сбербанк России" с использованием банковских карт Visa Int. и MasterCardEurope Sprl.
<br>
    <br><img src="img/SB.png" width="300" height="62" alt="" border="0"><br><img src="img/Card_3.png" width="300" height="88" alt="" border="0">
     </p>

<?php
   }
}
?>









         </div>
      </div>
      <div class="contacts">
         <p>+7 925 0202 505</p>
         <a href="mailto:TKAlexander@mail.ru?subject=TKAlexander">TKAlexander@mail.ru</a>
      </div>
      <!-- PAY BODY  END-->
      <!-- TRANSFER BOTTOM END -->
      <div class="bottom_line"></div>
      <div class="bottom_background"></div>
   </div> <!-- WRAPPER  END-->
   <div class="page_bottom_background">
      <div class="bottom_triangle"></div>
   </div>
   <a class="phone_link" href="tel:+79250202505"></a>
</body>
</html>
