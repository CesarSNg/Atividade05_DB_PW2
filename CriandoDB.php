<?php
	
	$localhost = 'localhost';
	$user = 'root';
	$password = "";

	$conexao = mysqli_connect($localhost, $user, $password);
	
		if (mysqli_connect_errno($conexao)){
	
			echo "<br/>Erro ao conectar com a base de dados: ".
	
		mysqli_connect_error();
	
		}else{
	
			// Criando base de dados
	
			$sql="CREATE DATABASE dbLivraria";
	
				if (mysqli_query($conexao,$sql)){
	
					echo "<br/>Base de Dados criado com sucesso!!";
	
				}else{
	
					echo "<br/>Erro ao criar o banco de dados: " .mysqli_error($conexao);
	
				}
	
		mysqli_close($conexao);
	}
?>
