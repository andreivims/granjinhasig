<?PHP

	  include "funcao.php"; // aqui está as variaveis $nomeClientes, $ClienteCxPorVez, $embaralhado
	  
	  
	  
	  
	  
	  
	  
	  
		 $TOTAL = 0 ;
		 $nClientes = count($nomeClientes);
		 for($i=0; $i<$nClientes; $i++)
		{
			
			 $TOTAL += $ClienteCxPorVez[$i];
			
			
		}
			
			
			echo"<style>
							
					table.comBordaSimples {
						border-collapse: collapse; /* CSS2 */
						 text-align: center;
						 font-size: 22px;
					}
					 
					table.comBordaSimples td {
						border: 1px solid black;
					}
					 
					table.comBordaSimples th {
						border: 1px solid black;
					   
					}
				</style>
";
			
echo"<table class='comBordaSimples'>";

	 $LINHA = 32;
	for($xx=0;$xx<$LINHA; $xx++)
	{	
		 echo"<tr>";
		 
		 $COLUNA = 3;
		 
		 $COLUNA /= 3;
		 for($x=0;$x<$COLUNA; $x++)
		{
			 $ProducaoCxDia = $TOTAL/3 - 0.1;
			 $dia = 0;
			 $soma = 0;
			 
			 shuffle($embaralhado);
			 
			 $listadia = array();
			 $ii=0;
			 $iii=0;
		     for($i=0; $i<$nClientes; $i++)
			{
				
				 $soma += $ClienteCxPorVez[$embaralhado[$i]];
				 //echo" | ". $nomeClientes[$embaralhado[$i]] ;
				 
				 $listadia[$ii][$iii] = $embaralhado[$i]+1;
				 $iii++;
				 
				 if($soma >= $ProducaoCxDia)
				{
					 $ii++;
				     $iii = 0;
					
					 $soma = $soma - $ProducaoCxDia;
					 $dia++;
					 //echo"<br><Br> --- dia=$dia soma=$soma  <Br>";
				}
			
				

			}
			//echo"<br>fim<Br> --- dia=$dia soma=$soma  --- TOTAL=$TOTAL  -- ProducaoCxDia=$ProducaoCxDia<Br>";
			
			 
			 $totallistadia = count($listadia);
			 //echo"<br>---$ii--$totallistadia-<Br>";
			
			 for($i=0; $i<$totallistadia; $i++)
			{
				 echo"<td>";
				 sort($listadia[$i]);
				 for($j=0; $j<count($listadia[$i]); $j++)
				{
					 echo" ". $listadia[$i][$j] . " - ";
				}
				echo"</td>";
			}
			
			
		}
		echo"</tr>";
	}
		
echo"</table>";	
	
		?>
		
		
		