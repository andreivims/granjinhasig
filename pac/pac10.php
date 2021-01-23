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
			<title>PSO - PROCEDIMENTOS SANITÁRIOS OPERACIONAIS</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				 .teste 
				{
					
					float: left;
					position: relative;
					
					height: 100px;
					width: 200px;
					
					text-align: center;
					font-family: ARIAL;
					font-size: 13px;
					
					margin: 5px;
					margin-bottom: 20px;
				}
				
				
					.teste1
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 0px;
						height: 30px;
						width: 80px;	
					}
					
					 .teste2
					{
						float: left;
						position: absolute;
						font-size: 14px;
						
						top: 0px;
						left: 80px;
						height: 15px;
						width: 120px;	
					}
					
					
					
					
					.teste4
					{
						float: left;
						position: absolute;
						
						top: 15px;
						left: 80px;
						height: 15px;
						width: 60px;	
					}
					.teste5
					{
						float: left;
						position: absolute;
						
						top: 15px;
						left: 140px;
						height: 15px;
						width: 60px;	
					}
				
				
				
				
				
				
				
				
					.teste6
					{
						float: left;
						position: absolute;
						
						top: 30px;
						left: 0px;
						height: 15px;
						width: 80px;	
					}
					.teste7
					{
						float: left;
						position: absolute;
						
						top: 30px;
						left: 80px;
						height: 15px;
						width: 60px;	
					}
					.teste8
					{
						float: left;
						position: absolute;
						
						top: 30px;
						left: 140px;
						height: 15px;
						width: 60px;	
					}
				
				
				
				
				
				
				
					.teste9
					{
						float: left;
						position: absolute;
						
						top: 45px;
						left: 0px;
						height: 15px;
						width: 80px;	
					}
					.teste10
					{
						float: left;
						position: absolute;
						
						top: 45px;
						left: 80px;
						height: 15px;
						width: 60px;	
					}
					.teste11
					{
						float: left;
						position: absolute;
						
						top: 45px;
						left: 140px;
						height: 15px;
						width: 60px;	
					}
				
				
				
				
				
				
					.teste12
					{
						float: left;
						position: absolute;
						
						top: 60px;
						left: 0px;
						height: 15px;
						width: 80px;	
					}
					.teste13
					{
						float: left;
						position: absolute;
						
						top: 60px;
						left: 80px;
						height: 15px;
						width: 60px;	
					}
					.teste14
					{
						float: left;
						position: absolute;
						
						top: 60px;
						left: 140px;
						height: 15px;
						width: 60px;	
					}
				
				
				
				
				
					.teste15
					{
						float: left;
						position: absolute;
						
						top: 75px;
						left: 0px;
						height: 15px;
						width: 80px;	
					}
					.teste16
					{
						float: left;
						position: absolute;
						
						top: 75px;
						left: 80px;
						height: 15px;
						width: 60px;	
					}
					.teste17
					{
						float: left;
						position: absolute;
						
						top: 75px;
						left: 140px;
						height: 15px;
						width: 60px;	
					}
				
				
				
				
				
					.teste18
					{
						float: left;
						position: absolute;
						
						top: 90px;
						left: 0px;
						height: 15px;
						width: 80px;	
					}
					.teste19
					{
						float: left;
						position: absolute;
						
						top: 90px;
						left: 80px;
						height: 15px;
						width: 60px;	
					}
					.teste20
					{
						float: left;
						position: absolute;
						
						top: 90px;
						left: 140px;
						height: 15px;
						width: 60px;	
					}
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="PSO - CONTROLE DIÁRIO DOS PROCEDIMENTOS SANITÁRIOS OPERACIONAIS";
				 $info="PAC 10 - FML 13";
				
				 
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
			//////////////////////////////////////////////////
				 $height = 90;
				 $widths[0] = 80;
				 $widths[1] = 370;
				 $widths[2] = 400;
				 
				 $instrucoes[0] = "<b>Período:</b> <br><br>Diário";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br>Ovos sobre o estrado; Limpeza de sujidades nos ovos; Verificar classificação por peso dos ovos; Embalagens de 30 ovos, 12 ovos e 10 ovos; Armazenagem seca, fresca e sobre estrados.";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Dispor os ovos sobre estrados; Realizar a lavagem; Limpeza do sistema de classificação automático; Uso correto das embalagens; Armazenar em local adequado.";
				 instrucao($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				  pac10content($mes, $ano);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <div class="legenda b_all bggrey">  <b>LEGENDA:</b>  C=Conforme; NC=Não conforme;  </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
