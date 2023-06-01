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
	
	 if(isset($_GET['lote']))
	{
		$lote = $_GET['lote'];
	}else
	{
		 $lote = 1;
	}
	
	 
	 $mesEscrito = mes_ano($mes, $ano);
	
	
	
?>


	<html>
		<head>
			<title>CONTROLE DE RECEBIMENTO MATÉRIA-PRIMA</title>
			
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
						width: 100px;	
						font-size: 13px;
					}
				
					
					.teste2
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 100px;
						height: 34px;
						width: 450px;	
						font-size: 16px;
					}
					
							.teste21
							{
								float: left;
								position: absolute;
								
								top: 0px;
								left: 100px;
								height: 34px;
								width: 70px;
								font-size: 16px;						
								
							}
							
							.teste22
							{
								float: left;
								position: absolute;
								
								top: 0px;
								left: 170px;
								height: 34px;
								width: 380px;
								font-size: 16px;						
								
							}
							
					.teste3
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 550px;
						height: 34px;
						width: 100px;	
						
						font-size: 13px;
					}
					
					
				
			
					
					.teste4
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 650px;
						height: 34px;
						width: 100px;
						font-size: 13px;
					}
					
					
					.teste5
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 750px;
						height: 34px;
						width: 95px;
						font-size: 16px;
					}
					
					
						
						 .teste61
						{
							float: left;
							position: absolute;
							
							top: 0px;
							left: 0px;
							height: 34px;
							width: 100px;

							 
							 font-size: 14px;
							 text-align: left;
						}
						
						 .teste62
						{
							float: left;
							position: absolute;
							
							top: 17px;
							left: 0px;
							height: 17px;
							width: 100px;

							font-size: 14px;
							
						}
					
						 .checkB2 
						{
							 float: left;
							 position: relative;
							
							 top: 3px;
							 left: 2px;
							
							 width:12px;
							 height:8px;
							 border: 2px solid;
							 
							 margin-left:13px;
							 
							 
							 
						}
					
						.contentcheckB2 
						{
							 float: left;
							 position: relative;
							
							 top: 2px;
							 left: 5px;
							
							 width:8px;
							 height:8px;
							 
							
							 margin-left:2px;
							 
						}
						
						
						
					
				.verticalText 
				{
					 

					line-height: 34px;

				}
					
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="RECEBIMENTO DE MATÉRIA-PRIMA";
				 $info="PAC 11 - FML 15";
				
				 
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
			//////////////////////////////////////////////////
				 $height = 60;
				 $widths[0] = 180;
				 $widths[1] = 270;
				 $widths[2] = 400;
				 
				 $instrucoes[0] = "<b>Período:</b> <br>A cada recebimento";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br>Integridade dos ovos e características sensoriais: aspecto, cor e odor.";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Não receber ovos que estejam fora dos parâmetros avaliados.";
				 instrucao($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				  pac11content($mes, $ano, $lote);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <div class="legenda b_all bggrey">  <b>LEGENDA:</b>  C=Conforme; NC=Não conforme;  </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
