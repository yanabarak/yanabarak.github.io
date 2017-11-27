<?php include_once 'handler.php'; // проверяем авторизирован ли пользователь

    // если нет, перенаправляем его на главная страницу
    if(!$user) {
    header ('Location: index.php');
    exit();
    }

$resultat = mysql_query("SELECT * FROM users_profiles WHERE user_id='$_GET[user_id]'");
$array = mysql_fetch_array($resultat);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Профиль <?php echo $array['username']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme --> 
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">



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
            <li><a href="#">Б</a></li>
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
<br>
<br>
  <div class="row" id="main one">
        <div class="col-md-4 well leftPanel" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                  <div>
                  <?php if($array['avatar'] == ''){
                    $avatar = "NoAvatar.png";
                    }else{
                      $avatar = $array['avatar'];
                    }
                  echo "<img src='avatars/".$avatar."' alt='profile image' class='img-circle img-thumbnail userimage'>"; ?>
                <h2><?php echo $array['name']; ?></h2>
                <p><?php echo $array['info']; ?></p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info">
                                Соц мережі</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li> <?php echo "<a href='".$array['link']."'>"; ?>LinkedIn</a></li>
                                <li> <?php echo "<a href='".$array['tele']."'>"; ?>Telegram</a></li>
                                <li> <?php echo "<a href='".$array['face']."'>"; ?>Facebook</a></li>
                                <li> <?php echo "<a href='mailto:".$array['premail']."'>"; ?>Личная почта</a></li>
                            </ul>
                        </div>
              </div>
            </div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
      <hr class="colorgraph">
        <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Отдел</td>
                        <td><?php echo $array['department']; ?></td>
                      </tr>
                      <tr>
                        <td>Дата рождения</td>
                        <td><?php echo $array['birthdate']; ?></td>
                      </tr>
                      <tr>
                      <tr>
                        <td>Должность</td>
                        <td><?php echo $array['position']; ?></td>
                      </tr>
                      <tr>
                        <td>Навыки</td>
                        <td><?php echo $array['skills']; ?></td>
                      </tr>
                        <tr>
                        <td>Адрес</td>
                        <td><?php echo $array['address']; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo "<a href='mailto:".$array['email']."'>"; ?><?php echo $array['email']; ?></a></td>
                      </tr>
                        <td>Номер телефона</td>
                        <td><?php echo $array['tel']; ?></td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
      <hr class="colorgraph">

  </div>
</div>
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