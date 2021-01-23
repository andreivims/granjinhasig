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
	
	 
	 if(isset($_GET['totalBandejas']))
	{
		$totalBandejas = $_GET['totalBandejas'];
	}else
	{
		 $totalBandejas = 3600;
	}
	
	 
	 $mesEscrito = mes_ano($mes, $ano);
	
	
?>


	<html>
		<head>
			<title>Mapa de Produção de Ovos Granjinha</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				.conteudo1
				{
					
					 float: left;
					 position: relative;
					
					 
					 height: 1100px;
					 width: 850px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					 margin-top: 10px;
					 margin-bottom: 100px;
					 
				}
							
							
				 .testeteste 
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
				
				
				             .testetesteheader1
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 120px;
								height: 30px;
								width: 360px;
								
							}
							
								 
							
							
				             .testetesteheader2
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 480px;
								height: 30px;
								width: 360px;
								
								
							}
							
				         
							
				


				.testetotal 
				{
					
					float: left;
					position: relative;
					
					height: 30px;
					width: 500px;
					
					text-align: center;
					font-family: ARIAL;
					
					margin-right: 5px;
					margin-left: 5px;
				} 
							
				
					 .teste1total
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 0px;
						height: 30px;
						width: 240px;

						 text-align: left;
						 padding-left: 10px;
					}
				
					 .teste2total
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 250px;
						height: 30px;
						width: 250px;	
					}
					
					
					
					
					
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
						width: 72px;	
					}
					
					
					
					
					 .teste3
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 192px;
						height: 30px;
						width: 72px;	
					}
				
					
					 .teste4
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 264px;
						height: 30px;
						width: 72px;	
					}
				
					
					 .teste5
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 336px;
						height: 30px;
						width: 72px;	
					}
				
					
					 .teste6
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 408px;
						height: 30px;
						width: 72px;	
					}
				
					
					 .teste7
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 480px;
						height: 30px;
						width: 72px;	
					}
				
					
					 .teste8
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 552px;
						height: 30px;
						width: 72px;	
					}
					
					 .teste9
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 624px;
						height: 30px;
						width: 72px;	
					}
					
					 .teste10
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 696px;
						height: 30px;
						width: 72px;	
					}
					 .teste11
					{
						float: left;
						position: absolute;
					
						top: 0px;
						left: 768px;
						height: 30px;
						width: 72px;	
					}
					 
					
					
				
				 
				 .conteudo2
				{
					
					 float: left;
					 position: relative;
					
					 
					 height: 290px;
					 width: 850px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					 //margin-top: 100px;
					 
				}
				
					 .sint1
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 0px;
						height: 150px;
						width: 400px;	
					}
					
					.sint2
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 400px;
						height: 150px;
						width: 440px;	
					}
					.sint3
					{
						float: left;
						position: absolute;
					
						
						top: 150px;
						left: 0px;
						height: 35px;
						width: 840px;	
					}
					
					
					.sint4
					{
						float: left;
						position: absolute;
					
						
						top: 185px;
						left: 0px;
						height: 35px;
						width: 200px;	
					}
					.sint5
					{
						float: left;
						position: absolute;
					
						
						top: 185px;
						left: 200px;
						height: 35px;
						width: 440px;	
					}
					.sint6
					{
						float: left;
						position: absolute;
					
						
						top: 185px;
						left: 640px;
						height: 35px;
						width: 200px;	
					}
					
					
					.sint7
					{
						float: left;
						position: absolute;
					
						
						top: 220px;
						left: 0px;
						height: 35px;
						width: 200px;	
					}
					.sint8
					{
						float: left;
						position: absolute;
					
						
						top: 220px;
						left: 200px;
						height: 35px;
						width: 440px;	
					}
					.sint9
					{
						float: left;
						position: absolute;
					
						
						top: 220px;
						left: 640px;
						height: 35px;
						width: 200px;	
					}
					
					.sint10
					{
						float: left;
						position: absolute;
					
						
						top: 255px;
						left: 200px;
						height: 35px;
						width: 440px;	
					}
					
					
					
					
					
					
					
					
					
					
					
					
				.conteudo3
				{
					
					 float: left;
					 position: relative;
					
					 
					 height: 850px;
					 width: 850px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					 margin-top: 10px;
					 
				}		
					
				 
					 .tabela 
					{
						
						float: left;
						position: relative;
						
						
						width: 840px;
						
						text-align: center;
						font-family: ARIAL;
						
						 
						
					} 
					
					 table, tr, td
					{
						 height: 30px;
						 border-collapse: collapse; 
					     border: 1px solid black;
					}
				 
				 
				    .sintass
					{
						float: left;
						position: relative;
					
						
						top: 100px;
						left: 0px;
						height: 35px;
						width: 840px;	
					}
					
					.sintass2
					{
						float: left;
						position: relative;
					
						
						top: 200px;
						left: 0px;
						height: 35px;
						width: 840px;
						text-align: left;
					}
		
				 
				 
				 .verticalText 
				{
					 

					line-height: 30px;

				}
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="MAPA DE PRODUÇÃO DE OVOS GRANJINHA";
				 $info="Ivinhema-MS";
				 
				 
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
						
			 ?>
			 
			 
			 <div class="conteudo1 b_all " >
			 
			 
				 <?PHP 
				 
				 
				  mapacontent($mes, $ano, $totalBandejas, $jumbototal, $extratotal, $grandetotal, $mediototal, $pequenototal);


					
				 ?>
			 
			 </div>
		
			 
			 
			 
			 
			 
			 
			 
			 
			 <!--- IAGRO -->
			 <div class="conteudo2  " >
			 
				 <div class="sint1 b2b " ><img src="iagrologo.png" alt="some text" width=280 height=140></div>
				 <div class="sint2 b2b " ><br><br><br><b>Gerência de Inspeção e Defesa Sanitária Animal<br>Divisão de Inspeção de Produtos de Origem Animal</b></div>
				 <div class="sint3 bb verticalText" ><b>SÍNTESE MENSAL DE PRODUÇÃO</b></div>
				 
				 <div class="sint4  verticalText" style="text-align:left;" ><b>Estabelecimento:</b></div>
				 <div class="sint5 bb verticalText" ><b>Granjinha Entreposto e Produção de Ovos</b></div>
				 <div class="sint6  verticalText"  style="text-align:right;"><b>SIE/MS: 236</b></div>
			 
				 <div class="sint7  verticalText" style="text-align:left;"><b>Município:</b></div>
				 <div class="sint8 bb verticalText" ><b>Ivinhema - MS</b></div>
				 <div class="sint9  verticalText" style="text-align:right;" ><b><?PHP echo "$mesEscrito $ano"; ?></b></div>
				 
				 <div class="sint10  verticalText" ><b>NÚCLEO: Ovos</b></div>
			 
				 
			 
			 </div>
			 
			 <div class="conteudo3  " >
			 
				 <table class="tabela">
					 <tr class="bggrey">
						 <td><b>Nº Ordem</b></td> <td><b>Matéria Prima / Produto</b></td> <td><b>Qtde Recebida</b></td> <td><b>Unid. Medida</b></td> 
					 </tr>
					 <tr>
						 <td><b>1</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Jumbo</td> <td><?PHP echo number_format($jumbototal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>2</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Extra</td> <td><?PHP echo number_format($extratotal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>3</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Grande</td> <td><?PHP echo number_format($grandetotal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>4</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Médio</td> <td><?PHP echo number_format($mediototal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>5</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Pequeno</td> <td><?PHP echo number_format($pequenototal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>6</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>7</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>8</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>9</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>10</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>11</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>12</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>13</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>14</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>15</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>16</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr  class="bggrey">
						 <td colspan="2"> <b>TOTAL RECEBIDO:</b></td>          <td><b><?PHP echo number_format(($jumbototal + $extratotal + $grandetotal + $mediototal + $pequenototal)*2.5, 0,',','.');?></b></td> <td><b>Dúzias</b></td> 
					 </tr>
					 
				 </table>


				 <div class="sintass">
						
					  <b>_____________________________________________________
					  <br>Carimbo e Assinatura do Inspetor SIE/MS</b>
					  
				 </div>
				 
				 <div class="sintass2">
						
					  &nbsp;&nbsp;&nbsp; * 1 Via DIPOA ( ENCAMINHAR POR CI e POR E-MAIL: Núcleo Correpondente)
					  <br>
					  &nbsp;&nbsp;&nbsp; * 1 Via DE ARQUIVO ESCRITÓRIO LOCAL ONDE ESTÁ A PLANTA DA INDÚSTRIA
				 </div> 
				 
			  </div>





			 
			 
			 
			 
			 
			 
			 <!--- CODEVALE 
			 <div class="conteudo2  " >
			 
				 <div class="sint1 b2b " ><img src="codevale.jpg" alt="some text" width=90 height=100></div>
				 <div class="sint2 b2b " ><br><br><br><b>CONSÓRCIO PÚBLICO DE DESENVOLVIMENTO<br>VALE DO IVINHEMA - MS</b></div>
				 <div class="sint3 bb verticalText" ><b>SÍNTESE MENSAL DE VENDAS DE OVOS</b></div>
				 
				 <div class="sint4  verticalText" style="text-align:left;" ><b>Estabelecimento:</b></div>
				 <div class="sint5 bb verticalText" ><b>Granjinha Entreposto e Produção de Ovos</b></div>
				 <div class="sint6  verticalText"  style="text-align:right;"><b>SIM: 301</b></div>
			 
				 <div class="sint7  verticalText" style="text-align:left;"><b>Município:</b></div>
				 <div class="sint8 bb verticalText" ><b>Ivinhema - MS</b></div>
				 <div class="sint9  verticalText" style="text-align:right;" ><b><?PHP echo "$mesEscrito $ano"; ?></b></div>
				 
				 <div class="sint10  verticalText" ><b>NÚCLEO: Ovos</b></div>
			 
				 
			 
			 </div>
			 
			 <div class="conteudo3  " >
			 
				 <table class="tabela">
					 <tr class="bggrey">
						 <td><b>Nº Ordem</b></td> <td><b>Matéria Prima / Produto</b></td> <td><b>Qtde Recebida</b></td> <td><b>Unid. Medida</b></td> 
					 </tr>
					 <tr>
						 <td><b>1</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Jumbo</td> <td><?PHP echo number_format($jumbototal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>2</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Extra</td> <td><?PHP echo number_format($extratotal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>3</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Grande</td> <td><?PHP echo number_format($grandetotal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>4</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Médio</td> <td><?PHP echo number_format($mediototal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>5</b></td> <td style="text-align:left;" > &nbsp;Ovos Vermelho Pequeno</td> <td><?PHP echo number_format($pequenototal*2.5, 0,',','.');?></td> <td>Dúzias</td> 
					 </tr>
					 <tr>
						 <td><b>6</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>7</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>8</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>9</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>10</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>11</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>12</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>13</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>14</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>15</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr>
						 <td><b>16</b></td> <td></td> <td></td> <td></td> 
					 </tr>
					 <tr  class="bggrey">
						 <td colspan="2"> <b>TOTAL VENDIDOS:</b></td>          <td><b><?PHP echo number_format(($jumbototal + $extratotal + $grandetotal + $mediototal + $pequenototal)*2.5, 0,',','.');?></b></td> <td><b>Dúzias</b></td> 
					 </tr>
					 
				 </table>


				 <div class="sintass">
						
					  <b>_____________________________________________________
					  <br>Carimbo e Assinatura do Inspetor S.I.M</b>
					  
				 </div>
				 
				  
				 
			  </div>



-->

		 
		 
			 

		 </body>

	</html>
