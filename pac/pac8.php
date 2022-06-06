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
			<title>PPHO - PROCEDIMENTOS DE LIMPEZA PRÉ-OPERACIONAL</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				 .testeheader 
				{
					
					float: left;
					position: relative;
					
					height: 48px;
					width: 840px;
					
					text-align: center;
					font-family: ARIAL;
					
					margin-right: 5px;
					margin-left: 5px;
				} 
				
				
				             .testeheader1
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 0px;
								height: 40px;
								width: 240px;
								
								padding-top:10px;
								
							}
							
								 
							
							
				             .testeheader2
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 240px;
								height: 50px;
								width: 150px;
								font-size: 14px;
							}
				             .testeheader3
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 390px;
								height: 50px;
								width: 150px;
								font-size: 14px;
							}
				             .testeheader4
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 540px;
								height: 50px;
								width: 150px;
								font-size: 14px;
							}
							.testeheader5
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 690px;
								height: 43px;
								width: 150px;
								font-size: 14px;
								
								padding-top: 7px;
							}
							
							
							
							
				 .testeteste 
				{
					
					float: left;
					position: relative;
					
					height: 95px;
					width: 840px;
					
					text-align: center;
					font-family: ARIAL;
					
					margin-right: 5px;
					margin-left: 5px;
				}
				
				
				             .testetesteheader1
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 0px;
								height: 70px;
								width: 240px;
								padding-top: 30px;
								
							}
							
								 
							
							
				             .testetesteheader2
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 240px;
								height: 100px;
								width: 150px;
								
								font-size: 14px;
								
							}
				             .testetesteheader3
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 390px;
								height: 100px;
								width: 150px;
								 font-size: 14px;
							}
				             .testetesteheader4
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 540px;
								height: 100px;
								width: 150px;
								font-size: 14px;
							}
							.testetesteheader5
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 690px;
								height: 100px;
								width: 150px;
								font-size: 14px;
							}
							
				


				.teste 
				{
					
					float: left;
					position: relative;
					
					height: 27px;
					width: 840px;
					
					text-align: center;
					font-family: ARIAL;
					
					margin-right: 5px;
					margin-left: 5px;
				} 
							
				
					 .teste1
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 0px;
						height: 30px;
						width: 110px;

						 text-align: left;
						 padding-left: 10px;
					}
				
					 .teste2
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 120px;
						height: 30px;
						width: 120px;	
					}
					
					
					
					
					 .teste3
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 240px;
						height: 30px;
						width: 75px;	
					}
				
					
					 .teste4
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 315px;
						height: 30px;
						width: 75px;	
					}
				
					
					 .teste5
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 390px;
						height: 30px;
						width: 75px;	
					}
				
					
					 .teste6
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 465px;
						height: 30px;
						width: 75px;	
					}
				
					
					 .teste7
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 540px;
						height: 30px;
						width: 75px;	
					}
				
					
					 .teste8
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 615px;
						height: 30px;
						width: 75px;	
					}
					
					 .teste9
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 690px;
						height: 30px;
						width: 75px;	
					}
					
					 .teste10
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 765px;
						height: 30px;
						width: 75px;	
					}
				
					
					
					
				
				 
				 
				 
				 
				 
				 
				 
				 .verticalText 
				{
					 

					line-height: 30px;

				}
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="PPHO - CHECK-LIST DOS PROCEDIMENTOS DE LIMPEZA PRÉ-OPERACIONAL";
				 $info="PAC 08 - FML 07";
				 
				 
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
			//////////////////////////////////////////////////
				 $height = 55;
				 $widths[0] = 80;
				 $widths[1] = 500;
				 $widths[2] = 270;
				 
				 $instrucoes[0] = "<b>Período:</b> <br>Diário";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br>Ausência de poeira, terra sujidades, incrustrações, resíduos de ovos quebrados, insetos mortos.";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Realizar novamente a correta higienização das áreas de inspeção.";
				 instrucao($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				  pac08content($mes, $ano);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <div class="legenda b_all bggrey">  <b>LEGENDA:</b>(C) Conforme; (NC) Não conforme; </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
