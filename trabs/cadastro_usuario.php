<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hair.exe</title>
</head>
<body>
	<h1>Página de Cadastro Hair.exe</h1>
	<form method="POST" action="cadastra_usuario.php">
		<p>
			Nome: <input type="name" name="nome_usuario" id="nome_usuario" placeholder="Digite seu nome..." required />
		</p>

		<p>
			CPF: <input type="name" name="cpf_usuario" id="cpf_usuario" placeholder="Digite seu cpf..." required />
		</p>

		<p>
			E-mail: <input type="email" name="email_usuario" id="email_usuario" placeholder="Digite seu e-mail..." required />
		</p>

		<p>
			Telefone: <input type="name" name="telefone_usuario" id="telefone_usuario" placeholder="Digite seu telefone..." required />
		</p>

		<p>
			Senha: <input type="password" name="senha_usuario" id="senha_usuario" placeholder="Digite sua senha..." required />
		</p>

		<p>
			Confirmar senha: <input type="password" name="confirmar_senha_usuario" id="confirmar_senha_usuario" placeholder="Digite novamente sua senha..." required />
		</p>

		<p>
			<input type="submit" name="envia_cadastro_usuario" value="Cadastrar">
		</p>

		<a href="index.php">Index</a>

	</form>
</body>
</html>