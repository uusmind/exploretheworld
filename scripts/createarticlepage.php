<?php 
function createarticlepage($artid){
	include '../scripts/sessionstart.php';
	include '../scripts/articleparse.php';
	include '../scripts/getsetarticle.php';
	$content = getarticle($artid);

	echo '<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Explore The World</title>
		<link rel="stylesheet" href="/css/meyerweb.css"/>
		<link rel="stylesheet" href="/css/articlestyle.css"/>';

	echo 	'<style>
	body{
	/*background-color: #f22;*/
	background: url("' . $content['imgurl'] .'");
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center;}
	</style>';

	if(($content['imgurl']==null) or ($content['imgurl']=="")){
			echo '<link rel="stylesheet" href="/css/nonimg.css"/>';
		} 
	echo "</head><body>";
	echo '<header>
		<h1><span> ' . $content['author'] . '</span></h1>
		<div class="clear"></div>';

	if(!($content['ainfo']==null) and !($content['ainfo']=="")){
			echo '<p><span>' . $content['ainfo'] . '</span></p>
		<div class="clear"></div>';
		}
	if($content['privat']==0){
			echo '<p id=e" ><a href="mailto:' . $content['email'] . '">' . $content['email'] . '</a></p>';
		}
		
	echo '</header>
	<div class="contfootwrap">
		<div class="content_wrapper">
			<div class="content">';
	echo articleparse($content['article']);

	echo '</div>

			</div>
			<footer>
				<div class="inline"><a href="/index.php"><h1>Explore The World</h1></a></div>
				<div class="inline" id="copyright">
					<p>Creatred by Yakov Yusipenko</p>
					<p>Contact me <a href="mailto:myemail@explore.world">myemail@explore.world</a></p>
				</div>
			</footer>
			
		</div>


	</body>
	</html>';
	}
	?>