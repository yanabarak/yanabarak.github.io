<?php
header("Content-type: text/html; charset=utf-8");
$to1 = 'yanabarak94@gmail.com';

$name = $_POST['name'];
$phone = $_POST['phone'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$model = $_POST['sex'];
$size = $_POST['list_size'];
$color = $_POST['list_color'];
$utm_source = $_POST['utm_source'];
$utm_campaign = $_POST['utm_campaign'];
$utm_medium = $_POST['utm_medium'];
$utm_content = $_POST['utm_content'];
$utm_term = $_POST['utm_term'];
$ipad = $_SERVER['REMOTE_ADDR'];
$site2 = $_SERVER['HTTP_HOST'];
$url = $_SERVER['HTTP_REFERER'];
$site = parse_url($url, PHP_URL_HOST);
    
$date = date("d.m.Y");
$time = date("H:i");

$subject = "Заявка ".$site." $date $time";

    $message = '
    <html>
    <head>
    <title>'.$subject.'</title>
    </head>
    <body>
    <p>Имя покупателя: '.$name.'</p>
    <p>Телефон покупателя: '.$phone.'</p>
    <p>IP покупателя: '.$ipad.'</p>
    <p>Наименование товара: '.$product_name.'</p>
    <p>Цена товара: '.$product_price.'</p>  
    <p>Модель '.$model.'</p>  
    <p>Размер: '.$size.'</p>  
    <p>Цвет: '.$color.'</p>  
    <p>utm_source: '.$utm_source.'</p>
    <p>utm_campaign: '.$utm_campaign.'</p>
    <p>utm_medium: '.$utm_medium.'</p>
    <p>utm_content: '.$utm_content.'</p>
    <p>utm_term: '.$utm_term.'</p>
    <p></p>
    <p>UTM: ?utm_source='.$utm_source.'&utm_campaign='.$utm_campaign.'&utm_medium='.$utm_medium.'&utm_content='.$utm_content.'</p>
    <br>
    <p>Сайт: <a href="http://'.$site.'">http://'.$site.'</a></p>
    <p>Страница "spasibo": <a href="http://'.$site2.'/spasibo.php">http://'.$site2.'/spasibo.php</a></p>
    </body>
    </html>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf8\r\n";

$headers .= "From: ".$site." <info@".$site." >\r\n";
$headers .= "Reply-To: info@".$site." \r\n";

$headers .= "X-Mailer: PHP/" . phpversion();

if(!empty($_POST['name']) && !empty($_POST['phone'])) {
    
mail($to1, $subject, $message, $headers);

}


?>