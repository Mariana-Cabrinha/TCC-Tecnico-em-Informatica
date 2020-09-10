<?php include("cabecalho.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Home -->
		
        <div id="home" class="section intro-page">
            <div class="block content-1170 center-relative center-text">
            </div>
        </div>
		
        <!-- Service -->
		
        <div id="services" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder left">
                    <div class="section-num">
                        <span>01</span>
                    </div>
                    <h2 class="entry-title">Pro<br>je<br>to</h2>
                </div>
				<div class="section-content-holder right">
                    <div class="content-wrapper">
                        <script>
                            var slider1_speed = "500";
                            var slider1_auto = "false";
                            var slider1_hover = "false";
                        </script>
                        <div class="image-slider-wrapper relative service slider1">
                            <ul id="slider1" class="image-slider slides">
                                <li>
                                    <div class="service-holder ">
                                        <img src="demo-images/icon_01.png" alt="">
                                        <div class="service-content-holder">
                                            <div class="service-title">DIVERSÃO</div>
                                            <div class="service-content">
                                                O Helpers é um jogo desenvolvido especialmente para proporcionar a diversão a seus jogadores! <a href="#skills">Vamos Jogar?</a><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-holder ">
                                        <img src="demo-images/icon_02.png" alt="">
                                        <div class="service-content-holder">
                                            <div class="service-title">CRIATIVIDADE</div>
                                            <div class="service-content">
                                                Todo o design do jogo possui base no Lúdico de Platão, para que as crianças possam se entreter enquanto aprendem!<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-holder ">
                                        <img src="demo-images/icon_03.png" alt="">
                                        <div class="service-content-holder">
                                            <div class="service-title">EDUCAÇÃO</div>
                                            <div class="service-content">
                                                Acreditamos que com o jogo é possível uma criança aprender a ajudar a salvar uma vida em situação de risco!<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-holder ">
                                        <img src="demo-images/icon_04.png" alt="">
                                        <div class="service-content-holder">
                                            <div class="service-title">JOGAR</div>
                                            <div class="service-content">
                                                Gostou do jogo? Ficou curioso para saber como ele funciona? Venha se tornar um ajudante! Seja um Helper! <br>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class = "clear"></div>
                        </div>

                    </div>
                </div>
                <div class='clear'></div>
            </div>
        </div>

        <!-- Portfolio -->
        <div id="portfolio" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder right">
                    <div class="section-num">
                        <span>02</span>
                    </div>
                    <h2 class="entry-title">Saiba +</h2>
                </div>
				<div class="section-content-holder portfolio-holder left">
                    <div class="grid" id="portfolio-grid">
                        <div class="grid-sizer"></div>
						<?php error_reporting(0);
						$qnt = $_GET["qnt"];
						if(isset($qnt)) { $qnt = $qnt; } else { $qnt = 3; }?>
							
						<script type="text/javascript">
						$(document).ready(function(){
							var qnt = <?php echo $qnt;?>;
							$("#mais").click(function(){
								window.location.href = 'index.php?qnt=<?php echo $qnt+2;?>#portfolio';
							});
						});

						</script>
							
						<?php $p = 1;
						$inicio = 0;
						$query = "SELECT * FROM blog ORDER BY Blog_Codigo DESC LIMIT $inicio, $qnt";
						$result = mysqli_query($conexao, $query);
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
						
						
						<div class="grid-item element-item p_one">
							<a href="post.php?Blog_Codigo=<?php echo $row["Blog_Codigo"];?>">
								<img src="demo-images/<?php echo $row["Blog_IMG"];?>" alt="">
								<div class="portfolio-text-holder">
									<div class="portfolio-text-wrapper">
										<p class="portfolio-type">
											<img src="images/icon_post.svg" alt="">
										</p>
										<p class="portfolio-text"><?php echo substr($row["Blog_Nome"], 0, strrpos(substr($row["Blog_Nome"], 0, 25), ' ')) . '...' ?></p>
									</div>
								</div>
							</a>
						</div>
						<?php } ?>
                    </div>
                    <div class="clear"></div>
                    <div class="block portfolio-load-more-holder">
                        <a id="mais" target="_self" class="more-posts">CARREGAR MAIS</a>
                        <img src="images/icon_infinity.svg" alt="Load more">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

        <!-- About -->
		
        <div id="about" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder left">
                    <div class="section-num">
                        <span>03</span>
                    </div>
                    <h2 class="entry-title">So<br>bre<br>Nós</h2>
                </div>
				<div class="section-content-holder right">
                    <div class="full-width">
                        <script>
                            var team1_speed = "400";
                            var team1_auto = "true";
                            var team1_hover = "true";
                        </script>
                        <div class="image-slider-wrapper relative team team1">
                            <a id="team1_next" class="image_slider_next" href="#"></a>
                            <div class="caroufredsel_wrapper">
                                <ul id="team1" class="image-slider slides">
                                    <li>
                                        <div class="member-content-holder">
                                            <h4 class="member-name">Lohane Camargo</h4>
                                            <p class="member-position">DOCUMENTADORA</p>
                                            <div class="member-content" align="justify">
                                                Responsável pela documentação do projeto, Lohane Camargo fez todas as pesquisas, que vai desde formulários do Google, até pesquisas relacionadas ao tema de Primeiros Socorros, e documentação geral do projeto.<br>
                                            </div>
                                        </div>
                                        <div class="member-image-holder">
                                            <img src="demo-images/Lohane.png" alt="">
                                        </div>
                                        <div class="clear"></div>
                                    </li>

                                    <li>
                                        <div class="member-content-holder">
                                            <h4 class="member-name">Mariana Cabrinha</h4>
                                            <p class="member-position">DESIGNER</p>
                                            <div class="member-content" align="justify">
                                                Responsável pela arte do projeto, incluindo o site e o jogo, Mariana Cabrinha fez toda a parte visual,  indo desde a escolha das cores e formas das fases, até as imagens do site, o slogan, os personages e a logo do projeto.<br>
											</div>
                                        </div>
                                        <div class="member-image-holder">
                                            <img src="demo-images/Mariana.png" alt="">
                                        </div>
                                        <div class="clear"></div>
                                    </li>

                                    <li>
                                        <div class="member-content-holder">
                                            <h4 class="member-name">Pamela Sousa</h4>
                                            <p class="member-position">PROGRAMADORA</p>
                                            <div class="member-content" align="justify">
												Responsável pela parte programável do jogo, estando esse na linguagem PHP, Pamela Sousa fez todo o sistema do jogo, que vai desde uma página em branco, até o projeto final, com fases, opções e pontuação.<br>
											</div>
                                        </div>
                                        <div class="member-image-holder">
                                            <img src="demo-images/Pamela.png" alt="">
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>   <!-- end full-width div -->
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!-- News -->
		
        <div id="news" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder right">
                    <div class="section-num">
                        <span>
                            04
                        </span>
                    </div>
                    <h2 class="entry-title">Da<br>dos</h2>
                </div>
				<div class="section-content-holder left">
                    <div class="content-wrapper">
						<div class="content-title-holder">
                            <p class="content-title"><font size="50">Acidentes no Brasil</font></p>
                        </div>
                        <p>Índice de mortes por acidentes de crianças e adolescentes de 0 a 14 anos no Brasil.<br> Fonte: Datasus - 2016</p>
                        <br>
                        <div class="progress_bar ">
                            <div class="progress_bar_field_holder" style="width:100%;">
                                <div class="progress_bar_title" style="color: #55B286">TRÂNSITO</div>
                                <div class="progress_bar_percent_text" style="color: #55B286">1292 (34%)</div>
                                <div class="progress_bar_field_perecent" style="background-color:#32DB8A;"></div>
                            </div>
                        </div>
						<div class="progress_bar ">
                            <div class="progress_bar_field_holder" style="width:95%;">
                                <div class="progress_bar_title" style="color: #B24564">AFOGAMENTO</div>
                                <div class="progress_bar_percent_text" style="color: #B24564">913 (24%)</div>
                                <div class="progress_bar_field_perecent" style="background-color:#E74C78;"></div>
                            </div>
                        </div>
                        <div class="progress_bar ">
                            <div class="progress_bar_field_holder" style="width:90%;">
                                <div class="progress_bar_title" style="color: #E3A536">SUFOCAÇÃO</div>
                                <div class="progress_bar_percent_text" style="color: #E3A536">826 (22%)</div>
                                <div class="progress_bar_field_perecent" style="background-color:#FFBB42;"></div>
                            </div>
                        </div>
                        <div class="progress_bar ">
                            <div class="progress_bar_field_holder" style="width:80%;">
                                <div class="progress_bar_title" style="color: #468ac7">QUEIMADURA</div>
                                <div class="progress_bar_percent_text" style="color: #468ac7">209 (5%)</div>
                                <div class="progress_bar_field_perecent" style="background-color:#4C9EE7;"></div>
                            </div>
                        </div>
						<div class="progress_bar ">
                            <div class="progress_bar_field_holder" style="width:75%;">
                                <div class="progress_bar_title" style="color: #55B286">QUEDA</div>
                                <div class="progress_bar_percent_text" style="color: #55B286">183 (4%)</div>
                                <div class="progress_bar_field_perecent" style="background-color:#32DB8A;"></div>
                            </div>
                        </div>
						<div class="progress_bar ">
                            <div class="progress_bar_field_holder" style="width:70%;">
                                <div class="progress_bar_title" style="color: #B24564">INTOXICAÇÃO</div>
                                <div class="progress_bar_percent_text" style="color: #B24564">74 (1%)</div>
                                <div class="progress_bar_field_perecent" style="background-color:#E74C78;"></div>
                            </div>
                        </div>
						<div class="progress_bar ">
                            <div class="progress_bar_field_holder" style="width:85%;">
                                <div class="progress_bar_title" style="color: #E3A536">OUTROS</div>
                                <div class="progress_bar_percent_text" style="color: #E3A536">236 (6%)</div>
                                <div class="progress_bar_field_perecent" style="background-color:#FFBB42;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!-- Video -->
		
        <div id="video" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder left">
                    <div class="section-num">
                        <span>05</span>
                    </div>
                    <h2 class="entry-title">Co<br>nhe<br>ça</h2>
                </div>
                <div class="section-content-holder right">
                    <div class="full-width">
                        <a class="video-popup-holder" href="https://www.youtube.com/watch?v=4ugwXvJinIQ" data-rel="prettyPhoto[gallery-video1]">
                            <img class="thumb" src="demo-images/video_img2.png" alt="">
                            <img class="popup-play" src="images/icon_video.svg" alt="Play">
                        </a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!-- Skills -->

        <div id="skills" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder right">
                    <div class="section-num">
                        <span>06</span>
                    </div>
                    <h2 class="entry-title">Jo<br>gar</h2>
                </div>
				<div class="section-content-holder portfolio-holder left">
                    <div class="grid" id="portfolio-grid">
                        <div class="grid-sizer"></div>
                        <div class="grid-item element-item p_one">
                            <a href="jogar.php">
                                <img src="demo-images/portfolio_item2.jpg" alt="">
                                <div class="portfolio-text-holder">
                                    <div class="portfolio-text-wrapper">
                                        <p class="portfolio-type">
                                            <img src="images/icon_play.svg" alt="">
                                        </p>
                                        <p class="portfolio-text">Helpers!</p>
                                        <p class="portfolio-sec-text">Jogar</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
<?php include("rodape.php");?>