<?PHP


	if(isset($_POST['CONTROLE'])) $CONTROLE = filter_input(INPUT_POST, 'CONTROLE', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['CONTROLE'])) $CONTROLE = filter_input(INPUT_GET, 'CONTROLE', FILTER_SANITIZE_SPECIAL_CHARS);
	else $CONTROLE = "";



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
	
	 function mes_ano($mes, $ano)
	{
		
		 $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
		 
		 $data = date($ano . '-'. $mes .'-10' );

		 $mesnumero = (int)date('m', strtotime($data));
		 
		 return $meses[$mesnumero-1];

			
	}
	
	


	    class PacGeral{
			
			public $height;
			public $width;
			
			function __construct($height, $width){
				$this->height = $height;
				$this->width = $width;
			}
			 
		}
		
		
		class Cabecalho{
			
			
			public $cabecalho1Height;
			public $cabecalho1Width;
			
			function __construct($cont1h, $cont1w){
				$this->cabecalho1Height = $cont1h;
				$this->cabecalho1Width = $cont1w;
				
			}
			
			public function cssCabecalho($PAC){
				
				echo "
					.tableCabecalho
					{
						position: relative;
						float: left;
						
						border: 1px solid black;
						border-collapse: collapse;
						
						font-family: ARIAL;
						text-align: center;
						
					
					}
					.cabecalho1{
						 height: ".( $this->cabecalho1Height )."px;
						 width: ".($this->cabecalho1Width * $PAC->width)."px;
						 border: 1px solid black;
						 border-collapse: collapse;
						 
						 font-size: 25px;
						 font-weight: bold;
					}
					
						 .logo
						{
							 float: left;
							 position: absolute;
							 top: 0px;
							 left: 10px;
							 
							 height: 90px;
							 width: 90px;
							 
							
							 
							
						}
					
					.cabecalho2{
						 width: ".((1-$this->cabecalho1Width) * $PAC->width)."px;
						 border: 1px solid black;
						 border-collapse: collapse;
						 
						 font-weight: bold;
						 background-color: rgb(245,245,245);
					}
					
				 
				";
			}
			
			public function htmlCabecalho($campo1, $campo2, $campo3){
				
				echo "
			 
					<table class='tableCabecalho'>
						<tr>
							<td rowspan='2' class='cabecalho1'>
								<div class='logo ' ><img src='granjinha.jpeg' alt='Granjinha' width=90 height=90></div>
								".($campo1)."
							</td> <td class='cabecalho2'>".($campo2)."</td> 
						</tr>
						<tr>
							 <!-- td --> <td class='cabecalho2'>".($campo3)."</td> 
						</tr>
						
					</table>
					
				 
				";
			}
			
			
		}
		
		
		class Informativo{
			
			
			public $infoHeight;
			
			function __construct($height){
				$this->infoHeight = $height;
				
			}
			
			public function cssInformativo($PAC){
				
				 echo "
			 
					.infoTabela{
						
						position: relative;
						float: left;
						
						margin-top: 7px;
						
						border: 1px solid black;
						border-collapse: collapse;
						
						height: ".($this->infoHeight)."px;
						width: ".($PAC->width)."px;
						
						background-color: rgb(245,245,245);
					}
					
					.infoTD{
						
						padding: 7px;
				
					}
					
					
				 
				";
		
			}
			
			public function htmlInformativo($arrayInfos){
				
				echo "<table class='infoTabela'> <tr>";
				
				for($i=0; $i<count($arrayInfos); $i++){
					
					echo"<td class='infoTD'>".($arrayInfos[$i])."</td> ";
				}
				
							
				echo "</tr> </table> ";
			}
			
			
			
		}
		
		
		class ContentPAC3{
			
			
			
			
			public function cssContentPAC3($PAC){
				
				 echo "
			 
					.contentpac3dias{
						
						position: relative;
						float: left;
						
						margin-top: 7px;
						
						width: ".($PAC->width)."px;
						
						text-align: center;
						border: 1px solid black;
						border-collapse: collapse;
					}
					
					
				 
				";
		
			}
			
			public function htmlContentPAC3($mes, $ano){
				
				 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
				 $diaadia = array();
				 $i=0; $j=0;
				 while( $i < $NDias )
				{
					 
					 $data = date($ano . '-'. $mes .'-' . ($i+1));
					 $diasemana_numero = date('w', strtotime($data));
					 //echo "<br>". ($i+1)%7 ." === ". $diasemana_numero;
					 
					 if($i == 0)
					{
						 if(($i+1)<10){ $diaadia[$j]="0". ($i+1) ." ao "; }
						 else { $diaadia[$j]=($i+1) ." ao ";}
						 
						 
						 if($diasemana_numero == 6)
						{
							
							 if(($i+1)<10){ $diaadia[$j++] .="0". ($i+1); }
							 else { $diaadia[$j++] .=($i+1) ;}
							 
							 if(($i+2)<10){ $diaadia[$j]="0". ($i+2) ." ao "; }
							 else { $diaadia[$j]=($i+2) ." ao ";}
						}
						 
					}else if($diasemana_numero == 6)
					{
						 
						 if(($i+1)<10){ $diaadia[$j++] .="0". ($i+1); }
						 else { $diaadia[$j++] .=($i+1);}
						 
						 if(($i+2)<10){ $diaadia[$j]= "0". ($i+2) ." ao "; }
						 else { $diaadia[$j]=($i+2) ." ao ";}
						 
					}else if($i == $NDias-1)
					{
						 
						 if(($i+1)<10){ $diaadia[$j++] .="0". ($i+1); }
						 else { $diaadia[$j++] .=($i+1);}
					}
					 
					 
					 $i++;
				}
				
/* ====================================================================================== */		
				
				echo "<table class='contentpac3dias'>
			
					<tr> 
						<td class='bgGrey'><b>Semana dos dias:</b></td>";
						
						for($i=0; $i<count($diaadia); $i++){
								echo "<td  class='bgGrey' colspan='3'><b>". ($diaadia[$i]) ." </b></td>";	
						}
							
				echo "	
					</tr>
					
					<tr> 
						<td  class='bgGrey'><b>Área de Inspeção</b></td> ";
						
					for($i=0; $i<count($diaadia); $i++){
								echo "<td  class='bgGrey'><b>Lux</b></td>  <td  class='bgGrey'><b>&nbsp C &nbsp </b></td>  <td  class='bgGrey'><b>NC&nbsp </b></td>";	
					}
				
				echo "
					</tr>	
					<tr> <td  class='bgGrey'>Recepção de Ovos</td> "; 
						for($i=0; $i<count($diaadia); $i++){
								echo "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				echo "		
					</tr>
						
					<tr> <td  class='bgGrey'>Classificação</td>";
				 	
						for($i=0; $i<count($diaadia); $i++){
								echo "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				echo "	
					</tr>
						
					<tr> <td  class='bgGrey'>Depósito/Expedição</td> ";
						for($i=0; $i<count($diaadia); $i++){
								echo "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				echo "
					</tr>
						
					<tr> <td  class='bgGrey'>Sanitário/Vestiário</td>"; 
						for($i=0; $i<count($diaadia); $i++){
								echo "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				echo "
					</tr>
						
					<tr> <td  class='bgGrey'>Depósito Embalagens</td>"; 
						for($i=0; $i<count($diaadia); $i++){
								echo "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				echo " 
					</tr>
						
				
				</table>";	
			}
			
			
			
		}
		
		
		if($CONTROLE == "pac1"){
			
		}else{
			
			$heightGeral = 600;
			$widthGeral = 1050;
			$pac = new PacGeral($heightGeral, $widthGeral);
			
			
			$cabecalho1Height = 90;
			$cabecalho1Width = 0.75;
			$cabecalho = new Cabecalho($cabecalho1Height, $cabecalho1Width);
			
			
			$infoHeight = 80;
			$info = new Informativo($infoHeight);
			
			
			
			$pac3 = new ContentPAC3();
			
			
			
		}
		

		
		
		
		
		


?>


	<!DOCTYPE html>
	<html lang="pt-br">
		
		
		<head>
			<title>PAC - Programa de Auto Controle</title>
			<meta charset="utf-8">
			
			
			<style>
				
				td{
					border: 1px solid black;
					border-collapse: collapse;
				}
				
<?PHP
	
				$cabecalho->cssCabecalho($pac);
				$info->cssInformativo($pac);
				
				
				
				$pac3->cssContentPAC3($pac);
		 
?>

				
				
				
				
					 .legenda
					{
						
						 width: <?PHP echo".($pac->width)."; ?>;
						 text-align: center;
						 padding: 5px;
						 
						  
					}
					
					
					.monitor
					{
						 //height: 100px;
						 width: <?PHP echo".($pac->width)."; ?>;
						 text-align: center;
						 margin-top: 20px;
					}
					
				.bgGrey{
					 background-color: rgb(245,245,245);
				}
				
				.b_all
				{
					 border-collapse: collapse; 
					 border: 1px solid black;
				}
				
				tr,td{
					 padding: 3px;
				}
			
			</style>
			
		</head>
		
		<body style='font-family: ARIAL;'>
			
			<div style="height: <?PHP echo $pac->height; ?>px; width: <?PHP echo $pac->width; ?>px; border: 1px solid black;">
<?PHP
			if($CONTROLE == "pac1"){
			
			}else{
				
				$cabecalho->htmlCabecalho("CHECK-LIST DE LUMINÁRIAS", "PAC 03 - FML 11", $mesEscrito ." - ". $ano);
				
				$infos = array(
					"<b>Período:</b> <br>Semanal", 
					"<b>Parâmetros Avaliados:</b> <br>Lâmpada: queimada ou solta. Proteção quebrada ou suja.<br> Medir Lux: Usar luxímetro", 
					"<b>Ações Corretivas:</b> <br>Trocar lâmpada; Fixar/trocar a lâmpada;  Trocar a proteção; Realizar limpeza e secar; Colocar lâmpadas mais potentes."
				);
				
				$info->htmlInformativo($infos);
				
				
				
				$pac3->htmlContentPAC3($mes, $ano);
				
				
			}
		 
		 
		 
		 
		 
		 
?>			
			
			
			 
				 <div class="legenda b_all ">  <b>LEGENDA:</b>(C) Conforme; (NC) Não conforme; </div>
				 <div class="monitor  "> <b> Responsável pelo Monitoramento: _______________________________________________ </b> </div>
			

			
			</div>
			
			
		</body>
		
	</html>


