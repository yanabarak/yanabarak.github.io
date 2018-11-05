// var visitor_uid;
// window.AMOPIXEL_IDENTIFIER_PARAMS = window.AMOPIXEL_IDENTIFIER_PARAMS || {};
// window.AMOPIXEL_IDENTIFIER_PARAMS.onload = function (pixel_identifier) {
//     visitor_uid = pixel_identifier.getVisitorUid(); // Получаем visitor_uid
//     console.log('visitor_uid =', visitor_uid);
//    //  if (visitor_uid) {
//    //    // Записываем его в скрытое поле формы 'visitor_uid'
//    //    document.getElementById('visitor_uid').value = visitor_uid;
//    // }
// };

$(document).ready(function (){

var utm_source = ' ', 
  utm_medium = ' ', 
  utm_campaign = ' ', 
  utm_content = ' ';

  // Vendor
  init();
 
function getUrlVar(){
  var urlVar = window.location.search;
  var arrayVar = [];
  var valueAndKey = [];
  var resultArray = [];
  arrayVar = (urlVar.substr(1)).split('&');
  if(arrayVar[0]=="") return false;
  for (i = 0; i < arrayVar.length; i ++) {
    valueAndKey = arrayVar[i].split('=');
    resultArray[valueAndKey[0]] = valueAndKey[1];
  }
  return resultArray;
}
 
function init(){
  var utm = getUrlVar();
  jQuery('.vendor').each(function(){
      jQuery(this).val(utm['utm_campaign']);
  });
  
  
  if (utm['utm_source'] != undefined) {
    utm_source = utm['utm_source'];
  } 
  if (utm['utm_medium'] != undefined) {
    utm_medium = utm['utm_medium'];
  } 
  if (utm['utm_campaign'] != undefined) {
    utm_campaign = utm['utm_campaign'];
  } 
  if (utm['utm_content'] != undefined) {
    utm_content = utm['utm_content'];
  } 
}


console.log('script_validation');
// теперь без разници сколько будет форм
var formPopup = new Validator({
	formId: 'form',
	validPerentClassName: 'inputValid',
	notValidPerentClassName: 'inputNotValid',
	itemPerentClassName: 'validation-item',
	inputs: [
		{
			name: 'phone-type',
			isRuntimShowError: true, // если false выведит ошибку при нажатии на кнопк
			validateFunctions: [Validator.minLenght(8), Validator.maxLenght(15)]
		},
		{
			name: 'Email',
			isRuntimShowError: true,
			validateFunctions: [Validator.email]
		},
		{
			name: 'Firstname',
			isRuntimShowError: true,
			validateFunctions: [Validator.requared]
		},
	]
});

console.log('form_popup', formPopup);

 	// для формы отправки на емейл

 	var form_email = $('#form');
	form_email.on('submit', function(e){
  e.preventDefault();
  var me = this;
  var form = $(this);
  console.log('form_popup', formPopup);
  formPopup.updateUi();
	if(formPopup.isValid){
		var phoneNumber = form_email.find('.picked-code').text().replace(/[\s{2,}]+/g, '') + formPopup.inputControl['phone-type'].value;
		console.log(phoneNumber);
		$('#property_phone').val(phoneNumber);
		console.log('form true');
		
        var loginWindow = window.open('', 'UserLogin');
        loginWindow.blur();     

	  console.log(form.find("input[name$='Firstname']").val());
	  console.log(form.find("input[name$='Email']").val());
	  console.log(form.find("input[name$='property_phone']").val());
	  console.log(form.find("input[name$='prod_name']").val());

	  var arr = {
	    'name': form.find("input[name$='Firstname']").val(), // - имя контакта        в новый контакт
	    'email': form.find("input[name$='Email']").val(), // - емейл контакта     в новый контакт
	    'phone': form.find("input[name$='property_phone']").val(), // - телефон контакта  в новый контакт
	    'prod_name':           'youtube-mk-aprel',     // - имя продукта (сделки) ЗАДАЕТСЯ В АДМИНКЕ
	    'price':               '0',         // - цена в поле price
	    'utm_source':          utm_source,    // - в сделку
	    'utm_medium':          utm_medium,    // - в сделку
	    'utm_campaign':        utm_campaign,  // - в сделку
	    'utm_content':         utm_content,   // - в сделку
	    // 'visitor_uid':         visitor_uid,   // - идентификатор для AmoCRM в сделку в visitor_uid
	    'note':                '',          // - заметка в сделку и контакт
	    'partners':            '',       // - идентификатор партнера
	    'src':                 'form'
	   };
	   
	
	   $.ajax({
	    url: 'order_send.php',
	    type: 'POST',
	    data: arr,
	    success: function(msg) {
            loginWindow.location.href = 'http://mamahudeet.com/m7/help/';
	    	$('#openModal').css("display", "block");
	    },
	    error: function(err) {
	      console.log(err); 
            loginWindow.location.href = 'http://mamahudeet.com/m7/';             
	    }
	  });

	  // if (typeof dataLayer != 'undefined') {
	  //   console.log('dataLayer is good');
	  //   dataLayer.push({"event": "sub_MK-MSG"});

	  //   $.ajax({
	  //     type: 'POST',
	  //     url: 'http://www.google-analytics.com/collect?v=1&tid=UA-78266279-2&cid='+ClientID+'&an=My%20Awesom%20APP&aid=com.daimto.awesom.app&av=1.0.0&aiid=come.daimto.awesom.installer &t=event&ec=list&ea=accounts&userclicked&ev=10',
	  //     dataType: 'json',
	  //     success: function(data){
	        
	  //     },
	  //       error: function(err) {
	  //       }
	  //   });
	  // }  else {
	  //   console.error('dataLayer is not a function');
	  // }

		// me.submit();
	} else {
		console.log('form not valid');
	}

  return false;

});
	
});