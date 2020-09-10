<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_animal (Valor_Valorradio9) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase2modal.php?pontos=$pontos");
}
else 
{
	echo "Erro";
}


?>