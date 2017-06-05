$(document).ready(function(){

'use strict';

	$("#lead-celular").mask("99 999999999");
	$("#lead-nascimento").mask("99/99/9999");
	$("#lead-cep").mask("99999-999");
	

	$("#lead-cep").on('blur', function(){
		var cep = $("#lead-cep").val();

		if(cep.length == 9 ){

			$.ajax({
				type:"GET",
				url: "https://webmaniabr.com/api/1/cep/"+cep+"/?app_key=RhKtpnRbdAN1A3vN51vrgitZzsE9X4gm&app_secret=tyZX9AHxiWRU3YAKpB5bVcJdoLRtF4gvpq0kd0sWYwy25T6D",
				cache:false,
				success: function(c){
					
					$("#lead-endereco").val(c.endereco);
					$("#lead-bairro").val(c.bairro);
					$("#lead-cidade").val(c.cidade);
					$("#lead-uf").val(c.uf);
					
					

				},
			});


		}

	});

	

});