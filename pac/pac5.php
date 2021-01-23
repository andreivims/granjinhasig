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
			<title>CONTROLE DIÁRIO DE pH E CLORO</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				 .teste 
				{
					
					float: left;
					position: relative;
					
					height: 34px;
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
						height: 34px;
						width: 120px;	
					}
					
					 .teste2
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 120px;
						height: 34px;
						width: 120px;	
					}
					
					
					
					
					.teste3
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 240px;
						height: 34px;
						width: 120px;	
					}
					
					.teste4
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 360px;
						height: 34px;
						width: 200px;	
					}
					
						 .teste41
						{
							float: left;
							position: absolute;
							
							top: 0px;
							left: 0px;
							height: 17px;
							width: 200px;

							 font-size: 14px;
						}
						
						 .teste42
						{
							float: left;
							position: absolute;
							
							top: 17px;
							left: 0px;
							height: 17px;
							width: 200px;

							font-size: 14px;
						}
						
						 .checkB 
						{
							 float: left;
							 position: absolute;
							
							 top: 3px;
							 left: 15px;
							
							 width:8px;
							 height:8px;
							 border: 2px solid;
						}
				
				
					.teste5
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 560px;
						height: 34px;
						width: 140px;	
					}
					
					.teste6
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 700px;
						height: 34px;
						width: 140px;	
					}
					
					.verticalText 
				{
					 

					line-height: 34px;

				}
					
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="CONTROLE DIÁRIO DE pH E CLORO";
				 $info="PAC 05 - FML 01";
				 
				 
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
			//////////////////////////////////////////////////
				 $height = 60;
				 $widths[0] = 200;
				 $widths[1] = 350;
				 $widths[2] = 300;
				 
				 $instrucoes[0] = "<b>Período:</b> <br>Diário";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br>pH Padrão 6,0 a 9,5 <Br>Cloro Livre: 0,2 a 2,0 ppm";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Verificar a dosagem do cloro, ajustar para estabilizar e monitorar novamente.";
				 instrucao($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				  pac05content($mes, $ano);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <!--<div class="legenda b_all bggrey">  <b>LEGENDA:</b>  C=Conforme; NC=Não conforme;  </div>-->
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
