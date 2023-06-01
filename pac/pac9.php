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
	
	 
	 
	 
	 if(isset($_GET['func1']))
	{
		$func1 = $_GET['func1'];
	}else
	{
		 $func1 = "";
	}
	
	 
	 if(isset($_GET['func2']))
	{
		$func2 = $_GET['func2'];
	}else
	{
		 $func2 = "";
	}
	
	 
	 if(isset($_GET['func3']))
	{
		$func3 = $_GET['func3'];
	}else
	{
		 $func3 = "";
	}
	
	 
	 if(isset($_GET['func4']))
	{
		$func4 = $_GET['func4'];
	}else
	{
		 $func4 = "";
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
								width: 90px;
								
								font-size: 11px;
								
							}
							
								 
							
							
				             .testeheader2
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 90px;
								height: 30px;
								width: 190px;
								
							}
				             .testeheader3
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 280px;
								height: 30px;
								width: 190px;
								
							}
				             .testeheader4
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 470px;
								height: 30px;
								width: 190px;
								
							}

							.testeheader5
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 660px;
								height: 30px;
								width: 185px;
								
							}
							
				
					 .teste0
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 0px;
						height: 30px;
						width: 88px;
						
						font-size: 14px;

						 text-align: left;
						 padding-left: 2px;
					}
				
			
					
					 .teste1
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 90px;
						height: 30px;
						width: 95px;	
					}
				
					
					 .teste2
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 185px;
						height: 30px;
						width: 95px;	
					}
				
				
					
					
					 .teste3
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 280px;
						height: 30px;
						width: 95px;	
					}
				
					
					 .teste4
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 375px;
						height: 30px;
						width: 95px;	
					}
				
					
					 .teste5
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 470px;
						height: 30px;
						width: 95px;	
					}
				
					
					 .teste6
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 565px;
						height: 30px;
						width: 95px;	
					}
				
					
					 .teste7
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 660px;
						height: 30px;
						width: 95px;	
					}
				
					
					 .teste8
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 755px;
						height: 30px;
						width: 90px;	
					}
				
					
					
					
					
								.testeobs1
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 0px;
									height: 60px;
									width: 90px;
									font-size: 10px;
								}
								
								
								
								
								.testeobs2
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 90px;
									height: 30px;
									width: 63.33px;
									
								}
								
								.testeobs3
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 153.33px;
									height: 30px;
									width: 63.33px;
									
								}
								.testeobs4
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 216.66px;
									height: 30px;
									width: 63.33px;
									
								}
								.testeobs5
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 280px;
									height: 30px;
									width: 63.33px;
									
								}
								.testeobs6
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 343.33px;
									height: 30px;
									width: 63.33px;
									
								}
								.testeobs7
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 406.66px;
									height: 30px;
									width: 63.33px;
									
								}
								.testeobs8
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 470px;
									height: 30px;
									width: 63.33px;
									
								}
								.testeobs9
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 533.33px;
									height: 30px;
									width: 63.33px;
									
								}
								.testeobs10
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 596.66px;
									height: 30px;
									width: 63.33px;
									
								}
					
					
								.testeobs11
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 660px;
									height: 30px;
									width: 63.33px;
									
								}
								.testeobs12
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 723.33px;
									height: 30px;
									width: 63.33px;
									
								}
								
								.testeobs13
								{
									
									float: left;
									position: absolute;
									
									top: 0px;
									left: 786.66px;
									height: 30px;
									width: 58.33px;
									
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
				 
				 
				  pac09content($mes, $ano, $func1, $func2, $func3, $func4);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <div class="legenda b_all bggrey">  <b>LEGENDA:</b>(C) Conforme; (NC) Não conforme; (AV) Advertência verbal; (AE) Advertência escrita; (SP) Suspensão  </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
