<?php  

// Загрузка файлов 
function upload($filename, $pach, $flag = false) 
{ 
     
    // $filename - это свойство name в input  
    // $pach - директория куда будет сохранён загруженный файл 
    // директория загрузки должна иметь доступ 777 
    // $flag - по умолчанию false (0),  
    // определяет перезапись существующего файла в директории, если выставлен TRUE (1) 
     
    // Проверяет существует ли директория и возможно ли её открыть из этого скрипта 
    if(!opendir($pach)){return '<div class="alert alert-warning">Директория сохранения файлов, указана неверно!</div>';} 
     
    // устанавливаем директорию загрузки файла 
     $uploadfile = $pach.basename($_FILES[$filename]['name']); 
     
    // Устанавливаем вариант перезаписи файла 
    // если false, файл не перезаписывается, а выдаётся предупреждение. 
    if(!$flag){ 
        // Проверяем существует ли такой файл в директории 
        if(is_file($uploadfile)) return('<div class="alert alert-warning">ВНИМАНИЕ! Такой файл уже существует.</div>'); 
    } 
     
    if(!empty($filename)) 
    { 
       
      // Ограничения размера загружаемого файла 
      if($_FILES[$filename]['size'] > 1024*2*1024) 
       { 
         return('<div class="alert alert-danger">Размер файла превышает 2 мегабайта!</div>'); 
          
       } 
       // Проверяем загружен ли файл 
       if(is_uploaded_file($_FILES[$filename]['tmp_name'])) 
       { 
         // Если файл загружен успешно, перемещаем его 
         // из временной директории в конечную 
          
         if(copy($_FILES[$filename]['tmp_name'],$uploadfile)) 
         { 
             return('<div class="alert alert-success">OK! Файл успешно загружен.</div>'); 
         } 
         else 
         { 
            return('<div class="alert alert-danger"><strong>'/*. $_FILES[$filename]['tmp_name'].$pach */.$_FILES[$filename]['name'].' </strong> - не является правильно загруженным файлом или
              не может быть перемещён из временной директории.</div>');      
         } 
       }  
       else  
       { 
          switch($_FILES[$filename]['error']) 
          { 
              case 1: echo '<div class="alert alert-danger">Размер файла превышает допустимый.</div>'; 
              break; 
              case 2: echo '<div class="alert alert-danger">Размер файла превышает допустимый.</div>'; 
              break; 
              case 3: echo '<div class="alert alert-danger">Загружаемый файл был получен только частично.</div>'; 
              break; 
              case 4: echo '<div class="alert alert-danger">Файл не был загружен!</div>'; 
              break; 
          } 
           
       } 
    } 
    else 
    { 
        return('<div class="alert alert-danger">Не указан файл для загрузки!</div>');     
    } 
} 
?>