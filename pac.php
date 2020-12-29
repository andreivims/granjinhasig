<?PHP


	if(isset($_POST['CONTROLE'])) $CONTROLE = filter_input(INPUT_POST, 'CONTROLE', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['CONTROLE'])) $CONTROLE = filter_input(INPUT_GET, 'CONTROLE', FILTER_SANITIZE_SPECIAL_CHARS);
	else $CONTROLE = "";




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
					}
					.cabecalho1{
						 height: ".( $this->cabecalho1Height )."px;
						 width: ".($this->cabecalho1Width * $PAC->width)."px;
						 border: 1px solid black;
						 border-collapse: collapse;
					}
					
					.cabecalho2{
						 width: ".((1-$this->cabecalho1Width) * $PAC->width)."px;
						 border: 1px solid black;
						 border-collapse: collapse;
					}
					
				 
				";
			}
			
			public function htmlCabecalho($campo1, $campo2, $campo3){
				
				echo "
			 
					<table class='tableCabecalho'>
						<tr>
							<td rowspan='2' class='cabecalho1'>".($campo1)."</td> <td class='cabecalho2'>".($campo2)."</td> 
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
						
						margin-top: 20px;
						
						border: 1px solid black;
						border-collapse: collapse;
						
						height: ".($this->infoHeight)."px;
						width: ".($PAC->width)."px;
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
			
			$heightGeral = 200;
			$widthGeral = 1300;
			
			$cabecalho1Height = 180;
			$cabecalho1Width = 0.75;
			$cabecalho = new Cabecalho($cabecalho1Height, $cabecalho1Width);
			
			
			$infoHeight = 100;
			$info = new Informativo($infoHeight);
		}
		

		
		
		
		$pac = new PacGeral($heightGeral, $widthGeral);
		


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
			
			
<?PHP
			if($CONTROLE == "pac1"){
			
			}else{
				
				$cabecalho->htmlCabecalho("111", "222", "333");
				
				$infos = array("1111111", "2222222", "33333333 lksdajflk kjlskdfjlka  ksdjkalfsj jklsjladkfjksd   jsdaklfljksdfk   sjdklafjkl  jlksadjlf<Br> lsakdfjk  sadlkfjl kjsadf l", "444444");
				$info->htmlInformativo($infos);
				
			}
		 
?>			
			
			
			
		</body>
		
	</html>


