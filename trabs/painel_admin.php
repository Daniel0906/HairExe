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
		<h1>Painel Admin</h1>
			<?php
				echo "Bem vindo, " .$_SESSION['nomeUsuario'];
			?>
		<hr/>
		<p><b>Dados Cadastrais</b></p>
		<?php
			echo "Nome:     " .$_SESSION['nomeUsuario']. "<br/><br/>";
			echo "CPF:      " .$_SESSION['cpfUsuario']. "<br/><br/>";
			echo "E-mail:   " .$_SESSION['emailUsuario']. "<br/><br/>";
			echo "Telefone: " .$_SESSION['telefoneUsuario']. "<br/><br/>";

			//Agendamento
			//Historico
			//Dados Cadastrais(alterar(perfil))
			//Promoção

		?>
		<hr/>
		<h2>Usuário cadastrados</h2>

		<?php

			include("conexao_banco.php");


			$sql = "SELECT * FROM cadastro_usuario";

			$result = mysqli_query($conexao, $sql);

				?><table border = 1px>
				<tr>
					<th>
						ID
			    	</th>
					<th>
						Nome
					</th>
						<th>
						E-Mail
					</th>
					<th>
						Telefone
					</th>
					<th>
						Excluir
					</th>
				</tr>
				<?php
				while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$row['id_usuario']."</td>";
				echo "<td>".$row['nome_usuario']."</td>";
				echo "<td>".$row['email_usuario']."</td>";
				echo "<td>".$row['telefone_usuario']."</td>";
				echo "<td><a href='funcoes.php?id=".$row['id_usuario']."'>Excluir</a></td>";
				echo "</tr>";

				}?>
				</table>
				<?php// duas function para dar delete e alter, vai ser os botao na tabela?>
		<p><a href="desconecta_usuario.php">Desconectar</a></p>
		
	</body>
</html>