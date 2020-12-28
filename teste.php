<?PHP





?>


	<!DOCTYPE html>
	<html lang="pt-br">
		
		
		<head>
			<title>Título da página</title>
			<meta charset="utf-8">
			
			
			<style>
				
				
<?PHP


		class PacGeral{
			
			public $heightGeral;
			public $widthGeral;
			
			
		}
		
		
		class CabecalhoTabela{
			
			
			public $cabecalho1Height;
			public $cabecalho1Width;
			
			public function setCabecalho($cont1height, $cont1width){
				$this->cabecalho1Height = $cont1height;
				$this->cabecalho1Width = $cont1width;
				
			}
			
			public function cssCabecalho(){
				
				
			}
			
			
		}


		$heightGeral = 200;
		$widthGeral = 1300;
		$cabecalho1Height = 180;
		$cabecalho1Width = 0.75;
		function tabelaCabecalho($heightGeral, $widthGeral, $cabecalho1Height, $cabecalho1Width){
			echo "
			 
				.cabecalho1{
					 height: ".( $cabecalho1Height )."px;
					 width: ".($cabecalho1Width * $widthGeral)."px;
					 border: 1px solid black;
					 border-collapse: collapse;
				}
				
				.cabecalho2{
					 width: ".((1-$cabecalho1Width) * $widthGeral)."px;
					 border: 1px solid black;
					 border-collapse: collapse;
				}
				
			 
			";
			 
			 
		}
		tabelaCabecalho($heightGeral, $widthGeral, $cabecalho1Height, $cabecalho1Width);
		
		 
		 
?>
				table
				{
					
					border: 1px solid black;
					border-collapse: collapse;
				}
				
				.tabelaCabecalho{
					position: relative;
					float: left;
					 
				}
				
					
			
			</style>
			
		</head>
		
		<body>
			
			<table class="tabelaCabecalho">
				<tr>
					<td rowspan="2" class="cabecalho1">1</td> <td class="cabecalho2">2</td> 
				</tr>
				<tr>
					 <!-- td --> <td>3</td> 
				</tr>
				
			
			</table>
			
			
			
			
		</body>
		
	</html>


