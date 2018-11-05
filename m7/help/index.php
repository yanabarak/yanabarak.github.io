<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Подтверди свое участие в мастер-классе</title>
    <!-- Stylesheet data -->
   <?php
$pixel = include '../../need/itispixel.html';
?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:200Light,400Regular,600Semibold,800Bold;subset=cyrillic-ext,latin">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/globals.css">
    <link rel="stylesheet" href="css/layout.css"> <style>
        h2{
            font-size: 20px;
        }
        .button {

    font-size: 22px;
    display: block;
    margin: 0 auto;
    text-align: center;
    width: 100%;
    max-width: 360px;
    background: #d22a72;
    color: #fff;
    border-radius: 3px;
    text-transform: uppercase;
    font-weight: 600;
    padding: 15px 5px;
    border: none;
    text-decoration: none;
    cursor: pointer;
	margin-bottom: 30px;
}
.red{
	color: #d22a72;
}
.button-a:hover{
    color: black !important;
}
.button-a:active{
    background-image: -webkit-gradient(linear,left top,right top,from(#d22a72),to(#861a48));
background-image: -webkit-linear-gradient(left,#d22a72,#861a48);
background-image: -o-linear-gradient(left,#d22a72,#861a48);
background-image: linear-gradient(to right,#d22a72,#861a48);
}
    </style>

</head>

<body>
    <!-- Footer to bottom -->
    <div class="b-footer-bottom-helper" style="min-height: 80vh">
        <div class="b-footer-bottom-helper-2">
            <div class="b-main">
       

                <section class="g-section-l">
                    <div class="g-container">
                        <div class="b-hometext">
                        
                            <center>
                                <h1 class="g-section-l__title" style="font-weight: 700;margin-bottom: 20px;"><span class="red">СТОЙ!</span><br>
Нажми кнопку «НАЧАТЬ» и я отправлю тебе в Facebook информацию про секретный бонус ценностью<span class="red"> 67$</span>
                                </h1>
<a href="https://m.me/1965509733523413?ref=<?php echo $_GET["ref"]?>" id="aaa" class="button">НАЧАТЬ</a>
                            </center>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <!-- Footer -->
<!--     <footer class="b-footer">
        <div class="b-footer__inner">
            <div class="g-container">
                <div class="g-row g-row_indent-20">
                    <div class="g-col-3 g-col-3_from-l g-col-6_from-m g-col-12_xs">
                        <div class="b-footer__section">
                              
                        </div>
                    </div>

                    <div class="g-col-9 g-col-9_from-l g-col-6_from-m g-col-12_xs">
                        <div class="b-footer__section" style="text-align:right">
                            <p class="b-footer__item">© 2018 Мама Худеет</p>
                          
                            <p class="b-footer__item">По всем вопросам: <a href="mailto:info@mamahudee.com" title="По всем вопросам: info@mamahudee.com">info@mamahudee.com</a><br><a href="tel:+380673290392">+380673290392(Украина)</a><br>
      <a href="tel:+79587568901">+79587568901(Россия)</a> </p>
                            <p class="b-footer__item"><a href="http://mamahudeet.com/info/rassilka.pdf" target="_blank">Согласие с рассылкой</a> | <a href="http://mamahudeet.com/info/politica.pdf" target="_blank">Политика конфиденциальности</a> | <a href="http://mamahudeet.com/info/dogovor.pdf" target="_blank">Договор оферты</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->


    <script type="text/javascript">

var params = window
    .location
    .search
    .replace('?','')
    .split('&')
    .reduce(
        function(p,e){
            var a = e.split('=');
            p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        },
        {}
    );

  var str = params['ref'];
setTimeout(function(){
 window.location.href = 'https://m.me/1965509733523413?ref='+str;
    }, 7000);
//  function updater(s) {
//   var baseTime = new Date(2015, 8, 27);
//   var period = 10000;

//   function update() {
//     var cur = new Date();
//     // сколько осталось миллисекунд
//     var diff = period - (cur - baseTime) % period;
//     // сколько миллисекунд до конца секунды
//     var millis = diff % 1000;
//     diff = Math.floor(diff/1000);
//     // сколько секунд до конца минуты
//     var sec = diff % 60;
//     if(sec < 10) sec = "0"+sec;
//     diff = Math.floor(diff/60);

//     s.innerHTML = sec;
//   if (sec == 0) {
//  location.href = 'https://m.me/1965509733523413?ref='+str;
//  return false;
//   }
//     // следующий раз вызываем себя, когда закончится текущая секунда
//     setTimeout(update, millis);
//   }
//   setTimeout(update, 0);
// }
// updater( document.getElementById("seconds"));
</script>
 
</body>
</html>