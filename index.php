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
					<?php
	
						$msg_error = '';

						if(isset($_GET['login']) &&  $_GET['login'] == 'erro') // isset() pode ser usado para verificar se um indice existe dentro do array
							echo '<h3 class="Error">Erro: Verifique as informações e tente novamente</h3>';
						else
							echo '<h3>Login</h3>';
					?>
				</div>

				<div class="body-form">
					<form action="valida_login.php" method="post">
						<div class="email-form">
							<input name="email" type="email" placeholder="Email">
						</div>
						<div class="senha-form">
							<input name="senha" type="password" placeholder="Senha">
						</div>
						<div>
							<button type="submit">Entrar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</body>
</html>