		
<?PHP	
		
		
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
						text-align: center;
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
		
		
		
		
		
		class Rodape{
			
			
			public function cssRodape($PAC){
				
				 echo "
			 
					 .legenda
					{
						 position: relative;
						 float: left;
						 width: ". ($PAC->width) ."px;
						 text-align: center;
						 
						 margin-top: 10px;
						  
					}
					
					
					.monitor
					{
						
						 position: relative;
						 float: left;
					
						 width: ". ($PAC->width) ."px;
						 text-align: center;
						 margin-top: 25px;
					}
						
				
					
				 
				";
		
			}
			
			public function htmlRodape($legenda){
				
				if($legenda==""){
					
				}else{
					echo"
					 <table class='legenda bgGrey '>  
						 <tr><td>".($legenda)."</td></tr>
					 </table>";
					
				}
					
				echo"
					 
					 <table class='monitor '>  
						 <tr><td class='b_zero'><b> Responsável pelo Monitoramento: _______________________________________________ </b> </td></tr>
					 </table>
				 
				";
			
			}
			
		}
		
		
?>