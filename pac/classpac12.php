<?PHP

		class ContentPAC12{
			
			
			public function cssContentPAC12($PAC){
				
				 echo "
			 
					.contentpac12{
						
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
			
			public function htmlContentPAC12($mes, $ano){
				
				$NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
				$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
			
			
			
			
				$returnHtml = "
					<table class='contentpac12'>
			
						<tr > 
							<td class='tdPadding13 bgGrey'><b>Data</b></td>
							<td class='tdPadding13 bgGrey'><b>Semana</b></td>
							<td class='tdPadding13 bgGrey'><b>Mínima em ºC</b></td>
							<td class='tdPadding13 bgGrey'><b>Máxima em ºC</b></td>
						</tr>
				";
						
				
							
				for($i=0; $i<$NDias; $i++)
				{
					
					$data = date($ano . '-'. $mes .'-' . ($i+1));

					$diasemana_numero = date('w', strtotime($data));
					if( $diasemana_numero != 0){
						
						$returnHtml .= "
							<tr > 
								<td class='tdPadding13 bgGrey'>Dia "; if(($i+1)<10){ $returnHtml .= "0";} $returnHtml .=  ($i+1); $returnHtml .= "</td>
								<td class='tdPadding13 bgGrey'>"; $returnHtml .= $diasemana[$diasemana_numero]; $returnHtml .= "</td>
								<td class='tdPadding13 '></td>
								<td class='tdPadding13 '></td>
							</tr>
						";
					}
				
				}


				
				$returnHtml .= " 
					</table>
				";


				return $returnHtml;
			}
			
			
			
		}
		
		
?>


