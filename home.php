<!DOCTYPE html>

<?php 
	session_start();

	if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NAO')
	{
		header('Location:index.php?login=erro2');
	}

	echo 'AUTENTICADO'; 
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		HOME
	</body>
</html>