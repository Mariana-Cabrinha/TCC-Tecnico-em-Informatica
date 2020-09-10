<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_convulsao (Valor_Valorradio6) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase10modal.php?pontos=$pontos");
}
else 
{
	echo "Erro";
}


?>