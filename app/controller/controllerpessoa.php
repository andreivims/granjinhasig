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
	
	if(isset($_POST['contato1'])) $contato1 = filter_input(INPUT_POST, 'contato1', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['contato1'])) $contato1 = filter_input(INPUT_GET, 'contato1', FILTER_SANITIZE_SPECIAL_CHARS);
	else $contato1 = "";
	
	if(isset($_POST['numero1'])) $numero1 = filter_input(INPUT_POST, 'numero1', FILTER_VALIDATE_INT);
	elseif(isset($_GET['numero1'])) $numero1 = filter_input(INPUT_GET, 'numero1', FILTER_VALIDATE_INT);
	else $numero1 = "";
	
	if(isset($_POST['contato2'])) $contato2 = filter_input(INPUT_POST, 'contato2', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['contato2'])) $contato2 = filter_input(INPUT_GET, 'contato2', FILTER_SANITIZE_SPECIAL_CHARS);
	else $contato2 = "";
	
	if(isset($_POST['numero2'])) $numero2 = filter_input(INPUT_POST, 'numero2', FILTER_VALIDATE_INT);
	elseif(isset($_GET['numero2'])) $numero2 = filter_input(INPUT_GET, 'numero2', FILTER_VALIDATE_INT);
	else $numero2 = "";
	
	if(isset($_POST['contato3'])) $contato3 = filter_input(INPUT_POST, 'contato3', FILTER_SANITIZE_SPECIAL_CHARS);
	elseif(isset($_GET['contato3'])) $contato3 = filter_input(INPUT_GET, 'contato3', FILTER_SANITIZE_SPECIAL_CHARS);
	else $contato3 = "";
	
	if(isset($_POST['numero3'])) $numero3 = filter_input(INPUT_POST, 'numero3', FILTER_VALIDATE_INT);
	elseif(isset($_GET['numero3'])) $numero3 = filter_input(INPUT_GET, 'numero3', FILTER_VALIDATE_INT);
	else $numero3 = "";
	
	
	 
	
	

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
		'cnpjcpf' => $cnpjcpf,
		'contato1' => $contato1,
		'numero1' => $numero1,
		'contato2' => $contato2,
		'numero2' => $numero2,
		'contato3' => $contato3,
		'numero3' => $numero3
	); 
	
	echo json_encode($result);

?>
