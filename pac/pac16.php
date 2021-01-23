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
			<title>CONTROLE DE EXPEDIÇÃO DE PRODUTOS</title>
			
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
						width: 70px;	
						font-size: 13px;
					}
					
					 .teste2
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 70px;
						height: 34px;
						width: 50px;
						font-size: 16px;						
					}
					
					
					
					
					.teste3header
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 120px;
						height: 34px;
						width: 100px;
						font-size: 13px;						
						
					}
					
					.teste3
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 120px;
						height: 34px;
						width: 100px;	
						
						font-size: 13px;
					}
					
					
				
				
					.teste4
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 220px;
						height: 34px;
						width: 50px;
						font-size: 12px;						
					}
					
					.teste4content
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 220px;
						height: 34px;
						width: 50px;
						font-size: 16px;
					}
					
					
					.teste5
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 270px;
						height: 34px;
						width: 100px;
						font-size: 16px;
					}
					
					
					.teste55
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 370px;
						height: 34px;
						width: 50px;	
					}
					
					.teste6header
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 370px;
						height: 34px;
						width: 470px;	
					}
					
					.teste6
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 420px;
						height: 34px;
						width: 420px;	
					}
					
						 .teste61
						{
							float: left;
							position: absolute;
							
							top: 0px;
							left: 0px;
							height: 17px;
							width: 420px;

							 
							 
							 
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
							width: 420px;

							font-size: 14px;
							
						}
						
						 .checkB 
						{
							 float: left;
							 position: relative;
							
							 top: 3px;
							 left: 0px;
							
							 width:8px;
							 height:8px;
							 border: 2px solid;
							 
							 margin-left:13px;
							 
							 
							 
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
						 .contentcheckB 
						{
							 float: left;
							 position: relative;
							
							 top: 2px;
							 left: 0px;
							
							 width:8px;
							 height:8px;
							 
							
							 margin-left:2px;
							 
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
			
			
				 $descricao="CONTROLE DE EXPEDIÇÃO DE PRODUTOS";
				 $info="PAC 16 - FML 19";
				
				 
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
			//////////////////////////////////////////////////
				 $height = 60;
				 $widths[0] = 180;
				 $widths[1] = 270;
				 $widths[2] = 400;
				 
				 $instrucoes[0] = "<b>Período:</b> <br>A cada lote expedido";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br>Caixas limpas e íntegras. Produto íntegro e sem sujidades.";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Substituir as caixas, caso as mesmas estejam sujas ou rasgadas. Reprocessar ovo fora do padrão.";
				 instrucao($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				  pac16content($mes, $ano, $lote);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <div class="legenda b_all bggrey">  <b>LEGENDA:</b>  C=Conforme; NC=Não conforme;  </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
