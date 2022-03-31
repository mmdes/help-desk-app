<?php

	session_start();

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	//estamos trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']); 
	$descricao = str_replace('#', '-', $_POST['descricao']);

	$arquivo = fopen('arquivo.hd', 'a');

	//Definir o que será escrito dentro do arquivo
	//poderia simplismente usar o implode()

	$texto = $_SESSION['id'].'#'.$titulo.'#'. $categoria .'#'. $descricao .PHP_EOL;

	//Escrevendo no arquivo
	fwrite($arquivo, $texto);

	//fechando o arquivo anteriormente aberto
	fclose($arquivo);

	header('Location: abrir_chamado.php');

	

?>