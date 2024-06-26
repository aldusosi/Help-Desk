<?php 
	require_once 'validador_acesso.php'; 

	$arquivo = fopen('arquivo.hd', "r");

	$chamados = array();

	while(!feof($arquivo))
	{
		$registro = fgets($arquivo);

		$chamados[] = $registro;
		
		
	};

	fclose($arquivo);

	//fread($arquivo, filesize($arquivo));
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Consultar Chamado</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	</head>

	<body>

		<?php require_once "./js/header.php"; ?>

		<div class="body-chamado">
			<div class="container-consultar ml-3" style="width:600px;">
				<div class="card-header bg-dark text-light">
					<h3>Consultar Chamado</h3>
				</div>
				<div class="card-footer">

					<?php foreach ($chamados as $chamado) { ?>

						<?php
							
							$chamado_dados = explode('#', $chamado);

							if(count($chamado_dados) < 3)
							continue;
						?>
							
							<div class="chamado">
							
								<h2 class=""><?= $chamado_dados[0] ?></h2>
								<h3 class="text-muted"><?= $chamado_dados[1] ?></h3>
								<p class="bg-dark p-2 text-light"><?= $chamado_dados[2] ?></p>
								<br>
								<hr>
								
							</div>
						

					<?php } ?>

				</div>
				<div>
					<a class="btn btn-outline-dark mt-3" href="home.php"><< Voltar</a>
				</div>

			</div>
		</div>
	</body>
</html>