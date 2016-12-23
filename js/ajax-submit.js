$(function(){
	
	$('.ajax-submit').submit(function(){
		
		console.log("Aqui");
		
		var obj = this;
		var form = $(obj);
		var dados = new FormData(obj);
		
		$.ajax({
			// Antes do envio
			beforeSend: function() {
				
			}, 
			
			url: form.attr('action'),
			type: 'POST',
			data: dados,
			processData: false,
			cache: false,
			contentType: false,
			dataType: 'json',
			
			// Se enviado com sucesso
			success: function( data) {	
				if (data.confirmacao == true ){
					$("#msg-form").html( data.mensagem).fadeIn("slow");
					form.fadeOut("fast");
				} else {
					$("#msg-form").html( data.mensagem).fadeIn("slow");
				}
			},
			// Se der algum problema
			error: function (request, status, error) {
				alert(request.responseText);
			}
		});
		
		// Anula o envio convencional
		return false;
		
	});
});












