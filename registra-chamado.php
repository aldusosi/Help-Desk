<?php 
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	

	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);


	$texto = $titulo."#".$categoria."#".$descricao.PHP_EOL; // PHP_EOL indica a fim na linha 

	// Abrindo o arquivo
	$arquivo = fopen('arquivo.hd', 'a');

	// Escrevendo o texto
	fwrite($arquivo, $texto);

	// fechando o arquivo
	fclose($arquivo);

	header('Location:abrir_chamado.php?chamado=feito');

?>