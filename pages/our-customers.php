<?php inc('header'); ?>
<section class="container">
	<?php inc('left-side'); ?>
	<?php inc('menus'); ?>
</section>
	<section class="right-col">
		<div class="right-inside overFlowHidden">
			<div class="customer_title">
				<h4 class="left">our customers</h4>
				<div class="line"></div>
				<div class="desc left">
					We genuinely like our clients not because they are paying their bills, because we do not display our clients personality, which in turn will encourage us to make things more memorable.<br /><br />
					Customers who have the honor of working with some of them:
				</div>
			</div>
			<div class="top-arrow"></div>
			<div class="bot-arrow"></div>
			<div class="customer_scroll">
				<?php for($i=0;$i<10;$i++){ ?>
				<div class="customer_container cover">
					<div class="left_panel left">Coca-Cola (Khoshgovar)
Chuckles &amp; Crunchips
Caspian mode commercial complex
Qatar airways
Pepsi
Padide
Iran Khodro
Maskan sazan
Cheetoz
Pars opal
Parsis
Yves rocher
					</div>
					<div class="right_panel" style="background-image: url('images/our-custumers.png');"></div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php include inc('background'); ?>
</section>
<?php include inc('footer'); ?>