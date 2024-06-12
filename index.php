<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/index.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	</head>
	<body>

		<?php require_once "./js/header.php"; ?>

		<div class="body">
			<div class="container-form">

				<div class="card-header bg-dark">
					<h3 class="text-light">Login</h3>
				</div>

				<div class="card-footer bg-light">
					<form action="valida_login.php" method="post">
						<div class="from-group">
							<input class="form-control" name="email" type="email" placeholder="Email" required>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="form-group">
							<input class="form-control" name="senha" type="password" placeholder="Senha" required>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<?php if(isset($_GET['login']) &&  $_GET['login'] == 'erro'){ ?>
							<div> <p class="text-danger">Usuário ou senha inválidos</p>  </div>
						<?php } ?>

						<?php if(isset($_GET['login']) &&  $_GET['login'] == 'erro2'){ ?>
							<div class="error"> Faça login antes de acessar as páginas protegidas</div>
						<?php } ?>

						<div>
							<button class="btn btn-dark" type="submit">Entrar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</body>
</html>