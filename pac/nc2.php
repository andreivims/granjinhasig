<?php
	
	 include "funcao.php";
	 
	
	
	
?>


	<html>
		<head>
			<title>TRATAMENTO DAS NÃO CONFORMIDADES</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				 .testeheader 
				{
					
					float: left;
					position: relative;
					
					height: 30px;
					width: 1020px;
					
					text-align: center;
					font-family: ARIAL;
					
				} 
										.reavalicao
										{
											
											float: left;
											position: absolute;
											
											top: 0px;
											left: 760px;
											height: 30px;
											width: 260px;
											
										}
							
				
				            
								 
							
							
				             .testeheader1
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 0px;
								height: 30px;
								width: 120px;
								
							}
				             .testeheader2
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 120px;
								height: 30px;
								width: 320px;
								
							}
				             .testeheader3
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 440px;
								height: 30px;
								width: 320px;
								
							}
							.testeheader4
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 760px;
								height: 30px;
								width: 70px;
								
							}
							
							.testeheader5
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 830px;
								height: 30px;
								width: 120px;
								
							}
							
							.testeheader6
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 950px;
								height: 30px;
								width: 70px;
								
							}
							
							
										
							
							
		

					
					
				
				 
				 
				 
				 
				 
				 
				 
				 .verticalText 
				{
					 

					line-height: 30px;

				}
				
				 .verticalText2 
				{
					 

					line-height: 35px;
					font-size: 22px;

				}
				
				
				
				
				
				
				
				
				
				 .cabecalho2
				{
					
					 float: left;
					 position: relative;
					 
					 height: 50px;
					 width: 1020px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					
					 
				}
						
						
						 .descricao2
						{
							 float: left;
							 position: absolute; 
							 top: 0px;
							 left: 0px;
							 
							 height: 50px;
							 width: 1018px;
							 
							 font-size: 25px;
							 font-weight: bold;
							 
							 min-height: 100%;
		  
							 
						}
						
						
						
						
				 .conteudo2
				{
					
					 float: left;
					 position: relative;
					
					 
					 //height: 100px;
					 width: 1020px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					 margin-top: 10px;
					 
				}		
						
						
				 .rodape2
				{
					
					 float: left;
					 position: relative;
					
					 
					 height: 100px;
					 width: 1020px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					 margin-top: 10px;
					 
				}
					 .legenda2
					{
						
						 width: 1010px;
						 padding: 5px;
					}
					
					
					.monitor2
					{
						 //height: 100px;
						 width: 1020px;
						 
						 margin-top: 20px;
					}
						
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="TRATAMENTO DAS NÃO CONFORMIDADES E REAVALIAÇÃO DO MONITORAMENTO";
				 
				 
				 
			 ?>
			 
				 <div class="cabecalho2 " >
			 
				
					 <div class="descricao2 centrov b_all  " ><?PHP echo $descricao; ?></div>
					 
					 
				 
				</div>
			
			 
			 <div class="conteudo2  " >
			 
			 
				 <?PHP 
				 
				 
				  NCcontent2();

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape2 ">
				 <div class="legenda2 b_all bggrey">  <b>LEGENDA:</b>(C) Conforme; (NC) Não conforme; </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
