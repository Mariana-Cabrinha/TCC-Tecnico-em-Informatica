<html> 
<head> 

<style type="text/css">

.background{
	background-image: url('imagens/Final/tela2.png');
    background-repeat: no-repeat;
    background-size:100%;
  }
  
  #botaocss {
	font-family: Arial, Trebuchet MS; 
	font-size: 20px; 
	width: 250px; 
	position: relative;
	top: 350px;
	left: 450px;
}
#botaocss a {
	display: block; 
	background: #70B02C;
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
	background: #996699;
	border: solid 1px #804B80; 
}
#botaocss a:hover {
	background: #32CD32; 
	border: solid 1px #000000; 
	box-shadow: 0px 2px 3px #808080; 
}
#botaocss a:focus {
	background: #FF4747; 
	border: solid 1px #CC2626;
}

.gif{
	position: absolute;
	top: 20px;
	right: 40px;
	
  }

</style>

</head>

<body class="background">


<audio autoplay id="fundo" src="musicas/final.mp3" onloadstart="document.getElementById('fundo').volume=0.1"></audio>

<audio id="audio" autoplay>
   <source src="narracao/final.ogg" type="audio/mp3" />
</audio>

<img src="imagens/Final/gif_fim.gif" width="1100" class="gif">

<div id="botaocss">
<a href="excluir.php" title="Clique aqui para jogar">JOGAR NOVAMENTE</a></div>

</body>
</html> 
