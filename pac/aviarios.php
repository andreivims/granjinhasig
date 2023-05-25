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
	
	
	
	
	 if(isset($_GET['nascimento']))
	{
		$nascimento = $_GET['nascimento'];
	}else
	{
		 $nascimento = date('d-m-Y');
	}
	
	 if(isset($_GET['lote']))
	{
		$lote = $_GET['lote'];
	}else
	{
		 $lote = "1";
	}
	
	 if(isset($_GET['naves']))
	{
		$naves = $_GET['naves'];
	}else
	{
		 $naves = "1000";
	}
	
	 if(isset($_GET['barracao']))
	{
		$barracao = $_GET['barracao'];
	}else
	{
		 $barracao = "Aviário 01";
	}
	
	 
	 
	 $mesEscrito = mes_ano($mes, $ano);
	
	
?>


	<html>
		<head>
			<title>CONTROLE DOS AVIÁRIOS</title>
			
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
						width: 500px;	
					}
					
					
					
					
					 .teste3
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 620px;
						height: 30px;
						width: 220px;	
					}
				
					
					
				 
			
				.testefooter 
				{
					
					float: left;
					position: relative;
					
					height: 30px;
					width: 270px;
					
					text-align: center;
					font-family: ARIAL;
					
					margin-right: 5px;
					margin-left: 5px;
					
					
					
				}
				          
				
				
					 .testeft1
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 0px;
						height: 30px;
						width: 135px;	
					}
					
					
					
					
					
					 .testeft2
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 135px;
						height: 30px;
						width: 135px;	
					}
				
				
				
				
				
				 
				 
				 
				 .verticalText 
				{
					 

					line-height: 30px;

				}
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="GRANJINHA - CONTROLE DOS AVIÁRIOS";
				 
				 
				 if($lote<10){$lote = "0". $lote;} 
				 cabecalho($descricao, "Lote ". $lote, $barracao , $mesEscrito . " - " . $ano);
			
			
			
			
			
				 $datanasc = date($nascimento);
				 
				 $diferenca = strtotime( date("1-". $mes ."-" .$ano) ) - strtotime($nascimento);

				 $semanas = floor($diferenca / (60 * 60 * 24 * 7));
				 $semanas2 = $semanas+4;
				 if($semanas<10){$semanas = "0". $semanas;} 
				 if($semanas2<10){$semanas2 = "0". $semanas2;} 

				 $dianasc = (int)date('d', strtotime($datanasc));
				 $mesnasc = (int)date('m', strtotime($datanasc));
				 $anonasc = (int)date('Y', strtotime($datanasc));
				 
				
				 $mesNascimento = mes_ano($mesnasc, $anonasc);
			
			//////////////////////////////////////////////////
				 $height = 65;
				 $widths[0] = 283;
				 $widths[1] = 283;
				 $widths[2] = 283;
				 
				 $instrucoes[0] = "<b><br>Nº Aves Alojadas:</b> <br><font style='font-size: 18px;'> ". $naves ."</font>";
				 $instrucoes[1] = "<b><br>Data Nascimento Lote:</b> <br><font style='font-size: 18px;'> ". $dianasc ." de ". $mesNascimento ." de ". $anonasc ."</font>";
				 $instrucoes[2] = "<b><br>Idade Atual (Semanas):</b> <br><font style='font-size: 18px;'> " . $semanas ." - ". $semanas2 ."</font>";
				 instrucao($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				  aviarios($mes, $ano, $semanas2);

				 ?>
			 
			 </div>
		
			 
			 







		 
		 
			 

		 </body>

	</html>
