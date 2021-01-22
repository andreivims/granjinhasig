<?PHP

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
				
				$returnHtml = "<table class='contentpac3dias'>
			
					<tr> 
						<td class='bgGrey'><b>Semana dos dias:</b></td>";
						
						for($i=0; $i<count($diaadia); $i++){
								$returnHtml .=  "<td  class='bgGrey' colspan='3'><b>". ($diaadia[$i]) ." </b></td>";	
						}
							
				$returnHtml .=  "	
					</tr>
					
					<tr> 
						<td  class='bgGrey'><b>Área de Inspeção</b></td> ";
						
					for($i=0; $i<count($diaadia); $i++){
								$returnHtml .= "<td  class='bgGrey'><b>Lux</b></td>  <td  class='bgGrey'><b>&nbsp C &nbsp </b></td>  <td  class='bgGrey'><b>NC&nbsp </b></td>";	
					}
				
				$returnHtml .= "
					</tr>	
					<tr> <td  class='bgGrey'>Recepção de Ovos</td> "; 
						for($i=0; $i<count($diaadia); $i++){
								$returnHtml .= "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				$returnHtml .= "		
					</tr>
						
					<tr> <td  class='bgGrey'>Classificação</td>";
				 	
						for($i=0; $i<count($diaadia); $i++){
								$returnHtml .= "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				$returnHtml .= "	
					</tr>
						
					<tr> <td  class='bgGrey'>Depósito/Expedição</td> ";
						for($i=0; $i<count($diaadia); $i++){
								$returnHtml .= "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				$returnHtml .= "
					</tr>
						
					<tr> <td  class='bgGrey'>Sanitário/Vestiário</td>"; 
						for($i=0; $i<count($diaadia); $i++){
								$returnHtml .= "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				$returnHtml .= "
					</tr>
						
					<tr> <td  class='bgGrey'>Depósito Embalagens</td>"; 
						for($i=0; $i<count($diaadia); $i++){
								$returnHtml .= "<td>&nbsp </td>  <td>&nbsp </td>  <td>&nbsp </td>";	
						}
				$returnHtml .= " 
					</tr>
						
				
				</table>";


				return $returnHtml;
			}
			
			
			
		}
		
		
?>


