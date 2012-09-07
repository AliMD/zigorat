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
				<textarea name="txt"></textarea>
				<input type="submit" class="ok" name="submit" value="submit"/>
			</form>
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