	
	
		
	jQuery.noConflict();
	jQuery(document).ready(function($)
	{
		function readData()
		{
			
			$.ajax({
				 url : "../controller/controllerpessoa.php",
				 type : 'post',
				 dataType : "json",
				 data : {
					 //*
					  idPessoa : $("#idPessoa").val(),
					  nome : $("#nome").val(),
					  apelido : $("#apelido").val(),
					  endereco : $("#endereco").val(),
					  localizacao : $("#localizacao").val(),
					  juridica : $("#juridica").val(),
					  cnpjcpf : $("#cnpjcpf").val(),
					 //*/
					
				 },
				 beforeSend : function(){
					  $(".resultado").html("ENVIANDO...");
				 }
			})
			.done(function(msg){
				
				var out = "<tr> <td>ID</td> <td>Nome</td> <td>Apelido</td> <td>Endereço</td> <td>Localização</td> <td>CPF/CNPJ</td> <td>Jurídica</td> </tr>";
				 
				out += "<tr> ";
				for (var Key in msg) {
					//out += Key + ": " + msg[Key] + "<br>";
					out += "<td>" + msg[Key] + "</td>";
				}
				out += "</tr> ";
				
				 alert(out);
				 $(".tableshowpessoas").html(out);
				
			}).sucess(function(msg){
				
				
				 alert('refresh!');
				 location.reload();
			})
			.fail(function(jqXHR, textStatus, msg){
				
				 alert(msg);
			});
			
		}
		
			
		 readData();
		 
		 
		$( "#cadastro" ).click(function(){
		  
		     alert( "Handler for .click() called." );
			 readData();

			
		});
		
	});
	
		

	
	