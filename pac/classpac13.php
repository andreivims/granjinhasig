<?PHP

		class ContentPAC13{
			
			
			public function cssContentPAC13($PAC){
				
				 echo "
			 
					.contentpac13{
						
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
			
			public function htmlContentPAC13($mes, $ano){
				
				$meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
				
				$returnHtml = "
					<table class='contentpac13'>
			
						<tr > 
							<td rowspan='2' class='trpac12 bgGrey'><b>Mês</b></td>
							<td colspan='2' class='trpac12 bgGrey'><b>Jumbo</b></td>
							<td colspan='2' class='trpac12 bgGrey'><b>Extra</b></td>
							<td colspan='2' class='trpac12 bgGrey'><b>Grande</b></td>
							<td colspan='2' class='trpac12 bgGrey'><b>Médio</b></td>
							<td colspan='2' class='trpac12 bgGrey'><b>Pequeno</b></td>
							<td colspan='2' class='trpac12 bgGrey'><b>Industrial</b></td>
						</tr>
						
						<tr > 
							<td class='trpac12 bgGrey'><b>&nbsp;C&nbsp;&nbsp;</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;NC</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;C&nbsp;&nbsp;</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;NC</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;C&nbsp;&nbsp;</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;NC</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;C&nbsp;&nbsp;</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;NC</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;C&nbsp;&nbsp;</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;NC</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;C&nbsp;&nbsp;</b></td>
							<td class='trpac12 bgGrey'><b>&nbsp;NC</b></td>
							
						</tr>
				";
						
				
							
				for($i=0; $i<12; $i++)
				{
					
					$returnHtml .= "
						<tr > 
							<td class='trpac12 '><b>".($meses[$i])."</b></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							<td class='trpac12 '></td>
							
							
						</tr>
					";
				
				}

				$returnHtml .= " 
					</table>
				";
				
				return $returnHtml;
			}
			
			
			
		}
		
		
?>


