<!DOCTYPE html>
<?php include("conexao.php"); ?>
<?php $Blog_Codigo = $_GET["Blog_Codigo"];
$query = mysql_query("SELECT * FROM blog INNER JOIN blogimg ON Blog_Codigo = BlogIMG_Blog_Codigo WHERE Blog_Codigo = $Blog_Codigo");
$sql = mysql_fetch_array($query)?>
<html class="no-js">
	<head>
		<title>Design - <?php echo $sql["Blog_Nome"]?></title>
		<meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="Your Website Title" />
		<meta property="og:description"   content="Your description" />
		<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
		<?php include ("estrutura1.php") ?>
		<?php include ("estrutura1noticias.php") ?>
		<div class="fb-like" data-href="https://127.0.0.1:81/Major/blog-post.php?Blog_Codigo=<?php echo $sql['Blog_Codigo']?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
		
		<div class="fb-share-button" data-href="https://127.0.0.1:81/Major/blog-post.php?Blog_Codigo=<?php echo $sql['Blog_Codigo']?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F127.0.0.1%3A81%2FMajor%2Fblog-post.php%3FBlog_Codigo%3D<?php echo $sql['Blog_Codigo']?>&amp;src=sdkpreparse">Compartilhar</a></div>
		
		<div class="fb-send" data-href="https://127.0.0.1:81/Major/blog-post.php?Blog_Codigo=<?php echo $sql['Blog_Codigo']?>"></div>
		<div class="col-sm-8">
			<div class="blog-post blog-single-post">
				<div class="single-post-title">
					<h2><?php echo $sql["Blog_Nome"]?></h2>
				</div>
				<div class="single-post-image">
					<img src="admin/images/<?php echo $sql["BlogIMG_IMG"]?>" alt="Post Title">
				</div>
				<div class="single-post-content">
					<font size="4">
						<?php echo $sql["Blog_Corpo"]?>
					</font>
				</div>
			</div>
			<div class="fb-comments" data-href="https://127.0.0.1:81/Major/blog-post.php?Blog_Codigo=<?php echo $sql['Blog_Codigo']?>" data-width="750" data-numposts="5"></div>
		</div>
		<?php include ("estrutura2noticias.php") ?>
		<?php include("estrutura2.php"); ?>
		<div id="fb-root"></div>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>