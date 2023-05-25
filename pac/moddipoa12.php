<?php
	
	 include "funcao.php";
	 
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
	
	
	
	
	
	
	
	
	
		class EstoqueOvo{
		
			public $TotalDZMes;
			public $Mes;
			public $Ano;
			
			public $ProducaoDiaDz;
			
			
			function __construct($totdz, $m, $a){
				
				$this->TotalDZMes = $totdz;
				$this->Mes = $m;
				$this->Ano = $a;
			}	
		
			public function contaProducaoDiaDZ(){
				 
				 $funcao = new DateTime($this->Ano . "-" . $this->Mes);
				 $numDiasMes = $funcao->format('t');
				
			
				 $mediaProducaoDia = $this->TotalDZMes / $numDiasMes;
				 $MaisOuMenosMedia =  $mediaProducaoDia * 0.05;
				 
				 
				 $this->ProducaoDiaDz = array();
				 $soma=0;
				for($i=0; $i<$numDiasMes;$i++){
					
					if(($numDiasMes-1) == $i){
						$soma += $this->ProducaoDiaDz[$i] = $this->TotalDZMes - $soma; 
						//echo"<Br>FIM = " . $this->ProducaoDiaDz[$i] ;
					}else{
						
						$soma += $this->ProducaoDiaDz[$i] = rand($mediaProducaoDia-$MaisOuMenosMedia, $mediaProducaoDia+$MaisOuMenosMedia);
						//echo"<Br> = " . $this->ProducaoDiaDz[$i]  ;
					}
				}
				
				//echo"<Br>total= $soma <br>";
			
				
				
			}
			
			
			
			public function expedicaoEstoqueOvos($Clientes){
				 
				 $n=0;
				 $retornoArray = array();
				 
				 
				 
				 $funcao = new DateTime($this->Ano . "-" . $this->Mes);
				 $numDiasMes = $funcao->format('t');
				
				
				 $quantosClientes = count($Clientes);
				
				
				
			
				for($i=0; $i<$numDiasMes;$i++){
					
					 $dia = new DateTime($this->Ano . "-" . $this->Mes . "-" . ($i+1));
					 //echo"<Br> " . $dia->format("Y-m-d");
					 
					 $vendeuqtde = 0;
					for($j=0; $j<$quantosClientes; $j++){
					  
						 $res = $Clientes[$j]->checaDiaEntrega($dia->format("Y-m-d"));
						 if($res>0){
						 
							 $vendeuqtde += $res;
							 
							 
							 $retornoEstoqueOvos = array();
							 $retornoEstoqueOvos = $this->atualizaEstoqueOvos($res);
							 
							for($x=0; $x< count($retornoEstoqueOvos); $x++){
								
								 $retornoArray[$n][0] = $retornoEstoqueOvos[$x]->DIA;
								 $retornoArray[$n][1] = $Clientes[$j]->Rotulo;
								 $retornoArray[$n][2] = rand(9999,999999);
								 $retornoArray[$n][3] = $Clientes[$j]->Nome;
								 $retornoArray[$n][4] = $Clientes[$j]->Cidade;
								 $retornoArray[$n][5] = $retornoEstoqueOvos[$x]->QTDE;
								 $n++;
								 /*
								 echo "<Br>". $retornoEstoqueOvos[$x]->DIA;
								 echo" - ". $Clientes[$j]->Rotulo;
								 echo" - ". rand(9999,99999);
								 echo " - " . $Clientes[$j]->Nome;
								 echo " - " . $Clientes[$j]->Cidade;
								 echo " - " . $retornoEstoqueOvos[$x]->QTDE;
								 */
							}
						}
					}
					 //echo "    vendi = ". $vendeuqtde;
					
				}
				
			
				return $retornoArray;
				
			}
			
			
			
			public function atualizaEstoqueOvos($vendeuQuantos){
				
				
				 
				 $funcao = new DateTime($this->Ano . "-" . $this->Mes);
				 $numDiasMes = $funcao->format('t');
				
				 
				 $retornoEstoqueOvos = array();
				 
				 $nn = 0;
				for($i=0; $i<$numDiasMes;$i++){
					
					$dia = new DateTime($this->Ano . "-" . $this->Mes . "-" . ($i+1));
				
					
					
					if( $this->ProducaoDiaDz[$i] > 0){
						 
						 $this->ProducaoDiaDz[$i] -= $vendeuQuantos;
						 
						 
						 
						 
						if($this->ProducaoDiaDz[$i] < 0){
							
							 $retornoEstoqueOvos[$nn] = new dadosOvos($dia->format("d/m/Y"), $this->ProducaoDiaDz[$i] + $vendeuQuantos);
							 
							 
							 $vendeuQuantos = $this->ProducaoDiaDz[$i] * (-1);
							 
							 $this->ProducaoDiaDz[$i] = 0;
							 
							 
						}else{
							
							 $retornoEstoqueOvos[$nn] = new dadosOvos($dia->format("d/m/Y"), $vendeuQuantos);
							
							break;
						}
						 $nn++;
					}
						 
					
					
					
				}
				
				return $retornoEstoqueOvos;
				
			
			}
			
			
			public function showEstoqueOvos(){
				 
				 $funcao = new DateTime($this->Ano . "-" . $this->Mes);
				 $numDiasMes = $funcao->format('t');
				
				
				
			
				for($i=0; $i<$numDiasMes;$i++){
					 $dia = new DateTime($this->Ano . "-" . $this->Mes . "-" . ($i+1));
					
					 //echo"<Br> dia=". $dia->format("Y-m-d") . " producao=" . $this->ProducaoDiaDz[$i];
					 
					
					
					
				}
				
			
			}
				
		}

		
		class dadosOvos{
			
			public $DIA;
			public $QTDE;
			
			function __construct($d, $q){
				$this->DIA = $d;
				$this->QTDE = $q;
				
			}
			
		}
			
	
	
		class Cliente{
			
			
			public $Nome;
			public $Cidade;
			public $EntregasSemana;
			public $TotalDZMes;
			
			public $Rotulo;
			
			public $Mes;
			public $Ano;
			
			public $diaEntrega;
			public $QtdePorEntregas;
			
			
			function __construct($nom, $cid, $entr, $totdz, $Rot, $m, $a){
				
				$this->Nome = $nom;
				$this->Cidade = $cid;
				$this->EntregasSemana = $entr;//array()
				$this->TotalDZMes = $totdz;
				$this->Rotulo = $Rot;
				$this->Mes = $m;
				$this->Ano = $a;
				
			}
		
		
		
			public function contaEntregasMes(){
				
				 $funcao = new DateTime($this->Ano . "-" . $this->Mes);
				 $numDiasMes = $funcao->format('t');
				 
				 $contDiaEntrega = 0;
				 $this->diaEntrega = array();
				 
				 $result = 0;
				for($i=0;$i<$numDiasMes;$i++){
					
					 $data = date($this->Ano . '-'. $this->Mes .'-' . ($i+1));
					 $diasemana_numero = date('w', strtotime($data));
					 //echo "<Br>" . $data ." ---- " . $diasemana_numero;
					 
					 
					for($j=0;$j<count($this->EntregasSemana);$j++){
						 
						if($this->EntregasSemana[$j] == $diasemana_numero){
							
							 $this->diaEntrega[$contDiaEntrega++] = $data;
							 $result++;
						}
					}
				}
				
				return $result;
			}
			
			
			public function checarQtdePorEntregas($pedidoMinimo){
				 
				 $totalEntregas = $this->contaEntregasMes();
				 $this->QtdePorEntregas = array();
				 
				 
				 $mediaEntregas = $this->TotalDZMes / $totalEntregas;
				 $MaisOuMenosEntregas =  $mediaEntregas * 0.1;
				 
				 $soma=0;
				for($i=0; $i<$totalEntregas;$i++){
					
					if(($totalEntregas-1) == $i){
						$soma += $this->QtdePorEntregas[$i] = $this->TotalDZMes - $soma; 
						//echo"<Br>FIM = " . $this->QtdePorEntregas[$i] . " +++ " . $this->diaEntrega[$i];
					}else{
						
						$qtdeParaPadronizar = mt_rand($mediaEntregas-$MaisOuMenosEntregas, $mediaEntregas+$MaisOuMenosEntregas);// sempre de meia em meia caixa
						//*
						if(($qtdeParaPadronizar % $pedidoMinimo > ($pedidoMinimo/2))){
							$qtdeParaPadronizar = (intdiv($qtdeParaPadronizar, $pedidoMinimo) * $pedidoMinimo ) + $pedidoMinimo;
						}else{
							$qtdeParaPadronizar = intdiv($qtdeParaPadronizar, $pedidoMinimo) * $pedidoMinimo;
						}
							//*/
						
						$soma += $this->QtdePorEntregas[$i] = $qtdeParaPadronizar;
						//echo"<Br> = " . $this->QtdePorEntregas[$i]  . " +++ " . $this->diaEntrega[$i];
					}
				}
				//echo"<Br>total= $soma <br>";
			}
			
			
			public function checaDiaEntrega($data){
				
				 $data1 = new DateTime($data);
				 
				 $totalEntregas = $this->contaEntregasMes();
				 $result = 0;
				for($i=0; $i<$totalEntregas;$i++){
					
					 $data2 = new DateTime($this->diaEntrega[$i]);
					if( $data2 == $data1){
						
						$result = $this->QtdePorEntregas[$i];
					}
				}
				return $result;
			}
				
		}
				
	
	
		
				
	
	
	
	
	
	
	
	 function instrucao12($height, $widths, $instrucoes)
	{
		
		 $N = count($widths);
		 $ant = 0;
?>			 
			 
			 <div style="height: <?PHP echo $height; ?>px;" class="instrucao  ">
	
<?PHP			

			 for($i=0; $i<$N; $i++)
			{
				 
?>				
				 
				 <div style="height: <?PHP echo $height; ?>px; width: <?PHP echo $widths[$i]; ?>px; top: 0px; left: <?PHP echo $ant; ?>px;" class="partInstrucao   <?PHP if(($i+1)<$N){echo"brz"; }?>"><?PHP echo $instrucoes[$i]; ?></div>
				 
				 
<?PHP			
				 $ant += $widths[$i];
			}	 

?>					 
			 </div>
		
<?PHP
		
		
	}

?>




	<html>
		<head>
			<title>Mod.Dipoa.12</title>
			
			<link rel="stylesheet" type="text/css" href="css.css" >
			
			<style>
			


			.cabecalho111
				{
					
					 float: left;
					 position: relative;
					 
					 height: 30px;
					 width: 845px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					
					 
				}
				
				.rodape12
				{
					
					 float: left;
					 position: relative;
					
					 
					 height: 50px;
					 width: 850px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					 margin-top: 10px;
					 margin-bottom: 30px;
					 
				}
			
				.rodape111
				{
					
					 float: left;
					 position: relative;
					 
					 height: 30px;
					 width: 845px;
					 
					 font-family: ARIAL;
					 text-align: center;
					 
					
					 
				}
				
				
				
		
			
				
			 .cabecalhoTit
				{
					
					 float: left;
					 position: relative;
					 
					 height: 30px;
					 width: 850px;
					 
					 font-family: ARIAL;
					 font-size: 13px;
					 text-align: CENTER;
					 
					
					 
				}
			
					.Titul
					{
						 float: left;
						 position: absolute; 
						 top: 0px;
						 left: 0px;

						 
						 font-weight: bold;
						 padding-left: 5px;
						 height: 30px;
						 width: 845px;
						 
					}
					
			
			
			
			
			
			 .cabecalho12
				{
					
					 float: left;
					 position: relative;
					 
					 height: 90px;
					 width: 845px;
					 
					 font-family: ARIAL;
					 text-align: LEFT;
					 
					
					 
				}
				
				
			.Estab
			{
				 float: left;
				 position: absolute; 
				 top: 0px;
				 left: 0px;
				 
				 font-weight: bold;
				 padding-left: 5px;
				 height: 30px;
				 width: 140px;
				 
			}
			 .Mun
			{
				 float: left;
				 position: absolute; 
				 top: 30px;
				 left: 0px;
				 
				 font-weight: bold;
				 padding-left: 5px;
				 height: 30px;
				 width: 140px;
				 
			}
			 .Nuc
			{
				 float: left;
				 position: absolute; 
				 top: 60px;
				 left: 0px;
				 
				 font-weight: bold;
				 padding-left: 5px;
				 height: 30px;
				 width: 140px;
				 
			} 
				
			
			.Estab2
			{
				 float: left;
				 position: absolute; 
				 top: 0px;
				 left: 145px;
				 
				
				 padding-left: 5px;
				 height: 30px;
				 width: 480px;
				 
			}
			 .Mun2
			{
				 float: left;
				 position: absolute; 
				 top: 30px;
				 left: 145px;
				 
		
				 padding-left: 5px;
				 height: 30px;
				 width: 480px;
				 
			}
			 .Nuc2
			{
				 float: left;
				 position: absolute; 
				 top: 60px;
				 left: 145px;
				 
	
				 padding-left: 5px;
				 height: 30px;
				 width: 480px;
				 
			} 
				
			



			
				
			.ie
			{
				 float: left;
				 position: absolute; 
				 top: 0px;
				 left: 630px;
				 
				 font-weight: bold;
				 padding-left: 5px;
				 height: 30px;
				 width: 75px;
				 
			}
			 .sie
			{
				 float: left;
				 position: absolute; 
				 top: 30px;
				 left: 630px;
				 padding-left: 5px;
				 font-weight: bold;
				 padding-left: 5px;
				 height: 30px;
				 width: 75px;
				 
			}
			 .mesano
			{
				 float: left;
				 position: absolute; 
				 top: 60px;
				 left: 630px;
				 
				 font-weight: bold;
				 padding-left: 5px;
				 height: 30px;
				 width: 75px;
				 
			} 
			
	
	
		
			.ie2
			{
				 float: left;
				 position: absolute; 
				 top: 0px;
				 left: 710px;
				 
			
				 padding-left: 5px;
				 height: 30px;
				 width: 135px;
				 
			}
			 .sie2
			{
				 float: left;
				 position: absolute; 
				 top: 30px;
				 left: 710px;
				 
			
				 padding-left: 5px;
				 height: 30px;
				 width: 135px;
				 
			}
			 .mesano2
			{
				 float: left;
				 position: absolute; 
				 top: 60px;
				 left: 710px;
				
				 padding-left: 5px;
				 height: 30px;
				 width: 135px;
				 
			} 
			
	
	
	
	
	
				
				
				
				
				
	
	
	
	
			
				
				 .teste 
				{
					
					float: left;
					position: relative;
					
					height: 34px;
					width: 840px;
					
					text-align: center;
					font-family: ARIAL;
					font-size: 12px;
					
					margin-right: 5px;
					margin-left: 5px;
				}
				
				
					.teste1
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 0px;
						height: 34px;
						width: 100px;	
					}
					
					 .teste2
					{
						float: left;
						position: absolute;
					
						
						top: 0px;
						left: 100px;
						height: 34px;
						width: 75px;	
					}
					
					
					
					
					.teste3
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 175px;
						height: 34px;
						width: 100px;	
					}
					
					.teste4
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 275px;
						height: 34px;
						width: 295px;	
					}
					
						
						
						
				
				
					.teste5
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 570px;
						height: 34px;
						width: 150px;	
					}
					
					.teste6
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 700px;
						height: 34px;
						width: 140px;	
					}
					
					.testex
					{
						float: left;
						position: absolute;
						
						top: 0px;
						left: 0px;
						height: 34px;
						width: 700px;	
					}
					
					
					
					
					
				.verticalText 
				{
					 

					line-height: 34px;

				}
					
				
				
			</style>
			
		</head>
		 
		<body>
		
	 
		     <div class="cabecalho111 ">Gerência de Inspeção e Defesa Sanitária Animal   Divisão de Inspeção de Produtos de Origem Animal</div>
<?PHP		

	

			//////////////////////////////////////////////////
				 $height = 65;
				 $widths[0] = 850;
				 
				 $instrucoes[0] = "<img src='logogranjinha.png' alt='some text' width=425 height=60>";
				 instrucao12($height, $widths, $instrucoes);
				 
				 
			////////////////////////////////
			
						
?>	
		
<?PHP 
			
			
				
				 $Estab="Estabelecimento:";
				 $Mun="Município:";
				 $Nuc="Núcleo:";
				 		
				 $Estab2="Manoel Dimas Antonio - Granjinha";
				 $Mun2="Ivinhema-MS";
				 $Nuc2="Ovos";
				 
				 
				 $Ieinfo="I.E.:";
				 $Sieinfo="SIE/MS:";
				 $mesano="Mes/Ano:";;
				 
				 $Ieinfo2="28.729.628-8";
				 $Sieinfo2="236";
				 $mesano2=  $mesEscrito ."/". $ano;
				 
?>			
				
				<div class="cabecalhoTit ">
					 <div class="Titul centrov b_all bbz ">SÍNTESE MENSAL DE COMERCIALIZAÇÃO</div>
				
				</div>
				
				
				
				<div class="cabecalho12 ">
				
					
			
					 
					 
					 <div class="Estab leftv b_all bbz "><?PHP echo $Estab; ?></div>
					 <div class="Mun leftv b_all bbz "><?PHP echo $Mun; ?></div>
					 <div class="Nuc leftv b_all "><?PHP echo $Nuc; ?></div>
				 
					 <div class="Estab2 leftv b_all bbz "><?PHP echo $Estab2; ?></div>
					 <div class="Mun2 leftv b_all bbz "><?PHP echo $Mun2; ?></div>
					 <div class="Nuc2 leftv b_all "><?PHP echo $Nuc2; ?></div>
				 
				 
				 
				 
					 <div class="ie leftv b_all bbz "><?PHP echo $Ieinfo; ?></div>
					 <div class="sie leftv b_all bbz "><?PHP echo $Sieinfo; ?></div>
					 <div class="mesano leftv b_all "><?PHP echo $mesano; ?></div>
				 
				 
					 <div class="ie2 leftv b_all bbz "><?PHP echo $Ieinfo2; ?></div>
					 <div class="sie2 leftv b_all bbz "><?PHP echo $Sieinfo2; ?></div>
					 <div class="mesano2 leftv b_all "><?PHP echo $mesano2; ?></div>
				 
				 
				</div>

			 
			 
			 <div class="conteudo b_all " >
			 
			 
				 <?PHP 
				 
				 
				//$j = 0;
				//$vendas = array();
				
					 $pedidoMinimo = 15;
					 
					 
					class listaCliente{
						public $nome;
						public $totalOvos;
						public $rotulo;
						public $cidade;
						public $frequenciaS;
						
						
						function __construct($n, $t, $r, $c, $f){
							$this->nome = $n;
							$this->totalOvos = $t;
							$this->rotulo = $r;
							$this->cidade = $c;
							$this->frequenciaS = $f;
							
							
						}
			
					}
					
					
					 $Clientes = array();
					 $LCli = array();
					 
					 
					 
					 $ccc = 0;
					
					 // ALTERE/EMBARALHE A ORDEM DOS CLIENTES PARA FICAR MAIS REALISTA
					 $LCli[$ccc++] = new listaCliente("T C Ferreira Eirelli", 330, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("T C Ferreira Eirelli", 4500, "004/236", "Ivinhema", array(2,5));
					 
					 $LCli[$ccc++] = new listaCliente("Alvorada 1", 610, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("Alvorada 1", 1050, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Alvorada 2", 630, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("Alvorada 2", 1130, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Alvorada 3", 390, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("Alvorada 3", 950, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Rodaviva", 120, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("Rodaviva", 180, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Amigão", 240, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("Amigão", 165, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Mercado Jotta", 135, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("Mercado Jotta", 135, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Mercearia Água Azul", 135, "004/236", "Ivinhema", array(2,5));
					 
					 $LCli[$ccc++] = new listaCliente("Galeria Brasil", 210, "004/236", "Ivinhema", array(2,5));
					 
					 $LCli[$ccc++] = new listaCliente("Tropical Alimentos", 230, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Minas Sul", 150, "001/236", "Ivinhema", array(2,5));
					 
					 $LCli[$ccc++] = new listaCliente("Casa dos Sabores", 260, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Irmãos Rosas", 65, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("Irmãos Rosas", 65, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Zé Montanha", 225, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("Zé Montanha", 195, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Mercado Báu", 135, "001/236", "Ivinhema", array(2,5));
					 $LCli[$ccc++] = new listaCliente("Mercado Báu", 315, "004/236", "Ivinhema", array(2,5));
					
					 $LCli[$ccc++] = new listaCliente("Pequeno Mundo", 1330, "001/236", "Angélica", array(2));
					 $LCli[$ccc++] = new listaCliente("Pequeno Mundo", 2850, "004/236", "Angélica", array(2));
					
					 $LCli[$ccc++] = new listaCliente("Bom Preço", 285, "001/236", "Angélica", array(2));
					 $LCli[$ccc++] = new listaCliente("Bom Preço", 255, "004/236", "Angélica", array(2));
					
					 $LCli[$ccc++] = new listaCliente("Mercadinho Azul", 255, "001/236", "Angélica", array(2));
					 $LCli[$ccc++] = new listaCliente("Mercadinho Azul", 135, "004/236", "Angélica", array(2));
					 
					 $LCli[$ccc++] = new listaCliente("Soldera", 135, "001/236", "Angélica", array(2));
					 $LCli[$ccc++] = new listaCliente("Soldera", 65, "004/236", "Angélica", array(2)); 
					 
					 $LCli[$ccc++] = new listaCliente("Padaria Sensação", 300, "004/236", "Angélica", array(2));
					
					 $LCli[$ccc++] = new listaCliente("Du Lanches", 130, "004/236", "Angélica", array(2));
					 
					 $LCli[$ccc++] = new listaCliente("Mercado Pantanal", 90, "001/236", "Angélica", array(2));
					 
					 $LCli[$ccc++] = new listaCliente("Açougue Siqueira", 105, "001/236", "Angélica", array(2));
					
					 $LCli[$ccc++] = new listaCliente("Cooperapoms", 3000, "001/236", "Dourados", array(2));
					
					 
					 
					 
					//echo"<Br>=========". $ccc . "===========<br>";
					for($i=0; $i < $ccc; $i++){
						 $Clientes[$i] = new Cliente($LCli[$i]->nome, $LCli[$i]->cidade, $LCli[$i]->frequenciaS, $LCli[$i]->totalOvos, $LCli[$i]->rotulo, $mes, $ano);
						 $Clientes[$i]->checarQtdePorEntregas($pedidoMinimo);
					}
					 
					 
					 
					 //abaixo coloca a quantidade producao do mes e ele vai distribuir para os clientes acima de acordo com a media de entrega semanal
					 // o numero não vai bater, mas vai aproximar.
					 
					 //-------------------------------
					 // ATENCAO: aqui preciso ver a quantidade de dúzias que vai gerar no mes de acordo com a lista de clientes acima e 
					 // devo colocar o valor bem proximo disso sempre um pouco a mais ex: se deu 17050 eu posso colocar 17200
					 // se eu colocar uma producao a baixo ele vai limitar e se eu colocar uma producao muito acima ele vai considerar a média diária de producao e no final do mes vai faltar alguns dias pra completar!
					 $Ovos = new EstoqueOvo(20755, $mes, $ano);
					 //-------------------------------
					 
					 $Ovos->contaProducaoDiaDZ();
					 //echo"<br>expedicaoEstoqueOvos=". $Ovos->expedicaoEstoqueOvos($Clientes) . "<Br>";
					 $vendas = $Ovos->expedicaoEstoqueOvos($Clientes);
					 
					
				
				
				
				     moddipoa12content($vendas, 28, 36);//sobre a paginação da primeira pagina e das outras paginas
				  


				 ?>
			 
			 </div>
		
			 
			 






<!--------------------------------------------------------------------------->			 
			 <div class="rodape12 ">
				 <!--<div class="legenda b_all bggrey">  <b>LEGENDA:</b>  C=Conforme; NC=Não conforme;  </div>-->
				 <div class="monitor  "> <b>  _________________________________________________________________ <Br>Assinatura do Responsável pelo Estabelecimento do SIE/MS</b> </div>
			 </div> 
		 
		 	 <div class="rodape111 ">
			 <?PHP  
			 
				 
				 
				 /*
				 $Clientes = array();
				 $Clientes[0] = new Cliente("T C Ferreira Eirelli", "Ivinhema", array(2,5), 600, "004/236", $mes, $ano);
				 echo"<br>contaEntregasMes=". $Clientes[0]->checarQtdePorEntregas($pedidoMinimo) . "<Br>";
				 
				 echo"<br>checaDiaEntrega = ". $Clientes[0]->checaDiaEntrega("2022-11-01");
				
				
				 $Clientes[1] = new Cliente("Pequeno Mundo", "Angélica", array(2), 710, "004/236", $mes, $ano);
				 echo"<br>contaEntregasMes=". $Clientes[1]->checarQtdePorEntregas() . "<Br>";
				 
				 echo"<br>checaDiaEntrega = ". $Clientes[1]->checaDiaEntrega("2022-11-01");
				
				
				 
				 $Ovos = new EstoqueOvo(13500, $mes, $ano);
				 echo"<br>contaProducaoDiaDZ=". $Ovos->contaProducaoDiaDZ() . "<Br>";
				 echo"<br>expedicaoEstoqueOvos=". $Ovos->expedicaoEstoqueOvos($Clientes) . "<Br>";
				 
				 echo"<br>showEstoqueOvos=". $Ovos->showEstoqueOvos() . "<Br>";
				 
				 //*/
				 
				 
				 /*
				 
				 $Clientes = array();
				 $Clientes[0] = new Cliente("T C Ferreira Eirelli", "Ivinhema", array(2,5), 600, "004/236", $mes, $ano);
				 $Clientes[0]->checarQtdePorEntregas($pedidoMinimo);
				 
				 
				 $Clientes[1] = new Cliente("Pequeno Mundo", "Angélica", array(2), 710, "004/236", $mes, $ano);
				 $Clientes[1]->checarQtdePorEntregas($pedidoMinimo);
				 
				
				 
				 $Ovos = new EstoqueOvo(13500, $mes, $ano);
				 echo"<br>contaProducaoDiaDZ=". $Ovos->contaProducaoDiaDZ() . "<Br>";
				 //echo"<br>expedicaoEstoqueOvos=". $Ovos->expedicaoEstoqueOvos($Clientes) . "<Br>";
				 $retornoArray = $Ovos->expedicaoEstoqueOvos($Clientes);
				 
				 //echo"<br>showEstoqueOvos=". $Ovos->showEstoqueOvos() . "<Br>";
				 //*/
				
			?>
			
			 MOD.DIPOA.012</div>
	
			 
	 
			 
			 

		 </body>

	</html>
