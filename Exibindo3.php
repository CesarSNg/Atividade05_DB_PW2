<?php
	$localhost = 'localhost';
	$user = 'root';
	$password = "";
	$db = "dbLivraria";
	
	$con = mysqli_connect($localhost,$user,$password,$db);
	
		if (mysqli_connect_errno($con)){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}else{
	
		$sql = "SELECT * FROM tbClientes";

			$resultado = mysqli_query($con,$sql);

			echo "<h2>Dados</h2>";

		while($tbClientes = mysqli_fetch_array($resultado)){

		echo "Codigo:" . " " . $tbClientes['codigo'] . "<br><br/>" . 
		"Nome:" . " " . $tbClientes['nome'] . "<br><br/>" . 
		"Endereço:" . $tbClientes['endereco'] . "<br><br/>" . 
		"Bairro: " . $tbClientes['bairro'] . "<br><br/>" .
		"Cidade:" . " " . $tbClientes['cidade'] . "<br><br/>" . 
		"Estado:" . " " . $tbClientes['estado'] . "<br><br/>" . 
		"Telefone:" . " " . $tbClientes['telCel'] . "<br><br/>" . "<hr>";

		}
	
		mysqli_close($con);
	}
?>
