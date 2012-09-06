<?php include 'inc/header.php'; ?>
<body>
<section class="container contact">
	<section class="logo"></section>
	<section class="left-col left">
		<?php include "inc/menus.php"; ?>
	</section>
	<section class="right-col">
		<section class="form-holder left">
			<form action="" method="post">
				<label class="label">your name : </label>
				<input type="text" name="name" />
				<br/>
				<label class="label">email : </label>
				<input type="text" name="email" />
				<br/>
				<label class="label">tel : </label>
				<input type="text" name="pNumber" />
				<br/>
				<label class="label">subject : </label>
				<input type="text" name="subject"  />
				<br/>
				<label class="label ">comment : </label>
				<textarea name="comment"></textarea>
				<input type="submit" class="ok" name="submit" value="submit"/>
			</form>
            
            <?php
				if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pNumber']) && isset($_POST['subject']) && isset($_POST['comment']) ){
					$name = $_POST['name'];
					$email = $_POST['email'];
					$pNumber = $_POST['pNumber'];
					$subject = $_POST['subject'];
					$comment = $_POST['comment'];
					if( @mail('aghasizadeh70@gmail.com',$subject,'Name: '.$name. "\n".'Phone Number: '.$pNumber. "\n".$comment,"From:info@aghasizadeh.com\nReply-To:".$email) ){
						echo '<p class"sendok">Your massage has been sent. Please be patient for the answer. thank you!</p>';
					}else{
						echo '<p class"sendnok">Your massage has not been sent. Please fill the form again. thank you!</p>';
					}
				}
			?>

		</section>
		<section class="info">
			<div class="info-pic1"></div>
			<div class="desc">
				Unit 1,No.86,Felestin 7 Ave,
				<br/>
				Felestine Blvd, Mashhad, Iran
			</div>
			<br/>
			<div class="info-pic1"></div>
			<div class="desc">
				Tel: +98 511 840 9894
				<br/>
				Fax: +98 511 842 1139
			</div>
			<br/>
			<div class="info-pic1"></div>
			<div class="desc">
				<a href="#">www.zigorat.co</a>
				<br/>
				<a href="#">info@zigorat.co</a>
			</div>
			<div class="info-pic2">
				<a href="#" >employment form</a>
			</div>
			<div class="clear"></div>
		</section>
	</section>
</section>
<?php include 'inc/footer.php'; ?>