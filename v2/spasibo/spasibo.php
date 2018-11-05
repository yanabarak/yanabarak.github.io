<?php 
 include_once ('order_send.php');
?>
<!DOCTYPE html>
<html>
<head><title>Спасибо!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="spasibo/css/default.css">
    <link type="text/css" rel="stylesheet" href="spasibo/css/style.css">
<link type="text/css" rel="stylesheet" href="spasibo/css/custom-styles.css">
<link href="spasibo/css/jquery.bxslider.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="spasibo/css/cstm1.css">
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
    
    
<style>
.spasibo {
    background: #1c1c1c;
    padding: 20px 0;
    height: 100vh;vertical-align: middle;  
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
    margin-bottom: 25px;
    text-align: center;
}
.spasibo .description {
    color: #fff;
    font-size: 18px;
    letter-spacing: 2px;
    line-height: 24px;
    text-align: center;
}
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
            <p class="t2">Проверте правильно ли указан номер телефона, если вы допустили ошибку перейдите на <a href="http://furbags.wbags.in.ua/v1/" style="color: #b7dbf9">главную страницу</a> и оформите заявку повторно</p>
            </div>
        </div>
    </div>
</div>

<script src="spasibo/js/jquery.bxslider.min.js"></script>
<script src="spasibo/js/custom-functions.js"></script>
    </body>
</html>
         