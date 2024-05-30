<?php 
	session_start();
	print_r($_SESSION);

	// unset($array[index]) destroy o indice especificado, poderia ser usado para realizar o logof

	// session_destroy() Destroy todos os valores da variável session, os efeitos dessa destruição
	// só é possivel ser notado em uma nova requisição então após isso deve se redirecionar a página

	session_destroy();
	header('Location:index.php');
?>