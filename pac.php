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
								<div class='logo b_all brz' ><img src='granjinha.jpeg' alt='Granjinha' width=90 height=90></div>
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
						
						margin-top: 10px;
						
						border: 1px solid black;
						border-collapse: collapse;
						
						height: ".($this->infoHeight)."px;
						width: ".($PAC->width)."px;
						
						background-color: rgb(245,245,245);
					}
					
					
				 
				";
		
			}
			
			public function htmlInformativo($arrayInfos){
				
				echo "<table class='infoTabela'> <tr>";
				
				for($i=0; $i<count($arrayInfos); $i++){
					
					echo"<td>".($arrayInfos[$i])."</td> ";
				}
				
							
				echo "</tr> </table> ";
			}
			
			
			
		}
		
		
		if($CONTROLE == "pac1"){
			
		}else{
			
			$heightGeral = 400;
			$widthGeral = 1050;
			$pac = new PacGeral($heightGeral, $widthGeral);
			
			
			$cabecalho1Height = 90;
			$cabecalho1Width = 0.75;
			$cabecalho = new Cabecalho($cabecalho1Height, $cabecalho1Width);
			
			
			$infoHeight = 80;
			$info = new Informativo($infoHeight);
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
		 
?>
			
			</style>
			
		</head>
		
		<body>
			
			<div style="height: <?PHP echo $pac->height; ?>px; width: <?PHP echo $pac->width; ?>px; border: 1px solid black;">
<?PHP
			if($CONTROLE == "pac1"){
			
			}else{
				
				$cabecalho->htmlCabecalho("CHECK-LIST DE LUMINÁRIAS", "PAC 03 - FML 11", $mesEscrito ." - ". $ano);
				
				$infos = array("1111111", "2222222", "33333333 lksdajflk kjlskdfjlka  ksdjkalfsj jklsjladkfjksd   jsdaklfljksdfk   sjdklafjkl  jlksadjlf<Br> lsakdfjk  sadlkfjl kjsadf l", "444444");
				$info->htmlInformativo($infos);
				
			}
		 
?>			
			
			</div>
			
			
		</body>
		
	</html>


