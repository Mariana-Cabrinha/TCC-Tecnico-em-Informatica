<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_afogamento (Valor_Valorradio) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase5modal.php?pontos=$pontos");
}
else 
{
	echo "Erro";
}


?>