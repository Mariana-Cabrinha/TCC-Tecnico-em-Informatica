<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_queimadura (Valor_Valorradio7) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase9modal.php?pontos=$pontos");
}
else 
{
	echo "Erro";
}


?>