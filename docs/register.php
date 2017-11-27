<!DOCTYPE html>
<html lang="en" class="no-js demo5">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Registration</title>
		
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

		// если да, перенаправляем его на готовую страницу
		if($user) {
		header ('Location: upload.php');
		exit();
		}

		if (!empty($_POST['login']) AND !empty($_POST['password']))
		{
		 // фильтрируем логин и пароль
		 $login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
		 $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
		 
		 // проверяем есть ли логин в нашей базе данных
			if (mysql_result(mysql_query("SELECT COUNT(*) FROM `users_profiles` WHERE `username` = '".$login."' LIMIT 1;"), 0) != 0)
			{
				echo '<h4 style="color:#fff;">Логин занят! Пожалуйста <a href="login.php" >войдите</a> с этим логином или выберите другой!</h4><form  role="form" action="register.php" method="POST" style="min-height:300px;">
						  <div class="form-group">
						    <label class="sr-only" for="login">Login</label>
						    <input name="login" type="text" value="" id="login" class="form-control" placeholder="Enter login">
						  </div>
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputPassword2">Password</label>
						    <input name="password" type="text" value="" class="form-control" id="exampleInputPassword2" placeholder="Password">
						  </div>
						  <input type="submit" value="Зарегистрироваться" class="btn btn-danger">
						</form>';
				exit();
			}
		 // заносим данные в таблицу, пароль кодируем в md5
			mysql_query("INSERT INTO `users_profiles` (`username`, `password`) VALUES ('".$login."', '".md5($password)."')");
		    echo '<h3 style="color:#fff;">Вы успешно зарегистрированы! Пожалуйста авторизуйтесь, чтобы продолжить работу.</h3>
		    <a href="login.php" class="btn btn-primary"> Авторизация </a>';
			exit();
		}
		 // форма регистрации

		echo '
						<form  role="form" action="register.php" method="POST">
						  <div class="form-group">
						    <label class="sr-only" for="login">Login</label>
						    <input name="login" type="text" value="" id="login" class="form-control" placeholder="Enter login">
						  </div>
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputPassword2">Password</label>
						    <input name="password" type="text" value="" class="form-control" id="exampleInputPassword2" placeholder="Password">
						  </div>
						  <input type="submit" value="Зарегистрироваться" class="btn btn-danger">
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
