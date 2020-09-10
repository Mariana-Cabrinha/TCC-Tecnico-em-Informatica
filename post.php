<?php include("cabecalho3.php"); ?>
        <article id="portfolio-2" class="section portfolio">
            <div class="center-relative content-1170">
                <div class="entry-content">
                    <div class="content-wrap relative">
                        <a class="absolute x-close" href="index.php#portfolio">
                            <img src="images/icon_x.svg" alt="Close">
                        </a>

                        <script>
                            var aboutImage_speed = "500";
                            var aboutImage_auto = "true";
                            var aboutImage_hover = "true";
                        </script>
                        <div class="image-slider-wrapper relative img aboutImage">
                            <div class="caroufredsel_wrapper">
                                <ul id="aboutImage" class="image-slider slides">
                                    <li><img src="demo-images/<?php echo $row["Blog_IMG"];?>" alt=""></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="clear"></div>
                        <hr>
						<br>
                        <div class="one">
                            <h3><?php echo $row["Blog_Nome"];?></h3>
							<div align="justify">
								<?php echo $row["Blog_Corpo"];?>
							</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
<?php include("rodape.php");?>