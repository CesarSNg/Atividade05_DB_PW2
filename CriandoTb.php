<?php
	// Criando conexão com a base de dados db_2HPW2

	$localhost = 'localhost';
	$user = 'root';
	$password = "";
	$db = "dbLivraria";
	
	$conexao = mysqli_connect($localhost,$user,$password,$db);
	
	$sql="CREATE TABLE tbClientes(
		codigo int,
    	nome varchar(100),
    	endereco varchar(100),
    	bairro varchar(100),
   		cidade varchar(50),
   		estado varchar(2),
   		telCel varchar(9))";
	
	if (mysqli_query($conexao,$sql)){
	
	echo "Tabela criada com sucesso!!";
	
	}else{
	
	echo "Erro ao criar a tabela!!! " .mysqli_error($conexao);
	
	}
	
	mysqli_close($conexao);
?>

