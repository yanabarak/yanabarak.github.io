<!DOCTYPE html>
<html lang="en" class="no-js demo5">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Login</title>
		
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    	    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme --> 
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
   		<script type="text/javascript" src="js/jquery.interactive_bg.js"></script>
		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="css/style2.css" />

		<script src="../file/js/modernizr.js"></script>
	</head>
	<body>
	  
		<div class="container1 bg rel" data-ibg-bg="logmat.jpg">
			<!-- Top Navi -->
			<div class="nav-top clearfix">
				<span class="right"><a href="https://ivi-soft.com"><span> IVI-Soft Corporation, LLC. </span></a></span>
				<span class="right"><a href="index.php"><span> Главная </span></a></span>
			</div>

			

			
		
    	<div class="main">
    	  <div class="row">
    	  	<div class="col-sm-8 col-sm-offset-2">
    	  		<?php
include_once 'handler.php'; // проверяем авторизирован ли пользователь

// если да, перенаправляем его на главную страницу
if($user) {
header ('Location: index.php');
exit();
}

if(!empty($_POST['login']) AND !empty($_POST['password']))
{
 // фильтрируем логин и пароль
 $login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
 $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
 
	$search_user = mysql_result(mysql_query("SELECT COUNT(*) FROM `users_profiles` WHERE `username` = '".$login."' AND `password` = '".md5($password)."'"), 0);
	if($search_user == 0)
	{
		echo '<h3 style="color:#fff;">Введенные данные неправильные или пользователь не найден.</h3>
		<form  role="form" action="login.php" method="POST">
				  <div class="form-group">
				    <label class="sr-only" for="login">Login</label>
				    <input name="login" type="text" id="login" class="form-control" placeholder="Enter login">
				  </div>
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputPassword2">Password</label>
				    <input name="password" type="password"  class="form-control" id="exampleInputPassword2" placeholder="Password">
				  </div>
				  <input type="submit" value="Авторизироваться" class="btn btn-primary">
				</form>';
		exit();
	}
	else
	{
	    // заносим логин и пароль в куки
		$time = 60*60*24; // сколько времени хранить данные в куках
		setcookie('username', $login, time()+$time, '/');
		setcookie('password', md5($password), time()+$time, '/');
		// перенаправляем на 
		header ('Location: upload.php');
		exit();
	}
}
echo '<form  role="form" action="login.php" method="POST">
				  <div class="form-group">
				    <label class="sr-only" for="login">Login</label>
				    <input name="login" type="text" id="login" class="form-control" placeholder="Enter login">
				  </div>
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputPassword2">Password</label>
				    <input name="password" type="password"  class="form-control" id="exampleInputPassword2" placeholder="Password">
				  </div>
				  <input type="submit" value="Авторизироваться" class="btn btn-primary">
				</form>';

?>
    	  		
    	  	</div>
    	  	  	  	
    	  </div>
    	</div>
    	<script type="text/javascript">
        $(".bg").interactive_bg();
      </script>
		</div><!-- Container -->
	</body>
</html>
