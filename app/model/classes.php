<?php
	
	require_once "crudconexao.php";
	
	
	
	
	class classGenericaBD
	{ 
		 public $campos;
		 
		 public function HTML($tipo){
			 
			 
		}
		 
		
		
		
	}
	
	
	class Pessoa
	{ 
		 public $idPessoa;
		 public $nome;
		 public $apelido;
		 public $endereco;
		 public $localizacao;
		 public $juridica;
		 public $cnpjcpf;
		
		
		
	}
	
	
	
	
	class Fone
	{ 
		 public $idFone;
		 public $idPessoa;
		 public $nomepessoa;
		 public $numero;
		
	
	}
	
	
	class AtivoPassivo
	{ 
		 public $idAtivoPassivo;
		 public $nome;
		 public $nomeabreviado;
		 public $categoria;
		 public $descricao;
		 public $medida;
	
	
	}
	
	
	
	
	
	
	class Transacao
	{ 
		 public $idTransacao;
		 public $nome;
		 public $descricao;
		 public $datahora;
	
	}






	class Estoque
	{ 
		 public $idEstoque;
		 public $idTransacao;
		 public $idAtivoPassivo;
		 public $datainicio;
		 public $lote;
		 public $vencimento;
		 public $descricao;
		 public $qtde;
		 public $valor;
	
	
	}
	
	
	
	class ConsumoProducao
	{ 
		 public $idConsumoProducao;
		 public $idTransacao;
		 public $idAtivoPassivo;
	
	
		
	}
	
	
	
	
	
	
	class Financeiro
	{ 
		 public $idFinanceiro;
		 public $idTransacao;
		 public $idAtivoPassivo;
		 public $vencimento;
		 public $descricao;
		 public $valor;
	
	
	}


	class PrecoGeral
	{ 
		 public $idPrecoGeral;
		 public $idAtivoPassivo;
		 public $preco;
	
	
	}



	class PrecoCliente
	{ 
		 public $idPrecoCliente;
		 public $idAtivoPassivo;
		 public $idPessoa;
		 public $preco;
	
	
	}

?>

