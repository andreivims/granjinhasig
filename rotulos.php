<?php
	
	
	
?>


	<html>
		<head>
			<title>Rótulos</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			.cabecalho2
				{
					
					 float: left;
					 position: relative;
					 
					 height: 1020;
					 width: 2000;
					 
					 font-family: ARIAL;
					 text-align: center;
					  
					 border-collapse: collapse; 
					 border: 1px solid black;
					
					 
				}
						
						.logo2
						{
							 float: left;
							 position: relative;
							
							 margin-top: 0px;
							 margin-right: 70px;
							
							 
							
						}
						
						
						.dataclassificacao
						{
							 float: left;
							 position: absolute;
							
							 top: 777px;
							 left: 300px;
						
						}
					
						.datavalidade
						{
							 float: left;
							 position: absolute;
							
							 top: 822px;
							 left: 300px;
						
						}
					
						
				
				
				
			</style>
			
		</head>
		 
		<body>
		
		  <div class="cabecalho2 " >
			 
<?PHP 
		 //$datahoje = date('2023-02-03');
		 $datahoje = date('Y-m-d');
		 
		 $classificacao = date('d/m/Y', strtotime($datahoje));
		 $validade = date('d/m/Y', strtotime("+25 days",strtotime($datahoje)));

?>
				
				 <div class="logo2  " ><img src="Novo Rotulo 30 Ovos - Manoel.bmp" alt="some text" width=642 height=1011 >
					 <div class="dataclassificacao  " ><b><?PHP echo $classificacao ?></b></div>
					 <div class="datavalidade  " ><b><?PHP echo $validade ?></b></div>
				 </div>
				 
				 <div class="logo2  " ><img src="Novo Rotulo 30 Ovos - Manoel.bmp" alt="some text" width=642 height=1011 >	 
					 <div class="dataclassificacao  " ><b><?PHP echo $classificacao ?></b></div>
					 <div class="datavalidade  " ><b><?PHP echo $validade ?></b></div>
				 </div>

				
					 
					 
				 
				 
		 </div>
		 
		
			 
<?PHP

	

		 
		
?>



<!--------------------------------------------------------------------------->			 
			
			 

		 </body>

	</html>
