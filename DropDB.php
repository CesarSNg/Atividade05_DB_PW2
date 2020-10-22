<?php
	
	$localhost = 'localhost';
	$user = 'root';
	$password = "";

	$con = mysqli_connect($localhost,$user,$password);
	
	$sql="DROP DATABASE dbLivraria";
	
	if (mysqli_query($con,$sql)){
	
		echo "Base de Dados removida com sucesso!!";
	
	}else{
	
		echo "Erro: " .mysqli_error($con);
	
	}
	
	mysqli_close($con);
?>


