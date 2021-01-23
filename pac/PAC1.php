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
			<title>MANUTENÇÃO DAS INSTALAÇÕES E EQUIPAMENTOS</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			
				table 
				{
					border-collapse: collapse; 
					background: #FFFFFF;
					
					
					//height: 595px;
					width: 842px;
					
					text-align: center;
					font-family: ARIAL;
				}
				
			
				
				//tr:nth-child(even) {background-color: #f2f2f2;}
				//tr:nth-child(odd) {background-color: #f2f2f2;}
				
				
				 
				td 
				{
					border: 1px solid black;
					padding: 5px;
				}
				  
				
				 
				
				
			</style>
			
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
		</head>
		 
		<body>
		
		
		 
			<?PHP 
			
			
				
				 $descricao="MANUTENÇÃO DAS INSTALAÇÕES E EQUIPAMENTOS";
				 $info="PAC 01 - FML 10";
				 
				
				 cabecalho($descricao, $info, $mesEscrito, $ano);
			
			
			//////////////////////////////////////////////////
				 $height = 65;
				 $widths[0] = 150;
				 $widths[1] = 350;
				 $widths[2] = 350;
				 
				 $instrucoes[0] = "<b>Período:</b> <br>Mensal";
				 $instrucoes[1] = "<b>Parâmetros Avaliados:</b> <br>Os parâmetros a serem avaliados estão descritos abaixo";
				 $instrucoes[2] = "<b>Ações Corretivas:</b> <br>Comunicar o proprietário para que o mesmo contrate serviço especializado de manutenção.";
				 instrucao($height, $widths, $instrucoes);

			?>			
			 
			 
			
			 <table>	
			 
				<tr>
					<td class=" b_allz " colspan="16"> <b2r><b>INSTALAÇÕES:</b></td>
				</tr>
				
				
				<tr>
					<td rowspan="2" class="brz bggrey "><b>Área de Inspeção:</b></td> <!----> <td colspan="15" class="blz bggrey"><b>Parâmetros Avaliados:</b> </td>
				</tr>
				
				
				<tr>
					                                        <!----><td  class="b2_all " colspan="3"><b>Paredes: ausência de mofo, pintura íntegra, ausência de rachaduras.</b></td>  <!----><td   class="b2_all " colspan="3"><b>Piso: ausência de limo, ausência de rachaduras ou buraco.</b></td>   <!----><td   class="b2_all " colspan="3"><b>Teto: ausêndia de mofo, pintura íntegra, ausência de rachaduras.</b></td>  <!----><td  class="b2_all " colspan="3"><b>Ralo: integridade da grade, conservação, livre de sujidades.</b></td>   <!----><td  class="b2_all " colspan="3"><b>Instalações elétricas: ausência de arranjos provisórios, fios soltos, canaletas quebradas.</b></td>
					
				</tr>
				
				
				<tr>
					<td rowspan="2" class="bggrey"><b>Área 01 <br>RECEPÇÃO DE OVOS</b></td>      <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td> <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>         <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>               <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>             <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>          
				</tr>
				<tr>
					<!-------------------------------------------------------->  <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>      <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>     <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td> 
				</tr>
				
				
				<tr>
					<td rowspan="2" class="bggrey"><b>Área 02 <br>VESTIÁRIO / SANITÁRIO</b></td>     <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td> <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>         <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>               <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>             <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>          
				</tr>
				<tr>
					<!-------------------------------------------------------->  <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>      <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>     <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td> 
				</tr>
				
				
				
				<tr>
					<td rowspan="2" class="bggrey"><b>Área 03 <br>BARREIRA SANITÁRIA</b></td>      <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td> <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>         <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>               <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>             <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>          
				</tr>
				<tr>
					<!-------------------------------------------------------->  <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>      <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>     <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td> 
				</tr>
				
				
				
				<tr>
					<td rowspan="2" class="bggrey"><b>Área 04 <br>ESTOCAGEM DE OVOS</b></td>      <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td> <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>         <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>               <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>             <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>          
				</tr>
				<tr>
					<!-------------------------------------------------------->  <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>      <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>     <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td> 
				</tr>
				
				
				<tr>
					<td rowspan="2" class="bggrey"><b>Área 05 <br>DEPÓSITO DE EMBALAGENS</b></td>      <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td> <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>         <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>               <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>             <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>          
				</tr>
				<tr>
					<!-------------------------------------------------------->  <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>      <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>     <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td> 
				</tr>
				
				
				<tr>
					<td rowspan="2" class="bggrey"><b>Área 06 <br>EXPEDIÇÃO DE OVOS</b></td>      <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td> <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>         <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>               <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>             <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>          
				</tr>
				<tr>
					<!-------------------------------------------------------->  <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>      <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>     <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td> 
				</tr>
				
				<tr>
					<td class=" b_allz " colspan="16"><b2r> <b>EQUIPAMENTOS:</b></td>
				</tr>
				
				
				<tr>
					<td rowspan="4" colspan="4" class="brz bggrey" ><b>Área de Inspeção:<b2r><b2r> CLASSIFICADORA  <b2r>  OVOSCOPIA  <b2r>  LAVADORA <b2r>   SELADORA</b></td> <!----> <td colspan="12" class="blz bggrey"><b>Parâmetros Avaliados:</b> </td>
				</tr>
				
				
				<tr>
					 <!---------------------------------------------------------------------------------------------------------><td  class="b2_all " colspan="3"><b>Desgaste Natural: peças quebradas, funcionamento correto.</b></td>   <!----><td  class="b2_all " colspan="3"><b>Lubrificação: excesso ou falta de graxa/óleo lubrificante, Utilização de graxa de grau alimentício.</b></td>  <!----><td  class="b2_all " colspan="3"><b>Pintura: Presença de ferrugem, descascamento da tinta.</b></td>   <!----><td  class="b2_all " colspan="3"><b>Fragmentos oriundos do serviço de manutenção, limalhas de ferro, ferramentas.</b></td>
					
				</tr>
				
				
				<tr>
					<!----------------------------------------------------------------------------------------------------------->     <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td> <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>         <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>               <td class=" b2l" style="height:35px; width: 35px;">&nbsp;C&nbsp;</td> <td style="height:35px; width: 35px;">NC&nbsp;</td> <td  class="b2r" style="height:35px; width: 35px;">ACP</td>           
				</tr>
				<tr>
					<!-------------------------------------------------------------------------------------------------------->     <td class="b2b b2l"  style="height:35px; width: 35px;"></td> <td class="b2b "></td> <td class="b2b b2r"></td>    <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>      <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>     <td class="b2b b2l"></td> <td  class="b2b "></td> <td class="b2b b2r"></td>  
				</tr>
				
				
				
			 </table>	
				
				
				
<!--------------------------------------------------------------------------->
			 <div class="rodape ">
				 <div class="legenda b_all bggrey">  <b>LEGENDA:</b>  C=Conforme; NC=Não conforme;  ACP=Ação Corretiva Pendente; </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			 </div> 
   


		 </body>

	</html>
