<?php 
	
	session_start();

	$usuario_autenticado = false;

	$usuarios_app = array(
		array('email' => 'adm@test.com.br', 'senha' => '123456'),
		array('email' => 'user@test.com.br', 'senha' => '123456'),
	);

	foreach($usuarios_app as $user)
	{
		print_r('usuario_app: '. $user['email'].'/'.$user['senha'].'<br>');
		print_r('usuario_form: '.$_POST['email'].'/'.$_POST['senha'].'<hr>');

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'])
		{
			$usuario_autenticado = true;
		}
	}

	if($usuario_autenticado)
	{
		echo 'EXITO NA AUTENTICAÇÃO!';
		$_SESSION['autenticado'] = 'SIM';
		header('Location: home.php');
	}
	else
	{
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');	
		echo 'FALHA NA AUTENTICAÇÃO!';
	}

	/*
	echo '<pre>';

	print_r($usuarios_app);

	echo '</pre>';*/

	/*
	print_r($_POST);
	echo '<hr>';

	echo $_POST['email'];*/
?>