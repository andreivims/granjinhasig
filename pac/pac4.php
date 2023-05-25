<?php
	
	 include "funcao.php";
	 
	 if(isset($_GET['ano']))
	{
		$ano = $_GET['ano'];
	}else
	{
		 $ano = date('Y');
	}
	
	 if(isset($_GET['mes']))
	{
		$mes = $_GET['mes'];
	}else
	{
		 $mes = date('m');
	}
	
	 
	 $mesEscrito = mes_ano($mes, $ano);
	
	
?>


	<html>
		<head>
			<title>CHECK LIST DE VENTILAÇÃO </title>
			
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
				
				
				             .testeheader1
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 0px;
								height: 30px;
								width: 240px;
								
							}
							
								 
							
							
				             .testeheader2
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 240px;
								height: 30px;
								width: 130px;
								
							}
				             .testeheader3
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 370px;
								height: 30px;
								width: 130px;
								
							}
				             .testeheader4
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 500px;
								height: 30px;
								width: 130px;
								
							}
							.testeheader5
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 630px;
								height: 30px;
								width: 130px;
								
							}
							
							.testeheader6
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 760px;
								height: 30px;
								width: 130px;
								
							}
							
							.testeheader7
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 890px;
								height: 30px;
								width: 130px;
								
							}
							
							
							
		


				.teste 
				{
					
					float: left;
					position: relative;
					
					height: 30px;
					width: 1020px;
					
					text-align: center;
					font-family: ARIAL;
					
				} 
							
				
					 .teste1
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 0px;
						height: 30px;
						width: 230px;

						 text-align: left;
						 padding-left: 10px;
					}
				
					 
					
					
					
					 .teste3
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 240px;
						height: 30px;
						width: 65px;	
					}
				
					
					 .teste4
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 305px;
						height: 30px;
						width: 65px;	
					}
				
					
					 .teste5
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 370px;
						height: 30px;
						width: 65px;	
					}
				
					
					 .teste6
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 435px;
						height: 30px;
						width: 65px;	
					}
				
					
					 .teste7
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 500px;
						height: 30px;
						width: 65px;	
					}
				
					
					 .teste8
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 565px;
						height: 30px;
						width: 65px;	
					}
					
					 .teste9
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 630px;
						height: 30px;
						width: 65px;	
					}
					
					 .teste10
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 695px;
						height: 30px;
						width: 65px;	
					}
				
					 .teste11
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 760px;
						height: 30px;
						width: 65px;	
					}
				
					 .teste12
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 825px;
						height: 30px;
						width: 65px;	
					}
				
					 .teste13
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 890px;
						height: 30px;
						width: 65px;	
					}
				
					 .teste14
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 955px;
						height: 30px;
						width: 65px;	
					}
				
					
					
					
				
				 
				 
				 
				 
				 
				 
				 
				 .verticalText 
				{
					 

					line-height: 30px;

				}
				
				
				
				
				
				
				
				
				
				 .cabecalho2
				{
					
					 float: left;
					 position: relative;
					 
					 height: 90px;
					 width: 1020px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					
					 
				}
						
						.logo2
						{
							 float: left;
							 position: absolute;
							 top: 0px;
							 left: 0px;
							 
							 height: 90px;
							 width: 130px;
							 
							
							 
							
						}
						 .descricao2
						{
							 float: left;
							 position: absolute; 
							 top: 0px;
							 left: 130px;
							 
							 height: 90px;
							 width: 624px;
							 
							 font-size: 25px;
							 font-weight: bold;
							 
							 min-height: 100%;
		  
							 
						}
						
						
						
						.info2
						{
							 float: left;
							 position: absolute; 
							 top: 0px;
							 left: 754px;
							 
							 font-weight: bold;
							 
							 height: 30px;
							 width: 264px;
							 
						}
						 .mes2
						{
							 float: left;
							 position: absolute; 
							 top: 30px;
							 left: 754px;
							 
							 font-weight: bold;
							 
							 height: 30px;
							 width: 264px;
							 
						}
						 .ano2
						{
							 float: left;
							 position: absolute; 
							 top: 60px;
							 left: 754px;
							 
							 font-weight: bold;
							 
							 height: 30px;
							 width: 264px;
							 
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
			
			
				 $descricao="CHECK-LIST DE VENTILAÇÃO";
				 $info="PAC 04 - FML 04";
				
				 
				 
			 ?>
			 
				 <div class="cabecalho2 " >
			 
					 <div class="logo2 b_all brz" ><img src="granjinha.jpeg" alt="some text" width=90 height=90></div>
					 <div class="descricao2 centrov b_all blz brz" ><?PHP echo $descricao; ?></div>
					 
					 
					 <div class="info2 centrov b_all bbz bggrey" ><?PHP echo $info; ?></div>
					 <div class="mes2 centrov b_all bbz bggrey" ><?PHP echo $mesEscrito; ?></div>
					 <div class="ano2 centrov b_all bggrey" ><?PHP echo $ano; ?></div>
				 
				 
				</div>
			 <?PHP
			
			
			//////////////////////////////////////////////////
				 $height = 77;
				 $widths[0] = 96;
				 $widths[1] = 400;
				 $widths[2] = 524;
				 
				 $instrucoes[0] = "<b>Período:</b> <br>Semanal";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br>Avaliar a presença de POEIRA, ODORES, CONDENSAÇÃO e VAPORES";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Realizar a limpeza dos equipamento de ventilação, realizar a manutenção de ralos que causam mau cheiro, secar o local com rodo especifico e afastar o produto do local de condensação";
				 instrucao($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo2  " >
			 
			 
				 <?PHP 
				 
				 
				  pac04content($mes, $ano);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape2 ">
				 <div class="legenda2 b_all bggrey">  <b>LEGENDA:</b>(C) Conforme; (NC) Não conforme; </div>
				 <div class="monitor2  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
