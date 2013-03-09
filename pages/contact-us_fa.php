<?php inc('header_fa'); ?>
<body>
<section class="container contact">
	<?php inc('left-side'); ?>
	<?php inc('menus_fa'); ?>
</section>
	<section class="right-col">
		<section class="form-holder left">
			<form action="sendmail" method="post" target='ifrm'>
				<label class="label">نام : </label>
				<input type="text" id="name" name="name" /><div class="name"></div>
				<br/>
				<label class="label">پست الکترونیکی : </label>
				<input type="text" id="email" name="email" /><div class="email"></div>
				<br/>
				<label class="label">تلفن : </label>
				<input type="text" id="pNumber" name="pNumber" /><div class="pNumber"></div>
				<br/>
				<label class="label">موضوع : </label>
				<input type="text" id="subject" name="subject"  /><div class="subject"></div>
				<br/>
				<label class="label ">متن پیام : </label>
				<textarea name="txt" id="txt"></textarea><div class="txt"></div>
				<input type="submit" class="ok" name="submit" value="ارسال"/>
			</form>
			<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
		</section>
		<section class="info">
			<div class="info-pic1"></div>
			<div class="desc">
				مشهد، فلسطین 7
				<br/>
				پلاک 86، واحد یک
			</div>
			<br/>
			<div class="info-pic1"></div>
			<div class="desc">
				 0511 840 9894 : تلفن
				<br/>
				 0511 842 1139 : فکس
			</div>
			<br/>
			<div class="info-pic1"></div>
			<div class="desc">
				<a href="#">www.zigorat.co</a>
				<br/>
				<a href="#">info@zigorat.co</a>
			</div>
			<div class="info-pic2">
				<a href="#" >فرم استخدام</a>
			</div>
			<div class="info-pic3">
				<a href="#" >دریافت کاتالوگ دیجیتال</a>
			</div>
			<div class="clear"></div>
		</section>
	</section>
	<?php inc('background'); ?>
</section>
<?php inc('footer'); ?>