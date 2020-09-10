<!DOCTYPE HTML> 
<html> 
<head> 

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<style type="text/css">
  #div1{
    width:200px;
    height:200px;
    border:solid 1px;
    border-radius:20px;
	position: absolute;
	top: 43px;
	right: 130px;
	width:200px;
	height:200px;
	
  }
  #div2{
    width:200px;
    height:200px;
    border:solid 1px;
    border-radius:20px;
	position: absolute;
	top: 310px;
	right: 150px;
	width:200px;
	height:200px;
	
  }
  
  .background{
	background-image: url('imagens/fundopersonagem.png');
    background-repeat: no-repeat;
    background-size:100%;
	
  }
 
</style>
  
</head> 

<body class="background"> 


<form action="inserir.php" method="post">

<label>
<li id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" for="1">

<input class="radios" type="radio" id="1" value="1" name="opcao">

<img id="drag1" name="img1" src="imagens/Fase_3/telefone.png" draggable="false" 
ondragstart="drag(event)" width="120" height="150">
 
</li>
</label> 

<br><br>

<label>
<li id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" for="2"> 

<input class="radios" type="radio" id="2" value="2" name="opcao">

<img id="drag2" name="img2" src="imagens/Fase_3/extintor.png" draggable="false" 
ondragstart="drag(event)" width="160" height="120"> 

 </li> 
</label>

<br><br>


<input class="botao" type="submit" value="Verificar">

</form>



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

    
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-flag"> </span> Parabéns!</h4>
        </div>
        <div class="modal-body">
          <h3> Você conseguiu salvar a criança! </h3>
        </div>
        <div class="modal-footer">
			
          <form action="inicio.php"> <input class="btn-sair" type="submit" value="Sair"> </form> 
		
		  <input class="btn-oculto" type="submit" value="Continuar"> 

		  <form action="dod.php"><span> <input class="btn-continuar" type="submit" value="Continuar"> </span> </form> 
		  
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
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span> </span> GAME OVER </h4>
        </div>
        <div class="modal-body">
          <h3> Você não conseguiu salvar a criança! </h3>
        </div>
        <div class="modal-footer">
			
          <form action="inicio.php"> <input class="btn-sair" type="submit" value="Sair"> </form> 
		
		  <input class="btn-oculto" type="submit" value="Continuar"> 

		  <form action="dod.php"><span> <input class="btn-continuar" type="submit" value="Continuar"> </span> </form> 
		  
        </div>
      </div>
    </div>
  </div>

<?php
}


?> 

</body> 
</html>