<?php 
	include 'scripts/sessionstart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Explore the World</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<script src="scripts/jquery-1.12.0.min.js"></script>
	<script src="scripts/owl.carousel.min.js"></script>
	<script src="scripts/custom.js"></script>
</head>
<body>
	<div id="page_wrapper">
		
		<div id="header_wrapper">
			<div id="header_sitename">
				<a href="index.php"><h1>Explore the World</h1></a>
			</div>
			<div id="nav_wrapper">
				<nav>
					<ul>
						<li><a href=""><div id="nav_box">GO</div></a></li>
						<li><a href=""><div id="nav_box">LISTEN</div></a></li>
						<li><a href=""><div id="nav_box">READ</div></a></li>
					</ul>
				</nav>
			</div>
			<div id="ad_wrapper">
				<div id="ad">
					<h1>Lorem ipsum dolor sit amet, </h1> 
					<p>adipisicing elit. Architecto illo totam reprehenderit dolor, tempora ipsum provident mollitia, veritatis illum saepe ea ratione officiis suscipit doloremque, accusamus! Modi, dolorem, quisquam! Iure.</p>	
				</div>	
			</div>		
		</div>

		<div id="content_wrapper">

			<div id="banner_wrapper">
				<div class="owl-carousel">
					<div class="banner_item">
						<div class="bi_text" id="red">
							<h1>Paris, France</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque nisi eveniet temporibus cumque quam sed corporis officiis, nulla sunt nemo inventore quod reiciendis officia, quis totam doloribus voluptatem. Reiciendis.</p>
						</div>
						<div class="bi_img">
							<img src="imgs/Paris, France.jpg">
						</div>
					</div>
					<div class="banner_item">
						<div class="bi_text" id="orange">
							<h1>Brussels, Belgium</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ipsam soluta, illum possimus exercitationem, velit error eveniet, voluptates assumenda cum id odio iure. Voluptatem explicabo quasi possimus, hic et aut?</p>
						</div>
						<div class="bi_img">
							<img src="imgs/Brussels, Belgium.jpg">
						</div>
					</div>
					<div class="banner_item">
						<div class="bi_text" id="grey">
							<h1>Kyoto, Japan</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum numquam consequuntur, vitae id laboriosam earum sint laudantium, eveniet ipsa voluptates eaque dolorem quidem eius quo. Quod saepe beatae nulla ratione?</p>
						</div>
						<div class="bi_img">
							<img src="imgs/Kyoto, Japan.jpg" >
						</div>
					</div>
					<div class="banner_item">
						<div class="bi_text" id="orange">
							<h1>Stockholm, Sweden</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ipsam soluta, illum possimus exercitationem, velit error eveniet, voluptates assumenda cum id odio iure. Voluptatem explicabo quasi possimus, hic et aut?</p>
						</div>
						<div class="bi_img">
							<img src="imgs/Stockholm, Sweden.jpg" >
						</div>
					</div>
				</div>
			</div>

			<div id="left_col">
				<div class="color_box" id="red">
					<a href="https://geoguessr.com/"><h1>GEOGUESSER</h1></a>
				</div>
				<div class="color_box" id="orange">
					<a href="http://www.travelchannel.com/"><h1>TRAVELCHANEL</h1></a>
				</div>			
				<div class="color_box" id="grey">
					<a href="http://travel.ua/"><h1>TRAVEL UA</h1></a>
				</div>	
				<div class="video_wrapper">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/IyTv_SR2uUo" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="color_box" id="orange">
					<a href="http://www.nomadicmatt.com/"><h1>NOMADIC MATT</h1></a>
				</div>
			</div>

			<div id="right_col" >
				<div class="color_box" id="black">
					<a href="http://www.ourawesomeplanet.com/"><h1>OUR AWSOME PLANET</h1></a>
				</div>	
				<div class="articles">

					<?php 
					include 'scripts/getsetarticle.php';
					$id = getlastid();
					for($i=$id; $i>$id-4; $i--){
						printheader($i);
					}

					?>

				</div>			
			</div>			
			<div id="cleared"></div>
		</div>
		<footer>
			<div class="inline"><a href="index.php"><h1>Explore The World</h1></a></div>
			<div class="inline" id="copyright">
				<p>Creatred by Yakov Yusipenko</p>
				<p>Contact me <a href="mailto:myemail@explore.world">myemail@explore.world</a></p>
			</div>
		</footer>
	</div>
</body>
</html>
