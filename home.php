<!DOCTYPE html>

<?php 
	session_start();

	if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NAO')
	{
		header('Location:index.php?login=erro2');
	}
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		<div class="head">
			<h1> App Help Desk </h1>
		</div>

		<div class="Menu">
	
			<div><a href="">Abrir chamado</a></div>
			<div><a href="">Localizar chamado</a></div>
		</div>

	</body>
</html>