$(function(){

 $('a.ajax_add_to_cart').click(function () {
  var title = $(this).attr("rel");
  $(".popup").fadeIn(500);
  $("body").append("<div id='overlay'></div>");
  $('#overlay').show().css('opacity','0.8');
  $('.popup .popup-cont').prepend("<div id='tov-title'>&mdash; "+title+" &mdash;</div>");
  $("input[name='comment']").val(title);                          
  $('a.close, .popup-overlay').click(function (e) {
    if ( e.target !== this ) return;  
    $('.popup').fadeOut(100);
    $('#overlay').remove();
    $('#tov-title').remove();
    return false;
  });
  return false;                
});

 $("a[href^='#']").click(function(){
  var _href = $(this).attr("href");
  $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
  return false;
});
});
$(document).ready(function() {
  var people = ["Домаш Наталья", "Лагутова Наталья", "Степанкова Юлия", "Перешивкина Лиза", "Кобзева Диана", "Кабанова Ирина", "Чепурина Ева", "Крымова Алина"]
  var city = ["Александрия", "Алчевск", "Белая Церковь", "Бердянск", "Бровары", "Винница", "Горловка", "Днепр", "Донецк", "Евпатория", "Енакиево", "Житомир", "Запорожье", "Ивано-Франковск", "Каменец-Подольский", "Каменское", "Керчь", "Киев", "Константиновка", "Краматорск", "Красный Луч", "Кременчуг", "Кривой Рог", "Кропивницкий", "Лисичанск", "Луганск", "Луцк", "Львов", "Макеевка", "Мариуполь", "Мелитополь", "Николаев", "Никополь", "Одесса", "Павлоград", "Полтава", "Ровно", "Севастополь", "Северодонецк", "Симферополь", "Славянск", "Стаханов", "Сумы", "Тернополь", "Ужгород", "Харьков", "Херсон", "Хмельницкий", "Черкассы", "Чернигов", "Черновцы"];
  setTimeout(function() {
    setInterval(function() {
      $('#triger .name').html(people[Math.floor(Math.random() * people.length)]);
      $('#triger .city').html(city[Math.floor(Math.random() * city.length)]);
      $('#triger').fadeIn(300);
      setTimeout(function() {
        $('#triger').fadeOut(300);
      }, 3000);
    }, 10000);
  }, 3000)

  var sale = $("#sale");
  $(window).scroll(function(){
    if ( $(this).scrollTop() > 1000 ){
      sale.addClass("sale_fixed");
    } else if($(this).scrollTop() <= 1000 ) {
      sale.removeClass("sale_fixed");
    }
  });
}); 