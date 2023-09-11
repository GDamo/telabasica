<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Login Empresa X</title>
		<link rel= "stylesheet" href="_css/estilodatela.css"/>
		
	</head>
	<body>
		<?php 
		$email = $_GET["nemail"];
		$senha = $_GET["nsenha"];
		if ($email== "gabriel.damo@hotmail.com" and $senha== "123") {
			echo "<span>Parabéns você logou<span>";
		} 
		else {
			echo "<script>
				alert('Você errou o login');			
			</script>";
			echo "<a href='TelalLogin.html'/>Voltar";
		}

		?>
	</body>
</html>