<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_corte (Valor_Valorradio5) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase1modal.php?pontos=$pontos");
}
else 
{
	echo "Erro";
}

?>