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
	opcao1.src = "narracao/pescar.ogg";	

	var opcao2 = new Audio();
	opcao2.src = "narracao/boia.ogg";	

	var opcao3 = new Audio();
	opcao3.src = "narracao/peixe.ogg";
	
	var btn1 = new Audio();
	btn1.src = "narracao/comecarjogo.ogg";
	
	var btn2 = new Audio();
	btn2.src = "narracao/verificar.ogg";
	
	var btn3 = new Audio();
	btn3.src = "narracao/ajuda.ogg";
	</script> 

	<style type="text/css">
	
	#estilo1{
	border:solid 0px;
	border-radius:100px;
	position: absolute;
	top: 13px;
	right: 120px;
	width:145px;
	height:145px;
	}
	
	.estilo1{
	box-shadow: 0 0 50px rgba(255, 255, 255, 255);
	padding: 2px 2px 2px 2px;
	<!--background-color: #87CEEB !important;-->
	}
	
	.imagem{
	margin-top:13px;
	margin-left:15px;
	}

	#estilo2{
	border:solid 0px;
	border-radius:100px;
	position: absolute;
	top: 206px;
	right: 120px;
	width:145px;
	height:145px;
	}

	.estilo2{
	box-shadow: 0 0 50px rgba(255, 255, 255, 255);
	padding: 2px 2px 2px 2px;
	<!--background-color: #87CEEB !important;-->
	}

	.imagem2{
	margin-top:10px;
	margin-left:10px;
	}
	
	#estilo3{
	border:solid 0px;
	border-radius:100px;
	position: absolute;
	top: 400px;
	right: 120px;
	width:145px;
	height:145px;
	}

	.estilo3{
	box-shadow: 0 0 50px rgba(255, 255, 255, 255);
	padding: 2px 2px 2px 2px;
	<!--background-color: #87CEEB !important;-->
	}

	.imagem3{
	margin-top:18px;
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
	
	
	.botao3{
	position: fixed;
	top: 455px;
	right: 22px;
	width:60px;
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
	top: 35px;
	left: 480px;
	}

	.background{
	background-image: url('imagens/Fase_1/fase1.png');
	background-repeat: no-repeat;
	background-size:100%;
	}

	.radios{
	display: none;
	}

	.personagem{
	position: absolute;
	top: 50px;
	right: 580px;
	width:300px;
	height:250px;	
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
	}

	.botao-fechar {
	font-family: Arial, Trebuchet MS; 
	font-size: 20px; 
	width: 500px; 
	position: relative;
	top: -5px;
	left: 40px;
	display: block; 
	text-shadow: 0px 1px 0px #111111; 
	text-align: center; 
	border: solid 1px #538C17; 
	border-radius: 5px; 
	box-shadow: 0px 2px 3px #1E90FF; 
	padding: 10px 20px 10px 20px; 
	margin: 0px 0px 0px 0px; 
	text-decoration: none; 
	color: #FFFFFF;
	background-color:#1E90FF
	}

	.modal-header{
	background-color:#FF1493
	}

	.titulo-modal{
	text-align: center;
	}

	</style>

	</head> 
	
	<body class="background"> 
		<script>
		$(function() {
		$("#myModal").modal();
		});
		</script>
		
		<audio autoplay loop id="fundo" src="musicas/fundo.mp3" onloadstart="document.getElementById('fundo').volume=0.05"></audio>
		<audio autoplay id="narracao" src="narracao/fase5.ogg" onloadstart="document.getElementById('narracao').volume=0.7"></audio>

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 style="color:white;"><p class="titulo-modal"><span class="glyphicon glyphicon-sunglasses"> </span>  Fase 5 - Perigo na Praia </p></h3>
					</div>
					<div class="modal-body">
						<h3>
						Socorro! O menino está se afogando! Você pode me ajudar?!<br><br>
						Nessa fase você irá aprender a como ajudar alguém que está se afogando, e para salvá-lo você deve escolher a opção correta. Vamos lá! <br><br>
						Boa Sorte!</h3>
					</div>			
					<div class="modal-footer">
						<button type="button" class="botao-fechar" data-dismiss="modal" onmouseover="btn1.play()">Começar o jogo</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php $pontos = $_GET["pontos"]; ?>
		<form action="inserir5.php?pontos=<?php echo $pontos;?>" method="post">
			<img src="imagens/Fase_1/gif2.gif" width="200" class="gif">
			<label onmouseover="opcao1.play()">
				<div id="estilo1" class="busca" ondrop="drop(event)" ondragover="allowDrop(event)" for="1">
					<input class="radios" type="radio" id="1" value="1" name="opcao">
					<img id="drag1" name="img1" src="imagens/Fase_1/vara.png" draggable="false" ondragstart="drag(event)" width="120" class="imagem">
				</div>
			</label> 
			<br><br>
			<label onmouseover="opcao2.play()">
				<div id="estilo2" class="busca" ondrop="drop(event)" ondragover="allowDrop(event)" for="2"> 
					<input class="radios" type="radio" id="2" value="2" name="opcao">
					<img id="drag2" name="img2" src="imagens/Fase_1/boia.png" draggable="false" ondragstart="drag(event)" width="122" class="imagem2"> 
				</div> 
			</label>
			<br><br>
			<label onmouseover="opcao3.play()">
				<div id="estilo3" class="busca" ondrop="drop(event)" ondragover="allowDrop(event)" for="3">
					<input class="radios" type="radio" id="3" value="3" name="opcao">
					<img id="drag3" name="img3" src="imagens/Fase_1/peixe.png" draggable="false" ondragstart="drag(event)" width="128" class="imagem3"> 
				</div> 
			</label>
			<br><br>
			<input class="botao" type="submit" value="VERIFICAR" onmouseover="btn2.play()">
			<!-- Button trigger modal -->
			<button type="button" class="botao2" data-toggle="modal" data-target="#exampleModalCenter" onmouseover="btn3.play()"> AJUDA </button>
			
			<button type="button" class="botao3" onclick="document.getElementById('narracao').volume=0.0"> <img src="imagens/mute.png" height="50"></img> </button>

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
	</body> 
</html>