<?php require_once 'validador_acesso.php' ?>

</!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Abrir Chamado</title>
		<link rel="stylesheet" type="text/css" href="./css/abrir_chamado.css">
	</head>
	<body>
		<div class="header">
			<h1>App Help Desk</h1> 
		</div>

		<div class="body-content">
			<div class="container-form">
				<div class="head-form">
					<h3>Abrir Chamado</h3>
				</div>
				<div class="body-form">
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

						<div class="container-buttons">
							<a href="home.php">Voltar</a>
							<button type="submit">Abrir</button>
						</div>

						<?php if(isset($_GET['chamado']) && $_GET['chamado'] == 'feito'){?>

							<div>
								O chamado foi feito com sucesso, em breve responderemos.  
							</div>

						<?php }?>

					<form>

				</div>
			</div>
		</div>
	</body>
</html>