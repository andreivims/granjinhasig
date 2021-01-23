<?PHP 



	 function cabecalho($descricao, $info, $mes, $ano)
	{
?>			 
			 
			 <div class="cabecalho ">
			 
				 <div class="logo b_all brz"><img src="granjinha.jpeg" alt="some text" width=90 height=90></div>
				 <div class="descricao centrov b_all blz brz"><?PHP echo $descricao; ?></div>
				 
				 
				 <div class="info centrov b_all bbz bggrey"><?PHP echo $info; ?></div>
				 <div class="mes centrov b_all bbz bggrey"><?PHP echo $mes; ?></div>
				 <div class="ano centrov b_all bggrey"><?PHP echo $ano; ?></div>
			 
				 
			 </div>
		
<?PHP
		
		
	}
	
	
	
	
	
	
	
	 function mes_ano($mes, $ano)
	{
		
		 $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
		 
		 $data = date($ano . '-'. $mes .'-10' );

		 $mesnumero = (int)date('m', strtotime($data));
		 
		 return $meses[$mesnumero-1];

			
	}
	
	

	 function instrucao($height, $widths, $instrucoes)
	{
		
		 $N = count($widths);
		 $ant = 0;
?>			 
			 
			 <div style="height: <?PHP echo $height; ?>px;" class="instrucao  ">
				 
<?PHP			

			 for($i=0; $i<$N; $i++)
			{
				 
?>				
				 
				 <div style="height: <?PHP echo $height; ?>px; width: <?PHP echo $widths[$i]; ?>px; top: 0px; left: <?PHP echo $ant; ?>px;" class="partInstrucao b_all bggrey <?PHP if(($i+1)<$N){echo"brz"; }?>"><?PHP echo $instrucoes[$i]; ?></div>
				 
				 
<?PHP			
				 $ant += $widths[$i];
			}	 

?>					 
			 </div>
		
<?PHP
		
		
	}

?>







<?PHP
		
	///////////////////// PAC 02 ///////////////////////////////////////////////////////	


	 function pac02content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 		 
				 
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 if( $diasemana_numero != 0)
				{
?>				
				 
					 <div class="teste">
				 
						 <div class="teste1 b_all brz bbz bggrey"><b>Dia <?PHP if(($i+1)<10){echo"0";} echo ($i+1); ?><br><?PHP echo $diasemana[$diasemana_numero]; ?></b></div>
						 <div class="teste2 b_all bbz"><b>Hora:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
						 
						 
						 <div class="teste4 b_all brz bbz bggrey"><b>C</b></div>
						 <div class="teste5 b_all bbz bggrey" ><b>NC</b></div>
						 
						 <div class="teste6 b_all brz bbz bggrey">Sanitário</div>
						 <div class="teste7 b_all brz bbz"></div>
						 <div class="teste8 b_all bbz"></div>
						 
						 <div class="teste9 b_all brz bbz bggrey">Vestiário</div>
						 <div class="teste10 b_all brz bbz"></div>
						 <div class="teste11 b_all bbz"></div>
						 
						 <div class="teste12 b_all brz bggrey">Barreira</div>
						 <div class="teste13 b_all brz "></div>
						 <div class="teste14 b_all"></div>
					
					
					 </div>
				 
				 
				 
				 
<?PHP			
				}

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 02 ///////////////////////////////////////////////////////	
	}

?>










<?PHP
		
	///////////////////// PAC 03 ///////////////////////////////////////////////////////	


	 function pac03content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');



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
			
			
			 for($i=0; $i<$j; $i++)
			{
				 //echo "----". $diaadia[$i] ."<br>";
			}
			 
			
			

					
					
					
					
					
?>			 
		 		 
				 <div class="testeheader ">
				 
					 <div class="testeheader1 b_all brz  bggrey verticalText"><b>Semana dos dias:</b></div>
<?PHP 

				 for($i=0; $i<$j; $i++)
				{
					 echo "<div class=\"testeheader". ($i+2) ." b_all "; 
					 if(($i+1) != $j){echo" brz ";} 
					 echo" bbz bggrey verticalText \"><b>". $diaadia[$i] ."</b></div>";
				}
?>
<!--
					 <div class="testeheader2 b_all brz bbz bggrey verticalText "><b>02 ao 10</b></div>
					 <div class="testeheader3 b_all brz bbz bggrey verticalText "><b>02 à 10</b></div>
					 <div class="testeheader4 b_all brz bbz bggrey verticalText "><b>02 à 10</b></div>
					 <div class="testeheader5 b_all  bbz bggrey verticalText "><b>02 à 10</b></div>
					 <div class="testeheader6 b_all  bbz bggrey verticalText "><b>02 à 10</b></div>
					 <div class="testeheader7 b_all  bbz bggrey verticalText "><b>02 à 10</b></div>
-->				
					 
				 </div> 
				
				 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Área de Inspeção</b></div>
					
<?PHP 

				 $ss=3;
				 for($i=0; $i<$j; $i++)
				{
					 echo "<div class=\"teste". $ss ." b_all "; 
					 if(($i+1) != $j){echo" brz ";} 
					 echo" bggrey verticalText\"><b>C</b></div>";
					 
					 echo "<div class=\"teste". ($ss+1) ." b_all "; 
					 if(($i+1) != $j){echo" brz ";} 
					 echo" bggrey verticalText\"><b>NC</b></div>";
					 
					 $ss = $ss + 2;
				}
?>	
			  
<!--					 
					 <div class="teste3 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste4 b_all brz  bggrey verticalText"><b>NC</b></div>
					 <div class="teste5 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste6 b_all brz  bggrey verticalText"><b>NC</b></div>
					 <div class="teste7 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste8 b_all brz  bggrey verticalText"><b>NC</b></div>
					 <div class="teste9 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste10 b_all brz  bggrey verticalText"><b>NC</b></div>
					 
					 <div class="teste11 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste12 b_all brz  bggrey verticalText"><b>NC</b></div>
					 <div class="teste13 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste14 b_all   bggrey verticalText"><b>NC</b></div>
					
-->				
				
				
				 </div>
				 
				 
			 
				 
<?PHP			


			 $nomeInspecao[0] = "Recepção de Ovos";
			 $nomeInspecao[1] = "Classificação";
			 $nomeInspecao[2] = "Depósito/Expedição de Ovos";
			 $nomeInspecao[3] = "Sanitário/Vestiário";
			 $nomeInspecao[4] = "Depósito de Embalagens";
			 
			 for($i=0; $i<5; $i++)
			{
				
				 
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz <?PHP if($i!=4)echo"bbz";?> verticalText bggrey"><?PHP echo $nomeInspecao[$i]; ?></div>
						
<?PHP 

				 $ss=3;
				 for($x=0; $x<$j; $x++)
				{
					 echo " <div class=\"teste". $ss ." b_all brz    "; 
					 if($i!=4)echo" bbz ";
					 echo"  verticalText\"><b></b></div>";
					
					 
					 echo " <div class=\"teste". ($ss+1) ." b_all     "; 
					 if($i!=4)echo" bbz ";
					 echo"  verticalText\"><b></b></div>";
					 
					 $ss = $ss + 2;
				}
?>
<!--					 
						 <div class="teste3 b_all brz  < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste4 b_all   < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste5 b_all brz  < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste6 b_all   < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste7 b_all brz  < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste8 b_all   < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste9 b_all brz  < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste10 b_all   < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste11 b_all brz  < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste12 b_all   < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste13 b_all brz  < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						 <div class="teste14 b_all   < ?PHP if($i!=4)echo"bbz";?>  verticalText"><b></b></div>
						
-->					
					 </div>
				 
				 
<?PHP			
				

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 03 ///////////////////////////////////////////////////////	
	}

?>





<?PHP
		
	///////////////////// PAC 04 ///////////////////////////////////////////////////////	


	 function pac04content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');



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
			
			
			 for($i=0; $i<$j; $i++)
			{
				 //echo "----". $diaadia[$i] ."<br>";
			}
			 
			
			

					
					
					
					
					
?>			 
		 		 
				 <div class="testeheader ">
				 
					 <div class="testeheader1 b_all brz  bggrey verticalText"><b>Semana dos dias:</b></div>
<?PHP 

				 for($i=0; $i<$j; $i++)
				{
					 echo "<div class=\"testeheader". ($i+2) ." b_all "; 
					 if(($i+1) != $j){echo" brz ";} 
					 echo" bbz bggrey verticalText \"><b>". $diaadia[$i] ."</b></div>";
				}
?>
			
					 
				 </div> 
				
				 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>LOCAL AVALIADO</b></div>
					
<?PHP 

				 $ss=3;
				 for($i=0; $i<$j; $i++)
				{
					 echo "<div class=\"teste". $ss ." b_all "; 
					 if(($i+1) != $j){echo" brz ";} 
					 echo" bggrey verticalText\"><b>C</b></div>";
					 
					 echo "<div class=\"teste". ($ss+1) ." b_all "; 
					 if(($i+1) != $j){echo" brz ";} 
					 echo" bggrey verticalText\"><b>NC</b></div>";
					 
					 $ss = $ss + 2;
				}
?>	
			  
			
				
				 </div>
				 
				 
			 
				 
<?PHP			


			
			 $nomeInspecao[0] = "Recepção de Ovos";
			 $nomeInspecao[1] = "Classificação";
			 $nomeInspecao[2] = "Depósito/Expedição de Ovos";
			 $nomeInspecao[3] = "Sanitário/Vestiário";
			 $nomeInspecao[4] = "Depósito de Embalagens";
			 
			 $totalINSP = count($nomeInspecao);
			 for($i=0; $i< $totalINSP; $i++)
			{
				
				 
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz <?PHP if($i!=$totalINSP-1)echo"bbz";?> verticalText bggrey"><?PHP echo $nomeInspecao[$i]; ?></div>
						
<?PHP 

				 $ss=3;
				 for($x=0; $x<$j; $x++)
				{
					 echo " <div class=\"teste". $ss ." b_all brz    "; 
					 if($i!=$totalINSP-1)echo" bbz ";
					 echo"  verticalText\"><b></b></div>";
					
					 
					 echo " <div class=\"teste". ($ss+1) ." b_all     "; 
					 if($i!=$totalINSP-1)echo" bbz ";
					 echo"  verticalText\"><b></b></div>";
					 
					 $ss = $ss + 2;
				}
?>
				
					 </div>
				 
				 
<?PHP			
				

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 04 ///////////////////////////////////////////////////////	
	}

?>








<?PHP
		
	///////////////////// PAC 05 ///////////////////////////////////////////////////////	


	 function pac05content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 		 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Data</b></div>
					 <div class="teste2 b_all brz bbz bggrey verticalText"><b>Semana</b></div>
					 
					 
					 <div class="teste3 b_all brz bbz bggrey verticalText"><b>Horário</b></div>
					 <div class="teste4 b_all brz  bggrey verticalText" ><b>Ponto de Coleta</b></div>
					 
					 <div class="teste5 b_all brz bbz bggrey verticalText"><b>pH</b></div>
					 <div class="teste6 b_all bbz  bggrey verticalText"><b>Cloro Livre</b></div>
				
				
				
				 </div>
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 if( $diasemana_numero != 0)
				{
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz bbz verticalText bggrey">Dia <?PHP if(($i+1)<10){echo"0";} echo ($i+1); ?></div>
						 <div class="teste2 b_all brz bbz verticalText bggrey"><?PHP echo $diasemana[$diasemana_numero]; ?></div>
						 
						 
						 <div class="teste3 b_all  bbz verticalText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
						 <div class="teste4 b_all   verticalText" >
						 
							 <div class="teste41 bb " style="line-height: 17px;"> <div class=" checkB"></div>&nbsp;&nbsp; Recepção de Ovos</div>
							 <div class="teste42    " style="line-height: 17px;" > <div class=" checkB"></div>Barreira Sanitária</div>
						 
						 </div>
						 
						 <div class="teste5 b_all brz bbz verticalText"></div>
						 <div class="teste6 b_all bbz verticalText"></div>
					
					
					
					 </div>
				 
				 
				 
				 
<?PHP			
				}

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 05 ///////////////////////////////////////////////////////	
	}

?>








<?PHP
		
	///////////////////// PAC 06 ///////////////////////////////////////////////////////	


	 function pac06content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');



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
			
			
			 for($i=0; $i<$j; $i++)
			{
				 //echo "----". $diaadia[$i] ."<br>";
			}
			 
			
			

					
					
					
					
					
?>			 
		 		 
				 <div class="testeheader ">
				 
					 <div class="testeheader1 b_all brz  bggrey verticalText"><b>Semana dos dias:</b></div>
<?PHP 

				 for($i=0; $i<$j; $i++)
				{
					 echo "<div class=\"testeheader". ($i+2) ." b_all "; 
					 if(($i+1) != $j){echo" brz ";} 
					 echo" bbz bggrey verticalText \"><b>". $diaadia[$i] ."</b></div>";
				}
?>
			
					 
				 </div> 
				
				 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>LOCAL AVALIADO</b></div>
					
<?PHP 

				 $ss=3;
				 for($i=0; $i<$j; $i++)
				{
					 echo "<div class=\"teste". $ss ." b_all "; 
					 if(($i+1) != $j){echo" brz ";} 
					 echo" bggrey verticalText\"><b>C</b></div>";
					 
					 echo "<div class=\"teste". ($ss+1) ." b_all "; 
					 if(($i+1) != $j){echo" brz ";} 
					 echo" bggrey verticalText\"><b>NC</b></div>";
					 
					 $ss = $ss + 2;
				}
?>	
			  
			
				
				 </div>
				 
				 
			 
				 
<?PHP			


			
			 $nomeInspecao[0] = "Recepção de Ovos";
			 $nomeInspecao[1] = "Classificação";
			 $nomeInspecao[2] = "Depósito/Expedição de Ovos";
			 $nomeInspecao[3] = "Sanitário/Vestiário";
			 $nomeInspecao[4] = "Depósito de Embalagens";
			 
			 $totalINSP = count($nomeInspecao);
			 for($i=0; $i< $totalINSP; $i++)
			{
				
				 
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz <?PHP if($i!=$totalINSP-1)echo"bbz";?> verticalText bggrey"><?PHP echo $nomeInspecao[$i]; ?></div>
						
<?PHP 

				 $ss=3;
				 for($x=0; $x<$j; $x++)
				{
					 echo " <div class=\"teste". $ss ." b_all brz    "; 
					 if($i!=$totalINSP-1)echo" bbz ";
					 echo"  verticalText\"><b></b></div>";
					
					 
					 echo " <div class=\"teste". ($ss+1) ." b_all     "; 
					 if($i!=$totalINSP-1)echo" bbz ";
					 echo"  verticalText\"><b></b></div>";
					 
					 $ss = $ss + 2;
				}
?>
				
					 </div>
				 
				 
<?PHP			
				

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 06 ///////////////////////////////////////////////////////	
	}

?>






<?PHP
		
	///////////////////// PAC 07 ///////////////////////////////////////////////////////	


	 function pac07content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 		 
				 <div class="testeheader ">
				 
					 <div class="testeheader1 b_all   bggrey verticalText"><b>Baratas</b></div>
					 <div class="testeheader2 b_all   bggrey verticalText"><b>Moscas</b></div>
					 <div class="testeheader3 b_all   bggrey verticalText"><b>Formigas</b></div>
					 <div class="testeheader4 b_all   bggrey verticalText"><b>Aranhas</b></div>
					 <div class="testeheader5 b_all   bggrey verticalText"><b>Anfíbios</b></div>
					 <div class="testeheader6 b_all   bggrey verticalText"><b>Besouros</div>
					 <div class="testeheader7 b_all   bggrey verticalText"><b>Roedores</b></div>
					 <div class="testeheader8 b_all   bggrey verticalText"><b>Outros</b></div>
					
					 
				 </div> 
				
				 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data</b></div>
					
					 
					 <div class="teste2 b_all  bbz bggrey verticalText"><b>E</b></div>
					 <div class="teste3 b_all  bbz bggrey verticalText"><b>NE</b></div>
					 <div class="teste4 b_all  bbz bggrey verticalText"><b>E</b></div>
					 <div class="teste5 b_all  bbz bggrey verticalText"><b>NE</b></div>
					 <div class="teste6 b_all brz bbz bggrey verticalText"><b>E</b></div>
					 <div class="teste7 b_all brz bbz bggrey verticalText"><b>NE</b></div>
					 <div class="teste8 b_all brz bbz bggrey verticalText"><b>E</b></div>
					 <div class="teste9 b_all brz bbz bggrey verticalText"><b>NE</b></div>
					 <div class="teste10 b_all brz bbz bggrey verticalText"><b>E</b></div>
					 <div class="teste11 b_all brz bbz bggrey verticalText"><b>NE</b></div>
					 <div class="teste12 b_all brz bbz bggrey verticalText"><b>E</b></div>
					 <div class="teste13 b_all brz bbz bggrey verticalText"><b>NE</b></div>
					 <div class="teste14 b_all brz bbz bggrey verticalText"><b>E</b></div>
					 <div class="teste15 b_all brz bbz bggrey verticalText"><b>NE</b></div>
					 <div class="teste16 b_all brz bbz bggrey verticalText"><b>E</b></div>
					 <div class="teste17 b_all  bbz bggrey verticalText"><b>NE</b></div>
					 
					 
					 
					 
					 <div class="img1  "> <img src="barata.png" alt="some text" ></div>
					 <div class="img2  "> <img src="mosca.png" alt="some text" ></div>
					 <div class="img3  "> <img src="formiga.png" alt="some text" ></div>
					 <div class="img4  "> <img src="aranha.png" alt="some text" ></div>
					 <div class="img5  "> <img src="besouro.png" alt="some text" ></div>
					 <div class="img6  "> <img src="roedor.png" alt="some text" ></div>
					 
					 
					 
					 
					 
				 </div>
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 if( $diasemana_numero != 0)
				{
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all  bbz verticalText bggrey"><?PHP if(($i+1)<10){echo"0";} echo ($i+1);  echo " - "; echo $diasemana[$diasemana_numero]  ?></div>
						
						 
						 <div class="teste2 b_all brz bbz verticalText "></div>
						 <div class="teste3 b_all  bbz verticalText "></div>
						 <div class="teste4 b_all brz bbz verticalText "></div>
						 <div class="teste5 b_all  bbz verticalText "></div>
						 <div class="teste6 b_all brz bbz verticalText "></div>
						 <div class="teste7 b_all  bbz verticalText "></div>
						 <div class="teste8 b_all brz bbz verticalText "></div>
						 <div class="teste9 b_all  bbz verticalText "></div>
						 <div class="teste10 b_all brz bbz verticalText "></div>
						 <div class="teste11 b_all  bbz verticalText "></div>
						 <div class="teste12 b_all brz bbz verticalText "></div>
						 <div class="teste13 b_all  bbz verticalText "></div>
						 <div class="teste14 b_all brz bbz verticalText "></div>
						 <div class="teste15 b_all  bbz verticalText "></div>
						 <div class="teste16 b_all brz bbz verticalText "></div>
						 <div class="teste17 b_all  bbz verticalText "></div>
						
						
						
					
					 </div>
				 
				 
				 
				 
<?PHP			
				}

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 07 ///////////////////////////////////////////////////////	
	}

?>













<?PHP
		
	///////////////////// PAC 08 ///////////////////////////////////////////////////////	


	 function pac08content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 		 
				 <div class="testeheader ">
				 
					 <div class="testeheader1 b_all brz  bggrey verticalText"><b>ÁREA:</b></div>
					 <div class="testeheader2 b_all brz bbz bggrey "><b>Recepção, Classificação e Armazenamento</b></div>
					 <div class="testeheader3 b_all brz bbz bggrey "><b>Vestiário, Sanitário e Barreira Sanitária</b></div>
					 <div class="testeheader4 b_all brz bbz bggrey "><b>Depósito de Embalagens</b></div>
					 <div class="testeheader5 b_all  bbz bggrey "><b>Geral</b></div>
					
					 
				 </div> 
				 
				 <div class="testeteste ">
				 
					 <div class="testetesteheader1 b_all  brz bggrey verticalText"><b>ITENS AVALIADOS:</b></div>
					 <div class="testetesteheader2 b_all  brz bbz  bggrey"><b>Exaustor, Classificadora Lavadora de ovos, Lixeira com tampa, Ovoscopia, Seladora e Ventilador</b></div>
					 <div class="testetesteheader3 b_all brz bbz  bggrey"><b>Armário, Chuveiro, Torneiras, Pia/Lava botas, Saboneteiras, Ralo, Vaso Sanitário, Escovas e Papéis Toalha</b></div>
					 <div class="testetesteheader4 b_all brz bbz bggrey "><b>Óculo de passagem, Embalagens primárias e Embalagens secundárias</b></div>
					 <div class="testetesteheader5 b_all  bbz bggrey "><b>Paredes, Piso, Teto, Estrados, Portas, Lixeiras e Luminárias</b></div>
					
					 
				 </div>
				 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Data</b></div>
					
					 
					 <div class="teste2 b_all brz bbz bggrey verticalText"><b>Horário</b></div>
					 
					 
					 <div class="teste3 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste4 b_all brz  bggrey verticalText"><b>NC</b></div>
					 <div class="teste5 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste6 b_all brz  bggrey verticalText"><b>NC</b></div>
					 <div class="teste7 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste8 b_all brz  bggrey verticalText"><b>NC</b></div>
					 <div class="teste9 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste10 b_all   bggrey verticalText"><b>NC</b></div>
					
				
				
				
				 </div>
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 if( $diasemana_numero != 0)
				{
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz bbz verticalText bggrey"><?PHP if(($i+1)<10){echo"0";} echo ($i+1);  echo " - "; echo $diasemana[$diasemana_numero]  ?></div>
						
						 
						 <div class="teste2 b_all  bbz verticalText ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
						
						 <div class="teste3 b_all brz bbz  verticalText"><b></b></div>
						 <div class="teste4 b_all  bbz  verticalText"><b></b></div>
						 <div class="teste5 b_all brz bbz  verticalText"><b></b></div>
						 <div class="teste6 b_all  bbz  verticalText"><b></b></div>
						 <div class="teste7 b_all brz bbz  verticalText"><b></b></div>
						 <div class="teste8 b_all  bbz  verticalText"><b></b></div>
						 <div class="teste9 b_all brz bbz  verticalText"><b></b></div>
						 <div class="teste10 b_all  bbz  verticalText"><b></b></div>
						
					
					 </div>
				 
				 
				 
				 
<?PHP			
				}

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 08 ///////////////////////////////////////////////////////	
	}

?>










<?PHP
		
	///////////////////// PAC 09 ///////////////////////////////////////////////////////	


	 function pac09content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 		 
				 <div class="teste ">
				 
					 <div class="testeheader1 b_all brz bbz bggrey verticalText"><b>COLABORADOR (A):</b></div>
					 <div class="testeheader2 b_all brz bbz  verticalText"><b></b></div>
					 <div class="testeheader3 b_all brz bbz  verticalText"><b></b></div>
					 <div class="testeheader4 b_all  bbz  verticalText"><b></b></div>
					
					 
					 
				
				
				 </div>
				 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Data</b></div>
					
					 
					 <div class="teste2 b_all brz bbz bggrey verticalText"><b>Horário</b></div>
					 
					 
					 <div class="teste3 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste4 b_all brz  bggrey verticalText"><b>NC</b></div>
					 <div class="teste5 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste6 b_all brz  bggrey verticalText"><b>NC</b></div>
					 <div class="teste7 b_all brz  bggrey verticalText"><b>C</b></div>
					 <div class="teste8 b_all   bggrey verticalText"><b>NC</b></div>
					
				
				
				
				 </div>
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 if( $diasemana_numero != 0)
				{
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz bbz verticalText bggrey"><?PHP if(($i+1)<10){echo"0";} echo ($i+1);  echo " - "; echo $diasemana[$diasemana_numero]  ?></div>
						
						 
						 <div class="teste2 b_all  bbz verticalText ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
						
						 <div class="teste3 b_all brz bbz  verticalText"><b></b></div>
						 <div class="teste4 b_all  bbz  verticalText"><b></b></div>
						 <div class="teste5 b_all brz bbz  verticalText"><b></b></div>
						 <div class="teste6 b_all  bbz  verticalText"><b></b></div>
						 <div class="teste7 b_all brz bbz  verticalText"><b></b></div>
						 <div class="teste8 b_all  bbz  verticalText"><b></b></div>
						
					
					 </div>
				 
				 
				 
				 
<?PHP			
				}

			}	 

?>					 
			<div class="teste ">
				 
					 <div class="testeobs1 b_all   bggrey verticalText"><b>OBSERVAÇÕES:</b></div>
					 
					 
					 <div class="testeobs2 b_all brz bbz bggrey verticalText"><b>AV</b></div>
					 <div class="testeobs3 b_all brz bbz bggrey verticalText"><b>AE</b></div>
					 <div class="testeobs4 b_all  bbz bggrey verticalText"><b>SP</b></div>
					 <div class="testeobs5 b_all brz bbz bggrey verticalText"><b>AV</b></div>
					 <div class="testeobs6 b_all brz bbz bggrey verticalText"><b>AE</b></div>
					 <div class="testeobs7 b_all brz bbz bggrey verticalText"><b>SP</b></div>
					 <div class="testeobs8 b_all brz bbz bggrey verticalText"><b>AV</b></div>
					 <div class="testeobs9 b_all brz bbz bggrey verticalText"><b>AE</b></div>
					 <div class="testeobs10 b_all bbz bggrey  verticalText"><b>SP</b></div>
					 
					 
					 
					
					 
					 
				
				
				 </div>
				 
				 <div class="teste ">
				 
					 <div class="testeobs2 b_all brz bbz  verticalText"><b></b></div>
					 <div class="testeobs3 b_all brz bbz  verticalText"><b></b></div>
					 <div class="testeobs4 b_all  bbz  verticalText"><b></b></div>
					 <div class="testeobs5 b_all brz bbz  verticalText"><b></b></div>
					 <div class="testeobs6 b_all brz bbz  verticalText"><b></b></div>
					 <div class="testeobs7 b_all  bbz  verticalText"><b></b></div>
					 <div class="testeobs8 b_all brz bbz  verticalText"><b></b></div>
					 <div class="testeobs9 b_all brz bbz  verticalText"><b></b></div>
					 <div class="testeobs10 b_all bbz   verticalText"><b></b></div>
					
				
				
				
				 </div>
				 
		
<?PHP
		
		///////////////////// PAC 09 ///////////////////////////////////////////////////////	
	}

?>




<?PHP
		
	///////////////////// PAC 10 ///////////////////////////////////////////////////////	


	 function pac10content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 		 
				 
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 if( $diasemana_numero != 0)
				{
?>				
				 
					 <div class="teste">
				 
						 <div class="teste1 b_all brz bbz bggrey"><b>Dia <?PHP if(($i+1)<10){echo"0";} echo ($i+1); ?> - <?PHP echo $diasemana[$diasemana_numero]; ?></b></div>
						 <div class="teste2 b_all bbz"><b>Hora:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
						 
						 
						 <div class="teste4 b_all brz bbz bggrey"><b>C</b></div>
						 <div class="teste5 b_all bbz bggrey" ><b>NC</b></div>
						 
						 <div class="teste6 b_all brz bbz bggrey">Recepção</div>
						 <div class="teste7 b_all brz bbz"></div>
						 <div class="teste8 b_all bbz"></div>
						 
						 <div class="teste9 b_all brz bbz bggrey">Lavagem</div>
						 <div class="teste10 b_all brz bbz"></div>
						 <div class="teste11 b_all bbz"></div>
						 
						 <div class="teste12 b_all brz bbz bggrey">Classificação</div>
						 <div class="teste13 b_all brz bbz "></div>
						 <div class="teste14 b_all bbz"></div>
					
					
						 <div class="teste15 b_all bbz brz bggrey">Embalagem</div>
						 <div class="teste16 b_all bbz brz "></div>
						 <div class="teste17 b_all bbz"></div>
					
					
						 <div class="teste18 b_all brz bggrey">Armazem</div>
						 <div class="teste19 b_all brz "></div>
						 <div class="teste20 b_all"></div>
					
					
					 </div>
				 
				 
				 
				 
<?PHP			
				}

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 10 ///////////////////////////////////////////////////////	
	}

?>









<?PHP
		
	///////////////////// PAC 12 ///////////////////////////////////////////////////////	


	 function pac12content($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 		 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Data</b></div>
					 <div class="teste2 b_all brz bbz bggrey verticalText"><b>Semana</b></div>
					 
					 
					 <div class="teste3 b_all brz bbz bggrey verticalText"><b>Horário</b></div>
					 <div class="teste4 b_all   bggrey verticalText" ><b>Temperatura Ambiente em ºC</b></div>
					 
				
				
				
				 </div>
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 if( $diasemana_numero != 0)
				{
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz bbz verticalText bggrey">Dia <?PHP if(($i+1)<10){echo"0";} echo ($i+1); ?></div>
						 <div class="teste2 b_all brz bbz verticalText bggrey"><?PHP echo $diasemana[$diasemana_numero]; ?></div>
						 
						 
						 <div class="teste3 b_all brz bbz verticalText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
						 <div class="teste4 b_all bbz  verticalText" ></div>
						 
					
					
					
					 </div>
				 
				 
				 
				 
<?PHP			
				}

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 12 ///////////////////////////////////////////////////////	
	}

?>







<?PHP
		
	///////////////////// PAC 16 ///////////////////////////////////////////////////////	


	 function pac16content($mes, $ano, $loteinicio)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb');

					
				
					
?>			 
		 		 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Produção</b></div>
					 <div class="teste2 b_all brz bbz bggrey verticalText"><b>Lote</b></div>
					 
					 
					 <div class="teste3header b_all brz bbz bggrey verticalText"><b>Vencimento</b></div>
					 
					 <div class="teste4 b_all brz bbz bggrey verticalText"><b>Dia Exp.</b></div>
					 <div class="teste5 b_all bbz  bggrey verticalText"><b>Produto</b></div>
				
					 <div class="teste6header b_all   bggrey verticalText" ><b>Destino Clientes Nº (ver anexo)</b></div>
					 
				
				 </div>
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));
				 $datavencimento = strtotime("+25 days",strtotime($data));
				 
				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 if( $diasemana_numero != 0)
				{
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz bbz verticalText bggrey"><b><?PHP if(($i+1)<10){echo"0";} echo ($i+1) . " - " . $diasemana[$diasemana_numero]; ?></b></div>
						 <div class="teste2 b_all brz bbz verticalText bggrey"><b>
						 <?PHP 
							 if($loteinicio<60)
							{	
								 echo "&nbsp;&nbsp;&nbsp;". ($loteinicio+$i) ."&nbsp;&nbsp;&nbsp;";
							}else if($loteinicio<960)
							{
								 echo "&nbsp;". ($loteinicio+$i) ."&nbsp;";
							}else //if($loteinicio<9960)
							{
								 echo ($loteinicio+$i) ;
								
							}
						 ?>
						 </b></div>
						 
						 
						 <div class="teste3 b_all brz  bbz verticalText bggrey"><b><?PHP echo date('d/m/Y', $datavencimento); ?></b></div>
						 
						 
						 <div class="teste4content b_all brz bbz verticalText"></div>
						 
						 <div class="teste5 b_all br bbz verticalText"><b> (&nbsp;&nbsp;)C &nbsp;(&nbsp;&nbsp;)NC</b></div>
					
						 <div class="teste55 b_all brz  verticalText" >
						 
							 <div class="teste61 bbz " style="line-height: 17px;"> 
								 <div class=" checkB2"></div>
								  
								  
							 </div>
							 
							 <div class="teste62    " style="line-height: 12px;" > 
								<div class=" contentcheckB2"><b>Todos</b></div> 
								
							 </div>
						 
						 </div>
						 
						 <div class="teste6 b_all   verticalText" >
						 
							 <div class="teste61 bb " style="line-height: 17px;"> 
								 <div class=" checkB"></div><div class=" contentcheckB">1</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">2</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">3</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">4</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">5</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">6</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">7</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">8</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">9</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">10</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">11</div> 
								  
								  
							 </div>
							 
							 <div class="teste62    " style="line-height: 12px;" > 
								 <div class=" checkB"></div><div class=" contentcheckB">12</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">13</div>
								 <div class=" checkB"></div><div class=" contentcheckB">14</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">15</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">16</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">17</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">18</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">19</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">20</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">21</div> 
								 <div class=" checkB"></div><div class=" contentcheckB">22</div> 
							 </div>
						
						 </div>
					
					
					 </div>
				 
				 
				 
				 
<?PHP			
				}

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC 16 ///////////////////////////////////////////////////////	
	}

?>






<?PHP
		
	///////////////////// PAC NC ///////////////////////////////////////////////////////	


	 function NCcontent()
	{
		
		 
					
					
					
?>			 
		 		 
				 <div class="testeheader ">
				 
					 <div class="reavalicao b_all  bbz bggrey verticalText "><b>REAVALIAÇÃO</b></div>
				
				 </div> 
				
				 
				 <div class="testeheader ">
				 
					
					 <div class="testeheader1 b_all brz  bggrey verticalText"><b>PAC Nº</b></div>
					 <div class="testeheader2 b_all brz  bggrey verticalText "><b>DATA</b></div>
					 <div class="testeheader3 b_all brz  bggrey verticalText "><b>DESVIO / ANOMALIA</b></div>
					 <div class="testeheader4 b_all brz  bggrey verticalText "><b>AÇÃO CORRETIVA</b></div>
					 <div class="testeheader5 b_all   bggrey verticalText "><b>PRAZO</b></div>
					 <div class="testeheader6 b_all   bggrey verticalText "><b>DATA (Reav.)</b></div>
					 <div class="testeheader7 b_all   bggrey verticalText "><b>C / NC</b></div>
					 
			
				
				
				 </div>
				 
				 
			 
				 
<?PHP			


			 $nomeInspecao[0] = "Recepção de Ovos";
			 $nomeInspecao[1] = "Classificação";
			 $nomeInspecao[2] = "Depósito/Expedição de Ovos";
			 $nomeInspecao[3] = "Sanitário/Vestiário";
			 $nomeInspecao[4] = "Depósito de Embalagens";
			 
			 $NN = 15;
			 for($i=0; $i<$NN; $i++)
			{
				
				 
?>				
				 
					 <div class="testeheader ">
				 

						  <div class="testeheader1 b_all brz <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText"><b></b></div>
						 <div class="testeheader2 b_all brz <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText2 "><b>/&nbsp;&nbsp;&nbsp;&nbsp;/</b></div>
						 <div class="testeheader3 b_all brz <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText "><b></b></div>
						 <div class="testeheader4 b_all  <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText "><b></b></div>
						 <div class="testeheader5 b_all  <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText "><b></b></div>
						 <div class="testeheader6 b_all  <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText2 "><b>/&nbsp;&nbsp;&nbsp;&nbsp;/</b></div>
						 <div class="testeheader7 b_all  <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText "><b></b></div>
					
					
						 
					 </div>
				 
				 
<?PHP			
				

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC NC ///////////////////////////////////////////////////////	
	}

?>



<?PHP
		
	///////////////////// PAC NC 2///////////////////////////////////////////////////////	


	 function NCcontent2()
	{
		
		 
					
					
					
?>			 
		 		 
				 <div class="testeheader ">
				 
					 <div class="reavalicao b_all  bbz bggrey verticalText "><b>REAVALIAÇÃO</b></div>
				
				 </div> 
				
				 
				 <div class="testeheader ">
				 
					
					
					 <div class="testeheader1 b_all brz  bggrey verticalText"><b>DATA</b></div>
					 <div class="testeheader2 b_all brz  bggrey verticalText "><b>DESVIO / ANOMALIA</b></div>
					 <div class="testeheader3 b_all brz  bggrey verticalText "><b>AÇÃO CORRETIVA</b></div>
					 <div class="testeheader4 b_all   bggrey verticalText "><b>PRAZO</b></div>
					 <div class="testeheader5 b_all   bggrey verticalText "><b>DATA (Reav.)</b></div>
					 <div class="testeheader6 b_all   bggrey verticalText "><b>C / NC</b></div>
				
				
			
				
				
				 </div>
				 
				 
			 
				 
<?PHP			


			
			 
			 $NN = 7;
			 for($i=0; $i<$NN; $i++)
			{
				
				 
?>				
				 
					 <div class="testeheader ">
				 

						 <div class="testeheader1 b_all brz <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText2"><b>/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/</b></div>
						 <div class="testeheader2 b_all brz <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText "><b></b></div>
						 <div class="testeheader3 b_all brz <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText "><b></b></div>
						 <div class="testeheader4 b_all  <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText "><b></b></div>
						 <div class="testeheader5 b_all  <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText2 "><b>/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/</b></div>
						 <div class="testeheader6 b_all  <?PHP if($i!=($NN-1))echo"bbz";?>  verticalText "><b></b></div>
						 
						 
					 </div>
				 
				 
<?PHP			
				

			}	 

?>					 
			
		
<?PHP
		
		///////////////////// PAC NC 2///////////////////////////////////////////////////////	
	}

?>













<?PHP
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////// MAPA DE PRODUCAO ///////////////////////////////////////////////////////	


	 function mapacontent($mes, $ano, $totalBandejas, &$jumbototal, &$extratotal, &$grandetotal, &$mediototal, &$pequenototal)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 		 

				 
				 <div class="testeteste ">
				 
					 <div class="testetesteheader1 b_all  brz bggrey verticalText"><b>Bandejas Categoria A</b></div>
					 <div class="testetesteheader2 b_all   bbz  bggrey verticalText"><b>Bandejas Categoria B</b></div>
					
					 
				 </div>
				 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Data</b></div>
					
					 
					 <div class="teste2 b_all brz bbz bggrey verticalText"><b>Jumbo</b></div>
					 <div class="teste3 b_all brz  bggrey verticalText"><b>Extra</b></div>
					 <div class="teste4 b_all brz  bggrey verticalText"><b>Grande</b></div>
					 <div class="teste5 b_all brz  bggrey verticalText"><b>Médio</b></div>
					 <div class="teste6 b_all brz  bggrey verticalText" style="font-size:14px;"><b>Pequeno</b></div>
					 <div class="teste7 b_all brz  bggrey verticalText"><b>Jumbo</b></div>
					 <div class="teste8 b_all brz  bggrey verticalText"><b>Extra</b></div>
					 <div class="teste9 b_all brz  bggrey verticalText"><b>Grande</b></div>
					 <div class="teste10 b_all brz  bggrey verticalText"><b>Médio</b></div>
					 <div class="teste11 b_all   bggrey verticalText" style="font-size:14px;"><b>Pequeno</b></div>
					
					
				
				
				
				 </div>
				 
				 
			 
				 
<?PHP			
			

			 $bandejasDia = $totalBandejas/$NDias;
			 
			 $jumbototal = $extratotal = $grandetotal = $mediototal = $pequenototal = 0;
			 
			 $jumbo2 = $extra2 = $grande2 = $medio2 = $pequeno2 = 0;
			 
			 //echo"<Br>$NDias $bandejasDia<br>";
			  
			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				 
				 $jumbo = $extra = $grande = $medio = $pequeno = 0;
				 
				 aleatorio($jumbo, $extra, $grande, $medio, $pequeno);
				 
				 //echo "<br> $jumbo = $extra = $grande = $medio = $pequeno = ". ($jumbo + $extra + $grande + $medio + $pequeno) ."<br>";
				 
				 
				 $jumbo2 += (int)($bandejasDia * $jumbo/100);
				 $extra2 += (int)($bandejasDia * $extra/100);
				 $grande2 += (int)($bandejasDia * $grande/100);
				 $medio2 += (int)($bandejasDia * $medio/100);
				 $pequeno2 += (int)($bandejasDia * $pequeno/100);
				
				 
				 //echo "<br> $jumbo2 = $extra2 = $grande2 = $medio2 = $pequeno2 = ". ($jumbo2 + $extra2 + $grande2 + $medio2 + $pequeno2) ."<br>";
				 
				
				 if( $diasemana_numero != 0)
				{
					
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all <?PHP if($i != $NDias-1)echo "bbz"; ?> verticalText bggrey"><b><?PHP if(($i+1)<10){echo"0";} echo ($i+1);  echo " - "; echo $diasemana[$diasemana_numero]  ?></b></div>
						
						 
						 <div class="teste2 b_all brz <?PHP if($i != $NDias-1)echo "bbz"; ?> verticalText "><b><?PHP echo $jumbo2;?></b></div>
						 <div class="teste3 b_all brz <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b><?PHP echo $extra2;?></b></div>
						 <div class="teste4 b_all brz <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b><?PHP echo $grande2;?></b></div>
						 <div class="teste5 b_all brz <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b><?PHP echo $medio2;?></b></div>
						 <div class="teste6 b_all  <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b><?PHP echo $pequeno2;?></b></div>
						 <div class="teste7 b_all brz <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						 <div class="teste8 b_all brz <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						 <div class="teste9 b_all brz <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						 <div class="teste10 b_all brz <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						 <div class="teste11 b_all  <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						
					
					 </div>
				 
				 
				 
<?PHP			
				}
				
				 
				 if( $diasemana_numero != 0 )//menos no domingo
				{
					 $jumbototal += $jumbo2;
					 $extratotal += $extra2;
					 $grandetotal += $grande2;
					 $mediototal += $medio2;				 
					 $pequenototal += $pequeno2;
					
					 $jumbo2 = $extra2 = $grande2 = $medio2 = $pequeno2 = 0;
				 
				}
					

			}	 

?>					 
			
			 <div class="teste bggrey" style="margin-top: 20px;">
				 
				 <div class="teste1 b_all  bbz verticalText bggrey"><b>TOTAL</b></div>
				
				 
				 <div class="teste2 b_all brz bbz verticalText "><b><?PHP echo $jumbototal;?></b></div>
				 <div class="teste3 b_all brz bbz  verticalText"><b><?PHP echo $extratotal;?></b></div>
				 <div class="teste4 b_all brz bbz  verticalText"><b><?PHP echo $grandetotal;?></b></div>
				 <div class="teste5 b_all brz bbz  verticalText"><b><?PHP echo $mediototal;?></b></div>
				 <div class="teste6 b_all  bbz  verticalText"><b><?PHP echo $pequenototal;?></b></div>
				 <div class="teste7 b_all brz bbz  verticalText"><b></b></div>
				 <div class="teste8 b_all brz bbz  verticalText"><b></b></div>
				 <div class="teste9 b_all brz bbz  verticalText"><b></b></div>
				 <div class="teste10 b_all brz bbz  verticalText"><b></b></div>
				 <div class="teste11 b_all  bbz  verticalText"><b></b></div>
				
		
		     </div>
			 
			 <div class="teste bggrey" >
				 
				 <div class="teste1 b_all   verticalText bggrey"><b>CAIXAS</b></div>
				
				 
				 <div class="teste2 b_all brz  verticalText "><b><?PHP echo number_format($jumbototal/12, 1,',','.');?></b></div>
				 <div class="teste3 b_all brz   verticalText"><b><?PHP echo number_format($extratotal/12, 1,',','.');?></b></div>
				 <div class="teste4 b_all brz   verticalText"><b><?PHP echo number_format($grandetotal/12, 1,',','.');?></b></div>
				 <div class="teste5 b_all brz   verticalText"><b><?PHP echo number_format($mediototal/12, 1,',','.');?></b></div>
				 <div class="teste6 b_all    verticalText"><b><?PHP echo number_format($pequenototal/12, 1,',','.');?></b></div>
				 <div class="teste7 b_all brz   verticalText"><b></b></div>
				 <div class="teste8 b_all brz   verticalText"><b></b></div>
				 <div class="teste9 b_all brz   verticalText"><b></b></div>
				 <div class="teste10 b_all brz   verticalText"><b></b></div>
				 <div class="teste11 b_all    verticalText"><b></b></div>
				
		
		     </div>
			 
			 
			<div class="testetotal bggrey" style="margin-top: 20px;">
				 
				 <div class="teste1total b_all  bbz verticalText bggrey"><b>TOTAL BANDEJAS</b></div>
				
				 
				 <div class="teste2total b_all  bbz verticalText "><b><?PHP echo ($jumbototal + $extratotal + $grandetotal + $mediototal + $pequenototal);?></b></div>
				 
				
		
		     </div>
			 
			 <div class="testetotal bggrey" >
				 
				 <div class="teste1total b_all   verticalText bggrey"><b>TOTAL DÚZIAS</b></div>
				
				 
				 <div class="teste2total b_all   verticalText "><b><?PHP echo number_format(($jumbototal + $extratotal + $grandetotal + $mediototal + $pequenototal)*2.5, 0,',','.');?></b></div>
				 
				
		
		     </div> <div class="testetotal bggrey" >
				 
				 <div class="teste1total b_all   verticalText bggrey"><b>TOTAL CAIXAS</b></div>
				
				 
				 <div class="teste2total b_all   verticalText "><b><?PHP echo number_format(($jumbototal + $extratotal + $grandetotal + $mediototal + $pequenototal)/12, 1,',','.');?></b></div>
				 
				
		
		     </div>
			 
			 
<?PHP
		
		/////////////////////  MAPA DE PRODUCAO ///////////////////////////////////////////////////////	
	}






	 function aleatorio(&$jumbo, &$extra, &$grande, &$medio, &$pequeno)
	{
		
		 
		
		 $jumbo = mt_rand(9, 17);
		 $extra = mt_rand(18, 26);
		 $grande = mt_rand(36, 44);
		 $medio = mt_rand(11, 20);
		 $pequeno = 100 - ($jumbo + $extra + $grande + $medio);
		 if($pequeno < 0) $pequeno = 0;
		 
	}
?>









<?PHP
		
	///////////////////// AVIARIOS ///////////////////////////////////////////////////////	


	 function aviarios($mes, $ano)
	{
		
		 
		
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 	
				 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Data</b></div>
					
					 
					 <div class="teste2 b_all brz bbz bggrey verticalText"><b>Colheita - Número de Bandejas</b></div>
					 
					 
					 <div class="teste3 b_all  bbz bggrey verticalText"><b> Número Galinhas Mortas</b></div>
					
				
				
				
				 </div>
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 //if( $diasemana_numero != 0)//domingo
				//{
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz <?PHP if($i != $NDias-1)echo "bbz"; ?> verticalText bggrey"><b><?PHP if(($i+1)<10){echo"0";} echo ($i+1);  echo " - "; echo $diasemana[$diasemana_numero]  ?></b></div>
						
						 
						 <div class="teste2 b_all <?PHP if($i != $NDias-1)echo "bbz"; ?> verticalText " style="text-align: left;"><b>
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
						 </b></div>
						
						 <div class="teste3 b_all  <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						
						
					
					 </div>
				 
				 
				 
				 
<?PHP			
				//}

			}	 

?>					 
			

			
			 <div class="testefooter " style="margin-top:15px;">
				 
					 <div class="testeft1 b_all brz bbz bggrey verticalText"><b>Ração</b></div>
					
					
					 <div class="testeft2 b_all  bbz bggrey verticalText"><b>Consumo KG</b></div>
					 
				
				
			 </div>
			 <div class="testefooter " style="margin-top:15px;">
				 
					 <div class="testeft1 b_all brz bbz bggrey verticalText"><b>Temp. Máxima</b></div>
					
					
					 <div class="testeft2 b_all  bbz bggrey verticalText"><b>Temp. Mínima</b></div>
					 
				
				
			 </div>

			 <div class="testefooter "  style="margin-top:15px;">
				 
					 <div class="testeft1 b_all brz bbz bggrey verticalText"><b>Umidade Máx.</b></div>
					
					
					 <div class="testeft2 b_all  bbz bggrey verticalText"><b>Umidade Mín.</b></div>
					 
				
				
			 </div>
			 
			 <div class="testefooter " style="margin-bottom: 10px;">
				 
					 <div class="testeft1 b_all brz   verticalText"><b></b></div>
					
					
					 <div class="testeft2 b_all    verticalText"><b></b></div>
					 
				
				
			 </div>
			 
			 <div class="testefooter " style="margin-bottom: 10px;">
				 
					 <div class="testeft1 b_all brz   verticalText"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ºC</b></div>
					
					
					 <div class="testeft2 b_all    verticalText"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ºC</b></div>
					 
				
				
			 </div>
			 
			 <div class="testefooter " style="margin-bottom: 10px;">
				 
					 <div class="testeft1 b_all brz   verticalText"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%</b></div>
					
					
					 <div class="testeft2 b_all    verticalText"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%</b></div>
					 
				
				
			 </div>

		
			 
		
<?PHP
		
		///////////////////// AVIARIOS ///////////////////////////////////////////////////////	
	}

?>












<?PHP
		
	///////////////////// RAÇÃO ///////////////////////////////////////////////////////	


	 function racao($mes, $ano)
	{
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

					
					
					
					
					
?>			 
		 		 
				
				 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Data</b></div>
					
					 
					
					 
					 <div class="teste3 b_all brz  bggrey verticalText"><b>Postura</b></div>
					 <div class="teste4 b_all brz  bggrey verticalText"><b>+ Acumul.</b></div>
					 <div class="teste5 b_all brz  bggrey verticalText"><b>Crescimento</b></div>
					 <div class="teste6 b_all brz  bggrey verticalText"><b>+ Acumul.</b></div>
					 <div class="teste7 b_all brz  bggrey verticalText"><b>Inicial</b></div>
					 <div class="teste8 b_all   bggrey verticalText"><b>+ Acumul.</b></div>
					
				
				
				
				 </div>
				 
				 
			 
				 
<?PHP			

			 for($i=0; $i<$NDias; $i++)
			{
				
				 $data = date($ano . '-'. $mes .'-' . ($i+1));

				 $diasemana_numero = date('w', strtotime($data));
				 
				
				 //if( $diasemana_numero != 0)//domingo
				//{
?>				
				 
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz  <?PHP if($i != $NDias-1)echo "bbz"; ?> verticalText bggrey"><b><?PHP if(($i+1)<10){echo"0";} echo ($i+1);  echo " - "; echo $diasemana[$diasemana_numero]  ?></b></div>
						
						 
						
						 <div class="teste3 b_all brz  <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						 <div class="teste4 b_all   <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						 <div class="teste5 b_all brz  <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						 <div class="teste6 b_all   <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						 <div class="teste7 b_all brz  <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						 <div class="teste8 b_all   <?PHP if($i != $NDias-1)echo "bbz"; ?>  verticalText"><b></b></div>
						
					
					 </div>
				 
				 
				 
				 
<?PHP			
				//}

			}	 

?>					 
			
				 
		
<?PHP
		
		///////////////////// RAÇÃO ///////////////////////////////////////////////////////	
	}

?>







<?PHP
		
	///////////////////// LISTA CLIENTES ///////////////////////////////////////////////////////	
	
	$nomeClientes = array(
				 "Mercado Alvorada Bairro Itapoã", 
				 "Mercado Alvorada Bairro Vitória",
				 "Mercearia Granjinha",
				 "Mercado Amigão Bairro Itapoã",
				 "Mercado Amigão Bairro Água Azul",
				 "Conveniência do Messias",
				 "Mercado Jotta",
				 "Mercado RodaViva",
				 "Mercearia e Açougue Independência",
				 "Mercado do Báu",
				 "Mercearia Água Azul - Adriano",
				 "Mercado Zé Montanha",
				 "Galeria Brasil",
				 "Mercado Guiray",
				 "Mercearia Batista",
				 "Café Tropical",
				 "Divinos Restaurante",
				 "Restaurante Chico Bento",
				 "Açougue do Eder",
				 "Mercadinho Azul - Nenê",
				 "Mercado Soldera",
				 "Pizzaria Tarantela"
		 
		 );
		 
		 
		 $ClienteCxPorVez = array
		 (
				10,
				13,
				5,
				2,
				0.5,
				0.2,
				2,
				4,
				0.5,
				2,
				0.5,
				2,
				1.5,
				1.5,
				1,
				0.5,
				0.5,
				1,
				0.5,
				2,
				1,
				0.5
		 
		 );
		 
		 
		  $embaralhado = array
		 (
				0,
				1,
				2,
				3,
				4,
				5,
				6,
				7,
				8,
				9,
				10,
				11,
				12,
				13,
				14,
				15,
				16,
				17,
				18,
				19,
				20,
				21
		 
		 );
	///////////////////// LISTA CLIENTES ///////////////////////////////////////////////////////	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	///////////////////// CLIENTES ///////////////////////////////////////////////////////	


		 
	 function clientescontent($mes, $ano, $nomeClientes, $ClienteCxPorVez, $embaralhado)
	{
	 
		
		 $NDias = cal_days_in_month( CAL_GREGORIAN , $mes , $ano );
		
		 $diasemana = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb');
		
							

						 	
?>			 
		 		 
				 <div class="teste ">
				 
					 <div class="teste1 b_all brz bbz bggrey verticalText"><b>Número</b></div>
					 <div class="teste2 b_all  bbz bggrey verticalText"><b>Nome do Cliente</b></div>
					 
				
				
				 </div>
				 
				 
			 
				 
<?PHP		



			 $nClientes = count($nomeClientes);
			 for($i=0; $i<$nClientes; $i++)
			{
				
				
				
?>				
				
					 <div class="teste ">
				 
						 <div class="teste1 b_all brz <?PHP if($i != $nClientes-1)echo "bbz"; ?> verticalText "><b><?PHP if(($i+1)<10){echo"0";} echo ($i+1); ?></b></div>
						 <div class="teste22 b_all   <?PHP if($i != $nClientes-1)echo "bbz"; ?> verticalText " ><b>&nbsp;&nbsp;&nbsp;&nbsp;<?PHP echo $nomeClientes[$i]; ?></b></div>
						
					
					 </div>
			 
<?PHP			
				

			}	

			//*
			 echo
			 "
				  <div class=\"tteste \" style=\"margin-top: 550px;\" ></div>
			 ";
			//*/

		 
		///////////////////// CLIENTES ///////////////////////////////////////////////////////	
	}

?>





