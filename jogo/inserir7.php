<?php

include ("conexao.php");

$opcao = $_POST["opcao"];

$insere = mysqli_query($conexao, "INSERT INTO fase_choque (Valor_Valorradio2) VALUES ('$opcao')");

$pontos = $_GET["pontos"];

if($insere) 
{
	header("Location: fase7modal.php?pontos=$pontos");
}

else 
{
	echo "Erro";
}

?>