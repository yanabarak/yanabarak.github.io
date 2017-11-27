 <?php
    include_once 'handler.php'; // проверяем авторизирован ли пользователь

    // если нет, перенаправляем его на главная страницу
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

    <title>Редактировать профиль</title>

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
              <h3 class="panel-title"> <span class="glyphicon glyphicon-file"></span> Редактировать профиль </h3>
            </div>
            <div class="panel-body">
            <form class="form-horizontal row" action='save_edit.php' method='post' enctype='multipart/form-data'>
              <div class="form-group col-sm-6 col-sm-push-1">
              <div class="file_upload">
                  <button type="button">Выбрать фото профиля</button>
                  <div>Файл не выбран</div>
                  <input type="file">
              </div>
            </div>
              <input type='submit' class="btn col-sm-2  col-sm-push-1 btn-success but" name='submit' value='Сохранить'>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputname" class="col-sm-3 control-label">Ваше имя и фамилия</label>
                  <div class="col-sm-6">
                    <input name='name' type='text' class="form-control" id="inputname" placeholder="имя и фамилия">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputinfo" class="col-sm-3 control-label">Короткая информация</label>
                  <div class="col-sm-6">
                    <input name='info' type='text' class="form-control" id="inputinfo" placeholder="Слоган или о вас">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputlink" class="col-sm-3 control-label">Ссылка LinkedIn</label>
                  <div class="col-sm-6">
                    <input name='link' type='text' class="form-control" id="inputlink" placeholder="LinkedIn">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputtele" class="col-sm-3 control-label">Ссылка Telegram</label>
                  <div class="col-sm-6">
                    <input name='tele' type='text' class="form-control" id="inputtele" placeholder="Telegram">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputface" class="col-sm-3 control-label">Ссылка Facebook</label>
                  <div class="col-sm-6">
                    <input name='face' type='text' class="form-control" id="inputface" placeholder="Facebook">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputemail" class="col-sm-3 control-label">Рабочая почта</label>
                  <div class="col-sm-6">
                    <input name='email' type='text' class="form-control" id="inputemail" placeholder="Email">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputpremail" class="col-sm-3 control-label">Личная почта</label>
                  <div class="col-sm-6">
                    <input name='premail' type='text' class="form-control" id="inputpremail" placeholder="Email">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputaddress" class="col-sm-3 control-label">Ваш адрес</label>
                  <div class="col-sm-6">
                    <input name='address' type='text' class="form-control" id="inputaddress" placeholder="Адрес">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputtel" class="col-sm-3 control-label">Номер телефона</label>
                  <div class="col-sm-6">
                    <input name='tel' type='text' class="form-control" id="inputtel" placeholder="0123456789">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputbirthdate" class="col-sm-3 control-label">Дата рождения</label>
                  <div class="col-sm-6">
                    <input name='birthdate' type='date' class="form-control" id="inputbirthdate">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputdepartment " class="col-sm-3 control-label">Ваш отдел</label>
                  <div class="col-sm-6">
                    <input name='department' type='text' class="form-control" id="inputdepartment" placeholder="Department">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputposition" class="col-sm-3 control-label">Ваша должность</label>
                  <div class="col-sm-6">
                    <input name='position' type='text' class="form-control" id="inputposition" placeholder="Position">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputskills" class="col-sm-3 control-label">Ваши навыки</label>
                  <div class="col-sm-6">
                    <input name='skills' type='text' class="form-control" id="inputskills" placeholder="Skills">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            <form class="form-horizontal" action='save_edit.php' method='post'>
                <div class="form-group row">
                  <label for="inputcolor" class="col-sm-3 control-label">Ваш любимый цвет</label>
                  <div class="col-sm-6">
                    <input name='color' type="color" value="#7D85EC" class="form-control" id="inputcolor">
                  </div>
                  <input type='submit' class="btn col-sm-2 btn-success" name='submit' value='Сохранить'>
                </div>
            </form>
            </div>
          </div>  
        </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/index.js"></script>

  </body>
</html>