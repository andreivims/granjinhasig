<?PHP
	 header('Content-Type: application/json');
	 
	 require_once "../model/crudconexao.php";
	 
	 
	//FILTER_SANITIZE_EMAIL 
	//FILTER_SANITIZE_SPECIAL_CHARS 
	//FILTER_VALIDATE_INT
	
	if(isset($_POST['idPessoa'])) $idPessoa = filter_input(INPUT_POST, 'idPessoa', FILTER_VALIDATE_INT);
	elseif(isset($_GET['idPessoa'])) $idPessoa = filter_input(INPUT_GET, 'idPessoa', FILTER_VALIDATE_INT);
	else $idPessoa = "0";
	
	if(isset($_POST['nome'])) $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['nome'])) $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	else $nome = "";

	if(isset($_POST['apelido'])) $apelido = filter_input(INPUT_POST, 'apelido', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['apelido'])) $apelido = filter_input(INPUT_GET, 'apelido', FILTER_SANITIZE_SPECIAL_CHARS);
	else $apelido = "";
	
	if(isset($_POST['endereco'])) $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['endereco'])) $endereco = filter_input(INPUT_GET, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
	else $endereco = "";

	if(isset($_POST['localizacao'])) $localizacao = filter_input(INPUT_POST, 'localizacao', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['localizacao'])) $localizacao = filter_input(INPUT_GET, 'localizacao', FILTER_SANITIZE_SPECIAL_CHARS);
	else $localizacao = "";
	
	if(isset($_POST['juridica'])) $juridica = filter_input(INPUT_POST, 'juridica', FILTER_VALIDATE_INT);
	elseif(isset($_GET['juridica'])) $juridica = filter_input(INPUT_GET, 'juridica', FILTER_VALIDATE_INT);
	else $juridica = "";


	if(isset($_POST['cnpjcpf'])) $cnpjcpf = filter_input(INPUT_POST, 'cnpjcpf', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['cnpjcpf'])) $cnpjcpf = filter_input(INPUT_GET, 'cnpjcpf', FILTER_SANITIZE_SPECIAL_CHARS);
	else $cnpjcpf = "";
	
	
	
	
	 
	
	

	$Crud = new ClassCRUD();

	
	
	$resRead = $Crud->ReadDB(
		"*",
		"fone",
		//"where idFone = ?",
		//array(10)
		"",
		array()
	);

	
	//echo "<br>-------------- {$salario} ";
	
	$result = array( 
		'idPessoa' => $idPessoa, 
		'nome' => $nome, 
		'apelido' => $apelido,
		'endereco' => $endereco,
		'localizacao' => $localizacao,
		'juridica' => $juridica,
		'cnpjcpf' => $cnpjcpf
	
	); 
	
	echo json_encode($result);

?>
