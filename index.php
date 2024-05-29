<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/index.css">
	</head>
	<body>
		<div class="header">
			<h1>App Help Desk</h1>
		</div>

		<div class="body">
			<div class="container-form">

				<div class="head-form">
					<h3>Login</h3>
				</div>

				<div class="body-form">
					<form action="valida_login.php" method="post">
						<div class="email-form">
							<input name="email" type="email" placeholder="Email">
						</div>
						<div class="senha-form">
							<input name="senha" type="password" placeholder="Senha">
						</div>

						<?php if(isset($_GET['login']) &&  $_GET['login'] == 'erro'){ ?>
							<div class="error"> Usuário ou senha inválidos </div>
						<?php } ?>

						<?php if(isset($_GET['login']) &&  $_GET['login'] == 'erro2'){ ?>
							<div class="error"> Faça login antes de acessar as páginas protegidas</div>
						<?php } ?>

						<div>
							<button type="submit">Entrar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</body>
</html>