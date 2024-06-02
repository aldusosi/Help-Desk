<?php require_once 'validador_acesso.php' ?>

</!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Abrir Chamado</title>
		<link rel="stylesheet" type="text/css" href="./css/abrir_chamado.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	</head>
	<body>
		
		<?php require_once "./js/header.php"; ?>

		<div class="body-content ml-3">
			<div class="container-form">
				<div class="card-header bg-dark">
					<h3 class="text-light">Abrir Chamado</h3>
				</div>
				<div class="card-footer">
					<form method="post" action="registra-chamado.php">
						<div>
							<div><label name="titulo">Titulo</label></div>
							<div><input type="text" name="titulo"></div>
						</div>
						
						<div>
							<div><label name="categoria">Categoria</label></div>
							<div>
								<select name="categoria">
									<option>Criação Usuário</option>
			                        <option>Impressora</option>
			                        <option>Hardware</option>
			                        <option>Software</option>
			                        <option>Rede</option>
								</select>
							</div>
						</div>
						
						<div>
							<div><label name="descricao">Descrição</label></div>
							<div><textarea cols="450" name="descricao"></textarea></div>					
						</div>

						<div class="container-buttons mt-3">
							<a class="btn btn-outline-dark" href="home.php"><< Voltar</a>
							<button class="btn bg-dark text-light" type="submit">Abrir</button>
						</div>

						<?php if(isset($_GET['chamado']) && $_GET['chamado'] == 'feito'){?>

							<div class="text-success">
								O chamado foi feito com sucesso, em breve responderemos.  
							</div>

						<?php }?>

					<form>

				</div>
			</div>
		</div>
	</body>
</html>