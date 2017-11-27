<!DOCTYPE html>
<html lang="en" class="no-js demo5">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Main Page</title>

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
	  
		<div class="container1 bg" data-ibg-bg="mainmat.jpg">
			<!-- Top Navi -->
			<div class="nav-top clearfix">
				<span class="right"><a href="https://ivi-soft.com"><span> IVI-Soft Corporation, LLC. </span></a></span>
			</div>

			

			
		
    	<div class="main mar">
    	  <?php
			include_once 'handler.php'; // проверяем авторизирован ли пользователь

			if($user) {
			// перенаправляем на 
			header ('Location: upload.php');
			exit();
			} else {
			// выводим информацию для гостя
			echo '<div class="row">
			    	  	<div class="col-sm-6">
			    	  		<a href="register.php" class="btn btn-danger">Регистрация</a><br />
			    	  		
			    	  	</div>
			    	  	<div class="col-sm-6">
			    	  		<a href="login.php" class="btn btn-primary">Авторизация</a><br />
			    	  	</div>   	  	
			    	  </div>';
			}
			?>
    	</div>
    	<script type="text/javascript">
        $(".bg").interactive_bg();
      </script>
		</div><!-- Container -->
	</body>
</html>
