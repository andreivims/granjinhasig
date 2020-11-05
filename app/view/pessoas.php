<?PHP

	require_once "../model/crudconexao.php";
	require_once "../model/classes.php";
	
	include("header.php");
	
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
		
		<div class="foneshidden" id="telefones1">
			<div class="nomecampos">Contato 1: </div> <input type="text" id="contato1" value="">
			<div class="nomecampos">Telefone 1: </div> <input type="text" id="numero1" value="">
		</div>	
		<div class="foneshidden" id="telefones2">
			<div class="nomecampos">Contato 2: </div> <input type="text" id="contato2" value="">
			<div class="nomecampos">Telefone 2: </div> <input type="text" id="numero2" value="">
		</div>
		<div class="foneshidden" id="telefones3">
			<div class="nomecampos">Contato 3: </div> <input type="text" id="contato3" value="">
			<div class="nomecampos">Telefone 3: </div> <input type="text" id="numero3" value="">
		</div>
		
		<input type="button" id="maisfones" value="+ Fones">
		
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