<html>

<head>
	<meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body>
<?php

include ("conexao.php");

$compara = "SELECT Valor_Valorradio FROM valor2 INNER JOIN valorcerto ON valor2.Valor_Valorradio=valorcerto.Valor_ValorCerto";

$result = mysqli_query($conexao,$compara);

$num_rows = mysqli_num_rows($result);
?>
<?php
if($num_rows) {?>
	
	
	
<script>
$(function() {
$("#myModal").modal();
});
</script>
 

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">FASE CONCLUÍDA</h4>
        </div>
        <div class="modal-body">
          <p>Parabéns Jogador, você passou de fase!</p>
        </div>
        <div class="modal-footer">
          <form action="inicio.php"> <input class="btn-sair" type="submit" value="Sair"> </form>
		   
		  <form action="dod.php"> <input class="btn-continuar" type="submit" value="Continuar"> </form>
        </div>
      </div>
 
    </div>
  </div>
	
	
<?php } 

else { ?>

<script>
$(function() {
$("#myModal").modal();
});
</script>
 

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">FIM DE JOGO</h4>
        </div>
        <div class="modal-body">
          <p>Opa! Você perdeu, vamos tentar de novo?</p>
        </div>
        <div class="modal-footer">
          <form action="inicio.php"> <input class="btn-sair" type="submit" value="Sair"> </form>
        </div>
      </div>
 
    </div>
  </div>
	


<?php
}


?>
</body>

</html>

