<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title>Zigorat | <?php echo $title ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
	<link rel="apple-touch-icon-precomposed" type="image/png" href="images/icon.png" /> 
	<link rel="stylesheet/less" type="text/css" href="style.less" />
	<script type="text/javascript" src="scripts/html5shiv.js"></script>
	<script type="text/javascript" src="scripts/less.js"></script>
	<script type="text/javascript">document.write('<script type="text/javascript" src=scripts/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>');</script>
	<script type="text/javascript" src="scripts/script.js" ></script>
	<script type="text/javascript">
		$(function(){
			try{
				pagejs("<?php echo $page; ?>");
			}catch(e){
				console.log(e);
			}
		});
	</script>
</head>
<body class="<?php echo $page; ?>">
<section class="fullscreen-container">
	<section class="btns">
		<ul class="info">
			<li>
				<a href="#">
					<img src="images/i.png" alt="information" />
				</a>
			</li>
			<li>
				<a href="#">
					<img src="images/pc.png" alt="pc" />
				</a>
			</li>
			<li>
				<a href="#">
					<img src="images/close.png" alt="close" />
				</a>
			</li>
		</ul>
		<div class="next"></div>
		<div class="back"></div>
	</section>
	<section class="fullimg">
		<?php
			$images_path = 'images/fullscren-images/home';

			$images = scandir($images_path);
			foreach($images as $img){
				$img_arr = explode('.', $img);
				$img_type = strtolower( end($img_arr) );
				if ($img_type=='jpg') {
					echo "<div style=\"background-image:url('$images_path/$img');\"></div>";
				}
			}
		?>
	</section>
	<section class="top-desc active">
		<div class="desc-content">
			<p>Zigorat Group <br /> officially started its activities in 2006 having young specialists in the design and implementation of the architecture, interior design and construction of exhibition stands has started. The company has been involved in various projects and by working with the top brands in the world able to leave his brilliant career.</p>
		</div>
		<div class="desc-bot"></div>
		<div class="close"></div>
	</section>
	<section class="descriptions">
		<div class="left-line"></div>
		<div class="prj-name">project name</div>
		<div class="right-line"></div>
		<div class="counter">01/06</div>
	</section>
</section>
</body>
</html>