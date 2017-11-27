<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#"><head>

<meta http-equiv="X-UA-Compatible" content="IE=10" />
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

<link type="text/css" rel="stylesheet" href="styles.css" media="all" />

</head>
<title>Загрузка файлов на сервер с помощью PHP функции</title>
<body>


  <div id="header"><a href="http://red-star.pro" title="REDSTAR" class="upmenulink" target="_blank">Вернуться на проект: www.red-star.pro</a></div>


<div id="title">
  <p>Загрузка файлов на сервер с помощью PHP функции</p>
</div>


<?php  

// Подключаем файл функций 
include 'function.php'; 

// Проверяем правильность отправки данных именно с той формы  
// в которой значение кнопки, т.е. надпись равна - 'Загрузить' 
// Только если это значение совпадает будет активирована 
// наша функция загрузки файлов. 
if($_POST['go'] == 'Загрузить') 
{ 
   echo upload('filename', './files/', $_POST['f']); 
} 

?>


       <div id="main-container">
           
           <form action="" method="post" enctype="multipart/form-data" class="reset">
            
            <p class="form"><input name="filename" type="file"><input name="f" type="checkbox" value="1"> - перезаписать</p>
  
           <input name="go" type="submit" value="Загрузить" class="reset"></form>
           
           
           
       </div>



</body></html>