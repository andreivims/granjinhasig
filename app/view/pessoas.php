<?PHP

	require_once "../model/crudconexao.php";
	require_once "../model/classes.php";
	
	include("header.php");
	
	echo"<Br>----------------<Br>";
	
	$teste = new classGenericaBD();
	$teste->campos["andre"] = "antonio";
	$teste->campos["tatiane"] = 156;
	$teste->campos["julia"] = "guedes";
	var_dump($teste);
	

	echo"<Br>----------------<Br>";
?>
	
	<script type="text/javascript" src="../js/pessoas.js"></script>
	<script type="text/javascript">
		 //alert('dddd');
	</script>


	<div class="cadastropessoas">
	
		<input type="hidden" id="idPessoa" value="">
		<div class="nomecampos">Nome: </div> <input type="text" id="nome" value="andreivims@gmail.com">
		<div class="nomecampos">Apelido: </div> <input type="text" id="apelido" value="">
		<div class="nomecampos">Endereço: </div> <input type="text" id="endereco" value="">
		<div class="nomecampos">Localização: </div> <input type="text" id="localizacao" value="">
		<input type="hidden" id="juridica" value="0">
		<div class="nomecampos">CPF ou CNPJ: </div> <input type="text" id="cnpjcpf" value="">
		
	
		<input type="button" id="cadastro" value="CADASTRAR">
	 
	 
	</div>
	
	<div class="mostrarpessoas">
		<table id="tableshowpessoas" border=1>
			<tr>
				<td>Nome</td> <td>Apelido</td> <td>Endereço</td> <td>Localização</td> <td>CPF/CNPJ</td> <td>Jurídica</td> 
			</tr>
		</table>
	</div>
	
	
	<div class="resultado"></div>
	
	
	
	
<?PHP
	include("footer.php");
?>