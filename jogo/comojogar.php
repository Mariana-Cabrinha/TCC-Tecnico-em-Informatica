<!DOCTYPE HTML> 
<html> 
<head> 
<script> 
var btn1 = new Audio();
btn1.src = "narracao/jogar.ogg";	
</script> 
<style type="text/css">

.background{
	background-image: url('imagens/comojogar/1.png');
    background-repeat: no-repeat;
    background-size:100%;
  }

#botaocss {
	font-family: Arial, Trebuchet MS; 
	font-size: 20px; 
	width: 250px; 
	position: fixed;
	top: 525px;
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

.video{
	position: relative;
	top: 212px;
}
</style>
</head>

<body class="background">

<audio autoplay loop id="fundo" src="musicas/fundo.mp3" onloadstart="document.getElementById('fundo').volume=0.05"></audio>

<div align="center">
<iframe class="video" width="545" height="300" src="https://www.youtube.com/embed/XsUm9TL0EeA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		
</div>
<div id="botaocss">
<a href="fase1.php?pontos=100" title="Clique aqui para jogar" onmouseover="btn1.play()">JOGAR</a></div>
</embed>
</body>
</html> 

