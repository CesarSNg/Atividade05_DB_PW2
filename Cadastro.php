<?php
	$localhost = 'localhost';
	$user = 'root';
	$password = "";
	$db = "dbLivraria";
	
	$con = mysqli_connect($localhost,$user,$password,$db);
	
		if (mysqli_connect_errno($con)){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}else{
	
			$sql = "INSERT INTO tbClientes(codigo,nome,endereco,bairro,cidade,estado,telCel)VALUES($_POST[codigo],'$_POST[nome]','$_POST[endereco]','$_POST[bairro]','$_POST[cidade]','$_POST[estado]','$_POST[telefone]')";

		if(mysqli_query($con,$sql)){
	
			echo "Pessoa inserida com sucesso!!!";
	
		}else{
	
			echo "Erro ao inserir: ".mysqli_error($con);
	
		}
		mysqli_close($con);
	}
?>
