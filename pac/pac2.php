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
			<title>Check-list de higiene dos vestiários, sanitários e barreiras sanitárias</title>
			
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
					
					margin: 5px;
				}
				
				
					.teste1
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 0px;
						height: 40px;
						width: 80px;	
					}
					
					 .teste2
					{
						float: left;
						position: absolute;
						font-size: 14px;
						
						top: 0px;
						left: 80px;
						height: 20px;
						width: 120px;	
					}
					
					
					
					
					.teste4
					{
						float: left;
						position: absolute;
						
						top: 20px;
						left: 80px;
						height: 20px;
						width: 60px;	
					}
					.teste5
					{
						float: left;
						position: absolute;
						
						top: 20px;
						left: 140px;
						height: 20px;
						width: 60px;	
					}
				
				
					.teste6
					{
						float: left;
						position: absolute;
						
						top: 40px;
						left: 0px;
						height: 20px;
						width: 80px;	
					}
					.teste7
					{
						float: left;
						position: absolute;
						
						top: 40px;
						left: 80px;
						height: 20px;
						width: 60px;	
					}
					.teste8
					{
						float: left;
						position: absolute;
						
						top: 40px;
						left: 140px;
						height: 20px;
						width: 60px;	
					}
				
				
				
					.teste9
					{
						float: left;
						position: absolute;
						
						top: 60px;
						left: 0px;
						height: 20px;
						width: 80px;	
					}
					.teste10
					{
						float: left;
						position: absolute;
						
						top: 60px;
						left: 80px;
						height: 20px;
						width: 60px;	
					}
					.teste11
					{
						float: left;
						position: absolute;
						
						top: 60px;
						left: 140px;
						height: 20px;
						width: 60px;	
					}
				
				
				
				
					.teste12
					{
						float: left;
						position: absolute;
						
						top: 80px;
						left: 0px;
						height: 20px;
						width: 80px;	
					}
					.teste13
					{
						float: left;
						position: absolute;
						
						top: 80px;
						left: 80px;
						height: 20px;
						width: 60px;	
					}
					.teste14
					{
						float: left;
						position: absolute;
						
						top: 80px;
						left: 140px;
						height: 20px;
						width: 60px;	
					}
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="Check-list de higiene dos vestiários, sanitários e barreiras sanitárias";
				 $info="PAC 02 - FML 03";
				 
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
			//////////////////////////////////////////////////
				 $height = 80;
				 $widths[0] = 80;
				 $widths[1] = 220;
				 $widths[2] = 550;
				 
				 $instrucoes[0] = "<b>Período:</b> <br><br>Diário";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br><br>Descritos em cada item e na legenda.";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Reposição do sabonete líquido, sanitizante líquido, papel toalha; Remoção do excesso de água; Higienização e reorganização do local; Manutenção corretiva dos itens não conformes; Substituição das escovas.";
				 instrucao($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				  pac02content($mes, $ano);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <div class="legenda b_all bggrey">  <b>LEGENDA:</b>  C=Conforme; NC=Não conforme;  </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
