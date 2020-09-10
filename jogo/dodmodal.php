<!DOCTYPE HTML> 
<html> 
<head> 
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #00BFFF;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>

<script> 

function allowDrop(ev) { 
     ev.preventDefault(); 
} 

function drag(ev) { 
     ev.dataTransfer.setData("text", ev.target.id); 
} 

function drop(ev) { 
     ev.preventDefault(); 
     var data = ev.dataTransfer.getData("text"); 
     ev.target.appendChild(document.getElementById(data)); 
} 


</script> 

<style type="text/css">
  #div1{
    width:200px;
    height:200px;
    border:solid 0px;
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
    border:solid 0px;
    border-radius:20px;
	position: absolute;
	top: 310px;
	right: 150px;
	width:200px;
	height:200px;
	
  }
  #div3{
    width:200px;
    height:200px;
    border:solid 0px;
    border-radius:20px;
	position: absolute;
	top: 560px;
	right: 143px;
	width:200px;
	height:200px;
	
  }
  
  .background{
	background-image: url('imagens/Fase_1/fase1.png');
    background-repeat: no-repeat;
    background-size:100%;
	
  }
  
  .gif{
	position: absolute;
	top: 20px;
	right: 650px;
  }
  
  .radios{
	display: none;
  }
  
  .botao{
	position: absolute;
	top: 365px;
	right: 30px;
	width:100px;
	height:50px;	
	border-radius: 5px;
	text-shadow: 0px 1px 0px #111111; 
	text-align: center;
	background-color: #00BFFF;
	border: solid 1px #000000;
	box-shadow: 0px 2px 3px #A9A9A9;

  }
  
  input[type=submit]:hover{ 
         background: #9D68B0; border:1px solid #000000;
}
  
  .btn-sair{
	position: absolute;
	top: 181px;
	right: 430px;
	width:100px;
	height:40px;	
  }
  
  .btn-continuar{
	position: absolute;
	top: 181px;
	right: 80px;
	width:100px;
	height:40px;

  }
  
  .btn-oculto{
	position: relative;
	right: 80px;
	top:10px;
		
  }
  
  #botaocss {
	font-family: Arial, Trebuchet MS; 
	font-size: 20px; 
	width: 200px; 
	position: relative;
	top: 35px;
	left: 30px;
}
#botaocss a {
	display: block; 
	background: #8B0000;
	color: #FFFFFF; 
	text-shadow: 0px 1px 0px #111111; 
	text-align: center; 
	border: solid 1px #538C17; 
	border-radius: 5px; 
	box-shadow: 0px 2px 3px #A9A9A9; 
	padding: 10px 20px 10px 20px; 
	margin: 0px 0px 0px 0px; 
	text-decoration: none; 
}
#botaocss a:visited {
	background: #8B0000;
	border: solid 1px #804B80; 
}
#botaocss a:hover {
	background: #FF0000; 
	border: solid 1px #000000; 
	box-shadow: 0px 2px 3px #808080; 
}
#botaocss a:focus {
	background: #FF4747; 
	border: solid 1px #CC2626;
}

#botaocss2 {
	font-family: Arial, Trebuchet MS; 
	font-size: 20px; 
	width: 200px; 
	position: relative;
	top: -40px;
	left: 350px;
}
#botaocss2 a {
	display: block; 
	background: #006400;
	color: #FFFFFF; 
	text-shadow: 0px 1px 0px #111111; 
	text-align: center; 
	border: solid 1px #538C17; 
	border-radius: 5px; 
	box-shadow: 0px 2px 3px #A9A9A9; 
	padding: 10px 20px 10px 20px; 
	margin: 0px 0px 0px 0px; 
	text-decoration: none; 
}
#botaocss2 a:visited {
	background: #006400;
	border: solid 1px #804B80; 
}
#botaocss2 a:hover {
	background: #32CD32; 
	border: solid 1px #000000; 
	box-shadow: 0px 2px 3px #808080; 
}
#botaocss2 a:focus {
	background: #FF4747; 
	border: solid 1px #CC2626;
}

#botaocss3 {
	font-family: Arial, Trebuchet MS; 
	font-size: 20px; 
	width: 500px; 
	hieght: 100px;
	position: relative;
	top: -15px;
	left: 30px;
}
#botaocss3 a {
	display: block; 
	background: #8B0000;
	color: #FFFFFF; 
	text-shadow: 0px 1px 0px #111111; 
	text-align: center; 
	border: solid 1px #538C17; 
	border-radius: 5px; 
	box-shadow: 0px 2px 3px #A9A9A9; 
	padding: 10px 20px 10px 20px; 
	margin: 0px 0px 0px 0px; 
	text-decoration: none; 
}
#botaocss3 a:visited {
	background: #8B0000;
	border: solid 1px #804B80; 
}
#botaocss3 a:hover {
	background: #FF0000; 
	border: solid 1px #000000; 
	box-shadow: 0px 2px 3px #808080; 
}
#botaocss3 a:focus {
	background: #FF4747; 
	border: solid 1px #CC2626;
}

.imagem_modal{
	border: solid 1px #000000; 
	border-radius: 10px; 
	box-shadow: 1px 2px 3px #000000; 
}
  
</style>
  
</head> 
<body class="background"> 

<form action="inserir2.php" method="post">

<img src="imagens/Fase_1/gif1.gif" width="300" height="300" class="gif">

<label>
<li id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" for="1">

<input class="radios" type="radio" id="1" value="1" name="opcao">

<img id="drag1" name="img1" src="imagens/Fase_1/vara1.png" draggable="false" 
ondragstart="drag(event)" width="120" height="150">
 
</li>
</label> 

<br><br>

<label>
<li id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" for="2"> 

<input class="radios" type="radio" id="2" value="2" name="opcao">

<img id="drag2" name="img2" src="imagens/Fase_1/boia1.png" draggable="false" 
ondragstart="drag(event)" width="160" height="120"> 

 </li> 
</label>

<br><br>

<label>
<li id="div3" ondrop="drop(event)" ondragover="allowDrop(event)" for="3">

<input class="radios" type="radio" id="3" value="3" name="opcao">

<img id="drag2" name="img2" src="imagens/Fase_1/peixe1.png" draggable="false" 
ondragstart="drag(event)" width="150" height="100"> 
 </li> 
</label>

<br><br>

<input class="botao" type="submit" value="VERIFICAR">

</form>



<?php

include ("conexao.php");

$compara = "SELECT Valor_Valorradio FROM fase_1 INNER JOIN opcao_fase_1 ON fase_1.Valor_Valorradio=opcao_fase_1.Valor_ValorCerto";

$result = mysqli_query($conexao,$compara);

$num_rows = mysqli_num_rows($result);
?>

<?php
if($num_rows) {?>
	
<audio id="audio" autoplay>
   <source src="musicas/levelup.mp3" type="audio/mp3" />
</audio>

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
        <div class="modal-body" align="center">
		 <img src="imagens/Fase_1/fase1_ok.png" width="500" height="300" align="center" class="imagem_modal">
          <h3 align="center"> Você conseguiu salvar a criança! </h3>
        </div>
        <div class="modal-footer">
			
          <div id="botaocss">
			<a href="inicio.php" title="Clique aqui para sair">SAIR</a></div>	
		
		  <input class="btn-oculto" type="radio" value="Continuar"> 

		  <div id="botaocss2">
			<a href="fase2.php" title="Clique aqui para jogar">CONTINUAR</a></div>
		  
        </div>
      </div>
    </div>
  </div> 
 
      
  
 <?php } 

else { ?>

<audio id="audio" autoplay>
   <source src="musicas/gameover.mp3" type="audio/mp3" />
</audio>

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
			
          
		
		  <input class="btn-oculto" type="submit" value="Continuar">  
		  
		  <div id="botaocss3">
			<a href="inicio.php" title="Clique aqui para sair">SAIR</a></div>
		  
        </div>
      </div>
    </div>
  </div>

<?php
}


?> 

</body> 
</html>