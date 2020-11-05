<?PHP

	 require_once "../model/crudconexao.php";
	 require_once "../model/classes.php";
	
	

	$Crud = new ClassCRUD();
	
	/*
	$ultimo = $Crud->CreateDB(
		"fone",
		"?,?,?,?",
		array(
			null,
			7,
			'JULIA GUEDES',
			'12'
		)
	);
	//*/
	
	
	//*
	$resRead = $Crud->ReadDB(
		"*",
		"fone",
		//"where idFone = ?",
		//array(10)
		"",
		array()
	);
	
	
	 $telefones = array();
	 $i=0;
	foreach($resRead as $res)
	{
		 echo " --- ". $res["idFone"];
		 echo " --- ". $res["idPessoa"];
		 echo " --- ". $res["nomepessoa"];
		 echo " --- ". $res["numero"];
		 echo"<br><br>";
		 
		
		 $i++;
	}
	
	//*/
	
	
	
	//*
	$Crud->UpdateDB(
		"fone",
		"idPessoa = ?, nomepessoa = ?, numero = ?",
		" idFone = ?",
		array(
			22,
			"Cezar Ferreira",
			"67981194842",
			9
		
		
		)
	);
	//*/
	
	
	/*
	$Crud->DeleteDB(
		 "fone",
		 " idFone = ?",
		 array(84)
	);
	//*/
	
	
	
	
	
?>



	 
