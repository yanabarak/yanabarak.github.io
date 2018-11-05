<?php 
   include_once ('order_send.php');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Спасибо!</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1008976009234587');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1008976009234587&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code --> <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1521658821471420');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1521658821471420&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52495395-116"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-52495395-116');
      </script>
      <link type="text/css" rel="stylesheet" href="spasibo/css/default.css">
      <link type="text/css" rel="stylesheet" href="spasibo/css/style.css">
      <link type="text/css" rel="stylesheet" href="spasibo/css/custom-styles.css">
      <link href="spasibo/css/jquery.bxslider.css" rel="stylesheet" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="spasibo/css/cstm1.css">
      <script src ="spasibo/js/init.js"></script>
      <style>
         .spasibo {
         background: #1c1c1c;
         padding: 20px 0;
         }
         .promo{
         padding: 0px;
         margin: 0px;
         }
         .container {
         margin: 0 auto;
         position: relative;
         max-width: 960px;
         }
         .spasibo .title {
         color: #fff;
         font-size: 23px;
         letter-spacing: 2px;
         line-height: 32px;
         margin-bottom: 0px;
         text-align: center;
         }
         .spasibo .description {
         color: #fff;
         font-size: 18px;
         letter-spacing: 2px;
         line-height: 24px;
         text-align: center;
         }
         a.link_model.link.ajax_add_to_cart{
         color: #fff;
         border: none;
         font-size: 20px;
         background: #ff8882;
         background: -moz-linear-gradient(top, #ff8882 0%, #dd5d84 100%);
         background: -webkit-linear-gradient(top, #ff8882 0%, #dd5d84 100%);
         background: linear-gradient(to bottom, #ff8882 0%, #dd5d84 100%);
         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff8882', endColorstr='#dd5d84', GradientType=0);
         box-shadow: 0px 15px 38px 0px rgba(221, 93, 132, 0.42);
         margin-top: 10px;
         border-radius: 2px;
         width: 250px;
         }
         .three{
            margin-top: 60px;
         }
         @media screen and (max-width: 600px) { 
         .item.wide-item.promo_slide{
            height:150px;
         }}
      </style>
   </head>
   <body class="thanks">
      <div id="page">
      <div class="spasibo">
         <div class="container">
            <div class="title">СПАСИБО</div>
            <div class="description">
               ВАША ЗАЯВКА ПРИНЯТА, ОЖИДАЙТЕ,
               <span>НАШ МЕНЕДЖЕР ВАМ ПЕРЕЗВОНИТ</span>
               <p class="t2"><b style="font-weight: bold">Ваш телефон: <?php echo $phone; ?></b></p>
               <p class="t2">Проверте правильно ли указан номер телефона, если вы допустили ошибку перейдите на <a href="../index.php" style="color: #b7dbf9">главную страницу</a> и оформите заявку повторно</p>
            </div>
         </div>
      </div>
      <div class="popup">
         <div class="popup-overlay">
            <div class="popup-content">
               <a class="close">Close</a>
               <h2 class="white-zag">Оформить заказ</h2>
               <div class="popup-cont">
                  <form action="spasibo.php" method="post" onsubmit="return (ValidPhone1())">
                     <input type="hidden" name="product_name" id="product_name1" value="Furla, модель не выбрана">
                     <input type="hidden" name="product_price" id="product_price1" value="2499 грн" />
                     <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']; ?>" />
                     <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']; ?>" />
                     <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']; ?>" />
                     <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']; ?>" />
                     <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']; ?>" />
                     <div><input type="text" name="name" value="<?php echo $name; ?>"></div>
                     <div><input class="phone" type="tel" id="phone1" maxlength="13" name="phone" value="<?php echo $phone; ?>"></div>
                     <div><button class="animate "></button></div>
                     <input type="hidden" name="comment">
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="promo" id="promo">
         <div class="container">
          <div class="three">
            <div class="text promo_title">При покупке куртки, платки LOUIS VUITTON -39%</div>
            <div class="item wide-item promo_slide" style="width: 100%;min-height: 200px;">
               <p class="promo_price">590 грн <span class="old_price">990 грн</span></p>
               <ul class="bxslider">
                  <li><img src="spasibo/carousel/1-(1).jpg" /></li>
                  <li><img src="spasibo/carousel/1-(2).jpg" /></li>
                  <li><img src="spasibo/carousel/1-(3).jpg" /></li>
                  <li><img src="spasibo/carousel/1-(4).jpg" /></li>
                  <li><img src="spasibo/carousel/1-(5).jpg" /></li>
                  <li><img src="spasibo/carousel/1-(6).jpg" /></li>
               </ul>
            </div>
            <div style="clear:both;"></div>
            <a class="link_model link  ajax_add_to_cart" href="#order" onClick="buy_one_click1('Платок LOUIS VUITTON, страница Furla', '590грн.');">Заказать</a>
          </div>
    <div class="three">
            <div class="clearfix"></div>
            <div class="text promo_title">Сумка Prada -47%</div>
            <div class="item wide-item promo_slide" style="width: 100%;">
               <p class="promo_price">1190 грн <span class="old_price">2400 грн</span></p>
               <ul class="bxslider">
                  <li><img src="spasibo/carousel/bags (1).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (2).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (3).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (4).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (5).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (6).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (7).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (8).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (9).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (10).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (11).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (12).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (13).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (14).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (15).jpg" /></li>
                  <li><img src="spasibo/carousel/bags (16).jpg" /></li>
               </ul>
            </div>
            <div class=" time_promo" style="width: 100%;">
               <a class="link_model link  ajax_add_to_cart" href="#order" onClick="buy_one_click1('Сумка Prada, страница Furla', '1190грн.');">Заказать</a>
            </div>
            </div>
            <div class="clearfix"></div><div class="three">
            <div class="text promo_title">Сумка Hermes -47%</div>
            <div class="item wide-item promo_slide" style="width: 100%;">
               <p class="promo_price">1800 грн <span class="old_price">3600 грн</span></p>
               <ul class="bxslider">
                  <li><img src="spasibo/carousel/hermes (1).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (2).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (3).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (4).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (5).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (6).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (7).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (8).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (9).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (10).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (11).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (12).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (13).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (14).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (15).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (16).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (17).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (18).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (19).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (20).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (21).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (22).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (23).jpg" /></li>
                  <li><img src="spasibo/carousel/hermes (24).jpg" /></li>
               </ul>
            </div>
            <div class=" time_promo" style="width: 100%;">
               <a class="link_model link  ajax_add_to_cart" href="#order" onClick="buy_one_click1('Сумка Hermes, страница Furla', '1800грн.');">Заказать</a>
            </div>
            <div class="clearfix"></div>
          </div>
         </div>
         <div style="clear:both;"></div>
      </div>
      <script type="text/javascript">
         function buy_one_click1(name, price){ 
                     document.getElementById('product_name1').value = name;
                     document.getElementById('product_price1').value = price;
                 }
         
      </script>
      <script src="spasibo/js/jquery.bxslider.min.js"></script>
      <script src="spasibo/js/custom-functions.js"></script>
   </body>
</html>
