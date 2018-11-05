$(document).ready(function (){ // для поля телефона выбор страны
	var countryCode;
	var dialCode;
	$.ajax({
	  type: 'GET',
	  url: 'https://freegeoip.net/json/',
	  dataType: 'json',
	  success: function(data){
	    countryCode = data.country_code.toLowerCase();
	    console.log(countryCode);
	    var elementCurrentCountry = $("[data-country-code="+ countryCode +"]");
	    if (!elementCurrentCountry.length > 0) {
			elementCurrentCountry = $("[data-country-code='ua']");
		}
		changeCountryInPhoneOnCurrent(elementCurrentCountry);
		$('.invalid-phone-dial-code').text(dialCode);
	    
	  },
      error: function(err) {
       	elementCurrentCountry = $("[data-country-code='ua']");
       	changeCountryInPhoneOnCurrent(elementCurrentCountry);
      }
	});

	$('.flag-container').on('click', function () {
		$('.country-list').toggle();
	});
	$('.country').on('click', function () {
		var thisElementCountry = $(this);
		changeCountryInPhoneOnCurrent(thisElementCountry);
	});
	function changeCountryInPhoneOnCurrent(currentElementCountry) {
		dialCode = currentElementCountry.data('dial-code');
		countryCode = currentElementCountry.data('country-code');
		$('.selected-flag').find('.current-flag-country').data('dial-code', dialCode).removeClass().addClass('current-flag-country ' + countryCode);
		$('.picked-code').text('+' + dialCode);

	};

	// var input1 = $(".wrapper-input-phone input[name$='phone-type']");
	// 	input1.keyup(function(){
	// 		var parent = $(this).parent();
	// 		var inputForSend = parent.find(".provide-value-phone-type");
	// 		inputForSend.val(parent.find(".picked-code").text().replace(/[\s{2,}]+/g, '') + $(this).val());
	// 		console.log(inputForSend.val());
	// 	});
});
// Клас валидатора можно в отдельный фаил
// не зависит от jquery
function Validator(formControls) {
	function _getValidationWrapper(input, itemPerentClassName) {
		var validationWrapper = input.parentNode;
		if(!_isHaveClass(validationWrapper, itemPerentClassName)){
			validationWrapper = input.parentNode.parentNode;
		}
		return validationWrapper;
	}
	function _removeClass(obj, cls) {
	  var classes = obj.className.split(' ');
	  for (var i = 0; i < classes.length; i++) {
	    if (classes[i].replace(' ','') === cls) {
	      classes.splice(i, 1);
	      i--;
	    }
	  }
	  obj.className = classes.join(' ');
	}
	function _isHaveClass(obj, cls) {
	  var classes = obj.className.split(' ');
	  for (var i = 0; i < classes.length; i++) {
	    if (classes[i].replace(' ','') === cls) {
	      return true;
	    }
	  }
	  return false;
	}
	function _addClass(obj, cls) {
	  var classes = obj.className.split(' ');
	  for (var i = 0; i < classes.length; i++) {
	    if (classes[i].replace(' ','') === cls) {
	      classes.splice(i, 1);
	      i--;
	    }
	  }
	  classes.push(cls);
	  obj.className = classes.join(' ');
	}
	function _eqNull(value) {
    return typeof value === 'undefined' || value === null;
  }
  function _validators(array_validate_functions, value_input){
  	var isValid = true;
  	for (var i = 0; i < array_validate_functions.length; i++) {
  		isValid = isValid && array_validate_functions[i](value_input);
  	}
  	return isValid;
  }
	var i = 0;
	var inputs = [];
	var formElement = document.getElementById(formControls.formId);
	var self = this;
	this.isValid = true;
	this.inputControl = {};
	for(i = 0; i<formControls.inputs.length; i++){
		inputs[i] = document.querySelector("#"+ formControls.formId + " input[name="+ formControls.inputs[i].name +"]");
		this.inputControl[formControls.inputs[i].name] = {};
		this.inputControl[formControls.inputs[i].name].isValid = _validators(formControls.inputs[i].validateFunctions, inputs[i].value);
		this.inputControl[formControls.inputs[i].name].value = inputs[i].value;
		self.isValid = self.isValid && this.inputControl[formControls.inputs[i].name].isValid;
		// todo need use value change event not keyup
		inputs[i].addEventListener('keyup', function (i) {
      return function() {
			  var validationWrapper = _getValidationWrapper(this, formControls.itemPerentClassName);
				self.inputControl[formControls.inputs[i].name].isValid = _validators(formControls.inputs[i].validateFunctions, inputs[i].value);
				self.inputControl[formControls.inputs[i].name].value = inputs[i].value;
				if(formControls.inputs[i].isRuntimShowError) {
					if(self.inputControl[formControls.inputs[i].name].isValid) {
						_removeClass(validationWrapper, formControls.notValidPerentClassName);
						_addClass(validationWrapper, formControls.validPerentClassName);
					} else {
						_removeClass(validationWrapper, formControls.validPerentClassName);
						_addClass(validationWrapper, formControls.notValidPerentClassName);
					}
				}
				self.isValid = true;
				for( var key in self.inputControl ) {
					self.isValid = self.isValid && self.inputControl[key].isValid;
				}
		  }
    }(i));
	}
	this.updateUi = function() {
		var input;
		var wrapper;
		if(!self.isValid) {
				for( var key in self.inputControl ) {
					if(!self.inputControl[key].isValid) {
						input = document.querySelector("#"+ formControls.formId + " input[name="+ key +"]");
						wrapper = _getValidationWrapper(input, formControls.itemPerentClassName);
						_removeClass(wrapper, formControls.validPerentClassName);
						_addClass(wrapper, formControls.notValidPerentClassName);
					} else {
						input = document.querySelector("#"+ formControls.formId + " input[name="+ key +"]");
						wrapper = _getValidationWrapper(input, formControls.itemPerentClassName);
						_removeClass(wrapper, formControls.notValidPerentClassName);
						_addClass(wrapper, formControls.validPerentClassName);
					}
				}
		}
	}
}

// можно пополнять стек валидаций присоединяя их к Validator
// todo Добавить возможность чтобы можно было подключить несколько валдаторов к одному полю


Validator.example = function (parameters) {
	return function(valueInput) { 
		// valueInput текущее значение инпута
		var isValidValue = true;  // скрипт посчитает поле валидным
		    isValidValue = false; // скрипт посчитает поле не валидным

		return isValidValue;
	}
}

Validator.minLenght = function (minLenght) {
	return function(valueInput) {
		return valueInput.length >= minLenght;
	}
}

Validator.maxLenght = function (maxLenght) {
	return function(valueInput) {
		return valueInput.length <= maxLenght;
	}
}

Validator.email = function(valueInput) {
	var isValid = valueInput.match(/^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/i);
	if(isValid == null) return false;
	return isValid;
}

Validator.noValidate = function(valueInput) {
	return true;
}

Validator.requared = function(valueInput) {
	return valueInput.length > 0;
}


	function NumbersInternational(e) //without symbol +
	{
		var keynum;
		var keychar;
		var numcheck;

		if(window.event) // IE
		  {
		  keynum = e.keyCode;
		  }
		else if(e.which) // Netscape/Firefox/Opera
		  {
		  keynum = e.which;
		  }
		keychar = String.fromCharCode(keynum);
		numcheck = /[\d\s()-]/;
		return numcheck.test(keychar)|| keynum<32;
	}

