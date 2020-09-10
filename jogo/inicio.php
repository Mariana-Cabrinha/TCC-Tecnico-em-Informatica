<!DOCTYPE HTML> 
<html> 
<head> 
<script> 
var btn1 = new Audio();
btn1.src = "narracao/comojogar.ogg";
</script> 
<style type="text/css">

.background{
	background-image: url('imagens/Inicio/inicio.png');
    background-repeat: no-repeat;
    background-size:100%;
  }

#botaocss {
	font-family: Arial, Trebuchet MS; 
	font-size: 20px; 
	width: 250px; 
	position: fixed;
	top: 400px;
	left: 462px;
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
</style>
</head>

<body class="background">

<audio autoplay loop id="fundo" src="musicas/fundo.mp3" onloadstart="document.getElementById('fundo').volume=0.05"></audio>
<embed src="narracao/comecarjogar.ogg" hidden="true" loop="infinite" autostart="TRUE">

<div id="botaocss" align="center">
<a href="comojogar.php" title="Clique aqui para jogar" id="btn" onmouseover="btn1.play()">SAIBA COMO JOGAR</a></div>
</embed>
</body>
</html> 
