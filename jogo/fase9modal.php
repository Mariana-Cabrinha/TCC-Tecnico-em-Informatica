<!DOCTYPE HTML> 
<html> 
	<head> 

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
	
	<!--teste do click na div-->

	$(document).ready(function(){
	$(".busca").click(function(){
	var status = $(this).attr('id');
	$(this).addClass(status);
	});

	$(document).mouseup(function(e){
	var container = $(".busca");
	if (!container.is(e.target))  
	{
	//procura elementos cuja ID começa por uma dada string, neste caso estilo
	//https://api.jquery.com/attribute-starts-with-selector/
	$('div[id^="estilo"]').removeClass(); 
	}
	});

	});


	var opcao1 = new Audio();
	opcao1.src = "narracao/chorar.ogg";	

	var opcao2 = new Audio();
	opcao2.src = "narracao/faca.ogg";	

	var opcao3 = new Audio();
	opcao3.src = "narracao/curativo.ogg";
	
	var btn1 = new Audio();
	btn1.src = "narracao/continuar.ogg";
	</script> 

	<style type="text/css">
	
	#estilo1{
	border:solid 0px;
	border-radius:100px;
	position: absolute;
	top: 13px;
	right: 119px;
	width:145px;
	height:144px;
	}
	
	.estilo1{
	box-shadow: 0 0 50px rgba(255, 255, 255, 255);
	padding: 2px 2px 2px 2px;
	<!--background-color: #87CEEB !important;-->
	}
	
	.imagem{
	margin-top:12px;
	margin-left:7px;
	}
	
	#estilo2{
	border:solid 0px;
	border-radius:100px;
	position: absolute;
	top: 206px;
	right: 119px;
	width:145px;
	height:144px;
	}

	.estilo2{
	box-shadow: 0 0 50px rgba(255, 255, 255, 255);
	padding: 2px 2px 2px 2px;
	<!--background-color: #87CEEB !important;-->
	}

	.imagem2{
	margin-top:20px;
	margin-left:0px;
	}
	
	#estilo3{
	border:solid 0px;
	border-radius:100px;
	position: absolute;
	top: 398px;
	right: 119px;
	width:145px;
	height:144px;
	}

	.estilo3{
	box-shadow: 0 0 50px rgba(255, 255, 255, 255);
	padding: 2px 2px 2px 2px;
	<!--background-color: #87CEEB !important;-->
	}

	.imagem3{
	margin-top:8px;
	margin-left:8px;
	}

	.botao{
	position: fixed;
	top: 255px;
	right: 5px;
	width:100px;
	height:50px;	
	border-radius: 5px;
	text-shadow: 0px 1px 0px #111111; 
	text-align: center;
	background-color: #00BFFF;
	border: solid 1px #000000;
	box-shadow: 0px 2px 3px #A9A9A9;
	}

	.botao2{
	position: fixed;
	top: 355px;
	right: 5px;
	width:100px;
	height:50px;	
	border-radius: 5px;
	text-shadow: 0px 1px 0px #111111; 
	text-align: center;
	background-color: #00BFFF;
	border: solid 1px #000000;
	box-shadow: 0px 2px 3px #A9A9A9;
	} 
	
	.gif{
	position: absolute;
	top: 77px;
	left: 150px;
	}

	.background{
	background-image: url('imagens/Fase_7/fase7.png');
	background-repeat: no-repeat;
	background-size:100%;

	}

	.radios{
	display: none;
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
	display: none;	
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
	top: -15px;
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
	position: relative;
	top: 8px;
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
		<script>
		$(function() {
		$("#myModal").modal();
		});
		</script>
		
		<?php $pontos = $_GET["pontos"]; ?>
		<form action="inserir9.php?pontos=<?php echo $pontos;?>" method="post">
			<img src="imagens/Fase_7/gif.gif" width="190" class="gif">
			<label onmouseover="opcao1.play()">
				<div id="estilo1" class="busca" ondrop="drop(event)" ondragover="allowDrop(event)" for="1">
					<input class="radios" type="radio" id="1" value="1" name="opcao">
					<img id="drag1" name="img1" src="imagens/Fase_7/icon1.png" draggable="false" ondragstart="drag(event)" width="113" class="imagem">
				</div>
			</label> 
			<br><br>
			<label onmouseover="opcao2.play()">
				<div id="estilo2" class="busca" ondrop="drop(event)" ondragover="allowDrop(event)" for="2"> 
					<input class="radios" type="radio" id="2" value="2" name="opcao">
					<img id="drag2" name="img2" src="imagens/Fase_7/icon2.png" draggable="false" ondragstart="drag(event)" width="140" class="imagem2"> 
				</div> 
			</label>
			<br><br>
			<label onmouseover="opcao3.play()">
				<div id="estilo3" class="busca" ondrop="drop(event)" ondragover="allowDrop(event)" for="3">
					<input class="radios" type="radio" id="3" value="3" name="opcao">
					<img id="drag3" name="img3" src="imagens/Fase_7/icon3.png" draggable="false" ondragstart="drag(event)" width="120" class="imagem3"> 
				</div> 
			</label>
			<br><br>
			<input class="botao" type="submit" value="VERIFICAR">
			<!-- Button trigger modal -->
			<button type="button" class="botao2" data-toggle="modal" data-target="#exampleModalCenter"> AJUDA </button>
			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 style="color:white;"><p class="titulo-modal"><id="exampleModalLongTitle">Como Jogar?</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<iframe class="video" width="570" height="315" src="https://www.youtube.com/embed/XsUm9TL0EeA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</form>
		
		<?php include ("conexao.php");
		$compara = "SELECT Valor_Valorradio7 FROM fase_queimadura INNER JOIN opcao_fase_queimadura ON fase_queimadura.Valor_Valorradio7=opcao_fase_queimadura.Valor_ValorCerto";
		$result = mysqli_query($conexao,$compara);
		$num_rows = mysqli_num_rows($result);
		
		if($num_rows) {?>

		<script>
		$(function() {
		$("#myModal").modal();
		});
		</script>
		
		<audio autoplay id="toque" src="musica/levelup.mp3" onloadstart="document.getElementById('toque').volume=0.1"></audio>
		<audio autoplay id="narracao" src="narracao/proximafase.ogg" onloadstart="document.getElementById('narracao').volume=0.7"></audio>

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
						<img src="imagens/Fase_7/fase7_ok.png" width="500" height="300" align="center" class="imagem_modal">
						<h3 align="center"> Você conseguiu salvar a criança! </h3>
					</div>
					<div class="modal-footer">
						<div id="botaocss">
							<a href="inicio.php" title="Clique aqui para sair">SAIR</a>
						</div>	
						<input class="btn-oculto" type="submit" value="Continuar"> 
						<div id="botaocss2">
							<script type="text/javascript">
								$(document).ready(function(){
									var pontos = <?php echo $pontos;?>;
									$("#continuar").click(function(){
										window.location.href = 'fase10.php?pontos=<?php echo $pontos;?>';
									});
								});
							</script>
							<a id="continuar" title="Clique aqui para jogar" onmouseover="btn1.play()">CONTINUAR</a>
						</div> 
					</div>
				</div>
			</div>
		</div> 

		<?php } else { ?>

		<script>
		$(function() {
		$("#myModal").modal();
		});
		</script>

		<audio autoplay id="toque" src="musica/gameover.mp3" onloadstart="document.getElementById('toque').volume=0.1"></audio>
		<audio autoplay id="narracao" src="narracao/tentar.ogg" onloadstart="document.getElementById('narracao').volume=0.7"></audio>
		
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
						<div id="botaocss3">
							<script type="text/javascript">
								$(document).ready(function(){
									var pontos = <?php echo $pontos;?>;
									$("#tentar").click(function(){
										window.location.href = 'fase9.php?pontos=<?php echo $pontos-5;?>';
									});
								});
							</script>
							<a id="tentar" title="Clique aqui para tentar novamente">TENTAR NOVAMENTE</a>
						</div>	
						<input class="btn-oculto" type="submit" value="Continuar"> 
					</div>
				</div>
			</div>
		</div>

		<?php } ?> 
	</body> 
</html>