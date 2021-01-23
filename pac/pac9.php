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
			<title>HIGIENE E CONDUTA DO COLABORADOR</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				 .teste 
				{
					
					float: left;
					position: relative;
					
					height: 30px;
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
								width: 200px;
								
							}
				             .testeheader3
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 440px;
								height: 30px;
								width: 200px;
								
							}
				             .testeheader4
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 640px;
								height: 30px;
								width: 200px;
								
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
						width: 100px;	
					}
				
					
					 .teste4
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 340px;
						height: 30px;
						width: 100px;	
					}
				
					
					 .teste5
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 440px;
						height: 30px;
						width: 100px;	
					}
				
					
					 .teste6
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 540px;
						height: 30px;
						width: 100px;	
					}
				
					
					 .teste7
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 640px;
						height: 30px;
						width: 100px;	
					}
				
					
					 .teste8
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 740px;
						height: 30px;
						width: 100px;	
					}
				
					
					
					
					
								.testeobs1
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 0px;
									height: 60px;
									width: 240px;
									
								}
								
								.testeobs2
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 240px;
									height: 30px;
									width: 66px;
									
								}
								.testeobs3
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 306px;
									height: 30px;
									width: 66px;
									
								}
								.testeobs4
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 372px;
									height: 30px;
									width: 66px;
									
								}
								.testeobs5
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 438px;
									height: 30px;
									width: 66px;
									
								}
								.testeobs6
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 504px;
									height: 30px;
									width: 66px;
									
								}
								.testeobs7
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 570px;
									height: 30px;
									width: 66px;
									
								}
								.testeobs8
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 636px;
									height: 30px;
									width: 66px;
									
								}
								.testeobs9
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 702px;
									height: 30px;
									width: 66px;
									
								}
								.testeobs10
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 768px;
									height: 30px;
									width: 70px;
									
								}
					
					
					 
					
					
					
					
				
				 
				 
				 
				 
				 
				 
				 
				 .verticalText 
				{
					 

					line-height: 30px;

				}
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="HÁBITOS DE HIGIENE E CONDUTA DO COLABORADOR";
				 $info="PAC 09 - FML 09";
				 
				 
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
			//////////////////////////////////////////////////
				 $height = 80;
				 $widths[0] = 80;
				 $widths[1] = 550;
				 $widths[2] = 220;
				 
				 $instrucoes[0] = "<b>Período:</b> <br>Diário";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br>Uniforme completo, limpo e conservado, Barbas, Unhas, esmalte, cabelos, objetos pessoais, alimentos, cigarro, Ausência de lesões abertas, portadores de toxinfecção.";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Treinar os colaboradores, aplicar medidas disciplinares caso seja reincidente.";
				 instrucao($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				  pac09content($mes, $ano);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <div class="legenda b_all bggrey">  <b>LEGENDA:</b>(C) Conforme; (NC) Não conforme; (AV) Advertência verbal; (AE) Advertência escrita; (SP) Suspensão  </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
