<?php include 'inc/header.php'; ?>
<section class="container">
	<img id="transparentImg" src="images/img-map.gif" usemap="#mapPrdMenu" alt="transparent" width="500" height="718"  title="" /><!--b64 wont work here!!! (R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw==)-->
	<div id="prdHome">Product Home</div>
	<map name="mapPrdMenu" id="mapPrdMenu">
		<area id='prdHomeMap' shape="poly" coords="364, 10, 124, 148, 124, 280, 368, 138" href="#" alt="" title="" />
	</map>

	<section class="logo"></section>
	<section class="left-col left">
		<?php include "inc/menus.php"; ?>
	</section>
	<section class="right-col">
		<section class="pics_right">
			<section class="product-menu">
				<div class="prd1">
					<div class="rlt">
						<div class="bg-img1"></div>
						<div class="fg-img"></div>
						<a class="pic1">shopping</a>
					</div>
				</div>
				<section class="prd-hover">
					<div class="prd1-hover"></div>
				</section>
				<div class="prd2">
					<div class="rlt">
						<div class="bg-img2"></div>
						<div class="fg-img"></div>
						<a class="pic2">exhibition</a>
					</div>
				</div>
				<section class="prd-hover">
					<div class="prd2-hover"></div>
				</section>
				<div class="prd3">
					<div class="rlt">
						<div class="bg-img3"></div>
						<div class="fg-img"></div>
						<a class="pic3">home</a>
					</div>
				</div>
				<section class="prd-hover">
					<div class="prd3-hover"></div>
				</section>
				<div class="prd4">
					<div class="rlt">
						<div class="bg-img4"></div>
						<div class="fg-img"></div>
						<a class="pic4">office</a>
					</div>
				</div>
				<section class="prd-hover">
					<div class="prd4-hover"></div>
				</section>
			</section>
		</section>
	</section>
</section>
<?php include 'inc/footer.php'; ?>