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
			<title>REGISTRO DE PRODUÇÃO DE RAÇÃO</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				 .teste 
				{
					
					float: left;
					position: relative;
					
					height: 35px;
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
						height: 35px;
						width: 103px;

						 text-align: left;
						 padding-left: 2px;
					}
				
					
					
					
					
					
					 .teste3
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 105px;
						height: 35px;
						width: 200px;	
					}
				
					
					 .teste4
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 305px;
						height: 35px;
						width: 120px;	
					}
				
					
					 .teste5
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 425px;
						height: 35px;
						width: 115px;	
					}
				
					
					 .teste6
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 540px;
						height: 35px;
						width: 100px;	
					}
				
					
					 .teste7
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 640px;
						height: 35px;
						width: 100px;	
					}
				
					
					 .teste8
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 740px;
						height: 35px;
						width: 100px;	
					}
				
					
					
					
					
					 
					
				.cabecalho2
				{
					
					 float: left;
					 position: relative;
					 
					 height: 90px;
					 width: 850px;
					 
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
							 width: 110px;
							 
							
							 
							
						}
						 .descricao2
						{
							 float: left;
							 position: absolute; 
							 top: 0px;
							 left: 110px;
							 
							 height: 90px;
							 width: 520px;
							 
							 font-size: 25px;
							 font-weight: bold;
							 
							 min-height: 100%;
		  
							 
						}
						
						
						
						 .mes2
						{
							 float: left;
							 position: absolute; 
							 top: 0px;
							 left: 630px;
							 
							 font-size: 24px;
							 font-weight: bold;
							 
							 height: 45px;
							 width: 220px;
							 
						}
						 .ano2
						{
							 float: left;
							 position: absolute; 
							 top: 45px;
							 left: 630px;
							 
							 font-size: 24px;
							 font-weight: bold;
							 
							 height: 45px;
							 width: 220px;
							 
						} 
					
					
				
				 
				 
				 
				 
				 
				 
				 
				 .verticalText 
				{
					 

					line-height: 35px;

				}
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="GRANJINHA - REGISTRO DE PRODUÇÃO DE RAÇÃO";
				 
			 
				 //cabecalho($descricao, $info, $mesEscrito, $ano);
			
						
			 ?>
			 
			 <div class="cabecalho2 ">
			 
				 <div class="logo2 b_all brz"><img src="granjinha.jpeg" alt="some text" width=90 height=90></div>
				 <div class="descricao2 centrov b_all blz brz"><?PHP echo $descricao; ?></div>
				 
				 
				 <div class="mes2 centrov b_all bbz bggrey"><?PHP echo $mesEscrito; ?></div>
				 <div class="ano2 centrov b_all bggrey"><?PHP echo $ano; ?></div>
			 
				 
			 </div>
			 
			 
			 
			 
			 <div class="conteudo b_all " style="padding-top: 5px; padding-bottom: 5px;">
			 
			 
	 <?PHP 
				 
				 
				  racao($mes, $ano);

	 ?>
			 
			 </div>
			 
		



 
			 

		 </body>

	</html>
