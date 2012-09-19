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
	<script type="text/javascript" src="scripts/1utils.js" ></script>
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
<div class="background"></div>
<div class="lines"></div>
<body>