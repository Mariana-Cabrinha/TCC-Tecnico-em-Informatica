<?php include("conexao.php"); ?>
<?php $del = "DELETE FROM fase_acidente";
$delgo = mysqli_query($conexao, $del) or die('Erro');

$del2 = "DELETE FROM fase_afogamento";
$delgo2 = mysqli_query($conexao, $del2) or die('Erro');

$del3 = "DELETE FROM fase_animal";
$delgo3 = mysqli_query($conexao, $del3) or die('Erro');

$del4 = "DELETE FROM fase_choque";
$delgo4 = mysqli_query($conexao, $del4) or die('Erro');

$del5 = "DELETE FROM fase_convulsao";
$delgo5 = mysqli_query($conexao, $del5) or die('Erro');

$del6 = "DELETE FROM fase_corte";
$delgo6 = mysqli_query($conexao, $del6) or die('Erro');

$del7 = "DELETE FROM fase_desmaio";
$delgo7 = mysqli_query($conexao, $del7) or die('Erro');

$del8 = "DELETE FROM fase_fogo";
$delgo8 = mysqli_query($conexao, $del8) or die('Erro');

$del9 = "DELETE FROM fase_queda";
$delgo9 = mysqli_query($conexao, $del9) or die('Erro');

$del10 = "DELETE FROM fase_queimadura";
$delgo10 = mysqli_query($conexao, $del10) or die('Erro');

header("location:inicio.php"); ?>