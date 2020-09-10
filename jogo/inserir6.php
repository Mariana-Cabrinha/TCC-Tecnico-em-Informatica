<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_fogo (Valor_Valorradio3) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase6modal.php?pontos=$pontos");
}
else 
{
	echo "Erro";
}


?>