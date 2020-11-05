<?PHP

	require_once("classes.php");

	class Conexao{
		private static $instance;
		public static function getConn(){
			if(!isset(self::$instance)){
				 self::$instance = new PDO('mysql:host=localhost;dbname=granjinha;charset=utf8','root','');
			}
			return self::$instance;
			
		}
	}
	
	class ClassCRUD extends Conexao {
		
		public $Crud;
		public $ultimoID;
		public $totalParametros;
		
		
		
		public function countparametros($parametros){
			$this->totalParametros = count($parametros);
		}
		
		
		
		
		
		
		
		public function prepareBD($query, $parametros){
			
			$this->countparametros($parametros);
			$this->Crud = $this->getConn()->prepare($query);
			
			//*
			if($this->totalParametros > 0 ) {
					
				for($i=1; $i <= $this->totalParametros; $i++) {
					$this->Crud->bindValue($i, $parametros[$i-1]);
				}
			}
			//*/
			
			
			//echo"<br> {$this->totalParametros} --- {$query} ----";
			if (!$this->Crud->execute()){
				print_r($this->Crud->errorInfo());
				echo" ====Falhou==== ";
			}else{
				$this->ultimoID = Conexao::getConn()->lastInsertId();
				return $this->ultimoID;
			}
			
		}
		
		
		
		
		
		
		
	
		public function CreateDB($tabela, $condicao, $parametros){
			
			$this->countparametros($parametros);
			$sql = " INSERT INTO {$tabela} VALUES ({$condicao}) ";
			
			
			//echo"$sql";
			$this->prepareBD($sql, $parametros);
			return $this->Crud;
		}
		
		
		public function ReadDB($campos, $tabela, $condicao, $parametros){
			
			$sql = " SELECT {$campos} FROM {$tabela} {$condicao} ";
			
			//echo"$sql";
			$this->prepareBD($sql, $parametros);
			
			if($this->Crud->rowCount()>0)
			{
				 $resultado = $this->Crud->fetchAll(PDO::FETCH_ASSOC);
				 return $resultado;
			}
		}
		
		
		public function UpdateDB($tabela, $set, $condicao, $parametros){
			
			$this->countparametros($parametros);
			$sql = " UPDATE {$tabela} SET {$set} WHERE {$condicao} ";

		
			//echo "$sql";
			$this->prepareBD($sql, $parametros);
			return $this->Crud;
		}
		
		public function DeleteDB($tabela, $condicao, $parametros){
			
			$sql = " DELETE FROM {$tabela} WHERE {$condicao} ";
			
			//echo"$sql";
			$this->prepareBD($sql, $parametros);
			
		}
		
		
	}