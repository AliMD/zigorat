<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title>..::Zigorat::..</title>
	<link rel="stylesheet/less" type="text/css" href="underdev.less" />
	<script src="scripts/less.js" type="text/javascript"></script>
	<script type="text/javascript" src="scripts/html5shiv.js"></script>
	<script type="text/javascript"> document.write('<script type="text/javascript" src=scripts/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>'); </script>
	<script type="text/javascript" src="scripts/underdev.js"></script>
</head>
</head>
<body>
	<header></header>
	<section class='slideshow'>
		<div class="logo">
			<h1 class="indent">Zigorat</h1>
		</div>
		<div class="noise"></div>
		<section class="backimg">
			<?php
				$images_path = 'images/under';

				$images = scandir($images_path);
				$slidesLen = 0;
				foreach($images as $img){
					$img_arr = explode('.', $img);
					$img_type = strtolower( end($img_arr) );
					if ($img_type=='jpg') {
						echo "<div style=\"background-image:url('$images_path/$img');\"></div>";
						$slidesLen++;
					}
				}
			?>
		</section>
	</section>
	<footer>
		<h1><a href='./?debug=1'>U</a>nder Construction</h1>
	</footer>
</body>
</html>