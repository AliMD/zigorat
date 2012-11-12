<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Sending mail ...</title>
	<link rel="stylesheet/less" type="text/css" href="style.less" />
	<style type="text/css">
		body {
			background-color: transparent;
			font-family		:'myriadprocondregular';

		}

		.ok {
			color:#fff;
		}

		.err {
			color:#A11;
		}
	</style>
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);

		$admin = 'me@aligh.ir';

		$name    = $_POST['name'];
		$email   = $_POST['email'];
		$pNumber = $_POST['pNumber'];
		$subject = $_POST['subject'];
		$text    = $_POST['txt'];
			
		if( strlen($name)>=3 && strlen($email)>=7 && strlen($subject)>=5 && strlen($text)>=8 ){
			if( @mail (
					$admin,
					$subject,
					"Name: $name\nPhone Number: $pNumber\n$text",
					"From: $email")
			){
				echo '<h2 class="ok">Mail sent</h2>';
			}else{
				echo '<h2 class="err">Error in sending mail.</h2>';
			}
		}else{
			echo '<h2 class="err">Access Restricted !</h2>';
		}
	?>
</body>
</html>