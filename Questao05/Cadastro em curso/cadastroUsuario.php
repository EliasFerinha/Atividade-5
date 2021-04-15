<?php
	$dado = $_GET; //recebe os dados
	$dado = implode(" / ", $dado); //criação de array
	$ficha = fopen("inscricao.txt", "a+"); //arquivo txt
	fwrite($ficha, $dado."\n"); //escrevendo dados no arquivo
	fclose($ficha); //fechando arquivo
	header("location: listaDeInscritos.php"); //redirecionar para a tabela com a listagem

?>