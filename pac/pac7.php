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
			<title>CONTROLE INTEGRADO DE PRAGAS</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				 .testeheader 
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
				
				
				             .testeheader1
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 100px;
								height: 30px;
								width: 74px;
								font-size: 14px;
								background-color: rgb(220,220,220);
							}
							
				             .testeheader2
							{
								float: left;
								position: absolute;
								
								top: 0px;
								left: 174px;
								height: 30px;
								width: 74px;
								font-size: 14px;
								background-color: rgb(220,220,220);
							}
							
				             .testeheader3
							{
								float: left;
								position: absolute;
								
								top: 0px;
								left: 248px;
								height: 30px;
								width: 74px;
								font-size: 14px;
								background-color: rgb(220,220,220);
							}
							
				             .testeheader4
							{
								float: left;
								position: absolute;
								
								top: 0px;
								left: 322px;
								height: 30px;
								width: 74px;
								font-size: 14px;
								background-color: rgb(220,220,220);
							}
							
							.testeheader5
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 396px;
								height: 30px;
								width: 74px;
								font-size: 14px;
								background-color: rgb(220,220,220);
							}
							.testeheader6
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 470px;
								height: 30px;
								width: 74px;
								font-size: 14px;
								background-color: rgb(220,220,220);
							}
							.testeheader7
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 544px;
								height: 30px;
								width: 74px;
								font-size: 14px;
								background-color: rgb(220,220,220);
							}
							.testeheader8
							{
								
								float: left;
								position: absolute;
								
								top: 0px;
								left: 618px;
								height: 30px;
								width: 74px;
								font-size: 14px;
								background-color: rgb(220,220,220);
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
						width: 95px;

						 text-align: left;
						 padding-left: 5px;
						 font-size: 15px;
					}
				
					 .teste2
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 100px;
					}
					
					 .teste3
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 137px;
					}
					
					 .teste4
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 174px;
					}
					
					 .teste5
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 211px;
					}
					
					 .teste6
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 248px;
					}
					
					 .teste7
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 285px;
					}
					
					 .teste8
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 322px;
					}
					
					 .teste9
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 359px;
					}
					
					 .teste10
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 396px;
					}
					
					 .teste11
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 433px;
					}
					
					 .teste12
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 470px;
					}
					
					 .teste13
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 507px;
					}
					
					 .teste14
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 544px;
					}
					
					 .teste15
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 581px;
					}
					
					 .teste16
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 618px;
					}
					
					 .teste17
					{
						float: left;position: absolute;top: 0px;height: 30px; width: 37px;	
						left: 655px;
					}
					
					
					
					
					
					
					
					 .img1
					{
						float: left;
						position: absolute;
						top: 40px;
						left: 720px;
					}
				 
					 .img2
					{
						float: left;
						position: absolute;
						top: 160px;
						left: 750px;
					}
				 
					 .img3
					{
						float: left;
						position: absolute;
						top: 280px;
						left: 720px;
					}
				 
					 .img4
					{
						float: left;
						position: absolute;
						top: 400px;
						left: 750px;
					}
				 
					 .img5
					{
						float: left;
						position: absolute;
						top: 550px;
						left: 720px;
					}
				 
					 .img6
					{
						float: left;
						position: absolute;
						top: 670px;
						left: 720px;
					}
				 
				 
				 
				 
				 
				 .verticalText 
				{
					 

					line-height: 30px;

				}
				
				
			</style>
			
		</head>
		 
		<body>
		
		
		
		
			<?PHP 
			
			
				 $descricao="CONTROLE INTEGRADO DE PRAGAS";
				 $info="PAC 07 - FML 06";
				 
				 
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
			//////////////////////////////////////////////////
				 $height = 90;
				 $widths[0] = 75;
				 $widths[1] = 350;
				 $widths[2] = 420;
				 
				 $instrucoes[0] = "<b>Período:</b> <br>Diário";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br>Presença de pragas, fezes ou pêlos. Presença de telas rasgadas, portas abertas, evidência de blocos/iscas roidas.";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Em casos de telas rasgadas, realizar o conserto. Em casos de portas abertas, fechá-las. Em casos de roedores ou insetos, raspar os blocos ou acresentar novo bloco à armadilha.";
				 instrucao($height, $widths, $instrucoes);
				 
				 
				 
				 
			////////////////////////////////
			
						
			 ?>
			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				  pac07content($mes, $ano);

				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape ">
				 <div class="legenda b_all bggrey">  <b>LEGENDA: </b>(E) = Encontrado; (NE) = Não encontrado; </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
		 
		 
			 

		 </body>

	</html>
