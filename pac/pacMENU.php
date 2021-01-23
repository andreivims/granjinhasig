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
	
	 if(isset($_GET['nMeses']))
	{
		$nMeses = $_GET['nMeses'];
	}else
	{
		 $nMeses = 24;
	}
	
	 
	 


	
?>


	<html>
		<head>
			<title>IMPRESSÃO DO PAC</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			.cabecalho2
				{
					
					 float: left;
					 position: relative;
					 
					 height: 90px;
					 width: 1500px;
					 
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
							 width: 130px;
							 
							
							 
							
						}
						 .descricao2
						{
							 float: left;
							 position: absolute; 
							 top: 0px;
							 left: 130px;
							 
							 height: 90px;
							 width: 890px;
							 
							 font-size: 25px;
							 font-weight: bold;
							 
							 min-height: 100%;
		  
							 
						}
						
						
						
				.conteudo2
				{
					
					 float: left;
					 position: relative;
					
					 
					 //height: 100px;
					 width: 1500px;
					 
					 font-family: ARIAL;
					 text-align: left;
					 
					 margin-top: 10px;
					 padding-left: 10px;
					 
					 
				}		
				.imppac1
				{
					
					 float: left;
					 position: relative;
					 clear: both;
					 
					 height: 20px;
					 width: 150px;
					 
					 font-family: ARIAL;
					 
					
					 padding: 2px;
					 
				}
				
				.imppac2
				{
					
					 float: left;
					 position: relative;
					
					 
					 height: 20px;
					 //width: 1500px;
					 
					 font-family: ARIAL;
					 
					 margin-bottom:2px;
					 padding: 2px;
					 
				}	
				
			</style>
			
		</head>
		 
		<body>
		
		  <div class="cabecalho2 " >
			 
					 <div class="logo2 b_all brz" ><img src="granjinha.jpeg" alt="some text" width=90 height=90></div>
					 <div class="descricao2 centrov b_all blz " >IMPRESSÃO DO PAC</div>
					 
					 
					 
				 
				 
		 </div>
		 
		 <div class="conteudo2  b_all" >
		  <div class="imppac2 b_all"><a href="nc.php" target="_blank">NÃO CONFORMIDADES</a> </div>
		  <div class="imppac2 b_all"><a href="nc2.php" target="_blank">NÃO CONFORMIDADES 2 FUNDO</a> </div>
		  <div class="imppac2 b_all"><a href="clientes.php" target="_blank">Clientes</a> </div>
		  <div class="imppac2 b_all"><a href="clientes2.php" target="_blank">Clientes Rastrear</a> </div>
			 
<?PHP

		 
		 for($i=0; $i<$nMeses;$i++)
		{
			 $m = $mes + $i;
			 if($m==1 && $i > 0)
			{
				 $ano++;
				 $y = $ano;
			}else
			{
				 $y = $ano;
			}
			
			
			 if($m == 12)
			{
				 $mes = 0 - $i;
			}
			
			
			
			
?>
		 <div class="imppac1 b_all"><?PHP echo mes_ano($m, $y) . " - ". $y;  ?></div>
		 <div class="imppac2 b_all"><a href="pac1.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 01</a> </div>
		 <div class="imppac2 b_all"><a href="pac2.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 02</a> </div>
		 <div class="imppac2 b_all"><a href="pac.php?CONTROLE=pac3&ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 03 (NEW)</a> </div>
		 <div class="imppac2 b_all"><a href="pac4.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 04</a> </div>
		 <div class="imppac2 b_all"><a href="pac5.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 05</a> </div>
		 <div class="imppac2 b_all"><a href="pac6.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 06</a> </div>
		 <div class="imppac2 b_all"><a href="pac7.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 07</a> </div>
		 <div class="imppac2 b_all"><a href="pac8.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 08</a> </div>
		 <div class="imppac2 b_all"><a href="pac9.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 09</a> </div>
		 <div class="imppac2 b_all"><a href="pac10.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 10</a> </div>
		 <div class="imppac2 b_all"><a href="pac.php?CONTROLE=pac12&ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 12 (NEW)</a> </div>
		 <div class="imppac2 b_all"><a href="pac.php?CONTROLE=pac13&ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Pac 13 (NEW)</a> </div>
		 <div class="imppac2 b_all"><a href="pac16.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&lote=475" target="_blank">Pac 16</a> </div>
		 
		 
		 
		 
		 <!--<div class="imppac2 b_all"><a href="mapaovos.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&totalBandejas=3600" target="_blank">Mapa Produção</a> </div>-->
		 <div class="imppac2 b_all"><a href="mapaovos2.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&totalBandejas=3600" target="_blank">Mapa Produção 2</a> </div>
		 
		 <div class="imppac2 b_all"><a href="racao.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>" target="_blank">Ração</a> </div>
		 
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=6-6-2020&naves=1000&lote=14&barracao=Aviário 01" target="_blank">Aviário 01</a> </div>
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=6-6-2020&naves=1000&lote=14&barracao=Aviário 02" target="_blank">Aviário 02</a> </div>
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=6-11-2019&naves=1000&lote=12&barracao=Aviário 03" target="_blank">Aviário 03</a> </div>
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=6-11-2019&naves=1000&lote=12&barracao=Aviário 04" target="_blank">Aviário 04</a> </div>
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=18-3-2020&naves=2000&lote=13&barracao=Aviário 05" target="_blank">Aviário 05</a> </div>
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=13-2-2019&naves=2000&lote=10&barracao=Aviário 06" target="_blank">Aviário 06</a> </div>
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=22-6-2019&naves=2000&lote=11&barracao=Aviário 07" target="_blank">Aviário 07</a> </div>
		 
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=02-10-2020&naves=1000&lote=15&barracao=Recria 01" target="_blank">Recria 01</a> </div>
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=02-10-2020&naves=1000&lote=15&barracao=Recria 02" target="_blank">Recria 02</a> </div>
		 <div class="imppac2 b_all"><a href="aviarios.php?ano=<?PHP echo $y; ?>&mes=<?PHP echo $m; ?>&nascimento=02-10-2020&naves=2080&lote=15&barracao=Pinteiro" target="_blank">Pinteiro</a> </div>
		 
		
<?PHP
				 
		}
		
		 
		
?>
		 </div>


<!--------------------------------------------------------------------------->			 
			
			 

		 </body>

	</html>
