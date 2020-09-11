<?php $servidor = "127.0.0.1"; $usuario = "root"; $senha = ""; $banco = "pskids";
$conexao = mysqli_connect ($servidor, $usuario, $senha) or die ("could not connect to mysql");
mysqli_select_db ($conexao, $banco) or die ("could not select database"); ?>
