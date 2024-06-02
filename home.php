<!DOCTYPE html>

<?php 
	require_once 'validador_acesso.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		<?php require_once "./js/header.php"; ?>

		<h2 class="pl-3">Home</h2>

		<div class="d-flex justify-content-center gap-3">
	
			<div class="p-2"><a class="btn btn-outline-dark" href="abrir_chamado.php">Abrir chamado</a></div>
			<div class="p-2"><a class="btn btn-outline-dark" href="consultar_chamado.php">Consultar chamado</a></div>
		</div>

	</body>
</html>