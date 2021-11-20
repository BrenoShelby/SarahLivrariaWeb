var Sarah = Sarah || {};

Sarah.MaskMoney = (function() {
	
	function MaskMoney() {
		this.decimal = $('.js-decimal');
		this.plain = $('.js-int');
	}
	
	MaskMoney.prototype.enable = function() {
		this.decimal.maskMoney({ decimal: ',', thousands: '.' });
		this.plain.maskMoney({ precision: 0, thousands: '.' });
	}
	
	return MaskMoney; 
	
}());


Sarah.MaskCpf = (function() {
	
	function MaskCpf() {
		this.inputCpf = $('#cpf');
	}

	MaskCpf.prototype.enable = function() {
		this.inputCpf.mask('000.000.000-00');
	}


	return MaskCpf;
}());


Sarah.MaskCnpj = (function() {
	
	function MaskCnpj() {
		this.inputCnpj = $('#cnpj');
	}


	MaskCnpj.prototype.enable = function() {
		this.inputCnpj.mask('00.000.000/0000-00');
	}



	return MaskCnpj;
}());


Sarah.MaskCep = (function() {
	
	function MaskCep() {
		this.inputCep = $('#cep');
	}


	MaskCep.prototype.enable = function() {
		this.inputCep.mask('00000-000');
	}



	return MaskCep;
}());

Sarah.MaskPhoneNumber = (function() {
	
	function MaskPhoneNumber(){
		this.inputPhoneNumber = $('#telefone');
	}
	
	
	MaskPhoneNumber.prototype.enable = function() {
		
		var maskBehavior = function (val) {
		 return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		};
		
		var options = {
			onKeyPress: function(val, e, field, options) {
				field.mask(maskBehavior.apply({}, arguments), options);
		 	}
		};
		
		
		this.inputPhoneNumber.mask(maskBehavior, options);
		
		
	}
	
	return MaskPhoneNumber;
	
}());

Sarah.MaskDate = (function() {
	
	function MaskDate() {
		this.inputDate = $('.js-date');
	}


	MaskDate.prototype.enable = function() {
		this.inputDate.mask('00/00/0000');
	}



	return MaskDate;
}());

$(function() {
	var maskMoney = new Sarah.MaskMoney();
	maskMoney.enable();

	var maskCpf = new Sarah.MaskCpf();
	maskCpf.enable();
	
	var maskCnpj = new Sarah.MaskCnpj();
	maskCnpj.enable();

	var maskCep = new Sarah.MaskCep();
	maskCep.enable();

	var maskPhoneNumber = new Sarah.MaskPhoneNumber();
	maskPhoneNumber.enable();

	var maskDate = new Sarah.MaskDate();
	maskDate.enable();

});