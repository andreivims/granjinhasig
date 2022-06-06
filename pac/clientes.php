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
			<title>CLIENTES</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				 .teste 
				{
					
					float: left;
					position: relative;
					
					height: 25px;
					width: 840px;
					
					text-align: center;
					font-family: ARIAL;
					
					margin-right: 5px;
					margin-left: 5px;
				}
				
				.tteste 
				{
					
					float: left;
					position: relative;
					
					height: 25px;
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
						height: 25px;
						width: 120px;	
					}
					
					 .teste2
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 120px;
						height: 25px;
						width: 710px;	
					}
					 .teste22
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 120px;
						height: 25px;
						width: 710px;
						text-align:left;						
						
					}
					
					
					
				 .verticalText 
				{
					 

					line-height: 25px;

				}
					
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="LISTA DE CLIENTES DE OVOS <br>(anexo ao PAC 16 - FML 19)";
				 $info="Revisão dia 01";
				
				 
				 cabecalho($descricao, $info, "Novembro", "2021");
			
			
						
			 ?>
			 
			 
			 <div class="conteudo  " >
			 
			 
				 <?PHP 
				 
		
		 
				  clientescontent($mes, $ano, $nomeClientes, $ClienteCxPorVez, $embaralhado);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <!--<div class="legenda b_all bggrey">  <b>LEGENDA:</b>  C=Conforme; NC=Não conforme;  </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
				 -->
			 </div> 
		 
		 
			 

		 </body>

	</html>
