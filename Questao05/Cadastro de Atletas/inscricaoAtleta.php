<?php
	$info = $_GET; //recebe os dados
	$info = implode(" / ", $info); //criação de array
	$ficha = fopen("atletas.txt", "a+"); //arquivo txt
	fwrite($ficha, $info."\n"); //escrevendo dados no arquivo
	fclose($ficha); //fechando arquivo
	header("location: fichaAtletas.php"); //redirecionar para a tabela com a listagem

?>

