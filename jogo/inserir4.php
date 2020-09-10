<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_desmaio (Valor_Valorradio4) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase4modal.php?pontos=$pontos");
}
else 
{
	echo "Erro";
}


?>