 <?php
    include_once 'handler.php'; // проверяем авторизирован ли пользователь

    // если да, перенаправляем его на главная страницу
    if(!$user) {
    header ('Location: index.php');
    exit();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>All users</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme --> 
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">




    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IVI-Soft Corporation, LLC.</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="user.php">Все пользователи</a></li>
            <li><?php echo "<a href='profile.php?user_id=$user[user_id]'> Мой профиль </a>"?></li>
            <li><a href="#contact">Б</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Файлы <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="upload.php">Загрузка файлов</a></li>
                <li class="active"><a href="allfiles.php">Просмотр файлов</a></li>
                <li><a href="#">Б</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Б</li>
                <li><a href="#">Б</a></li>
                <li><a href="#">Б</a></li>
              </ul>
              
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                <li><?php echo '<a href="#">Привет, <b style="color:#BB2044;">'.$user['username'].'</b></a>';?></li>
                <li><a href="exit.php">Выйти</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

        <div class="col-sm-12">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"> <span class="glyphicon glyphicon-file"></span> Все пользователи </h3>
            </div>
            <div class="panel-body paneluser">
              <?php
                
				$resultat = mysql_query("SELECT * FROM users_profiles");
				$array = mysql_fetch_array($resultat);
				
				do{
				if($array['avatar'] == ''){
					$avatar = "NoAvatar.png";
				}else{
					$avatar = $array['avatar'];
				}
				printf("<div class='leftPanel col-sm-2'><a href='profile.php?user_id=$array[user_id]'><img src='avatars/".$avatar."' alt='Avatar' class='img-circle img-thumbnail'></a><h3 class='text-center'>$array[username]</h3></div>");

				}
				while($array = mysql_fetch_array($resultat));
	
              ?>





            </div>
          </div>  
        </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
