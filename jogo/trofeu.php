<html> 
<head> 


<script> 
var btn1 = new Audio();
btn1.src = "narracao/continuar.ogg";
</script> 
<style type="text/css">

.background{
	
<?php $pontos = $_GET["pontos"]; 
if ($pontos < 35) { echo " background-image: url('imagens/bronze.png'); ";}
else if ($pontos >= 35 && $pontos < 70) { echo " background-image: url('imagens/prata.png'); ";}
else if ($pontos >= 70) { echo " background-image: url('imagens/ouro.png'); ";} ?>

	background-repeat: no-repeat;
    background-size:100%;
}
  
  #botaocss {
	font-family: Arial, Trebuchet MS; 
	font-size: 20px; 
	width: 250px; 
	position: relative;
	top: 525px;
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

<?php $pontos = $_GET["pontos"]; 
if ($pontos < 35) { echo "
<audio id='audio' autoplay>
   <source src='narracao/bronze.ogg' type='audio/mp3' />
</audio>";}
else if ($pontos >= 35 && $pontos < 70) { echo "
<audio id='audio' autoplay>
   <source src='narracao/prata.ogg' type='audio/mp3' />
</audio>";}
else if ($pontos >= 70) { echo "
<audio id='audio' autoplay>
   <source src='narracao/ouro.ogg' type='audio/mp3' />
</audio>";} ?>

<div id="botaocss">
<a href="final.php" title="Clique aqui para jogar" onmouseover="btn1.play()">CONTINUAR</a></div>


</body>
</html> 
