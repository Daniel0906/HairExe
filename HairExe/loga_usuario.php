<?php

	$cpfUsuario	  = $_POST['cpf_usuario'];
	$senhaUsuario = $_POST['senha_usuario'];

	if (isset($cpfUsuario) || isset($senhaUsuario)) {
		

		include("conexao_banco.php");

		$sql = "SELECT * FROM cadastro_usuario WHERE cpf_usuario = '$cpfUsuario' AND senha_usuario = '$senhaUsuario'";

		$result = mysqli_query($conexao, $sql);

		$linhaTabela = mysqli_num_rows($result);

		if ($linhaTabela == 1) {
			
			$usuario = mysqli_fetch_assoc($result);
			if (!isset($_SESSION)) {
				session_start();
			}

			$_SESSION['nomeUsuario']     = $usuario['nome_usuario'];
			$_SESSION['cpfUsuario']      = $usuario['cpf_usuario'];
			$_SESSION['emailUsuario']    = $usuario['email_usuario'];
			$_SESSION['telefoneUsuario'] = $usuario['telefone_usuario'];

			header("refresh:0.1; url= painel_usuario.php");
		}

	}

?>