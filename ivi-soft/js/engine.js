// Как только страничка загрузилась 
	window.onload = function () { 
		// проверяем поддерживает ли браузер FormData 
			if(!window.FormData) {
				/* * если не поддерживает, то выводим 
				* то выводим предупреждение вместо формы */
				var div = ge('content');
				div.innerHTML = "Ваш браузер не поддерживает объект FormData";
				div.className = 'notSupport'; 
			}
	}


$(document).ready(function(){
	// =validation
	var errorTxt = 'Ошибка отправки';
	$("#sendform").validate({
		submitHandler: function(form){
			var form = document.forms.sendform,
				formData = new FormData(form),
				xhr = new XMLHttpRequest();

			xhr.open("POST", "/send.php");
			
			xhr.onreadystatechange = function() {
			    
				if (xhr.readyState == 4) {
                    
					if(xhr.status == 200) {
                    $("input[name='email']").val(" ");
                    $("#message").val(" ");
                    $("#thank").html('<i style="color:red;text-align:text-center;">Ваше сообщение получено.\nПредставитель фирмы свяжется с Вами в ближайшее время</i>');
					$("input[name='tel']").val(" ");
					}
				}
                    $("#name").val(" ");
                    $("#file").val("1");
			};
			xhr.send(formData);
		}
	});	
})

function sendSuccess(callback){
	$(callback).find("form fieldset").html(thank);

	
}
