<?php

include("Produto.php");
	//cria pessoa1
	$produto1 = new Produto(1,"35");	
	//imprime pessoa1
	//echo $pessoa1 ."<br/>";
	//cria pessoa2
	$produto2 = new Produto(3,"38");
	//muda a idade da pessoa2
	$produto2->setPreco(19);
	$json = json_encode($produto2);
	//imprime a pessoa2 com a nova idade
	echo $produto2;
	echo "<br/>";
	echo $json;
>