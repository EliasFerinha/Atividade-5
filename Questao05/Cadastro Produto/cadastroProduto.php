<?php
	$info = $_POST; //recebe os dados
	$info = implode(" / ", $info); //criação de array
	$ficha = fopen("produtos.txt", "a+"); //arquivo txt
	fwrite($ficha, $info."\n"); //escrevendo dados no arquivo
	fclose($ficha); //fechando arquivo
	header("location: listaProduto.php"); //redirecionar para a tabela com a listagem

?>
