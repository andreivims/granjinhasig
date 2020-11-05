	
	
		
	jQuery.noConflict();
	jQuery(document).ready(function($)
	{
		
		
		$( ".foneshidden" ).hide(); 
		var indFones = 1;
		$( "#telefones" + indFones ).show();
		
		$( "#maisfones" ).click(function() {
			
			if(indFones < 3){ 
				indFones++;
				$( "#telefones" + indFones ).show();
			}else alert("Máximo de 3 telefones"); 
			 
		});	
		
		
		
			
		$( "#cadastro" ).click(function() {
		  
		  alert( "Handler for .click() called." );
		  
		  
		
			 $( "#tableshowpessoas" ).add("<tr> <td>Nome</td> <td>s</td> <td>Endereço</td> <td>Localização</td> <td>CPF/CNPJ</td> <td>Jurídica</td> </tr>");

			 
			 
			$.ajax({
				 url : "../controller/controllerpessoa.php",
				 type : 'post',
				 dataType : "json",
				 data : {
					  idPessoa : $("#idPessoa").val(),
					  nome : $("#nome").val(),
					  apelido : $("#apelido").val(),
					  endereco : $("#endereco").val(),
					  localizacao : $("#localizacao").val(),
					  juridica : $("#juridica").val(),
					  cnpjcpf : $("#cnpjcpf").val(),
					  contato1 : $("#contato1").val(),
					  numero1 : $("#numero1").val(),
					  contato2 : $("#contato2").val(),
					  numero2 : $("#numero2").val(),
					  contato3 : $("#contato3").val(),
					  numero3 : $("#numero3").val()
				 },
				 beforeSend : function(){
					  $(".resultado").html("ENVIANDO...");
				 }
			})
			.done(function(msg){
				
				var out = "";
				for (var Key in msg) {
					out += Key + ": " + msg[Key] + "<br>";
				}
				
				 alert(msg['nome']);
				 $(".resultado").html(out);
			})
			.fail(function(jqXHR, textStatus, msg){
				 alert(msg);
			});
		});
		
	});
	
		

	
	