<?php
	include("valida_sessao.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hair.exe</title>
	</head>
	<body>
		<h1>Painel Usuário</h1>
			<?php
				echo "Bem vindo, " .$_SESSION['nomeUsuario'];
			?>
		<hr/>
		<p><b>Dados Cadastrais</b></p>
		<?php
			echo "Nome: " .$_SESSION['nomeUsuario']. "<br/><br/>";
			echo "CPF: " .$_SESSION['cpfUsuario']. "<br/><br/>";
			echo "E-mail: " .$_SESSION['emailUsuario']. "<br/><br/>";
			echo "Telefone: " .$_SESSION['telefoneUsuario']. "<br/><br/>";
		?>
		<p><a href="desconecta_usuario.php">Desconectar</a></p>
	</body>
</html>