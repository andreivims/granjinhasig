<?PHP


	 include "classpac.php";
	 include "classpac3.php";
	 include "classpac12.php";



	if(isset($_POST['CONTROLE'])) $CONTROLE = filter_input(INPUT_POST, 'CONTROLE', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['CONTROLE'])) $CONTROLE = filter_input(INPUT_GET, 'CONTROLE', FILTER_SANITIZE_SPECIAL_CHARS);
	else $CONTROLE = "";



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
	
	 function mes_ano($mes, $ano)
	{
		
		 $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
		 
		 $data = date($ano . '-'. $mes .'-10' );

		 $mesnumero = (int)date('m', strtotime($data));
		 
		 return $meses[$mesnumero-1];

			
	}
	
	


	  
		
		
		
		if($CONTROLE == "pac1"){
			
		}else if($CONTROLE == "pac3"){
			
			$heightGeral = 550;
			$widthGeral = 1050;
			
			$cabecalho1Height = 90;
			$cabecalho1Width = 0.75;
			
			$infoHeight = 80;
			
			$pac3 = new ContentPAC3();
			
		
		}else{
			
			$heightGeral = 1500;
			$widthGeral = 1050;
			
			$cabecalho1Height = 90;
			$cabecalho1Width = 0.75;
			
			$infoHeight = 50;
			
			$pac12 = new ContentPAC12();
			
		}
		
		$pac = new PacGeral($heightGeral, $widthGeral);
		$cabecalho = new Cabecalho($cabecalho1Height, $cabecalho1Width);
		$info = new Informativo($infoHeight);
		$rodape = new Rodape();
		

		

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
				
				$rodape->cssRodape($pac);
		 
		 
		 
				if($CONTROLE == "pac1"){
					
				}else if($CONTROLE == "pac3"){
					
					$pac3->cssContentPAC3($pac);
					
				
				}else{
					
					$pac12->cssContentPAC12($pac);
					
				
				}
?>

				
				
				
				
				.bgGrey{
					 background-color: rgb(245,245,245);
				}
				
				.b_all
				{
					 border-collapse: collapse; 
					 border: 1px solid black;
				}
				
				.b_zero{
					border: 0px solid black;
					border-collapse: collapse;
				}
				
				tr,td{
					 padding: 3px;
				}
			
			</style>
			
		</head>
		
		<body style='font-family: ARIAL;'>
		
			<div style="height: <?PHP echo $pac->height; ?>px; width: <?PHP echo $pac->width; ?>px; border: 1px solid black;">
			
<?PHP



			if($CONTROLE == "pac1"){
			
			}else if($CONTROLE == "pac3"){
				
				
				$cabecalhoNome = "CHECK-LIST DE LUMINÁRIAS";
				$cabecalhoSubNome = "PAC 03 - FML 11";
				
				$infos = array(
					"<b>Período:</b> <br>Semanal", 
					"<b>Parâmetros Avaliados:</b> <br>Lâmpada: queimada ou solta. Proteção quebrada ou suja.<br> Medir Lux: Usar luxímetro", 
					"<b>Ações Corretivas:</b> <br>Trocar lâmpada; Fixar/trocar a lâmpada;  Trocar a proteção; Realizar limpeza e secar; Colocar lâmpadas mais potentes."
				);
				
				$htmlPACs = $pac3->htmlContentPAC3($mes, $ano);
				
				$legenda = "<b>LEGENDA:</b>(C) Conforme; (NC) Não conforme; ";
				
			}else{
				
				
				$cabecalhoNome = "CONTROLE DIÁRIO DE TEMPERATURA";
				$cabecalhoSubNome = "PAC 12 - FML 17";
				
				$infos = array(
					"<b>Período:</b> <br>Diário", 
					"<b>Parâmetros Avaliados:</b> <br>Temperatura Ambiente", 
					"<b>Ações Corretivas:</b> <br>Utilizar o exaustor e o ventilador"
				);
				
				$htmlPACs = $pac12->htmlContentPAC12($mes, $ano);
				
				$legenda = "";
				
			}
			
			$cabecalho->htmlCabecalho($cabecalhoNome, $cabecalhoSubNome, $mesEscrito ." - ". $ano);
			$info->htmlInformativo($infos);
			
			echo $htmlPACs;
			
			
			$rodape->htmlRodape($legenda);
		 
		 
		 
?>			
			
			</div>
			
			
		</body>
		
	</html>


