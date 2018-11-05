<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<title>МАМА XУДЕЕТ</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <?php
$pixel = include '../need/itispixel.html';
?>

	<link rel="stylesheet" href="css/main.min.css" >
<link rel="stylesheet" href="owl/owl.carousel.min.css" />
<link rel="stylesheet" href="owl/owl.theme.default.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Random css for design -->
    <script type="text/javascript">
        var arr = ["css/pink.css", "css/green.css", "css/blue.css", "css/none.css"];
        var rand = Math.floor(Math.random() * arr.length);
        var tag_css = document.createElement('link');
        tag_css.rel = 'stylesheet';
        tag_css.href = arr[rand];
        tag_css.type = 'text/css';
        var tag_head = document.getElementsByTagName('head');
        tag_head[0].appendChild(tag_css);
    </script>
<script type="text/javascript">



window.onload = function () {


//Форматируем дату, чтобы все было красиво

function formatDate(date) {
  var dd = date.getDate();
  if (dd < 10) dd = '0' + dd;
  var mm = date.getMonth() + 1;
  if (mm < 10) mm = '0' + mm;
  var yy = date.getFullYear();
  if (yy < 10) yy = '0' + yy;
  return dd + '.' + mm + '.' + yy;
}  

// Получаем сегодняшную дату и через три дня, причем красивую
	var threeday = new Date(); 
	var today = new Date(); 
    threeday.setDate(threeday.getDate() + 3);
	today = formatDate(today);
	threeday = formatDate(threeday);
// Breakpoints для слабаков
// alert(today);
// alert(threeday);
// Получаем куки
function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
// Здесь получим дату, когда цены должны поменяться
changedate = getCookie("changedate");

if (!changedate) {
    document.cookie = "changedate="+threeday;
	changedate = threeday;
	$('#changedate1').html(changedate);
	$('#changedate2').html(changedate);
	$('#changedate3').html(changedate);
}
else{
	if (today<changedate) {
			$('#changedate1').html(changedate);
			$('#changedate2').html(changedate);
			$('#changedate3').html(changedate);
	} 
		else {
			 document.cookie = "changedate="+threeday;
			 changedate = threeday;
			$('#changedate1').html(changedate);
			$('#changedate2').html(changedate);
			$('#changedate3').html(changedate);
		}
}
}


</script>

</head>
<body>

	<div class="main-content">
		<header class="main-head">
						<div class="container">
				<div class="h-text">
			<img src="img/logolg.svg" style="max-width: 200px; margin: 20px 0px" class="hidden-sm">
			<img src="img/logo.svg" style="max-width: 200px;margin:10px auto; margin-bottom: 20px" class="hidden-lg">
<p class="dayq">Старт 1 августа. Онлайн курс. 12 недель + призы и бонусы.</p>
					<h2>Сбрось навсегда лишние <span class="red"> 6 - 35 кг </span>и стань стройнее на <span class="red">10 - 60 сантиметров</span> меньше чем <span class="sel"><img src="img/selection (2).png"  alt=""><span> за  3 месяца!</span></span></h2>
					<h4>Участвуй в 90-дневном курсе пoxудения для мам по методу М7™,
чтобы получить идеальную фигуру и выглядеть еще лучше, чем до родов. 
</h4>
					<div class="button-wrap">
						<button type="button" href="#packet" class=" find pulse">ДА, Я ХОЧУ ИДЕАЛЬНУЮ ФИГУРУ</button>
						<p><img src="img/lock.png" alt="">Ваши данные под 100% защитой от третьих лиц</p>
					</div>
				<!-- 	<div class="t-self" style="margin: 0 auto;display: block;padding-right: 0px;">
						<p><img src="img/time.png"  alt=""><b>До конца акции осталось:</b></p>
						<div class="wrap">
							<span class="day">00</span>
							<i>дней.</i>
						</div>
						<div class="wrap">
							<span class="hour">00</span>
							<i>часов.</i>
						</div>
						<div class="wrap">
							<span class="min">00</span>
							<i>мин.</i>
						</div>
						<div class="wrap">
							<span class="sec">00</span>
							<i>сек.</i>
						</div>
						<div class="wrap">
							<span class="mili">00</span>
							<i>мил. сек.</i>
						</div>
					</div> -->
				</div>
			</div>
		</header>

		<section class="s1">
			<div class="container">
				<div class="d14"><h5 style="
    margin: 40px 0 10px 0;padding-bottom: 0px;
">Академия “Мама Xудеет” разработала пошаговый <span class="sel"><img src="img/selection.png" style="width: 260px; height: 33px; display: block !important" alt=""><span>90-дневный курс</span></span>  специально для мам, пожертвовавших ради семьи своим самым святым - телом и красотой.</h5></div>
				<div class="days-wrap">
					<div class="days">
						<div class="text">
							<h4 class="pl15">Узнаешь себя? Сейчас:</h4>
							<ul class="pl15">
								<li>у тебя <b>проблемы</b> не только с лишним весом, но и со здоровьем,</li>
								<li>выглядишь <b>старше</b> своих лет,</li>
								<li><b>стыдно, неуютно и некомфортно</b> в своем теле,</li>
								<li>носишь <b>ужасную</b> балахонистую одежду,</li>
								<li><b>боишься</b> появиться на пляже или поехать в отпуск,</li>
								<li>съедают <b>комплексы и неверие</b> в себя,</li>
								<li><b>стыдишься</b> выкладывать свои фотографии в соц. сетях,</li>
								<li><b>забыла</b>, когда расслаблялась и кайфовала от секса,</li>
								<li>видишь, как любимый <b>теряет к тебе интерес</b>, но ничего не можешь сделать,</li>
								<li>веришь, что <b>вот-вот что-то случится</b>  - и ты обязательно пoxудеешь,</li>
								<li>не хочешь, чтобы твои <b>дети стыдились</b> тебя.</li>
							</ul>
							<div class="button-wrap">
						<button type="button" href="#packet"  class=" pulse">Да, я хочу идеальную фигуру</button>
					</div>
						</div>
						<img src="img/woman-with-headache-and-a-baby-in-arms_1170-7.jpg"  alt="">
					</div>
<blockquote style="margin-top: 0px">
  <p>Скорее всего, ты уже сотню раз <span>пыталась xудеть</span>. Но почему-то дальше потерянных 3 кг - всегда жуткий срыв и сломленная вера в себя. И <span>ты не виновата.</span></p>
<p>А что, если я скажу тебе, что <span>ВСЕХ ЖЕНЩИН МИРА ОБМАНУЛИ</span>, когда убедили, что для идеальной фигуры нужно <del>мало есть</del> и <del>насиловать себя тренировками</del>. Чтобы всегда быть в идеальной форме - необходимо <span>много и правильно питаться</span>. И делать <span>нужные действия</span>, действительно влияющие на твою красоту и стрелку на весах.</p>
</blockquote>
					<div class="days days2" style="padding-top: 40px">
						<img src="img/father-lying-in-a-park-with-his-baby-up-and-his-mother-helping-him_1153-2058.jpg" alt="">
						<div class="text">
							
							<h5 class="pl15" style="margin-top: 0px">Участвуя в курсе, ты не просто налаживаешь свое <span class="red">питание, красоту и здоровье</span>. Благодаря <span class="sel"><img src="img/selection (2).png" style="width: 200px; height: 33px; display: block !important"  alt=""><span>МЕТОДУ М7™</span></span> ты <span class="red">комплексно работаешь</span> в ключевых сферах: </h5>
							<ul class="pl15">
								<li><b>МОДЕЛИРОВАНИЕ БУДУЩЕГО</b><br> Создашь желаемый образ себя и привлечешь результат, научившись ставить цели и исполнять желания силой своей мысли.</li>
								
								<li><b>ТЕЛО</b><br>Любишь и заботишься о себе через реальные действия - правильное питание, спорт, уход, воду, сон.</li>

								<li><b>ДУША И ЧУВСТВА</b><br> Проработаешь все душевные травмы, связанные с внешностью, и глубинно перепрограммируешь убеждения, научишься любить себя. </li>

								<li><b>ОБРАЗ ЖИЗНИ/ПРИВЫЧКИ</b><br> Сформируешь новый образ жизни, привычки для себя и малыша, как базовый фундамент счастливой и успешной жизни всей семьи.</li>
							</ul>
						</div>
					</div>
					<!-- <div class="days">
						<div class="text">
							<h4 class="pl15">День 3</h4>
							<h5 class="pl15">1+1=11. Как создавать по-настоящему счастливые отношения?</h5>
							<ul class="pl15">
								<li>Ключ к долгосрочным отношениям… упусти его, и <b>мужчина уйдет к другой</b>, а ты даже не поймешь как это произошло</li>
								<li>Какие конкретно отношения тебе нужны и как их <b>строить<br> с нуля</b></li>
								<li>Как получить <b>предложение от любимого мужчины</b>,<br> ни разу не намекая ему об этом </li>
								<li>Как перевести симпатию в <b>долгосрочные и крепкие<br> отношения</b></li>
							</ul>
						</div>
						<img src="img/3.png"  alt="">
					</div> -->
				</div>
		<!-- 		<div class="imac">
					<h4>Пора заполнить этот пробел в знаниях<br> и стать <span><img src="img/selection.png" " alt=""><span>счастливой в отношениях</span></span></h4>
					<img src="img/arrow.png"  alt="">
					<div class="video">
						<img src="img/nout.png"  alt="">
						<iframe src="https://www.youtube.com/embed/yV12lbwTviA" frameborder="0" allowfullscreen></iframe>
					</div>
				</div> -->
			</div>
		</section>
 <section class="steps steps-area">
        <div class="container">
            <!-- title-section -->
            <h2 style="    max-width:  800px;margin:20px auto;margin-bottom: 40px;">Твоя полная трансформация и преображение происходит через <span class="underline"> 7 источников</span>:</h2>
            <ul class="timeline">
                <li class="timeline-box wow fadeInLeft">
                    <i class="icon-layers"></i>
                    <p class="timeline-title">1 элемент: </p>
                    <p class="timeline-details">5-разовое питание + питье чистой воды, чтобы буквально вымывать лишние кг, не чувствуя голода. </p>
                    <span>1</span>
                </li>
                <li class="timeline-box wow fadeInRight">
                    <i class="icon-chat"></i>
                    <p class="timeline-title">2 элемент: </p>
                    <p class="timeline-details">Прогулки пешком или 10-15 минут прыжков со скакалкой, чтобы уходить от старого образа жизни, попутно сжигая калории.</p>
                    <span>2</span>
                </li>
                <li class="timeline-box  wow fadeInLeft">
                    <i class="icon-tools"></i>
                    <p class="timeline-title">3 элемент: </p>
                    <p class="timeline-details">Фитнес для двоих - 30 минут с малышом или без, чтобы делать тело сексуальным, упругим и заряжаться энергией.</p>
                    <span>3</span>
                </li>
                <li class="timeline-box wow fadeInRight">
                    <i class="icon-trophy"></i>
                    <p class="timeline-title">4 элемент: </p>
                    <p class="timeline-details">4 элемент: Полноценный и правильный сон, во время которого кг буквально тают. </p>
                    <span>4</span>
                </li>
                <li class="timeline-box  wow fadeInLeft">
                    <i class="icon-tools"></i>
                    <p class="timeline-title">5 элемент: </p>
                    <p class="timeline-details">Очищение от негативных установок, убеждений, душевных ран + ПЕРЕПРОГРАММИРОВАНИЕ мозга на постоянную стройность и красоту.</p>
                    <span>5</span>
                </li>
                <li class="timeline-box wow fadeInRight">
                    <i class="icon-trophy"></i>
                    <p class="timeline-title">6 элемент: </p>
                    <p class="timeline-details">Использование материнского тайм-менеджмента, чтобы все успевать с малышом. </p>
                    <span>6</span>
                </li>
                <li class="timeline-box  wow fadeInLeft">
                    <i class="icon-tools"></i>
                    <p class="timeline-title">7 элемент: </p>
                    <p class="timeline-details">Жизнь в окружении экспертов, наставников и в сообществе единомышленниц, чтобы ни на шаг не сбиваться с пути к идеальной фигуре.  </p>
                    <span>7</span>
                </li>
            </ul>
            <h4>Если ты будешь выполнять всего 30% заданий курса - ты уже сбросишь лишнее. Если 100% - сбросишь быстро, легко и навсегда, и сможешь выглядеть на 500% лучше, чем до курса. Этот курс - не диета и не марафон. Курс -  глубинная трансформация тебя, твоего тела, твоей души и мыслей. </h4>
        </div>
        <!-- .container -->

                 
        </section>               
		<section class="s2">
			<div class="container">
				<div class="s2-items">
					<div class="s2-item"><h3><span class="red">Только представь:</span></h3>
						<ul>
							<li>в любом весе и состоянии,</li>
							<li>без отрывы от бытовых дел и малыша.</li>
						</ul>
						<h5>Ты погружаешься в 90-дневный курс по МЕТОДУ М7™ с программой, индивидуально создающейся еженедельно под тебя. </h5></div>
						<div class="s2-item"><img src="img/photo_2018-05-31_22-28-11.jpg"></div>
						<h5>Где под личным руководством менторов, фитнес-тренеров, диетологов, психологов ты:</h5>
						<div class="s2-item"><ul class="new">
							<li>комплексно восстанавливаешься после родов (даже если они были 6 лет назад),</li>
							<li>работаешь лично с лучшими экспертами СНГ в области диетологии, фитнеса, красоты, женской психологии и трансформации,</li>
							<li>питаешься простыми, обычными продуктами по индивидуальному плану,</li>
							<li>не паришься, что приготовить, а получаешь меню на каждый день (на ГВ и не на ГВ/ вегетарианское меню),</li>
							<li>занимаешься супер упражнениями вместе с малышом (даже если он на руках), </li>
							<li>ежедневно вдохновляешься и общаешься в тусовке стройнеющих мам (без нытья),</li>
							
						</ul></div>
						<div class="s2-item"><ul class="new">
							<li>получаешь порцию мотивации, поддержки и силы от кураторов курса,</li>
							<li>ухаживаешь за своим телом, делая его бархатным и подтянутым</li>
							<li>разбираешься в себе и очищаешься не только от шлаков и токсинов, но и душевных причин лишнего веса,</li>
							<li>находишь свой образ и стиль с помощью имиджмейкера,</li>
							<li>формируешь базу здорового образа жизни для малыша и служишь для него примером, </li>
							<li>выигрываешь ценные призы в конце курса.</li>
						</ul></div>
					
				</div>
				<div class="s2-items" style="padding-bottom: 0px">
					
						<p>После курса “МАМА XУДЕЕТ” по методу М7™ стройность становится неизбежной, а <span class="red">упругое и сексуальное тело</span> - просто побочный эффект <span class="red">нового образа жизни</span>. </p>
						<p><span class="red">По опыту пoxудевших мам</span>, если ты сделаешь хотя бы половину того, что делают остальные участники курса, - уже на второй неделе 3-месячного курса увидишь <span class="red">“вау-эффект”</span>.</p>
					
				<!-- 	<div class="s2-item">
						<div class="t-self red"  style="margin: 0 auto;display: block;padding-right: 0px;">
							<p>До конца акции осталось:</p>
							<div class="wrap ml0">
								<span class="day">00</span>
								<i>дней.</i>
							</div>
						
							<div class="wrap">
								<span class="hour">00</span>
								<i>часов.</i>
							</div>
							<div class="wrap">
								<span class="min">00</span>
								<i>мин.</i>
							</div>
							<div class="wrap">
								<span class="sec">00</span>
								<i>сек.</i>
							</div>
							<div class="wrap">
								<span class="mili">00</span>
								<i>мил. сек.</i>
							</div>
						</div>
						
					</div> --><button class=" pulse" href="#packet" >Да, я хочу идеальную фигуру</button>
				</div>

			</div>
		</section>
		<section class="s1">
			<div class="container">
				<div class="days-wrap">
				<blockquote>
				  <p>Участвуя в курсе, ты за 3 месяца создашь <span>идеальную форму </span>под наблюдением экспертов Академии “Мама xудеет” 
(диетологов, тренеров, психологов, которые не дадут тебе <del>расслабиться</del>;))</span></p>
				<p>Каждую неделю ты получаешь <span>инструкции</span>, созданные специально для твоего тела и организма. И твои <span>личные тренеры и наставники</span> дорабатывают с тобой промежуточные результаты. </p>
				</blockquote>
					<div class="days days2">
						<img src="img/mom.jpg" alt="">
						<div class="text">
							
							<h5 class="pl15">И уже через 90 дней: </h5>
							<ul class="pl15">
								<li>ты выглядишь еще лучше, чем до родов, </li>
								<li>твой мужчина сможет с легкостью носить тебя на руках,</li>
								<li>ты купаешься во внимании и восхищении мужа,</li>
								<li>наслаждаешься своим телом,</li>
								<li>с удовольствием рассматриваешь свою фигуру в зеркале,</li>
								<li>ты светишься от уверенности и внутренней силы, ведь создав себя ты можешь все,</li>
								<li>свободно делаешь крутые фотки в купальнике,</li>
								<li>ты не помнишь, как это - жить в некрасивом теле, </li>
								<li>носишь одежду, которая тебе нравится,</li>
								<li>у тебя полностью сформирована и закреплена привычка здорового питания,</li>
								<li> и ты с ужасом вспоминаешь, как травила себя неполезной едой.</li>
							</ul>
						</div>
					</div>
			<h5 style="padding-bottom: 0px;">Твое тело -<span class="red"> стройное, подтянутое, упругое, сексуальное!</span> Сколько лет ты о нем мечтала, и как легко и быстро это случилось на <span class="sel"><img src="img/selection.png" style=" display: block !important"  alt=""><span>90-дневном курсе</span></span> в Академии “Мама Xудеет”?!</h5>
						<button type="button" href="#packet" class=" pulse">Хочу участвовать</button>
				</div>
		
			</div>
		</section>
<!-- 		<section class="s3">
			<div class="container">
				<h2>Я <b>раскрою тебе секреты</b> обычных женщин, которые счастливы в браке со статусными мужчинами…</h2>
				<div class="images">
					<img src="img/4.png" alt="">
					<img src="img/5.png" alt="">
					<img src="img/6.png" alt="">
				</div>
			</div>
		</section> -->

		<section class="s4 rect">
			<div class="container">
				<h5 style="padding-bottom: 40px;">Прыгай в курс “Мама Xудеет”, и твоими результатами лично займутся:</h5>
				<div class="s4-items">


<ul class="cards">
  <li class="cards__item first">
    <div class="card">
      <div class="card__image card__image--fence"></div>
      <div class="card__content">
        <div class="card__title"></div>
        <p class="card__text"></p>
       
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--river hidden-lg"></div>
      <div class="card__content">
        <div class="card__title"><span class="text-shadow underline underline--red">Я, Сергей Ильков</span></div>
        <ul class="card__text">
        	<li>- Эксперт в области похудения</li>
        	<li>- Предприниматель</li>
        	<li>- Создатель академии “Мама Xудеет”</li>
        	<li>- Поставил себе цель: подарить идеальную фигуру 10.000 мамам, чтобы каждая женщина, давшая новую жизнь, выглядела еще лучше, чем до беременности/родов.</li>
        </ul>
</div>
    </div>
  </li>
        <h5 style="margin-top: 40px">Специально для этого нашел из сотни тренеров волшебницу. </h5><p class="card__text good"> На ее онлайн курсах уже пoxудели более 200 мам. Пройти мимо благодарственных отзывов постройневших женщин и их мужей было невозможно. И я горжусь, что нашел действительно лучшего тренера в СНГ, маму и женщину, понимающую других мам без слов.</p>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--record"></div>
      <div class="card__content">
        <div class="card__title"><span class="text-shadow underline underline--red">Олеся Степанкова</span></div>
        <ul class="card__text">
        	<li>- Тренер №1 по пoxудению для мам</li>
        	<li>- Автор методики пoxудения на ГВ, сертифицированный диетолог</li>
        	<li>- Выступающая спортсменка</li>
        	<li>- Наставник, который помог сбросить от 6 до 35 кг более 200 мамам</li>
        	<li>- Диетолог с сотнями положительных отзывов</li>
        	<li>- Инста-Мама, поддерживающая идеальную фигуру, с 8-месячным малышом на руках.</li>
        	<li>- 10 лет счастливо замужем </li>
        </ul>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--flowers"></div>
      <div class="card__content">
        <div class="card__title"> <span class="text-shadow underline underline--red">Кирилл Степанков</span></div>
        <ul class="card__text">
        	<li>- ТОП фитнес-тренер СНГ, эксперт в пoxудении и трансформации тела</li>
        	<li>- Имеет более 200 кейсов пoxудевших женщин, опыт работы более 10 лет</li>
        	<li>- Реабилитолог</li>
        	<li>- Выступающий атлет</li>
        	<li>- Уже десять лет муж и 8 месяцев папа</li>
        </ul>
      </div>
    </div>
  </li>
</ul>
<!-- <h5>А также я привлек лучших тренеров, психологов, специалистов по красоте. 
Участвуй, чтобы получить:</h5>
<svg class="arrow">
	<path class="a1" d="M0 0 L30 22 L60 0"></path>
	<path class="a2" d="M0 20 L30 42 L60 20"></path>
	<path class="a3" d="M0 40 L30 62 L60 40"></path>
</svg>
<ul class="pl15 new">
								<li>Консультацию у эксперта №1 в СНГ в отношениях между мужчиной и женщиной - Ярослава Самойлова.</li>
								<li>Образовательные групповые занятия c профессиональным фитнес-тренером Кириллом Степанковым. </li>
								<li>Образовательные групповые занятия с ТОП массажистом и диетологом Украины и США - Александром Колаевым. </li>
								<li>Консультации от профессионального женского психолога. </li>
								<li>Образовательные групповые занятия c профессиональным стилистом и визажистом Яной Глазковой.</li>
							</ul>
						<button type="button" href="#packet"  class=" pulse">Я хочу участвовать</button> -->
					
				</div>
			</div>
		</section>



		<section class="s6 rect">
			<div class="container">
        <h3 class=" " id="packet">Выбери пакет участия в курсе</h3><!-- 
     <div class="format-boxs">
					<div class="format-box__item individual">
						<h3 class="format-ttl">
							Пакет: <span class="color-blue">Silver</span>
						</h3>
						<p class="format-additionsTtl">
						Сможешь сбросить 6-8 кг <br>и минус 10-15см в объемах
						</p>
						<div class="formatItem">
							<p class="formatItem__txt"><span class="fa fa-check"></span> 90 дней участия в марафоне
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Доступ в общий закрытый чат Telegram и возможность задавать вопросы диетологу и фитнес тренеру
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Доступ в закрытый паблик Telegram с заданиями и контентом марафона (тренировки, питание)
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">1 образовательное групповое занятие </span>c профессиональным фитнес тренером Кириллом Степанковым
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">1 образовательное групповое занятие </span> c профессиональным женским психологом
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Образовательное групповое занятие c одним из лучших массажистов и диетологов Украины и США
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Проверка ежемесячных отчетов
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> Проверка еженедельных отчетов
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> Проверка ежедневных отчетов
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> Бонусный мастер класс с профессиональным ТОП стилистом и визажистом
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> Участие в розыгрыше призов и денег на общую сумму в 20.000 грн (760$)
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> Мастер-класс на тему "Как маме вернуть сексуальность и привлекательность после родов" от женского тренера №1 в СНГ Ярослава Самойлова	
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> Мастер-группа формата «вопрос-ответ» с Сергеем Ильковым, Олесей Степанковой 1 час в неделю
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> VIP-чат в Telegram
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
							<span class="fa fa-close"></span> 3 VIP-встречи с тренерами курса: ответы на личные вопросы
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> Имунитет от вылета
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Доступ к материалам и полная поддержка
<br><span class="fa-color">120 дней (90 дней марафон + 30 дней доступ к материалам)</span>
							</p>
						</div>
						<div class="format-application">
							<p class="format-application__bysu">Мест осталось: <span class="color-blue">15</span></p>
							
							<p class="format-application__bysu">
								Стандартная цена: <del class="red">238$</del><br>
								Цена сегодня: <span class="fa-color">119$</span>							
							</p><p class="format-application__price">Экономия: 119$</p>
							<button class="btn btn-click" data-format="individual">Принять участие</button>
							<p class="format-application__price up">Повышение стоимости:<br><span class="red">23.06 - 169$</span>
								<br><span class="red">26.06 - 219$</span></p>
						</div>
					</div>
					<div class="format-box__item group">
							<h3 class="format-ttl">
							Пакет: <span class="color-blue">Gold</span>
						</h3>
						<p class="format-additionsTtl">
						Сможешь сбросить 10-12 кг <br>и минус 20-25 см в объемах
						</p>
						<div class="formatItem">
							<p class="formatItem__txt"><span class="fa fa-check"></span> 90 дней участия в марафоне
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Доступ в общий закрытый чат Telegram и возможность задавать вопросы диетологу и фитнес тренеру
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Доступ в закрытый паблик Telegram с заданиями и контентом марафона (тренировки, питание)
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">2 oбразовательных групповых занятия </span>c профессиональным фитнес тренером Кириллом Степанковым
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">2 oбразовательных групповых занятия </span> c профессиональным женским психологом
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Образовательное групповое занятие c одним из лучших массажистов и диетологов Украины и США
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Проверка ежемесячных отчетов
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Проверка еженедельных отчетов
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> Проверка ежедневных отчетов
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> Бонусный мастер класс с профессиональным ТОП стилистом и визажистом
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Участие в розыгрыше призов и денег на общую сумму в 20.000 грн (760$)
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">Ценность 150$ </span>Мастер-класс на тему "Как маме вернуть сексуальность и привлекательность после родов" от женского тренера №1 в СНГ Ярослава Самойлова
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">(только слушать) </span>Мастер-группа формата «вопрос-ответ» с Сергеем Ильковым, Олесей Степанковой 1 час в неделю
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-close"></span> VIP-чат в Telegram
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
							<span class="fa fa-close"></span> 3 VIP-встречи с тренерами курса: ответы на личные вопросы
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Один имунитет от вылета
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Доступ к материалам и полная поддержка
<br><span class="fa-color">120 дней (90 дней марафон + 30 дней доступ к материалам)</span></span>
							</p>
						</div>
						<div class="format-application">
							<p class="format-application__bysu">Мест осталось: <span class="color-blue">9</span></p>
							
							<p class="format-application__bysu">
								Стандартная цена: <del class="red">334$</del><br>
								Цена сегодня: <span class="fa-color">119$</span>							
							</p><p class="format-application__price">Экономия: 215$</p>
							<p class="format-application__price"><span class="fa-color">Акция! Пакет Gold по цене Silver!</span><br>До конца акции:</p>
							<div class="down">
							<script src="http://megatimer.ru/s/36f02fcfc971678af35365a062104790.js"></script></div>
							<button class="btn btn-click" data-format="individual">Принять участие</button>
							<p class="format-application__price up">Повышение стоимости:<br><span class="red">23.06 - 217$</span>
								<br><span class="red">26.06 - 267$</span></p>
						</div>
					</div>
					<div class="format-box__item individual">
							<h3 class="format-ttl">
							Пакет: <span class="color-blue">Diamond</span>
						</h3>
						<p class="format-additionsTtl">
						Сможешь сбросить 20 кг <br>и минус 35-40 см в объемах
						</p>
						<div class="formatItem">
							<p class="formatItem__txt"><span class="fa fa-check"></span> 90 дней участия в марафоне
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Доступ в общий закрытый чат Telegram и возможность задавать вопросы диетологу и фитнес тренеру
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Доступ в закрытый паблик Telegram с заданиями и контентом марафона (тренировки, питание)
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">2 oбразовательных групповых занятия </span>c профессиональным фитнес тренером Кириллом Степанковым
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">2 oбразовательных групповых занятия </span> c профессиональным женским психологом
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span><span class="fa-color">2 oбразовательных групповых занятия </span> c одним из лучших массажистов и диетологов Украины и США
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Проверка ежемесячных отчетов
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Проверка еженедельных отчетов
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Проверка ежедневных отчетов
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span><span class="fa-color">Ценность 50$ </span> Бонусный мастер класс с профессиональным ТОП стилистом и визажистом
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Участие в розыгрыше призов и денег на общую сумму в 20.000 грн (760$)
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">Ценность 150$ </span>Мастер-класс на тему "Как маме вернуть сексуальность и привлекательность после родов" от женского тренера №1 в СНГ Ярослава Самойлова	
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> <span class="fa-color">Задавать вопросы и получать ответы </span>Мастер-группа формата «вопрос-ответ» с Сергеем Ильковым, Олесей Степанковой 1 час в неделю
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> VIP-чат в Telegram
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
							<span class="fa fa-check"></span> 3 VIP-встречи с тренерами курса: ответы на личные вопросы
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Полный имунитет от вылета
							</p>
						</div>
						<div class="formatItem">
							<p class="formatItem__txt">
								<span class="fa fa-check"></span> Доступ к материалам и полная поддержка
								<br><span class="fa-color">Безлимит (90 дней марафон + вечный доступ к материалам)</span>
							</p>
						</div>
						<div class="format-application">
							<p class="format-application__bysu">Мест осталось: <span class="color-blue">3</span></p>
							
							<p class="format-application__bysu">
								Стандартная цена: <del class="red">678$</del><br>
								Цена сегодня: <span class="fa-color">349$</span>							
							</p><p class="format-application__price">Экономия: 349$</p>
							<button class="btn btn-click" data-format="individual">Принять участие</button>
							<p class="format-application__price up">Повышение стоимости:<br><span class="red">23.06 - 400$</span>
								<br><span class="red">26.06 - 450$</span></p>
						</div>
					</div>
				</div> -->


				<div class="container-fluid">
			
				<!-- MOBILE2 -->

				<div class="mtable" >
					<div class="mline">
						<div class="mcol1">
							<div class="mtitle">ЧТО ВХОДИТ:</div>
							<div class="msubtitle">Твои результаты после прохождения курса:</div>
						</div>
						<div class="mcol2">
							<div class="mtitle">Silver</div>
							<div class="msubtitle">Цель - сбросить до 10 кг и 10-20 см в объемах</div>
						</div>
						<div class="mcol3">
							<div class="mtitle">Gold</div>
							<div class="msubtitle">Цель - сбросить 11-20 кг и 21-40 см в объемах</div>
						</div>
						<div class="mcol4">
							<div class="mtitle">Diamond</div>
							<div class="msubtitle">Цель - сбросить 21-35 кг и 41-60 см в объемах</div>
						</div>
					</div>

					<div class="nline">
						<div class="ncol1">90 дней участия в курсе</div>
						<div class="ncol2 fa-color">+</div>
						<div class="ncol3 fa-color">+</div>
						<div class="ncol4 fa-color">+</div>
					</div>

					<div class="nline">
						<div class="ncol1">Доступ в общий закрытый чат Telegram и возможность задавать вопросы диетологу и фитнес тренеру</div>
						<div class="ncol2 fa-color">+</div>
						<div class="ncol3 fa-color">+</div>
						<div class="ncol4 fa-color">+</div>
					</div>

					<div class="nline">
						<div class="ncol1">Доступ в персональный личный кабинет с заданиями и контентом курса (тренировки, питание, бонусы)</div>
						<div class="ncol2 fa-color">+</div>
						<div class="ncol3 fa-color">+</div>
						<div class="ncol4 fa-color">+</div>
					</div>

					<div class="nline">
						<div class="ncol1">12 разных индивидуальных рационов питания на каждую неделю курса</div>
						<div class="ncol2 fa-color">+</div>
						<div class="ncol3 fa-color">+</div>
						<div class="ncol4 fa-color">+</div>
					</div>

					<div class="nline">
						<div class="ncol1">12 разных комплексов физических упражнений для мам</div>
						<div class="ncol2 fa-color">+</div>
						<div class="ncol3 fa-color">+</div>
						<div class="ncol4 fa-color">+</div>
					</div>


					<div class="nline">
						<div class="ncol1">Проверка ежемесячных отчетов</div>
						<div class="ncol2 fa-color">+</div>
						<div class="ncol3 fa-color">+</div>
						<div class="ncol4 fa-color">+</div>
					</div>

					<div class="nline">
						<div class="ncol1">Проверка еженедельных отчетов</div>
						<div class="ncol2 red">-</div>
						<div class="ncol3 fa-color">+</div>
						<div class="ncol4 fa-color">+</div>
					</div>

					<div class="nline">
						<div class="ncol1">Проверка ежедневных отчетов</div>
						<div class="ncol2 red">-</div>
						<div class="ncol3 red">-</div>
						<div class="ncol4 fa-color">+</div>
					</div>
	
					<div class="nline">
						<div class="ncol1">Участие в розыгрыше призов и денег на общую сумму в 2010$</div>
						<div class="ncol2 red">-</div>
						<div class="ncol3 fa-color">+</div>
						<div class="ncol4 fa-color">+</div>
					</div>


					<div class="nline">
						<div class="ncol1"><span class="fa-color">Бонус:</span> образовательное групповое занятие c профессиональным женским психологом</div>
						<div class="ncol2 fa-color">2 часа</div>
						<div class="ncol3 fa-color">4 часа</div>
						<div class="ncol4 fa-color">4 часа</div>
					</div>
					<div class="nline">
						<div class="ncol1"><span class="fa-color">Бонус:</span> образовательное групповое занятие c профессиональным фитнес тренером Кириллом Степанковым	</div>
						<div class="ncol2 fa-color">2 часа</div>
						<div class="ncol3 fa-color">4 часа</div>
						<div class="ncol4 fa-color">4 часа</div>
					</div>
					<div class="nline">
						<div class="ncol1"><span class="fa-color">Бонус:</span> мастер-класс на тему "Как маме вернуть сексуальность и привлекательность после родов" от женского тренера №1 в СНГ Ярослава Самойлова</div>
						<div class="ncol2 red">-</div>
						<div class="ncol3 fa-color">+<br>Ценность 150$</div>
						<div class="ncol4 fa-color">+<br>Ценность 150$</div>
					</div>


					<div class="nline">
						<div class="ncol1"><span class="fa-color">Бонус:</span> мастер-группа формата «вопрос-ответ» с Сергеем Ильковым, Олесей Степанковой 1 час в неделю</div>
						<div class="ncol2 red">-</div>
						<div class="ncol3 fa-color">+<br>Только слушать</div>
						<div class="ncol4 fa-color">+<br>Задавать вопросы и получать ответы</div>
					</div>

					<div class="nline">
						<div class="ncol1"><span class="fa-color">Бонус:</span> мастер класс с профессиональным ТОП стилистом и визажистом</div>
						<div class="ncol2 red">-</div>
						<div class="ncol3 red">-</div>
						<div class="ncol4 fa-color">+<br>Ценность 50$</div>
					</div>
					<div class="nline">
						<div class="ncol1"><span class="fa-color">Бонус:</span> образовательное групповое занятие c одним из лучших массажистов и диетологов Украины и США</div>
						<div class="ncol2 red">-</div>
						<div class="ncol3 red">-</div>
						<div class="ncol4 fa-color">4 часа</div>
					</div>
					<div class="nline">
						<div class="ncol1">VIP-чат в Telegram</div>
						<div class="ncol2 red">-</div>
						<div class="ncol3 red">-</div>
						<div class="ncol4 fa-color">+</div>
					</div>

					<div class="nline">
						<div class="ncol1">3 VIP-встречи с тренерами курса: ответы на личные вопросы</div>
						<div class="ncol2 red">-</div>
						<div class="ncol3 red">-</div>
						<div class="ncol4 fa-color">+</div>
					</div>

					<div class="fline">
						<div class="fcol1">Имунитет от вылета</div>
						<div class="fcol2 red">-</div>
						<div class="fcol3 fa-color">+<br>Один</div>
						<div class="fcol4 fa-color">+<br>Полный</div>
					</div>

					<div class="fline dostup">
						<div class="fcol1">Доступ к материалам и полная поддержка</div>
						<div class="fcol2"><span>120 дней</span><br>(90 дней курс + 30 дней после курса)</div>
						<div class="fcol3"><span>120 дней</span><br>(90 дней курс + 30 дней после курса)</div>
						<div class="fcol4"><span>Безлимит</span><br>(90 дней курс + вечный доступ)</div>
					</div>

					<div class="fline">
						<div class="fcol1">Полная стоимость</div>
						<div class="fcol2 "><div class="text1">399$</div></div>
						<div class="fcol3 "><div class="text1">499$</div></div>
						<div class="fcol4 "><div class="text1">1980$</div></div>
					</div>

					<div class="fline">
						<div class="fcol1">Скидка</div>
						<div class="fcol2"><div class="text2">38%</div></div>
						<div class="fcol3"><div class="text2">49%</div></div>
						<div class="fcol4"><div class="text2">39%</div></div>
					</div>
					<div class="fline">
						<div class="fcolall fcol1"><span class=" fa-color">Акция! Скидка 49% + Пакет «Gold» <del class="red">(499$)</del> по цене «Silver» - 249$</span><div class="t-self">
						<p>До конца акции:</p>
					<div class="wrap" style="display:  none;">
						<span class="day">
						</span><i>дней.</i></div>
					<div class="wrap">
							<span class="hour">00</span>
							<i>часов.</i>
						</div><div class="wrap dot">:</div>
						<div class="wrap">
							<span class="min">00</span>
							<i>мин.</i>
						</div><div class="wrap dot">:</div>
						<div class="wrap">
							<span class="sec">00</span>
							<i>сек.</i>
						</div><div class="wrap dot">:</div>
						<div class="wrap">
							<span class="mili">00</span>
							<i>мил. сек.</i>
						</div>
					</div> </div>
					</div>
					<div class="fline">
						<div class="fcol1">Стоимость сегодня</div>
						<div class="fcol2 fa-color"><div class="text2">249$<br>6549грн<br>15190руб</div><a href="https://mrilkov.e-autopay.com/buy/370556"><div class="fbtn goto">Хочу участвовать</div></a></div>
						<div class="fcol3 fa-color"><img src="img/arr.png" style="
    width: 40px;
    top: -18px;
    position:  relative;
"><div class="text2" style="
    position:  relative;
    top: -20px;
">249$<br>6549грн<br>15190руб</div><a href="https://mrilkov.e-autopay.com/buy/370557" style="
    position:  relative;
    top: -20px;
"><div class="fbtn goto">Хочу участвовать</div></a></div>
						<div class="fcol4 fa-color"><div class="text2">1199$<br>31600грн<br>73600руб</div><a href="https://mrilkov.e-autopay.com/buy/370558"><div class="fbtn goto">Хочу участвовать</div></a></div>
					</div>
					<div class="fline">
						<div class="fcol1">Осталось мест:</div>
						<div class="fcol2"><div class="text2">18 из 100</div></div>
						<div class="fcol3"><div class="text2">9 из 70</div></div>
						<div class="fcol4"><div class="text2">11 из 30</div></div>
					</div>
					<div class="fline">
						<div class="fcol1">Подорожание: </div>
						<div class="fcol2 red"><span id="changedate1"></span> - 299$</div>
						<div class="fcol3 red"><span id="changedate2"></span> - 399$</div>
						<div class="fcol4 red"><span id="changedate3"></span> - 1249$</div>
					</div>


				</div>



			</div>
				<!-- <h2><span>П.С.</span> У тебя сейчас есть два пути… </h2>
				<div class="s6-items">
					<div class="s6-item">
						<div class="img">
							<img src="img/b1.png" alt="">
						</div>
						<p>Либо оставить все как есть, и ты знаешь, к чему это все приведет — одинокие вечера, холодная постель, <span>депрессия</span> в праздники и <span>желание завести кошку</span>…</p>
					</div>
					<div class="s6-item or">
						<img src="img/arrows.png"  alt="">
						<span>или</span>
					</div>
					<div class="s6-item">
						<div class="img">
							<img src="img/b2.png" alt="">
						</div>
						<p>Либо прийти на онлайн мастер-класс и получить инструменты для <span>построения крепких отношений с мужчиной твоей мечты</span>.</p>
					</div>
				</div>
				<div class="h3wrap">
					<h3 class="">Действуй!</h3>
				</div> -->
			</div>
		</section>
		<section class="s4 rect">
			<div class="container"><h5>Наши призы:</h5>
<svg class="arrow">
	<path class="a1" d="M0 0 L30 22 L60 0"></path>
	<path class="a2" d="M0 20 L30 42 L60 20"></path>
	<path class="a3" d="M0 40 L30 62 L60 40"></path>
	<img src="img/prize.png" alt="" style="width: 100%;margin-top: 0px;" class="hidden-lg">
							<div class="days days2" style="  display: flex; padding-top: 0px;
  justify-content: center;
  align-items: center;">
						<img src="img/prize.png" alt="" style=" margin-top: 0px;">
						<div class="text">
							<ul class="pl15 new">
								<li>1 место: сумка Furla (коллекция 2018) от партнеров</li>
								<li>2 место: Кроссовки Adidas от партнеров</li>
								<li>3 место: Кроссовки Fila от партнеров</li>
								<li>4 место: 100$ / 2640 грн / 6370 руб</li>
								<li>5 место: 50$ / 1320 грн / 3180 руб</li>
							</ul>
						</div>
					</div>
</div>
</section>
		<section class="steps steps-area">
        <div class="container">
            <!-- title-section -->
            <h2 style=" margin-top: 0px;">Бонусы для оплативших курс в течении 24 часов: <br><span style="font-size: 16px;color: #696969;font-weight: 300;">(согласно пакету участия)</span></h2>
            <ul class="timeline  second">
                <li class="timeline-box wow fadeInLeft">
                    <i class="icon-layers"></i>
                    <p class="timeline-details">Мастер-группа формата «вопрос-ответ» с Сергеем Ильковым, Олесей Степанковой (12 часов всего) <span>- бесценно</span> </p>
                </li>
                <li class="timeline-box wow fadeInRight">
                    <i class="icon-chat"></i>
                    <p class="timeline-details">Образовательные групповые занятия c профессиональным женским психологом <span>- ценность 119$</span></p>
                </li>
                <li class="timeline-box  wow fadeInLeft">
                    <p class="timeline-details">Образовательные групповые занятия c профессиональным фитнес тренером Кириллом Степанковым <span>- ценность 97$</span></p>
                </li>
                <li class="timeline-box wow fadeInRight">
                    <i class="icon-trophy"></i>
                    <p class="timeline-details">Мастер-класс на тему "Как маме вернуть сексуальность и привлекательность после родов" от женского тренера №1 в СНГ Ярослава Самойлова <span>- ценность 150$</span></p>
                </li>
                <li class="timeline-box  wow fadeInLeft">
                    <i class="icon-tools"></i>
                    <p class="timeline-details">Мастер класс с профессиональным ТОП стилистом и визажистом Яной Глазковой <span>- ценность 100$</span></p>
                </li>
                <li class="timeline-box wow fadeInRight">
                    <i class="icon-trophy"></i>
                    <p class="timeline-details">Образовательные групповые занятия c одним из лучших массажистов и диетологов Украины и США Александром Колаевым <span>- ценность 110$</span></p>
                </li>
            </ul>
            
        </div>
        <!-- .container -->

                 
        </section>


				<section class="s4 rect s42">
			<div class="container">			
				<div class="s4-items">


<ul class="cards">
  <li class="cards__item first">
    <div class="card">
      <div class="card__image card__image--river"></div>
      <div class="card__content">
        <div class="card__title"></div>
        <p class="card__text"></p>
       
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--river hidden-lg"></div>
      <div class="card__content">
        <p class="card__text"> Милая, ты можешь проигнорировать это сообщение. Хотя уже через 90 дней после старта курса твоя фигура может окончательно трансформироваться и стать стройной. Но ты опять поставишь свои мечты на второе место, ведь главное - семья и ребенок. </p>
      </div>
    </div>
  </li>

</ul>


				<blockquote>
				  <p><span>Задумайся вот о чем:</span> инвестиция в здоровье и красоту мамы - это инвестиция в счастье ребенка и его будущее. Ведь только ты закладываешь пример, как выглядеть, ухаживать и относиться к себе. Если ты сделаешь хотя бы половину того, что делают остальные участницы курса, то через неделю после старта курса спросишь себя: <span>“Почему мы не познакомились еще год назад и не начали работать?”.</span></p>
				</blockquote>        
				<h5 style="margin-top: 40px;padding-bottom: 40px">Звучит справедливо?<br> 
					Академия “Мама Xудеет” ждет тебя на курсе.<br>
					<span class="red">Регистрируйся сейчас!</span> Количество мест строго ограничено!</h5>


						<button type="button" href="#packet"  class=" pulse" style="margin-top: 0px;">Хочу участвовать</button>
				
				</div>
			</div>
	
		</section>	

		<section class="s1">
			<div class="container">
				<div class="image featured">
					<div class="w3-content w3-display-container owl-carousel owl-theme" id="div1">
<div  class="swiper-slide">
	<iframe  width="100%" height="400" src="https://www.youtube.com/embed/bXpJjWdv_Pw?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	<div class="text slider">
<h3>Ангелина (г. Киев)</h3>
<p>Возраст: 29 лет</p>
<p>Семейное положение: замужем</p>
<p>Дети: 1 ребенок (дочь 8 мес)</p>
<p>Занятость: мама в декрете, не работает</p>
<p>Результат на <span class="spec">18 день</span> 3-месячного курса</p>
<p class="spec">Результат в кг: -7 кг</p>
<p>Результат в см: -27 см всего в объёмах</p>
</div>
</div>
			<div  class="swiper-slide">		
					<iframe width="100%" height="400"  src="https://www.youtube.com/embed/5anzeGu6Krk?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="text slider"><h3>Мари (г. Днепр)</h3>
<p>Возраст: 31 год</p>
<p>Семейное положение: замужем</p>
<p>Дети: 2 детей (сын, 6 лет, дочь, 7 мес)</p>
<p>Занятость: мама в декрете, не работает</p>
<p>Результат на <span class="spec">10 день</span> 3-месячного курса</p>
<p class="spec">Результат в кг: -3 кг</p>
<p>Результат в см: -30 см всего в объёмах</p></div></div>
						<div  class="swiper-slide">			<iframe  width="100%" height="400" src="https://www.youtube.com/embed/JNVCsHZ_Iio?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>	<div class="text slider"><h3>Нарине (г. Киев)</h3>
<p>Возраст: 30 лет</p>
<p>Семейное положение: замужем</p>
<p>Дети: 1 ребенок (сын, 11 мес)</p>
<p>Занятость: мама в декрете, не работает</p>
<p>Результат на <span class="spec">44 день</span> 3-месячного курса</p>
<p class="spec">Результат в кг: -10 кг</p>
<p>Результат в см: -35 см всего в объёмах</p></div></div>
								<div  class="swiper-slide">	<iframe  width="100%" height="400" src="https://www.youtube.com/embed/LBCmjogMoRk?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>	<div class="text slider"> <h3>Оля (г. Черновцы)</h3>
<p>Возраст: 28 лет</p>
<p>Семейное положение: замужем</p>
<p>Дети: 2 детей (сын, 3.5 года, сын 11 мес)</p>
<p>Занятость: мама в декрете, не работает</p>
<p>Результат на <span class="spec">59 день</span> 3-месячного курса</p>
<p class="spec">Результат в кг: -9 кг</p>
<p>Результат в см: -30 см всего в объёмах</p></div></div>
								<div  class="swiper-slide">	<iframe  width="100%" height="400" src="https://www.youtube.com/embed/OfZaTEuKlLg?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>	<div class="text slider"><h3>Света (г. Винница)</h3>
<p>Возраст: 27 лет</p>
<p>Семейное положение: замужем</p>
<p>Дети: 1 ребенок (дочь, 6 мес)</p>
<p>Занятость: мама в декрете, не работает</p>
<p>Результат на <span class="spec">34 день</span> 3-месячного курса</p>
<p class="spec">Результат в кг: -8 кг</p>
<p>Результат в см: -35 см всего в объёмах</p></div></div>
								<div  class="swiper-slide">	<iframe  width="100%" height="400" src="https://www.youtube.com/embed/xUgedryCO4w?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>	<div class="text slider"><h3>Юлия (г. Киев)</h3>
<p>Возраст: 32 года</p>
<p>Семейное положение: замужем</p>
<p>Дети: 1 ребенок (дочь, 4 мес)</p>
<p>Занятость: мама в декрете, не работает</p>
<p>Результат на <span class="spec">57 день</span> 3-месячного курса</p>
<p class="spec">Результат в кг: -12 кг</p>
<p>Результат в см: -40 см всего в объёмах</p></div></div>
								<div  class="swiper-slide">	<iframe  width="100%" height="400" src="https://www.youtube.com/embed/KZFqffLhda0?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>	<div class="text slider"> <h3>Маргарита (г. Угледар)</h3>
<p>Возраст: 25 лет</p>
<p>Семейное положение: замужем</p>
<p>Дети: 1 ребенок (сын 9 мес)</p>
<p>Занятость: мама в декрете, не работает</p>
<p>Результат на <span class="spec">56 день</span> 3-месячного курса</p>
<p class="spec">Результат в кг: -7 кг</p>
<p>Результат в см: -38 см всего в объёмах</p>
								
</div></div>
								<div  class="swiper-slide">	<iframe  width="100%" height="400" src="https://www.youtube.com/embed/t3Tm3jZV3ro?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>	<div class="text slider"><h3>Елена (г. Киев)</h3>
<p>Возраст: 32 года</p>
<p>Семейное положение: замужем</p>
<p>Дети: 1 ребенок (дочь, 4 года)</p>
<p>Занятость: мама, работает</p>
<p>Результат на <span class="spec">38 день</span> 3-месячного курса</p>
<p class="spec">Результат в кг: -12 кг</p>
<p>Результат в см: -35 см всего в объёмах</p></div></div>
															
					</div>
				</div>	

				<div class="buttons1">
						<button type="button" href="#packet" style="margin-top: 40px;" class=" pulse">Хочу идеальную фигуру</button>
					</div>
			</div>
		</section>

		<section class="s5">
			<div class="container">
				<div class="ghjl">
				<h2>Вопросы и сомнения, возникшие у тебя:</h2>
<ul class="accordion">
	<li>
		<a>Я боюсь, что после оплаты участия в курсе и начала обучения меня бросят на произвол судьбы, просто кидая дурацкие задания… </a>
		<p>Этим мы и отличаемся от курсов, которые проводят звезды. У нас каждая мама  окружена вниманием и заботой 24/7, круглосуточно работает служба поддержки, и промежуточные результаты докручивают лично все эксперты.</p>
	</li>
	<li>
		<a>Боюсь, что  не будет поддержки от семьи и муж не поймет...</a>
		<p>Твое женское здоровье и красота - твоя первая обязанность. Покажи им, что ты настроена серьезно и решительно. Когда ты начнешь заботиться о себе, стройнеть на глазах, светиться уверенностью от первых побед, заново чувствовать себя сексуальной и привлекательной,  -  они с восхищением подтянутся за тобой. Даже если сейчас у тебя нет поддержки - просто выполняй задания курса: готовь вкусную и полезную еду - и ты сама не заметишь, как сформируешь здоровый образ жизни для всей семьи. 
</p>
	</li>
	<li>
		<a>Переживаю, что ребенок не будет давать тренироваться… Как тогда быть?</a>
		<p>Тренеры и эксперты курса отлично знают, что малыши бывают не в настроении и пытаются испортить весь процесс. Просто заранее организуй коврик с игрушками,   а сама рядом продолжай заниматься. Малышу главное - чтобы мама была рядом, чтобы он Ее видел. Так вы останетесь довольны оба. 
</p>
	</li>	<li>
		<a>Если я заболею и выпаду из тренировок и питания на некоторое время, вы дисквалифицируете меня?</a>
		<p>Нет, конечно, по причине болезни мы никого выгонять не будем. Если даже ты не занимаешься - просто присылаешь отчет таким, какой он есть. Можешь написать, что не тренируешься, так как болеешь, поэтому результата за неделю пока нет, и т.д. Как только ты восстановишься, мы сделаем все, чтобы ты догнала по результатам других участниц.

</p>
	</li>
</ul>
<h2>О здоровье и твоих особенностях</h2><ul class="accordion">
	<li>
		<a>Позволяет ли мое здоровье выполнять тренировки проекта?</a>
		<p>Тренировки подобраны таким образом, что позволяют большинству выполнять их в полной мере без вреда для здоровья. Если сомневаешься - сначала обследуйся у доктора.</p>
	</li>
	<li>
		<a>Могут ли принимать участие в программе беременные или кормящие грудью? </a>
		<p>Для кормящих мам мы предлагаем более калорийное меню, при этом оно полностью сбалансировано и не влияет на качество лактации. Кормящим матерям принимать участие конечно можно. Беременным принимать участие запрещено.
</p>
	</li>
	<li>
		<a>Через какое время после родов я могу начать ваш курс?</a>
		<p>Мы советуем начинать активно заниматься не ранее чем через 1-1,5 месяца после естественных родов, 2 и более- после кесарева сечения. Начинать занятия стоит с легкой интенсивностью, предварительно посоветовавшись с лечащим врачом.
</p>
	</li>	<li>
		<a>Нужна ли специальная подготовка для начала тренировок?</a>
		<p>Особая подготовка не нужна, потому что нагрузка будет увеличиваться постепенно, и даже не очень подготовленный организм должен воспринять это нормально.

</p>
	</li>
</ul>

<h2>О питании</h2>
<ul class="accordion">
	<li>
		<a>Если я вегетарианка, подойдет ли мне питание в проекте?
</a>
		<p>Ты используешь те продукты питания, которые можешь употреблять. При этом соблюдая суточную норму белков, жиров и углеводов, которую мы просчитываем на основе твоего рациона. А так же мы обязательно будем публиковать рецепты для веганов.</p>
	</li>
	<li>
		<a>Где покупать продукты для диеты?</a>
		<p>Диеты, как таковой, и нет, в том-то и дело. У тебя будет правильно сбалансированное по макронутриентам питание. Заморских продуктов тоже не будет. Всё необходимое - в супермаркете за углом по доступным потребительским ценам.
</p>
	</li>
	<li>
		<a>А что если мне не понравится ваше питание и я такое не ем ?</a>
		<p>Замена продуктов будет предлагаться, не переживай.

</p>
	</li>	<li>
		<a>Вы будете рассказывать на курсе, что кушать до и после тренировки?</a>
		<p>Да, конечно, обязательно. Всю важную информацию каждая из вас получит в первые дни курса.

</p>
	</li>	<li>
		<a>Вы будете учить, что можно есть на ужин, что на завтрак и т.д ?</a>
		<p>Мы будем тебя учить во время прохождения курса, что можно кушать в течение суток, а что - нельзя… В каких количествах и во сколько…

</p>
	</li>
</ul>

<h2>Об участии</h2>
<ul class="accordion">
	<li>
		<a>Необходимо ли мне ежедневно снимать видео тренировок? 
</a>
		<p>Нет, ежедневно снимать не нужно. Достаточно выполнять обязательные отчетные видео 2 раза в неделю, если ты хочешь принимать участие в розыгрыше призов.</p>
	</li>
	<li>
		<a>Подойдет ли мне курс, если я не мама?</a>
		<p>Мы рады всем. Курс по методу М7  - универсальный и подходит всем женщинам.
</p>
	</li>
	<li>
		<a>Можно ли принимать участие в проекте жителям других стран? </a>
		<p>Да, в любой стране, в любом населенном пункте ты можешь принимать участие в проекте. Все, что тебе необходимо, — это желание и доступ к интернету.

</p>
	</li>	<li>
		<a>Как понять, что у меня получится справиться с курсом?</a>
		<p>Пройти курс под силу абсолютно каждой, у кого нет явных серьезных проблем со здоровьем. А также если ты не беременна;) Нет никаких сверхъестественных упражнений и плана питания, все доступно и понятно.


</p>
	</li>	<li>
		<a>Кто и как будет выбирать победителей?</a>
		<p>Победителей будем выбирать мы - Сергей, Олеся и Кирилл - по итогам работы и результатам - замерам, фото До и После, а также по наличию всех обязательных заданий.

</p>
	</li>
	<li>
		<a>Нужно ли выставлять куда-то фото в нижнем белье?</a>
		<p>Да, выставлять нужно будет в твоем закрытом профиле, специально созданном под наш курс инстаграм-аккаунте под нашим хештегом. Чтобы оставаться анонимной, ты можешь закрыть лицо листком бумаги или стикером)

</p>
	</li>
</ul>

<h2>О спорте и тренировках</h2>
<ul class="accordion">
	<li>
		<a>Как будут проходить тренировки?
</a>
		<p>За день до выполнения ты получишь задание. Например, тренировка будет выкладываться сегодня на завтра и рассчитана исключительно на выполнение в домашних условиях.</p>
	</li>
	<li>
		<a>Нужна ли специальная подготовка для начала тренировок?</a>
		<p> Особая подготовка не нужна, потому что нагрузка будет увеличиваться постепенно, и даже не очень подготовленный организм должен воспринять это нормально.
</p>
	</li>
	<li>
		<a>Смогу ли я заниматься, если я давно не занималась спортом?</a>
		<p>Конечно, сможешь. Если твой малыш уже довольно тяжёлый, а твой уровень подготовки пока ниже - можно тренироваться без него, используя другие подручные средства.

</p>
	</li>	<li>
		<a>Сколько времени длятся тренировки?</a>
		<p>Тренировки  будут занимать 20-40 минут, не более. Это будет зависеть от твоего темпа, и сколько ты будешь отвлекаться на малыша.  


</p>
	</li>	<li>
		<a>Какой максимальный вес ребенка допускается при совместном занятии?</a>
		<p>Все зависит от твоей  физической подготовки. Если малыш весит более 15 кг, и ты только начинаешь свой спортивный путь, - лучше использовать бутылки с водой. Как только тело привыкнет к нагрузкам и окрепнет - можно приступать к тренировкам и с малышом.

</p>
	</li>
	<li>
		<a>Какой инвентарь понадобится для прохождения курса?
</a>
		<p>Самый главный утяжелитель - это твой сладкий малыш.Также тебе понадобится фитнес-коврик (можно заменить на покрывало), кроссовки, бутылки по 0.5-1 л с водой или песком (на случай, если малыш откажется тренироваться с тобой) и бутылка питьевой воды.

</p>
	</li>
	<li>
		<a>Необходимо ли мне ежедневно снимать видео тренировок? 
</a>
		<p>Нет, ежедневно снимать не нужно. Достаточно выполнять обязательные отчетные видео 2 раза в неделю, если ты хочешь принимать участие в розыгрыше призов.

</p>
	</li>
</ul>

<h2> Об участии </h2>
<ul class="accordion">
		<li>
		<a>А когда будет следующий курс, если не успею попасть на этот?</a>
		<p>Следующий курс будет не ранее чем через 3 месяца. И если не сейчас, то когда? Потом ты уже не решишься… Действуй сейчас, действуй в моменте, как мы учили.

</p>
	</li>
	<li>
		<a>Будет ли вылет из курса? По каким причинам можно вылететь, за какие нарушения?
</a>
		<p>Да, будет. Если ты не покажешь нам фото до/после и не будешь отправлять нам промежуточные результаты во время прохождения курса. Вылет и бан могут быть также за оскорбление других участниц и команды.

</p>
	</li>
	<li>
		<a>Сколько всего будет участниц? 
</a>
		<p>Всего мы набираем не более 200 участниц. Так как у нас недостаточно менеджеров, чтобы справиться с большим количеством людей в потоке.

</p>
	</li>
	<li>
		<a>Если я нахожусь сейчас в процессе планирования, но случайно попала на ваш мастер-класс, могу начать участие? 
</a>
		<p>Да, принимать участие могут все желающие девушки. Если ты только планируешь - это отлично. Тренировки и отличная физподготовка до беременности очень помогает нам потом. Но если беременность наступит во время прохождения курса, - проконсультируйся с твоим лечащим врачом.

</p>
	</li>
	<li>
		<a>Могу ли я дополнительно ходить в спортзал и на массажи? Будет ли это честно по отношению к другим? 
</a>
		<p>Мы не можем тебе запретить пользоваться дополнительными услугами. В прошлых потоках были девушки, которые ходили и на антицеллюлитный массаж, и в тренажёрный зал, и на зумбу параллельно и в комплексе с нашим Курсом. Если твой малыш тебе позволяет отлучаться - это же здорово

</p>
	</li>
	<li>
		<a> Как вы сможете столько человек одновременно контролировать? 
</a>
		<p>Поэтому количество мест и ограничено. Так как с большим количеством людей наши менеджеры уже не справятся. Поэтому поспеши, принимай решениe быстро.
</p>
	</li>
	<li>
		<a>Нет ли у вас курса пoxудения еще и для мужа? Или мужчины тоже могут принимать здесь участие?
</a>
		<p>Можно без проблем подключать к тренировкам и мужа) Если у него появится это желание - поддержи его) Идти к общей цели будет легче, когда вся семья на одной волне.

</p>
	</li>
	<li>
		<a>Как вы будете проверять наши результаты? Их куда-то нужно будет отправлять?
</a>
		<p>Для удобства тебе нужно будет публиковать фото и видео в инстаграм под нашим хештегом.  

</p>
	</li>
	<li>
		<a>У меня закрыт профиль в инстаграм, не хочу открывать и вообще не хочу, чтобы мои друзья знали, что я xудею. Как быть? 
</a>
		<p>Ты можешь создать отдельную страницу в инстаграм для участия в курсе и работать с нее, выкладывая необходимые отчеты.

</p>
	</li>
	<li>
		<a>Будете ли вы публиковать наши результаты до-после где-то после окончания курса?
</a>
		<p>Да, лучшие результаты будут опубликованы на нашем сайте и в наших пабликах в соц. сетях. Твое лицо будет скрыто, не переживай.

</p>
	</li>
	<li>
		<a>Могу ли я пользоваться доступом к курсу после окончания?
</a>
		<p>Это будет зависеть от пакета, который ты приобретешь.<br>
Silver: 120 дней (90 дней курс + 30 дней доступ к материалам).<br>
Gold: 120 дней (90 дней курс + 30 дней доступ к материалам).<br>
Diamond: безлимит (90 дней курс + вечный доступ к материалам).


</p>
	</li>
</ul>
</div>

		<!-- 		<div class="pdf">
					<p>Жми на кнопку, регистрируйся и получи в подарок PDF-чеклист <b>«10 слов, которые заставляют мужчину расцветать изнутри»</b></p>
				</div> -->

				<div class="h-text">
					<button href="#packet"  class=" pulse">Точно участвую</button>
				</div>

			<!-- 	<div class="t-self">
					<p>До конца акции осталось::</p>
					<div class="wrap ml0">
						<span class="day">00</span>
						<i>дней.</i>
					</div>
					<div class="wrap">
						<span class="hour">00</span>
						<i>часов.</i>
					</div>
					<div class="wrap">
						<span class="min">00</span>
						<i>мин.</i>
					</div>
					<div class="wrap">
						<span class="sec">00</span>
						<i>сек.</i>
					</div>
					<div class="wrap">
						<span class="mili">00</span>
						<i>мил. сек.</i>
					</div>
					<img src="img/arrow2.png"  alt="">
				</div> -->

			</div>
		</section>
<section class="question-box container ios">
	<div class="from-them">
				<p class="question-box__txtGray question-box__txtGray_1">Можно ли оплатить полностью?</p></div>  <div class="clear"></div>
				<div class="from-me"><p class="question-box__txtBlack question-box__txtBlack_1">Будет ли у меня результат?</p></div>  <div class="clear"></div>
				<div class="from-them"><p class="question-box__txtGray question-box__txtGray_2">А можно забронировать пакет?</p></div>  <div class="clear"></div>
				<div class="from-me"><p class="question-box__txtBlack question-box__txtBlack_2">Я беременная, но хочу участвовать...</p></div><div class="clear"></div>
				<div class="from-them"><p class="question-box__txtGray question-box__txtGray_3">Я участвовала в марафонах − не получилось. Как и что делать дальше?</p></div><div class="clear"></div>
				<div class="from-me"><p class="question-box__txtBlack question-box__txtBlack_2">Как быть, если я хочу участвовать позже?</p></div><div class="clear"></div>
			</section>
	<section class="reviews-box">
				<p class="reviews-box__ttl">
					Ответ на все <br>эти вопросы - один<span class="color-green">.</span>
				</p>
				<p class="reviews-box__txt">
					Напиши нам или закажи обратный звонок. <br>
					<span class="light">На каждый свой вопрос ты получишь профессиональный ответ.</span> 
				</p>
			</section>
				<section class="question-box container">
				
					<blockquote style="margin-top: 0px">
				  <p style="margin: 20px"><span>100%-ный возврат денег</span><br>

Без лишних вопросов, если на протяжении 3 месяцев во время курса ты решишь, что данный курс − не для тебя. Ты− просто уходишь без права вернуться на наши занятия в рамках этого курса, мы − просто отдаем 100 % внесенных тобой средств включая комиссию. Все честно.</p>
				</blockquote>
				 <h5 style="margin-top: 40px">О нас говорят:</h5>
					<div class="image featured">
					<div class="w3-content w3-display-container owl-carousel owl-theme" id="div2">

								<div  class="swiper-slide"><img src="img/1.png" alt="">	</div>
								<div  class="swiper-slide"><img src="img/3.png" alt="">	</div>
								<div  class="swiper-slide"><img src="img/5.png" alt="">	</div>
								<div  class="swiper-slide"><img src="img/8.png" alt="">	</div>
															
					</div>
				</div>	
				<div class="buttons1">
						<button type="button" href="#packet" style="margin-top: 40px;" class=" pulse">Хочу участвовать</button>
					</div>
			</section>
<footer>
			<div class="links social">
				<a href="https://www.facebook.com/mamahudeet.ilkov/"><img src="img/icon (5).png" alt=""></a>
				<a href="https://www.instagram.com/sergey_ilkov/"><img src="img/icon (6).png" alt=""></a>
			</div>
			<p>По всем вопросам: <a href="mailto:info@mamahudeet.com"> info@mamahudeet.com</a></p>
			<p><a href="tel:+380673290392">+380673290392(Украина)</a></p>
			<p><a href="tel:+79587568901">+79587568901(Россия)</a></p>
			<div class="links social">
				<a href="tg://resolve?domain=nikname"><img src="img/icon (1).png" alt=""></a>
				<a href="whatsapp://send?phone=+380673290392"><img src="img/icon (2).png" alt=""></a>
				<a href="viber://add?number=+380673290392"><img src="img/icon (3).png" alt=""></a>
			</div>
			<p><a href="tel:+380673290392">+380673290392 </a></p>
			<div class="links">
				<a href="https://mamahudeet.com/info/politica.pdf">Политика конфиденциальности</a>
				<a href="https://mamahudeet.com/info/dogovor.pdf">Договор оферты </a>
				<a href="https://mamahudeet.com/info/rassilka.pdf">Согласие с рассылкой</a>
			</div>
			<p>Воронка создана в digital-marketing мастерской «F&nbsp;U&nbsp;N&nbsp;N&nbsp;E&nbsp;L™»</p>
			<p>© Мама Xудеет. Все права защищены. Любое копирование материалов разрешено только с согласия правообладателей.</p>
			<img src="img/logo.svg" style="max-width: 200px;">
		</footer>
	</div>


<script src="owl/owl.carousel.min.js"></script>
<script type="text/javascript">
	$('button[href^="#"]').click(function(){
//Сохраняем значение атрибута href в переменной:
var target = $(this).attr('href');
$('html, body').animate({scrollTop: $(target).offset().top}, 800);
return false;
});

	(function($) {$('#div1').owlCarousel({
	items:1,
	nav:true,
});	
 			$('#div2').owlCarousel({
	items:4,
	loop:true,
});
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
    
})(jQuery);


</script>

	<script src="js/scripts.min.js" ></script>

   <?php
$pixel = include '../need/itischat.html';
?>

</body>
</html>
