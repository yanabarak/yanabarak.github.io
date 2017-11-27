<?php
include_once 'handler.php'; // проверяем авторизирован ли пользователь

// проверяем авторизацию пользователя
 if($user) {
 setcookie('username', '', time()-1, '/');
 setcookie('password', '', time()-1, '/');
 session_destroy();
 header ('Location: index.php');
 exit();
 } else {
  echo 'Для этого действия нужно авторизироваться.';
 }
?>