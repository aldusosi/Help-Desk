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
		<link rel="stylesheet" type="text/css" href="./css/consultar_chamado.css">
	</head>

	<body>
		<div class="header">
			<h1>App Help Dask</h1>
		</div>
		<div class="body-chamado">
			<div class="container-consultar">
				<div class="container-head">
					<h3>Consultar Chamado</h3>
				</div>
				<div class="container-body">

					<?php foreach ($chamados as $chamado) { ?>

						<?php
							
							$chamado_dados = explode('#', $chamado);

							if(count($chamado_dados) < 3)
							continue;
						?>
							
							<div class="chamado">
							
								<h2><?= $chamado_dados[0] ?></h2>
								<h3><?= $chamado_dados[1] ?></h3>
								<p><?= $chamado_dados[2] ?></p>
								
							</div>
						

					<?php } ?>

				</div>
			</div>
		</div>
	</body>
</html>