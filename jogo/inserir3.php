<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_queda (Valor_Valorradio8) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase3modal.php?pontos=$pontos");
}
else 
{
	echo "Erro";
}


?>