<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_acidente(Valor_Valorradio10) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase8modal.php?pontos=$pontos");
}
else 
{
	echo "Erro";
}

?>